<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Post;
use src\Model\PostManager;
//use src\Model\Login;

class AdminPostController extends AbstractController{


    public function __construct()
    {

        parent::__construct();
        $authentication = new LoginController();
        if(!$authentication->RoleNeeded('admin')){

            header('Location: /Login/Form');
        }
    }

    public function index(){
        $this->List();
    }

    public function List(){
        $postManager = new PostManager(Bdd::getInstance());
        if($_POST){
            $dataPosts = $postManager->getBy('titre',$_POST['search'] );
        }else{
            $dataPosts = $postManager->getAll();
        }

        echo $this->twig->render('AdminPost/list.html.twig',[
            'dataPosts' => $dataPosts
        ]);

    }

    public function View($id){
        if($id<>''){
            $postManager = new PostManager(Bdd::getInstance());
            $post = $postManager->get($id);

            echo $this->twig->render('AdminPost/view.html.twig',[
                'post' => $post
            ]);

        }else{
            throw new \Exception('Il manque un ID pour cette action !');
        }

    }

    public function Add(){
        if($_POST){
            // Gestion du fichier Image
            $sqlRepository = null;
            $nomImage = null;
            if( !empty($_FILES['postImage']['name']) )
            {

                $tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
                // Recuperation de l'extension du fichier
                $extension  = pathinfo($_FILES['postImage']['name'], PATHINFO_EXTENSION);
                // On verifie l'extension du fichier
                if(in_array(strtolower($extension),$tabExt))
                {
                    // On renomme le fichier
                    $nomImage = md5(uniqid()) .'.'. $extension;
                    // Création du répertoire d'acceuil
                    $dateNow = new \DateTime();
                    $sqlRepository = $dateNow->format('Y/m');
                    $repository = $_SERVER['DOCUMENT_ROOT'].'/uploads/images/'.$dateNow->format('Y/m');
                    if(!is_dir($repository)){
                        mkdir($repository,0777,true);
                    }
                    move_uploaded_file($_FILES['postImage']['tmp_name'], $repository.'/'.$nomImage);

                }
            }

            // Soumission du formulaire
            $postManager = new PostManager(Bdd::getInstance());
            $post = new Post([
                "Titre" =>  $_POST['postTitre']
                ,"Description" => $_POST['postDescription']
                ,"DateAjout" =>$_POST['postDate']
                ,"Auteur" => $_POST['postAuteur']
                ,"ImageRepository" => $sqlRepository
                ,"ImageFileName" => $nomImage
            ]);
            $result = $postManager->add($post);
            if($result['retourCode']==0){
                header('Location: /Adminpost/View/'.Bdd::getInstance()->lastInsertId());
            }else{
                throw new \Exception('Erreur ajout SQL !');
            }
        }

        echo $this->twig->render('AdminPost/add.html.twig');

    }


    public function edit($id){

        if($_POST){
            $token = $_SESSION['token'];
            $sqlRepository = null;
            $nomImage = null;
            if(!empty($_FILES['postImage']['name']) )
            {

                $tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
                // Recuperation de l'extension du fichier
                $extension  = pathinfo($_FILES['postImage']['name'], PATHINFO_EXTENSION);
                // On verifie l'extension du fichier
                if(in_array(strtolower($extension),$tabExt))
                {
                    // On renomme le fichier
                    $nomImage = md5(uniqid()) .'.'. $extension;
                    // Création du répertoire d'acceuil
                    $dateNow = new \DateTime();
                    $sqlRepository = $dateNow->format('Y/m');
                    $repository = $_SERVER['DOCUMENT_ROOT'].'/uploads/images/'.$dateNow->format('Y/m');
                    if(!is_dir($repository)){
                        mkdir($repository,0777,true);
                    }
                    move_uploaded_file($_FILES['postImage']['tmp_name'], $repository.'/'.$nomImage);
                    // suppression ancienne image si existante
                    if(strlen($_POST['postImageFull'])>1){
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/images/'.$_POST['postImageFull']);
                    }

                }
            }
            if($token == $_POST['token']) {
                // Soumission du formulaire
                $postManager = new PostManager(Bdd::getInstance());
                $post = new Post([
                    "Titre" => $_POST['postTitre']
                    , "Description" => $_POST['postDescription']
                    , "DateAjout" => $_POST['postDate']
                    , "Auteur" => $_POST['postAuteur']
                    , "ImageRepository" => $sqlRepository
                    , "ImageFileName" => $nomImage
                    , "id" => $_POST['postId']
                ]);
                // var_dump($post);
                $result = $postManager->update($post);
                if ($result['retourCode'] == 0) {
                    $update = true; // pour pouvoir rééexécuter la requete de lecture
                }
            }

        }else{
            // Génération du TOKEN (celui ne doit pas être généré lors du post sinon il ne sera jamais identique
            $token = bin2hex(random_bytes(32));
            $_SESSION['token'] = $token;
            // var_dump($token);
            // var_dump($_SESSION['token']);
        }


        if($_GET  OR $update) {
            $postManager = new PostManager(Bdd::getInstance());
            $post = $postManager->get($id);
        }else {
            throw new \Exception('Absence de paramètre pour cette action !');
        }

        echo $this->twig->render('AdminPost/edit.html.twig',[
            'post' => $post
            ,'token' => $token
        ]);
    }

    public function Delete($id){
        if($id<>''){
            $postManager = new PostManager(Bdd::getInstance());
            $post = $postManager->get($id);
            $postManager->delete($post);

            header('Location: /Adminpost/List');
        }else{
            throw new \Exception('Il manque un ID pour cette action !');
        }

    }

    public function validation (){

        echo $this->twig->render('AdminPost/validation.html.twig');

    }
}
