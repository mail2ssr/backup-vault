<?php

if (get_sub_field('hide_this_block') == 0) { ?>


    <!--Why Choose Start-->
    <section class="whychoose-w">
        <div class="container">
            <div class="brief-c os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
                <?php the_field('content_wcb', 'option'); ?>
            </div>
            <div class="cont-whychoose">
                <?php if (have_rows('grid_box_wcb', 'option')) : ?>
                    <?php while (have_rows('grid_box_wcb', 'option')) : the_row(); ?>
                        <?php $icon = get_sub_field('icon'); ?>


                        <div class="column-whychoose os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                            <?php if ($icon) : ?>
                                <div class="icon-whychoose"><img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /></div>
                            <?php endif; ?>
                            <?php the_sub_field('content'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="green-button text-center">
                <a href="#">Explore</a>
            </div>
        </div>
    </section>
    <!--Why Choose End-->

<?php } ?>