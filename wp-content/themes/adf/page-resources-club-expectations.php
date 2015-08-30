<?php
/*
 Template Name: Resources Section - Club Expectations
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">


    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b text-white text-uppercase">Club Expectations</h1>
      </div>
    </div>

  </div>
</section>

<?php get_template_part( 'library/partials/nav', 'subpage' ); ?>

<section class="pad-v--2x">
  <div class="container">

    <div class="row pad-b">
      <div class="span12">
        <h2>Player and Parent Code of Conduct</h2>
      </div>
    </div>

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


<?php if ( !is_user_logged_in() ) : ?>
<section class="pad-v bg-gray">
  <div class="container">

    <div class="row text-center">
      <div class="span12">
        <h3 class="h2 semi pad-b--20">Ready to take your game to the next level?</h3>
        <a href="<?php echo get_page_link(78); ?>" class="btn btn--primary">Register</a>
      </div>
    </div>

  </div>
</section>
<?php endif; ?>


<?php get_footer(); ?>