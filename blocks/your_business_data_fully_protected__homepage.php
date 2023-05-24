<!-- protect_your_business__homepage.php -->
<?php if (get_sub_field('hide_this_block') == 0) : ?>



    <!--Your Business Data Start-->
    <section class="your-business-data">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="img-ybd mobile-show-c">
                        <?php $image_for_mobile = get_sub_field('image_for_mobile'); ?>
                        <?php if ($image_for_mobile) : ?>
                            <img src="<?php echo esc_url($image_for_mobile['url']); ?>" alt="<?php echo esc_attr($image_for_mobile['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="img-ybd-tootip desktop-show-c">
                        <img src="<?php echo get_template_directory_uri() ?>/images/ybd-graphics.svg">


                        <?php if (have_rows('desktop_graphics')) : ?>
                            <?php

                            $i = 1;
                            while (have_rows('desktop_graphics')) : the_row(); ?>
                                <?php $icon = get_sub_field('icon'); ?>
                                <div class="icon<?php echo $i;?> icon-circle">
                                    <div class="special-text"><img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /><span class="special-text__tooltip"><?php the_sub_field('tooltip_title'); ?></span></div>
                                </div>
                            <?php
                                $i = $i+1;
                            endwhile; ?>

                        <?php endif; ?>


                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cont-ybd">
                    <?php the_sub_field( 'content' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Your Business Data End-->


<?php endif; ?>
<!-- protect_your_business__homepage.php -->