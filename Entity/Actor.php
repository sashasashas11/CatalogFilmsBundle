<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sasha
 * Date: 03.11.13
 * Time: 17:06
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\CatalogFilmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="actor")
 */
class Actor
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
	private $name;

	/**
	 *
	 * @ORM\ManyToMany(targetEntity="Film", mappedBy="films")
	 */
	private $films;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
    }

	public  function __toString()
	{
		return $this->getName();
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
     * Set name
     *
     * @param string $name
     * @return Actor
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add films
     *
     * @param \Acme\CatalogFilmsBundle\Entity\Film $films
     * @return Actor
     */
    public function addFilm(\Acme\CatalogFilmsBundle\Entity\Film $films)
    {
        $this->films[] = $films;
    
        return $this;
    }

    /**
     * Remove films
     *
     * @param \Acme\CatalogFilmsBundle\Entity\Film $films
     */
    public function removeFilm(\Acme\CatalogFilmsBundle\Entity\Film $films)
    {
        $this->films->removeElement($films);
    }

    /**
     * Get films
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFilms()
    {
        return $this->films;
    }
}