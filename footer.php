<!--====== Footer section start ======-->
<footer class="ta-footer<?php if (!(is_front_page()  ||is_page('Deals'))) : ?> bg-secondary<?php endif; ?>">

  <div class="container">
    <div class="pt-20 pb-20">
      <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
        <?php
        if (is_active_sidebar('footer__widget')) {
          dynamic_sidebar('footer__widget');
        };
        ?>
      </div>
    </div>
    <div class="pt-5 pb-6 text-center border-t border-secondary ta-footer-bottom">
      <p>&copy; <span class="text-primary">FixoLab </span>
        <span id="currentYear"></span>. All rights reserved.
      </p>
    </div>
  </div>
</footer>
<!--====== Footer section end ======-->

<?php wp_footer(); ?>

</body>
</html>