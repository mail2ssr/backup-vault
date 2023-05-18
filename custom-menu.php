 <div class="mega-menu">
   <ul id="main-nav">



     <?php if (have_rows('parent_menu', 'option')) : ?>

       <ul id="main-nav">
         <?php while (have_rows('parent_menu', 'option')) : the_row(); ?>

           <?php if (get_sub_field('add_submenu') == 1) { ?>
             <li class="menu-item-has-children">
             <?php } else { ?>
             <li>
             <?php }  ?>

             <?php $parent_link = get_sub_field('parent_link'); ?>
             <?php if ($parent_link) : ?>
               <div class="menu-item__parent"><a href="<?php echo esc_url($parent_link['url']); ?>" target="<?php echo esc_attr($parent_link['target']); ?>"><?php echo esc_html($parent_link['title']); ?></a>
                 <span class="menu-item__icon"></span>
               </div>
             <?php endif; ?>
             <?php if (get_sub_field('add_submenu') == 1) : ?>

               <?php $submenu_layout = get_sub_field('submenu_layout'); ?>

               <?php if ($submenu_layout == "menu-grid-3") : ?>
                 <?php if (have_rows('menu_grid')) : ?>
                   <div class="sub-nav menu-grid-3">
                     <div class="container-fluid">
                       <div class="row">
                         <?php while (have_rows('menu_grid')) : the_row(); ?>

                           <div class="col-lg-4">

                            

                             
                               
                                 <h4><?php the_sub_field( 'second_level_title' ); ?></h4>
                              
                            

                             <ul>
                               <?php if (have_rows('column_grid')) : ?>
                                 <?php while (have_rows('column_grid')) : the_row(); ?>
                                   <?php $icon_third_level = get_sub_field('icon_third_level'); ?>

                                   <?php $third_level_title = get_sub_field('third_level_title'); ?>




                                   <?php $description = get_sub_field('description'); ?>



                                   <li>
                                     <a href="<?php echo esc_url($third_level_title['url']); ?>" target="<?php echo esc_attr($third_level_title['target']); ?>">
                                       <div class="menu-group">
                                         <?php if ($icon_third_level) : ?>
                                           <div class="icon-menu"><img src="<?php echo esc_url($icon_third_level['url']); ?>" alt="<?php echo esc_attr($icon_third_level['alt']); ?>" /></div>
                                         <?php endif; ?>

                                         <div class="info-menu"><?php echo esc_html($third_level_title['title']); ?></div>

                                       </div>
                                       <?php if ($description) : ?><span><?php the_sub_field('description'); ?></span><?php endif; ?>
                                     </a>
                                   </li>
                                 <?php endwhile; ?>
                               <?php endif; ?>


                             </ul>
                           </div>




                         <?php endwhile; ?>
                       </div>
                     </div>
                   </div>
                 <?php endif; ?>
               <?php endif; ?>


               <?php if ($submenu_layout == "single-column") : ?>
                 <?php if (have_rows('single_column')) : ?>
                   <div class="sub-nav single-column">
                     <ul>
                       <?php while (have_rows('single_column')) : the_row(); ?>

                         <?php $icon = get_sub_field('icon'); ?>

                         <?php $subnav_title = get_sub_field('subnav_title'); ?>
                         <?php $description = get_sub_field('description'); ?>


                         <li>
                           <a href="<?php echo esc_url($subnav_title['url']); ?>" target="<?php echo esc_attr($subnav_title['target']); ?>">
                             <div class="menu-group">
                               <?php if ($icon) : ?>
                                 <div class="icon-menu"><img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" /></div>
                               <?php endif; ?>
                               <div class="info-menu">
                                 <p> <?php echo esc_html($subnav_title['title']); ?></p>
                               </div>
                             </div>
                             <?php if ($description) : ?><span><?php the_sub_field('description'); ?></span><?php endif; ?>
                           </a>
                         </li>
                       <?php endwhile; ?>
                     </ul>
                   </div>
                 <?php endif; ?>
               <?php endif; ?>
             <?php endif; ?>



             </li>
           <?php endwhile; ?>
       </ul>
     <?php endif; ?>



   </ul>
 </div>