<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2014  Vincent Le Borgne, Pockeit

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
************************************************************************/

namespace Keosu\DataModel\MapModelBundle\Entity;

use Keosu\CoreBundle\Entity\Model\DataModel;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keosu\DataModel\MapModelBundle\Entity\PointOfInterest
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\DataModel\MapModelBundle\Entity\PointOfInterestRepository")
 */
class PointOfInterest extends DataModel{
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
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	private $name;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="description", type="text")
	 */
	private $description;

	/**
	 * @var float
	 *
	 * @ORM\Column(name="lat", type="float")
	 */
	private $lat;

	/**
	 * @var float
	 *
	 * @ORM\Column(name="lng", type="float")
	 */
	private $lng;
	

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return PointOfInterest
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string 
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 * @return PointOfInterest
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Get description
	 *
	 * @return string 
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Set lat
	 *
	 * @param float $lat
	 * @return PointOfInterest
	 */
	public function setLat($lat) {
		$this->lat = $lat;

		return $this;
	}

	/**
	 * Get lat
	 *
	 * @return float 
	 */
	public function getLat() {
		return $this->lat;
	}

	/**
	 * Set lng
	 *
	 * @param float $lng
	 * @return PointOfInterest
	 */
	public function setLng($lng) {
		$this->lng = $lng;

		return $this;
	}

	/**
	 * Get lng
	 *
	 * @return float 
	 */
	public function getLng() {
		return $this->lng;
	}
	
	private $distance;
	public function getDistance()
	{
		return $this->distance;
	}
	public function setDistance($dist)
	{
		$this->distance =$dist;
		return $this;;
	}
	
}
