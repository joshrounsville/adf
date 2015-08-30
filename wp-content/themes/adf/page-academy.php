<?php
/*
 Template Name: Academy
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


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h2>Mission Statement</h2>
      </div>
    </div>

    <div class="row pad-t--20">
      <div class="span8">
        <p class="text-highlight pad-b--0">We truly believe every player has the right to reach their highest potential – first team on an academy, High School Varsity, D1 College or Pro player – it’s okay to dream, work hard and see how far you can go!</p>
      </div>
    </div>

  </div>
</section>


<section class="bg-gray pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span6">
        <div class="bg-white border-top--blue pad-v pad-h--20 border-radius">
          <h5 class="text-gray strong">U8 - U23</h5>
          <h3 class="pad-b--10">Join our Cadete, Juvenile or Juniors Program!</h3>
          <p class="pad-b--20">Our youth Academy teams begin to compete at the age of 7. Players start at the Cadete level and then progress through Juvenile category, Juniors category and eventually play on the Men’s team.</p>
          <a href="<?php echo get_page_link(78); ?>" class="btn btn--primary">Register</a>
        </div>
      </div>
      <div class="span6">
         <div class="bg-white border-top--blue pad-v pad-h--20 border-radius">
          <h5 class="text-gray strong">Goalkeepers U11 - U23</h5>
          <h3 class="pad-b--10">Train with the area's best keepers!</h3>
          <p class="pad-b--20">The Academy's keepers all  train with the region's finest goal keeper coach, Sorin Popovici. Sorin is a former first division professional goalkeeper from Europe</p>
          <a href="<?php echo get_page_link(78); ?>" class="btn btn--primary">Register</a>
        </div>
      </div>
    </div>

  </div>
</section>


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