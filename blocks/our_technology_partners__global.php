<?php

if (get_sub_field('hide_this_block') == 0) { ?>


    <!--Our Technology Partners Start-->

    <section class="ourtechpartners-w">
        <div class="container">
            <div class="brief-c white-txt os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
                <?php the_field('content_otp', 'option'); ?>
            </div>

            <div class="cont-otp">
                <?php if (have_rows('grid_box_otp', 'option')) : ?>
                    <?php while (have_rows('grid_box_otp', 'option')) : the_row(); ?>
                        <?php $icon = get_sub_field('icon'); ?>
                        <div class="column-otp os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                            <?php if ($icon) : ?>
                                <div class="partner-logo"><img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /></div>
                            <?php endif; ?>
                            <?php the_sub_field('content'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!--Our Technology Partners End-->

<?php } ?>