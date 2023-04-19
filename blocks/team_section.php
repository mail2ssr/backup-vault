<?php

if (get_sub_field('hide_this_block') == 0) { ?>
    <!--Team Start-->
    <section class="team-w">
        <div class="container">
            <div class="brief-c os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                <?php the_sub_field('content'); ?>
            </div>

            <div class="members-c">

                <?php $select_team_member = get_sub_field('select_team_member'); ?>
                <?php if ($select_team_member) : ?>
                    <?php foreach ($select_team_member as $post) : ?>
                        <?php setup_postdata($post); ?>
                        <div class="column-members os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">


                            <?php if (has_post_thumbnail()) { ?>


                                <div class="img-members">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>


                            <?php } else { ?>

                                <div class="img-members">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/team-placeholder-img.svg" alt="" />
                                </div>

                            <?php } ?>
                            <h5><?php the_title(); ?></h5>
                            <h6><?php the_field('position'); ?></h6>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>



            </div>



        </div>
    </section>
    <!--Team End-->


<?php } ?>