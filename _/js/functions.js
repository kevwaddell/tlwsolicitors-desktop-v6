(function($){
		
		var event_type = 'click';	
		
		function printPage() {
	    window.print();
		    //workaround for Chrome bug - https://code.google.com/p/chromium/issues/detail?id=141633
		    if (window.stop) {
		        location.reload(); //triggering unload (e.g. reloading the page) makes the print dialog appear
		        window.stop(); //immediately stop reloading
		    }
		    return false;
		}
			
		
		$(document).ready(function(){	
		$.getScript("https://api.feefo.com/api/javascript/tlw-solicitors");
		
		$(document).bind('gform_page_loaded', function(event, form_id, current_page){
        // code to be trigger when next/previous page is loaded
	        if ( form_id == 22 && current_page == 12) {
		      // alert(current_page);
		       
		        $('.selectpicker').find('select').selectpicker({
				style: 'btn btn-group btn-default', 
				width: '100%'
				});

	        }
		});

			
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
		
		$('body').on(event_type,'button#jump-2-form', function(){
	
			$('html, body').animate({scrollTop: ($("section#form-section").offset().top)}, 500);	
			
			return false;
			
		});
		
		/* 	MAIN TOP NAVIGATION FUNCTIONS 
			Button functions to open top navigation and 
			control the internal menu functions as well
			as close the menu.
		*/
		
		$('body').on(event_type,'button#nav-btn', function(){
			
			var inner_h = $('#top-nav').find('.nav-wrapper').outerHeight();
				
			$('#top-nav').animate({height: inner_h+"px"}, 300, function(){
				
				$('body').toggleClass('nav-closed nav-open');
				$(this).toggleClass('nav-closed nav-open').removeAttr('style');	
				
			});
						
			return false;
			
		});
		
		$('#top-nav').on(event_type,'button#close-nav', function(){
			
			$('#top-nav').animate({height: "0px"}, 300, function(){
				
				$('body').toggleClass('nav-open nav-closed');
				$(this).toggleClass('nav-open nav-closed').removeAttr('style');	
				$('li.with-sub-nav').removeClass('sub-open').addClass('sub-closed');
				
			});
			
			return false;
			
		});
		
		
		$('#top-nav').on('click', "li.with-sub-nav > a", function(){
			var parent = $(this).parent();
			var siblings = $(parent).siblings();
			
			$(parent).siblings().removeClass('sub-open').addClass('sub-closed');
			
			if ($(siblings).find('.sub-open').length > 0) {
			$(siblings).find('.sub-open').removeClass('sub-open').addClass('sub-closed');		
			}
			
			//console.log($(siblings).find('.sub-open').length);
			
			$(parent).toggleClass('sub-open sub-closed');
			return false;	
		});
		
		/* END OF TOP NAV FUNCTIONS */
			
		/* 	HEADER SEARCH BUTTON 
			Button functions for search pop up menu
		*/
		
		$('body').on(event_type,'button#search-btn', function(){
				
			$('#search-pop-up').toggleClass('off on');
			$('body').addClass('search-open');
			
			return false;
			
		});
		
		$('body').on(event_type,'button#close-search', function(){	
			
			if ( $('#search-pop-up').hasClass('on') ) {
				
				$('#search-pop-up').removeClass('on').addClass('turn-off');
				
				$('.turn-off').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			
					$(this).removeClass('turn-off').addClass('off');	
					$('body').removeClass('search-open');
					
				});
	
			} 
					
			return false;
		});
		
		/* END OF HEADER SEARCH FUNCTIONS */
		
		/* 	ROUTE FINDER BUTTON 
			Button functions for route finder pop up
		*/
		
		$('body').on(event_type,'button#route-finder-btn', function(){
				
			$('#route-finder-pop-up').toggleClass('off on');
			$('body').addClass('route-finder-open');
			
			return false;
			
		});
		
		$('body').on(event_type,'button#close-route-finder', function(){	
			
			if ( $('#route-finder-pop-up').hasClass('on') ) {
				
				$('#route-finder-pop-up').removeClass('on').addClass('turn-off');
				
				$('.turn-off').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			
					$(this).removeClass('turn-off').addClass('off');	
					$('body').removeClass('route-finder-open');
					
				});
	
			} 
					
			return false;
		});
		
		/* END OF ROUTE FINDER BUTTON FUNCTIONS */
			
			
	    /* POST CONTINUE READING BUTTONS
		   Functions for the read more button which reveals more
		   content it also has a close function as well. 
	    */
	    
		$('body').on('click','button#continue-read-btn', function(){
			
			var inner_h = $('#content-extra-inner').outerHeight();
				
			$('button#continue-read-btn').addClass('hidden');
			
			$('html, body').animate({scrollTop: ($('#content-extra-inner').offset().top - 20)}, 500);
			
			$('#content-extra').animate({height: inner_h+"px"}, 500, function(){
				$('#content-extra').removeClass('closed').addClass('open').removeAttr('style');
			});
	
			return false;
			
		});
		
		$('body').on('click','button#close-content-extra-btn', function(){
			
			$('button#continue-read-btn').removeClass('hidden');
			
			$('html, body').animate({scrollTop: ($('.main-txt').offset().top - 200)}, 500);
				
			$('#content-extra').animate({height: "0px"}, 500, function(){
				$('#content-extra').removeClass('open').addClass('closed').removeAttr('style');	
			});	
			
			return false;
			
		});
		
		/* END OF CONTINUE READING FUNCTIONS */
		    
	    /* ACCESSABILITY FUNCTIONS 
		   Button actions to control the text size
	    */
		
		$('body').on(event_type,'#txt-only-content button.access-btn', function(){
			
			if ( $(this).data().size ) {
				var txt_size = $(this).attr('data-size');
	    	
	    		$(this).siblings().not('#access-btn-brightness').removeClass('active');
	    		$(this).addClass('active');
	    	
	    		$('.main-txt').removeClass('txt-md txt-lg txt-sm').addClass(txt_size);	
			}
			
			if ($(this).data('status')) {

				$(this).toggleClass('off on');
				
				var status = $(this).data().status;
				var change_to;
	
				console.log(status);
				
				if (status == "bg-white") {
				change_to = "bg-black";	
				$('#txt-only-content').removeClass('bg-white').addClass(change_to);
				$(this).attr('data-status', change_to).data('status', change_to);
				}
				
				if (status == "bg-black") {
				change_to = "bg-white";	
				$('#txt-only-content').removeClass('bg-black').addClass('bg-white');
				$(this).attr('data-status', change_to).data('status', change_to);
				}
				
				console.log(change_to);
					
			}
		
		     	     			
			return false;
		});	
		
		/* PAGE TOOLS BTNS */
		
		$('body').on(event_type, 'button#print-pg-btn', function(){
			printPage();
		});
		
		/* TEXT ONLY FUNCTION */
		$('body').on(event_type, 'button#txt-only-btn', function(){
			
			var main_txt = $('.content-section').find('.main-txt');
			var title_txt = $('.banner-title .container').text();
	
			var txt_copy = $(main_txt).clone();
			var scroller_h = $('#txt-only-content').innerHeight() - 170;
			
			if (title_txt) {
			var title_copy = '<div class="title-header">'+ title_txt +'</div>';	
			$(title_copy).appendTo('#txt-only-wrapper');
			}
			
			$(txt_copy).appendTo('#txt-only-wrapper').slimScroll({height: scroller_h+'px'});
			
			$('#txt-only-wrapper').fadeIn('fast');
			$('body').addClass('txt-only-open');
			
			$('#txt-only-content').removeClass('closed').addClass('open');
			
			return false;
		});
		
		$('body').on(event_type, 'button#close-txt-only-btn', function(){
			
			$('#txt-only-wrapper').fadeOut('fast').empty();
			
			$('#txt-only-content').removeClass('open').addClass('closed');
			
			$('body').removeClass('txt-only-open');
			
			if ($('#txt-only-wrapper').hasClass('bg-black')) {
			$('#txt-only-wrapper').removeClass('bg-black').addClass('bg-white');
			}
			
			return false;
		});
						
		/* POP UP FUNCTIONS */
			
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
	    
	     $('body').on(event_type,'.faq-nav > button', function(){  
		     
		    var faq_id = $(this).data().src;
		    var prev_id;
		    var next_id;
		    
		    $('.faq-item.active').animate({top: '100%', opacity: 0}, 300, function(){
				$(this).removeClass('active');    
		    });
		    
		    $('#'+faq_id).animate({top: '0%', opacity: 1}, 300, function(){
				$('#'+faq_id).addClass('active');     
		    });
		    
		    if ($('#'+faq_id).prev().length === 1) {
			prev_id = $('#'+faq_id).prev().attr('id');
		    } else {
			prev_id = $('.faq-item').last().attr('id');   
		    }
		    
		    if ($('#'+faq_id).next().length === 1) {
			next_id = $('#'+faq_id).next().attr('id');
		    } else {
			next_id = $('.faq-item').first().attr('id');    
		    }
		    
		    $('button#prev-faq').attr('data-src', prev_id); 
		    $('button#prev-faq').data('src', prev_id); 
		    $('button#next-faq').attr('data-src', next_id); 
			$('button#next-faq').data('src', next_id); 
		    
			/*
			console.log($('#'+faq_id).prev().length);
		    console.log(prev_id); 
		    console.log($('#'+faq_id).next().length);
		    console.log(next_id); 
			*/
			
			return false;
			
		});
		/* END FAQ's BUTTON ACTIONS

		/* VIDEO LINK FUNCTION */
		
		/* VIDEO LINKS BUTTON ACTIONS
		These functions control the pop up videos
		that show that embed the your Tube video into the pop up inner wrapper
	    */
	  
	  $('a.video-link').on(event_type, function(){
			var video_id = $(this).attr('href');
			var video = $(video_id).find('iframe');
			
			$('body').addClass('video-open');
			
			$('#video-viewer').animate({top: '0px', opacity: 1}, 500, function(){
				$(this).toggleClass('viewer-closed viewer-open').removeAttr('style');
				var src_split = $(video).attr('src').split('?');
				//console.log(src_split);
				$(video).clone().attr('src', src_split[0] + '?start=0&feature=oembed&autoplay=1&rel=0&showinfo=0&controls=0').appendTo('.video-viewer-inner');
				
			});
			
			return false;
		});
		
		$('button#view-video-btn').on(event_type, function(){
			var video = $('#view-video').find('iframe');
			
			$('body').addClass('video-open');
			
			$('#video-viewer').animate({top: '0px', opacity: 1}, 500, function(){
				$(this).toggleClass('viewer-closed viewer-open').removeAttr('style');
				var src_split = $(video).attr('src').split('?');
				$(video).clone().attr('src', src_split[0] + '?start=0&feature=oembed&autoplay=1&rel=0&showinfo=0&controls=0').appendTo('.video-viewer-inner');
				
			});
			
			return false;
		});
		
	  $('button#close-video').on(event_type, function(){
			
			$(this).parent().animate({top: '100%', opacity: 0}, 500, function(){
				$(this).toggleClass('viewer-open viewer-closed').removeAttr('style');
				$(this).find('.video-viewer-inner').empty();
				$('body').removeClass('video-open');
			});
			
			return false;

		});
		
		/* POST GALLERY FUNCTION */
		
		$('body').on(event_type,'a.gallery-img-link', function(){
			
			$(this).parent().siblings().removeClass('active');
			$(this).parent().addClass('active');
			var path = $(this).attr('href');
			var target = $('.gallery-items-viewer');
			var img = new Image();
			$(target).empty();
			
			$(img).attr('src', path).addClass('animated fadeIn').appendTo(target);
			
			console.log(img);
			
		
		return false;
		
		});
	
	});
	
		/* END DOC READY FUNCTION */
		
		$(window).bind('load',function(){
			
			$('.has-bg-img').each(function(index, Element) {
				var src = $(Element).data('src');
				//console.log(src);
				if (src !== undefined) {
				$(Element).css('background-image', 'url(' +src+ ')');
	  			}
			});
	
		});
		
		
})(window.jQuery);