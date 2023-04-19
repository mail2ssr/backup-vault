<?php

if (get_sub_field('hide_this_block') == 0) { ?>

    <!--News Start-->
    <section class="news-w">
        <div class="our-blog-w">
            <div class="container">
                <div class="cont-ourblog">


                    <?php $args = array('post_type' => 'post',  'post_status' => 'publish', 'posts_per_page' => -1);
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>

                        <div class="column-ourblog itemsbigtip os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                            <div class="img-ourblog">

                                <?php if (has_post_thumbnail()) { ?>
                                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('medium'); ?></a>

                                <?php } else { ?>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/blog-default.svg" alt="" /></a>
                                <?php } ?>

                            </div>

                            <div class="date"><?php echo get_the_date(); ?></div>

                            <h4><?php the_title(); ?></h4>
                            <p><?php the_field('brief_description'); ?></p>

                            <div class="action-blog">
                                <div class="green-button">
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </div>
                            </div>
                        </div>


                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>



                </div>

                <div class="green-button text-center">
                    <a href="#" id="loadMore">View more</a>
                </div>
            </div>
        </div>
    </section>
    <!--News End-->

    <script>
        jQuery(function() {
            jQuery("div.itemsbigtip").slice(0, 9).show();
            jQuery("#loadMore").on('click', function(e) {
                e.preventDefault();
                jQuery("div.itemsbigtip:hidden").slice(0, 9).fadeIn();
                if (jQuery("div.itemsbigtip:hidden").length == 0) {
                    jQuery("#loadMore").fadeOut(500);
                }

            });
            if (jQuery("div.itemsbigtip:hidden").length == 0) {
                    jQuery("#loadMore").fadeOut(500);
                }
        });
    </script>

<?php } ?>