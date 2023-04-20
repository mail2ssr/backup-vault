<?php

if ( get_sub_field( 'hide_this_block' ) == 0 ) { ?>

<style>
        .custom {
            background-color: <?php the_sub_field('section_custom_background_color'); ?>;
        }
    </style>

<section class="<?php the_sub_field('block_top_bottom_margin'); ?> <?php the_sub_field( 'custom_class' ); ?>   <?php the_sub_field('section_background_color'); ?> <?php the_sub_field('section_text_color'); ?> <?php the_sub_field( 'remove_padding' ); ?>">
	<div class="<?php the_sub_field('container_width'); ?>">
		<?php $title = get_sub_field('title');
		if ($title) : ?>
			<div class="os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s"><?php the_sub_field('title'); ?></div>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">
				<?php the_sub_field('column_1_content'); ?>
			</div>
			<div class="col-lg-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">
				<?php the_sub_field('column_2_content'); ?>
			</div>
		</div>
	</div>
</section>

<?php } ?>
