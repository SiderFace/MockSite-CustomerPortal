

<?php
// Theme supports
add_action('after_setup_theme', function () {
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   add_theme_support('menus');

   // Primary nav menu
   register_nav_menus([
      'primary' => __('Primary Menu', 'mocksite-provia'),
   ]);
});


// styles & scripts
add_action('wp_enqueue_scripts', function () {
   // Tailwind CSS
   $css_path = '/assets/css/tw.css';
   $css_file = get_stylesheet_directory() . $css_path;
   if ( file_exists($css_file) ) {
      wp_enqueue_style(
         'mocksite-tailwind',
         get_stylesheet_directory_uri() . $css_path,
         [],
         filemtime($css_file)
      );
   }

   // Alpine.js (CDN)
   wp_enqueue_script(
      'alpine',
      'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
      [],
      null,
      true
   );
   wp_script_add_data('alpine', 'defer', true);

   // Optional custom scripts
   $js_path = '/src/js/main.js';
   $js_file = get_stylesheet_directory() . $js_path;
   if ( file_exists($js_file) ) {
      wp_enqueue_script(
         'mocksite-main',
         get_stylesheet_directory_uri() . $js_path,
         [],
         filemtime($js_file),
         true
      );
   }
});
