<?php

/**
 * Template Name: Contact
 */
get_header(); ?>

<!--====== Hero section start ======-->
<section class="h-[380px] bg-secondary">
  <div class="container text-center">
    <h1 class="mb-0 text-3xl sm:text-4xl pt-44">
      <?php the_title(); ?>
    </h1>
  </div>
</section>
<section class="py-20">
  <div class="container">
    <div class="grid grid-cols-12 gap-8">
      <div class="col-span-12 md:col-span-8">
        <div class="p-8 border rounded shadow-lg border-secondary">

          <ul class="grid grid-cols-3 gap-3 mb-6 text-center">
            <li class="p-3 border rounded shadow-md cursor-pointer md:py-6 md:px-5 border-secondary tab tab-active">
              <svg class="mx-auto mb-2 text-3xl fill-font-color-light" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
              </svg>
              <span class="text-font-color">Custom Project</span>

            </li>
            <li class="p-3 border rounded shadow-md cursor-pointer md:py-6 md:px-5 border-secondary tab">
              <svg class="mx-auto mb-2 text-3xl fill-font-color-light" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 240a24 24 0 1 0 0-48 24 24 0 1 0 0 48zM368 321.6V328c0 8.8 7.2 16 16 16s16-7.2 16-16v-6.4c0-5.3 4.3-9.6 9.6-9.6h40.5c7.7 0 13.9 6.2 13.9 13.9c0 5.2-2.9 9.9-7.4 12.3l-32 16.8c-5.3 2.8-8.6 8.2-8.6 14.2V384c0 8.8 7.2 16 16 16s16-7.2 16-16v-5.1l23.5-12.3c15.1-7.9 24.5-23.6 24.5-40.6c0-25.4-20.6-45.9-45.9-45.9H409.6c-23 0-41.6 18.6-41.6 41.6z" />
              </svg>
              <span class="text-font-color">General Question</span>
            </li>
            <li class="p-3 border rounded shadow-md cursor-pointer md:py-6 md:px-5 border-secondary tab">

              <svg class="mx-auto mb-2 text-3xl fill-font-color-light" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <path d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z" />
              </svg>
              <span class="text-font-color">Support</span>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane tab-pane-active">
              <?php echo do_shortcode('[contact-form-7 id="1843" title="Custom Project"]') ?>
            </div>
            <div class="tab-pane">
              <?php echo do_shortcode('[contact-form-7 id="1845" title="Pre-Sale Question"]') ?>
            </div>
            <div class="tab-pane">
              <?php echo do_shortcode('[contact-form-7 id="1846" title="Support"]') ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-12 md:col-span-4">
        <div class="relative mb-5 group ta-featured-item">
          <a target="_blank" class="block h-full p-5 duration-300 ease-linear border rounded shadow-lg lg:p-8 border-secondary hover:border-primary" href="<?php echo get_bloginfo('url'); ?>/docs">
            <div class="inline-block p-1 border-2 rounded border-secondary">
              <img width="256" height="256" src="<?php echo get_template_directory_uri(); ?>/assets/images/doc-icon.svg" alt="" class="max-w-[50px] lg:max-w-[64px] rounded-md" />
            </div>
            <div>
              <h3 class="mt-5 mb-2 text-xl">Documentation</h3>
              <p class="mb-0 text-font-color">
                To begin utilizing our plugins, kindly consult this guide, which provides instructions on how to download, install, and effectively utilize them.
              </p>
            </div>
            <span class="text-primary text-sm leading-[30px] text-center absolute top-8 lg:top-12 right-4 lg:right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100">
              <button class="ta-btn-primary">Read Docs</button>
            </span>
          </a>
        </div>
        <div class="relative mb-5 group ta-featured-item">
          <a target="_blank" class="block h-full p-5 duration-300 ease-linear border rounded shadow-lg lg:p-8 border-secondary hover:border-primary" href="https://www.youtube.com/@fixolab/videos">
            <div class="inline-block p-1 border-2 rounded border-secondary">
              <img width="256" height="256" src="<?php echo get_template_directory_uri(); ?>/assets/images/video-icon.svg" alt="" class="max-w-[50px] lg:max-w-[64px] rounded-md" />
            </div>
            <div>
              <h3 class="mt-5 mb-2 text-xl">Video Tutorials</h3>
              <p class="mb-0 text-font-color">
                Our comprehensive video tutorials encompass all the essential information you require to initiate your journey with our plugins. Make sure to explore them for a thorough understanding and seamless usage experience.
              </p>
            </div>
            <span class="text-primary text-sm leading-[30px] text-center absolute top-8 lg:top-12 right-4 lg:right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100">
              <button class="ta-btn-primary">Watch Video</button>
            </span>
          </a>
        </div>
        <div class="relative group ta-featured-item">
          <a target="_blank" class="block h-full p-5 duration-300 ease-linear border rounded shadow-lg lg:p-8 border-secondary hover:border-primary" href="<?php echo get_bloginfo('url'); ?>/faqs">
            <div class="inline-block p-1 border-2 rounded border-secondary">
              <img width="256" height="256" src="<?php echo get_template_directory_uri(); ?>/assets/images/faq-icon.svg" alt="" class="max-w-[50px] lg:max-w-[64px] rounded-md" />
            </div>
            <div>
              <h3 class="mt-5 mb-2 text-xl">FAQs</h3>
              <p class="mb-0 text-font-color">
                If you have inquiries regarding our products, please refer to the following compilation of frequently asked questions for answers and assistance.
              </p>
            </div>
            <span class="text-primary text-sm leading-[30px] text-center absolute top-8 lg:top-12 right-4 lg:right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100">
              <button class="ta-btn-primary">Browse FAQs</button>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--====== Testimonial section end ======-->
<?php get_footer(); ?>