<?php
/* Template Name: Lei Anna */

$lei_anna__pic = get_field('lei_anna__pic');
$lei_anna_title = get_field('lei_anna_title');
$lei_anna_paragraph_1 = get_Field('lei_anna_paragraph_1');
$lei_anna_title_2 = get_field('lei_anna_title_2');
$lei_anna_paragraph_2 = get_field('lei_anna_paragraph_2');
$lei_anna_paragraph_3 = get_field('lei_anna_paragraph_3');


get_header(); ?>

<div class="coach-profile">


<div class="lei-anna-grid">
    <h1 class="lap-title"><?php echo $lei_anna_title; ?></h1>

  <img class="profile-img-la" src="<?php bloginfo('stylesheet_directory'); ?>/images/Lei-AnnaProfilepatched.jpg" alt="">

  <?php
    if( !empty($lei_anna__pic) ) : ?>
    <img src="<?php echo $lei_anna__pic['url']; ?>" alt="<?php echo $lei_anna__pic['alt']; ?>" class="profile-img-la">
  <?php endif; ?>

  <p class="lap-text"><?php echo $lei_anna_paragraph_1; ?></p>
</div>

<div class="space-bottom">
  <p class="space5"></p>
</div>

<div class="lei-anna-grid2">
  <h1 class="coach-title"><?php echo $lei_anna_title_2 ; ?></h1>
  <p class="coach-text1"><?php echo $lei_anna_paragraph_2; ?></p>

  <p class="coach-text2"><?php echo $lei_anna_paragraph_3;  ?></p>
</div>

<div class="lei-anna-grid2">
  <?php if( !empty($lei_anna_paragraph_4) ): ?>
  <p class="coach-text1"><?php echo $lei_anna_paragraph_4; ?></p>
  <?php endif; ?>
  <?php if( !empty($lei_anna_paragraph_5 ) ): ?>
  <p class="coach-text2"><?php echo $lei_anna_paragraph_5; ?></p>
  <?php endif; ?>
</div>

</div>
<?php get_footer(); ?>
