<?php
/*
 Template Name: Form Page
*/
?>


<?php get_header(); ?>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span4 offset4 span-l-8 offset-l-2 span-m-10 offset-m-1">

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