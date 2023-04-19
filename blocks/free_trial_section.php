<?php

if (get_sub_field('hide_this_block') == 0) { ?>

    <!-- Free Trial Header Start-->
    <section class="freetrial-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <?php the_sub_field('content'); ?>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="form-freetrial">
                        <?php the_sub_field('form_section'); ?>

                        <div class="form">
                            <?php
                            $formCode = get_sub_field('form_shortcode');
                            echo do_shortcode($formCode);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Free Trial Header End-->

<?php } ?>