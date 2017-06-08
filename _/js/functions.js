(function($){
		//var previousScroll = 0;
		//var console;
		//var alert;
		var tagInterval;
		//var current_section = "#top";
		var current_section_id;
		var section_targets;
		var ot_target = 0;
		var ot_wrapper_pos = parseInt($('#our-team-wrapper-inner').css('left'));
		var ot_outer_w = $('.our-team-wrapper').outerWidth();
		var ot_inner_w = $('#our-team-wrapper-inner').outerWidth();
		
		var event_type = 'click';	
	
		function getUrlVars() {
		    var hash;
		    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		}
		
		getUrlVars();
		
		function printPage() {
	    window.print();
		    //workaround for Chrome bug - https://code.google.com/p/chromium/issues/detail?id=141633
		    if (window.stop) {
		        location.reload(); //triggering unload (e.g. reloading the page) makes the print dialog appear
		        window.stop(); //immediately stop reloading
		    }
		    return false;
		}
		
		function isScrolledIntoView(elem) {
		    var $win = $(window);
	
		    var docViewTop = $win.scrollTop();
		    var docViewBottom = docViewTop + $win.height();
		
		    var elemTop = $(elem).offset().top;
		    var elemBottom = elemTop + $(elem).height();
		   
			return ( (elemBottom <= docViewBottom) && (elemTop >= docViewTop) );       
		}
		
			
		$(window).on("resize", function(){
			
		});
			
		$(document).ready(function(){
			
		$.getScript("https://api.feefo.com/api/javascript/tlw-solicitors");
			
		//console.log($(window).scrollTop());

		$(".selectpicker").selectpicker({
	      style: 'btn-lg hp-select',
	      size: 5
		  });
		  
		 $('.selectpicker').find('select').selectpicker({
			style: 'btn btn-group btn-default', 
			width: '100%'
		});
		
		//Scroll to button
		
		$('body').on(event_type,'a.scroll-to', function(){
			
			
		});
		
		/* 	MAIN TOP NAVIGATION FUNCTIONS 
			Button functions to open top navigation and 
			control the internal menu functions as well
			as close the menu.
		*/
		
		$('body').on(event_type,'button#nav-btn', function(){
						
			return false;
			
		});
		
		$('#top-nav').on(event_type,'button#close-nav', function(){
						
			return false;
			
		});
		
		
		$('#top-nav').on('click', "li.with-sub-nav > a", function(){
			return false;	
		});
		
		/* END OF TOP NAV FUNCTIONS */
			
		/* 	HEADER SEARCH BUTTON 
			Button functions for search pop up menu
		*/
		
		$('body').on(event_type,'button#search-btn', function(){
		
			return false;
			
		});
		
		$('body').on(event_type,'button#close-search', function(){			
			return false;
		});
		
		/* END OF HEADER SEARCH FUNCTIONS */
			
			
	    /* POST CONTINUE READING BUTTONS
		   Functions for the read more button which reveals more
		   content it also has a close function as well. 
	    */
	    
		$('body').on('click','button#continue-read-btn', function(){
				
			return false;
			
		});
		
		$('body').on('click','button#close-content-extra-btn', function(){
		
			return false;
			
		});
		
		/* END OF CONTINUE READING FUNCTIONS */
	
	     /* TOOLKIT SCROLLER 
		Adds new styled scroll bars to media feeds   
	   */
	   
	   $('.scrollable-txt').slimScroll({
	        height: '470px',
	        size: '15px',
	        position: 'left',
	        alwaysVisible: true,
	        railVisible: true,
	        railColor: '#D7D7D7',
	        color: '#4b4b4b'
	    });
	    
	    /* ACCESSABILITY FUNCTIONS 
		   Button actions to control the text size
	    */
		
		$('body').on(event_type,'#txt-only-content button.access-btn', function(){
			
		});	
			
		/* TOOLKIT SLIDER NAVIGATION 
			Functions for the toolkit buttons to 
			move to next slide.	
		*/
			
		$('body').on(event_type, '.tk-slider-nav a', function(){
				
			return false;
			
		});
			
		/* PAGE TOOLS BTNS */
		
		$('body').on(event_type, 'button#print-pg-btn', function(){
			printPage();
		});
		
		/* TEXT ONLY FUNCTION */
		$('body').on(event_type, 'button#txt-only-btn', function(){
						
			return false;
		});
		
		$('body').on(event_type, 'button#close-txt-only-btn', function(){
						
			return false;
		});
			
		/* PAGE BANNER TAG SCROLLER */
		function startTagInterval() {
		tagInterval = setInterval(changeTag, 7000);
		}
	
		function changeTag() {	
			//console.log(nextTag);
		}
		
		startTagInterval();
		
		/* PAGE FEEDBACK SCROLLER */
		function startFeedbackInterval() {
		tagInterval = setInterval(changeQuote, 7000);
		}
		
		function changeQuote() {
			
		}
		
		if ($('.feedback-section-wrapper').length === 1) {
		startFeedbackInterval();
		}
			
			/* QUICK LINKS BUTTONS 
				Buttons fixed on the right side of the page 
				that animate a jump to the different sections	
			*/
			
			$('body').on(event_type,'button#quick-links-btn-show', function(){
					    		     	     			
				return false;
			
			});
			
			
			$('body').on(event_type,'.ql-section-links a', function(){
											
				return false;
			
			});
						
			$('body').on(event_type,'button#quick-links-btn-up', function() {
	
					return false;
			
			});
			
			$('body').on(event_type,'button#quick-links-btn-dwn', function(){
				
			return false;
			
			});
			
			/* EMD OF QUICK LINKS BUTTON FUNCTIONS */
	
			/* SCROLL TO SECTION BUTTON */
			
			$('body').on(event_type,'a.jump-2-link', function(){  
	    		  			
				return false;
			
			});
			
			/*
			OUR TEAM FUNCTIONS
			Button to show profile biog.
			Team section scrolling functions
			*/
			
			$('.team-profile').on(event_type, 'button.profile-info-btn', function(){

				return false;
			});
			
			function teamScroll(dir) {
				var direction = dir;
				var move = Math.abs(ot_outer_w / 4);
			
			}
			
			$('.scroll-btns').on(event_type, 'button.btn', function(){
				
				return false;
			});
			
			/* END OF OUR TEAM FUNCTIONS */
				
			/* POP UP FUNCTIONS */
				
			/* Law Awards Pop up Function
			 This function controls the Xmas pop up box
		    */
		    	
			$('body').on(event_type,'button#close-awards-btn', function(){
		    	      			
				return false;
				
			});
				
			/* XMAS Pop up Function
			This function controls the Xmas pop up box
		    */
		    
			var xmasBox = function(){
		
				if ($('#xmas-popup-wrap').length === 1 && $('#xmas-popup-wrap').hasClass('pop-up-inactive')) {
					
					$('#xmas-popup-btn-wrap').removeClass('pop-up-inactive').addClass('pop-up-active');
			
					$('#xmas-popup-wrap').fadeIn('slow', function(){
					
						$('.xmas-popup-inner').removeClass('hidden').addClass('animated slideInUp');
					
					});
				
				}
		
			};
		
			//Transition end actions
		    $('.xmas-popup-inner').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
				
				if ($(this).hasClass('bounceOutDown')) {
				 $('#xmas-popup-wrap').fadeOut('fast').removeClass('pop-up-active').addClass('pop-up-inactive');	
				 $('#xmas-popup-btn-wrap').removeClass('pop-up-active').addClass('pop-up-inactive');
				 $(this).removeClass('animated bounceOutDown').addClass('hidden');
				}
			});
			
			//Button actions
			
			$('body').on(event_type,'button#xmas-popup-btn-open', function(){
		    	
		    	xmasBox();    			
				return false;
				
			});
		
		    
		    $('body').on(event_type,'button#close-xmas-popup', function(){
			    
			   $('.xmas-popup-inner').removeClass('slideInUp').addClass('bounceOutDown');   
		    	      			
				return false;
				
			});
			
			/* END OF XMAS POP UP FUNCTIONS */	
			
			/* FAQ's BUTTON ACTIONS
			This function controls the FAQ's answers button
			which shows and hides the answer to the question
		    */
		    
		     $('body').on(event_type,'button.view-faq-btn', function(){  
		    	      			
				return false;
				
			});
			
			/* VIDEO LINK FUNCTION */
			
			/* FAQ's BUTTON ACTIONS
			These functions control the pop up videos
			that show that embed the your Tube video into the pop up inner wrapper
		    */
		    
			$('a.video-link').on(event_type, function(){
				
				return false;
			});
			
			$('button#close-video').on(event_type, function(){
				
				return false;

			});
			
			/* POST GALLERY FUNCTION */
			
			$('body').on(event_type,'a.gallery-img-link', function(){				
			
				return false;
			
			});
		
		});
	
		/* END DOC READY FUNCTION */
		
		$(window).bind('load',function(){
			
			$('.full-bg-img').each(function(index, Element) {
				var src = $(Element).data('src');
				//console.log(src);
				if (src !== undefined) {
				$(Element).css('background-image', 'url(' +src+ ')');
	  			}
			});
	
		});
		
		
})(window.jQuery);