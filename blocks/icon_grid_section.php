<?php
$content = get_sub_field('content');

$column = get_sub_field('number_of_column');

$col = (12/$column);

$clscol = 'col-md-6 col-lg-'.$col; 



if (get_sub_field('hide_this_block') == 0) : ?>

    <style>
        .custom {
            background-color: <?php the_sub_field('section_custom_background_color'); ?>;
        }
    </style>

    <!-- icon grid section -->
    <section class="icon-grid-section <?php the_sub_field('block_top_bottom_margin'); ?> <?php the_sub_field('section_background_color'); ?> <?php the_sub_field('section_text_color'); ?> <?php the_sub_field('remove_padding'); ?> os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">


        <div class="<?php the_sub_field('container_width'); ?>">

            <div class="brief-c os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">
                <?php the_sub_field('top_content'); ?>
            </div>

            <div class="row justify-content-center">
                <?php if (have_rows('grid')) : ?>
                    <?php while (have_rows('grid')) : the_row(); ?>
                        <?php $icon = get_sub_field('icon'); ?>
                        <div class="<?php echo $clscol;?>">
                            <div class="column-grid-icon os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                                <?php if ($icon) : ?>
                                    <div class="icon-grid"><img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /></div>
                                <?php endif; ?>
                                <?php the_sub_field('content'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>



            </div>
        </div>


    </section>
    <!-- icon grid section -->


<?php
endif;
