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
	  <meta name="google-site-verification" content="Brs-jGencRyj8lbgOheDS1YTCeefqLv-d_2Pl2hk6Mk" />
	  <!-- Google Tag Manager -->
<script type=""rocketlazyloadscript"">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WFXZ3WT');</script>
<!-- End Google Tag Manager -->

<!-- Click Guardian -->
<script type=""rocketlazyloadscript"" data-rocket-type=""text/javascript"">
var _cgk = 'CVNgAbIuk0nSJlZ';
(function () {
        var _cg = document.createElement('script'); _cg.type = 'text/javascript'; _cg.async = true;
        _cg.src = 'https://v2.clickguardian.app/track.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(_cg, s);
})();
</script>
<!-- End Click Guardian -->
	  
	  <!-- Hotjar Tracking Code for www.backupvault.co.uk -->
<script type=""rocketlazyloadscript"">
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1127797,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
	  
	  <script type="application/ld+json">
{
"@context" : "http://schema.org",
"@type" : "Organization",
"name" : "BackupVault",
"url" : "https://backupvault.co.uk/",
"logo": "https://backupvault.co.uk/wp-content/uploads/2023/05/logo-backupvault-new-color-1.svg",
"sameAs" : [
"https://www.linkedin.com/company/backupvault/",
"https://twitter.com/BackupVaultUK",
"https://www.facebook.com/backupvault.co.uk",
"https://www.youtube.com/@BackupvaultCoUkonlinebackup"
]
}
</script>
	  
	  <meta property="og:image" content=”https://backupvault.co.uk/wp-content/uploads/2023/06/Backup-Vault-site-image-600x338.jpg”/>
<meta property="og:url" content="https://backupvault.co.uk/"/>
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


    <?php
    
      wp_enqueue_script('nouislider-js', get_stylesheet_directory_uri() . '/js/nouislider.js', array('jquery'), rand(), true);
      wp_enqueue_style('noUiSlider-style', 'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.css', array(), '14.6.3');
    

    ?>

    <?php the_field('header_scripts', 'option'); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php the_field('body_scripts', 'option'); ?>



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
    <?php if(is_category()){ $header_background_color = 'light-blue'; }?>

    <!--Header Start-->
    <header id="header" class="<?php echo $header_background_color; ?>">
      <div class="header container">
        <a href="/" class="header__logo">
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