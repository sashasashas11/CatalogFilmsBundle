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
	 * @ManyToMany(targetEntity="Film", mappedBy="films")
	 */
	private $films;
}