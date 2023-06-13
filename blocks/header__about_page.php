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
              <?php $logo_link = get_sub_field('logo_link'); ?>
              <?php if ($logo) : ?>

                <?php if ($logo_link) { ?>
                  <li><a href="<?php echo esc_url($logo_link['url']); ?>" target="<?php echo esc_attr($logo_link['target']); ?>"><img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" /></a></li>

                <?php } else { ?>
                  <li class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s"><img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" /></li>
                <?php }  ?>
                
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </section>
  <!--About Header End-->

<?php } ?>