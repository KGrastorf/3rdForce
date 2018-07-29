<?php
/* Template Name: Team */

$course_logo = get_field("course_logo");
$hosted_by = get_field("hosted_by");
$paragraph_1 = get_field("paragraph_1");
$paragraph_2 = get_field("paragraph_2");
$paragraph_3 = get_field("paragraph_3");

get_header(); ?>

<div class="courses-mtl">
  <div class="mtl-space-top"></div>

  <?php
    if( !empty($course_logo) ) : ?>
    <img class="courses-img2" src="<?php echo $course_logo['url']; ?>" alt="<?php echo $course_logo['alt']; ?>">
  <?php endif; ?>

  <h1 class="mtl-title"><?php echo $hosted_by; ?></h1>
  <p class="mtl-text1"><?php echo $paragraph_1; ?></p>
  <p class="mtl-text2"><?php echo $paragraph_2; ?></p>
  <p class="mtl-text3"><?php echo $paragraph_3; ?></p>


<p class="facebook-life">Visit our <a class="md-lg" href="http://www.moretolifeus.org/bozeman" target="_blank">More to Life, Bozeman page</a> to see when the next course is.</p>
</div>

<div class="team-grid2">

</div>

<div class="video-shell">
  <div class="video">
    <!-- <div class="space-vid"></div> -->
<iframe class="poc-vid" width="840" height="472.5" src="https://www.youtube.com/embed/HWhLcIHwb5o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

  </div>
</div>

<div class="mtl-space-top">

</div>

<?php get_footer(); ?>
