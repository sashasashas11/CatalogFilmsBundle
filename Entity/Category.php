<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sasha
 * Date: 03.11.13
 * Time: 17:05
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\CatalogFilmsBundle\Entity;


class Category
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
	 * @ManyToMany(targetEntity="Film", mappedBy="films")
	 */
	private $films;
}