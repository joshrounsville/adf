<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="callout">
  <div class="container relative">


    <div class="row">
      <div class="span8">
        <h1 class="pad-b text-white text-uppercase"><?php the_title(); ?></h1>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span8">
        <div class="content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

  </div>
</section>

<?php endwhile; endif; ?>


<?php get_footer(); ?>