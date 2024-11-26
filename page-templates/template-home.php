<?php

/**
 * Template Name: Home
 */
get_header(); ?>

<!--====== Hero section start ======-->
<section class="h-full pb-20 lg:pb-0 lg:h-[750px] bg-secondary">
  <div class="container h-full px-4 m-auto">
    <div class="relative z-10 items-center block h-full grid-cols-5 gap-8 lg:grid xl:grid-cols-6">
      <div class="col-span-3 pt-48 lg:pt-0">
        <h1 class="mb-0 text-3xl xl:text-ta-section-title">
          Reliable and Professional
          <span class="text-primary">WordPress Plugins</span> to Grow Your Business
        </h1>
        <p class="mt-6 text-lg">
          We specialize in crafting exceptional WordPress-based solutions, empowering your business to thrive and achieve accelerated growth.
        </p>
        <a href="<?php bloginfo('home'); ?>/#plugins" class="mt-9 ta-btn-primary group">See Our Plugins
          <svg width="12" height="12" viewBox="0 0 14 14" class="inline-block duration-200 ease-linear fill-white group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 0L5.76625 1.23375L10.6488 6.125H0V7.875H10.6488L5.76625 12.7663L7 14L14 7L7 0Z"></path>
          </svg>
        </a>
        <div class="p-4 mt-12 bg-white rounded shadow ta-hero-promo lg:py-5 lg:px-6">
          <p class="mb-5">
            Empowering
            <strong>15,000+</strong> Businesses with Innovation
          </p>
          <div class="grid grid-cols-5 gap-2 md:gap-4">
            <div class="flex flex-col justify-center col-span-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/freemius.png" alt="freemius" />
            </div>
            <div class="flex flex-col justify-center col-span-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sponsor-page-logo-mayor.png" alt="WP mayor" />
            </div>
            <div class="flex flex-col justify-center col-span-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WPLeaders-Logo.png" alt="WPLeaders" />
            </div>

            <div class="flex flex-col justify-center col-span-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wpallclub-logo.png" alt="all cloud" />

            </div>
            <div class="flex flex-col justify-center col-span-1">
              <img src="//grabhosts.net/wp-content/uploads/2023/10/Grabhost-logo-300.png" alt="all cloud" />
            </div>

          </div>
        </div>
      </div>
      <div class="my-20 lg:my-0 ml-auto h-[350px] xl:h-[400px] bg-banner-img w-full bg-no-repeat bg-center bg-contain xl:bg-right col-span-2 xl:col-span-3 relative z-10"></div>
    </div>
  </div>
</section>
<!--====== Hero section end ======-->
<!--====== Featured section start ======-->
<section id="plugins" class="py-12 ta-featured md:py-20">
  <div class="container">
    <div class="mb-12 text-center">
      <h2 class="text-ta-section-title -mt-1.5 mb-0">
        Our Featured Plugins
      </h2>
      <span class="inline-block mt-5 text-lg font-normal">Unlock Limitless Possibilities with our Empowering Suite of WordPress Plugins</span>
    </div>
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 lg:gap-7">

      <div class="relative group ta-featured-item">
        <a class="block h-full p-5 duration-300 ease-linear border rounded shadow-lg hover:-translate-y-1 lg:p-8 border-secondary hover:border-primary" href="https://1.envato.market/eventful">
          <div class="inline-block p-1 border-2 rounded border-secondary">
            <img width="256" height="256" src="https://themeatelier.net/wp-content/uploads/2024/01/eventufl.png" alt="EventFul" class="max-w-[64px] rounded-md" />
          </div>
          <div>
            <h3 class="mt-5 mb-2 text-xl">Events Showcase For The Events Calendar</h3>
            <p class="mb-0 text-font-color">
              A range of powerful features and tools that empower you to take your event showcasing to the next level.
            </p>
          </div>
          <span class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"><svg width="16" height="16" class="fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </span>
        </a>
      </div>

      <div class="relative group ta-featured-item">
        <a class="block h-full p-5 duration-300 ease-linear border rounded shadow-lg hover:-translate-y-1 lg:p-8 border-secondary hover:border-primary" href="https://1.envato.market/darkify">
          <div class="inline-block p-1 border-2 rounded border-secondary">
            <img width="256" height="256" src="https://themeatelier.net/wp-content/uploads/2024/01/darkify.png" alt="Darkify" class="max-w-[64px] rounded-md" />
          </div>
          <div>
            <h3 class="mt-5 mb-2 text-xl">WordPress Dark Mode Plugin</h3>
            <p class="mb-0 text-font-color">
              An extraimly advanced dark mode plugin for any WordPress website
            </p>
          </div>
          <span class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"><svg width="16" height="16" class="fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </span>
        </a>
      </div>

      <div class="relative group ta-featured-item">
        <a class="block h-full p-5 duration-300 ease-linear border rounded shadow-lg hover:-translate-y-1 lg:p-8 border-secondary hover:border-primary" href="https://codecanyon.net/item/nilam-domain-for-sale-auction-plugin/43690219">
          <div class="inline-block p-1 border-2 rounded border-secondary">
            <img width="256" height="256" src="<?php echo get_template_directory_uri(); ?>/assets/images/domain-for-sale.png" alt="Domain for sale" class="max-w-[64px] rounded-md" />
          </div>
          <div>
            <h3 class="mt-5 mb-2 text-xl">Domain For Sale</h3>
            <p class="mb-0 text-font-color">
              The ultimate tool for parking and selling your unused domain names.
            </p>
          </div>
          <span class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"><svg width="16" height="16" class="fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </span>
        </a>
      </div>
      <div class="relative group ta-featured-item">
        <a class="block h-full p-5 duration-300 ease-linear border rounded shadow-lg hover:-translate-y-1 lg:p-8 border-secondary hover:border-primary" href="https://codecanyon.net/item/greetwp-video-bubble-wordpress-plugin/39588757">
          <div class="inline-block p-1 border-2 rounded border-secondary">
            <img width="256" height="256" src="<?php echo get_template_directory_uri(); ?>/assets/images/greet.png" alt="Greet video bubble" class="max-w-[64px] rounded-md" />
          </div>
          <div>
            <h3 class="mt-5 mb-2 text-xl">
              Greet - Video Bubble Warm Welcome
            </h3>
            <p class="mb-0 text-font-color">
              A powerful and user-friendly video bubble plugin for WordPress that provides an opportunity to create a dynamic and engaging welcome experience for your visitors.
            </p>
          </div>
          <span class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"><svg width="16" height="16" class="fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </span>
        </a>
      </div>
      <div class="relative group ta-featured-item">
        <a class="block h-full p-5 duration-300 ease-linear border rounded shadow-lg hover:-translate-y-1 lg:p-8 border-secondary hover:border-primary" href="https://codecanyon.net/item/bizreview-business-review-wordpress-plugin/24235499">
          <div class="inline-block p-1 border-2 rounded border-secondary">
            <img width="256" height="256" src="<?php echo get_template_directory_uri(); ?>/assets/images/bizreview.png" alt="BizReview" class="max-w-[64px] rounded-md" />
          </div>
          <div>
            <h3 class="mt-5 mb-2 text-xl">BizReview - Business Review Plugin</h3>
            <p class="mb-0 text-font-color">
              A suitable plugin to show your business reviews from different platforms like Google business review, Facebook business review, Trustpilot, Yelp, etc.
            </p>
          </div>
          <span class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"><svg width="16" height="16" class="fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </span>
        </a>
      </div>
      <div class="relative group ta-featured-item">
        <a class="block h-full p-5 duration-300 ease-linear border rounded shadow-lg hover:-translate-y-1 lg:p-8 border-secondary hover:border-primary" href="https://codecanyon.net/item/idonatepro-blood-request-and-blood-donor-management-system-wordpress-plugin/21525871">
          <div class="inline-block p-1 border-2 rounded border-secondary">
            <img width="256" height="256" src="<?php echo get_template_directory_uri(); ?>/assets/images/idonate.png" alt="IDonate" class="max-w-[64px] rounded-md" />
          </div>
          <div>
            <h3 class="mt-5 mb-2 text-xl">iDonate - Blood Donation Plugin</h3>
            <p class="mb-0 text-font-color">
              A professional Blood request and blood donor management system for any kind of WordPress website
            </p>
          </div>
          <span class="text-primary text-sm leading-[30px] text-center absolute h-8 w-8 flex items-center justify-center border border-primary rounded-full top-12 right-12 invisible group-hover:visible ease-linear duration-300 opacity-0 group-hover:opacity-100"><svg width="16" height="16" class="fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </span>
        </a>
      </div>
    </div>
    <div class="text-center">
      <a class="inline-block px-6 py-3 mt-10 text-base text-white duration-300 ease-linear rounded hover:bg-primary bg-primary group" href="https://1.envato.market/ta-plugins">
        <?php _e('View All Plugins', 'fixolab'); ?>
        <svg width="12" height="12" viewBox="0 0 14 14" class="inline-block duration-200 ease-linear fill-white group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg">
          <path d="M7 0L5.76625 1.23375L10.6488 6.125H0V7.875H10.6488L5.76625 12.7663L7 14L14 7L7 0Z"></path>
        </svg>
      </a>
    </div>
  </div>
</section>
<!--====== Featured section end ======-->

<!--====== Why choose us section start ======-->
<!-- <section class="py-16 ta-why-choose-us bg-secondary sm:py-20">
  <div class="container">
    <div class="mb-20 text-center">
      <h2 class="text-ta-section-title -mt-1.5 mb-0">
        Why customers love Fixolab?
      </h2>
      <span class="inline-block mt-5 text-lg font-normal">Our robust WordPress plugins help businesses and organizations
        worldwide to scale up by <br class="hidden lg:block" />
        solving your web problems.</span>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
      <div class="text-center bg-white rounded-md p-7">
        <img width="51" height="40" class="m-auto entered lazyloaded" src="<?php echo get_template_directory_uri(); ?>/assets/images/code.svg" alt="" />
        <h3 class="mt-5 mb-0 text-xl">Standard Code</h3>
        <p class="mt-2 text-start">
          We have expert developers who follow the WordPress coding
          standards to provide you with secure and up-to-date plugins that
          are extendable and customizable.
        </p>
      </div>
      <div class="text-center bg-white rounded-md p-7">
        <img width="51" height="40" class="m-auto entered lazyloaded" src="<?php echo get_template_directory_uri(); ?>/assets/images/pricing-icon.svg" alt="" />
        <h3 class="mt-5 mb-0 text-xl">
          Most Affordable Pricing
        </h3>
        <p class="mt-2 text-start">
          We are proudly offering world-class professional WordPress plugins
          at the most affordable pricing. We'll surely make you say - Yes,
          'cheap and best' do exist!
        </p>
      </div>
      <div class="text-center bg-white rounded-md p-7">
        <img width="51" height="40" class="m-auto entered lazyloaded" src="<?php echo get_template_directory_uri(); ?>/assets/images/support-icon.svg" alt="" />
        <h3 class="mt-5 mb-0 text-xl">World-Class Support</h3>
        <p class="mt-2 text-start">
          We provide dedicatedly One To One top-notch email support
          instantly whenever you face any issues. Over 90% of our customers
          rate our support Great!
        </p>
      </div>
      <div class="text-center bg-white rounded-md p-7">
        <img width="51" height="40" class="m-auto entered lazyloaded" src="<?php echo get_template_directory_uri(); ?>/assets/images/refund.svg" alt="" />
        <h3 class="mt-5 mb-0 text-xl">Easy Refund Policy</h3>
        <p class="mt-2 text-start">
          Get a full refund within 14 days after your first purchase If you
          don't like any of our plugin(s). We follow a No Questions Asked
          refund policy for all our products.
        </p>
      </div>
      <div class="text-center bg-white rounded-md p-7">
        <img width="51" height="40" class="m-auto entered lazyloaded" src="<?php echo get_template_directory_uri(); ?>/assets/images/multilangual-icon.svg" alt="" />
        <h3 class="mt-5 mb-0 text-xl">Multilingual Ready</h3>
        <p class="mt-2 text-start">
          You can translate our plugins in your language with .po & .mo
          files. This plugin is Right To Left-RTL ready. You can even create
          multilingual websites.
        </p>
      </div>
      <div class="text-center bg-white rounded-md p-7">
        <img width="51" height="40" class="m-auto entered lazyloaded" src="<?php echo get_template_directory_uri(); ?>/assets/images/robust-icon.svg" alt="" />
        <h3 class="mt-5 mb-0 text-xl">
          Robust Free & Pro Plugins
        </h3>
        <p class="mt-2 text-start">
          We have 18+ plugins that are maintained and supported in the
          WP.org plugin repository with a combined average rating of 4.7
          stars. Most plugins have a pro.
        </p>
      </div>
    </div>
  </div>
</section> -->
<!--====== Why choose us section end ======-->

<!--====== Testimonial section start ======-->
<section class="py-12 ta-testimonial md:py-20 bg-secondary">
  <div class="container">
    <div class="mb-12 text-center">
      <h2 class="text-ta-section-title -mt-1.5 mb-0">
        Testimonials
      </h2>
      <span class="inline-block mt-5 text-lg font-normal">What People Think About Our Products</span>
    </div>
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 lg:gap-7">
      <div class="p-4 bg-white rounded-md ta-testimonial-item lg:p-6">
        <div class="flex gap-3 mb-5">
          <div class="w-20 h-20">
            <img class="w-full rounded-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/user_01.png" alt="User" />
          </div>
          <div class="text-left">
            <h6 class="font-medium">CoderCafeThemes</h6>
            <p class="mb-1">Founder & CEO - CoderCafeThemes </p>
            <ul class="flex gap-1">
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-0">
          Very nice & clean code as well, i can select just one reason, or i would select many design, code quality, flexibility, customizability and great customer support! Good luck!
        </p>
      </div>
      <div class="p-4 bg-white rounded-md ta-testimonial-item lg:p-6">
        <div class="flex gap-3 mb-5">
          <div class="w-20 h-20">
            <img class="w-full rounded-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/user_01.png" alt="User" />
          </div>
          <div class="text-left">
            <h6 class="font-medium">Firmafotografering</h6>
            <p class="mb-1">Founder & CEO - www.firmafotografering.dk</p>
            <ul class="flex gap-1">
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-0">
          Hi - this plugin is awesome, and just what I needed without monthly fees. Keep up the good work. You can see an example on my homepage here: www.firmafotografering.dk
        </p>
      </div>
      <div class="p-4 bg-white rounded-md ta-testimonial-item lg:p-6">
        <div class="flex gap-3 mb-5">
          <div class="w-20 h-20">
            <img class="w-full rounded-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/user_01.png" alt="User" />
          </div>
          <div class="text-left">
            <h6 class="font-medium">Guzzala Malik</h6>
            <p class="mb-1">Founder & CEO - Faith Graphic Design</p>
            <ul class="flex gap-1">
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
              <li>
                <svg width="16" height="16" class="fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                </svg>
              </li>
            </ul>
          </div>
        </div>
        <p class="mb-0">
          The customer service is EXCELLENT. If I had any technical issues they addressed it right away and helped fixed the issue. I strongly recommend their work to anyone. It is very hard to get good support and they addressed all my concerns and fixed all the issues I had. They even went their way to help me with additional things I needed for my website. I highly recommend their template and services!
        </p>
      </div>
    </div>
  </div>
</section>
<!--====== Testimonial section end ======-->
<?php get_footer(); ?>