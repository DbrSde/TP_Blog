<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Post;
use src\Model\PostManager;

class PostController extends AbstractController {

    //quand on va sur www.php.local/Post tout court
    public function index(){
        $this->List(1);
        $this->Users(1);
    }

    public function List($page){
        $postManager = new PostManager(Bdd::getInstance());
        $numeroPage = 0;
        if($_POST){
            $dataPosts = $postManager->getBy('titre',$_POST['search'] );

        }else{
            $nbArticleParPage = Post::nbArticleParPage;
            if($page<>''){
                $numeroPage =$page;
                $limit = ($numeroPage - 1) * $nbArticleParPage;
                $dataPosts = $postManager->getPagination($limit,$nbArticleParPage );
            }else{
                $numeroPage = 1;
                $dataPosts = $postManager->getPagination(1,$nbArticleParPage );
            }
        }

        // Get Max Post, and Max Page
        $maxResult = $postManager->getMaxPost();
        $maxPost = $maxResult['Total'];
        $maxPage = ceil($maxPost/Post::nbArticleParPage);

        echo $this->twig->render('Post/list.html.twig',[
            'maxResult' => $maxResult
            ,'maxPost' => $maxPost
            ,'maxPage' => $maxPage
            ,'dataPosts' => $dataPosts
            ,'numeroPage' => $numeroPage
        ]);
    }

    public function Detail($id){
        if($id<>''){
            $postManager = new PostManager(Bdd::getInstance());
            $post = $postManager->get($id);

            echo $this->twig->render('Post/detail.html.twig',[
                'post' => $post
            ]);

        }else{
            throw new \Exception('Il manque un ID pour cette action !');
        }
    }

    public function Users($page){
      $postManager = new PostManager(Bdd::getInstance());
      $dataUsers = $postManager->getAllUsers();
      // var_dump($dataUsers);
      echo $this->twig->render('redacPost/list.html.twig',[
          'dataUsers' => $dataUsers
      ]);
  }
}
