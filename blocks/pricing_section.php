<?php

if (get_sub_field('hide_this_block') == 0) { ?>

    <!-- Free Trial Header Start-->
    <section class="pricing-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home-info os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                        <?php the_sub_field('content'); ?>

                        <?php $button_1 = get_sub_field('button'); ?>
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




                        <?php if (have_rows('logo_group')) : ?>
                            <div class="trusted-partners">
                                <ul>
                                    <?php while (have_rows('logo_group')) : the_row(); ?>
                                        <?php $upload_logo = get_sub_field('upload_logo'); ?>
                                        <?php if ($upload_logo) : ?>
                                            <li><img src="<?php echo esc_url($upload_logo['url']); ?>" alt="<?php echo esc_attr($upload_logo['alt']); ?>" /></li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="form-freetrial">
                        <?php the_sub_field('form_section'); ?>

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
    <!-- Free Trial Header End-->

<?php } ?>