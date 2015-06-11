<?php
/*
 Template Name: Events Section - All Events
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">

    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b--20 text-white text-uppercase">Events</h1>
        <h4 class="pad-b text-white strong">Find out what's coming up</h4>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <ul class="list-inline-middle list-inline-spacer">
            <li class="pad-r"><h3>Upcoming Events</h3></li>
            <li><a href="/events/" class="btn btn--secondary btn--outline-gray btn--filter active">All Events</a></li>
            <li><a href="/upcoming-events/" class="btn btn--secondary btn--outline-gray btn--filter">Upcoming Events</a></li>
            <li><a href="/past-events/" class="btn btn--secondary btn--outline-gray btn--filter">Past Events</a></li>
        </ul>
      </div>
    </div>

    <?php
      $today = date('Ymd');

      $args = array(
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'post_type' => 'event',
        'posts_per_page' => -1,
        'paged' => $paged
      );
    ?>
    <?php $eventQuery = new WP_Query( $args ); ?>

    <?php $post_count = 1; if ( $eventQuery->have_posts() ) : while ($eventQuery->have_posts()) : $eventQuery->the_post(); ?>

      <?php if ($post_count % 4 == 1): ?>
      <div class="row pad-t">
      <?php endif; ?>

        <div class="span3">
          <a href="<?php the_permalink(); ?>" class="box-event box-event--border">
            <?php $eventDate = DateTime::createFromFormat('Ymd', get_field('event_date')); ?>
            <time datetime="<?php echo $eventDate->format('Y-m-d'); ?>"><?php echo $eventDate->format('F j, Y'); ?></time>
            <h3><?php the_title(); ?></h3>
            <span class="view-item">
              View Event
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