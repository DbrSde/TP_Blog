<?php
namespace src\Model;
use PDO; // Utilsiation de USE pour éviter de faire des "\" devant chaque PDO

class Bdd {
    private static $_instance = null;
    private static $BDD_DSN = null;
    private static $_BDD_OPTS = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    );

    protected function __construct() { } // Constructeur en privé.
    protected function __clone() { } // Méthode de clonage en privé aussi et vide pour empêcher le clonage

    /**
     * @return PDO
     */
    public static function getInstance()
    {
        if(SELF::$_instance == null){
            SELF::initInstance();
        }
        return SELF::$_instance;
    }

    public static function initInstance()
    {
        try{
            $ini_array = parse_ini_file(__DIR__."\Bdd.ini", true);
            $BDD_OPTS = $ini_array['OPTIONS'];
            SELF::$BDD_DSN = $ini_array['SERVEUR']['driver'].':host='.$ini_array['SERVEUR']['host'].';dbname='.$ini_array['SERVEUR']['dbname'].';charset='.$ini_array['SERVEUR']['charset'];
            SELF::$_instance = new PDO(SELF::$BDD_DSN, $ini_array['IDENTIFIANT']['user'], $ini_array['IDENTIFIANT']['pass'], SELF::$_BDD_OPTS);
        }catch(\Exception $e){
            SELF::$_instance = 'Erreur : '.$e->getMessage();
        }

    }

    final public static function __callStatic($chrMethod, $arrArguments ) {
        return call_user_func_array(array(SELF::$_instance, $chrMethod), $arrArguments);
    }
}