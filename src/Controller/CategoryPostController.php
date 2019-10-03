<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Post;
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
            $postManager = new PostManager(Bdd::getInstance());
            $post = $postManager->get($id);

            echo $this->twig->render('categoryPost/view.html.twig',[
                'post' => $post
            ]);

        }else{
            throw new \Exception('Il manque un ID pour cette action !');
        }

    }

   
}
