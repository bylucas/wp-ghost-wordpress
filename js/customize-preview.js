/**
 * Live-update changed settings in real time in the Customizer preview.
 */

(function($) {

    var api = wp.customize;

    // Site title.
    api('blogname', function(value) {
        value.bind(function(to) {
            $('.page-title a').text(to);
        });
    });

    // page tagline.
    api('blogdescription', function(value) {
        value.bind(function(to) {
            $('.page-description').text(to);
        });
    });

})(jQuery);