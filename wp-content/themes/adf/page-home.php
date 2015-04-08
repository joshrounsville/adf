<?php
/*
 Template Name: Home Page
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">

   <!--  <div class="carousel">
      <span class="icon icon-arrow-left-line">
        <svg class="icon-svg">
          <use xlink:href="#icon-arrow-left-line" />
        </svg>
      </span>
      <span class="icon icon-arrow-right-line">
        <svg class="icon-svg">
          <use xlink:href="#icon-arrow-right-line" />
        </svg>
      </span>
    </div> -->

    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b text-white text-uppercase">Learn the Technique. <br>Learn the Art.</h1>
        <p class="text-highlight pad-b">We are Portland’s Premier Technical Soccer Training Development Program. Academia de Futeboltraining is designed for players 8-21 years of age, who are inspired to take their game to the next level.</p>
        <a href="#" class="btn btn--primary">Learn More</a>
      </div>
    </div>

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


<section class="bg-gray pad-v">
  <div class="container">

    <div class="row">
      <div class="span12">
        <ul class="list-inline-middle list-inline-spacer-right">
          <li><h3>Upcoming Events</h3></li>
          <li><a href="#" class="btn">See All Events</a></li>
        </ul>
      </div>
    </div>

    <div class="row pad-t">
      <div class="span3">
        <a href="#" class="box-event">
          <time datetime="2014-11-02">November 2, 2014</time>
          <h3>Event 1: A Short Title</h3>
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
      <div class="span3">
        <a href="#" class="box-event">
          <time datetime="2014-11-02">November 2, 2014</time>
          <h3>Event 2: This One Has a Longer Title</h3>
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
      <div class="span3">
        <a href="#" class="box-event">
          <time datetime="2014-11-02">November 2, 2014</time>
          <h3>Event 3: A Short Title</h3>
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
      <div class="span3">
        <a href="#" class="box-event">
          <time datetime="2014-11-02">November 2, 2014</time>
          <h3>Event 4: A Short Title</h3>
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
    </div>

  </div>
</section>


<?php $query = new WP_Query( array('posts_per_page' => 3, 'post_type' => 'video') ); ?>
<?php if ( $query->have_posts() ) : ?>
<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <ul class="list-inline-middle list-inline-spacer-right">
          <li><h3>Latest Videos</h3></li>
          <li><a href="/video/" class="btn">See All Videos</a></li>
        </ul>
      </div>
    </div>

    <div class="row pad-t">
      <?php while ($query->have_posts()) : $query->the_post(); ?>
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
      <?php endwhile; ?>
    </div>

  </div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


<section class="bg-gray pad-v">
  <div class="container">

    <div class="row">
      <div class="span12">
        <ul class="list-inline-spacer-right">
          <li><h4>Our Partners:</h4></li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/library/img/lids.png" alt="placeholder">
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/library/img/butler.png" alt="placeholder">
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/library/img/efac.png" alt="placeholder">
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/library/img/physical-therapy.png" alt="placeholder">
          </li>
        </ul>
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
        <a href="#" class="btn">View Teams</a>
      </div>
      <div class="span4">
        <span class="icon icon-circle icon-soccer-ball">
          <svg class="icon-svg">
            <use xlink:href="#icon-soccer-ball" />
          </svg>
        </span>
        <h4 class="pad-t--10 pad-b--10">Academia Training: The Training Academia</h4>
        <p>Premier technical soccer training development program for players 6 years and older who are inspired to take their game to the next level. We focus on building the individual player. Increase your technical abilities, passing, shooting, and dribbling so you are more confident and effective on the pitch.</p>
        <a href="#" class="btn">Learn More</a>
      </div>
      <div class="span4">
        <span class="icon icon-circle icon-map-marker">
          <svg class="icon-svg">
            <use xlink:href="#icon-map-marker" />
          </svg>
        </span>
        <h4 class="pad-t--10 pad-b--10">Location</h4>
        <p>ADF training takes place at the following two locations: ADF’s own Futeboltraining Center and Mittleman Jewish Community Center’s Indoor Sportsplex. Games are played on grass at the beautiful PCC Sylvania Soccer Field.</p>
        <a href="#" class="btn">Learn More</a>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>

<?php get_template_part( 'library/partials/modal', 'video' ); ?>