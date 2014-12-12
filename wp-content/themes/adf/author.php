<?php get_header(); ?>

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
          <li><strong>Current Age:</strong> <?php echo $curauth->current_age; ?></li>
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
        </ul>

      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>