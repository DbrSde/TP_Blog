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
}
