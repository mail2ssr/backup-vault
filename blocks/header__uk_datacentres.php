<?php

if (get_sub_field('hide_this_block') == 0) { ?>


    <!--Intro Datacenters Start-->
    <section class="intro-datac-w">
        <div class="container">
            <div class="cont-intro-datac">
                <div class="brief-c os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                    <?php the_sub_field('top_conent'); ?>
                </div>

                <?php $image = get_sub_field('image'); ?>
                <?php if ($image) : ?>
                    <div class="img-datac os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                <?php endif; ?>


                <div class="brief-c os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                    <?php the_sub_field('content_btm'); ?>
                </div>
            </div>

            <div class="datac-desc">
                <div class="row">


                    <?php if (have_rows('grid_section')) : ?>
                        <?php while (have_rows('grid_section')) : the_row(); ?>
                            <?php $icon = get_sub_field('icon'); ?>
                            <div class="col-lg-4">
                                <div class="column-datac os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">
                                    <?php if ($icon) : ?>
                                        <div class="icon-datac"><img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /></div>
                                    <?php endif; ?>
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </section>
    <!--Intro Datacenters End-->




<?php } ?>