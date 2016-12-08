( function( $ ) {
	var $win = $(window);
	var $body = $('body');
	var $breakpointTablet = 768;
	var $masthead = $('#masthead');
	var $hero = $('.hero');
	var isHome = $body.hasClass('home');
	var $modal = $('#reveal-modal-id');

	$win.on('load resize', function() {
		if ($win.width() < $breakpointTablet) {
			$body.addClass('mobile');
		} else {
			$body.removeClass('mobile');
		}
	});

	$win.on('load scroll', function() {
		var scrollTop = $win.scrollTop();
		if (scrollTop > $hero.outerHeight(true)) {
			if (isHome) {
				if (!$body.hasClass('sticky-nav')) {
					$body.addClass('sticky-nav');
				}
			}
		} else {
			$body.removeClass('sticky-nav');
		}
	});

	$('.hero__content .cta').on('click', function(e) {
		e.preventDefault();
		$('html,body').animate({
			scrollTop: $('#main').offset().top - $masthead.outerHeight(true)
		}, 400);
	});

	// Remove widdows and orphans from post titles
	$("h1.entry-title a, .single h1.entry-title").each(function() {
	  var wordArray = $(this).text().split(" ");
	  if (wordArray.length > 1) {
	    wordArray[wordArray.length-2] += "&nbsp;" + wordArray[wordArray.length-1];
	    wordArray.pop();
	    $(this).html(wordArray.join(" "));
	  }
	});

	$body.on('click', '.locations .location', function(e) {
		e.preventDefault();
		var $this = $(this);
		if ($this.hasClass('open')) {
			$this.removeClass('open');
		} else {
			$this.addClass('open');
		}
	});

	$body.on('click', '.locations .location .services a', function(e) {
		e.stopPropagation();
	});

	$('.header-navigation .menu-header-container ul li a').on('click',function(e) {
		var title = $(this).text().toLowerCase();
		

		if (title === 'locations') {
			var $locations = $('#locations').clone();
			var interval = setInterval(function() {
				if ($modal.hasClass('open')) {
					$modal.append($locations);
					clearInterval(interval);
				}
			}, 100);
		}
	});

// Add a class to big image and caption >= 1088px.
// For some reason it's not working... HELP!

	// function bigImageClass() {
	// 	$( '.entry-content img.size-full' ).each( function() {
	// 		var img = $( this ),
	// 		    caption = $( this ).closest( 'figure' ),
	// 		    newImg = new Image();

	// 		newImg.src = img.attr( 'src' );

	// 		$( newImg ).load( function() {
	// 			var imgWidth = newImg.width;

	// 			if ( imgWidth >= 1088 ) {
	// 				$( img ).addClass( 'size-big' );
	// 			}

	// 			if ( caption.hasClass( 'wp-caption' ) && imgWidth >= 1088 ) {
	// 				caption.addClass( 'caption-big' );
	// 				caption.removeAttr( 'style' );
	// 			}
	// 		} );
	// 	} );
	// }

} )( jQuery );
