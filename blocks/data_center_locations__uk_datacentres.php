<?php

if (get_sub_field('hide_this_block') == 0) { ?>



    <!--Datacenters Location Start-->
    <section class="datacenters-location-w">
        <div class="container">
            <div class="brief-c os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">
                <?php the_sub_field('top_content'); ?>
            </div>
            <div class="cont-dl">

                <?php if (have_rows('grid_column')) : ?>

                    <?php while (have_rows('grid_column')) : the_row(); ?>
                        <div class="column">
                            <?php the_sub_field('top_title'); ?>
                            <?php if (have_rows('data')) : ?>
                                <ul>
                                    <?php while (have_rows('data')) : the_row(); ?>
                                        <li class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                                            <span class="placeholdr"><?php the_sub_field('left_side_content'); ?></span>
                                            <span class="value"><?php the_sub_field('right_side_content'); ?></span>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                            <?php $google_map = get_sub_field('google_map'); ?>
                            <?php if ($google_map) : ?>
                                <div class="map os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s"><img src="<?php echo esc_url($google_map['url']); ?>" alt="<?php echo esc_attr($google_map['alt']); ?>" /></div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--Datacenters Location End-->



<?php } ?>