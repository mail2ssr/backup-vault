<!--media_content.php-->
<?php if (get_sub_field('hide_this_block') == 0) : ?>
    <section class="c-banner-w  os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
        <div class="container">
            <div class="row">

                <div class="col-lg-6  d-flex align-items-<?php the_sub_field('vertical_align'); ?> os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                    <div class="c-info">
                        <?php the_sub_field('content'); ?>

                        <?php $button_1 = get_sub_field('button_1'); ?>
                        <?php $phone_number = get_sub_field('phone_number'); ?>
                        <?php if ($button_1 || $phone_number) : ?>
                            <div class="actions">

                                <?php if ($button_1) : ?>
                                    <div class="green-button-i"><a href="<?php echo esc_url($button_1['url']); ?>" target="<?php echo esc_attr($button_1['target']); ?>"><?php echo esc_html($button_1['title']); ?></a></div>
                                <?php endif; ?>
                                <?php if ($phone_number) : ?>
                                    <div class="border-button-i"><a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1  d-flex align-items-<?php the_sub_field('vertical_align'); ?> os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">

                    <div class="form-bp">
                        <?php the_sub_field('form_top_content'); ?>
                        <div class="form">
                            <?php
                            $formCode = get_sub_field('form_shortcode');
                            echo do_shortcode($formCode);
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!--media_content.php-->