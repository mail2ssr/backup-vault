<?php
$media_position = get_sub_field('media_position');
$media_width = get_sub_field('media_width');
$select_media_type = get_sub_field('select_media_type');


?>

<style>
.custom { background-color: <?php the_sub_field( 'section_custom_background_color' ); ?> ;}
</style>

<?php if ( get_sub_field( 'remove_content_left_or_right_padding' ) == 0 ) : ?>
<?php if ($media_position == "right") {

	$col_padding = "col-padding-right";
} else {

	$col_padding = "col-padding-left";
}

?>
<?php endif; ?>

<!--media_content.php-->
<?php if (get_sub_field('hide_this_block') == 0) : ?>
	<section class="<?php the_sub_field( 'block_top_bottom_margin' ); ?> <?php the_sub_field( 'section_background_color' ); ?> <?php the_sub_field( 'section_text_color' ); ?> <?php the_sub_field( 'remove_padding' ); ?> os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
		<div class="<?php the_sub_field('container_width'); ?>">
			<div class="row">
				<div class="col-lg-<?php echo $media_width; ?> col-md-<?php echo $media_width; ?> <?php if ($media_position == "right") {
																										echo "order-md-1";
																									} ?> d-flex align-items-<?php the_sub_field('vertical_align'); ?> os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">

					<div class="img-sec">
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
				<div class="col-lg-<?php echo 12 - $media_width; ?> col-md-<?php echo 12 - $media_width; ?> <?php if ($media_position == "right") {
																												echo "order-md-0 order-lg-0";
																											} ?> d-flex align-items-<?php the_sub_field('vertical_align'); ?> os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
					<div class="innerpage-body <?php echo $col_padding;?>">

					<div class="c-w-info1"><?php the_sub_field('content'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<!--media_content.php-->