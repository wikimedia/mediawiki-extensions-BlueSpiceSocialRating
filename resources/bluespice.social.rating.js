/**
 *
 * @author     Patric Wirth <wirth@hallowelt.com>
 * @package    BluespiceSocial
 * @subpackage BlueSpiceSocialRating
 * @copyright  Copyright (C) 2017 Hallo Welt! GmbH, All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GPL-3.0-only
 */

$( document ).bind( 'BSSocialEntityInit', function( event, Entity, $el, type, data ) {
	bs.rating.init();
});
$( document ).bind( 'BSSocialEntityOutputAfterContent', function( event, EntityOutput, html, val, type ) {
	if( !EntityOutput.args['id'] || EntityOutput.args['id'] === 0 ) {
		return;
	}
	
});
