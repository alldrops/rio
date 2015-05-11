$(function(){

	$('.banner .flexslider').flexslider({
		animation: 'fade',
		directionNav: false,
		slideshowSpeed: 5000
	});

	$('.thumb-gallery.flexslider').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 150,
		itemMargin: 10,
		asNavFor: '.main-gallery.flexslider'
	});
	
	$('.main-gallery.flexslider').flexslider({
		animation: 'fade',
		directionNav: true,
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: '.thumb-gallery.flexslider'
	});

	var feed = new Instafeed({
		get: 'user',
		userId: 1285031782,
		accessToken: '1285031782.467ede5.5105ff8b9ed74d2ea9d303c63075ae4c',
		resolution: 'standard_resolution',
		template: '<a target="_blank" href="{{link}}"><img src="{{image}}" /></a>',
		limit: 4
	});
	feed.run();

	var bodyEl = document.body,
		content = document.querySelector( '.content-wrap' ),
		openbtn = document.getElementById( 'open-button' ),
		closebtn = document.getElementById( 'close-button' ),
		isOpen = false;

	function init() {
		initEvents();
	}

	function initEvents() {
		openbtn.addEventListener( 'click', toggleMenu );
		if( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		content.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );
	}

	function toggleMenu() {
		if( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
		}
		else {
			classie.add( bodyEl, 'show-menu' );
		}
		isOpen = !isOpen;
	}

	init();

});