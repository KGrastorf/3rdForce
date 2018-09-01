<?php
/* Template Name: Home */

get_header(); ?>

<div class="home-page">
  <video id="home-vid" src="<?php bloginfo('stylesheet_directory'); ?>/images/3rd-force-coaching.mp4" autoplay muted poster="posterimage.jpg" alt="3rd Force Coaching with Troy and Lei-Anna Bertelsen"></video>

</div>

<div class="home-page-mobile">
  <div class="home-page-mobile-flex">
    <video id="home-vid" src="<?php bloginfo('stylesheet_directory'); ?>/images/3rd-force-coaching-mobile.mp4" autoplay muted poster="posterimage.jpg" alt="3rd Force Coaching with Troy and Lei-Anna Bertelsen"></video>
  </div>

</div>

<?php get_footer(); ?>
<style media="screen">
  footer {
    display: none;
  }
</style>
