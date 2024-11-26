<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>


  <section class="h-[380px] bg-secondary">
    <div class="container text-center">
      <h1 class="mb-0 text-3xl sm:text-4xl pt-44">
        <?php the_title(); ?>
      </h1>

    </div>
  </section>

  <section class="pt-16 pb-24 bg-white">
    <div class="container px-4 m-auto text-lg font-normal sp-single-page">

      <div class="entry-content prose lg:prose-xl shadow px-10 py-6 m-auto">
        <?php the_content(); ?>
      </div>
      <!-- .entry-content -->

    </div>
  </section>
<?php endwhile; ?>
<?php get_footer(); ?>