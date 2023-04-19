<!--media_content.php-->
<?php if (get_sub_field('hide_this_block') == 0) : ?>
    <!--Whybackup Header Start-->
    <section class="whybackup-hdr">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-lg-1">
                    <?php $image = get_sub_field('image'); ?>
                    <?php if ($image) : ?>
                        <div class="img-whybackup"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> </div>
                    <?php endif; ?>

                </div>
                <div class="col-lg-7 d-flex align-items-center order-lg-0">
                    <div class="whybackup-info">
                        <?php the_sub_field('content'); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Whybackup Header End-->
<?php endif; ?>
<!--media_content.php-->