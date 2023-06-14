<?php
$content = get_sub_field('content');

$column = get_sub_field('number_of_column');

$col = (12 / $column);

if ($column == "5") {
    $clscol = 'col';
} else {
    $clscol = 'col-md-6 col-lg-' . $col;
}



if (get_sub_field('hide_this_block') == 0) : ?>

    <style>
        .custom {
            background-color: <?php the_sub_field('section_custom_background_color'); ?>;
        }
    </style>

    <!-- icon grid section -->
    <section class="icon-grid-section <?php the_sub_field('block_top_bottom_margin'); ?> <?php the_sub_field('custom_class'); ?> <?php the_sub_field('section_background_color'); ?> <?php the_sub_field('section_text_color'); ?> <?php the_sub_field('remove_padding'); ?> os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">


        <div class="<?php the_sub_field('container_width'); ?>">

            <div class="brief-c os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">
                <?php the_sub_field('top_content'); ?>
            </div>

            <div class="row justify-content-center">
                <?php if (have_rows('grid')) : ?>
                    <?php
                    $t = .5;
                    while (have_rows('grid')) : the_row(); ?>
                        <?php $icon = get_sub_field('icon'); ?>
                        <div class="<?php echo $clscol; ?>">
                            <div class="column-grid-icon os-animation" data-os-animation="fadeInDown" data-os-animation-delay="<?php echo $t ?>s">
                                <?php if ($icon) : ?>
                                    <div class="icon-grid"><img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /></div>
                                <?php endif; ?>
                                <?php the_sub_field('content'); ?>
                            </div>
                        </div>
                    <?php
                        $t = $t + 0.1;
                    endwhile; ?>
                <?php endif; ?>
            </div>

            <?php $button = get_sub_field('button'); ?>
            <?php if ($button) : ?>
                <div class="btn-top-margin">
                    <div class="green-button text-center"><a href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>"><?php echo esc_html($button['title']); ?></a></div>
                </div>
            <?php endif; ?>
        </div>


    </section>
    <!-- icon grid section -->


<?php
endif;
