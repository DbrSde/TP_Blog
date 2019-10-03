<?php
namespace src\Model;

class UserManager {
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


    public function delete(Inscription $inscription){
        try{
            $requete = $this->db->prepare('DELETE FROM inscription WHERE Id=:id');
            $requete->execute([
                'id' => $inscription->getId()
            ]);

            $return = [
                'retourCode' => 0
                ,'retourDesc' => '[OK] Suppression'
            ];
        }catch (\Exception $e){
            $return = [
                'retourCode' => 1
                ,'retourDesc' => '[ERROR] Suppression => '.$e->getMessage()
            ];
        }
        return $return;
    }

    public function getAllUsers(){
        $inscriptions = [];
        $requete = $this->db->prepare('SELECT * FROM inscription');
        $requete->execute();
        while ($donnees = $requete->fetch(\PDO::FETCH_ASSOC))
        {
            $inscription = new Inscription();


            $inscription->setEmail($donnees['Email']);
            $inscription->setPseudo($donnees['Pseudo']);
            $inscription->setRole($donnees['Role']);
            $inscription->setMot_de_passe($donnees['Mot_de_passe']);
            $inscription->setId($donnees['Id']);

            $inscriptions[] = $inscription;
        }

        return $inscriptions;
    }


    public function get($id){
        $inscriptions = [];
        $requete = $this->db->prepare('SELECT * FROM inscription where Id = :postId');
        $requete->execute([
            'postId' => $id
        ]);
        $donnees = $requete->fetch(\PDO::FETCH_ASSOC);
        $inscription = new Inscription();


        $inscription->setEmail($donnees['Email']);
        $inscription->setPseudo($donnees['Pseudo']);
        $inscription->setRole($donnees['Role']);
        $inscription->setMot_de_passe($donnees['Mot_de_passe']);
        $inscription->setId($donnees['Id']);

        // $inscriptions[] = $inscription;


        return $inscription;
    }




}
