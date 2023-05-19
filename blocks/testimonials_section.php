<style>
    .custom {
        background-color: <?php the_sub_field('section_custom_background_color'); ?>;
    }
</style>


<?php

if (get_sub_field('hide_this_block') == 0) { ?>


    <!--Testimonials Start-->

    <section class="testimonials-w <?php the_sub_field('section_background_color'); ?> <?php the_sub_field('section_text_color'); ?> <?php the_sub_field( 'remove_padding' ); ?> os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
        <div class="container">
            <div class="brief-c">
                <?php the_sub_field('content'); ?>
            </div>

            <?php $testimonial_type = get_sub_field('testimonial_type'); ?>

            <?php if ($testimonial_type == "grid") { ?>

                <div class="cont-testimonials">

                <!-- for desktop -->
                    <div class="static-testimonials"> 
                   

                        <?php $select_testimonials = get_sub_field('select_testimonials'); ?>
                        <?php if ($select_testimonials) : ?>
                            <?php
                                 $t=.5;
                                
                                foreach ($select_testimonials as $post) : ?>
                                <?php setup_postdata($post); ?>
                                <div class="column-testimonials  os-animation" data-os-animation="fadeInDown" data-os-animation-delay="<?php echo $t?>s">
                                    <p><?php the_field('content'); ?></p>

                                    <div class="author-testimonial">
                                        <?php if (has_post_thumbnail()) { ?>


                                            <div class="img-author">
                                                <?php the_post_thumbnail('medium'); ?>
                                            </div>


                                        <?php } else { ?>

                                            <div class="img-author">
                                                <img src="<?php echo get_template_directory_uri() ?>/images/default-people.svg" alt="" />
                                            </div>

                                        <?php } ?>


                                        <div class="author-d">
                                            <h5><?php the_title(); ?></h5>
                                            <h6><?php the_field('position___company_name'); ?></h6>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                         $t=$t+0.1;
                        endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                    </div>


                     <!-- for mobile -->
                    <div class="testimonials-slider slider-testimonials">
                   

                        <?php $select_testimonials = get_sub_field('select_testimonials'); ?>
                        <?php if ($select_testimonials) : ?>
                            <?php
                                 $t=.5;
                                
                                foreach ($select_testimonials as $post) : ?>
                                <?php setup_postdata($post); ?>
                                <div class="column-testimonials  os-animation" data-os-animation="fadeInDown" data-os-animation-delay="<?php echo $t?>s">
                                    <p><?php the_field('content'); ?></p>

                                    <div class="author-testimonial">
                                        <?php if (has_post_thumbnail()) { ?>


                                            <div class="img-author">
                                                <?php the_post_thumbnail('medium'); ?>
                                            </div>


                                        <?php } else { ?>

                                            <div class="img-author">
                                                <img src="<?php echo get_template_directory_uri() ?>/images/default-people.svg" alt="" />
                                            </div>

                                        <?php } ?>


                                        <div class="author-d">
                                            <h5><?php the_title(); ?></h5>
                                            <h6><?php the_field('position___company_name'); ?></h6>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                         $t=$t+0.1;
                        endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                    </div>
                </div>
            <?php } ?>

            <?php if ($testimonial_type == "slider") { ?>
                <div class="testimonials-slider slider-testimonials">

                    <?php $select_testimonials = get_sub_field('select_testimonials'); ?>
                    <?php if ($select_testimonials) : ?>
                        <?php foreach ($select_testimonials as $post) : ?>
                            <?php setup_postdata($post); ?>
                            <div class="column-testimonials  os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                                <p><?php the_field('content'); ?></p>

                                <div class="author-testimonial">
                                    <?php if (has_post_thumbnail()) { ?>


                                        <div class="img-author">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </div>


                                    <?php } else { ?>

                                        <div class="img-author">
                                            <img src="<?php echo get_template_directory_uri() ?>/images/default-people.svg" alt="" />
                                        </div>

                                    <?php } ?>


                                    <div class="author-d">
                                        <h5><?php the_title(); ?></h5>
                                        <h6><?php the_field('position___company_name'); ?></h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>









                </div>
            <?php } ?>

        </div>
    </section>
    <!--Testimonials End-->

<?php } ?>