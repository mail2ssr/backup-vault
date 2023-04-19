<?php

if (get_sub_field('hide_this_block') == 0) { ?>
    <div class="estb-company">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-lg-1 offset-lg-2">
                    <div class="img-estb os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                        <?php $image = get_sub_field('image'); ?>
                        <?php if ($image) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center order-lg-0">
                    <div class="estb-info os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                        <?php the_sub_field('content'); ?>
                    </div>
                </div>
            </div>
        </div >
    </div>

<?php } ?>