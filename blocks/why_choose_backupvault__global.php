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
                    <?php
                        
                        $t=.5;

                        while (have_rows('grid_box_wcb', 'option')) : the_row(); ?>
                        <?php $icon = get_sub_field('icon'); ?>


                        <div class="column-whychoose os-animation" data-os-animation="fadeInDown" data-os-animation-delay="<?php echo $t?>s">
                            <?php if ($icon) : ?>
                                <div class="icon-whychoose"><img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /></div>
                            <?php endif; ?>
                            <?php the_sub_field('content'); ?>
                        </div>
                    <?php
                 $t=$t+0.1;
                endwhile; ?>
                <?php endif; ?>
            </div>

            <?php $button_wcb = get_field('button_wcb', 'option'); ?>
            <?php if ($button_wcb) : ?>
                 <div class="green-button text-center"><a href="<?php echo esc_url($button_wcb['url']); ?>" target="<?php echo esc_attr($button_wcb['target']); ?>"><?php echo esc_html($button_wcb['title']); ?></a> </div>
            <?php endif; ?>
        </div>
    </section>
    <!--Why Choose End-->

<?php } ?>