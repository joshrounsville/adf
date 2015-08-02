<?php
/*
 Template Name: About Section - About ADF
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">


    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b text-white text-uppercase">Helping Players Realize Their Full Potential</h1>
      </div>
    </div>

  </div>
</section>

<?php get_template_part( 'library/partials/nav', 'subpage' ); ?>

<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h2>ADF History</h2>
      </div>
    </div>

    <div class="row pad-t--20">
      <div class="span8">
        <p class="text-highlight pad-b--0">Academia de Futeboltraining was founded in 2014 by Joaquim Capuia to give the NW soccer community a much needed academy program for youth development. Prior to founding the Academy, Joaquim was the owner and head trainer of Futeboltraining.  From its inception in 2011 Futeboltraininghas helped over 400 players develop and improve their soccer skills. Training with Futeboltraining helps players increase their technical abilities, learn to play faster, think quicker and make better decisions. Numerous Futeboltraining players have gone on to ODP, D1 College, MLS Academy and professional careers.</p>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x bg-red">
  <div class="container">

    <div class="row text-center">
      <div class="span8 offset2">
        <p class="h3 text-red-dark semi pad-b--0">Joaquim and his staff not only train players to improve technically, they also coach, mentor and guide players to help them realize their goals.</p>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h3>A New Era for Portland</h3>
      </div>
    </div>

    <div class="row pad-t--20">
      <div class="span8">
        <p class="text-highlight pad-b--0">From Joaquim’s invaluable experience gained developing top players and discussing their goals he realized that the Northwest was lacking a world class soccer academy. Throughout Europe and South America the best players are part of an academy. A professional academy is a place where players thrive and grow by working with the best trainers and coaches and by interacting with the best players. Academia de Futeboltraining was established to provide players with exactly that type of world class environment so that they can realize their full potential.</p>
      </div>
    </div>

  </div>
</section>


<?php
  $boardArgs = array(
    'post_type' => 'board',
    'posts_per_page' => -1,
    'orderby' => 'name',
    'order' => ASC
  );
?>
<?php $boardQuery = new WP_Query( $boardArgs ); ?>
<?php if ( $boardQuery->have_posts() ) : ?>

<section class="bg-gray pad-v--2x overflow-hidden">
  <div class="container">

    <div class="row pad-b">
      <div class="span12">
        <h3>Board of Directors</h3>
      </div>
    </div>

    <div class="row">
      <div class="span12">

        <div class="slider-main-wrap">

          <div class="loader">
            Loading...
          </div>

           <a href="#" class="view-multi">
            <span class="icon icon-grid">
              <svg class="icon-svg">
                <use xlink:href="#icon-grid" />
              </svg>
            </span>
            View All
          </a>

          <div class="slider slider-multi">
            <?php while ($boardQuery->have_posts()) : $boardQuery->the_post(); ?>
            <div class="item">
              <a href="#" class="box-carousel box-carousel-short">
                <div class="img-wrap">
                  <?php the_post_thumbnail('box-carousel-small'); ?>
                </div>
                <div class="bottom">
                  <h5><?php the_title(); ?></h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-short-overview">
                  <h3><?php the_field('title'); ?></h3>
                </div>
              </a>
            </div>
            <?php endwhile; ?>
          </div>


          <div class="slider slider-single">
            <?php while ($boardQuery->have_posts()) : $boardQuery->the_post(); ?>
            <div class="item">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3><?php the_title(); ?></h3>
                    <h6><?php the_field('title'); ?></h6>
                    <ul class="list-inline">
                      <?php if ( get_field('facebook_account') ): ?>
                      <li class="social facebook">
                        <a href="<?php the_field('facebook_account'); ?>" target="_blank">
                          <span class="icon icon-facebook">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-facebook" />
                            </svg>
                          </span>
                        </a>
                      </li>
                      <?php endif; ?>
                      <?php if ( get_field('instagram_account') ) : ?>
                      <li class="social instagram">
                        <a href="<?php the_field('instagram_account'); ?>" target="_blank">
                          <span class="icon icon-instagram">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-instagram" />
                            </svg>
                          </span>
                        </a>
                      </li>
                      <?php endif; ?>
                      <?php if ( get_field('twitter_account') ): ?>
                      <li class="social twitter">
                        <a href="<?php the_field('twitter_account'); ?>" target="_blank">
                          <span class="icon icon-twitter">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-twitter" />
                            </svg>
                          </span>
                        </a>
                      </li>
                      <?php endif; ?>
                    </ul>
                  </div>
                  <div class="img-wrap">
                    <?php the_post_thumbnail('full'); ?>
                  </div>
                </div>
                <div class="content-wrap">
                  <div class="detail-wrap">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


<?php if ( !is_user_logged_in() ) : ?>
<section class="pad-v">
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