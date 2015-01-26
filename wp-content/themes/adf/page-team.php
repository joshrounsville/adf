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
        <h2>First Team</h2>
      </div>
    </div>

    <div class="row pad-t--20">
      <div class="span8">
        <p class="text-highlight">International Portland Select (ADF IPS) is a premier amateur men’s soccer team. ADF IPS is based in Portland, Oregon and competes predominantly on the west coast.</p>
        <p>Established  in 1994, the team is as talented as it is diverse. The roster represents players from over seven different nationalities. This contributes to an energizing and entertaining style of play. Players originate from Brazil, Angola, Guatemala, England, USA, Congo, Colombian, Saudi Arabia, Sierra Leone, Libera, Canada, Ethiopia and Mexico. ADF IPS is where many former pros choose to play after they retire because the team's level of play is so advanced. Some notable players that have played with ADF on their way to the top: Rubio Rubin, Danny Mwanga, Dustin Corea, Ashkaninho Tirony, Brent Richards, Alex Nimo, Kalif Alhassan, James Marcelin and numerous outstanding college players. ADF IPS's objective every year is to qualify for the US Open which affords the team the opportunity to play against MLS and USl Pro Teams.</p>
        <p class="pad-b--0">The ADF IPS team is a valuable development resource for the Academy. When talented high school age players are ready, they train and compete with the ADF IPS team. This provides the young players an invaluable opportunity to prepare for the next level of competition be it collegiate or professional.</p>
      </div>
    </div>

  </div>
</section>


<section class="bg-gray pad-v--2x overflow-hidden">
  <div class="container">

    <div class="row text-center pad-b">
      <div class="span12">

        <nav class="nav-carousel">
          <ul class="list-inline-middle list-inline-spacer">
            <li class="pad-r"><h3>Meet the Players</h3></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter active" data-target="all">All Players</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="goalkeeper">Goal Keeper</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="defense">Defense</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="midfielder">Midfield</a></li>
            <li><a href="#" class="btn btn--secondary btn--outline-gray btn--slider-filter" data-target="forward">Forward</a></li>
          </ul>
        </nav>

      </div>
    </div>

    <div class="row">
      <div class="span12">

        <div class="loader">Loading...</div>

        <div class="slider slider-team">

          <div class="item" data-position="goalkeeper">
            <a href="#" class="box-carousel box-player-short">
              <span class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
              </span>
              <span class="bottom">
                <h5>James Litton</h5>
                <span class="view-item">
                  <span class="icon icon-arrow-right-line">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-arrow-right-line" />
                    </svg>
                  </span>
                </span>
              </span>
              <span class="player-short-overview">
                <h3>ADF Grey Team</h3>
                <h6>Goal Keeper</h6>
              </span>
            </a>
          </div>

          <div class="item" data-position="defense">
            <a href="#" class="box-carousel box-player-short">
              <span class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-2.jpg" alt="Player Name">
              </span>
              <span class="bottom">
                <h5>Anthony Charles</h5>
                <span class="view-item">
                  <span class="icon icon-arrow-right-line">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-arrow-right-line" />
                    </svg>
                  </span>
                </span>
              </span>
              <span class="player-short-overview">
                <h3>ADF Grey Team</h3>
                <h6>Defense</h6>
              </span>
            </a>
          </div>

          <div class="item" data-position="defense">
            <a href="#" class="box-carousel box-player-short">
              <span class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-3.jpg" alt="Player Name">
              </span>
              <span class="bottom">
                <h5>Benjamin Folger-Vent</h5>
                <span class="view-item">
                  <span class="icon icon-arrow-right-line">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-arrow-right-line" />
                    </svg>
                  </span>
                </span>
              </span>
              <span class="player-short-overview">
                <h3>ADF Grey Team</h3>
                <h6>Defense</h6>
              </span>
            </a>
          </div>

          <div class="item" data-position="forward">
            <a href="#" class="box-carousel box-player-short">
              <span class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
              </span>
              <span class="bottom">
                <h5>James Litton</h5>
                <span class="view-item">
                  <span class="icon icon-arrow-right-line">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-arrow-right-line" />
                    </svg>
                  </span>
                </span>
              </span>
              <span class="player-short-overview">
                <h3>ADF Grey Team</h3>
                <h6>Forward</h6>
              </span>
            </a>
          </div>

          <div class="item" data-position="forward">
            <a href="#" class="box-carousel box-player-short">
              <span class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
              </span>
              <span class="bottom">
                <h5>James Litton</h5>
                <span class="view-item">
                  <span class="icon icon-arrow-right-line">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-arrow-right-line" />
                    </svg>
                  </span>
                </span>
              </span>
              <span class="player-short-overview">
                <h3>ADF Grey Team</h3>
                <h6>Forward</h6>
              </span>
            </a>
          </div>

          <div class="item"  data-position="forward">
            <a href="#" class="box-carousel box-player-short">
              <span class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-2.jpg" alt="Player Name">
              </span>
              <span class="bottom">
                <h5>Anthony Charles</h5>
                <span class="view-item">
                  <span class="icon icon-arrow-right-line">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-arrow-right-line" />
                    </svg>
                  </span>
                </span>
              </span>
              <span class="player-short-overview">
                <h3>ADF Grey Team</h3>
                <h6>Forward</h6>
              </span>
            </a>
          </div>

          <div class="item" data-position="forward">
            <a href="#" class="box-carousel box-player-short">
              <span class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-3.jpg" alt="Player Name">
              </span>
              <span class="bottom">
                <h5>Benjamin Folger-Vent</h5>
                <span class="view-item">
                  <span class="icon icon-arrow-right-line">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-arrow-right-line" />
                    </svg>
                  </span>
                </span>
              </span>
              <span class="player-short-overview">
                <h3>ADF Grey Team</h3>
                <h6>Forward</h6>
              </span>
            </a>
          </div>

          <div class="item" data-position="forward">
            <a href="#" class="box-carousel box-player-short">
              <span class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
              </span>
              <span class="bottom">
                <h5>James Litton</h5>
                <span class="view-item">
                  <span class="icon icon-arrow-right-line">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-arrow-right-line" />
                    </svg>
                  </span>
                </span>
              </span>
              <span class="player-short-overview">
                <h3>ADF Grey Team</h3>
                <h6>Forward</h6>
              </span>
            </a>
          </div>

          <div class="item" data-position="midfielder">
            <a href="#" class="box-carousel box-player-short">
              <span class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
              </span>
              <span class="bottom">
                <h5>James Litton</h5>
                <span class="view-item">
                  <span class="icon icon-arrow-right-line">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-arrow-right-line" />
                    </svg>
                  </span>
                </span>
              </span>
              <span class="player-short-overview">
                <h3>ADF Grey Team</h3>
                <h6>Midfielder</h6>
              </span>
            </a>
          </div>

          <div class="item" data-position="midfielder">
            <a href="#" class="box-carousel box-player-short">
              <span class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
              </span>
              <span class="bottom">
                <h5>James Litton</h5>
                <span class="view-item">
                  <span class="icon icon-arrow-right-line">
                    <svg class="icon-svg">
                      <use xlink:href="#icon-arrow-right-line" />
                    </svg>
                  </span>
                </span>
              </span>
              <span class="player-short-overview">
                <h3>ADF Grey Team</h3>
                <h6>Midfielder</h6>
              </span>
            </a>
          </div>

        </div>

        <!-- <div class="row">
          <div class="span6 offset3">

            <div class="player-box-full">
              <div class="content-wrap-upper">
                <div class="content-wrap-inner">
                  <h3>Anthony Charles</h3>
                  <h6>Forward, Age 12</h6>
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
                    <li class="social twitter">
                      <a href="#" target="_blank">
                        <span class="icon icon-twitter">
                          <svg class="icon-svg">
                            <use xlink:href="#icon-twitter" />
                          </svg>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1-wide.jpg" alt="Player Name">
                </div>
              </div>
              <div class="content-wrap">
                <ul class="list-detail">
                  <li>
                    <h6>Favorite Player</h6>
                    <p>David Beckham</p>
                  </li>
                  <li>
                    <h6>Favorite Team</h6>
                    <p>Real Salt Lake</p>
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

            <a href="#" class="next-player">
              Next Player
              <span class="icon icon-arrow-right-line">
                <svg class="icon-svg">
                  <use xlink:href="#icon-arrow-right-line" />
                </svg>
              </span>
            </a>
            <a href="#" class="previous-player">
              <span class="icon icon-arrow-left-line">
                <svg class="icon-svg">
                  <use xlink:href="#icon-arrow-left-line" />
                </svg>
              </span>
              Previous Player
            </a>
          </div>
        </div> -->

      </div>
    </div>

  </div>
</section>


 <div class="player-collection hide">

  <div class="item" data-position="goalkeeper">
    <a href="#" class="box-carousel box-player-short">
      <span class="img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
      </span>
      <span class="bottom">
        <h5>James Litton</h5>
        <span class="view-item">
          <span class="icon icon-arrow-right-line">
            <svg class="icon-svg">
              <use xlink:href="#icon-arrow-right-line" />
            </svg>
          </span>
        </span>
      </span>
      <span class="player-short-overview">
        <h3>ADF Grey Team</h3>
        <h6>Goal Keeper</h6>
      </span>
    </a>
  </div>

  <div class="item" data-position="defense">
    <a href="#" class="box-carousel box-player-short">
      <span class="img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-2.jpg" alt="Player Name">
      </span>
      <span class="bottom">
        <h5>Anthony Charles</h5>
        <span class="view-item">
          <span class="icon icon-arrow-right-line">
            <svg class="icon-svg">
              <use xlink:href="#icon-arrow-right-line" />
            </svg>
          </span>
        </span>
      </span>
      <span class="player-short-overview">
        <h3>ADF Grey Team</h3>
        <h6>Defense</h6>
      </span>
    </a>
  </div>

  <div class="item" data-position="defense">
    <a href="#" class="box-carousel box-player-short">
      <span class="img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-3.jpg" alt="Player Name">
      </span>
      <span class="bottom">
        <h5>Benjamin Folger-Vent</h5>
        <span class="view-item">
          <span class="icon icon-arrow-right-line">
            <svg class="icon-svg">
              <use xlink:href="#icon-arrow-right-line" />
            </svg>
          </span>
        </span>
      </span>
      <span class="player-short-overview">
        <h3>ADF Grey Team</h3>
        <h6>Defense</h6>
      </span>
    </a>
  </div>

  <div class="item" data-position="forward">
    <a href="#" class="box-carousel box-player-short">
      <span class="img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
      </span>
      <span class="bottom">
        <h5>James Litton</h5>
        <span class="view-item">
          <span class="icon icon-arrow-right-line">
            <svg class="icon-svg">
              <use xlink:href="#icon-arrow-right-line" />
            </svg>
          </span>
        </span>
      </span>
      <span class="player-short-overview">
        <h3>ADF Grey Team</h3>
        <h6>Forward</h6>
      </span>
    </a>
  </div>

  <div class="item" data-position="forward">
    <a href="#" class="box-carousel box-player-short">
      <span class="img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
      </span>
      <span class="bottom">
        <h5>James Litton</h5>
        <span class="view-item">
          <span class="icon icon-arrow-right-line">
            <svg class="icon-svg">
              <use xlink:href="#icon-arrow-right-line" />
            </svg>
          </span>
        </span>
      </span>
      <span class="player-short-overview">
        <h3>ADF Grey Team</h3>
        <h6>Forward</h6>
      </span>
    </a>
  </div>

  <div class="item"  data-position="forward">
    <a href="#" class="box-carousel box-player-short">
      <span class="img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-2.jpg" alt="Player Name">
      </span>
      <span class="bottom">
        <h5>Anthony Charles</h5>
        <span class="view-item">
          <span class="icon icon-arrow-right-line">
            <svg class="icon-svg">
              <use xlink:href="#icon-arrow-right-line" />
            </svg>
          </span>
        </span>
      </span>
      <span class="player-short-overview">
        <h3>ADF Grey Team</h3>
        <h6>Forward</h6>
      </span>
    </a>
  </div>

  <div class="item" data-position="forward">
    <a href="#" class="box-carousel box-player-short">
      <span class="img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-3.jpg" alt="Player Name">
      </span>
      <span class="bottom">
        <h5>Benjamin Folger-Vent</h5>
        <span class="view-item">
          <span class="icon icon-arrow-right-line">
            <svg class="icon-svg">
              <use xlink:href="#icon-arrow-right-line" />
            </svg>
          </span>
        </span>
      </span>
      <span class="player-short-overview">
        <h3>ADF Grey Team</h3>
        <h6>Forward</h6>
      </span>
    </a>
  </div>

  <div class="item" data-position="forward">
    <a href="#" class="box-carousel box-player-short">
      <span class="img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
      </span>
      <span class="bottom">
        <h5>James Litton</h5>
        <span class="view-item">
          <span class="icon icon-arrow-right-line">
            <svg class="icon-svg">
              <use xlink:href="#icon-arrow-right-line" />
            </svg>
          </span>
        </span>
      </span>
      <span class="player-short-overview">
        <h3>ADF Grey Team</h3>
        <h6>Forward</h6>
      </span>
    </a>
  </div>

  <div class="item" data-position="midfielder">
    <a href="#" class="box-carousel box-player-short">
      <span class="img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
      </span>
      <span class="bottom">
        <h5>James Litton</h5>
        <span class="view-item">
          <span class="icon icon-arrow-right-line">
            <svg class="icon-svg">
              <use xlink:href="#icon-arrow-right-line" />
            </svg>
          </span>
        </span>
      </span>
      <span class="player-short-overview">
        <h3>ADF Grey Team</h3>
        <h6>Midfielder</h6>
      </span>
    </a>
  </div>

  <div class="item" data-position="midfielder">
    <a href="#" class="box-carousel box-player-short">
      <span class="img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/library/img/players/player-1.jpg" alt="Player Name">
      </span>
      <span class="bottom">
        <h5>James Litton</h5>
        <span class="view-item">
          <span class="icon icon-arrow-right-line">
            <svg class="icon-svg">
              <use xlink:href="#icon-arrow-right-line" />
            </svg>
          </span>
        </span>
      </span>
      <span class="player-short-overview">
        <h3>ADF Grey Team</h3>
        <h6>Midfielder</h6>
      </span>
    </a>
  </div>

</div>

<?php get_footer(); ?>