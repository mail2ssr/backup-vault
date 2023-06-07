<?php

/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

$show_video_featured_image = get_field('show_video_featured_image');
$select_media_type = get_field('select_media_type');

?>

<!--Article Start-->
<section class="article-w">
	<div class="container">
		<div class="container-768">
			<div class="hdr-article">
				<h1><?php the_title(); ?></h1>
				<div class="date"><?php echo get_the_date(); ?></div>
			</div>
		</div>
		<div class="img-article-l">
			<div class="text-center">
				<?php if ($show_video_featured_image == 'video') : ?>

					<?php if ($select_media_type == 'video') {
						get_template_part('blocks/inc/videoParent-inc');
					}
					?>
					<?php if ($select_media_type == 'json') {
						get_template_part('blocks/inc/jsonAnimationParent-inc');
					}
					?>

				<?php endif; ?>

				<!-- featued image start -->
				<?php if ($show_video_featured_image == 'fimage') : ?>
					<?php if (has_post_thumbnail()) { ?>
						<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail'); ?>

						<img src="<?php echo $image[0]; ?>" alt="" class="img-fluid">

					<?php } else { ?>

						<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/blog-default.svg" alt="" class="img-fluid"> -->

					<?php } ?>
				<?php endif; ?>
				<!-- fetatured image end -->
			</div>
		</div>
	</div>

	<?php get_template_part('blocks/blocks'); ?>


</section>
<!--Article End-->

<!--Our Blog Start-->
<section class="our-blog-w related-w">
	<div class="container">
		<div class="brief-c">
			<h2>Related Articles</h2>

		</div>


			<div class="cont-ourblog">


				<?php $args = array('post_type' => 'post',  'post_status' => 'publish', 'posts_per_page' => 3, 'orderby' => 'rand');
				$loop = new WP_Query($args);
				while ($loop->have_posts()) : $loop->the_post(); ?>

					<div class="column-ourblog os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
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


				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>



			</div>
		


	</div>
</section>
<!--Our Blog End-->





<?php

get_footer();
