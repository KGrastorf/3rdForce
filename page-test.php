<?php
/* Template Name: Test */

get_header(); ?>


<div class="" id="homeAe">

</div>


<script type="text/javascript">
var container = document.getElementsByTagName('homeAe');

var animData = {
  container: container,
  renderer: 'svg',
  autoplay: true,
  loop: false,
  path: 'data.json'
};

var anim = bodymovin.loadAnimation(animData);
</script>
<?php get_footer(); ?>
