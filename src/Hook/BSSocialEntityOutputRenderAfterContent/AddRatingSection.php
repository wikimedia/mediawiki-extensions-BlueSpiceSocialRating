<?php

namespace BlueSpice\Social\Rating\Hook\BSSocialEntityOutputRenderAfterContent;

use BlueSpice\Social\Entity;
use BlueSpice\Social\Hook\BSSocialEntityOutputRenderAfterContent;

/**
 * Adds a "Like"-like rating to every entity view
 */
class AddRatingSection extends BSSocialEntityOutputRenderAfterContent {

	protected function doProcess() {
		$entity = $this->oEntityOutput->getEntity();

		if ( !$entity instanceof Entity ) {
			return true;
		}
		if ( !$entity->getConfig()->get( 'IsRateable' ) ) {
			return true;
		}
		if ( !$entity->exists() ) {
			return true;
		}
		$factory = $this->getServices()->getService( 'BSRatingFactoryEntity' );
		$ratingItem = $factory->newFromEntity( $entity );

		$this->aViews[] = $ratingItem->getTag();
		return true;
	}
}
