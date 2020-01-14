<?php
/**
 * RatingFactory Article class for BlueSpice
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, version 3.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * This file is part of BlueSpice MediaWiki
 * For further information visit https://bluespice.com
 *
 * @author     Patric Wirth
 * @package    BlueSpice Pro
 * @subpackage BlueSpiceRating
 * @copyright  Copyright (C) 2016 Hallo Welt! GmbH, All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GPL-3.0-only
 * @filesource
 */
namespace BlueSpice\Social\Rating\RatingFactory;

use BlueSpice\Rating\Data\Record;
use BlueSpice\Rating\RatingFactory;
use BlueSpice\Social\Entity as SocialEntity;

class Entity extends RatingFactory {
	/**
	 * RatingItem from a entity object
	 * @param SocialEntity $entity
	 * @return \BlueSpice\Social\Rating\RatingItem\Entity
	 */
	public function newFromEntity( SocialEntity $entity ) {
		return $this->newFromObject( (object)[
			Record::REFTYPE => 'bssocial',
			Record::REF => $entity->get( SocialEntity::ATTR_ID ),
		] );
	}
}
