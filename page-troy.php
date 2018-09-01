<?php
/* Template Name: Troy */

$troy_pic = get_field('troy_pic');
$troy_title = get_field('troy_title');
$troy_paragraph_1 = get_field('troy_paragraph_1');
$troy_title_2	 = get_field('troy_title_2');
$troy_paragraph_2 = get_field('troy_paragraph_2');
$troy_paragraph_3	 = get_field('troy_paragraph_3');
$troy_paragraph_4 = get_field('troy_paragraph_4');
$troy_paragraph_5	 = get_field('troy_paragraph_5');

get_header(); ?>
<div class="coach-profile">


<div class="lei-anna-grid">
    <h1 class="lap-title"><?php echo $troy_title; ?></h1>

  <?php
    if( !empty($troy_pic) ) : ?>
    <img src="<?php echo $troy_pic['url']; ?>" alt="<?php echo $troy_pic['alt']; ?>" class="profile-img-la">
  <?php endif; ?>

  <p class="lap-text"><?php echo $troy_paragraph_1 ; ?></p>
</div>

<div class="space-bottom">
  <p class="space5"></p>
</div>

<div class="lei-anna-grid2">
  <h1 class="coach-title"><?php echo $troy_title_2; ?></h1>
  <?php if( !empty($troy_paragraph_2) ): ?>
  <p class="coach-text1"><?php echo $troy_paragraph_2 ; ?></p>
  <? endif; ?>

<?php if( !empty($troy_paragraph_3) ): ?>
  <p class="coach-text2"><?php echo $troy_paragraph_3	; ?></p>
  <? endif; ?>
</div>

<div class="lei-anna-grid2">

  <?php if( !empty($troy_paragraph_4) ): ?>
  <p class="coach-text1"><?php echo $troy_paragraph_4 ; ?></p>
  <? endif; ?>

<?php if( !empty($troy_paragraph_5) ): ?>
  <p class="coach-text2"><?php echo $troy_paragraph_5	; ?></p>
  <? endif; ?>
</div>

</div>

<?php get_footer(); ?>
