<?php
/* Template Name: Testimonials */

$testimonial_1_pic = get_field('testimonial_1_pic');
$testimonial_1 = get_field('testimonial_1');
$testimonial_1_name = get_field('testimonial_1_name');
$testimonial_2_pic = get_field('testimonial_2_pic');
$testimonial_2 = get_field('testimonial_2');
$testimonial_2_name = get_field('testimonial_2_name');
$testimonial_3_pic = get_field('testimonial_3_pic');
$testimonial_3 = get_field('testimonial_3');
$testimonial_3_name = get_field('testimonial_3_name');
$testimonial_4_pic = get_field('testimonial_4_pic');
$testimonial_4 = get_field('testimonial_4');
$testimonial_4_name = get_field('testimonial_4_name');
$testimonial_5_pic = get_field('testimonial_5_pic');
$testimonial_5 = get_field('testimonial_5');
$testimonial_5_name = get_field('testimonial_5_name');
$testimonial_6_pic = get_field('testimonial_6_pic');
$testimonial_6 = get_field('testimonial_6');
$testimonial_6_name = get_field('testimonial_6_name');
$testimonial_7_pic = get_field('testimonial_7_pic');
$testimonial_7 = get_field('testimonial_7');
$testimonial_7_name = get_field('testimonial_7_name');
$testimonial_8_pic = get_field('testimonial_8_pic');
$testimonial_8 = get_field('testimonial_8');
$testimonial_8_name = get_field('testimonial_8_name');
$testimonial_9_pic = get_field('testimonial_9_pic');
$testimonial_9 = get_field('testimonial_9');
$testimonial_9_name = get_field('testimonial_9_name');




get_header(); ?>


<div class="testimonials-grid">
  <h1 class="testimonials-title ">Testimonials</h1>

  <?php
    if( !empty($testimonial_1_pic) ) : ?>
<div class="test-pic-1">
    <img src="<?php echo $testimonial_1_pic['url']; ?>" alt="<?php echo $testimonial_1_pic['alt']; ?>">
</div>
<?php endif; ?>

<?php if( !empty($testimonial_1) ): ?>

  <p class="test-1">"<?php echo $testimonial_1; ?>"</p>
  <? endif; ?>

  <?php if( !empty($testimonial_1_name) ): ?>
  <p class="test-1-name">-<?php echo $testimonial_1_name; ?></p>
<? endif; ?>


<?php
  if( !empty($testimonial_2_pic) ) : ?>
<div class="test-pic-2">
  <img src="<?php echo $testimonial_2_pic['url']; ?>" alt="<?php echo $testimonial_2_pic['alt']; ?>">
</div>
<?php endif; ?>

<?php if( !empty($testimonial_2) ): ?>

<p class="test-2">"<?php echo $testimonial_2; ?>"</p>
<? endif; ?>

<?php if( !empty($testimonial_2_name) ): ?>
<p class="test-2-name">-<?php echo $testimonial_2_name; ?></p>
<? endif; ?>


<?php
  if( !empty($testimonial_3_pic) ) : ?>
<div class="test-pic-3">
  <img src="<?php echo $testimonial_3_pic['url']; ?>" alt="<?php echo $testimonial_3_pic['alt']; ?>">
</div>
<?php endif; ?>

<?php if( !empty($testimonial_3) ): ?>

<p class="test-3">"<?php echo $testimonial_3; ?>"</p>
<? endif; ?>

<?php if( !empty($testimonial_3_name) ): ?>
<p class="test-3-name">-<?php echo $testimonial_3_name; ?></p>
<? endif; ?>


<?php
  if( !empty($testimonial_4_pic) ) : ?>
<div class="test-pic-4">
  <img src="<?php echo $testimonial_4_pic['url']; ?>" alt="<?php echo $testimonial_4_pic['alt']; ?>">
</div>
<?php endif; ?>

<?php if( !empty($testimonial_4) ): ?>

<p class="test-4">"<?php echo $testimonial_4; ?>"</p>
<? endif; ?>

<?php if( !empty($testimonial_4_name) ): ?>
<p class="test-4-name">-<?php echo $testimonial_4_name; ?></p>
<? endif; ?>


<?php
  if( !empty($testimonial_5_pic) ) : ?>
<div class="test-pic-5">
  <img src="<?php echo $testimonial_5_pic['url']; ?>" alt="<?php echo $testimonial_5_pic['alt']; ?>">
</div>
<?php endif; ?>

<?php if( !empty($testimonial_5) ): ?>

<p class="test-5">"<?php echo $testimonial_5; ?>"</p>
<? endif; ?>

<?php if( !empty($testimonial_5_name) ): ?>
<p class="test-5-name">-<?php echo $testimonial_5_name; ?></p>
<? endif; ?>

<?php
  if( !empty($testimonial_6_pic) ) : ?>
<div class="test-pic-6">
  <img src="<?php echo $testimonial_6_pic['url']; ?>" alt="<?php echo $testimonial_1_pic['alt']; ?>">
</div>
<?php endif; ?>

<?php if( !empty($testimonial_6) ): ?>

<p class="test-6">"<?php echo $testimonial_6 ?>"</p>
<? endif; ?>

<?php if( !empty($testimonial_6_name) ): ?>
<p class="test-6-name">-<?php echo $testimonial_6_name; ?></p>
<? endif; ?>


<?php
  if( !empty($testimonial_7_pic) ) : ?>
<div class="test-pic-7">
  <img src="<?php echo $testimonial_7_pic['url']; ?>" alt="<?php echo $testimonial_7_pic['alt']; ?>">
</div>
<?php endif; ?>

<?php if( !empty($testimonial_7) ): ?>

<p class="test-7">"<?php echo $testimonial_7; ?>"</p>
<? endif; ?>

<?php if( !empty($testimonial_7_name) ): ?>
<p class="test-7-name">-<?php echo $testimonial_7_name; ?></p>
<? endif; ?>


<?php
  if( !empty($testimonial_8_pic) ) : ?>
<div class="test-pic-8">
  <img src="<?php echo $testimonial_8_pic['url']; ?>" alt="<?php echo $testimonial_8_pic['alt']; ?>">
</div>
<?php endif; ?>

<?php if( !empty($testimonial_8) ): ?>

<p class="test-8">"<?php echo $testimonial_8; ?>"</p>
<? endif; ?>

<?php if( !empty($testimonial_8_name) ): ?>
<p class="test-8-name">-<?php echo $testimonial_8_name; ?></p>
<? endif; ?>

<?php
  if( !empty($testimonial_9_pic) ) : ?>
<div class="test-pic-9">
  <img src="<?php echo $testimonial_9_pic['url']; ?>" alt="<?php echo $testimonial_9_pic['alt']; ?>">
</div>
<?php endif; ?>

<?php if( !empty($testimonial_9) ): ?>

<p class="test-9">"<?php echo $testimonial_9; ?>"</p>
<? endif; ?>

<?php if( !empty($testimonial_9_name) ): ?>
<p class="test-9-name">-<?php echo $testimonial_9_name; ?></p>
<? endif; ?>


</div>

<div class="test-space-bottom">
  <div class="test-spacer">

  </div>
</div>
<?php get_footer(); ?>
