<?php

/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

</div>

<!--Bottom Start-->
<section class="bottom-w">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="b-logo">
          <?php $footer_logo = get_field('footer_logo', 'option'); ?>
          <?php if ($footer_logo) : ?>
            <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" />
          <?php endif; ?>
        </div>

        <div class="phone-address">
          <ul>
            <li class="phone">
              <a href="tel:<?php the_field('phone_number_hdr', 'option'); ?>"><?php the_field('phone_number_hdr', 'option'); ?></a>
            </li>
            <li class="address">
              Wilson House, Lorne Park Road, Bournemouth, Dorset, BH1 1JN
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 nav-btm">
        <h6>Backup Software</h6>
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'fnav1',
              'menu_class'     => '',
              'menu_id'        => '',
            )
          );
          ?>
      </div>
      <div class="col-lg-3 nav-btm">
        <h6>Company</h6>
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'fnav2',
              'menu_class'     => '',
              'menu_id'        => '',
            )
          );
          ?>
      </div>
      <div class="col-lg-2 nav-btm">
        <h6>Support</h6>
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'fnav3',
              'menu_class'     => '',
              'menu_id'        => '',
            )
          );
          ?>
      </div>
    </div>
  </div>
</section>
<!--Bottom End-->

<!--Footer Start-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
      <?php the_field( 'footer_copyright', 'option' ); ?>
      </div>
      <div class="col-md-4">
        <div class="sm-icons">
          <?php if (have_rows('social_media_icons', 'option')) : ?>
            <?php while (have_rows('social_media_icons', 'option')) : the_row(); ?>
              <?php $link = get_sub_field('link'); ?>
              <?php if ($link) : ?>
                <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>"><?php the_sub_field('icon'); ?></a>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--Footer End-->


<!--Bootstrap JS Start-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<!--Bootstrap JS End-->

<script type="text/javascript">
  var anim = []; // collecting animation instances in this array

  jQuery('.bodymovin').each(function(index, el) {

    var params = {
      container: jQuery(this)[0],
      renderer: "svg",
      loop: true,
      autoplay: true,
      path: jQuery(this).data('path')
    };
    anim[index] = bodymovin.loadAnimation(params);
    bodymovin.setQuality(1);
    anim[index].playSegments([
      [1, 2],
      [$(this).data('segment-0'), $(this).data('segment-1')]
    ], true);
    //anim[index].resize.bind(anim[index]);
  });
</script>

<!--Plyr start -->
<script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
<script>
  const players = Plyr.setup('.js-player');
</script>
<!--Plyr end -->


<!--animation start -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/animate.css">
<style type="text/css">
  .os-animation {
    opacity: 0;
  }

  .os-animation.animated {
    opacity: 1;
  }
</style>
<script type="text/javascript">
  //<![CDATA[ 
  $(function() {
    function onScrollInit(items, trigger) {
      items.each(function() {
        var osElement = $(this),
          osAnimationClass = osElement.attr('data-os-animation'),
          osAnimationDelay = osElement.attr('data-os-animation-delay');

        osElement.css({
          '-webkit-animation-delay': osAnimationDelay,
          '-moz-animation-delay': osAnimationDelay,
          'animation-delay': osAnimationDelay
        });

        var osTrigger = (trigger) ? trigger : osElement;

        osTrigger.waypoint(function() {
          osElement.addClass('animated').addClass(osAnimationClass);
        }, {
          triggerOnce: true,
          offset: '100%'
        });
      });
    }

    onScrollInit($('.os-animation'));
    onScrollInit($('.staggered-animation'), $('.staggered-animation-container'));
  }); //]]>  
</script>

<!--animation end -->
<script src="<?php echo get_template_directory_uri() ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/header.js"></script>

<script>

jQuery(".bottom-w h6").click(function () {
    jQuery(this).parent(".nav-btm").toggleClass("open")
});

jQuery('.accordion-collapse').on('shown.bs.collapse', function (e) {
    var $panel = $(this).closest('.accordion-item');
    jQuery('html,body').animate({
        scrollTop: ( $panel.offset().top - 100)
    }, 500); 
}); 
 


</script>
<?php wp_footer(); ?>
</body>

</html>