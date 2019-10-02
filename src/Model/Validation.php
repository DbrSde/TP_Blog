<?php
namespace src\Model;

class Validation {
    /**
     * @var \PDO
     */
    private  $db; // instance PDO

    // Une connexion BDD est nécessaire
    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(\PDO $db)
    {
        $this->db = $db;
    }

    public function validationLoad(){
        try{
            $requete = $this->db->execute('SELECT inscription (Email, Role, Valide, Pseudo) WHERE Validation = 0');

            $return = [
                'retourCode' => 0
                ,'retourDesc' => '[OK] Insertion'
            ];
        }catch (\Exception $e){
            $return = [
                'retourCode' => 1
                ,'retourDesc' => '[ERROR] Insertion => '.$e->getMessage()
            ];
        }
        return $return;
    }

    public function validationChange($email){
        try{
            $requete = $this->db->execute('UPDATE inscription SET Validation = 1 WHERE Email = '.$email.'');

            $return = [
                'retourCode' => 0
                ,'retourDesc' => '[OK] Insertion'
            ];
        }catch (\Exception $e){
            $return = [
                'retourCode' => 1
                ,'retourDesc' => '[ERROR] Insertion => '.$e->getMessage()
            ];
        }
        return $return;
    }
}