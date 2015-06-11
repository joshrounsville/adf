<?php $template->the_errors(); ?>

  <form id="your-profile<?php $template->the_instance(); ?>" class="form-validate-profile" action="<?php $template->the_action_url( 'profile' ); ?>" method="post">
    <?php wp_nonce_field( 'update-user_' . $current_user->ID ); ?>
    <p class="hide">
      <input type="hidden" name="from" value="profile" />
      <input type="hidden" name="checkuser_id" value="<?php echo $current_user->ID; ?>" />
    </p>
    <?php if ( has_action( 'personal_options' ) ) : ?>

    <h3><?php _e( 'Personal Options' ); ?></h3>

    <table class="form-table">
    <?php do_action( 'personal_options', $profileuser ); ?>
    </table>

    <?php endif; ?>

    <?php do_action( 'profile_personal_options', $profileuser ); ?>


    <h3 class="pad-b">Login Info</h3>

    <div class="form-row">
      <div class="form-item form-full-width">
        <label>Username</label>
        <h3><?php echo esc_attr( $profileuser->user_login ); ?></h3>
        <small>Your Username Cannot be Changed</small>
      </div>
    </div>

    <?php
      $show_password_fields = apply_filters( 'show_password_fields', true, $profileuser );
      if ( $show_password_fields ) :
    ?>
    <div class="form-row password-row">
      <div class="form-item form-left">
        <label for="pass1<?php $template->the_instance(); ?>">New Password</label>
        <input type="password" name="pass1" id="pass1<?php $template->the_instance(); ?>" size="16" value="" autocomplete="off">
        <small>If you would like to change the password type a new one. Otherwise leave this blank.</small>
      </div>
      <div class="form-item form-right">
        <label for="pass2<?php $template->the_instance(); ?>">Re-Type New Password</label>
        <input type="password" name="pass2" id="pass2<?php $template->the_instance(); ?>" size="16" value="" autocomplete="off">
        <small>Type your new password again.</small>
      </div>
    </div>
    <div class="form-row">
      <p class="pass-strength" id="pass-strength-result"><?php _e( 'Strength indicator', 'theme-my-login' ); ?></p>
      <p class="description indicator-hint"><?php _e( 'Hint: The password should be at least seven characters long. To make it stronger, use upper and lower case letters, numbers and symbols like ! " ? $ % ^ &amp; ).' ); ?></p>
    </div>

    <?php endif; ?>

    <h3 class="pad-v">Player Info</h3>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="first_name<?php $template->the_instance(); ?>">First Name</label>
        <input type="text" name="first_name" id="first_name<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->first_name ); ?>" required>
      </div>
      <div class="form-item form-right">
        <label for="last_name<?php $template->the_instance(); ?>">Last Name</label>
        <input type="text" name="last_name" id="last_name<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->last_name ); ?>" required>
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="current_age<?php $template->the_instance(); ?>">Current Age</label>
        <input type="text" name="current_age" id="current_age<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->current_age ); ?>" required>
      </div>
      <div class="form-item form-right">
        <label for="current_club<?php $template->the_instance(); ?>">Current Club</label>
        <input type="text" name="current_club" id="current_club<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->current_club ); ?>" required>
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="email<?php $template->the_instance(); ?>">E-mail</label>
        <input type="text" name="email" id="email<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->user_email ); ?>" required>
      </div>
      <div class="form-item form-right">
        <label for="phone_number<?php $template->the_instance(); ?>">Phone Number</label>
        <input type="tel" name="phone_number" id="phone_number<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->phone_number ); ?>" required>
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-full-width">
        <label for="goals_short_term<?php $template->the_instance(); ?>">Soccer Goals (Short Term)</label>
        <textarea name="goals_short_term" id="goals_short_term<?php $template->the_instance(); ?>" required><?php echo esc_attr( $profileuser->goals_short_term ); ?></textarea>
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-full-width">
        <label for="goals_long_term<?php $template->the_instance(); ?>">Soccer Goals (Long Term)</label>
        <textarea name="goals_long_term" id="goals_long_term<?php $template->the_instance(); ?>" required><?php echo esc_attr( $profileuser->goals_long_term ); ?></textarea>
      </div>
    </div>

    <h3 class="pad-t pad-b">Parent/Guardian Info</h3>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="guardian_first_name<?php $template->the_instance(); ?>">First Name</label>
        <input type="text" name="guardian_first_name" id="guardian_first_name<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->guardian_first_name ); ?>" required>
      </div>
      <div class="form-item form-right">
        <label for="guardian_last_name<?php $template->the_instance(); ?>">Last Name</label>
        <input type="text" name="guardian_last_name" id="guardian_last_name<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->guardian_last_name ); ?>" required>
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="guardian_email<?php $template->the_instance(); ?>">Email Address</label>
        <input type="email" name="guardian_email" id="guardian_email<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->guardian_email ); ?>" required>
      </div>
      <div class="form-item form-right">
        <label for="guardian_phone_number<?php $template->the_instance(); ?>">Phone Number</label>
        <input type="tel" name="guardian_phone_number" id="guardian_phone_number<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->guardian_phone_number ); ?>" required>
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-full-width">
        <label for="hear_about_us<?php $template->the_instance(); ?>">How did you hear about us?</label>
        <textarea name="hear_about_us" id="hear_about_us<?php $template->the_instance(); ?>" required><?php echo esc_attr( $profileuser->hear_about_us ); ?></textarea>
      </div>
    </div>


    <h3 class="pad-t pad-b">Program</h3>

    <div class="form-row">
      <div class="form-item form-full-width form-radio">
        <ul class="list-inline-spacer-right">
          <?php $programSelect = esc_attr( $profileuser->program ); ?>
          <li>
            <input type="radio" name="program" value="mens-team" id="program1" <?php if ( $programSelect == 'mens-team') : ?>checked<?php endif; ?>>
            <label for="program1">Men's Team</label>
          </li>
          <li>
            <input type="radio" name="program" value="youth-club" id="program2" <?php if ( $programSelect == 'youth-club') : ?>checked<?php endif; ?>>
            <label for="program2">Youth Club</label>
          </li>
          <li>
            <input type="radio" name="program" value="training-academy" id="program3" <?php if ( $programSelect == 'training-academy') : ?>checked<?php endif; ?>>
            <label for="program3">Training Academy</label>
          </li>
        </ul>
      </div>
    </div>

    <div class="form-row text-right pad-t">
      <input type="hidden" name="action" value="profile" />
      <input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
      <input type="hidden" name="user_id" id="user_id" value="<?php echo esc_attr( $current_user->ID ); ?>" />
      <input type="submit" class="btn btn--primary" value="<?php esc_attr_e( 'Update Profile' ); ?>" name="submit" />
    </div>

    <?php do_action( 'show_user_profile', $profileuser ); ?>
  </form>
