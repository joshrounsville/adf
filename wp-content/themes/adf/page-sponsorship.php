<?php
/*
 Template Name: Sponsors Page
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">


    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b text-white text-uppercase">ADF Sponsorship Opportunities</h1>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span8">
        <p class="h4">Thank you for your interest in supporting Academia de Futeboltraining (ADF). The purpose of ADF is to conduct its affairs as a non-profit organization and to promote high quality and educational soccer programs for all children.</p>
      </div>
    </div>

    <div class="row">
      <div class="span6">
        <p>Sponsorship opportunities have been created so that ADF can keep fees as low as possible. Keeping fees low means that children can participate no matter what their financial situation. In addition to supporting the children, sponsoring ADF gives local businesses and organizations a great opportunity to market themselves.</p>
      </div>
    </div>

  </div>
</section>


<section class="bg-gray pad-v--2x">
  <div class="container">

    <div class="row pad-b">
      <div class="span12">
        <h2>Sponsorship opportunities:</h2>
      </div>
    </div>

    <div class="row">
      <div class="span3">
        <div class="bg-white border-top--blue pad-v pad-h--20 border-radius">
          <h5 class="text-gray strong">$5,000</h5>
          <h3 class="pad-b--10">Platinum Sponsor</h3>
          <ul class="pad-b--20 small text-gray-dark list-spacer">
            <li>Match Jerseys sponsor (Chest) 2 years</li>
            <li>Large Logo Placement on homepage</li>
            <li>Large logo placement in monthly ADF communications</li>
          </ul>
          <a href="#" class="btn btn--primary">Become a Sponsor</a>
        </div>
      </div>
      <div class="span3">
        <div class="bg-white border-top--blue pad-v pad-h--20 border-radius">
          <h5 class="text-gray strong">$2,000</h5>
          <h3 class="pad-b--10">Gold Sponsor</h3>
          <ul class="pad-b--20 small text-gray-dark list-spacer">
            <li>Match Jerseys sponsor (Sleeve) 2 years</li>
            <li>Large Logo Placement on homepage</li>
            <li>Large logo placement in monthly ADF communications</li>
          </ul>
          <a href="#" class="btn btn--primary">Become a Sponsor</a>
        </div>
      </div>
      <div class="span3">
        <div class="bg-white border-top--blue pad-v pad-h--20 border-radius">
          <h5 class="text-gray strong">$1,000</h5>
          <h3 class="pad-b--10">Silver Sponsor</h3>
          <ul class="pad-b--20 small text-gray-dark list-spacer">
            <li>Training Jerseys sponsor (Chest) 2 years</li>
            <li>Medium Logo Placement on homepage</li>
            <li>Medium logo placement in monthly ADF communications</li>
          </ul>
          <a href="#" class="btn btn--primary">Become a Sponsor</a>
        </div>
      </div>
      <div class="span3">
        <div class="bg-white border-top--blue pad-v pad-h--20 border-radius">
          <h5 class="text-gray strong">$500</h5>
          <h3 class="pad-b--10">Bronze Sponsor</h3>
          <ul class="pad-b--20 small text-gray-dark list-spacer">
            <li>Training Jerseys sponsor (Sleeve) 2 years</li>
            <li>Small Logo Placement on homepage</li>
            <li>Small logo placement in monthly ADF communications</li>
          </ul>
          <a href="#" class="btn btn--primary">Become a Sponsor</a>
        </div>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <div class="row pad-b">
      <div class="span12">
        <h2>Scholarship opportunities:</h2>
      </div>
    </div>

    <div class="row">
      <div class="span8">
        <p class="h4">ADF is committed to education and to creating opportunities for all children to play soccer regardless of their financial situation. Not only should ADF players have the opportunity to be healthy and exercise, but they should also do well academically.</p>
      </div>
    </div>

    <div class="row pad-b">
      <div class="span6">
        <p>ADF players who maintain a 3.0 or better GPA will be eligible to have a portion of their fees covered by a scholarship (determined by financial need). The scholarship funds are tax deductible. Scholarship Fund donors will be listed on the ADF website.</p>
      </div>
    </div>

    <div class="row">
      <div class="span3">
        <div class="bg-white border-top--blue box-event--border pad-v pad-h--20 border-radius">
          <h5 class="text-gray strong">$2,000</h5>
          <h3 class="pad-b--10">Gold Scholarship Donor</h3>
          <p class="pad-b--20 small text-gray-dark">Covers the cost of four players who need financial assistance for one season.</p>
          <a href="#" class="btn btn--primary">Donate</a>
        </div>
      </div>
      <div class="span3">
        <div class="bg-white border-top--blue box-event--border pad-v pad-h--20 border-radius">
          <h5 class="text-gray strong">$1,500</h5>
          <h3 class="pad-b--10">Sliver Scholarship Donor</h3>
          <p class="pad-b--20 small text-gray-dark">Covers the cost of three players who need financial assistance for one season.</p>
          <a href="#" class="btn btn--primary">Donate</a>
        </div>
      </div>
      <div class="span3">
        <div class="bg-white border-top--blue box-event--border pad-v pad-h--20 border-radius">
          <h5 class="text-gray strong">$1,000</h5>
          <h3 class="pad-b--10">Bronze Scholarship Donor</h3>
          <p class="pad-b--20 small text-gray-dark">Covers the cost of two players who need financial assistance for one season.</p>
          <a href="#" class="btn btn--primary">Donate</a>
        </div>
      </div>
      <div class="span3">
        <div class="bg-white border-top--blue box-event--border pad-v pad-h--20 border-radius">
          <h5 class="text-gray strong">$500</h5>
          <h3 class="pad-b--10">General Scholarship Donor</h3>
          <p class="pad-b--20 small text-gray-dark">Covers the cost of one player who need financial assistance for one season.</p>
          <a href="#" class="btn btn--primary">Donate</a>
        </div>
      </div>

    </div>

  </div>
</section>


<?php $sponsorQuery = new WP_Query( array('posts_per_page' => '-1', 'post_type' => 'sponsor', 'orderby' => 'name') ); ?>
<?php if ( $sponsorQuery->have_posts() ) : ?>
<section class="bg-white border-top--gray pad-v--2x">
  <div class="container">

    <div class="row pad-b">
      <div class="span12">
        <h2>Our Partners</h2>
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


<?php if ( !is_user_logged_in() ) : ?>
<section class="pad-v bg-gray">
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