<?php get_header(); ?>
<section class="h-[380px] bg-secondary"></section>
<!--====== Blog details start ======-->

<section class="pb-16 sm:pb-20 ta-single-blog">
    <div class="container lg:!w-[800px]">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <div class="-mt-52">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="text-center mb-10 mt-12">
                    <div class="text-[13px]  text-[#167496]">
                        <?php the_category(); ?>
                    </div>

                    <h1 class="text-4xl  mt-5 mb-0">
                        <?php the_title(); ?>
                    </h1>
                    <div class="flex items-center justify-center mt-6">
                        <?php echo get_avatar(get_the_author_meta('user_email'), '35', null, null, array('class' => array('rounded-full', 'shadow-lg', 'mr-2.5', 'border', 'border-[#ededed]', 'entered'))); ?>
                        <p class="text-lg font-normal">
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" title="<?php echo esc_attr(get_the_author()); ?>"><?php the_author(); ?></a><span class="text-sm text-gray-400">&nbsp;|&nbsp;<time class="entry-date updated" datetime="2023-04-20T09:27:09+06:00"><?php the_date() ?></time>&nbsp;</span>
                        </p>
                    </div>
                </div>
                <div class="ta-blog-details entry-content text-lg font-normal mb-6 leading-ta-34 ta-single-page ta-single-post">
                    <?php the_content(); ?>

                </div>
                <ul class="flex items-center gap-4 flex-wrap mt-8 clear-both">
                    <li>
                        <h3 class=" text-xl">Share:</h3>
                    </li>
                    <li>
                        <a class="flex items-center gap-2 border border-secondary px-2 py-1 rounded" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>">
                            <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                            </svg>
                            Facebook
                        </a>
                    </li>
                    <li class="flex items-center gap-4">
                        <a class="flex items-center gap-2 border border-secondary px-2 py-1 rounded" href="http://twitter.com/share?url=<?php echo the_permalink(); ?>&text=<?php the_title() ?>">
                            <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                            </svg>
                            Twitter
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-2 border border-secondary px-2 py-1 rounded" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo the_permalink(); ?>&title=<?php the_title() ?>">
                            <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                            </svg>
                            Linkedin
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-2 border border-secondary px-2 py-1 rounded" href="http://api.whatsapp.com/send?text&url=<?php echo the_permalink(); ?>&title=<?php the_title() ?>">
                            <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>
                            Whatsapp
                        </a>
                    </li>
                </ul>
                <div class="sm:flex block shadow-lg rounded border border-secondary items-center mt-16 p-9">
                    <div class="shrink-0 mr-7">
                        <?php echo get_avatar(get_the_author_meta("ID"), 'avatar', '', '', array('class' => 'avatar avatar-100 photo rounded-full border border-secondary')); ?>
                    </div>
                    <div class="mt-4 sm:mt-0">
                        <p class="text-lg font-semibold mb-2">
                            <span class="text-font-color-light">
                                <?php _e('Written by', 'fixolab'); ?>
                            </span>
                            <a class="text-font-color" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>" rel="author"><?php the_author(); ?></a>
                        </p>
                        <?php
                        $author_id = get_the_author_meta("ID");
                        $author_description = get_the_author_meta("description", $author_id);

                        if (!empty($author_description)) {
                            echo $author_description;
                        }
                        ?>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <div class="mt-20">
            <h4 class="text-[22px]  mb-0">Related Articles</h4>
            <div class="grid md:grid-cols-2 gap-8 mt-8">
                <!-- featured_post -->
                <?php global $post;
                $categories = get_the_category($post->ID);
                $number_of_related_posts = 4;

                if ($categories) {
                    $cat_ids = array();
                    foreach ($categories as $category) $cat_ids[] = $category->term_id;
                    $args = array(
                        'category__in' => $cat_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page' => $number_of_related_posts, // Number of related posts to display.
                        'ignore_sticky_posts' => 1
                    );
                    $related_posts = new wp_query($args);

                    while ($related_posts->have_posts()) :
                        $related_posts->the_post();
                        global $post;
                        get_template_part('template-parts/content', get_post_type());
                    endwhile;
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>

<?php if ( is_single() && comments_open() ) : ?>

        <div id="comments" class="comment-form ta-contact-form rounded mt-24">
            <div id="respond" class="border border-secondary shadow-lg p-5 sm:p-9">
                <?php
                if (!post_password_required()) {
                    comments_template();
                }
                ?>
            </div>
            <!-- #respond -->
        </div>
        <?php endif; ?>
    </div>
</section>
<!--====== Blog details end ======-->
<?php get_footer(); ?>