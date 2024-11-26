<?php get_header(); ?>
<section class="pt-40 pb-24 bg-white">
      <div class="container text-center">
        <img class="mx-auto mb-8" src="<?php echo get_template_directory_uri(); ?>/assets/images/404.svg" />
        <h1 class="mb-8 text-7xl"><?php esc_html_e('404', 'fixolab');?></h1>
        <p class="mb-8"><?php esc_html_e('Sorry! the page you are looking for doesn\'t exist', 'fixolab');?></p>
        <a class="ta-btn-primary" href="<?php bloginfo('url'); ?>"><?php esc_html_e('Go to Home', 'fixolab');?></a>
      </div>
    </section>
<?php get_footer(); ?>