<?php

if ( get_sub_field( 'hide_this_block' ) == 0 ) { ?>

  <!--How BackupVault Started Start-->
  <section class="how-started-w">
      <div class="container">
        <div class="brief-c">
          <h2><?php the_sub_field( 'section_title' ); ?></h2>
        </div>

        <div class="cont-howstarted">
          <div class="row">
            <div class="col-lg-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">
            <?php the_sub_field( 'content_left_column' ); ?>
            </div>
            <div class="col-lg-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">
            <?php the_sub_field( 'content_right_column' ); ?>
            </div>
          </div>

          <div class="director os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
          <?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			<?php endif; ?>
            <?php the_sub_field( 'content_below_image' ); ?>
          </div>
        </div>
      </div>
    </section>
    <!--How BackupVault Started End-->

<?php } ?>
