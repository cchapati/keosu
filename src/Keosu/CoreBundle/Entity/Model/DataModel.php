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
namespace Keosu\CoreBundle\Entity\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class DataModel {

	/**
	 * @var integer $reader
	 *
	 * @ORM\ManyToOne(targetEntity="Keosu\CoreBundle\Entity\Reader", inversedBy="reader")
	 */
	private $reader;

	
	/**
	 * Set reader
	 *
	 * @param integer $reader
	 * @return ArticleBody
	 */
	public function setReader($reader) {
		$this->reader = $reader;

		return $this;
	}

	/**
	 * Get reader
	 *
	 * @return integer 
	 */
	public function getReader() {
		return $this->reader;
	}

	

}
