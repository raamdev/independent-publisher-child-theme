<?php

/**
 * You can add your own functions here. You can also override functions that are
 * called from within the parent theme functions.php. See below for an example.
 *
 */


// Add a favicon to your site. You need to add favicon image to the images folder of Independent Publisher Child Theme for this to work.
function blog_favicon() {
  echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.ico" />' . "\n";
}
add_action('wp_head', 'blog_favicon');
