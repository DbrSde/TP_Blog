<?php
session_start();
require '../vendor/autoload.php';
function chargerClasse($classe)
{
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__.'\\..';
    // Remplacement des séparateur Namespace
    $className = str_replace('\\', $ds, $classe);

    $file = "{$dir}{$ds}{$className}.php";
    if (is_readable($file)) require_once $file;
}
// enregistrement de la fonction "chargerClasse" sur une instanciation de classe
spl_autoload_register('chargerClasse');

$controller = (isset($_GET['controller'])) ? $_GET['controller'] : '';
$action = (isset($_GET['action'])) ? $_GET['action'] : '';
$param = (isset($_GET['param'])) ? $_GET['param'] : '';

if($controller <> ''){
    try {
        $class = 'src\Controller\\'.$controller.'Controller';
        if (class_exists($class)) {
            $controller = new $class();
            if (method_exists($class, $action)) {
                $controller->$action($param);
            }else{
                $controller->index(); //Remplacement du Throw new Exception
            }
        }else { throw new Exception('Le controlleur n\'existe pas pour cette action !');}
    }
    catch(Exception $e) {
        $errorMessage = $e->getMessage();
        $htmlFullErrorMessage = $e->xdebug_message;
        $abstractController = new \src\Controller\AbstractController();
        echo $abstractController->getTwig()->render('error.html.twig',[
            'errorMessage' => $errorMessage
            ,'htmlFullErrorMessage' => $htmlFullErrorMessage
        ]);
    }
}else{
    $controller = new \src\Controller\PostController();
    $controller->index();
}



