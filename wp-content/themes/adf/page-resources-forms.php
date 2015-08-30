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

    <?php $form_count = 1; if( have_rows('academie_forms') ) : while ( have_rows('academie_forms') ) : the_row(); ?>

    <?php if ($form_count % 4 == 1): ?>
    <div class="row pad-b">
    <?php endif; ?>

      <div class="span3">
        <a href="<?php the_sub_field('form_pdf'); ?>" target="_blank" class="box-event box-event--border">
          <h5 class="text-gray">Forms</h5>
          <h3><?php the_sub_field('title'); ?></h3>
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

    <?php if ($form_count % 4 == 0): ?>
    </div>
    <?php endif; ?>

    <?php $form_count++; endwhile; endif; ?>

    <?php $form_count = $form_count - 1 ; if (0 != $form_count % 4): ?>
    </div>
    <?php endif; ?>


    <div class="row pad-t pad-b">
      <div class="span12">
        <h3>Health and Nutrition Resources</h3>
      </div>
    </div>

    <?php $resource_count = 1; if( have_rows('health_and_nutrition_resources') ) : while ( have_rows('health_and_nutrition_resources') ) : the_row(); ?>

    <?php if ($resource_count % 4 == 1): ?>
    <div class="row pad-b">
    <?php endif; ?>

      <div class="span3">
        <a href="<?php the_sub_field('link_to_resource'); ?>" target="_blank" class="box-event box-event--border">
          <h5 class="text-gray">Forms</h5>
          <h3><?php the_sub_field('title'); ?></h3>
          <span class="view-item view-item-horz">
            View Resource
            <span class="icon icon-arrow-down-line">
              <svg class="icon-svg">
                <use xlink:href="#icon-arrow-down-line" />
              </svg>
            </span>
          </span>
        </a>
      </div>

    <?php if ($resource_count % 4 == 0): ?>
    </div>
    <?php endif; ?>

    <?php $resource_count++; endwhile; endif; ?>

    <?php $resource_count = $resource_count - 1 ; if (0 != $resource_count % 4): ?>
    </div>
    <?php endif; ?>

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