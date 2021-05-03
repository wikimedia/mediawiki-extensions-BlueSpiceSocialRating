<?php

use MediaWiki\MediaWikiServices;

return [

	'BSRatingFactoryEntity' => static function ( MediaWikiServices $services ) {
		return new \BlueSpice\Social\Rating\RatingFactory\Entity(
			$services->getService( 'BSRatingRegistry' ),
			$services->getService( 'BSRatingConfigFactory' ),
			$services->getConfigFactory()->makeConfig( 'bsg' )
		);
	},
];
