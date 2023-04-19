<?php

if (get_sub_field('hide_this_block') == 0) { ?>


    <!--Free Trials Start-->
    <div class="container">
        <div class="free-trial-c os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
            <div class="cont-free-trial">
                <?php the_field('content_ft', 'option'); ?>
                <div class="trial-action-button">
                    <ul>

                        <?php $button_1_ft = get_field('button_1_ft', 'option'); ?>
                        <?php if ($button_1_ft) : ?>
                            <li>
                                <div class="green-button-i"><a href="<?php echo esc_url($button_1_ft['url']); ?>" target="<?php echo esc_attr($button_1_ft['target']); ?>"><?php echo esc_html($button_1_ft['title']); ?></a></div>
                            </li>
                        <?php endif; ?>
                        <?php $button_2_ft = get_field('phone_number', 'option'); ?>
                        <?php if ($button_2_ft) : ?>
                        <li>
                            <div class="border-button-i">
                                <a href="tel:<?php the_field( 'phone_number', 'option' ); ?>">
                                <?php the_field( 'phone_number', 'option' ); ?></a>
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