<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\PostManager;

class AdminFileController extends AbstractController {

    public function __construct()
    {
        parent::__construct();
        $authentication = new LoginController();
        if(!$authentication->RoleNeeded('file')){
            header('Location: /Login/Form');
        }
    }

    public function Read(){
        $arrayDataFile = [];
        if($_POST){
            $file = 'posts.json';
            $dataFile = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/uploads/file/'.$file);
            $arrayDataFile = json_decode($dataFile);
        }

        echo $this->twig->render('AdminFile/read.html.twig',[
            'arrayDataFile' => $arrayDataFile
        ]);
    }

    public function Write(){
        $postManager = new PostManager(Bdd::getInstance());
        $postData = $postManager->getAll();

        if($_POST){
            $file = 'posts.json';
            if(!is_dir($_SERVER['DOCUMENT_ROOT'].'/uploads/file/')){
                mkdir($_SERVER['DOCUMENT_ROOT'].'/uploads/file/',0777,true);
            }
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/uploads/file/'.$file, json_encode($postData));
        }

        echo $this->twig->render('AdminFile/write.html.twig',[
            'postData' => json_encode($postData)
        ]);
    }
}