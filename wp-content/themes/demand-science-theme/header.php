<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demand Science</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <?php

    if( is_front_page() ):
      $demand_science_classes = array( 'demand-science-home' );
    else:
      $demand_science_classes = array( 'demand-science-default-page' );
    endif;

  ?>

  <body <?php body_class( $demand_science_classes ); ?>>

  <div class="row desktop-menus">
    <div class="col-xs-4">
      <?php wp_nav_menu(array('theme_location'=>'logo')); ?>

    </div>
    <div class="col-xs-8">
      <?php wp_nav_menu(array('theme_location'=>'navbar')); ?>

    </div>
  </div>

  <div class="row mobile-menus">
    <div class="col-xs-4">
      <?php wp_nav_menu(array('theme_location'=>'logo')); ?>

    </div>
    <div class="col-xs-8">
      <?php wp_nav_menu(array('theme_location'=>'mobilenavbar')); ?>

    </div>
  </div>



  <br>
