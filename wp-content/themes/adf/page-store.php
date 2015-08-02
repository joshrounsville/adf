<?php
/*
 Template Name: Store Page
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">

    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b--20 text-white text-uppercase">Academia Store</h1>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <?php
      $args = array(
        'orderby' => 'name',
        'order' => 'ASC',
        'post_type' => 'store',
        'posts_per_page' => -1,
      );
    ?>
    <?php $storeQuery = new WP_Query( $args ); ?>

    <?php $post_count = 1; if ( $storeQuery->have_posts() ) : while ($storeQuery->have_posts()) : $storeQuery->the_post(); ?>

      <?php if ($post_count % 4 == 1): ?>
      <div class="row pad-t">
      <?php endif; ?>

        <div class="span3">
          <a href="<?php the_field('link_to_mindbody_item'); ?>" target=_"blank" class="box-store">
            <div class="img-wrap">
              <?php the_post_thumbnail('box-carousel-small'); ?>
            </div>
            <div class="bottom">
            <h5><?php the_field('price'); ?></h5>
              <span class="view-item">
                <span class="icon icon-arrow-right-line">
                  <svg class="icon-svg">
                    <use xlink:href="#icon-arrow-right-line" />
                  </svg>
                </span>
              </span>
            </div>
            <div class="item-overview">
              <h3><?php the_title(); ?></h3>
              <?php if ( get_field('item_description') ) : ?>
              <h6><?php the_field('item_description'); ?></h6>
              <?php endif; ?>
            </div>
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