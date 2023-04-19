<?php

if (get_sub_field('hide_this_block') == 0) { ?>


    <section class="contact-w">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <?php the_sub_field('title'); ?>

                    <div class="address-w">
                        <?php the_sub_field('head_office_information'); ?>

                        <?php $head_office_phone = get_sub_field( 'head_office_phone' ); ?>
                        <?php $head_office_address = get_sub_field( 'head_office_address' ); ?>

                        <ul>
                        <?php if ( $head_office_phone ) : ?><li><img src="<?php echo get_template_directory_uri() ?>/images/phone-icon.svg"> <a href="tel:<?php the_sub_field('head_office_phone'); ?>"><?php the_sub_field('head_office_phone'); ?></a></li><?php endif; ?>

                            <?php if ( $head_office_address ) : ?><li><img src="<?php echo get_template_directory_uri() ?>/images/maps-and-flags.svg"> <?php the_sub_field('head_office_address'); ?></li><?php endif; ?>
                        </ul>
                    </div>

                    <div class="address-w">
                        <?php the_sub_field('uk_technical_support'); ?>

                        <?php $uk_technical_support_phone = get_sub_field( 'uk_technical_support_phone' ); ?>
                        <?php $uk_technical_support_email_address = get_sub_field( 'uk_technical_support_email_address' ); ?>

                        <ul>
                        <?php if ( $uk_technical_support_phone ) : ?><li><img src="<?php echo get_template_directory_uri() ?>/images/phone-icon.svg"> <a href="tel:<?php the_sub_field('uk_technical_support_phone'); ?>"><?php the_sub_field('uk_technical_support_phone'); ?></a></li><?php endif; ?>

                            <?php if ( $uk_technical_support_email_address ) : ?><li><img src="<?php echo get_template_directory_uri() ?>/images/email-icon.svg" class="email"> <a href="mailto:<?php the_sub_field('uk_technical_support_email_address'); ?>"><?php the_sub_field('uk_technical_support_email_address'); ?></a></li><?php endif; ?>
                        </ul>
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



    <!--Free Trial Features Start-->
    <section class="contact-map">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <?php $map_image = get_sub_field('map_image'); ?>
                    <?php if ($map_image) : ?>
                        <img src="<?php echo esc_url($map_image['url']); ?>" alt="<?php echo esc_attr($map_image['alt']); ?>" />
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    <!--Free Trial Features End-->

<?php } ?>