<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="ta-header" id="menu">
    <nav class="container flex flex-wrap items-center gap-2">
      <div class="items-center md:flex">
        <div class="site-branding">
          <?php
          the_custom_logo();
          ?>
          <?php if(!the_custom_logo()) : ?>
          <a class="text-2xl font-black text-font-color" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
          <?php endif; ?>

        </div><!-- .site-branding -->
        <div class="shrink-0">
          <?php wp_nav_menu(
            array(
              'theme_location'  => 'main'
            )
          ); ?>

        </div>
      </div>
      <button id="menu-button" type="button" class="inline-flex items-center ml-auto md:hidden">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>


      <!-- 
      <div class="w-full ml-auto md:flex md:w-auto">
        <ul>
          <li class="pb-2 md:pb-0">
            <a class="relative" href="#"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
              </svg>
            </a>
          </li> -->

      <!-- <li>
              <a class="ta-btn-secondary" href="#">Login</a>
            </li> -->
      <!-- </ul>
      </div> -->
    </nav>

  </header>
  <!--====== Header section end ======-->