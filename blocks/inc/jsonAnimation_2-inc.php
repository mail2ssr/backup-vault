<?php

$json_file_desktop = get_sub_field('json_file_desktop_2');
$json_file_mobile = get_sub_field('json_file_mobile_2');

?>



<div class="bodymovin desktop-show" data-path="<?php echo esc_url( $json_file_desktop['url'] ); ?>"></div>

<?php if ($json_file_mobile) { ?>

    <div class="bodymovin mobile-show" data-path="<?php echo esc_url( $json_file_mobile['url'] ); ?>"></div>

<?php } else { ?>
    
    <div class="bodymovin mobile-show" data-path="<?php echo esc_url( $json_file_desktop['url'] ); ?>"></div>

<?php }  ?>