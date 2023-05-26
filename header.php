<?php

/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
  <!--[if lt IE 9]>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js?ver=3.7.0"></script>
	<![endif]-->
  <?php wp_head(); ?>

  <link rel='stylesheet' id='acffa_font-awesome-css' href='https://use.fontawesome.com/releases/v6.4.0/css/all.css?ver=6.4.0' media='all' />

  <?php $main_path = get_template_directory() . '/dist/main.min.css'; ?>
  <?php $block_css = get_template_directory() . '/blocks/blocks.css'; ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/main.min.css?v=<?php echo filemtime($main_path); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/blocks/blocks.css?v=<?php echo filemtime($block_css); ?>">

  <!--plyr css-->
  <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">


    <?php the_field( 'header_scripts', 'option' ); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php the_field( 'body_scripts', 'option' ); ?>



  <div class="download-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9"><?php the_field('content', 'option'); ?>
        </div>
        <div class="col-lg-3">
          <div class="call">
            <a href="tel:<?php the_field('phone_number_hdr', 'option'); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/icon-call-white.svg" alt=""><?php the_field('phone_number_hdr', 'option'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php $header_background_color = get_field('header_background_color'); ?>

  <!--Header Start-->
  <header id="header" class="<?php echo $header_background_color;?>">
    <div class="header container">
      <a href="/" title="Uqudo" class="header__logo">
        <?php $upload_logo = get_field('upload_logo', 'option'); ?>
        <?php if ($upload_logo) : ?>
          <img src="<?php echo esc_url($upload_logo['url']); ?>" alt="<?php echo esc_attr($upload_logo['alt']); ?>" />
        <?php endif; ?>
      </a>

      <div class="header__nav__wrapper">
        <nav class="header__nav">
          <?php get_template_part('custom-menu'); ?>




          <div class="header__nav__buttons">
            <?php $button_1 = get_field('button_1', 'option'); ?>
            <?php if ($button_1) : ?>
              <a href="<?php echo esc_url($button_1['url']); ?>" target="<?php echo esc_attr($button_1['target']); ?>" class="button"><?php echo esc_html($button_1['title']); ?></a>
            <?php endif; ?>
            <?php $button_2 = get_field('button_2', 'option'); ?>
            <?php if ($button_2) : ?>
              <a href="<?php echo esc_url($button_2['url']); ?>" target="<?php echo esc_attr($button_2['target']); ?>" class="button button--white"><?php echo esc_html($button_2['title']); ?></a>
            <?php endif; ?>
          </div>
        </nav>
      </div>

      <div class="header__buttons">
        <?php if ($button_1) : ?>
          <a href="<?php echo esc_url($button_1['url']); ?>" target="<?php echo esc_attr($button_1['target']); ?>" class="button"><?php echo esc_html($button_1['title']); ?></a>
        <?php endif; ?>
        <span id="nav-toggle" class="nav-toggle">
          <div class="nav-toggle-icon">
            <span class="nav-toggle-icon__inner"></span>
          </div>
        </span>
      </div>
    </div>
  </header>
  <!--Header End-->
  <div id="main">