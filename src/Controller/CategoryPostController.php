<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Post;
use src\Model\Category;
use src\Model\CategoriesManager;

class CategoryPostController extends AbstractController{

    public function __construct()
    {

        parent::__construct();
        $authentication = new LoginController();
        if(!$authentication->RoleNeeded('admin')){

            header('Location: /Login/Form');
        }
    }

    public function index(){
        $this->Category(1);
    }

    public function Category($page){
      $categoriesManager = new CategoriesManager(Bdd::getInstance());
      $datacategories = $categoriesManager->getAllCategory();
      echo $this->twig->render('categoryPost/list.html.twig',[
          'datacategories' => $datacategories
      ]);
  }

    public function View($id){
        if($id<>''){
            $categoriesManager = new CategoriesManager(Bdd::getInstance());
            $datacategories = $categoriesManager->get($id);

            echo $this->twig->render('categoryPost/view.html.twig',[
                'datacategories' => $datacategories
            ]);

        }else{
            throw new \Exception('Il manque un ID pour cette action !');
        }

    }

    public function Add(){
        if($_POST){
        
            // Soumission du formulaire
            $categoriesManager = new CategoriesManager(Bdd::getInstance());
            $category = new Category([
                "nom" =>  $_POST['nom']
            ]);
            $categoriesManager = new CategoriesManager(Bdd::getInstance());
            $result = $categoriesManager->add($category);
        
            if($result['retourCode']==0){
                header('Location: /CategoryPost/View/'.Bdd::getInstance()->lastInsertId());
            }
            else{
                throw new \Exception('Erreur ajout SQL !');
            }
        }

        echo $this->twig->render('CategoryPost/add.html.twig');

    }

   
}
