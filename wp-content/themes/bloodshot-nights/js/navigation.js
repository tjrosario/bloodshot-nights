/**
 * navigation.js
 *
 * Handles toggling the sidebar
 */

( function($) {
	/*
	var container, button, menu, body, links, subMenus;

	container = document.getElementById( 'masthead' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	body = document.getElementsByTagName( 'body' )[0]; 


	button.onclick = function() {
		if ( -1 !== body.className.indexOf( 'sidebar-toggled' ) ) {
			body.className = body.className.replace( ' sidebar-toggled', ' sidebar-closed' );
		} else {
			body.className = body.className.replace( ' sidebar-closed', '' );
			body.className += ' sidebar-toggled';
		}
	};
	*/

	var $body = $('body');
	var $sidebarToggle = $('.sidebar-toggle');

	$sidebarToggle.on('click', function(e) {
		if ($body.hasClass('sidebar-toggled')) {
			$body.removeClass('sidebar-toggled');
			$body.addClass('sidebar-closed');
		} else {
			$body.addClass('sidebar-toggled');
			$body.removeClass('sidebar-closed');
		}
	});

})(jQuery);
