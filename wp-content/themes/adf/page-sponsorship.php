<?php
/*
 Template Name: Sponsors Page
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">


    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b text-white text-uppercase">ADF Partners</h1>
      </div>
    </div>

  </div>
</section>


<?php $sponsorQuery = new WP_Query( array('posts_per_page' => '-1', 'post_type' => 'sponsor', 'orderby' => 'name') ); ?>
<?php if ( $sponsorQuery->have_posts() ) : ?>
<section class="bg-white border-top--gray pad-v--2x">
  <div class="container">

    <div class="row pad-b">
      <div class="span12">
        <h2>Our Partners</h2>
      </div>
    </div>

    <div class="row">
      <div class="span12">
        <ul class="list-inline-spacer-right list-partners">
          <?php while ($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
          <li>
            <?php $sponsorImage = get_field('sponsor_logo'); ?>
            <img src="<?php echo $sponsorImage['sizes']['sponsor']; ?>" alt="ADF Sponsor">
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>

  </div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


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