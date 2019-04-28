/**
 * ytmenu.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var YTMenu = (function() {

	function init() {
		
		[].slice.call( document.querySelectorAll( '.dr-menu' ) ).forEach( function( el, i ) {

			var trigger = el.querySelector( 'div.dr-trigger' ),
				icon = trigger.querySelector( 'span.dr-icon-menu' ),
				img = trigger.querySelector('a.dr-label'),
				open = false;

			trigger.addEventListener( 'click', function( event ) {
				if( !open ) {
					el.className += ' dr-menu-open';
					open = true;
					document.getElementById("eduventure").style.display = "none";
				}
			}, false );

			icon.addEventListener( 'click', function( event ) {
				if( open ) {
					event.stopPropagation();
					open = false;
					el.className = el.className.replace(/\bdr-menu-open\b/,'');
					document.getElementById("eduventure").style.display = "block";
					return false;
				}
			}, false );


			img.addEventListener( 'click', function( event ) {
				// console.log($('.dr-label'));
				if( open ) {
					event.stopPropagation();
					open = false;
					el.className = el.className.replace(/\bdr-menu-open\b/,'');
					document.getElementById("eduventure").style.display = "block";
					return false;
				}
			}, false );

		} );

	}

	init();

})();