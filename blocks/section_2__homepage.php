<?php




if (get_sub_field('hide_this_block') == 0) { ?>


    <!--Hotrd Start-->
    <section class="hotrd-w">
        <div class="container">
            <div class="brief-c white-txt os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                <?php the_sub_field('top_content'); ?>
            </div>

            <div class="cont-hotrd">

                <?php if (have_rows('icon_section')) : ?>
                    <?php 
                        
                        $t=.5;

                        while (have_rows('icon_section')) : the_row(); ?>
                        <?php $icon = get_sub_field('icon'); ?>
                        <div class="column-hotrd os-animation" data-os-animation="fadeInDown" data-os-animation-delay="<?php echo $t?>s">
                            <div class="icon-hotrd">
                                <?php if ($icon) : ?>
                                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <?php the_sub_field('content'); ?>
                        </div>
                    <?php 
                
                $t=$t+0.1;
                
                endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--Hotrd End-->
<?php } ?>