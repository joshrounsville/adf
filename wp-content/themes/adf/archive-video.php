<?php get_header(); ?>


<section class="callout">
  <div class="container relative">

    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b--20 text-white text-uppercase">ADF TV</h1>
        <h4 class="pad-b text-white strong">The latest videos from Academie de Futebol Training</h4>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h3>Latest Videos</h3>
      </div>
    </div>

    <div class="js--scroll-wrap" id="js--video-wrap" data-type="video">

    <?php $post_count = 1; if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php if ($post_count % 3 == 1): ?>
      <div class="row pad-t">
      <?php endif; ?>

        <div class="span4">
          <a href="#" class="box-video video-wrap" data-id="<?php the_field('youtube_id'); ?>">
            <span class="icon icon-arrow-right">
              <svg class="icon-svg">
                <use xlink:href="#icon-arrow-right" />
              </svg>
            </span>
            <span class="video-title"></span>
          </a>
        </div>

      <?php if ($post_count % 3 == 0): ?>
      </div>
      <?php endif; ?>

      <?php $post_count++; endwhile; endif; ?>

      <?php $post_count = $post_count - 1 ; if (0 != $post_count % 3): ?>
      </div>
      <?php endif; ?>

    </div>

    <?php if ( get_next_posts_link() ) : ?>
    <div class="row text-center pad-t">
      <div class="span4 offset4 btn--wrap-outline js--scroll-link">
        <?php next_posts_link( 'See More Videos', 0 ); ?>
      </div>
    </div>

    <div class="js--scroll-pages hide">
      <?php $pageArgs = array ( 'show_all' => true ); ?>
      <?php echo paginate_links( $pageArgs ); ?>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php get_template_part( 'library/partials/modal', 'video' ); ?>

<?php get_footer(); ?>