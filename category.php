<?php
/**
 * The template for displaying Category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			
			<!-- content_full_width.php -->
			<div class="blocks-margin top-padding-50 light default none  os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
				<div class="container">
					<div class="innerpage-body text-center">
						<h1> 
							<?php _e('Blog'); ?>
						</h1>
						<p><?php _e('Gain more knowledge on data protection here – with our informative articles.');?></p>
					</div>
				</div>
			</div>
			<!-- content_full_width.php -->
			
			<!--News Start-->
			<section class="news-w">
				<div class="our-blog-w">
					<div class="container">
							<?php 
							$args = array(
								'taxonomy' => 'category',
								'hide_empty' => 1,
								'exclude' => 1
							);
							$category = get_category( get_query_var( 'cat' ) );
							$cat_ID = $category->cat_ID;
							$terms = get_categories($args);
							if ($terms) : ?>
								<ul class="categories__list">
									<li style="display: inline-block;">
										<a class="button <?php if(is_home()) : echo 'active'; endif;?>" href="<?php echo  home_url( '/blog' ); ;?>"><?php _e('All','backup-vault'); ?></a>
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

						<div class="cont-ourblog">
							<?php 
							$current_category = get_queried_object(); ////getting current category
							$args = array(
									'post_type' => 'post',// your post type,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'posts_per_page' => -1,
									'cat' => $current_category->cat_ID // current category ID
							);
							$the_query = new WP_Query($args);
							?>
							<?php if ( $the_query->have_posts() ) : ?>
								<?php 
								while ( $the_query->have_posts() ) :
									$the_query->the_post();

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
						<?php endif; ?>
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

		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->

<?php
get_footer();
?>


