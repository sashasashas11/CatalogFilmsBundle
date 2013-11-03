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
	 * @ManyToMany(targetEntity="Genre", inversedBy="filmGenres")
	 * @JoinTable(name="films_genres",
	 *   joinColumns={@JoinColumn(name="film_id", referencedColumnName="id")},
	 *   inverseJoinColumns={@JoinColumn(name="genre_id", referencedColumnName="id")}
	 * )
	 */
	private $Genres;

	/**
	 *
	 * @ManyToMany(targetEntity="Actor", inversedBy="filmActors")
	 * @JoinTable(name="films_actors",
	 *   joinColumns={@JoinColumn(name="film_id", referencedColumnName="id")},
	 *   inverseJoinColumns={@JoinColumn(name="actor_id", referencedColumnName="id")}
	 * )
	 */
	private $actors;

	/**
	 *
	 * @ManyToMany(targetEntity="Category", inversedBy="filmCategory")
	 * @JoinTable(name="films_Categories",
	 *   joinColumns={@JoinColumn(name="film_id", referencedColumnName="id")},
	 *   inverseJoinColumns={@JoinColumn(name="Category_id", referencedColumnName="id")}
	 * )
	 */
	private $category;
}