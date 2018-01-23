//User scripts

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    // Wait for window load
   setTimeout(function(){
    $('body').addClass('loaded');
  }, 800);

    function initNavMenu(container) {
        // Add dropdown toggle that display child menu items.
        container.find('.menu-item-has-children > a').after('<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>');

        // Toggle buttons and submenu items with active children menu items.
        container.find('.current-menu-ancestor > button').addClass('toggle-on');
        container.find('.current-menu-ancestor > .sub-menu').addClass('toggled-on');

        container.find('.dropdown-toggle').click(function(e) {
            var _this = $(this);
            e.preventDefault();
            _this.toggleClass('toggle-on');
            _this.next('.sub-menu').toggleClass('toggled-on');
            _this.attr('aria-expanded', _this.attr('aria-expanded') === 'false' ? 'true' : 'false');
            _this.html(_this.html() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand);
        });
    }
    initNavMenu($('.nav-menu'));


    //Back to the top button placed in the footer
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.scroll-on-page-link').fadeIn();
        } else {
            $('.scroll-on-page-link').fadeOut();
        }
    });

    //Smooth Scrolling script
    $('a[href*="#"]:not([href="#"], [title])').click(function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    // initiate the highlight.js code
    hljs.initHighlightingOnLoad();

}); // end page load scripts