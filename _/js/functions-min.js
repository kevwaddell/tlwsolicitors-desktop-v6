!function(s){function e(){return window.print(),
//workaround for Chrome bug - https://code.google.com/p/chromium/issues/detail?id=141633
window.stop&&(location.reload(),//triggering unload (e.g. reloading the page) makes the print dialog appear
window.stop()),!1}function t(){for(var t,n=window.location.href.slice(window.location.href.indexOf("?")+1).split("&"),o=0;o<n.length;o++)"gclid"===(t=n[o].split("="))[0]&&1===s("#input_23_12").length&&s("input#input_23_12").val(t[1]),"gclid"===t[0]&&1===s("#input_22_27").length&&s("input#input_22_27").val(t[1]),"gclid"===t[0]&&1===s("#input_26_5").length&&s("input#input_26_5").val(t[1]),"gclid"===t[0]&&1===s("#input_25_24").length&&s("input#input_25_24").val(t[1]),"gclid"===t[0]&&s.cookie(t[0],t[1],{expires:1,path:"/"})}var a="click";t(),s(document).ready(function(){
/*
		$.getScript("https://api.feefo.com/api/javascript/tlw-solicitors");
		*/
if(window.location.hash){var t=s("html, body"),n=s("section#form-section");t.animate({scrollTop:n.offset().top-t.offset().top+t.scrollTop()})}s(".main-txt > p,h1,h2,h3,h4,h5,h6").widowFix({letterLimit:10}),s("a.services-nav-link > span.title span").widowFix({letterLimit:10}),
//console.log($(window).scrollTop());
s(".selectpicker").selectpicker({style:"btn-lg hp-select",size:5}),s(".selectpicker").find("select").selectpicker({style:"btn btn-group btn-default",width:"100%"}),
//Scroll to button
s("body").on(a,"button#jump-2-form",function(){return s("html, body").animate({scrollTop:s("section#form-section").offset().top},500),!1}),
/* 	MAIN TOP NAVIGATION FUNCTIONS 
			Button functions to open top navigation and 
			control the internal menu functions as well
			as close the menu.
		*/
s("body").on(a,"button#nav-btn",function(){var t=s("#top-nav").find(".nav-wrapper").outerHeight();return s("#top-nav").animate({height:t+"px"},300,function(){s("body").toggleClass("nav-closed nav-open"),s(this).toggleClass("nav-closed nav-open").removeAttr("style")}),!1}),s("#top-nav").on(a,"button#close-nav",function(){return s("#top-nav").animate({height:"0px"},300,function(){s("body").toggleClass("nav-open nav-closed"),s(this).toggleClass("nav-open nav-closed").removeAttr("style"),s("li.with-sub-nav").removeClass("sub-open").addClass("sub-closed")}),!1}),s("#top-nav").on("click","li.with-sub-nav > a",function(){var t=s(this).parent(),n=s(t).siblings();return s(t).siblings().removeClass("sub-open").addClass("sub-closed"),0<s(n).find(".sub-open").length&&s(n).find(".sub-open").removeClass("sub-open").addClass("sub-closed"),
//console.log($(siblings).find('.sub-open').length);
s(t).toggleClass("sub-open sub-closed"),!1}),
/* END OF TOP NAV FUNCTIONS */
/* 	HEADER SEARCH BUTTON 
			Button functions for search pop up menu
		*/
s("body").on(a,"button#search-btn",function(){return s("#search-pop-up").toggleClass("off on"),s("body").addClass("search-open"),!1}),s("body").on(a,"button#close-search",function(){return s("#search-pop-up").hasClass("on")&&(s("#search-pop-up").removeClass("on").addClass("turn-off"),s(".turn-off").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){s(this).removeClass("turn-off").addClass("off"),s("body").removeClass("search-open")})),!1}),
/* END OF HEADER SEARCH FUNCTIONS */
/* 	ROUTE FINDER BUTTON 
			Button functions for route finder pop up
		*/
s("body").on(a,"button#route-finder-btn",function(){return s("#route-finder-pop-up").toggleClass("off on"),s("body").addClass("route-finder-open"),!1}),s("body").on(a,"button#close-route-finder",function(){return s("#route-finder-pop-up").hasClass("on")&&(s("#route-finder-pop-up").removeClass("on").addClass("turn-off"),s(".turn-off").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){s(this).removeClass("turn-off").addClass("off"),s("body").removeClass("route-finder-open")})),!1}),
/* END OF ROUTE FINDER BUTTON FUNCTIONS */
/* POST CONTINUE READING BUTTONS
		   Functions for the read more button which reveals more
		   content it also has a close function as well. 
	    */
s("body").on("click","button#continue-read-btn",function(){var t=s("#content-extra-inner").outerHeight();return s("button#continue-read-btn").addClass("hidden"),s("html, body").animate({scrollTop:s("#content-extra-inner").offset().top-20},500),s("#content-extra").animate({height:t+"px"},500,function(){s("#content-extra").removeClass("closed").addClass("open").removeAttr("style")}),!1}),s("body").on("click","button#close-content-extra-btn",function(){return s("button#continue-read-btn").removeClass("hidden"),s("html, body").animate({scrollTop:s(".main-txt").offset().top-200},500),s("#content-extra").animate({height:"0px"},500,function(){s("#content-extra").removeClass("open").addClass("closed").removeAttr("style")}),!1}),
/* END OF CONTINUE READING FUNCTIONS */
/* ACCESSABILITY FUNCTIONS 
		   Button actions to control the text size
	    */
s("body").on(a,"#txt-only-content button.access-btn",function(){if(s(this).data().size){var t=s(this).attr("data-size");s(this).siblings().not("#access-btn-brightness").removeClass("active"),s(this).addClass("active"),s(".main-txt").removeClass("txt-md txt-lg txt-sm").addClass(t)}if(s(this).data("status")){s(this).toggleClass("off on");var n=s(this).data().status,o;console.log(n),"bg-white"==n&&(o="bg-black",s("#txt-only-content").removeClass("bg-white").addClass(o),s(this).attr("data-status",o).data("status",o)),"bg-black"==n&&(o="bg-white",s("#txt-only-content").removeClass("bg-black").addClass("bg-white"),s(this).attr("data-status",o).data("status",o)),console.log(o)}return!1}),
/* PAGE TOOLS BTNS */
s("body").on(a,"button#print-pg-btn",function(){e()}),
/* TEXT ONLY FUNCTION */
s("body").on(a,"button#txt-only-btn",function(){var t=s(".content-section").find(".main-txt"),n=s(".banner-title .container").text(),o=s(t).clone(),e=s("#txt-only-content").innerHeight()-170,a;n&&s('<div class="title-header">'+n+"</div>").appendTo("#txt-only-wrapper");return s(o).appendTo("#txt-only-wrapper").slimScroll({height:e+"px"}),s("#txt-only-wrapper").fadeIn("fast"),s("body").addClass("txt-only-open"),s("#txt-only-content").removeClass("closed").addClass("open"),!1}),s("body").on(a,"button#close-txt-only-btn",function(){return s("#txt-only-wrapper").fadeOut("fast").empty(),s("#txt-only-content").removeClass("open").addClass("closed"),s("body").removeClass("txt-only-open"),s("#txt-only-wrapper").hasClass("bg-black")&&s("#txt-only-wrapper").removeClass("bg-black").addClass("bg-white"),!1});
/* POP UP FUNCTIONS */
/* XMAS Pop up Function
		This function controls the Xmas pop up box
	    */
var o=function(){1===s("#xmas-popup-wrap").length&&s("#xmas-popup-wrap").hasClass("pop-up-inactive")&&(s("#xmas-popup-btn-wrap").removeClass("pop-up-inactive").addClass("pop-up-active"),s("#xmas-popup-wrap").fadeIn("slow",function(){s(".xmas-popup-inner").removeClass("hidden").addClass("animated slideInUp")}))};
//Transition end actions
s(".xmas-popup-inner").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){s(this).hasClass("bounceOutDown")&&(s("#xmas-popup-wrap").fadeOut("fast").removeClass("pop-up-active").addClass("pop-up-inactive"),s("#xmas-popup-btn-wrap").removeClass("pop-up-active").addClass("pop-up-inactive"),s(this).removeClass("animated bounceOutDown").addClass("hidden"))}),
//Button actions
s("body").on(a,"button#xmas-popup-btn-open",function(){return o(),!1}),s("#xmas-popup-wrap").on(a,"button#close-xmas-popup",function(t){return console.log(t),s(".xmas-popup-inner").removeClass("slideInUp").addClass("bounceOutDown"),!1}),
/* END OF XMAS POP UP FUNCTIONS */
/* FAQ's BUTTON ACTIONS
		This function controls the FAQ's answers button
		which shows and hides the answer to the question
	    */
/*
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

			return false;
			
		});
*/
s("body").on(a,".faq-nav > button",function(){var t=s(this).data().src;return s(this).siblings().removeClass("btn-active"),s(this).addClass("btn-active"),s(".faq-item.active").animate({top:"100%",opacity:0},300,function(){s(this).removeClass("active")}),s("#"+t).animate({top:"0%",opacity:1},500,function(){s("#"+t).addClass("active")}),!1}),
/* END FAQ's BUTTON ACTIONS

		/* VIDEO LINK FUNCTION */
/* VIDEO LINKS BUTTON ACTIONS
		These functions control the pop up videos
		that show that embed the your Tube video into the pop up inner wrapper
	    */
s("a.video-link").on(a,function(){var t=s(this).attr("href"),n=s(t).find("video"),o=s(n).attr("id")+"-viewing";return s("body").addClass("video-open"),s("#video-viewer").animate({top:"0px",opacity:1},500,function(){s(this).toggleClass("viewer-closed viewer-open").removeAttr("style"),s(n).clone().attr("id",o).appendTo(".video-viewer-inner"),document.getElementById(o).play()}),!1}),s("button#close-video").on(a,function(){return s(this).parent().animate({top:"100%",opacity:0},500,function(){s(this).toggleClass("viewer-open viewer-closed").removeAttr("style"),s(this).find(".video-viewer-inner").empty(),s("body").removeClass("video-open")}),!1}),
/* POST GALLERY FUNCTION */
s("body").on(a,"a.gallery-img-link",function(){s(this).parent().siblings().removeClass("active"),s(this).parent().addClass("active");var t=s(this).attr("href"),n=s(".gallery-items-viewer"),o=new Image;return s(n).empty(),s(o).attr("src",t).addClass("animated fadeIn").appendTo(n),console.log(o),!1}),
/* SCROLL TO SECTION BUTTON */
s("body").on(a,"a.jump-2-link",function(){var t=s(this).attr("href"),n=s(t).offset().top-40;
//console.log($(hash));
return s("html, body").animate({scrollTop:n},500),!1})}),
/* END DOC READY FUNCTION */
s(window).bind("load",function(){s("body").removeClass("loading atfc-desktop-css"),s("head").find("#critical-css").remove(),1===s("#wide-map-canvas").length&&initMap()
/*
			setTimeout(function(){
								
				$('#loader').fadeOut('300', function(){
					$('body').removeClass('loading atfc-desktop-css');
					//$('body').removeClass('loading');
					$('head').find("#critical-css").remove();
				});
				
				if ($('#wide-map-canvas').length === 1) {
				initMap();	
				}
			
			}, 2000);
*/,s(".has-bg-img").each(function(t,n){var o=s(n).data("src");
//console.log(src);
void 0!==o&&s(n).css("background-image","url("+o+")")})})}(window.jQuery);