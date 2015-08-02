<?php
/*
 Template Name: Resources Section - Forms
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">


    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b text-white text-uppercase">ADF Resources</h1>
      </div>
    </div>

  </div>
</section>

<?php get_template_part( 'library/partials/nav', 'subpage' ); ?>

<section class="pad-v--2x">
  <div class="container">

    <div class="row pad-b">
      <div class="span12">
        <h3>Academie Forms</h3>
      </div>
    </div>

    <div class="row pad-b--2x">
      <div class="span3">
        <a href="<?php the_permalink(); ?>" class="box-event box-event--border">
          <h5 class="text-gray">Forms</h5>
          <h3>Parent Code of Conduct</h3>
          <span class="view-item view-item-horz">
            Download
            <span class="icon icon-arrow-down-line">
              <svg class="icon-svg">
                <use xlink:href="#icon-arrow-down-line" />
              </svg>
            </span>
          </span>
        </a>
      </div>
      <div class="span3">
        <a href="<?php the_permalink(); ?>" class="box-event box-event--border">
          <h5 class="text-gray">Forms</h5>
          <h3>Player Code of Conduct</h3>
          <span class="view-item view-item-horz">
            Download
            <span class="icon icon-arrow-down-line">
              <svg class="icon-svg">
                <use xlink:href="#icon-arrow-down-line" />
              </svg>
            </span>
          </span>
        </a>
      </div>
    </div>

    <div class="row pad-b">
      <div class="span12">
        <h3>Health and Nutrition Resources</h3>
      </div>
    </div>

    <div class="row">
      <div class="span3">
        <a href="<?php the_permalink(); ?>" class="box-event box-event--border">
          <h5 class="text-gray">Health</h5>
          <h3>Concussion Facts</h3>
          <span class="view-item view-item-horz">
            Download
            <span class="icon icon-arrow-down-line">
              <svg class="icon-svg">
                <use xlink:href="#icon-arrow-down-line" />
              </svg>
            </span>
          </span>
        </a>
      </div>
      <div class="span3">
        <a href="<?php the_permalink(); ?>" class="box-event box-event--border">
          <h5 class="text-gray">Health</h5>
          <h3>Injury Prevention</h3>
          <span class="view-item view-item-horz">
            Download
            <span class="icon icon-arrow-down-line">
              <svg class="icon-svg">
                <use xlink:href="#icon-arrow-down-line" />
              </svg>
            </span>
          </span>
        </a>
      </div>
      <div class="span3">
        <a href="<?php the_permalink(); ?>" class="box-event box-event--border">
          <h5 class="text-gray">Health</h5>
          <h3>Nutrition</h3>
          <span class="view-item view-item-horz">
            Download
            <span class="icon icon-arrow-down-line">
              <svg class="icon-svg">
                <use xlink:href="#icon-arrow-down-line" />
              </svg>
            </span>
          </span>
        </a>
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