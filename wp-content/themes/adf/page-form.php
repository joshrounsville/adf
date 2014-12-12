<?php
/*
 Template Name: Form Page
*/
?>


<?php get_header(); ?>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span6 offset3">

        <div class="form-wrap">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>

      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>