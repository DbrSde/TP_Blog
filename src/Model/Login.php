<?php

namespace src\Model;

class Login
{
    /**
     * @var \PDO
     */
    private $db; // instance PDO

    // Une connexion BDD est nécessaire
    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(\PDO $db)
    {
        $this->db = $db;
    }

    public function userByEmail($mail)
    {
        try {
            $requete = $this->db->query("SELECT * FROM inscription WHERE Email = '$mail'");
            return $requete->fetch();

        } catch (\Exception $e) {
            $return = [
                'retourCode' => 1
                , 'retourDesc' => '[ERROR] Insertion => ' . $e->getMessage()
            ];
        }
        return $return;
    }

    public function checkMDP($mdp)
    {
        try {
            $requete = $this->db->query("SELECT * FROM inscription WHERE Mot_de_passe = '$mdp'");
            return $requete->fetch();

        } catch (\Exception $e) {
            $return = [
                'retourCode' => 1
                , 'retourDesc' => '[ERROR] Insertion => ' . $e->getMessage()
            ];
        }
        return $return;
    }

}