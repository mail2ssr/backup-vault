<style>
    .custom {
        background-color: <?php the_sub_field('section_custom_background_color'); ?>;
    }
</style>


<?php

if (get_sub_field('hide_this_block') == 0) { ?>

    <!--Common Data Protection-Question Start-->
    <section class="cdpa-w">
        <div class="container">
            <div class="brief-c white-txt">
                <?php the_sub_field('content'); ?>
            </div>
            <div class="cont-cdpa">
                <div class="accordion-cdpa">
                    <!--Accordion Start-->
                    <div class="accordion" id="accordionExample">
                        <?php if (have_rows('faq')) :
                            
                            $c=1;
                            ?>
                            <?php while (have_rows('faq')) : the_row();
                            
                            if ($c==1) {

                                $collapsed = "";
                                $show = "show";

                            } else {

                                $collapsed = "collapsed";
                                $show = "";
                            }

                            ?>
                               
                                <div class="accordion-item  os-animation" data-os-animation="fadeInDown" data-os-animation-delay=".5s">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button <?php echo $collapsed?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $c?>" aria-expanded="true" aria-controls="collapse<?php echo $c?>">
                                        <?php the_sub_field('question'); ?>
                                            <div class="ico"></div>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $c?>" class="accordion-collapse collapse <?php echo $show?>" aria-labelledby="heading<?php echo $c?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <?php the_sub_field('answer'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                        
                        $c++;
                        endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!--Accordion End-->
                </div>
            </div>
        </div>
    </section>
    <!--Common Data Protection-Question End-->

<?php } ?>