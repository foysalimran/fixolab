<?php get_header(); ?>

<!--====== Page title start ======-->
<section class="bg-secondary">
    <div class="container text-center">
        <div class="max-w-[70%] mx-auto pt-24 md:pt-44 pb-16 md:pb-20">
            <h1 class="text-3xl sm:text-4xl mb-5"><?php the_title(); ?></h1>
            <?php the_excerpt(); ?>
        </div>
    </div>
</section>
<!--====== Page title end ======-->


<!--====== Plugin description start ======-->
<section class="py-16 sm:py-20 ta-case-study">
    <div class="container">
        <div class="md:grid md:grid-cols-12 gap-8 mb-12">
            <div class="rounded-lg  md:col-span-6 lg:col-span-7 mb-8 md:mb-0">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="md:col-span-6 lg:col-span-5">
                <div class="mb-6 text-xl leading-8">
                    <?php the_excerpt(); ?>
                </div>

                <?php
                $meta = get_post_meta(get_the_ID(), 'ta_metabox', true);

                $contributions = isset($meta['our-contribution']) ? $meta['our-contribution'] : '';

                ?>

                <?php if ($contributions) :  ?>

                    <h3 class="text-xl mb-2"><?php _e('Our Contribution', 'fixolab'); ?></h3>
                    <ul class="mb-6">
                        <?php foreach ($contributions as $contribution) : ?>
                            <li class="flex items-center gap-4 mb-1"><svg class="fill-font-color-light" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                </svg> <?php echo $contribution['item']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?php if ($meta['date-started']) : ?>
                    <p class="mb-2"><?php _e('Start On:', 'fixolab'); ?> <?php echo isset($meta['date-started']) ? $meta['date-started'] : ''; ?> </p>
                <?php endif; ?>

                <p class="mb-2">
                    <?php _e('Published On:', 'fixolab'); ?> <?php the_time('m/d/Y'); ?></p>

                <p class="mb-2">

                    <?php the_terms($post->ID, 'skills', 'Skills: ', ', ', ' '); ?>
                </p>
                <?php if (isset($meta['live-link']) && $meta['live-link']) : ?>
                    <a target="_blank" class="ta-btn-primary my-5" href="<?php echo $meta['live-link'] ? $meta['live-link']['url'] : ''; ?>"><?php _e('Live demo', 'fixolab'); ?></a>
                <?php endif; ?>
            </div>
        </div>

        <?php the_content(); ?>



        <?php
        $args = array(
            'post_type' => 'portfolio',
        );
        $the_query = new WP_Query($args);
        $count = $the_query->found_posts;


        ?>

        <?php
        if ($count > 1) {
        ?>
            <div class="bg-secondary px-10 py-8 mt-8">
                <div class="grid grid-cols-3 items-center">
                    <div class="prev-post">
                        <?php previous_post_link(); ?>
                    </div>
                    <a href="<?php bloginfo('home'); ?>/portfolio" class="flex items-center justify-center"><svg width="32" height="32" class="fill-font-color-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M384 96V224H256V96H384zm0 192V416H256V288H384zM192 224H64V96H192V224zM64 288H192V416H64V288zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                        </svg>
                    </a>

                    <div class="next-post">
                        <?php next_post_link(); ?>
                    </div>

                </div>
            </div>
        <?php
        }
        ?>

    </div>
</section>
<!--====== Plugin description end ======-->
<?php get_footer(); ?>