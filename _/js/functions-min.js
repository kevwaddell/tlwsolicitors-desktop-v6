!function($){function t(){return window.print(),window.stop&&(location.reload(),window.stop()),!1}function n(){for(var t,n=window.location.href.slice(window.location.href.indexOf("?")+1).split("&"),o=0;o<n.length;o++)t=n[o].split("="),"gclid"===t[0]&&1===$("#input_23_12").length&&$("input#input_23_12").val(t[1]),"gclid"===t[0]&&1===$("#input_22_27").length&&$("input#input_22_27").val(t[1]),"gclid"===t[0]&&1===$("#input_26_24").length&&$("input#input_26_24").val(t[1]),"gclid"===t[0]&&1===$("#input_25_24").length&&$("input#input_25_24").val(t[1]),"gclid"===t[0]&&$.cookie(t[0],t[1],{expires:1,path:"/"})}var o="click";n(),$(document).ready(function(){if(window.location.hash){var n=$("html, body"),o=$("section#form-section");n.animate({scrollTop:o.offset().top-n.offset().top+n.scrollTop()})}$(".main-txt > p,h1,h2,h3,h4,h5,h6").widowFix({letterLimit:10}),$("a.services-nav-link > span.title span").widowFix({letterLimit:10}),$(".selectpicker").selectpicker({style:"btn-lg hp-select",size:5}),$(".selectpicker").find("select").selectpicker({style:"btn btn-group btn-default",width:"100%"}),$("body").on("click","button#jump-2-form",function(){return $("html, body").animate({scrollTop:$("section#form-section").offset().top},500),!1}),$("body").on("click","button#nav-btn",function(){var t=$("#top-nav").find(".nav-wrapper").outerHeight();return $("#top-nav").animate({height:t+"px"},300,function(){$("body").toggleClass("nav-closed nav-open"),$(this).toggleClass("nav-closed nav-open").removeAttr("style")}),!1}),$("#top-nav").on("click","button#close-nav",function(){return $("#top-nav").animate({height:"0px"},300,function(){$("body").toggleClass("nav-open nav-closed"),$(this).toggleClass("nav-open nav-closed").removeAttr("style"),$("li.with-sub-nav").removeClass("sub-open").addClass("sub-closed")}),!1}),$("#top-nav").on("click","li.with-sub-nav > a",function(){var t=$(this).parent(),n=$(t).siblings();return $(t).siblings().removeClass("sub-open").addClass("sub-closed"),$(n).find(".sub-open").length>0&&$(n).find(".sub-open").removeClass("sub-open").addClass("sub-closed"),$(t).toggleClass("sub-open sub-closed"),!1}),$("body").on("click","button#search-btn",function(){return $("#search-pop-up").toggleClass("off on"),$("body").addClass("search-open"),!1}),$("body").on("click","button#close-search",function(){return $("#search-pop-up").hasClass("on")&&($("#search-pop-up").removeClass("on").addClass("turn-off"),$(".turn-off").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("turn-off").addClass("off"),$("body").removeClass("search-open")})),!1}),$("body").on("click","button#route-finder-btn",function(){return $("#route-finder-pop-up").toggleClass("off on"),$("body").addClass("route-finder-open"),!1}),$("body").on("click","button#close-route-finder",function(){return $("#route-finder-pop-up").hasClass("on")&&($("#route-finder-pop-up").removeClass("on").addClass("turn-off"),$(".turn-off").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("turn-off").addClass("off"),$("body").removeClass("route-finder-open")})),!1}),$("body").on("click","button#continue-read-btn",function(){var t=$("#content-extra-inner").outerHeight();return $("button#continue-read-btn").addClass("hidden"),$("html, body").animate({scrollTop:$("#content-extra-inner").offset().top-20},500),$("#content-extra").animate({height:t+"px"},500,function(){$("#content-extra").removeClass("closed").addClass("open").removeAttr("style")}),!1}),$("body").on("click","button#close-content-extra-btn",function(){return $("button#continue-read-btn").removeClass("hidden"),$("html, body").animate({scrollTop:$(".main-txt").offset().top-200},500),$("#content-extra").animate({height:"0px"},500,function(){$("#content-extra").removeClass("open").addClass("closed").removeAttr("style")}),!1}),$("body").on("click","#txt-only-content button.access-btn",function(){if($(this).data().size){var t=$(this).attr("data-size");$(this).siblings().not("#access-btn-brightness").removeClass("active"),$(this).addClass("active"),$(".main-txt").removeClass("txt-md txt-lg txt-sm").addClass(t)}if($(this).data("status")){$(this).toggleClass("off on");var n=$(this).data().status,o;console.log(n),"bg-white"==n&&(o="bg-black",$("#txt-only-content").removeClass("bg-white").addClass(o),$(this).attr("data-status",o).data("status",o)),"bg-black"==n&&(o="bg-white",$("#txt-only-content").removeClass("bg-black").addClass("bg-white"),$(this).attr("data-status",o).data("status",o)),console.log(o)}return!1}),$("body").on("click","button#print-pg-btn",function(){t()}),$("body").on("click","button#txt-only-btn",function(){var t=$(".content-section").find(".main-txt"),n=$(".banner-title .container").text(),o=$(t).clone(),e=$("#txt-only-content").innerHeight()-170;if(n){$('<div class="title-header">'+n+"</div>").appendTo("#txt-only-wrapper")}return $(o).appendTo("#txt-only-wrapper").slimScroll({height:e+"px"}),$("#txt-only-wrapper").fadeIn("fast"),$("body").addClass("txt-only-open"),$("#txt-only-content").removeClass("closed").addClass("open"),!1}),$("body").on("click","button#close-txt-only-btn",function(){return $("#txt-only-wrapper").fadeOut("fast").empty(),$("#txt-only-content").removeClass("open").addClass("closed"),$("body").removeClass("txt-only-open"),$("#txt-only-wrapper").hasClass("bg-black")&&$("#txt-only-wrapper").removeClass("bg-black").addClass("bg-white"),!1});var e=function(){1===$("#xmas-popup-wrap").length&&$("#xmas-popup-wrap").hasClass("pop-up-inactive")&&($("#xmas-popup-btn-wrap").removeClass("pop-up-inactive").addClass("pop-up-active"),$("#xmas-popup-wrap").fadeIn("slow",function(){$(".xmas-popup-inner").removeClass("hidden").addClass("animated slideInUp")}))};$(".xmas-popup-inner").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).hasClass("bounceOutDown")&&($("#xmas-popup-wrap").fadeOut("fast").removeClass("pop-up-active").addClass("pop-up-inactive"),$("#xmas-popup-btn-wrap").removeClass("pop-up-active").addClass("pop-up-inactive"),$(this).removeClass("animated bounceOutDown").addClass("hidden"))}),$("body").on("click","button#xmas-popup-btn-open",function(){return e(),!1}),$("body").on("click","button#close-xmas-popup",function(){return $(".xmas-popup-inner").removeClass("slideInUp").addClass("bounceOutDown"),!1}),$("body").on("click",".faq-nav > button",function(){var t=$(this).data().src;return $(this).siblings().removeClass("btn-active"),$(this).addClass("btn-active"),$(".faq-item.active").animate({top:"100%",opacity:0},300,function(){$(this).removeClass("active")}),$("#"+t).animate({top:"0%",opacity:1},500,function(){$("#"+t).addClass("active")}),!1}),$("a.video-link").on("click",function(){var t=$(this).attr("href"),n=$(t).find("video"),o=$(n).attr("id")+"-viewing";return $("body").addClass("video-open"),$("#video-viewer").animate({top:"0px",opacity:1},500,function(){$(this).toggleClass("viewer-closed viewer-open").removeAttr("style"),$(n).clone().attr("id",o).appendTo(".video-viewer-inner"),document.getElementById(o).play()}),!1}),$("button#close-video").on("click",function(){return $(this).parent().animate({top:"100%",opacity:0},500,function(){$(this).toggleClass("viewer-open viewer-closed").removeAttr("style"),$(this).find(".video-viewer-inner").empty(),$("body").removeClass("video-open")}),!1}),$("body").on("click","a.gallery-img-link",function(){$(this).parent().siblings().removeClass("active"),$(this).parent().addClass("active");var t=$(this).attr("href"),n=$(".gallery-items-viewer"),o=new Image;return $(n).empty(),$(o).attr("src",t).addClass("animated fadeIn").appendTo(n),console.log(o),!1}),$("body").on("click","a.jump-2-link",function(){var t=$(this).attr("href"),n=$(t).offset().top-40;return $("html, body").animate({scrollTop:n},500),!1})}),$(window).bind("load",function(){setTimeout(function(){$("body").removeClass("loading atfc-desktop-css"),$("document").find("#critical-css").remove(),1===$("#wide-map-canvas").length&&initMap()},2e3),$(".has-bg-img").each(function(t,n){var o=$(n).data("src");void 0!==o&&$(n).css("background-image","url("+o+")")})})}(window.jQuery);