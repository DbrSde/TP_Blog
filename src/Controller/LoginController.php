<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Inscription;
use src\Model\PostManager;

class LoginController extends AbstractController {

    /**
     * Formulaire de connexion
     */
    public function Form(){
        $arrayRememberMe = array('','');
        if(isset($_COOKIE["rememberMeLogin"])){
            $arrayRememberMe = json_decode($_COOKIE["rememberMeLogin"]);
        }

        echo $this->twig->render('Login/form.html.twig',[
            'arrayRememberMe' => $arrayRememberMe
        ]);

    }

    public function Inscription(){

        if ($_POST){
            $inscription = new Inscription();
            $inscription->setEmail($_POST['mail']);
            $inscription->setPseudo($_POST['password']);
            $inscription->setMot_de_passe($_POST['pseudo']);

            $postManager = new PostManager(Bdd::getInstance());
            $postManager->register($inscription);
        }

        echo $this->twig->render('Login/inscription.html.twig');

        //header('location : Login/form');


    }




    /**
     * Vérification du user / mdp
     */
    public function Check(){
        if($_POST){
            if($_POST['remember']){
                setcookie('rememberMeLogin', json_encode(array($_POST['login'],$_POST['password'])), time() + (86400 * 30), "/"); // 86400 = 1 day
            }
            if($_POST['login']=='admin' AND $_POST['password']=='password'){
                $_SESSION['login'] = array(
                    'role'  => ['admin']
                );
                header('Location: /AdminPost/List');
            }elseif($_POST['login']=='admin2' AND $_POST['password']=='password'){
                $_SESSION['login'] = array(
                    'role'  => ['file','admin']
                );
                header('Location: /AdminPost/List');
            }else{
                $errMsg = "Erreur Authentification";
                $_SESSION['errorlogin'] = $errMsg;
                header('Location: /Login/Form');
            }
        } else{
            throw new \Exception('Absence de formulaire pour cette action !');
        }

    }

    /**
     * Logout de l'application
     */
    public function Logout(){
        unset($_SESSION['login']);
        header('Location: /');
    }

    /** Retourne TRUE si l'utilisateur a le role attendu par $role
     * @param $role
     * @return bool
     */
    public function RoleNeeded($role){
        unset($_SESSION['errorlogin']);
        if(isset( $_SESSION['login'])){
            if(!in_array($role, $_SESSION['login']['role'])){
                $errMsg = "Vous n'avez pas le role ".$role;
                $_SESSION['errorlogin'] = $errMsg;
                return false;
            }else{
                return true;
            }
        }else{
            $errMsg = "Accès interdit sans authentification";
            $_SESSION['errorlogin'] = $errMsg;
            var_dump('03');
            return false;
        }

    }
}