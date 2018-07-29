<?php
/* Template Name: About */

$about_title = get_field('about_title');
$about_paragraph_1 = get_field('about_paragraph_1');
$about_paragraph_2 = get_field('about_paragraph_2');


get_header(); ?>

<div class="about-grid">
  <div class="hero-about">
<video id="about" src="<?php bloginfo('stylesheet_directory'); ?>/images/about.mp4" autoplay muted poster="posterimage.jpg">

</video>
  </div>
</div>
<div class="about-space-between">

</div>

<div class="about-grid2">
<p class="grid2-title home-title3"><?php echo $about_title; ?></p>
<p class="grid2-text"><?php echo $about_paragraph_1; ?></p>
<p class="grid2-text2"><?php echo $about_paragraph_2; ?></p>
</div>


<?php get_footer(); ?>
