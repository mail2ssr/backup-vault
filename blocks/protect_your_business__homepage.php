<!-- protect_your_business__homepage.php -->
<?php if (get_sub_field('hide_this_block') == 0) : ?>



    <section class="protect-business-w">
        <div class="container">
            <div class="brief-c os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                <?php the_sub_field('top_content'); ?>
            </div>

            <div class="protect-features">
                <div class="row">
                    <div class="col-lg-6">
                        <?php if (get_sub_field('content_cloud_backup')) { ?>
                            <div class="column-pf cloudbackup os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                                <div class="cont-pf">
                                    <?php the_sub_field('content_cloud_backup'); ?>
                                    <?php $button_cb = get_sub_field('button_cb'); ?>
                                    <?php if ($button_cb) : ?>
                                        <a href="<?php echo esc_url($button_cb['url']); ?>" target="<?php echo esc_attr($button_cb['target']); ?>"><?php echo esc_html($button_cb['title']); ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php $bottom_image_cb = get_sub_field('bottom_image_cb'); ?>
                                <?php if ($bottom_image_cb) : ?>
                                    <div class="img-placeholder"><img src="<?php echo esc_url($bottom_image_cb['url']); ?>" alt="<?php echo esc_attr($bottom_image_cb['alt']); ?>" /></div>
                                <?php endif; ?>
                            </div>
                        <?php } ?>
                        <?php if (get_sub_field('content_mb')) { ?>
                            <div class="column-pf microsoft365 os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".6s">
                                <div class="cont-pf">
                                    <?php the_sub_field('content_mb'); ?>
                                    <?php $button_mb = get_sub_field('button_mb'); ?>
                                    <?php if ($button_mb) : ?>
                                        <a href="<?php echo esc_url($button_mb['url']); ?>" target="<?php echo esc_attr($button_mb['target']); ?>"><?php echo esc_html($button_mb['title']); ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php $bottom_image_mb = get_sub_field('bottom_image_mb'); ?>
                                <?php if ($bottom_image_mb) : ?>
                                    <div class="img-placeholder"><img src="<?php echo esc_url($bottom_image_mb['url']); ?>" alt="<?php echo esc_attr($bottom_image_mb['alt']); ?>" /></div>
                                <?php endif; ?>

                            </div>
                        <?php } ?>
                    </div>

                    <div class="col-lg-6">
                        
                        <?php if (get_sub_field('content_gw')) { ?>
                            <div class="column-pf googleworkspace os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".6s">
                                <div class="cont-pf">
                                    <?php the_sub_field('content_gw'); ?>
                                    <?php $button_gw = get_sub_field('button_gw'); ?>
                                    <?php if ($button_gw) : ?>
                                        <a href="<?php echo esc_url($button_gw['url']); ?>" target="<?php echo esc_attr($button_gw['target']); ?>"><?php echo esc_html($button_gw['title']); ?></a>
                                    <?php endif; ?>
                                </div>

                                <?php $bottom_image_gw = get_sub_field('bottom_image_gw'); ?>
                                <?php if ($bottom_image_gw) : ?>
                                    <div class="img-placeholder"><img src="<?php echo esc_url($bottom_image_gw['url']); ?>" alt="<?php echo esc_attr($bottom_image_gw['alt']); ?>" /></div>
                                <?php endif; ?>
                            </div>
                        <?php } ?>

                        <?php if (get_sub_field('content_dr')) { ?>
                            <div class="column-pf disasterrecovery os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".7s">
                                <div class="cont-pf">
                                    <?php the_sub_field('content_dr'); ?>
                                    <?php $button_dr = get_sub_field('button_dr'); ?>
                                    <?php if ($button_dr) : ?>
                                        <a href="<?php echo esc_url($button_dr['url']); ?>" target="<?php echo esc_attr($button_dr['target']); ?>"><?php echo esc_html($button_dr['title']); ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php $bottom_image_dr = get_sub_field('bottom_image_dr'); ?>
                                <?php if ($bottom_image_dr) : ?>
                                    <div class="img-placeholder"><img src="<?php echo esc_url($bottom_image_dr['url']); ?>" alt="<?php echo esc_attr($bottom_image_dr['alt']); ?>" /></div>
                                <?php endif; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </section>


<?php endif; ?>
<!-- protect_your_business__homepage.php -->