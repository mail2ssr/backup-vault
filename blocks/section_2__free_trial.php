<?php

if (get_sub_field('hide_this_block') == 0) { ?>

    <!--Free Trial Features Start-->
    <section class="freetrial-features">
        <div class="container">
            <div class="row">

                <?php if (have_rows('grid_block')) : ?>
                    <?php while (have_rows('grid_block')) : the_row(); ?>
                        <?php $icon = get_sub_field('icon'); ?>

                        <div class="col-lg-3">
                            <div class="column-ff">
                                <?php if ($icon) : ?>
                                    <div class="icon-ff"><img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /></div>
                                <?php endif; ?>
                                <?php the_sub_field('content'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--Free Trial Features End-->

<?php } ?>