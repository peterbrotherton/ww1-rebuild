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
		
		function refreshTimeline(startDate, endDate) {
			$.ajax({
				url: '/views/ajax',
				type: 'post',
				data: {
					view_name: 'asset_list_timeline',
					view_display_id: 'panel_pane_1',
					'field_date_references_value_1[value][date]': startDate,
					'field_date_references_value_2[value][date]': endDate
				},
				dataType: 'json',
				success: function (response) {
					if (response[1] !== undefined) {
						var viewHtml = $(response[1].data);
						var itemList = viewHtml.find('.view-content .item-list');
						$('.view-asset-list-timeline .view-content .item-list').fadeOut("slow", function() {
							var year = startDate.substring(3); 
							$('.view-asset-list-timeline .view-content').html('<h2 class="year">' + year + '</h2>');
							if (itemList.length) {
								$('.view-asset-list-timeline .view-content').append(itemList);
							} else {
								$('.view-asset-list-timeline .view-content').append('<div class="item-list"><h2>No results for selected date, please choose again.</h2></div>');
							}
						});
					}
				}
			});
		}
		
		function initPageTimeline() {
			if (!$('body.page-explore-timeline').length) { return; }
			
			// hide timeline links, match initial view state
			$('#timeline-nav ul').css('display', 'none');
			$('#timeline-nav ul:first').css('display', 'block');
			$('#timeline-nav li:first a').addClass('active');
			$('.view-asset-list-timeline .view-content').prepend('<h2 class="year">1914</h2>');
			
			// month clicked
			$('#timeline-nav li ul li a').click(function(event) {
				$('#timeline-nav a').removeClass('active');
				$(this).addClass('active');
				
				var startDate = $(this).parent().data('date');
				var endDate = startDate;
				refreshTimeline(startDate, endDate);
				event.preventDefault();
			});
			
			// year clicked
			$('#timeline-nav > li > a').click(function(event) {
				$(this).parent().siblings().children('ul').css('display', 'none');
				$(this).parent().find('ul').css('display', 'block');
				
				$('#timeline-nav a').removeClass('active');
				$(this).addClass('active');
				$(this).parent().find('ul a').addClass('active');
				
				var startDate = $(this).parent().find('ul li').first().data('date');
				var endDate = $(this).parent().find('ul li').last().data('date');
				refreshTimeline(startDate, endDate);
				event.preventDefault();
			});
		}
		
		initCommon();
		initHomePage();
		initPageExplore();
		initPageTimeline();
	});
})(jQuery);