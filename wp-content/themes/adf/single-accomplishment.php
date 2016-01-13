<?php get_header(); ?>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <a href="/accomplishments/" class="icon-circle-wrap">
          <span class="icon icon-grid">
            <svg class="icon-svg">
              <use xlink:href="#icon-grid" />
            </svg>
          </span>
          <strong>All Accomplishments</strong>
        </a>
      </div>
    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row pad-t">
      <div class="span8">
        <time datetime="<?php echo date('Y-m-d', strtotime(get_field('tournament_date'))); ?>"><?php echo date('F j, Y', strtotime(get_field('tournament_date'))); ?></time>
        <h2><?php the_title(); ?></h2>
        <div class="post-wrap pad-t">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="span4">
        <div class="bg-white border-top--yellow box-shadow pad-v pad-h--20 border-radius">
          <h4 class="strong">Place</h4>
          <p class="h2 pad-b--20 text-yellow"><?php the_field('place_in_tournament'); ?></p>
          <h4 class="strong">When</h4>
          <p class="pad-b--0"><?php echo date('F j, Y', strtotime(get_field('tournament_date'))); ?></p>
        </div>
      </div>
    </div>
    <?php endwhile; endif; ?>

  </div>
</section>


<?php
  $today = date('Ymd');
  global $post;
  $postId = $post->ID;

  $args = array(
    'meta_key' => 'tournament_date',
    'orderby' => 'meta_value_num',
    'order' => 'DSC',
    'post_type' => 'accomplishment',
    'posts_per_page' => 4,
    'paged' => $paged,
    'post__not_in' => array($postId)
  );
?>
<?php $accomplishmentQuery = new WP_Query( $args ); ?>

<?php if ( $accomplishmentQuery->have_posts() ) : ?>

<section class="bg-gray pad-v">
  <div class="container">

    <div class="row pad-b--20">
      <div class="span12">
        <h3>More Accomplishments</h3>
      </div>
    </div>

    <div class="row">

      <?php while ($accomplishmentQuery->have_posts()) : $accomplishmentQuery->the_post(); ?>
        <div class="span3">
          <a href="<?php the_permalink(); ?>" class="box-event box-event--border">
            <time datetime="<?php echo date('Y-m-d', strtotime(get_field('tournament_date'))); ?>"><?php echo date('F j, Y', strtotime(get_field('tournament_date'))); ?></time>
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
      <?php endwhile; ?>

    </div>

  </div>
</section>

<?php endif; ?>
<?php wp_reset_postdata(); ?>


<?php get_footer(); ?>