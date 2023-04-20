<?php
$content = get_sub_field('content');

if (get_sub_field('hide_this_block') == 0) : ?>

    <style>
        .custom {
            background-color: <?php the_sub_field('section_custom_background_color'); ?>;
        }
    </style>

    <!-- content_full_width.php -->
    <div class="<?php the_sub_field('block_top_bottom_margin'); ?> <?php the_sub_field( 'custom_class' ); ?> <?php the_sub_field('section_background_color'); ?> <?php the_sub_field('section_text_color'); ?> <?php the_sub_field('remove_padding'); ?> <?php echo $custom_top_padding;?>  os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
        <div class="<?php the_sub_field('container_width'); ?>">
            <div class="innerpage-body"><?php echo $content; ?></div>
        </div>
    </div>
    <!-- content_full_width.php -->

<?php
endif;
