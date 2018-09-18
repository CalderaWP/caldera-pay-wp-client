/* global CALDERA_PAY:false*/

import {factory} from '@caldera-labs/caldera-pay-js';
import domReady from '@wordpress/dom-ready';

domReady( () => {
	const {settings,apiRoot} = CALDERA_PAY;
	factory(settings,'caldera-pay-app', apiRoot );
} );