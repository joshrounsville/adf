<?php $template->the_errors(); ?>

  <form name="registerform" id="registerform" action="<?php $template->the_action_url( 'register' ); ?>" method="post">

    <h3 class="pad-b">Login Info</h3>

    <div class="form-row">
      <div class="form-item form-full-width">
        <label for="user_login">Username</label>
        <input type="text" name="user_login" id="user_login">
      </div>
    </div>

    <div class="form-row form-override">
      <?php do_action( 'register_form' ); ?>
      <p id="reg_passmail<?php $template->the_instance(); ?>"><?php echo apply_filters( 'tml_register_passmail_template_message', __( 'A password will be e-mailed to you.' ) ); ?></p>
    </div>

    <h3 class="pad-t pad-b">Player Info</h3>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name">
      </div>
      <div class="form-item form-right">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name">
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="current_age">Current Age</label>
        <input type="text" name="current_age" id="current_age">
      </div>
      <div class="form-item form-right">
        <label for="current_club">Current Club</label>
        <input type="text" name="current_club" id="current_club">
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="user_email">Email Address</label>
        <input type="email" name="user_email" id="user_email">
      </div>
      <div class="form-item form-right">
        <label for="phone_number">Phone Number</label>
        <input type="tel" name="phone_number" id="phone_number">
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-full-width">
        <label for="goals_short_term">Soccer Goals (Short Term)</label>
        <textarea name="goals_short_term" id="goals_short_term"></textarea>
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-full-width">
        <label for="goals_long_term">Soccer Goals (Long Term)</label>
        <textarea name="goals_long_term" id="goals_long_term"></textarea>
      </div>
    </div>


    <h3 class="pad-t pad-b">Parent/Guardian Info</h3>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="guardian_first_name">First Name</label>
        <input type="text" name="guardian_first_name" id="guardian_first_name">
      </div>
      <div class="form-item form-right">
        <label for="guardian_last_name">Last Name</label>
        <input type="text" name="guardian_last_name" id="guardian_last_name">
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="guardian_email">Email Address</label>
        <input type="email" name="guardian_email" id="guardian_email">
      </div>
      <div class="form-item form-right">
        <label for="guardian_phone_number">Phone Number</label>
        <input type="tel" name="guardian_phone_number" id="guardian_phone_number">
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-full-width">
        <label for="hear_about_us">How did you hear about us?</label>
        <textarea name="hear_about_us" id="hear_about_us" class="input"></textarea>
      </div>
    </div>

    <h3 class="pad-t pad-b">Select Program</h3>

    <div class="form-row">
      <div class="form-item form-full-width form-radio">
        <ul class="list-inline-spacer">
          <li>
            <input type="radio" name="program" value="mens-team" id="program1">
            <label for="program1">Men's Team</label>
          </li>
          <li>
            <input type="radio" name="program" value="youth-club" id="program2">
            <label for="program2">Youth Club</label>
          </li>
          <li>
            <input type="radio" name="program" value="training-academy" id="program3">
            <label for="program3">Training Academy</label>
          </li>
        </ul>
      </div>
    </div>

    <div class="form-row text-right pad-t">
      <input type="submit" name="wp-submit" class="btn btn--primary" id="wp-submit" value="<?php esc_attr_e( 'Register' ); ?>" />
      <input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'register' ); ?>" />
      <input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
      <input type="hidden" name="action" value="register" />
    </div>
  </form>