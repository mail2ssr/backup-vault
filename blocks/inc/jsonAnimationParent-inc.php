<?php

$json_file_desktop = get_field('json_file_desktop');
$json_file_mobile = get_field('json_file_mobile');

?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/blocks/lottie.js"></script>

<div class="bodymovin desktop-show" data-path="<?php echo esc_url( $json_file_desktop['url'] ); ?>"></div>

<?php if ($json_file_mobile) { ?>

    <div class="bodymovin mobile-show" data-path="<?php echo esc_url( $json_file_mobile['url'] ); ?>"></div>

<?php } else { ?>
    
    <div class="bodymovin mobile-show" data-path="<?php echo esc_url( $json_file_desktop['url'] ); ?>"></div>

<?php }  ?>