<?php
namespace src\Controller;

class AdminController{

    public function index(){
        $AdminPostController = new AdminPostController();
        $AdminPostController->index();
    }

}