<?php
namespace src\Model;

class CategoriesManager {
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


    public function getAllCategory(){
        $categories = [];
        $requete = $this->db->prepare('SELECT * FROM categories');
        $requete->execute();
        while ($donnees = $requete->fetch(\PDO::FETCH_ASSOC))
        {
            $category = new Category();


            $category->setId($donnees['id']);
            $category->setNom($donnees['nom']);
            $category->setSlug($donnees['slug']);
            
            $categories[] = $category;
        }

        return $categories;
    }

    public function add(Category $category){
        try{
            $requete = $this->db->prepare('INSERT INTO categories (nom, slug) VALUES(:nom, :slug)');
            $requete->execute([
                'nom' => $category->getNom()
                ,'slug' => $category->getSlug()
            ]);

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

    public function get($id){
        $categories = [];
        $requete = $this->db->prepare('SELECT * FROM categories where id = :postId');
        $requete->execute([
            'postId' => $id
        ]);
        $donnees = $requete->fetch(\PDO::FETCH_ASSOC);
        $category = new Category();


        $category->setNom($donnees['nom']);
        $category->setid($donnees['id']);

        // $inscriptions[] = $inscription;


        return $category;
    }

}
