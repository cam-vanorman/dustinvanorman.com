/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

var DUSTIN = {
	/**
	 * Accordion
	 * Hide/Show Panels
	 */
	accordion: function(target) {
		$target = $(target);
		$target.click(function(e) {
			$(this).find('i').toggleClass('bt-caret-up bt-caret-down');
			$(this).next().slideToggle();
			$(this).toggleClass('active');
			e.preventDefault();
		});
	},
	/**
	 * Parallax
	 * move background image opposite of layer in front.
	 */
	parallax: function() {
		// Run parallax only on tablet/desktop 
		if($(window).width() >= 728) {
			/**
			 * Parallax init
			 * .parallax(xPosition, speedFactor, outerHeight) options:
			 * xPosition - Horizontal position of the element
			 * inertia - speed to move relative to vertical scroll. 
			 * Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
			 * outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
			 */
			$('#home').parallax("50%", 0.12, false);
			$('#home-cameron').parallax("5%", 0.15, false);
			$('.parallax-section').parallax("50%", 0.5);
		}
	},
	/**
	 * Tooltip
	 * Init bootstrap's tooltip plugin
	 */
	tooltip: function(target) {
		$target = $(target);
		$target.tooltip();
	},
	/**
	 * Local Scroll
	 * Init localScroll plugin
	 */
	localScroll: function(target) {
		$target = $(target);
		$target.localScroll();
	},
	
	/**
	 * Modal
	 */
	modal: function(target) {
		$target = $(target);
		$target.modal();
	}

};

(function($) {

	// Use this variable to set up the common and page specific functions. If you
	// rename this variable, you will also need to rename the namespace below.
	var Vanorman = {
		// All pages
		'common': {
			init: function() {
				// JavaScript to be fired on all pages
				DUSTIN.accordion('.DUSTIN-2015 .panel-heading');
				// Bootstrap Tooltip Init
				DUSTIN.tooltip('[data-toggle="tooltip"]');
				// DUSTIN.modal('[data-toggle="modal"]');

				// localScroll init
				DUSTIN.localScroll('#main-navigation');
				DUSTIN.parallax();

			},
			finalize: function() {
			
			}
		},
		// Home page
		'home': {
			init: function() {
				// JavaScript to be fired on the home page
				
				// Header Shrink on scroll
				$(window).scroll(function() {
					if ($(document).scrollTop() > 150) {
						$('.navbar-custom').show();
						$('.navbar-custom').addClass('shrink');
					} else {
						$('.navbar-custom').removeClass('shrink');
					}
				});
			},
			finalize: function() {
				// JavaScript to be fired on the home page, after the init JS
			}
		},
		// About us page, note the change from about-us to about_us.
		'about_us': {
			init: function() {
				// JavaScript to be fired on the about us page
			}
		},
		// Dasbhoard page, note the change from dashboard-concept to dashboard_concept.
		'dashboard_concept': {
			init: function() {
				// Javascript to be fired on the dashboard concept page
				DUSTIN.accordion('.DUSTIN-2015 .panel-heading');
				
			}
		}
	};

	// The routing fires all common scripts, followed by the page specific scripts.
	// Add additional events for more control over timing e.g. a finalize event
	var UTIL = {
		fire: function(func, funcname, args) {
			var fire;
			var namespace = Vanorman;
			funcname = (funcname === undefined) ? 'init' : funcname;
			fire = func !== '';
			fire = fire && namespace[func];
			fire = fire && typeof namespace[func][funcname] === 'function';

			if (fire) {
				namespace[func][funcname](args);
			}
		},
		loadEvents: function() {
			// Fire common init JS
			UTIL.fire('common');

			// Fire page-specific init JS, and then finalize JS
			$.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
				UTIL.fire(classnm);
				UTIL.fire(classnm, 'finalize');
			});

			// Fire common finalize JS
			UTIL.fire('common', 'finalize');
		}
	};

	// Load Events
	$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
