

<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> x-data="{ open:false }" @keydown.escape.window="open=false">

<a class="skip-link sr-only focus:not-sr-only" href="#content">Skip to content</a>

<header class="border-b">
   <div class="container mx-auto flex items-center gap-20 py-6 px-4">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="font-semibold">
         <?php bloginfo('name'); ?>
      </a>

      <!-- Desktop nav -->
      <nav class="hidden md:flex" aria-label="Primary">
         <?php
         wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'primary-menu flex gap-6 items-center',
            // 'submenu_class'  => 'ml-6 mt-2 flex flex-col gap-2',
            'depth'          => 2,
         ]);
         ?>
      </nav>
      <!-- Mobile "Menu" button -->
      <button
         class="md:hidden border rounded px-3 py-1"
         @click="open = !open"
         x-text="open ? 'Close' : 'Menu'">
      </button>
   </div>

   <!-- Mobile nav -->
   <div
      class="md:hidden px-4 pb-3"
      x-show="open"
      x-transition.opacity
      x-cloak
      aria-label="Mobile menu">
      <?php
      wp_nav_menu([
         'theme_location' => 'primary',
         'container'      => false,
         'menu_class'     => 'flex flex-col gap-3',
         'submenu_class'  => 'ml-4 mt-1 flex flex-col gap-2',
         'depth'          => 2,
      ]);
      ?>
   </div>
</header>

<main id="content" class="container mx-auto px-4 py-10">
