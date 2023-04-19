<?php

if (get_sub_field('hide_this_block') == 0) { ?>

    <div class="single-testimonial os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
        <div class="container">


            <?php $select_testimonial = get_sub_field('select_testimonial'); ?>
            <?php if ($select_testimonial) : ?>
                <?php foreach ($select_testimonial as $post) : ?>
                    <?php setup_postdata($post); ?>

                    <div class="s-testimonial">
                        <img src="<?php echo get_template_directory_uri(  )?>/images/icon-testimonial.svg" alt="" class="icon-commas" />

                        <h4><?php the_field('content'); ?></h4>

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
    </div>


<?php } ?>