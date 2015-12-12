<?php
/*
 Template Name: Home Page
*/
?>


<?php get_header(); ?>


<section class="callout callout-video">
  <div class="container relative">

    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b text-white text-uppercase">Learn the Technique. <br>Learn the Art.</h1>
        <p class="text-highlight pad-b">We are Portland’s Premier Technical Soccer Training Development Program. Academia de Futeboltraining is designed for players 8-21 years of age, who are inspired to take their game to the next level.</p>
        <a href="/about/" class="btn btn--primary">Learn More</a>
      </div>
    </div>

  </div>

  <div class="callout-video-bg">
    <div class="overlay"></div>
    <video autoplay loop poster="<?php echo get_template_directory_uri(); ?>/library/img/headers/header.jpg">
      <source src="<?php echo get_template_directory_uri(); ?>/library/video/header.webm" type="video/webm">
      <source src="<?php echo get_template_directory_uri(); ?>/library/video/header2.mp4" type="video/mp4">
    </video>
  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h3 class="h2">Academia Programs</h3>
      </div>
    </div>

    <div class="row pad-t">
      <div class="span3 span-m-6 pad-b-m--20">
        <span class="icon icon-circle icon-soccer-ball">
          <svg class="icon-svg">
            <use xlink:href="#icon-soccer-ball" />
          </svg>
        </span>
        <h4 class="pad-t--10 pad-b--10">The Academia</h4>
        <p>Players that are selected, join the Academia team, which participates in two of the highest leagues in Oregon: Oregon Premier League and Oregon Youth Soccer Association.</p>
      </div>
      <div class="span3 span-m-6 pad-b-m--20">
        <span class="icon icon-circle icon-soccer-pitch">
          <svg class="icon-svg">
            <use xlink:href="#icon-soccer-pitch" />
          </svg>
        </span>
        <h4 class="pad-t--10 pad-b--10">Training Academia</h4>
        <p>The Training Academia is open to all players 6 years and older. The Academia’s curriculum is designed to focus on developing the individual player's technical abilities and touch. It is also designed to develop confidence on the ball by teaching players how to maneuver in and around tight spaces under pressure.</p>
      </div>
      <div class="span3 span-m-6">
        <span class="icon icon-circle icon-globe">
          <svg class="icon-svg">
            <use xlink:href="#icon-globe" />
          </svg>
        </span>
        <h4 class="pad-t--10 pad-b--10">International Training</h4>
        <p>Players have the opportunity to travel to Brazil and train with professional club teams such as Fluminense. Training with these teams exposes players to a faster paced game which accelerates their development. While in Brazil, players gain valuable life experiences on and off the pitch.</p>
      </div>
      <div class="span3 span-m-6">
        <span class="icon icon-circle icon-trophy">
          <svg class="icon-svg">
            <use xlink:href="#icon-trophy" />
          </svg>
        </span>
        <h4 class="pad-t--10 pad-b--10">First Team</h4>
        <p>Players in the academia will get opportunities to suit up for friendlies and league games with ADF's top division men's IPS team. ADF IPS competes in the GPSD and OPSL Premier Leagues as well as regional and international tournaments.</p>
      </div>
    </div>

  </div>
</section>

<?php
  $today = date('Ymd');

  $args = array(
    'meta_key' => 'event_date',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'post_type' => 'event',
    'posts_per_page' => 4,
    'meta_query' => array(
      array(
        'key' => 'event_date',
        'value'   => $today,
        'compare' => '>'
      )
    )
  );
?>
<?php $eventQuery = new WP_Query( $args ); ?>
<?php if ( $eventQuery->have_posts() ) : ?>
<section class="bg-gray pad-v">
  <div class="container">

    <div class="row">
      <div class="span12">
        <ul class="list-inline-middle list-inline-spacer-right">
          <li><h3>Upcoming Events</h3></li>
          <li><a href="/upcoming-events/" class="btn">See All Events</a></li>
        </ul>
      </div>
    </div>

    <div class="row pad-t">
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

  </div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


<?php $videoQuery = new WP_Query( array('posts_per_page' => 3, 'post_type' => 'video') ); ?>
<?php if ( $videoQuery->have_posts() ) : ?>
<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <ul class="list-inline-middle list-inline-spacer-right">
          <li><h3>Latest Videos</h3></li>
          <li><a href="/videos/" class="btn">See All Videos</a></li>
        </ul>
      </div>
    </div>

    <div class="row pad-t" id="js--video-wrap">
      <?php while ($videoQuery->have_posts()) : $videoQuery->the_post(); ?>
      <div class="span4">
        <a href="/videos/" class="box-video video-wrap" data-id="<?php the_field('youtube_id'); ?>">
          <span class="icon icon-arrow-right">
            <svg class="icon-svg">
              <use xlink:href="#icon-arrow-right" />
            </svg>
          </span>
          <span class="video-title"></span>
        </a>
      </div>
      <?php endwhile; ?>
    </div>

  </div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php $sponsorQuery = new WP_Query( array('posts_per_page' => '-1', 'post_type' => 'sponsor', 'orderby' => 'name') ); ?>
<?php if ( $sponsorQuery->have_posts() ) : ?>
<section class="bg-white border-top--styled pad-v--2x">
  <div class="container">

    <div class="row pad-b">
      <div class="span12">
        <h3>Our Partners</h3>
      </div>
    </div>

    <div class="row">
      <div class="span12">
        <ul class="list-inline-spacer-right list-partners">
          <?php while ($sponsorQuery->have_posts()) : $sponsorQuery->the_post(); ?>
          <li>
            <?php $sponsorImage = get_field('sponsor_logo'); ?>
            <img src="<?php echo $sponsorImage['sizes']['sponsor']; ?>" alt="ADF Sponsor">
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>

  </div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


<section class="bg-gradient pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <ul class="list-inline-middle list-inline-spacer-right">
          <li>
            <span class="icon icon-instagram icon-instagram-large">
              <svg class="icon-svg">
                <use xlink:href="#icon-instagram" />
              </svg>
            </span>
          </li>
          <li><h3 class="text-white">ADF on Instagram</h3></li>
          <li><a href="https://instagram.com/futeboltraining/" target="_blank" class="btn">Follow Us</a></li>
        </ul>
      </div>
    </div>

    <div class="row pad-t">
      <div class="span12">
        <div class="row">
          <div id="js--instagram-feed"></div>
        </div>
      </div>
    </div>

  </div>
</section>



<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span4">
        <span class="icon icon-circle icon-pennant">
          <svg class="icon-svg">
            <use xlink:href="#icon-pennant" />
          </svg>
        </span>
        <h4 class="pad-t--10 pad-b--10">Teams: Youth Academia</h4>
        <p>ADF currently has two Premier youth teams (U10 and U11 boys) who compete in Oregon's top leagues. ADF also participates in premier local, regional and national tournaments.</p>
        <a href="/teams/" class="btn">View Teams</a>
      </div>
      <div class="span4">
        <span class="icon icon-circle icon-soccer-ball">
          <svg class="icon-svg">
            <use xlink:href="#icon-soccer-ball" />
          </svg>
        </span>
        <h4 class="pad-t--10 pad-b--10">Academia Training: The Training Academia</h4>
        <p>Premier technical soccer training development program for players 6 years and older who are inspired to take their game to the next level. We focus on building the individual player. Increase your technical abilities, passing, shooting, and dribbling so you are more confident and effective on the pitch.</p>
        <a href="/about/" class="btn">Learn More</a>
      </div>
      <div class="span4">
        <span class="icon icon-circle icon-map-marker">
          <svg class="icon-svg">
            <use xlink:href="#icon-map-marker" />
          </svg>
        </span>
        <h4 class="pad-t--10 pad-b--10">Location</h4>
        <p>ADF training takes place at the following two locations: ADF’s own Futeboltraining Center and Mittleman Jewish Community Center’s Indoor Sportsplex. Games are played on grass at the beautiful PCC Sylvania Soccer Field.</p>
        <a href="/locations/" class="btn">Learn More</a>
      </div>
    </div>

  </div>
</section>

<?php get_template_part( 'library/partials/modal', 'video' ); ?>

<?php get_footer(); ?>