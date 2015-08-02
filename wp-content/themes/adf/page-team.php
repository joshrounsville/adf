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


<?php get_template_part( 'library/partials/nav', 'subpage' ); ?>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h2>U10</h2>
      </div>
    </div>

    <div class="row pad-t--20">
      <div class="span8">
        <p class="text-highlight">International Portland Select (ADF IPS) is a premier amateur men’s soccer team. ADF IPS is based in Portland, Oregon and competes predominantly on the west coast.</p>
        <p>Established  in 1994, the team is as talented as it is diverse. The roster represents players from over seven different nationalities. This contributes to an energizing and entertaining style of play. Players originate from Brazil, Angola, Guatemala, England, USA, Congo, Colombian, Saudi Arabia, Sierra Leone, Libera, Canada, Ethiopia and Mexico. ADF IPS is where many former pros choose to play after they retire because the team's level of play is so advanced. Some notable players that have played with ADF on their way to the top: Rubio Rubin, Danny Mwanga, Dustin Corea, Ashkaninho Tirony, Brent Richards, Alex Nimo, Kalif Alhassan, James Marcelin and numerous outstanding college players. ADF IPS's objective every year is to qualify for the US Open which affords the team the opportunity to play against MLS and USl Pro Teams.</p>
        <p class="pad-b--0">The ADF IPS team is a valuable development resource for the Academy. When talented high school age players are ready, they train and compete with the ADF IPS team. This provides the young players an invaluable opportunity to prepare for the next level of competition be it collegiate or professional.</p>
      </div>
    </div>

    <div class="row pad-t">
      <div class="span12">
        <?php
          global $post;
          $page_id = get_the_ID();
          $page_name = get_the_title();

          $args = array(
            'blog_id' => $GLOBALS['blog_id'],
            'role' => 'Player',
            'meta_key' => 'current_club_2',
            'meta_value' => $page_id,
            'orderby' => 'login',
            'order' => 'ASC'
          );
        ?>

        <ul>
        <?php
          $blogusers = get_users( $args );
          foreach ( $blogusers as $user ) {
            echo '<li>' . esc_html( $user->first_name ) . ' ' . esc_html( $page_name ) . '</li>';
          }
        ?>
        </ul>

      </div>
    </div>

  </div>
</section>


<section class="bg-gray pad-v--2x overflow-hidden">
  <div class="container">

    <div class="row text-center pad-b">
      <div class="span12">

        <nav class="nav-carousel" data-state="multi">
          <ul class="list-inline-middle list-inline-spacer">
            <li class="pad-r"><h3>Meet the Players</h3></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter active" data-target="all">All Players</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="goalkeeper">Goal Keeper</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="defense">Defense</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="midfielder">Midfield</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="forward">Forward</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="striker">Striker</a></li>
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

            <div class="item" data-position="goalkeeper">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/johnathan-hernandez.jpg" alt="Johnathan Hernandez">
                </div>
                <div class="bottom">
                  <h5>Johnathan Hernandez</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Goal Keeper</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="defense">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/edison-vasquez.jpg" alt="Edison Vasquez">
                </div>
                <div class="bottom">
                  <h5>Edison Vasquez</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Defense</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="defense">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/porter-malkiel.jpg" alt="Porter Malkiel">
                </div>
                <div class="bottom">
                  <h5>Porter Malkiel</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Defense</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="defense">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/dylan-cagann.jpg" alt="Dylan Cagann">
                </div>
                <div class="bottom">
                  <h5>Dylan Cagann</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Defense</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="defense">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/diego-monroy.jpg" alt="Diego Monroy">
                </div>
                <div class="bottom">
                  <h5>Diego Monroy</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Defense</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="defense">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/christian-vasquez.jpg" alt="Christian Vasquez">
                </div>
                <div class="bottom">
                  <h5>Christian Vasquez</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Defense</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="midfielder">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/luke-armstrong.jpg" alt="Luke Armstrong">
                </div>
                <div class="bottom">
                  <h5>Luke Armstrong</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Midfield</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="midfielder">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/jacob-real.jpg" alt="Jacob Real">
                </div>
                <div class="bottom">
                  <h5>Jacob Real</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Midfield</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="midfielder">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/yair-gomez.jpg" alt="Yair Gomez">
                </div>
                <div class="bottom">
                  <h5>Yair Gomez</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Midfield</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="midfielder">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/julian-bishop.jpg" alt="Julian Bishop">
                </div>
                <div class="bottom">
                  <h5>Julian Bishop</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Midfield</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="midfielder">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/wyatt-neigut.jpg" alt="Wyatt Neigut">
                </div>
                <div class="bottom">
                  <h5>Wyatt Neigut</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Midfield</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="forward">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/evan-hebert.jpg" alt="Evan Hebert">
                </div>
                <div class="bottom">
                  <h5>Evan Hebert</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Forward</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="striker">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/adolfo-enriquez.jpg" alt="Adolfo Enriquez">
                </div>
                <div class="bottom">
                  <h5>Adolfo Enriquez</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Striker</h6>
                </div>
              </a>
            </div>

            <div class="item" data-position="striker">
              <a href="#" class="box-carousel box-carousel-tall">
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/boston-billups.jpg" alt="Boston Billups">
                </div>
                <div class="bottom">
                  <h5>Boston Billups</h5>
                  <span class="view-item">
                    <span class="icon icon-arrow-right-line">
                      <svg class="icon-svg">
                        <use xlink:href="#icon-arrow-right-line" />
                      </svg>
                    </span>
                  </span>
                </div>
                <div class="carousel-tall-overview">
                  <h3>U10</h3>
                  <h6>Striker</h6>
                </div>
              </a>
            </div>

          </div>


          <div class="slider slider-single">

            <div class="item" data-position="goalkeeper">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Johnathan Hernandez</h3>
                    <h6>GoalKeeper, Age U10</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/johnathan-hernandez.jpg" alt="Johnathan Hernandez">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Ronaldo</p>
                    </li>
                    <li>
                      <h6>Number</h6>
                      <p>1</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>GoalKeeper</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="defense">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Edison Vasquez</h3>
                    <h6>Defense, Age U10</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/edison-vasquez.jpg" alt="Edison Vasquez">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Ronaldo</p>
                    </li>
                    <li>
                      <h6>Number</h6>
                      <p>7</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Defense</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="defense">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Porter Malkiel</h3>
                    <h6>Defense, Age U10</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/porter-malkiel.jpg" alt="Porter Malkiel">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Messi</p>
                    </li>
                    <li>
                      <h6>Number</h6>
                      <p>11</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Defense</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="defense">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Dylan Cagann</h3>
                    <h6>Defense, Age U10</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/dylan-cagann.jpg" alt="Dylan Cagann">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Reus</p>
                    </li>
                    <li>
                      <h6>Number</h6>
                      <p>15</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Defense</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="defense">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Diego Monroy</h3>
                    <h6>Defense, Age U10</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/diego-monroy.jpg" alt="Diego Monroy">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Ronaldo</p>
                    </li>
                    <li>
                      <h6>Number</h6>
                      <p>2</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Defense</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="defense">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Christian Vasquez</h3>
                    <h6>Defense, Age U9</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/christian-vasquez.jpg" alt="Christian Vasquez">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Ronaldo</p>
                    </li>
                    <li>
                      <h6>Number</h6>
                      <p>14</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Defense</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="midfielder">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Luke Armstrong</h3>
                    <h6>Midfield, Age U9</h6>
                    <ul class="list-inline">
                      <li class="social facebook">
                        <a href="#" target="_blank">
                          <span class="icon icon-facebook">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-facebook" />
                            </svg>
                          </span>
                        </a>
                      </li>
                      <li class="social instagram">
                        <a href="#" target="_blank">
                          <span class="icon icon-instagram">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-instagram" />
                            </svg>
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/luke-armstrong.jpg" alt="Luke Armstrong">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Ronaldo</p>
                    </li>
                    <li>
                      <h6>Number</h6>
                      <p>16</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Midfield</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="midfielder">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Jacob Real</h3>
                    <h6>Midfield, Age U10</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/jacob-real.jpg" alt="Jacob Real">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Messi</p>
                    </li>
                    <li>
                      <h6>Number</h6>
                      <p>5</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Midfield</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="midfielder">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Yair Gomez</h3>
                    <h6>Midfield, Age U10</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/yair-gomez.jpg" alt="Yair Gomez">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Messi</p>
                    </li>
                    <li>
                      <h6>Number</h6>
                      <p>3</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Midfield</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="midfielder">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Julian Bishop</h3>
                    <h6>Midfield, Age U9</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/julian-bishop.jpg" alt="Julian Bishop">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Number</h6>
                      <p>13</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Midfield</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="midfielder">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Wyatt Neigut</h3>
                    <h6>Midfield, Age U10</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/wyatt-neigut.jpg" alt="Wyatt Neigut">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Number</h6>
                      <p>17</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Midfield</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="forward">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Evan Hebert</h3>
                    <h6>Forward, Age U10</h6>
                    <ul class="list-inline">
                      <li class="social instagram">
                        <a href="#" target="_blank">
                          <span class="icon icon-instagram">
                            <svg class="icon-svg">
                              <use xlink:href="#icon-instagram" />
                            </svg>
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/evan-hebert.jpg" alt="Evan Hebert">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Sanchez</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Forward</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="striker">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Adolfo Enriquez</h3>
                    <h6>Striker, Age U10</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/adolfo-enriquez.jpg" alt="Adolfo Enriquez">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Ronaldo</p>
                    </li>
                    <li>
                      <h6>Number</h6>
                      <p>9</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Striker</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="item" data-position="striker">
              <div class="carousel-box-full">
                <div class="content-wrap-upper">
                  <div class="content-wrap-inner">
                    <h3>Boston Billups</h3>
                    <h6>Striker, Age U10</h6>
                  </div>
                  <div class="img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/boston-billups.jpg" alt="Boston Billups">
                  </div>
                </div>
                <div class="content-wrap">
                  <ul class="list-detail">
                    <li>
                      <h6>Favorite Player</h6>
                      <p>Messi</p>
                    </li>
                    <li>
                      <h6>Number</h6>
                      <p>10</p>
                    </li>
                    <li>
                      <h6>Position</h6>
                      <p>Striker</p>
                    </li>
                    <li>
                      <h6>Current Club</h6>
                      <p>Academia de Futebol Training</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>
