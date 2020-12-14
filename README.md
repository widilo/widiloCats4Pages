# widiloCats4Pages
widilo®Cats4Pages - Add tags and categories to WordPress Pages with ease

![widiloCats4Pages Plugin for WordPress](https://github.com/widilo/widiloCats4Pages/blob/main/widiloCats4Pages-Screenshot.png?raw=true)

Have you created your website with the CMS WordPress or had it created? Then you will have noticed that you can only add categories and keywords to your posts, but not to your pages.

Unfortunately, the CMS WordPress does not provide for adding categories and keywords to pages. With a view to good usability, an orderly structure of your website, thematic search functions or SEO, it makes perfect sense to categorize pages as well as articles and to provide them with tags or keywords.
If you want to add categories and keywords to your WordPress pages, you can use this small code snippet or our free plugin for WordPress.

If you are familiar with PHP and the creation and editing of WordPress themes, you can add the following code snippet to your functions.php. Please note, however, that the code snippet will be overwritten as soon as your theme receives an update.

If you want to implement the snippet permanently in your functions.php, you should create a child theme with an unchangeable functions.php.

If you are not very familiar with PHP or changing WordPress themes or creating child themes, we provide you this small, free widilo®Cats4Pages, Plugin for WordPress, Version 1.0.1, for download here. 

Now add this code snippet at the end of your functions.php:

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

: )
