<?php
/*
 Template Name: Teams Page
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">

    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b text-white text-uppercase">We Are ADF International Portland Select</h1>
      </div>
    </div>

  </div>
</section>


<section class="bg-gray-dark">
  <div class="container">

    <div class="row">
      <div class="span12">

        <?php
          $teamArgs = array(
            'post_type' => 'teams',
            'posts_per_page' => -1,
            'orderby' => 'name',
            'order' => ASC
          );
          $teamQuery = new WP_Query( $teamArgs );
          $current = get_the_title();
        ?>
        <nav class="nav-secondary">
          <ul class="list-inline">
          <?php if ( $teamQuery->have_posts() ) : while ( $teamQuery->have_posts() ) : $teamQuery->the_post(); ?>
          <?php $title = get_the_title(); ?>
            <li<?php if ( $current == $title ) : ?> class="current_page_item"<?php endif; ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php wp_reset_postdata(); ?>
          <?php endwhile; endif; ?>
          </ul>
        </nav>

      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="row">
      <div class="span12">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>

    <?php if ( has_post_thumbnail() ) : ?>

    <div class="row pad-t--20 pad-b--20">
      <div class="span12">
        <?php the_post_thumbnail('team'); ?>
      </div>
    </div>

    <?php endif; ?>

    <div class="row">
      <div class="span8">
        <?php the_content(); ?>
      </div>
    </div>

    <?php endwhile; endif; ?>
  </div>
</section>


<?php if ( get_field('players') ): ?>
<section class="bg-gray pad-v--2x overflow-hidden">
  <div class="container">

    <div class="row text-center pad-b">
      <div class="span12">

        <nav class="nav-carousel" data-state="multi">
          <ul class="list-inline-middle list-inline-spacer">
            <li class="pad-r"><h3>Meet the Players</h3></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter active" data-target="all">All Players</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="defense">Defense</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="forward">Forward</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="goalkeeper">Goal Keeper</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="midfield">Midfield</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="striker">Striker</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="coaches">Coaches</a></li>
          </ul>
        </nav>

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
            All Players
          </a>

          <div class="slider slider-multi">

          <?php $players = get_field('players'); ?>
          <?php if ( $players ) : ?>

            <?php foreach( $players as $player ): ?>

            <?php $user_info = get_userdata( $player['ID'] ); ?>
            <?php
              if ( $user_info->position == 'Select Position' ) {
                $cleanPosition = 'none';
              } else {
                $cleanPosition = strtolower( str_replace(' ', '', $user_info->position ) );
              }
            ?>
            <div class="item js--sort-item" data-position="<?php echo $cleanPosition; ?>">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <?php if ( $user_info->profile_photo ) : ?>
                  <?php echo wp_get_attachment_image( $user_info->profile_photo, 'box-carousel-tall' ); ?>
                  <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-placeholder.png" alt="player photo">
                  <?php endif; ?>
                </div>
                <div class="bottom">
                  <h5><?php echo $user_info->user_firstname . " " . $user_info->user_lastname; ?></h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3><?php echo $user_info->user_firstname . " " . $user_info->user_lastname; ?></h3>
                  <?php
                    if ( $user_info->position == 'Select Position' ) {
                      echo '';
                    } else {
                      echo '<h6>' . $user_info->position . '</h6>';
                    }
                  ?>
                </div>
              </a>
            </div>

            <?php endforeach; ?>
          <?php endif; ?>



          <?php
            $coachArgs = array(
              'post_type' => 'coaches',
              'posts_per_page' => -1,
              'orderby' => 'name',
              'order' => ASC
            );
            $coachQuery = new WP_Query( $coachArgs );
          ?>

          <?php if ( $coachQuery->have_posts() ) : while ( $coachQuery->have_posts() ) : $coachQuery->the_post(); ?>

          <div class="item" data-position="coaches">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <?php if ( get_the_post_thumbnail($post->ID, 'box-carousel-tall') ) : ?>
                  <?php the_post_thumbnail('box-carousel-tall'); ?>
                  <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-placeholder.png" alt="player photo">
                  <?php endif; ?>
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
                <div class="carousel-tall-overview">
                  <h3><?php the_title(); ?></h3>
                  <h6>Coach</h6>
                </div>
              </a>
            </div>

          <?php wp_reset_postdata(); ?>
          <?php endwhile; endif; ?>
          </div>


          <div class="slider slider-single">


          <?php if ( $players ) : ?>

            <?php foreach( $players as $player ): ?>

            <?php $user_info = get_userdata( $player['ID'] ); ?>
            <?php $cleanPosition = strtolower( str_replace(' ', '', $user_info->position ) ); ?>
            <div class="item js--sort-item" data-position="<?php echo $cleanPosition; ?>">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3><?php echo $user_info->user_firstname . " " . $user_info->user_lastname; ?></h3>
                    <?php
                      if ( $user_info->position == 'Select Position' ) {
                        echo '';
                      } else {
                        echo '<h6>' . $user_info->position . '</h6>';
                      }
                    ?>
                    <?php if ( $user_info->instagram_account || $user_info->facebook_account || $user_info->twitter_account) : ?>
                    <ul class="list-inline">
                      <?php if ( $user_info->facebook_account ) : ?>
                      <li class="social facebook">
                        <a href="<?php echo $user_info->facebook_account; ?>" target="_blank">
                          <span class="icon icon-facebook">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-facebook" />
                            </svg>
                          </span>
                        </a>
                      </li>
                      <?php endif; ?>
                      <?php if ( $user_info->instagram_account ) : ?>
                      <li class="social instagram">
                        <a href="<?php echo $user_info->instagram_account; ?>" target="_blank">
                          <span class="icon icon-instagram">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-instagram" />
                            </svg>
                          </span>
                        </a>
                      </li>
                      <?php endif; ?>
                      <?php if ( $user_info->twitter_account ) : ?>
                      <li class="social twitter">
                        <a href="<?php echo $user_info->twitter_account; ?>" target="_blank">
                          <span class="icon icon-twitter">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-twitter" />
                            </svg>
                          </span>
                        </a>
                      </li>
                      <?php endif; ?>
                    </ul>
                    <?php endif; ?>
                  </div>
                  <div class="img-wrap">
                    <?php if ( $user_info->profile_photo ) : ?>
                    <?php echo wp_get_attachment_image( $user_info->profile_photo, 'box-carousel-tall' ); ?>
                    <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-header-placeholder.png" alt="player photo">
                    <?php endif; ?>
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <?php if ( $user_info->position != 'Select Position' ) : ?>
                    <li>
                      <h6>Position</h6>
                      <p><?php echo $user_info->position; ?></p>
                    </li>
                    <?php endif; ?>
                    <li>
                      <h6>Current Club</h6>
                      <p><?php the_title(); ?></p>
                    </li>
                    <?php if ( $user_info->number ) : ?>
                    <li>
                      <h6>Number</h6>
                      <p><?php echo $user_info->number; ?></p>
                    </li>
                    <?php endif; ?>
                    <?php if ( $user_info->favorite_player ) : ?>
                    <li>
                      <h6>Favorite Player</h6>
                      <p><?php echo $user_info->favorite_player; ?></p>
                    </li>
                    <?php endif; ?>
                    <?php if ( $user_info->place_of_birth ) : ?>
                    <li>
                      <h6>Place of Birth</h6>
                      <p><?php echo $user_info->place_of_birth; ?></p>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>

            <?php endforeach; ?>
          <?php endif; ?>


          <?php $coachQuerySingle = new WP_Query( $coachArgs ); ?>
          <?php if ( $coachQuerySingle->have_posts() ) : while ( $coachQuerySingle->have_posts() ) : $coachQuerySingle->the_post(); ?>

            <div class="item" data-position="coaches">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3><?php the_title(); ?></h3>
                    <h6>Coach</h6>

                    <?php if ( get_field('link_to_instagram_account') || get_field('link_to_facebook_account') || get_field('link_to_twitter_account')) : ?>
                    <ul class="list-inline">
                      <?php if ( get_field('link_to_facebook_account') ) : ?>
                      <li class="social facebook">
                        <a href="<?php the_field('link_to_facebook_account'); ?>" target="_blank">
                          <span class="icon icon-facebook">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-facebook" />
                            </svg>
                          </span>
                        </a>
                      </li>
                      <?php endif; ?>
                      <?php if ( get_field('link_to_instagram_account') ) : ?>
                      <li class="social instagram">
                        <a href="<?php the_field('link_to_instagram_account'); ?>" target="_blank">
                          <span class="icon icon-instagram">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-instagram" />
                            </svg>
                          </span>
                        </a>
                      </li>
                      <?php endif; ?>
                      <?php if ( get_field('link_to_twitter_account') ) : ?>
                      <li class="social twitter">
                        <a href="<?php the_field('link_to_twitter_account'); ?>" target="_blank">
                          <span class="icon icon-twitter">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-twitter" />
                            </svg>
                          </span>
                        </a>
                      </li>
                      <?php endif; ?>
                    </ul>
                    <?php endif; ?>
                  </div>
                  <div class="img-wrap">
                    <?php if ( get_the_post_thumbnail($post->ID, 'box-carousel-tall') ) : ?>
                    <?php the_post_thumbnail('box-carousel-tall'); ?>
                    <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-header-placeholder.png" alt="player photo">
                    <?php endif; ?>
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Position</h6>
                      <p>Coach</p>
                    </li>
                    <li>
                      <?php the_content(); ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          <?php wp_reset_postdata(); ?>
          <?php endwhile; endif; ?>

          </div>

        </div>

      </div>
    </div>

  </div>
</section>

<?php endif; ?>


<?php get_footer(); ?>
