<?php

if (!post_password_required($post)) :

    if (have_rows('blocks')) :

        while (have_rows('blocks')) : the_row();
            get_template_part('/blocks/' . get_row_layout());
        endwhile;

    endif;

endif;

?>

<?php if (post_password_required($post)) : ?>
    <div class="container" style="padding-top: 100px; min-height:500px">
        <?php the_content(); ?>
    </div>
<?php endif; ?>