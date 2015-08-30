<?php
/*
 Template Name: About Section - Bylaws
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">


    <div class="row">
      <div class="span8">
        <h1 class="pad-b text-white text-uppercase">Helping Players Realize Their Full Potential</h1>
      </div>
    </div>

  </div>
</section>


<?php get_template_part( 'library/partials/nav', 'subpage' ); ?>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span8">
        <div class="content">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>