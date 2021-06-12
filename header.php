<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head() ; ?>
    <?php
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    ?>
  </head>
  <body <?php body_class() ?> >
    <header>
      <!-- NAVBAR -->
      <nav class="navbar">
        <div class="container nav_search_r">
          <span class="toggle_navbar"><i class="las la-bars"></i></span>
          <div class="navbar-brand">
            <a href="<?php echo esc_url(home_url('/')) ?>">Sho<span>hag.</span></a>
          </div>
          <?php 
            wp_nav_menu( array(
              'theme_location'  => 'primary_menu'
            ) )
          ?>
          <div class="search">
            <a href="javascript:;" class="search-toggle"></a>
            <div class="nav-search">
              <?php get_search_form() ?>
            </div>
          </div>
        </div>
      </nav>
      <div class="search mobile-search-bar">
      <a href="javascript:;" class="search-toggle mobile-search-toggle"></a>
            <div class="nav-search">
              <?php get_search_form() ?>
            </div>
      </div>
      <!-- NAVBAR -->
    </header>
