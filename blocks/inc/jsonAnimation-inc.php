<?php

$json_file_desktop = get_sub_field('json_file_desktop');

?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/blocks/lottie.js"></script>

<div class="bodymovin" data-path="<?php echo esc_url( $json_file_desktop['url'] ); ?>"></div>

<div class="bodymovin desktop-show" data-path="<?php echo esc_url( $json_file_desktop['url'] ); ?>"></div>

<?php if ($json_file_mobile) { ?>

    <div class="bodymovin mobile-show" data-path="<?php echo esc_url( $json_file_mobile['url'] ); ?>"></div>

<?php } else { ?>
    
    <div class="bodymovin mobile-show" data-path="<?php echo esc_url( $json_file_desktop['url'] ); ?>"></div>

<?php }  ?>