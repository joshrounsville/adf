<?php get_header(); ?>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <a href="/events/" class="icon-circle-wrap">
          <span class="icon icon-grid">
            <svg class="icon-svg">
              <use xlink:href="#icon-grid" />
            </svg>
          </span>
          <strong>All Events</strong>
        </a>
      </div>
    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row pad-t">
      <div class="span8">
        <?php $eventDate = DateTime::createFromFormat('Ymd', get_field('event_date')); ?>
        <time datetime="<?php echo $eventDate->format('Y-m-d'); ?>"><?php echo $eventDate->format('F j, Y'); ?></time>
        <h2><?php the_title(); ?></h2>
        <div class="post-wrap pad-t">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="span4">
        <div class="bg-white border-top--blue box-shadow pad-v pad-h--20 border-radius">
          <h4 class="strong">Where?</h4>
          <ul class="pad-b--20">
            <li><?php the_field('event_street_address'); ?></li>
            <li><?php the_field('event_city_state_zip'); ?></li>
          </ul>
          <h4 class="strong">When?</h4>
          <p class="pad-b--0"><?php echo $eventDate->format('F j, Y'); ?></p>
        </div>
      </div>
    </div>
    <?php endwhile; endif; ?>

  </div>
</section>


<section class="bg-gray pad-v">
  <div class="container">

    <div class="row pad-b--20">
      <div class="span12">
        <h3>More Events</h3>
      </div>
    </div>

    <?php
      $today = date('Ymd');
      global $post;
      $postId = $post->ID;

      $args = array(
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'post_type' => 'event',
        'posts_per_page' => 4,
        'post__not_in' => array($postId),
        'meta_query' => array(
          array(
            'key' => 'event_date',
            'value'   => $today,
            'compare' => '>='
          )
        )
      );
    ?>
    <?php $eventQuery = new WP_Query( $args ); ?>

    <?php if ( $eventQuery->have_posts() ) : ?>
      <div class="row">

      <?php while ($eventQuery->have_posts()) : $eventQuery->the_post(); ?>
        <div class="span3">
          <a href="<?php the_permalink(); ?>" class="box-event">
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
      <?php endwhile; ?>

      </div>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

  </div>
</section>


<?php get_footer(); ?>