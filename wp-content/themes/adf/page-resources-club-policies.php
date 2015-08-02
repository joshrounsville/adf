<?php
/*
 Template Name: Resources Section - Club Policies
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">


    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b text-white text-uppercase">Club Policies</h1>
      </div>
    </div>

  </div>
</section>

<?php get_template_part( 'library/partials/nav', 'subpage' ); ?>

<section class="pad-v--2x">
  <div class="container">

    <div class="row pad-b">
      <div class="span2">
        <h2>FAQ</h2>
      </div>
    </div>

    <div class="row">
      <div class="span8">
        <ul class="list-faq">
          <li>
            <h3>What are the costs involved if I'm offered a position on an ADF team?</h3>
            <p>ADF believes that money should not be a barrier for any player to participate. Generous donations from our sponsors allow costs to be kept as low as possible. Financial aid is also available.</p>
            <ul>
              <li>U9-U10 (12 month team program): $780 ($65 per month)</li>
              <li>U11-U12 (12 month team program): $975 ($81.25 per month)</li>
            </ul>
          </li>
          <li>
            <h3>What does the team player fee include?</h3>
            <p>Uniform Kit (Home and Away), Training 2-3 times per week with a team coach, Fall and Spring leagues, State Cup, futsal training, summer tournament, coaching, registration and administrative expenses.</p>
          </li>
          <li>
            <h3>What is the cost of the uniform kit?</h3>
            <p>There is NO additional fee for the uniform kit (Home and Away).  It is included in the team player fee.</p>
          </li>
          <li>
            <h3>What does the team player fee not include?</h3>
            <p>Additional tournaments and travel expenses.</p>
          </li>
          <li>
            <h3>When are tryouts (trials)?</h3>
            <p>ADF tryouts (trials) for the 2015/16 season will be held in May (U9 – U12 Boys) shortly after State Cup competition is completed. No trials are planned for U13 and older for the 2015 / 2016 season.</p>
          </li>
          <li>
            <h3>Where are the tryout (trial) locations?</h3>
            <p>Tryout locations will vary depending on weather, age group and current season. Details will be posted on the ADF website prior to the trials.</p>
          </li>
          <li>
            <h3>What if I can't make the tryouts (trials)?</h3>
            <p>Players that miss the official trials will need to contact ADF and arrange time to be evaluated by a staff coach (additional fee may apply).</p>
          </li>
          <li>
            <h3>Does ADF have teams for boys and girls?</h3>
            <p>ADF is developing plans to field girls' teams but does not have them at this time. However, ADF's training academy strongly encourages both girls and boys to participate and improve their skills.</p>
          </li>
          <li>
            <h3>What league(s) does ADF compete in?</h3>
            <p>ADF competes in two of the top premier leagues in the state. Oregon Youth Soccer Association (OYSA) and Oregon Premier League (OPL).</p>
          </li>
          <li>
            <h3>What are ADF's coaching staff qualifications?</h3>
            <p>ADF coaches have all played professional soccer internationally. Most ADF coaches still play in semi-pro or top amateur leagues. In addition to having outstanding playing experience, every ADF coach is trained on ADF's proprietary player development curriculum and must meet a minimum educational standard. All ADF coaches have gone through a background check. ADF hosts clinics and training sessions throughout the year that involve current professionals and international guest coaches who work with the ADF team and academy players. ADF follows the guidelines of USYSA and is committed to a safe and positive experience for every player.</p>
          </li>
          <li>
            <h3>What opportunities does ADF provide for international training?</h3>
            <p>ADF has relationships established with several top clubs in Brazil and Europe. These relationships allow for player exchanges and training trips which provide US players the opportunity to experience soccer (football) at the highest level. International training can range from several weeks to longer term boarding / residency programs. Contact the ADF front office for further details.</p>
          </li>
          <li>
            <h3>Does ADF provide training for players who are not on an ADF team?</h3>
            <p>Yes. ADF offers training year round for boys and girls age 7 and older. ADF's academia has training programs for both individuals (private) and groups. ADF's development curriculum encompasses training programs for beginners all the way to professional players. Players who train in the ADF academia get to work with the same experienced ADF staff coaches who train ADF's premier teams.</p>
          </li>
        </ul>
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