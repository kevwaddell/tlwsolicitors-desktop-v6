!function($){function n(){return window.print(),window.stop&&(location.reload(),window.stop()),!1}var t="click";$(window).on("resize",function(){}),$(document).ready(function(){$.getScript("https://api.feefo.com/api/javascript/tlw-solicitors"),$(document).bind("gform_page_loaded",function(n,t,o){22==t&&12==o&&$(".selectpicker").find("select").selectpicker({style:"btn btn-group btn-default",width:"100%"})}),$(".selectpicker").selectpicker({style:"btn-lg hp-select",size:5}),$(".selectpicker").find("select").selectpicker({style:"btn btn-group btn-default",width:"100%"}),$("body").on("click","button#jump-2-form",function(){return $("html, body").animate({scrollTop:$("section#form-section").offset().top},500),!1}),$("body").on("click","button#nav-btn",function(){var n=$("#top-nav").find(".nav-wrapper").outerHeight();return $("#top-nav").animate({height:n+"px"},300,function(){$("body").toggleClass("nav-closed nav-open"),$(this).toggleClass("nav-closed nav-open").removeAttr("style")}),!1}),$("#top-nav").on("click","button#close-nav",function(){return $("#top-nav").animate({height:"0px"},300,function(){$("body").toggleClass("nav-open nav-closed"),$(this).toggleClass("nav-open nav-closed").removeAttr("style"),$("li.with-sub-nav").removeClass("sub-open").addClass("sub-closed")}),!1}),$("#top-nav").on("click","li.with-sub-nav > a",function(){var n=$(this).parent(),t=$(n).siblings();return $(n).siblings().removeClass("sub-open").addClass("sub-closed"),$(t).find(".sub-open").length>0&&$(t).find(".sub-open").removeClass("sub-open").addClass("sub-closed"),$(n).toggleClass("sub-open sub-closed"),!1}),$("body").on("click","button#search-btn",function(){return $("#search-pop-up").toggleClass("off on"),$("body").addClass("search-open"),!1}),$("body").on("click","button#close-search",function(){return $("#search-pop-up").hasClass("on")&&($("#search-pop-up").removeClass("on").addClass("turn-off"),$(".turn-off").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("turn-off").addClass("off"),$("body").removeClass("search-open")})),!1}),$("body").on("click","button#continue-read-btn",function(){var n=$("#content-extra-inner").outerHeight();return $("button#continue-read-btn").addClass("hidden"),$("html, body").animate({scrollTop:$("#content-extra-inner").offset().top-20},500),$("#content-extra").animate({height:n+"px"},500,function(){$("#content-extra").removeClass("closed").addClass("open").removeAttr("style")}),!1}),$("body").on("click","button#close-content-extra-btn",function(){return $("button#continue-read-btn").removeClass("hidden"),$("html, body").animate({scrollTop:$(".main-txt").offset().top-200},500),$("#content-extra").animate({height:"0px"},500,function(){$("#content-extra").removeClass("open").addClass("closed").removeAttr("style")}),!1}),$(".scrollable-txt").slimScroll({height:"470px",size:"15px",position:"left",alwaysVisible:!0,railVisible:!0,railColor:"#D7D7D7",color:"#4b4b4b"}),$("body").on("click","#txt-only-content button.access-btn",function(){}),$("body").on("click",".tk-slider-nav a",function(){return!1}),$("body").on("click","button#print-pg-btn",function(){n()}),$("body").on("click","button#txt-only-btn",function(){return!1}),$("body").on("click","button#close-txt-only-btn",function(){return!1}),$("body").on("click","button#quick-links-btn-show",function(){return!1}),$("body").on("click",".ql-section-links a",function(){return!1}),$("body").on("click","button#quick-links-btn-up",function(){return!1}),$("body").on("click","button#quick-links-btn-dwn",function(){return!1}),$("body").on("click","button#close-awards-btn",function(){return!1});var t=function(){1===$("#xmas-popup-wrap").length&&$("#xmas-popup-wrap").hasClass("pop-up-inactive")&&($("#xmas-popup-btn-wrap").removeClass("pop-up-inactive").addClass("pop-up-active"),$("#xmas-popup-wrap").fadeIn("slow",function(){$(".xmas-popup-inner").removeClass("hidden").addClass("animated slideInUp")}))};$(".xmas-popup-inner").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).hasClass("bounceOutDown")&&($("#xmas-popup-wrap").fadeOut("fast").removeClass("pop-up-active").addClass("pop-up-inactive"),$("#xmas-popup-btn-wrap").removeClass("pop-up-active").addClass("pop-up-inactive"),$(this).removeClass("animated bounceOutDown").addClass("hidden"))}),$("body").on("click","button#xmas-popup-btn-open",function(){return t(),!1}),$("body").on("click","button#close-xmas-popup",function(){return $(".xmas-popup-inner").removeClass("slideInUp").addClass("bounceOutDown"),!1}),$("body").on("click",".faq-nav > button",function(){var n=$(this).data().src,t,o;return $(".faq-item.active").animate({top:"100%",opacity:0},300,function(){$(this).removeClass("active")}),$("#"+n).animate({top:"0%",opacity:1},300,function(){$("#"+n).addClass("active")}),t=1===$("#"+n).prev().length?$("#"+n).prev().attr("id"):$(".faq-item").last().attr("id"),o=1===$("#"+n).next().length?$("#"+n).next().attr("id"):$(".faq-item").first().attr("id"),$("button#prev-faq").attr("data-src",t),$("button#prev-faq").data("src",t),$("button#next-faq").attr("data-src",o),$("button#next-faq").data("src",o),!1}),$("a.video-link").on("click",function(){return!1}),$("button#close-video").on("click",function(){return!1}),$("body").on("click","a.gallery-img-link",function(){return!1})}),$(window).bind("load",function(){$(".full-bg-img").each(function(n,t){var o=$(t).data("src");void 0!==o&&$(t).css("background-image","url("+o+")")}),$(".has-bg-img").each(function(n,t){var o=$(t).data("src");void 0!==o&&$(t).css("background-image","url("+o+")")})})}(window.jQuery);