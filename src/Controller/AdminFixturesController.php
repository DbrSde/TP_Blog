<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Post;
use src\Model\PostManager;

class AdminFixturesController{

    public function __construct()
    {
        $authentication = new LoginController();
        if(!$authentication->RoleNeeded('admin')){
            header('Location: /Login/Form');
        }
    }

    public function Load(){
        $arrayAuteur = array('Fabien', 'Brice', 'Bruno', 'Jean-Pierre', 'Benoit', 'Emmanuel', 'Sylvie', 'Marion');
        $arrayTitre = array('PHP en force', 'React JS une valeur montante', 'C# toujours au top', 'Java en légère baisse'
        , 'Les entreprises qui recrutent', 'Les formations à ne pas rater', 'Les langages populaires en 2020', 'L\'année du Javascript');
        //Clear All TAble
        $postManager = new PostManager(Bdd::getInstance());
        $requete = Bdd::getInstance()->prepare('TRUNCATE TABLE posts');
        $requete->execute();

        for($i = 1;$i <=200; $i++){
            //ADD Data
            shuffle($arrayAuteur);
            shuffle($arrayTitre);
            $dateajout = new \DateTime();
            $dateajout->modify('+'.$i.' day');

            $post = new Post([
                "Titre" =>  $arrayTitre[0]
                ,"Description" => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).'
                ,"DateAjout" =>$dateajout
                ,"Auteur" => $arrayAuteur[0]
                ,"ImageRepository" => $this->getImageRepository()
                ,"ImageFileName" => $this->getImageFileName()
            ]);

            $result = $postManager->add($post);

        }

        header('Location: /Adminpost/List');
    }
}
