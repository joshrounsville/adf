<?php
/*
 Template Name: Locations Page
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">


    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b text-white text-uppercase">ADF Training Locations</h1>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x overflow-hidden">
  <div class="container">

    <div class="row pad-b--2x">
      <div class="span4">
        <h3 class="pad-t pad-b--10">Sylvania Field</h3>
        <p>ADF's primary field for team practices and home matches is located on the picturesque and centrally located PCC Sylvania Campus. Sylvania Field is a very well maintained natural grass surface that measures 120 yards x 65 yards. Ample parking is close by and the park-like setting make Sylvania Field popular among by players and spectators. ADF also uses this location for camps and clinics.</p>
      </div>
      <div class="span8">
        <div class="box-map-outer">
          <div class="box-map box-map-right js--maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.5567453091126!2d-122.73100449999998!3d45.438435899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950cba4737b81d%3A0x809dbdc81d5a9f79!2s12000+SW+49th+Ave%2C+Portland%2C+OR+97219!5e0!3m2!1sen!2sus!4v1434437281129" width="800" height="600" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="row pad-b--2x">
      <div class="span8">
        <div class="box-map-outer">
          <div class="box-map box-map-left js--maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.648436070161!2d-122.70440579999999!3d45.47688549999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950b08204f0109%3A0x63704f6b8b9ec63!2s6651+SW+Capitol+Hwy%2C+Portland%2C+OR+97219!5e0!3m2!1sen!2sus!4v1434437164425" width="800" height="600" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
      </div>
      <div class="span4">
        <h3 class="pad-t pad-b--10">Mittleman Jewish Community Center (MJCC)</h3>
        <p>ADF's academy training facility is housed within the Mittleman Jewish Community Center’s Sportsplex aka "The Bubble." The Bubble's indoor field is ideal for year round training because it is heated in winter and air conditioned in summer. Smaller group academy sessions are also held on The Bubble's smaller secondary training field. Spectators appreciate the ample seating and excellent visibility that this facility provides.</p>
      </div>
    </div>

    <div class="row">
      <div class="span4">
        <h3 class="pad-t pad-b--10">Futeboltraining Center</h3>
        <p>FTC is the headquarters of ADF and the original location where the training program was founded. Today FTC is used for individual private sessions, small sided training, goal keeper training, and striker training. FTC has an outdoor natural grass field that is approximately 90 yards X 25 yards with lighting for evening training sessions. FTC also has a small indoor area which is ideal for individual private and small group training sessions. Many of ADF's original players who are now playing D1 College or professionally were introduced to soccer training at FTC.</p>
      </div>
      <div class="span8">
        <div class="box-map-outer">
          <div class="box-map box-map-right js--maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.130190393872!2d-122.76123299999999!3d45.487322999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950bf6d82027f1%3A0xbb11154b928c7ebf!2s4535+SW+Laurelwood+Ave%2C+Portland%2C+OR+97225!5e0!3m2!1sen!2sus!4v1434437246287" width="800" height="600" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


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