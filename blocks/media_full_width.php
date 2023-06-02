<?php
$media_position = get_sub_field('media_position');
$select_media_type = get_sub_field('select_media_type');

?>

<style>
	.custom {
		background-color: <?php the_sub_field('section_custom_background_color'); ?>;
	}
</style>

<!-- media_full_width.php -->
<?php if (get_sub_field('hide_this_block') == 0) : ?>
	<section class="<?php the_sub_field('block_top_bottom_margin'); ?> <?php the_sub_field( 'custom_class' ); ?> <?php the_sub_field('section_background_color'); ?> <?php the_sub_field('remove_padding'); ?> os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
		<div class="<?php the_sub_field('container_width'); ?>">
			<div class="row">
				<div class="col-lg-12 col-md-12 os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">

					<?php if ($select_media_type == 'image') {
						get_template_part('blocks/inc/image-inc');
					}
					?>
					<?php if ($select_media_type == 'video') {
						get_template_part('blocks/inc/video-inc');
					}
					?>
					<?php if ($select_media_type == 'json') {
						get_template_part('blocks/inc/jsonAnimation-inc');
					}
					?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<!-- media_full_width.php -->