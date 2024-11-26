<?php
/*
 * Template Name: Portfolio
 */
get_header(); ?>
<!--====== Page title start ======-->
<section class="bg-secondary">
    <div class="container text-center">
        <div class="max-w-[70%] mx-auto pt-24 md:pt-44 pb-16 md:pb-20">
            <h1 class="text-3xl sm:text-4xl mb-0"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</section>
<!--====== Page title end ======-->
<!--====== Plugin list start ======-->
<section class="ta-case-study py-20">
    <div class="container">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $args = array(
                'post_type' => 'portfolio',
                'post_per_page' => 9,
            );
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()) {
                $the_query->the_post();
            ?>

                <div class="shadow-lg rounded border border-secondary overflow-hidden">
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="p-5 px-[30px] pb-[26px] related-articles">
                        <div class="text-[13px] text-primary">
                            <?php the_terms($post->ID, 'skills', '', ', ', ' '); ?>
                        </div>

                        <h3 class="text-lg leading-6  mt-3 mb-2">
                            <a class="text-font-color hover:text-primary" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>
<!--====== Plugin list end ======-->

<?php get_footer(); ?>