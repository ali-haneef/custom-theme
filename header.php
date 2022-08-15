<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
    <div class="display-flex">
      <h1 class="sizing"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
      <?php
        wp_nav_menu( array( 
          'theme_location' => 'my-custom-menu', 
          'container_class' => 'custom-menu-class' ) ); 
      ?>
    </div>
  </body>