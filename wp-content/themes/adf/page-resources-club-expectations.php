<?php
/*
 Template Name: Resources Section - Club Expectations
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">


    <div class="row">
      <div class="span6 span-m-8">
        <h1 class="pad-b text-white text-uppercase">Club Expectations</h1>
      </div>
    </div>

  </div>
</section>

<?php get_template_part( 'library/partials/nav', 'subpage' ); ?>

<section class="pad-v--2x">
  <div class="container">

    <div class="row pad-b">
      <div class="span12">
        <h2>Player and Parent Code of Conduct</h2>
      </div>
    </div>

    <div class="row">
      <div class="span8">

        <h3 class="pad-b--10">Player Conduct</h3>
        <p class="strong">PLAYER CODE OF CONDUCT - I HEREBY PLEDGE TO PROVIDE POSITIVE SUPPORT BY FOLLOWING THE ACADEMIA DE FUTEBOLTRAINING CODE OF CONDUCT</p>
        <p>Players are the most important people in the sport. Playing for the team, and for the team to win, is the most fundamental part of the game. But not winning-at-all costs! Fair play and respect for all others in the game is fundamentally important.</p>

        <p class="strong pad-b--10">ADF Players must abide by these simple rules.</p>
        <ul class="list-disc pad-b--2x">
          <li>Play for the fun of the game, and not to please friends, family, or coaches.</li>
          <li>Attend scheduled training, practices, and games on time and appropriately equipped.</li>
          <li>Understand that failure to meet agreed upon expectations for practices and training can negatively influence playing time.</li>
          <li>Notify coaches when unable to attend training/practice sessions or games.</li>
          <li>Give maximum effort and strive for the best possible performance during practices and games.</li>
          <li>Learn teamwork, sportsmanship, and discipline.</li>
          <li>Demonstrate respect at all times for teammates, coaches, parents, opponents, and officials.</li>
          <li>Make every effort to develop ones abilities, in terms of skill, technique, tactics and stamina; and assist teammates to develop their abilities.</li>
          <li>Set a positive example for others, particularly young players.</li>
          <li>Never use inappropriate language.</li>
          <li>Know and abide by the Laws, rules and spirit of the game.</li>
          <li>Accept success and failure, victory and defeat, equally.</li>
          <li>Resist any temptation to take banned substances or used banned techniques.</li>
          <li>Treat opponents with due respect at all times, regardless of the result of the game.</li>
          <li>Safeguard the physical fitness of opponents, avoid violence and rough play, and help injured opponents.</li>
          <li>Control temper and resist both verbal and physical retaliation.</li>
          <li>Applaud the good play of teammates and opponents.</li>
          <li>Never criticize errors of teammates and be supportive when teammates make mistakes.</li>
          <li>Never criticize or argue with the actions of officials or coaches.</li>
          <li>Understand that officials and coaches actions are not to blame for the outcome of a game; it is ultimately the actions and efforts of the players which determine the final result.</li>
          <li>Understand that failure to follow this code will result in disciplinary actions: from decreased playing time up to and including removal from the Academia for more serious or repeated violations</li>
        </ul>

        <h3 class="pad-b--10">Parents Code of Conduct</h3>
        <p class="pad-b--20">I HEREBY PLEDGE TO PROVIDE POSITIVE SUPPORT, CARE, AND ENCOURAGEMENT FOR MY CHILD BY FOLLOWING ACADEMIA DE FUTEBOLTRAINING CODE OF CONDUCT</p>
        <ul class="list-disc">
          <li>I agree to support the Academia De Futeboltraining Soccer Club and their team in requiring players to abide by the Players Code of Conduct.</li>
          <li>I will not use or possess alcohol, illegal drugs or weapons while attending ADF matches.</li>
          <li>I will not under any circumstance shout abusively at my child or any other child.</li>
          <li>I will not under any circumstance shout abusively or threaten any physical abuse to any coach or referee.</li>
          <li>I will not dispute any call made by the referee; and I understand that the Academia De Futebotraining may sanction any spectator who verbally abuses or assaults a referee.</li>
          <li>I will not coach my child or other children from the sideline during the game.</li>
          <li>I will only make positive comments to the players and it is understood that coaches and not parents shall provide instructional input during games.</li>
          <li>I understand that the game is for the children not for the adults.</li>
          <li>I understand that obscenities are strictly prohibited and that the referee shall instruct any spectator guilty of using obscenity to leave the venue.</li>
          <li>I understand that ADF parents are responsible for the behavior of all of their team’s guests/spectators and that they shall act in accordance with the Code of Conduct.</li>
          <li>I understand that a spectators are to take the side of the field opposite the teams; spectators will remain at least 3 feet behind the touchline; if, during the match, the spectators behavior is out of line then the referee will ask the coaches to speak to the spectators; if the behavior continues, it is within the discretion of the referee to ask the offending spectator(s) to leave the venue; and the referee shall abandon the match if the spectators become unruly and out of control.</li>
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