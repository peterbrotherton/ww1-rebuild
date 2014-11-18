(function ($) {
	$(document).ready(function() {
		function toggleNav() {
			var src = $("#main-menu-trigger img").attr('src');
			if (src.indexOf('close') > 0) {
				src = src.replace('-close', '');
			} else {
				src = src.replace('.png', '-close.png');
			}
			$("#main-menu-trigger img").attr('src', src);
			
			if ($('#page-wrapper').hasClass('show-nav')) {
				$('#page-wrapper').removeClass('show-nav');
			} else {
				$('#page-wrapper').addClass('show-nav');
			}
		}

		function initCommon() {
			// main menu trigger
			$('#main-menu-trigger').click(function(event){
				toggleNav();
				event.preventDefault();
				event.stopPropagation();
			});
			
			// close on page click
			$('body').click(function(event){
				var src = $("#main-menu-trigger img").attr('src');
				if (src.indexOf('close') > 0) {
					toggleNav();
				}
			});
			
			// stop close on menu click
			$('nav.main-menu').click(function(event){
				event.stopPropagation();
			});
			
			// main menu children toggle
			$('.sub-toggle').click(function(event){
				var src = $(this).attr('src');
				if (src.indexOf('up') > 0) {
					src = src.replace('up', 'down');
				} else {
					src = src.replace('down', 'up');
				}
				$(this).attr('src', src);
				$(this).parent().find('ul').toggleClass('active');
				event.preventDefault();
				event.stopPropagation();
			});
			
			// search bar
			$('#search input[type="text"]').click(function(event){
				$(this).attr('placeholder', '');
			});
			
			// breadcrumb
			$('.easy-breadcrumb').append('<span class="easy-breadcrumb_segment-separator"></span>');
		}
		
		function initHomePage() {
			if (!$('body.front').length) { return; }
			
			$('.video-controls a').click(function(event){
				if ($("#feature-video")[0].paused) {
					$("#feature-video")[0].play();
					$(this).text('Pause background');
					$(this).css('background', 'url(/sites/all/themes/slnswww1/images/icon-pause.png) left center no-repeat');
					$(this).css('background-size', '3.1215rem 2.1875rem');
					$(this).removeClass('play');
				} else {
					$("#feature-video")[0].pause();
					$(this).text('Play background');
					$(this).css('background', 'url(sites/all/themes/slnswww1/images/icon-play.png) left center no-repeat');
					$(this).css('background-size', '3.1215rem 2.1875rem');
					$(this).addClass('play');
				}
				event.preventDefault();
			});
		}
		
		function initPageExplore() {
			if (!$('body.page-explore').length) { return; }
		
			$('.view-asset-list select').change(function(event) {
				$(this).closest('form').find('.form-submit').click();
			});
		}
		
		initCommon();
		initHomePage();
		initPageExplore();
	});
})(jQuery);