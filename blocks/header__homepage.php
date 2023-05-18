<?php
$media_position = get_sub_field('media_position');
$select_media_type = get_sub_field('select_media_type');



if (get_sub_field('hide_this_block') == 0) { ?>


    <!--Home Banner Start-->
    <section class="home-banner-w">
        <div class="container">
            <div class="row align-items-<?php the_sub_field('vertical_align'); ?>">
                <div class="col-lg-5 order-lg-1">
                    <div class="home-video-img os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                        <?php if ($select_media_type == 'image') {
                            get_template_part('blocks/inc/image-inc');
                        }
                        ?>
                        <?php if ($select_media_type == 'video') {
                            get_template_part('blocks/inc/video-inc');
                        }
                        ?>
                        <?php if ($select_media_type == 'json') {
                            get_template_part('blocks/inc/jsonAnimation-inc');
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-7 order-lg-0 d-flex">
                    <div class="home-info os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                        <?php the_sub_field('content'); ?>

                        <div class="actions">
                            <?php $button_1 = get_sub_field('button'); ?>
                            <?php $phone_number = get_sub_field('phone_number'); ?>
                            <?php if ($button_1) : ?>
                                <div class="green-button-i"><a href="<?php echo esc_url($button_1['url']); ?>" target="<?php echo esc_attr($button_1['target']); ?>"><?php echo esc_html($button_1['title']); ?></a></div>
                            <?php endif; ?>
                            <?php if ($phone_number) : ?>
                                <div class="border-button-i"><a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></div>
                            <?php endif; ?>
                        </div>




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
            </div>
        </div>
    </section>
    <!--Home Banner End-->

<?php } ?>