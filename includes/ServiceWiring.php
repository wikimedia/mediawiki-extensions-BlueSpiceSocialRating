<?php

use MediaWiki\MediaWikiServices;

// PHP unit does not understand code coverage for this file
// as the @covers annotation cannot cover a specific file
// This is fully tested in ServiceWiringTest.php
// @codeCoverageIgnoreStart

return [

	'BSRatingFactoryEntity' => static function ( MediaWikiServices $services ) {
		return new \BlueSpice\Social\Rating\RatingFactory\Entity(
			$services->getService( 'BSRatingRegistry' ),
			$services->getService( 'BSRatingConfigFactory' ),
			$services->getConfigFactory()->makeConfig( 'bsg' )
		);
	},
];

// @codeCoverageIgnoreEnd
