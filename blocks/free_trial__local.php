<?php

if (get_sub_field('hide_this_block') == 0) { ?>


    <!--Free Trials Start-->
    <div class="container">
        <div class="free-trial-c os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
            <div class="cont-free-trial">
            <?php the_sub_field( 'content' ); ?>

            <?php if ( get_sub_field( 'show_button_1_arrow' ) == 1 ) : 

                $button_class ="green-button-i";
			 else : 
                $button_class ="green-button-i-wa";
             endif; ?>
                <div class="trial-action-button">
                    <ul>

                    <?php $button_1 = get_sub_field( 'button_1' ); ?>
                        <?php if ($button_1) : ?>
                            <li>
                                <div class="<?php echo $button_class;?>"><a href="<?php echo esc_url( $button_1['url'] ); ?>" target="<?php echo esc_attr( $button_1['target'] ); ?>"><?php echo esc_html( $button_1['title'] ); ?></a></div>
                            </li>
                        <?php endif; ?>
                        <?php $button_2_ft = get_sub_field('phone_number'); ?>
                        <?php if ($button_2_ft) : ?>
                        <li>
                            <div class="border-button-i">
                                <a href="tel:<?php the_sub_field( 'phone_number' ); ?>">
                                <?php the_sub_field( 'phone_number' ); ?></a>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="ad-img">
                <img src="<?php echo get_template_directory_uri(  )?>/images/free-trial-img.png" alt="" />
            </div>
        </div>
    </div>
    <!--Free Trials End-->

<?php } ?>