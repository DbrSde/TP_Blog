<?php
namespace src\Model;

class Post extends Page implements \JsonSerializable {
    /**
     * @var \DateTime
     */
    private $dateAjout;
    private $imageRepository;
    private $imageFileName;

    const nbArticleParPage = 20;

    /**
     * @return \DateTime
     */
    public function getDateAjout() :\DateTime
    {
        return $this->dateAjout;
    }

    public function getDateAjoutFormat() :string
    {
        return $this->dateAjout->format("Y-m-d");
    }

    /**
     * @param mixed $dateAjout
     * @return Post
     */
    public function setDateAjout($dateAjout)
    {
        if ($dateAjout instanceof \DateTime) {
            $this->dateAjout = $dateAjout;
        }else{
            $this->dateAjout = new \DateTime($dateAjout);
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageRepository()
    {
        return $this->imageRepository;
    }

    /**
     * @param mixed $imageRepository
     * @return Post
     */
    public function setImageRepository($imageRepository)
    {
        $this->imageRepository = $imageRepository;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageFileName()
    {
        return $this->imageFileName;
    }

    /**
     * @param mixed $imageFileName
     * @return Post
     */
    public function setImageFileName($imageFileName)
    {
        $this->imageFileName = $imageFileName;
        return $this;
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id //attribut protected, si il était private il fallait écrire $this->>getId()
            ,'Titre' =>  $this->titre
            ,'Description' =>  $this->description
            ,'DateAjout' =>  $this->dateAjout
            ,'DateAjoutFormat' =>  $this->getDateAjoutFormat()
            ,'ImageRepository' =>  $this->imageRepository
            ,'ImageFilename' =>  $this->imageFileName
        ];
    }


}