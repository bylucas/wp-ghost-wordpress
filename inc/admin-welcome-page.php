<?php
/**
* Handles the theme welcome/info screen in the admin.
* ghost 1.0.0
*/
// Hook into the admin menu.
add_action( 'admin_menu', 'ghost_admin_menu' );
/**
* Adds a custom themes sub-page.
*/
function ghost_admin_menu() {
    $theme = wp_get_theme( get_template() );
    $page = add_theme_page( $theme->display( 'Name' ), $theme->display( 'Name' ), 'edit_theme_options', 'ghost', 'ghost_welcome_page' );
    if ( $page )
        add_action( "admin_head-{$page}", 'ghost_welcome_page_css' );
}
/**
* Outputs some custom CSS to the welcome screen.
*/
function ghost_welcome_page_css() { ?>
<style type="text/css" media="screen">
.appearance_page_ghost .two-col {
clear: both;
}

.appearance_page_ghost .col .dashicons {
margin-top: 3px;
margin-right: 4px;
}
        
        .about-wrap h1 {
            text-align:left;
        }
        
        .about-wrap p {
            font-size: 16px;
            margin-top: 10px;
            text-align:left;
        }
        
        .about-wrap h4 {
            margin-bottom: 0;
            text-align:left;
        }
        
        .about-wrap {
            text-align: center;
        }

        .about-wrap .about-text {
            margin: 1em 0;
        }
        
        .col h3 {
            text-align:left;
        }
</style>
<?php }
/**
* Outputs the custom admin screen.
*/
function ghost_welcome_page() {
$theme = wp_get_theme( get_template() ); ?>
<div class="wrap about-wrap">
    <h1><?php echo $theme->display( 'Name' ); ?></h1>
    <div class="two-col">
        <div class="col about-text">
            
            <p>A <em>no thrills</em>, <em>down to earth</em> theme based on the <strong>Casper</strong> theme from the popular <strong>Ghost</strong> blogging platform. This theme is built for blogging with a <em>simple design</em> and <em>very user-friendly fonts</em> which makes <em>easy reading</em>.</p>
            
            <h4>Custom CSS</h4>
            
            <p>Use the editor to add your user css styles to the style.css. You can also set some icons for the menu, full explanation on the<em> Appearance - Editor - style.css</em></p>
            
            <h4>Header Images</h4>
            <p>The header images on the <em>home page</em>, <em>posts page</em> and <em>normal pages</em> <em>eg. Categories</em>, are all background images. Set large images about <em>1200 x 700</em> for 2x devices. You may have to experiment with your images for best fit, give your images <strong>plenty</strong> of room top and bottom.</p>
            
            <h4>Sitemap</h4>
            <p>Enable this page via the <em>page templates</em> when creating a new page. Add some content <em>eg a sitemap introduction</em>, add a <em>post thumbnail</em> if you wish. When viewed the page should show all your <em>posts</em>, <em>pages</em>, <em>categories</em> etc. This sitemap is a <em>user friendly quick access to your site links</em> and is not a substitute for a <em>search engine xml sitemap</em>, which are usually created via a plugin eg.<em>'Yoast SEO'</em></p>
            
            <h4>Start Page</h4>
            
            <p>This page is based on the <em>index/front</em> page <em>ie</em> it has the same <em>header</em> with <em>site title and description</em>. This can be used as a <em>new home page</em>.</p>
            <h4>There are no Tags</h4>
            
            <p>The theme only uses <em>categories</em>(<em>no tags</em>), with the option of loading a background image for your <em>category</em> page from the <em>admin</em> section.
                <h4>Highlight Code</h4>
                
                <p>The theme uses <em>highlight.js</em>, an alternative to <em>google code</em>. More information can be found on the <a href="http://highlightjs.org/">highlight</a> website.</p>
            </div>
            <!-- .col -->
            <div class="col about-text">
                <img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="wp-ghost screenshot" width="250" height="250" />
                
                <h4>The Author Page</h4>
                <p>You can set an image for the <em>Author page background</em> in the <em>Profile</em> area of the <em>admin</em> section.</p>
                
                <h4>Social icons</h4>
                <p>Set the <em>social icons</em> in the <em>menus</em> section, the icons appear in the footer(<em>bottom, right</em>) and in the sidebar(<em>under the menu</em>).</p>
                
                <h4>Hide Author Biography</h4>
                <p>The <em>Authur Bio</em> appears at the bottom of posts by default. To alter this set a <em>custom field</em> to <em>hide-author-bio</em> set to the value of <strong>1</strong>. The code on the single page will hide the Author Biography.</p>

                <h4>Show Popular Posts on Pages</h4>
                <p>To show <em>popular posts</em> on pages set a <em>custom field</em> to <em>show-popular-posts</em> set to the value of <strong>1</strong>.</p>
                
                <h4>Post Images</h4>
                <p>The post images don't use the <em>alignleft, alignright, aligncenter</em> and <em>alignnone</em>. The images are set to be centered so try and use the full width if possible for more effect.

                <h4>Custom Logo</h4>
                <p>The <em>custom logo</em> replaces the top heading in the sidebar when enabled via <em>Appearance - Customise - Site Identity</em>.
                    
                <h4>Finally</h4>
                <p>Information about this theme is also shown in <em>readme.txt</em> and <em>readme.md</em> files within the theme folder. The <em>readme.md</em> can be viewed on the github <a href="https://github.com/bylucas/ghost-wordpress">wp-Ghost</a> theme page.
                    
                </div>
                <!-- .col -->
            </div>
            <!-- .two-col -->
            <div class="two-col">
                <div class="col">
                    <h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'ghost' ); ?></h3>
                    <p>
                        <?php esc_html_e( 'Contact via the howardl website', 'ghost' ); ?>
                    </p>
                    <p>
                        <a class="button" href="https://howardl.uk/" target="_blank">
                            <?php esc_html_e( 'Support', 'ghost' ); ?>
                        </a>
                    </p>
                </div>
                <!-- .col -->
                <div class="col">
                    <h3><i class="dashicons dashicons-admin-appearance"></i><?php esc_html_e( 'More Themes', 'ghost' ); ?></h3>
                    <p>
                        <?php esc_html_e( 'More themes by howardl can be found here', 'ghost' ); ?>
                    </p>
                    <p>
                        <a class="button" href="https://howardl.uk/themes" target="_blank">
                            <?php esc_html_e( 'View More Themes', 'ghost' ); ?>
                        </a>
                    </p>
                </div>
                <!-- .col -->
            </div>
            <!-- .two-col -->
        </div>
        <!-- .wrap -->
        <?php }