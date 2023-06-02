<?php
$media_position = get_sub_field('media_position');
$select_media_type = get_sub_field('select_media_type');


?>





<!--media_content.php-->
<?php if (get_sub_field('hide_this_block') == 0) : ?>
    <section class="c-banner-w  os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 <?php if ($media_position == "right") {
                                            echo "order-lg-0";
                                        } ?> d-flex align-items-<?php the_sub_field('vertical_align'); ?> os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
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
                <div class="col-lg-6 <?php if ($media_position == "right") {
                                                        echo "order-lg-1";
                                                    } ?> d-flex align-items-<?php the_sub_field('vertical_align'); ?> os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">

                    <div class="img-sec">
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
            </div>
        </div>
    </section>
<?php endif; ?>
<!--media_content.php-->