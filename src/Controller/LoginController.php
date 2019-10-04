<?php

namespace src\Controller;

use src\Model\Bdd;
use src\Model\Inscription;
use src\Model\PostManager;
use src\Model\Login;

class LoginController extends AbstractController
{

    /**
     * Formulaire de connexion
     */
    public function Form()
    {
        $arrayRememberMe = array('', '');
        if (isset($_COOKIE["rememberMeLogin"])) {
            $arrayRememberMe = json_decode($_COOKIE["rememberMeLogin"]);
        }

        echo $this->twig->render('Login/form.html.twig', [
            'arrayRememberMe' => $arrayRememberMe
        ]);

    }

    public function Inscription()
    {

        if ($_POST) {
            $inscription = new Inscription();
            $inscription->setEmail($_POST['mail']);
            $inscription->setPseudo($_POST['pseudo']);
            $inscription->setMot_de_passe($_POST['password']);

            $postManager = new PostManager(Bdd::getInstance());
            $postManager->register($inscription);
        }

        echo $this->twig->render('Login/inscription.html.twig');

    }


    // Public function Submit(){
    //         if (isset($_POST['submit'])) {
    //             $username = $_POST['login'];
    //             $secretKey = "6Lfqt7sUAAAAAP2Ot9hbFsUiMbmo-5Q47boTsCef";
    //             $responseKey = $_POST['g-recaptcha-response'];
    //             $userIP = $_SERVER['REMOTE_ADDR'];
    //
    //             $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    //             $response = file_get_contents($url);
    //             $response = json_decode($response);
    //             if ($response->success){
    //                 return true;
    //             } else {
    //                 return false;
    //             }
    //
    //         }
    //       }

    /**
     * Vérification du user / mdp
     */

    public function Check()
    {

        $login = new Login(Bdd::getInstance());
        $user = $login->userByEmail($_POST['login']);


        if (!$user || !password_verify($_POST['password'], $user['Mot_de_passe']) && $user['Valide'] == 0) {
            $errMsg = "Erreur Authentification";
            $_SESSION['errorlogin'] = $errMsg;
            header('Location: /Login/Form');
        } else {
            if (isset($_POST['remember'])) {
                setcookie('rememberMeLogin', json_encode(array($_POST['login'], $_POST['password'])), time() + (86400 * 30), "/"); // 86400 = 1 day
            }

            if($user['Role'] == 0){
                $_SESSION['login'] = array(
                    'role'  => ['admin']
                );
            }else{
                $_SESSION['login'] = array(
                    'role'  => ['redacteur']
                );
            }

            header('Location: /AdminPost/List');
        }

    }

   //  public function Check(){
   //     if($_POST){
   //         $reCaptchaIsOk = $this->Submit();
   //         if ($reCaptchaIsOk == true) {
   //
   //             $this->Submit();
   //                     if($_POST['remember']){
   //                         setcookie('rememberMeLogin', json_encode(array($_POST['login'],$_POST['password'])), time() + (86400 * 30), "/"); // 86400 = 1 day
   //                     }
   //                     if($_POST['login']=='admin' AND $_POST['password']=='password'){
   //                         $_SESSION['login'] = array(
   //                             'role'  => ['admin']
   //                         );
   //                         header('Location: /AdminPost/List');
   //                     }elseif($_POST['login']=='admin2' AND $_POST['password']=='password'){
   //                         $_SESSION['login'] = array(
   //                             'role'  => ['file','admin']
   //                         );
   //                         header('Location: /AdminPost/List');
   //                     }else{
   //                         $_POST['$response']=='$false';
   //                         $errMsg = "Erreur Authentification";
   //                         $_SESSION['errorlogin'] = $errMsg;
   //                         header('Location: /Login/Form');
   //                     }
   //         }
   //         else {
   //             header('Location: /Login/Form');
   //         }
   //         }
   // }


    /**
     * Logout de l'application
     */
    public function Logout()
    {
        unset($_SESSION['login']);
        header('Location: /');
    }

    /** Retourne TRUE si l'utilisateur a le role attendu par $role
     * @param $role
     * @return bool
     */




    public function RoleNeeded($role)
    {

        unset($_SESSION['errorlogin']);
        if (isset($_SESSION['login'])) {
            if (!in_array($role, $_SESSION['login']['role'])) {
                $errMsg = "Vous n'avez pas le role " . $role;
                $_SESSION['errorlogin'] = $errMsg;
                return false;
            } else {
                return true;
            }
        } else {
            $errMsg = "Accès interdit sans authentification";
            $_SESSION['errorlogin'] = $errMsg;
            return false;
        }

    }
}
