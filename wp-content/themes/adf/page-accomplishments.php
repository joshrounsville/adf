<?php
/*
 Template Name: Accomplishments
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">

    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b--20 text-white text-uppercase">Accomplishments</h1>
        <h4 class="pad-b text-white strong">Find out what's coming up</h4>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h2>Accomplishments</h2>
      </div>
    </div>

    <?php
      $today = date('Ymd');

      $args = array(
        'meta_key' => 'tournament_date',
        'orderby' => 'meta_value_num',
        'order' => 'DSC',
        'post_type' => 'accomplishment',
        'posts_per_page' => -1,
        'paged' => $paged
      );
    ?>
    <?php $accomplishmentQuery = new WP_Query( $args ); ?>

    <?php $post_count = 1; if ( $accomplishmentQuery->have_posts() ) : while ($accomplishmentQuery->have_posts()) : $accomplishmentQuery->the_post(); ?>

      <?php if ($post_count % 4 == 1): ?>
      <div class="row pad-t">
      <?php endif; ?>

        <div class="span3">
          <a href="<?php the_permalink(); ?>" class="box-event box-event--border">
            <?php $tournamentDate = DateTime::createFromFormat('Ymd', get_field('tournament_date')); ?>
            <time datetime="<?php echo $tournamentDate->format('Y-m-d'); ?>"><?php echo $tournamentDate->format('F j, Y'); ?></time>
            <h3><?php the_title(); ?></h3>
            <span class="view-item">
              View Accomplishment
              <span class="icon icon-arrow-right-line">
                <svg class="icon-svg">
                  <use xlink:href="#icon-arrow-right-line" />
                </svg>
              </span>
            </span>
          </a>
        </div>

      <?php if ($post_count % 4 == 0): ?>
      </div>
      <?php endif; ?>

      <?php $post_count++; endwhile; endif; ?>

      <?php $post_count = $post_count - 1 ; if (0 != $post_count % 4): ?>
      </div>
      <?php endif; ?>

    <?php wp_reset_postdata(); ?>

  </div>
</section>


<?php get_footer(); ?>