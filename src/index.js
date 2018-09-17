import {factory} from '@caldera-labs/caldera-pay-js';
import domReady from '@wordpress/dom-ready';

domReady( () => {
	factory({},'caldera-pay-app', 'https://calderaformscom.lndo.site/wp-json' );
} );