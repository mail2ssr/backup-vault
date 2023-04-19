<?php

if (get_sub_field('hide_this_block') == 0) { ?>

  <!--About Header Start-->
  <section class="about-hdr">
    <div class="container">
      <div class="about-hdrinfo os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
        <?php the_sub_field('content'); ?>
      </div>

      <div class="about-logos">
        <ul>
          <?php if (have_rows('partner_logo')) : ?>
            <?php while (have_rows('partner_logo')) : the_row(); ?>
              <?php $logo = get_sub_field('logo'); ?>
              <?php if ($logo) : ?>
                <li class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s"><img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" /></li>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </section>
  <!--About Header End-->

<?php } ?>