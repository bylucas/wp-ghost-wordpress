!function($,t){"use strict";var e=$(document);e.ready(function(){var t=$(".post-content");t.fitVids(),$(".scroll-down").arctic_scroll(),$(".menu-button, .nav-cover, .nav-close").on("click",function(t){t.preventDefault(),$("body").toggleClass("nav-opened nav-closed")})}),$.fn.arctic_scroll=function(t){var e={elem:$(this),speed:500},o=$.extend(e,t);o.elem.click(function(t){t.preventDefault();var e=$(this),a=$("html, body"),s=!!e.attr("data-offset")&&e.attr("data-offset"),n=!!e.attr("data-position")&&e.attr("data-position"),c;s?(c=parseInt(s),a.stop(!0,!1).animate({scrollTop:$(this.hash).offset().top+c},o.speed)):n?(c=parseInt(n),a.stop(!0,!1).animate({scrollTop:c},o.speed)):a.stop(!0,!1).animate({scrollTop:$(this.hash).offset().top},o.speed)})}}(jQuery);