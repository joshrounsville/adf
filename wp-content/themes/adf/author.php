<?php get_header(); ?>

<?php if ( is_super_admin() ) : ?>

<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span6 offset3">

        <?php
          $curauth = $wp_query->get_queried_object();
          $authid = $curauth->ID;
          $program = $curauth->program;

          if ( $program == 'mens-team' ) {
            $program = 'Men\'s Team';
          } elseif ( $program == 'youth-club' ) {
            $program = 'Youth Club';
          } else {
            $program = 'Training Academy';
          }
        ?>

        <ul>
          <li class="pad-b--10"><h4>Player Info</h4></li>
          <li><strong>Name:</strong> <?php echo $curauth->user_firstname . " " . $curauth->user_lastname; ?></li>
          <li><strong>User Name:</strong> <?php echo $curauth->user_login; ?></li>
          <li><strong>Date of Birth:</strong> <?php echo $curauth->date_of_birth; ?></li>
          <li><strong>Current Club:</strong> <?php echo $curauth->current_club; ?></li>
          <li><strong>Email:</strong> <?php echo $curauth->user_email; ?></li>
          <li><strong>Phone Number:</strong> <?php echo $curauth->phone_number; ?></li>
          <li><strong>Short Term Goals:</strong> <?php echo $curauth->goals_short_term; ?></li>
          <li><strong>Long Term Goals:</strong> <?php echo $curauth->goals_long_term; ?></li>
          <li><strong>Program:</strong> <?php echo $program; ?></li>
          <li class="pad-t pad-b--10"><h4>Guardian Info</h4></li>
          <li><strong>Name:</strong> <?php echo $curauth->guardian_first_name . " " . $curauth->guardian_last_name; ?></li>
          <li><strong>Email:</strong> <?php echo $curauth->guardian_email; ?></li>
          <li><strong>Phone Number:</strong> <?php echo $curauth->guardian_phone_number; ?></li>
          <li><strong>How did you hear about us?:</strong> <?php echo $curauth->hear_about_us; ?></li>
          <li class="pad-t pad-b--10"><h4>Additional Info</h4></li>
          <li><strong>Favorite Player:</strong> <?php echo $curauth->favorite_player; ?></li>
          <li><strong>Position:</strong> <?php echo $curauth->position; ?></li>
          <li><strong>Place of Birth:</strong> <?php echo $curauth->place_of_birth; ?></li>
          <li><strong>Instagram Account:</strong> <?php echo $curauth->instagram_account; ?></li>
          <li><strong>Facebook Account:</strong> <?php echo $curauth->facebook_account; ?></li>
          <li><strong>Twitter Account:</strong> <?php echo $curauth->twitter_account; ?></li>
        </ul>

      </div>
    </div>

  </div>
</section>

<?php else : ?>

<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span6 offset3">
        <h2 class="pad-b">Whoops...</h2>
        <p>We can't seem to find the page you're looking for. Maybe our <a href="/">homepage</a> would be a good place to get started.</p>
        <p>Please <a href="/contact/">Contact Us</a> if you think an error has been made.</p>
      </div>
    </div>

  </div>
</section>

<?php endif; ?>

<?php get_footer(); ?>