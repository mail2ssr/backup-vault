<?php

if (get_sub_field('hide_this_block') == 0) { ?>


    <!--Become Partner Start-->
    <section class="become-parnter-w" id="become_partner">
        <div class="container">
            <div class="form-bp os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".5s">


                <?php the_sub_field('form_top_content'); ?>
                <div class="form">
                    <?php
                    $formCode = get_sub_field('form_shortcode');
                    echo do_shortcode($formCode);
                    ?>
                </div>



            </div>
        </div>
    </section>
    <!--Become Partner End-->

<?php } ?>