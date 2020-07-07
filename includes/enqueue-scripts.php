<?php

// Enqueue Foxy JS
add_action( 'wp_enqueue_scripts', 'wpfastcomments_frontend_scripts', 100 );
function wpfastcomments_frontend_scripts() {
  wp_enqueue_script(
    'wpfoxy-js',
    'https://cdn.foxycart.com/static-wp/loader.js',
    [],
    '',
    true    
  );

}

// Add attributes to script
function foxywp_add_script_attributes($tag, $handle) {
  $optimize = ['wpfoxy-js'];
  
  foreach($optimize as $optimize_script) {
     if ($optimize_script === $handle) {
        return str_replace(' src', ' data-cfasync="false" async="async" defer="defer" src', $tag);
     }
  }
  return $tag;
}
add_filter('script_loader_tag', 'foxywp_add_script_attributes', 10, 2);

?>