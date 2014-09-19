<?php

namespace afpa\artistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="artist")
 * @ORM\Entity(repositoryClass="afpa\artistBundle\Entity\PostRepository")
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var integer
     *
     * @ORM\Column(name="popularite", type="integer")
     */
    private $popularite;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Post
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Post
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set popularite
     *
     * @param integer $popularite
     * @return Post
     */
    public function setPopularite($popularite)
    {
        $this->popularite = $popularite;

        return $this;
    }
	
	
	
	public function getCategory()
    {
			 $popularite= $this->popularite;
			
			if ($popularite>0 && $popularite<20)
			{
			$Category="Artiste peu connu";
			}
			if ($popularite>=20 && $popularite<40)
			{
			$Category= "Chanteur";
			}
			
			if ($popularite>=40 && $popularite<60)
			{
			$Category = "Star";
			}
			if ($popularite>=60 && $popularite<80)
			{
			$Category= "Super Star";
			}
			if ($popularite>=80 && $popularite<=100)
			{
			$Category= "Super Star";
			}
			return $Category;
	}
    /**
     * Get popularite
     *
     * @return integer 
     */
    public function getPopularite()
    {
        return $this->popularite;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Post
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
