<?php
/*
 Template Name: About Section - Mission Statement
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
        <h2>Mission Statement</h2>
      </div>
    </div>

    <div class="row pad-t--20">
      <div class="span8">
        <p class="text-highlight pad-b--0">We truly believe every player has the right to reach their highest potential – first team on an academy, High School Varsity, D1 College or Pro player – it’s okay to dream, work hard and see how far you can go!</p>
      </div>
    </div>

    <div class="row pad-v--2x">
      <div class="span6">
        <div class="box-outline">
          <h3>What do we do for it?</h3>
          <ul>
            <li><strong>Youth players</strong> – Boys and Girls ages 6 to 17</li>
            <li><strong>Adult players</strong> – Men and Women 18+</li>
          </ul>
        </div>
      </div>
      <div class="span6">
        <div class="box-outline">
          <h3>What do we do?</h3>
          <p>We are a premier soccer academy that provides the highest level training so players can realize their highest potential</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="span5">
        <p class="h4 semi pad-b-s--0">We offer academy players the opportunity to play and gain experience on competitive teams in regional, national and international competitions</p>
      </div>
      <div class="span3 pad-b-s--0">
        <p>We offer training in both individual and group settings</p>
        <p>We offer a mix of development opportunities in a variety of venues – outdoor, indoor, futsal and street</p>
      </div>
      <div class="span3">
        <p>We provide sports agency representation for current and future professional players</p>
        <p>We sponsor two adult men’s teams</p>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--3x bg-red bg-red-img">
  <div class="container">

    <div class="row text-center">
      <div class="span12">
        <h3 class="h2">How do we do it?</h3>
        <p class="h3 text-white semi pad-t--20 pad-b-s--0">We develop players using our unique training curriculum that fosters creativity and individualism. We encourage consistent training – frequent touches and repetition are essential for player development.</p>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <div class="row pad-b--20 pad-b-s--0">
      <div class="span6 pad-b-s--0">
        <p class="h3 semi">We place players in training sessions based upon their skill and ability not based upon age – highly skilled younger players often train with older players and skilled older players train with adults</p>
      </div>
    </div>

    <div class="row">
      <div class="span5 offset1 pad-b-s--0">
        <p>We encourage fast-pace training to prepare players for real-game situations</p>
        <p>We have partnered with a academy in Brazil to facilitate exchanges for our academy players so they gain valuable international experience</p>
        <p>We employ only high quality, experienced trainers / coaches that are able to demonstrate skills and techniques at an expert level – our staff still play soccer at the highest amateur level so they understand the modern game</p>
      </div>
      <div class="span5">
        <p>We provide sports agency representation for current and future professional players</p>
        <p>We teach game strategy and tactics when age and skill appropriate – young trainees spend the majority of their time learning proper technique, more experienced trainees receive a blend of technical and tactical training</p>
        <p class="pad-b-s--0">We use small sided games to develop touch, technique and quick decision making</p>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--3x bg-blue bg-blue-img">
  <div class="container">

    <div class="row text-center">
      <div class="span12">
        <h3 class="h2">What value are we bringing?</h3>
        <p class="h3 text-white semi pad-t--20 pad-b-s--0"><span class="break">We provide players with exceptional training that is equivalent to what they would find in the</span> finest soccer academies in the world - players have the chance to realize their full potential.</p>
      </div>
    </div>

  </div>
</section>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span5 pad-b-s--0">
        <p class="h4 semi">We are highly creative in our approach and realize every player has their own unique style of learning – we take the time to understand what motivates every player so they work hard but have fun too</p>
      </div>
      <div class="span3 pad-b-s--0">
        <p>We provide players with the individual attention required to improve soccer skills</p>
        <p>We objectively and consistently evaluate every player’s skills and abilities to develop a customized training regime that is modified as they develop and mature</p>
      </div>
      <div class="span3">
        <p class="pad-b-s--0">We have a proven track record of developing players who have realized their full potential: College scholarships, MLS academy teams, US Youth and Men’s National teams and Professional contracts</p>
      </div>
    </div>

  </div>
</section>

<?php if ( !is_user_logged_in() ) : ?>
<section class="bg-gray pad-v">
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