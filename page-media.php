<?php
/* Template Name: Media */

$link_1 = get_field('link_1');
$big_title_1 = get_field('big_title_1');
$little_title_1 = get_field('little_title_1');

$link_2 = get_field('link_2');
$big_title_2 = get_field('big_title_2');
$little_title_2 = get_field('little_title_2');

$link_3 = get_field('link_3');
$big_title_3 = get_field('big_title_3');
$little_title_3 = get_field('little_title_3');

$link_4 = get_field('link_4');
$big_title_4 = get_field('big_title_4');
$little_title_4 = get_field('little_title_4');

$image_5 = get_field('image_5');
$link_5 = get_field('link_5');
$big_title_5 = get_field('big_title_5');
$little_title_5 = get_field('little_title_5');

$image_6 = get_field('image_6');
$link_6 = get_field('link_6');
$big_title_6 = get_field('big_title_6');
$little_title_6 = get_field('little_title_6');

$link_7 = get_field('link_7');
$big_title_7 = get_field('big_title_7');
$little_title_7 = get_field('little_title_7');

$link_8 = get_field('link_8');
$big_title_8 = get_field('big_title_8');
$little_title_8 = get_field('little_title_8');

$link_9 = get_field('link_9');
$big_title_9 = get_field('big_title_9');
$little_title_9 = get_field('little_title_9');

$link_10 = get_field('link_10');
$big_title_10 = get_field('big_title_10');
$little_title_10 = get_field('little_title_10');

$link_11 = get_field('link_11');
$big_title_11 = get_field('big_title_11');
$little_title_11 = get_field('little_title_11');

$link_12 = get_field('link_12');
$big_title_12 = get_field('big_title_12');
$little_title_12 = get_field('little_title_12');

get_header(); ?>

<div class="media-page">
  <span class="space-top-media"></span>
  <h1 class="title-media">Media</h1>

<?php if( !empty($link_1) ): ?>
  <div class="vid-1">

    <iframe class="vid-1-title" width="560" height="315" src="<?php echo $link_1; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


    <?php if( !empty($big_title_1) ): ?>
    <h1 class="vid-1-title"><?php echo $big_title_1; ?>:</h1>
    <? endif; ?>
    <?php if( !empty($little_title_1) ): ?>
    <h4 class="vid-1-title"><?php echo $little_title_1; ?></h4>
  <? endif; ?>

  </div>
  <? endif; ?>


<?php if( !empty($link_2) ): ?>
  <div class="vid-2">

    <iframe class="vid-1-title" width="560" height="315" src="<?php echo $link_2; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


    <?php if( !empty($big_title_2) ): ?>
    <h1 class="vid-1-title"><?php echo $big_title_2; ?>:</h1>
    <? endif; ?>
    <?php if( !empty($little_title_2) ): ?>
    <h4 class="vid-1-title"><?php echo $little_title_2; ?></h4>
  <? endif; ?>

  </div>
  <? endif; ?>

<?php if( !empty($link_3) ): ?>
  <div class="vid-3">

    <iframe class="vid-1-title" width="560" height="315" src="<?php echo $link_3; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


    <?php if( !empty($big_title_3) ): ?>
    <h1 class="vid-1-title"><?php echo $big_title_3; ?>:</h1>
    <? endif; ?>
    <?php if( !empty($little_title_3) ): ?>
    <h4 class="vid-1-title"><?php echo $little_title_3; ?></h4>
  <? endif; ?>

  </div>
  <? endif; ?>

<?php if( !empty($link_4) ): ?>
  <div class="vid-4">

    <iframe class="vid-1-title" width="560" height="315" src="<?php echo $link_4; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


    <?php if( !empty($big_title_4) ): ?>
    <h1 class="vid-1-title"><?php echo $big_title_4; ?>:</h1>
    <? endif; ?>
    <?php if( !empty($little_title_4) ): ?>
    <h4 class="vid-1-title"><?php echo $little_title_4; ?></h4>
  <? endif; ?>

  </div>
  <? endif; ?>

<?php if( !empty($link_5) ): ?>
  <div class="vid-5">

    <a href="<?php echo $link_5; ?> " target="_blank" ><img class="vid-1-img" src="<?php echo $image_5['url']; ?>" alt="<?php echo $image_5['alt']; ?>"></a>

    <?php if( !empty($big_title_5) ): ?>
    <h1 class="vid-1-title"><?php echo $big_title_5; ?>:</h1>
    <? endif; ?>
    <?php if( !empty($little_title_5) ): ?>
    <h4 class="vid-1-title"><?php echo $little_title_5; ?></h4>
  <? endif; ?>

  </div>
  <? endif; ?>

<?php if( !empty($link_6) ): ?>
  <div class="vid-6">

    <a href="<?php echo $link_6; ?> " target="_blank" ><img class="vid-1-img" src="<?php echo $image_6['url']; ?>" alt="<?php echo $image_6['alt']; ?>"></a>

    <?php if( !empty($big_title_6) ): ?>
    <h1 class="vid-1-title"><?php echo $big_title_6; ?>:</h1>
    <? endif; ?>
    <?php if( !empty($little_title_6) ): ?>
    <h4 class="vid-1-title"><?php echo $little_title_6; ?></h4>
  <? endif; ?>

  </div>
  <? endif; ?>

<?php if( !empty($link_7) ): ?>
  <div class="vid-7">

    <iframe class="vid-1-title" width="560" height="315" src="<?php echo $link_7; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


    <?php if( !empty($big_title_7) ): ?>
    <h1 class="vid-1-title"><?php echo $big_title_7; ?>:</h1>
    <? endif; ?>
    <?php if( !empty($little_title_7) ): ?>
    <h4 class="vid-1-title"><?php echo $little_title_7; ?></h4>
  <? endif; ?>

    </div>
    <? endif; ?>

  <?php if( !empty($link_8) ): ?>
    <div class="vid-8">

      <iframe class="vid-1-title" width="560" height="315" src="<?php echo $link_8; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


      <?php if( !empty($big_title_8) ): ?>
      <h1 class="vid-1-title"><?php echo $big_title_8; ?>:</h1>
      <? endif; ?>
      <?php if( !empty($little_title_8) ): ?>
      <h4 class="vid-1-title"><?php echo $little_title_8; ?></h4>
    <? endif; ?>

      </div>
      <? endif; ?>

  <?php if( !empty($link_9) ): ?>
    <div class="vid-9">

      <iframe class="vid-1-title" width="560" height="315" src="<?php echo $link_9; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


      <?php if( !empty($big_title_9) ): ?>
      <h1 class="vid-1-title"><?php echo $big_title_9; ?>:</h1>
      <? endif; ?>
      <?php if( !empty($little_title_9) ): ?>
      <h4 class="vid-1-title"><?php echo $little_title_9; ?></h4>
    <? endif; ?>

      </div>
      <? endif; ?>

  <?php if( !empty($link_10) ): ?>
    <div class="vid-10">

      <iframe class="vid-1-title" width="560" height="315" src="<?php echo $link_10; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


      <?php if( !empty($big_title_10) ): ?>
      <h1 class="vid-1-title"><?php echo $big_title_10; ?>:</h1>
      <? endif; ?>
      <?php if( !empty($little_title_10) ): ?>
      <h4 class="vid-1-title"><?php echo $little_title_10; ?></h4>
    <? endif; ?>

      </div>
      <? endif; ?>

  <?php if( !empty($link_11) ): ?>
    <div class="vid-11">

      <iframe class="vid-1-title" width="560" height="315" src="<?php echo $link_11; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


      <?php if( !empty($big_title_11) ): ?>
      <h1 class="vid-1-title"><?php echo $big_title_11; ?>:</h1>
      <? endif; ?>
      <?php if( !empty($little_title_11) ): ?>
      <h4 class="vid-1-title"><?php echo $little_title_11; ?></h4>
    <? endif; ?>

      </div>
      <? endif; ?>

  <?php if( !empty($link_12) ): ?>
    <div class="vid-12">

      <iframe class="vid-1-title" width="560" height="315" src="<?php echo $link_12; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


      <?php if( !empty($big_title_12) ): ?>
      <h1 class="vid-1-title"><?php echo $big_title_12; ?>:</h1>
      <? endif; ?>
      <?php if( !empty($little_title_12) ): ?>
      <h4 class="vid-1-title"><?php echo $little_title_12; ?></h4>
    <? endif; ?>

      </div>
      <? endif; ?>
</div>




<?php get_footer(); ?>
