<?php

if (get_sub_field('hide_this_block') == 0) { ?>

    <!--News Start-->
    <section class="news-w">
        <div class="our-blog-w">
            <div class="container">
                <?php if(get_sub_field('show_categories')): ?>
                    <?php 
                    $args = array(
                        'taxonomy' => 'category',
                        'hide_empty' => 1,
                        'exclude' => 1
                    );
                    $terms = get_categories($args);
                    $category = get_category( get_query_var( 'cat' ) );
                    if ($terms) : ?>
                        <ul class="categories__list">
                            <li style="display: inline-block;">
                                <a class="button <?php if(true) : echo 'active'; endif;?>" href="<?php echo  home_url( '/blog' ); ;?>"><?php _e('All','backup-vault'); ?></a>
                            </li>
                            <?php foreach ($terms as $term) : 
                                $termid = $term->term_id;
                                if ($cat_ID == $termid) : $class = "active"; else : $class = ""; endif;
                                ?>
                                <li style="display: inline-block;">
                                    <a class="button <?php echo $class;?>" href="<?php echo get_term_link($term) ;?>" data-term="<?php echo $termid;?>"><?php echo $term->name;?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                <?php endif; ?>

                <div class="cont-ourblog">


                    <?php $args = array('post_type' => 'post',  'post_status' => 'publish', 'posts_per_page' => -1);
                    $loop = new WP_Query($args);
                    $t = .5;
                    $c = 1;
                    while ($loop->have_posts()) : $loop->the_post();
                    
                    if ( $c % 9 == 0 ) {

                        $t=.5;
                    }
                    
                    ?>
                    

                        <div class="column-ourblog itemsbigtip os-animation" data-os-animation="fadeInDown" data-os-animation-delay="<?php echo $t?>s">
                            <div class="img-ourblog">

                                <?php if (has_post_thumbnail()) { ?>
                                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('medium'); ?></a>

                                <?php } else { ?>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/blog-default.svg" alt="" /></a>
                                <?php } ?>

                            </div>

                            <div class="date"><?php echo get_the_date(); ?></div>

                            <h4><?php the_title(); ?></h4>
                            <p><?php echo wp_trim_words(get_field('brief_description'), 22, '...'); ?></p>

                            <div class="action-blog">
                                <div class="green-button">
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>


                    <?php
                    
                        $t = $t + 0.1;

                        $c = $c + 1;
                    endwhile; ?>
                    <?php wp_reset_postdata(); ?>



                </div>

                <br><br>

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