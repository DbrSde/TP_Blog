<?php
namespace src\Model;

class PostManager {
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

    public function add(Post $post){
        try{
            $requete = $this->db->prepare('INSERT INTO posts (titre, description, dateajout, auteur, ImageRepository, ImageFileName) VALUES(:titre, :description, :dateajout, :auteur, :ImageRepository, :ImageFileName)');
            $requete->execute([
                'titre' => $post->getTitre()
                ,'description' => $post->getDescription()
                ,'dateajout' => $post->getDateAjoutFormat()
                ,'auteur' => $post->getAuteur()
                ,'ImageRepository' => $post->getImageRepository()
                ,'ImageFileName' => $post->getImageFileName()
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

    public function delete(Post $post){
        try{
            $requete = $this->db->prepare('DELETE FROM posts WHERE Id=:id');
            $requete->execute([
                'id' => $post->getId()
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

    public function update(Post $post){
        try{
            $requete = $this->db->prepare('UPDATE posts set titre=:titre, description=:description, dateajout=:dateajout, auteur=:auteur, ImageRepository=:ImageRepository, ImageFileName=:ImageFileName WHERE id=:postId');
            $requete->execute([
                'titre' => $post->getTitre()
                ,'description' => $post->getDescription()
                ,'dateajout' => $post->getDateAjoutFormat()
                ,'auteur' => $post->getAuteur()
                ,'postId' => $post->getId()
                ,'ImageRepository' => $post->getImageRepository()
                ,'ImageFileName' => $post->getImageFileName()
            ]);

            $return = [
                'retourCode' => 0
                ,'retourDesc' => '[OK] Mise à jour'
            ];
        }catch (\Exception $e){
            $return = [
                'retourCode' => 1
                ,'retourDesc' => '[ERROR] Mise à jour => '.$e->getMessage()
            ];
        }
        return $return;
    }

    public function get($id){
        $requete = $this->db->prepare('SELECT * FROM posts where Id = :postId');
        $requete->execute([
            'postId' => $id
        ]);
        $donnees = $requete->fetch(\PDO::FETCH_ASSOC);
        return new Post($donnees);
    }

    public function getAll(){
        $posts = [];
        $requete = $this->db->prepare('SELECT * FROM posts');
        $requete->execute();
        while ($donnees = $requete->fetch(\PDO::FETCH_ASSOC))
        {
            $posts[] = new Post($donnees);
        }

        return $posts;
    }

    /**
     * @param $field
     * @param $search
     * @return Post[]
     */
    public function getBy($field,$search):array {
        $posts = [];
        $requete = $this->db->prepare('SELECT * FROM  posts where '.$field.' like :keyword');
        $keyword = '%'.$search.'%';
        $requete->bindValue(':keyword', $keyword);
        $requete->execute();
        while ($donnees = $requete->fetch(\PDO::FETCH_ASSOC))
        {
            $posts[] = new Post($donnees);
        }

        return $posts;
    }

    /**
     * @param $limit
     * @param $nbArticleParPage
     * @return Post[]
     */
    public function getPagination($limit,$nbArticleParPage):array{
        $posts = [];
        $requete = $this->db->prepare('SELECT * FROM posts ORDER BY DateAjout DESC LIMIT :limit, :maxresult');
        $requete->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $requete->bindValue(':maxresult', $nbArticleParPage, \PDO::PARAM_INT);
        $requete->execute();
        while ($donnees = $requete->fetch(\PDO::FETCH_ASSOC))
        {
            $posts[] = new Post($donnees);
        }

        return $posts;
    }

    public function getMaxPost():array {
        $requete = $this->db->prepare('SELECT count(*) as Total FROM posts');
        $requete->execute();
        return $requete->fetch();
    }
}