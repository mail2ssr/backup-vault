<?php
$image = get_sub_field('image');

$imgWidth = $image['width'];
$imgHeight = $image['height'];

if ($image) : ?>

       <?php if (get_sub_field('rounded_image') == 1) :
              $rounded = "rounded-c";
       else :
              $rounded = "";
       endif; ?>

       <?php if (get_sub_field('show_image_shadow') == 1) :
              $box_shadow = "box-shadow-hdr-img";
       else :
              $box_shadow = "";
       endif; ?>

       <?php $link_image = get_sub_field('link_image'); ?>
       <?php if ($link_image) { ?>
              <div class="text-<?php the_sub_field('image_position'); ?>"> <a href="<?php echo esc_url($link_image['url']); ?>" target="<?php echo esc_attr($link_image['target']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid <?php echo $rounded; ?> <?php echo $box_shadow; ?>" /></a></div>
       <?php } else { ?>
              <div class="text-<?php the_sub_field('image_position'); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid <?php echo $rounded; ?> <?php echo $box_shadow; ?>" /></div>
       <?php }  ?>

<?php endif; ?>