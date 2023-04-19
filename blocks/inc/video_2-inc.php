<?php
if (get_sub_field('autoplay_video_2') == 1) :
  $autoplay = "loop autoplay muted";
  $play_button = " ";
else :
  $autoplay = "loop controls";
  $play_button = "show";
endif;
?>

<?php

// Load value.
$iframe = get_sub_field('iframe_video_2');

// Use preg_match to find iframe src.
preg_match('/src="(.+?)"/', $iframe, $matches);
$src = $matches[1];

// Add extra parameters to src and replace HTML.
$params = array(
  //'controls'  => 0,
  //'hd'        => 1,
  //'autohide'  => 1
  'enablejsapi' => 1
);
$new_src = add_query_arg($params, $src);
$iframe = str_replace($src, $new_src, $iframe);

// Add extra attributes to iframe HTML.
$attributes = 'frameborder="0" id="yvideo"';
$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

// Display customized HTML.
//echo $iframe;
?>



<?php
$videoType = get_sub_field('video_type_2');

if ($videoType == 'html') :
  $video_file = get_sub_field('video_file_2');
  $videoPoster = get_sub_field('video_image_2');
  if ($video_file) :
?>

    <div class="videoBlock">
      <div class="plyr--video">
        <video playsinline id="video_hdr" class="video js-player" preload="metadata" poster="<?php echo $videoPoster['url']; ?>" <?php echo $autoplay ?> style="object-fit:cover;">
          <source src="<?php echo $video_file['url']; ?>" type="video/mp4">
        </video>
      </div>
    </div>

  <?php
  endif;
else :
  $video_iframe = get_sub_field('iframe_video_2');
  if ($video_iframe) :
  ?>
    <div class="img-sec">
      <div class="video_wrapper">
        <?php echo $iframe; ?>
      </div>
    </div>

<?php
  endif;
endif; ?>