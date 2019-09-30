<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Post;
use src\Model\PostManager;

class Apiv1Controller {

    public function Get(){
        $postManager = new PostManager(Bdd::getInstance());
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            if(isset($_GET['search'])){
                // http://www.php.local/api/1.0/post.php?search=php
                $dataPosts = $postManager->getBy('titre',$_GET['search'] );
            }else{
                // http://www.php.local/api/1.0/post.php
                $dataPosts = $postManager->getAll();
            }
            echo json_encode($dataPosts, JSON_FORCE_OBJECT);
        }else{
            throw new \Exception('Méthode GET pour cette action !');
        }
    }

    public function Post(){
        $postManager = new PostManager(Bdd::getInstance());
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // http://www.php.local/api/1.0/post.php
            $post = new Post([
                "Titre" =>  $_POST['postTitre']
                ,"Description" => $_POST['postDescription']
                ,"DateAjout" =>$_POST['postDate']
                ,"Auteur" => $_POST['postAuteur']
                ,"ImageRepository" => Null
                ,"ImageFileName" => Null
            ]);
            $result = $postManager->add($post);
            echo json_encode($result, JSON_FORCE_OBJECT);
        }else{
            throw new \Exception('Méthode POST pour cette action !');
        }
    }

    public function Put(){
        $postManager = new PostManager(Bdd::getInstance());
        if($_SERVER['REQUEST_METHOD'] == 'PUT'){
            // http://www.php.local/api/1.0/post.php?id=203&jsonData={
            //  "Titre": "JPO CESI 2",
            //  "Description": "Journée 2 porte ouverte pour promouvoir les formations à CESI",
            //  "DateAjout": "2019-08-09",
            //  "Auteur": "Brice"
            //}
            $datas = json_decode($_GET['jsonData']);
            $post = new Post([
                "id" => $_GET['id']
                ,"Titre" =>  $datas->Titre
                ,"Description" => $datas->Description
                ,"DateAjout" => $datas->DateAjout
                ,"Auteur" => $datas->Auteur
                ,"ImageRepository" => Null
                ,"ImageFileName" => Null
            ]);
            $result = $postManager->update($post);
            echo json_encode($result, JSON_FORCE_OBJECT);
        }else{
            throw new \Exception('Méthode PUT pour cette action !');
        }
    }

    public function Delete(){
        $postManager = new PostManager(Bdd::getInstance());
        if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
            // http://www.php.local/api/1.0/post.php?id=203
            $post = $postManager->get($_GET['id']);
            $result = $postManager->delete($post);
            echo json_encode($result, JSON_FORCE_OBJECT);
        }else{
            throw new \Exception('Méthode DELETE pour cette action !');
        }
    }

}