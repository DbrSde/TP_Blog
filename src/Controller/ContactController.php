<?php
namespace src\Controller;

class ContactController extends AbstractController {

    private $mailer;
    private $transport;

    public function __construct()
    {
        parent::__construct();
        $this->transport = (new \Swift_SmtpTransport('smtp.mailtrap.io',25))
        ->setUsername('3dd84281bc8679')
        ->setPassword('8a9180301c670a');
        $this->mailer = new \Swift_Mailer($this->transport);

    }

    public function index(){
        $this->send();
    }

    public function send(){
        $result = null;
        if($_POST){
            $contact = ['nom'=> $_POST['nom'], 'email' =>$_POST['email'], 'message'=> $_POST['message']];
            $message = (new \Swift_Message('Contact depuis le formulaire'))
                ->setFrom([$contact['email'] => $contact['nom']])
                ->setTo(['flierville@cesi.fr'])
                ->setBody($this->twig->render('Contact/mail.html.twig',[
                    'contact' => $contact
                ]),'text/html')
            ;
            $result = $this->mailer->send($message);
        }

        echo $this->twig->render('Contact/send.html.twig');
        //require $_SERVER['DOCUMENT_ROOT'].'/../templates/Contact/send.html.php';
    }
}