<?php

if (get_sub_field('hide_this_block') == 0) { ?>


	<!--Our Blog Start-->
	<section class="our-blog-w <?php the_sub_field('remove_padding'); ?>">
		<div class="container">
			<div class="brief-c  os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">

				<?php the_sub_field('content'); ?>
			</div>


			<div class="cont-ourblog slider-blog">

				<?php $select_blog_grid_type = get_sub_field('select_blog_grid_type'); ?>

				<?php if ($select_blog_grid_type == "Recent") { ?>

					<?php $args = array('post_type' => 'post',  'post_status' => 'publish', 'posts_per_page' => 3,);
					$loop = new WP_Query($args);

					$t = .5;

					while ($loop->have_posts()) : $loop->the_post(); ?>

						<div class="column-ourblog os-animation" data-os-animation="fadeInDown" data-os-animation-delay="<?php echo $t ?>s">
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
					endwhile; ?>
					<?php wp_reset_postdata(); ?>

				<?php } ?>

				<?php if ($select_blog_grid_type == "Selection") { ?>






					<?php $select_any_3_blog = get_sub_field('select_any_3_blog'); ?>
					<?php if ($select_any_3_blog) : ?>
						<?php

						$t = .5;
						foreach ($select_any_3_blog as $post) : ?>
							<?php setup_postdata($post); ?>


							<div class="column-ourblog os-animation" data-os-animation="fadeInDown" data-os-animation-delay="<?php echo $t ?>s">
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
						endforeach; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>

				<?php } ?>

			</div>





		</div>
	</section>
	<!--Our Blog End-->

<?php } ?>