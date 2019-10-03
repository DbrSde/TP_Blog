<?php
namespace src\Model;
class Inscription {

    private $email;
    private $pseudo;
    private $mdp;
    private $role;
    private $id;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getMot_de_passe()
    {
        return $this->mdp;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setEmail($values)
    {
        $this->email = $values;
        return $this;
    }

    public function setId($values)
    {
        $this->id = $values;
        return $this;
    }

    public function setPseudo($values)
    {
        $this->pseudo = $values;
        return $this;
    }

    public function setMot_de_passe($values)
    {
        $this->mdp = $values;
        return $this;
    }

    public function setRole($values)
    {
        $this->role = $values;
        return $this;
    }



    /**
     * @return Inscription
     */

}
