<!doctype html>
<!--[if IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title(' • ', true, 'right'); ?></title>

    <meta name="description" content="We are Portland’s Premier Technical Soccer Training Development Program. Academia de Futeboltraining is designed for players 8-21 years of age, who are inspired to take their game to the next level.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/img/touch/favicon.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/library/img/touch/chrome-touch-icon-196x196.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Academia de Futebol Training">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/img/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <?php wp_head(); ?>

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>

  </head>

  <body <?php body_class(); ?>>

  <?php get_template_part( 'library/partials/icons', 'svg' ); ?>

  <header class="header-mobile">
    <div class="container">

      <div class="row">
        <div class="span12">
          <a href="/" class="logo logo-mobile">
            <img src="<?php echo get_template_directory_uri(); ?>/library/img/logos/academia-de-futeboltraining.png" alt="Academia de futeboltraining" width="60" height="60">
          </a>
          <a href="#" class="nav-show nav-trigger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </a>
        </div>
      </div>

    </div>
  </header>

  <header class="header-main">
    <div class="container">

      <div class="row">
        <div class="span12 text-right">
          <div class="dropdown">
            <a href="#" class="hide-show-dropdown">
              Languages
              <span class="icon icon-arrow-down">
                <svg class="icon-svg">
                  <use xlink:href="#icon-arrow-down" />
                </svg>
              </span>
            </a>
            <?php wp_nav_menu(array(
              'container' => false,
              'menu' => __( 'Translation Menu', 'bonestheme' ),
              'menu_class' => 'list-dropdown list-dropdown-translation',
              'theme_location' => 'translation-links'
            )); ?>
          </div>
          <a href="#" class="icon icon-x nav-hide nav-trigger">
            <svg class="icon-svg">
              <use xlink:href="#icon-x" />
            </svg>
          </a>
        </div>
      </div>

      <div class="row pad-t--20">
        <div class="span8 span-m-12">

          <a href="/" class="logo logo-main">
            <img src="<?php echo get_template_directory_uri(); ?>/library/img/logos/academia-de-futeboltraining.png" alt="Academia de futeboltraining" width="60" height="60">
          </a>

          <nav class="nav-main">
            <?php wp_nav_menu(array(
              'container' => false,
              'menu' => __( 'The Main Menu', 'bonestheme' ),
              'menu_class' => 'list-inline',
              'theme_location' => 'main-nav'
            )); ?>
          </nav>

        </div>

        <div class="span4 text-right span-m-12">
          <nav class="nav-utility">
            <ul class="list-inline">
              <li class="social facebook">
                <a href="https://www.facebook.com/pages/Academia-De-Futeboltraining/617889128237790" target="_blank">
                  <span class="icon icon-facebook">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-facebook" />
                    </svg>
                  </span>
                </a>
              </li>
              <li class="social instagram">
                <a href="https://instagram.com/futeboltraining/" target="_blank">
                  <span class="icon icon-instagram">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-instagram" />
                    </svg>
                  </span>
                </a>
              </li>
              <li class="social twitter">
                <a href="https://twitter.com/Futeboltraining" target="_blank">
                  <span class="icon icon-twitter">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-twitter" />
                    </svg>
                  </span>
                </a>
              </li>
              <?php if ( is_user_logged_in() ) : ?>
              <li>
                <a href="<?php echo get_page_link(81); ?>" class="btn btn--secondary btn--outline-white">Your Profile</a>
              </li>
              <li>
                <a href="<?php echo wp_logout_url(); ?>" class="btn btn--secondary">Log Out</a>
              </li>
              <?php else : ?>
              <li>
                <a href="<?php echo get_page_link(78); ?>" class="btn btn--secondary btn--outline-white">Register</a>
              </li>
              <li>
                <a href="<?php echo get_page_link(76); ?>" class="btn btn--secondary">Sign In</a>
              </li>
              <?php endif; ?>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </header>