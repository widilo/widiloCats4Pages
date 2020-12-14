# widiloCats4Pages - Plugin for WordPress

### Add tags and categories to WordPress Pages with ease.

![widiloCats4Pages Plugin for WordPress](https://github.com/widilo/widiloCats4Pages/blob/main/widiloCats4Pages-Screenshot.png?raw=true)

Have you created your website with WordPress? Then you will have noticed that you can only add categories and keywords to your posts, but not to your pages. Unfortunately, the CMS WordPress does not provide for adding categories and keywords to pages. With a view to good usability, an orderly structure of your website, thematic search functions or SEO, it makes perfect sense to categorize pages as well as articles and to provide them with tags or keywords.
If you want to add categories and keywords to your WordPress pages, you can use this small code snippet or our free plugin for WordPress.

If you are familiar with PHP and the creation and editing of WordPress themes, you can add the following code snippet to your functions.php. Please note, however, that the code snippet will be overwritten as soon as your theme receives an update.

**To implement the snippet permanently in your functions.php, you should create a child theme with an unchangeable functions.php.**

Add this code snippet at the end of your functions.php:

```
/*
widilo®Cats4Pages // add tags and categories to WordPress pages
@see https://widilo.de
@since 1.0.0
*/
function widilo_add_cats_to_pages() {
register_taxonomy_for_object_type( 'post_tag', 'page' );
register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'widilo_add_cats_to_pages' );

/*
widilo®Cats4Pages // include all tags and categories in wp_query
@see https://widilo.de
@since 1.0.1
*/
function widilo_add_cats_to_pages_query($wp_query) {
if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
if ($wp_query->get('category_name')) $wp_query->set('post_type', 'any');
}
add_action('pre_get_posts', 'widilo_add_cats_to_pages_query');
```
After you have saved the changes in the functions.php, you will see two new columns in your WordPress page overview: Categories and Keywords. Congratulations you did it!

### Download our lates plugin release: widilo®Cats4Pages v1.0.1

If you are not very familiar with PHP or changing WordPress themes or creating child themes, we provide you the latest release of widilo®Cats4Pages, Version 1.0.1, for download here: https://github.com/widilo/widiloCats4Pages/releases/tag/widiloCats4pages-v.1.0.1 

### Description / Installation

=== Plugin Name ===
Author: https://muennecke-vollmers.de
Tags: categories, tags, pages
Requires at least: 4.5
Tested up to: 5.5.3
Stable tag: 4.5
Version: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

(c) 2020 Münnecke & Vollmers GbR, widilo® 

== Description ==

widilo®Cats4Pages adds tags and categories to WordPress pages. You only have to activate the plugin to enable categories and tags to pages.

== Installation ==

How to install the widilo®Cats4Pages WordPress plugin and get it working:

Via SFTP:

1. Upload `widilo-cats4pages.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's all!

Install widilo®Cats4Pages using the WordPress Admin Plugin Upload:

1. Go to the WordPress admin area and visit Plugins => Add New page.
2. Click on the Upload Plugin button on top of the page.
3. Click on the choose file button and select the plugin file widilo®Cats4Pages.zip
4. After you've selected the file, you need to click on the Install button.
5. You will see a success message after the installation is finished.
6. Once installed, you need to click on Activate Plugin. That's all!

Have fun with widilo®Cats4Pages!

: )
