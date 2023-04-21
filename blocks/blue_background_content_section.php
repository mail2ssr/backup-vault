<?php

if (get_sub_field('hide_this_block') == 0) { ?>

    <!--Common Blue Start-->
    <section class="c-blue-w">
        <div class="container">
            <div class="cont-blue os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">
                <?php the_sub_field('content'); ?>

                <?php $bottom_image = get_sub_field('bottom_image'); ?>
                <?php if ($bottom_image) : ?>
                    <div class="img-btm"><img src="<?php echo esc_url($bottom_image['url']); ?>" alt="<?php echo esc_attr($bottom_image['alt']); ?>" /></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--Common Blue End-->
<?php } ?>