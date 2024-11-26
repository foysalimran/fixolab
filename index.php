<?php get_header(); ?>
<!--====== Section title start ======-->
<section class="h-[380px] bg-secondary">
  <div class="container text-center">
    <h1 class="mb-0 text-3xl sm:text-4xl pt-44">
      <?php _e('The FixoLab Blog', 'themeateler'); ?>
    </h1>
    <p class="mt-5 text-lg">
      <?php _e('Stay Updated with the Latest Tips, Tutorials, Inspiration, and Curated Collections', 'fixolab'); ?>
    </p>
  </div>
</section>
<!--====== Section title end ======-->
<!--====== Blog section start ======-->
<div class="py-16 sm:py-20">
  <div class="container">
    <div class="flex flex-col justify-between gap-4 mb-8 md:flex-row">
      <h3 class="text-2xl "><?php _e('Blog & Stories', 'fixolab'); ?></h3>
      <div class="flex flex-col items-center gap-4 sm:flex-row">
        <div class="border-b border-b-secondary flex gap-2 items-center w-full md:w-[250px]">
          <svg width="16" height="16" class="fill-font-color-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
          </svg>
          <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <label class="w-full p-0 mb-0">
              <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'your-theme-textdomain'); ?></span>
              <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'your-theme-textdomain'); ?>" name="s" />
            </label>
          </form>
        </div>

        <form class="block w-full mt-1 bg-white border rounded-md md:w-44 border-secondary focus:outline-none focus:ring-primary focus:border-indigo-500 sm:text-sm" id="category-select" class="category-select" action="<?php echo esc_url(home_url('/')); ?>" method="get">

          <?php
          $args = array(
            'show_option_none' => __('Select category', 'fixolab'),
            'show_count'       => 1,
            'orderby'          => 'name',
            'echo'             => 0,
          );
          ?>

          <?php $select  = wp_dropdown_categories($args); ?>
          <?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
          <?php $select  = preg_replace('#<select([^>]*)>#', $replace, $select); ?>

          <?php echo $select; ?>

          <noscript>
            <input type="submit" value="View" />
          </noscript>

        </form>
      </div>
    </div>

    <?php
    $args  = array(
      'posts_per_page'      => 1,
      'post__in'            => get_option('sticky_posts'),
      'ignore_sticky_posts' => 1,
    );
    $sec_query = new WP_Query($args);
    ?>
    <?php if ($sec_query->have_posts()) : ?>
      <?php while ($sec_query->have_posts()) : $sec_query->the_post(); ?>
        <div class="items-center block grid-cols-6 overflow-hidden border rounded shadow-lg lg:grid border-secondary">
          <div class="col-span-3 p-9">
            <div class="text-sm text-primary">
              <?php the_category(', ', '', ''); ?>
            </div>
            <h2 class="mt-5 mb-0 text-2xl ">
              <a class="text-font-color hover:text-primary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="mt-5">
              <?php the_excerpt(); ?>
            </p>
            <span class="flex justify-between mt-3 text-xs font-normal text-font-color-light">
              <span><?php _e('By', 'fixolab'); ?>
                <a class="hover:text-primary" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author"><?php the_author(); ?></a>
              </span>
              <span class="flex items-center gap-2">
                <svg width="14" height="14" class="fill-font-color-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z" />
                </svg>
                <?php echo get_the_time('F jS, Y'); ?>
              </span>
            </span>
          </div>
          <div class="flex-shrink-0 col-span-3 post-thumbnail">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_post_thumbnail('medium_large'); ?>
            </a>
          </div>

        </div>
      <?php endwhile; ?>
    <?php else : ?>

    <?php endif; ?>

    <!-- reset global post variable. After this point, we are back to the Main Query object -->
    <?php wp_reset_postdata(); ?>


    <?php
    $args  = array(
      'ignore_sticky_posts' => 1,
    );
    $the_query = new WP_Query($args); ?>

    <?php if ($the_query->have_posts()) : ?>
      <div class="grid gap-8 mt-16 md:grid-cols-2 lg:grid-cols-3">
        <?php
        while ($the_query->have_posts()) : ?>
          <?php $the_query->the_post();
          get_template_part('template-parts/content', get_post_type());
          ?>
        <?php
        endwhile; ?>
      </div>
    <?php
    else :
      get_template_part('template-parts/content', 'none');

    endif;
    ?>

    <div class="mt-12">
      <div class="ta-pagination">
        <?php the_posts_pagination(
          array(
            "screen_reader_text" => ' ',
            "prev_text"          => '<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>',
            "next_text"          => '<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>'
          )
        ) ?>
      </div>
    </div>

  </div>
</div>
<!--====== Blog section end ======-->
<?php get_footer(); ?>