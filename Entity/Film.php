<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sasha
 * Date: 03.11.13
 * Time: 17:05
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\CatalogFilmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Acme\CatalogFilmsBundle\Entity\Genre as Genre;
use Acme\CatalogFilmsBundle\Entity\Actor as Actor;
use Acme\CatalogFilmsBundle\Entity\Category as Category;

/**
 * @ORM\Entity
 * @ORM\Table(name="film")
 */
class Film
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=50)
	 */
	private $title;

	/**
	 * @ORM\Column(type="text")
	 */
	private $description;

	/**
	 *
	 * @ORM\ManyToMany(targetEntity="Genre", inversedBy="filmGenres")
	 * @ORM\JoinTable(name="films_genres",
	 *   joinColumns={@ORM\JoinColumn(name="film_id", referencedColumnName="id")},
	 *   inverseJoinColumns={@ORM\JoinColumn(name="genre_id", referencedColumnName="id")}
	 * )
	 */
	private $Genres;

	/**
	 *
	 * @ORM\ManyToMany(targetEntity="Actor", inversedBy="filmActors")
	 * @ORM\JoinTable(name="films_actors",
	 *   joinColumns={@ORM\JoinColumn(name="film_id", referencedColumnName="id")},
	 *   inverseJoinColumns={@ORM\JoinColumn(name="actor_id", referencedColumnName="id")}
	 * )
	 */
	private $actors;

	/**
	 *
	 * @ORM\ManyToMany(targetEntity="Category", inversedBy="filmCategory")
	 * @ORM\JoinTable(name="films_Categories",
	 *   joinColumns={@ORM\JoinColumn(name="film_id", referencedColumnName="id")},
	 *   inverseJoinColumns={@ORM\JoinColumn(name="Category_id", referencedColumnName="id")}
	 * )
	 */
	private $category;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Genres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->actors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
    }

	public  function __toString()
	{
		return $this->getTitle();
	}

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
     * Set title
     *
     * @param string $title
     * @return Film
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Film
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add Genres
     *
     * @param \Acme\CatalogFilmsBundle\Entity\Genre $genres
     * @return Film
     */
    public function addGenre(\Acme\CatalogFilmsBundle\Entity\Genre $genres)
    {
        $this->Genres[] = $genres;
    
        return $this;
    }

    /**
     * Remove Genres
     *
     * @param \Acme\CatalogFilmsBundle\Entity\Genre $genres
     */
    public function removeGenre(\Acme\CatalogFilmsBundle\Entity\Genre $genres)
    {
        $this->Genres->removeElement($genres);
    }

    /**
     * Get Genres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenres()
    {
        return $this->Genres;
    }

    /**
     * Add actors
     *
     * @param \Acme\CatalogFilmsBundle\Entity\Actor $actors
     * @return Film
     */
    public function addActor(\Acme\CatalogFilmsBundle\Entity\Actor $actors)
    {
        $this->actors[] = $actors;
    
        return $this;
    }

    /**
     * Remove actors
     *
     * @param \Acme\CatalogFilmsBundle\Entity\Actor $actors
     */
    public function removeActor(\Acme\CatalogFilmsBundle\Entity\Actor $actors)
    {
        $this->actors->removeElement($actors);
    }

    /**
     * Get actors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Add category
     *
     * @param \Acme\CatalogFilmsBundle\Entity\Category $category
     * @return Film
     */
    public function addCategory(\Acme\CatalogFilmsBundle\Entity\Category $category)
    {
        $this->category[] = $category;
    
        return $this;
    }

    /**
     * Remove category
     *
     * @param \Acme\CatalogFilmsBundle\Entity\Category $category
     */
    public function removeCategory(\Acme\CatalogFilmsBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }
}