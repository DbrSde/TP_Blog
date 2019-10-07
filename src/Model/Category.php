<?php
namespace src\Model;
class Category {

    private $id;
    private $nom;
    private $slug;

 

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($values)
    {
        $this->nom = $values;
        return $this;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($values)
    {
        $this->id = $values;
        return $this;
    }

    public function getSlug()
    {
        return $this->slug;
    }


    public function setSlug($values)
    {
        $this->slug = $values;
        return $this;
    }





    /**
     * @return Inscription
     */

}
