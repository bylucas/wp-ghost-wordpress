=== wp-Ghost ===
Contributors: howardl
Tags: black, light, two-columns, right-sidebar, responsive-layout, featured-images, post-formats, threaded-comments
Requires at least: 4.0.0
Tested up to: 4.8
Stable tag: 4.8.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html



== Description ==
A light, simple and very responsive theme, based on the popular blogging platform, Ghost - Casper theme. And if you are not happy with the theme, the development files are all in place for a developer to change the theme to their liking.

* Ready to use
* Designed for blogging
* Simple design and very user-friendly
* Cn be developed
* Scss for css
* Bourbon Mixin Library



== Installation ==

1. Download the latest wp-Ghost theme from Github https://github.com/bylucas/ghost-wordpress
2. change the name of the downloaded zip file
3. Go to your WordPress admin, then go 'Appearance' - 'Themes' - 'Add Theme' - 'Upload Theme'
4. Navigate to the downloaded wp-Ghost theme and upload it
5. Go to 'Appearance' - 'wp-ghost' and view the theme information
6. Go to 'Appearance' - 'Editor' - 'style.css' and view the icon instructions 



== Frequently Asked Questions ==

= How do I use Scss, Bourbon to develop the theme? =

The theme is ready for use and if you don't know about theme development then ignore this section and carry on using the theme like you would any other. If you do know about theme development then you can access all the files in the theme folder including the scss files. You'll need a pre-proccessor for parsing the scss to css, two recommended and cheap pre-processors are listed below. You can use the command line if you prefer.

CodeKit: Mac only! with a built-in copy of the Bourbon and Neat libraries, (Highly Recommended)
http://incident57.com/codekit/

Prepros: Mac and Windows (Highly Recommended with a built-in copy of the Bourbon and Neat libraries)
http://alphapixels.com/prepros/

The theme uses mixins from the Bourbon Mixin library a light, easy to use set of mixins which will satisfy most of your development needs.http://bourbon.io/


= How do I use my own CSS styles? =

Use the 'Appearance' - 'Editor' - 'style.css' to add your user css styles. This stylesheet loads after the main style sheet.


= How do I change/insert icons into the menu? =

You will notice styles relating to the navigation icons in 'Appearance' - 'Editor' - 'style.css'. If you add classes pic-1, pic-2 etc, to the 'Appearance' - 'Menus' - 'Main Navigation' - menu css classes section (you may have to enable 'css classes' via 'Screen Options'), you will see default icons loaded from the theme image folder.

To set your own icons, save your icons to a folder and upload it to your website, (use any image format), and change the path to your icons folder.

Set a nice large image for 2x devices eg 100px x 100px.

It's easier if you name your icons pic-1, pic-2 etc, if not make sure you change the styles below to suit your image. You may have to alter size and position to match your icons.

.pic-1 {
	background-image: url(img/pic-1.png);//change this path to suit yours
	background-repeat: no-repeat;
	background-size: 26px 26px;
	background-position: 0 5px;
	}
	
If you have a problem viewing your new styles try clearing the browser data. 


= How do I use the images for the headers =

The header images on the home page, posts page and normal pages eg. Categories, are all background images. Set large images about 1200 x 700 for 2x devices. You may have to experiment with your images for best fit, give your images plenty of room top and bottom.


= How do I use the Page Templates? =

Sitemap
Enable this page via the page templates when making a new page. Add some content eg a sitemap introduction, add a post thumbnail if you wish. When viewed the page should show all your posts, pages, categories etc after your content. This sitemap is a user friendly quick access to your site links and is not a substitute for a search engine xml sitemap, which are usually created via a plugin eg.'Yoast SEO'

Start Page
This page is based on the index/front page ie, it has the same header with site title and description. This can be used as a new home page.


= Where are the Tags? =

There are no Tags
The theme only has categories with the option of loading a background image for your category page from the admin section.



= Additional Notes =

The Author Page
You can set an image for the Author page background in the Profile area of the admin section.

Social icons
Set the social icons in the menus section, the icons appear in the footer(bottom, right) and in the sidebar(under the menu).

Hide Author Biography
The Author Bio appears at the bottom of posts by default. To alter this set a custom field to hide-author-bio set to the value of 1. The code on the single page will hide the Author Biography.

Show Popular Posts on Pages
To show popular posts on pages set a custom field to show-popular-posts set to the value of 1.

Post Images
The post images don't use the alignleft, alignright, aligncenter and alignnone. The images are set to be centered so try and use the full width if possible for more effect.

Custom Logo
The custom logo replaces the top heading in the sidebar when enabled via Appearance - Customise - Site Identity.

Post Content
The post content is 710px wide

Highlight Code
The theme uses highlight.js, an alternative to google code. More information can be found on the highlight website http://highlightjs.org/.

See the readme.md

Download the latest wp-Ghost theme version from https://github.com/bylucas/ghost-wordpress


