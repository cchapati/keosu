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
namespace Keosu\CoreBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gadget
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Keosu\CoreBundle\Entity\GadgetRepository")
 */
class Gadget {
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
	 * @ORM\Column(name="gadgetName", type="string", length=255)
	 */
	private $gadgetName;
	
	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="static", type="boolean")
	 * Static gadget copy all data in local app to evoid network call
	 */
	private $static;
	
	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="shared", type="boolean")
	 * Shared gadget with all the pages
	 */
	private $shared;

	/**
	 * @ORM\ManyToOne(targetEntity="Keosu\CoreBundle\Entity\Page", inversedBy="id")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $page;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="zone", type="string", length=255)
	 */
	private $zone;

	/**
	 * @var array
	 *
	 * @ORM\Column(name="config", type="array")
	 */
	private $config;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="gadgetTemplate", type="string", length=255)
	 */
	private $gadgetTemplate;

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	public function setGadgetName($name) {
		$this->gadgetName = $name;
		return $this;
	}

	public function getGadgetName() {
		return $this->gadgetName;
	}

	public function setGadgetTemplate($name) {
		$this->gadgetTemplate = $name;
		return $this;
	}

	public function getGadgetTemplate() {
		return $this->gadgetTemplate;
	}

	/**
	 * Set page
	 *
	 * @param string $page
	 * @return Gadget
	 */
	public function setPage($page) {
		$this->page = $page;
		return $this;
	}

	/**
	 * Get page
	 *
	 * @return string 
	 */
	public function getPage() {
		return $this->page;
	}

	/**
	 * Set zone
	 *
	 * @param string $zone
	 * @return Gadget
	 */
	public function setZone($zone) {
		$this->zone = $zone;

		return $this;
	}

	/**
	 * Get zone
	 *
	 * @return string 
	 */
	public function getZone() {
		return $this->zone;
	}

	/**
	 * Set config
	 *
	 * @param array $config
	 * @return Gadget
	 */
	public function setConfig($config) {
		$this->config = $config;

		return $this;
	}

	/**
	 * Get config
	 *
	 * @return array 
	 */
	public function getConfig() {
		return $this->config;
	}
	
	public function setStatic($static) {
		$this->static = $static;
	
		return $this;
	}
	
	public function isStatic() {
		return $this->static;
	}
	
	public function setShared($shared) {
		$this->shared = $shared;
	
		return $this;
	}
	
	public function isShared() {
		return $this->shared;
	}

}
