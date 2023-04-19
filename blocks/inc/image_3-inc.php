
<?php
$image = get_sub_field( 'image_3' );

$imgWidth = $image['width'];
$imgHeight = $image['height'];

if ( $image ) : ?>

       <?php $link_image = get_sub_field('link_image_3'); ?>
       <?php if ($link_image) { ?>
              <div class="text-<?php the_sub_field('image_position_3'); ?>"> <a href="<?php echo esc_url($link_image['url']); ?>" target="<?php echo esc_attr($link_image['target']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" /></a></div>
       <?php } else { ?>
              <div class="text-<?php the_sub_field('image_position_3'); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" /></div>
       <?php }  ?>

<?php endif; ?>


