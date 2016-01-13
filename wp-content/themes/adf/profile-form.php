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


    <h3 class="pad-b">Additional Details</h3>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="favorite_player<?php $template->the_instance(); ?>">Favorite Player</label>
        <input type="text" name="favorite_player" id="favorite_player<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->favorite_player ); ?>">
      </div>
      <div class="form-item form-right">
        <?php $positionSelect = esc_attr( $profileuser->position ); ?>
        <label for="position<?php $template->the_instance(); ?>">Position</label>
        <span class="select-wrap">
          <select name="position" id="position<?php $template->the_instance(); ?>" class="styled-select">
            <option value="Goal Keeper"<?php if ( $positionSelect == 'Goal Keeper') : ?> selected<?php endif; ?>>
              Goal Keeper
            </option>
            <option value="Defense"<?php if ( $positionSelect == 'Defense') : ?> selected<?php endif; ?>>
              Defense
            </option>
            <option value="Midfield"<?php if ( $positionSelect == 'Midfield') : ?> selected<?php endif; ?>>
              Midfield
            </option>
            <option value="Forward"<?php if ( $positionSelect == 'Forward') : ?> selected<?php endif; ?>>
              Forward
            </option>
            <option value="Striker"<?php if ( $positionSelect == 'Striker') : ?> selected<?php endif; ?>>
              Striker
            </option>
          </select>
        </span>
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-full-width">
        <label for="place_of_birth<?php $template->the_instance(); ?>">Place of Birth</label>
        <input type="text" name="place_of_birth" id="place_of_birth<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->place_of_birth ); ?>">
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-full-width">
        <label for="instagram_account<?php $template->the_instance(); ?>">Instgram Account</label>
        <input type="text" name="instagram_account" id="instagram_account<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->instagram_account ); ?>" placeholder="https://instagram.com/futeboltraining/">
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-full-width">
        <label for="facebook_account<?php $template->the_instance(); ?>">Facebook Account</label>
        <input type="text" name="facebook_account" id="facebook_account<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->facebook_account ); ?>" placeholder="https://www.facebook.com/pages/Academia-De-Futeboltraining/">
      </div>
    </div>

    <div class="form-row pad-b">
      <div class="form-item form-full-width">
        <label for="twitter_account<?php $template->the_instance(); ?>">Twitter Account</label>
        <input type="text" name="twitter_account" id="twitter_account<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->twitter_account ); ?>" placeholder="https://twitter.com/Futeboltraining">
      </div>
    </div>

    <hr>

    <h3 class="pad-v">Login Info</h3>

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
    <div class="form-row">
      <div class="form-item form-full-width">

        <table class="tml-form-table">
          <tr id="password" class="user-pass1-wrap">
            <td>
              <label for="pass1<?php $template->the_instance(); ?>"><?php _e( 'New Password', 'theme-my-login' ); ?></label>
              <input class="hidden" value=" " />
              <button type="button" class="btn button button-secondary wp-generate-pw hide-if-no-js"><?php _e( 'Generate Password', 'theme-my-login' ); ?></button>
              <div class="wp-pwd hide-if-js">
                <span class="password-input-wrapper">
                  <input type="password" name="pass1<?php $template->the_instance(); ?>" id="pass1<?php $template->the_instance(); ?>" class="regular-text" value="" autocomplete="off" data-pw="<?php echo esc_attr( wp_generate_password( 24 ) ); ?>" aria-describedby="pass-strength-result" />
                </span>
                <div style="display:none" id="pass-strength-result" class="pad-t--20 pad-b--20 h3" aria-live="polite"></div>
                  <button type="button" class="btn button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php esc_attr_e( 'Hide password', 'theme-my-login' ); ?>">
                    <span class="dashicons dashicons-hidden"></span>
                    <span class="text"><?php _e( 'Hide', 'theme-my-login' ); ?></span>
                  </button>
                  <button type="button" class="btn btn-black button button-secondary wp-cancel-pw hide-if-no-js" data-toggle="0" aria-label="<?php esc_attr_e( 'Cancel password change', 'theme-my-login' ); ?>">
                    <span class="text"><?php _e( 'Cancel', 'theme-my-login' ); ?></span>
                  </button>
              </div>
            </td>
          </tr>
          <tr class="user-pass2-wrap hide-if-js">
            <th scope="row">
              <label for="pass2<?php $template->the_instance(); ?>"><?php _e( 'Repeat New Password', 'theme-my-login' ); ?></label>
            </th>
            <td>
              <input name="pass2<?php $template->the_instance(); ?>" type="password" id="pass2<?php $template->the_instance(); ?>" class="regular-text" value="" autocomplete="off" />
              <p class="description"><?php _e( 'Type your new password again.', 'theme-my-login' ); ?></p>
            </td>
          </tr>
          <tr class="pw-weak hide">
            <th><?php _e( 'Confirm Password', 'theme-my-login' ); ?></th>
            <td>
              <label>
                <input type="checkbox" name="pw_weak" class="pw-checkbox" />
                <?php _e( 'Confirm use of weak password', 'theme-my-login' ); ?>
              </label>
            </td>
          </tr>
        </table>

      </div>
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
        <label for="nickname<?php $template->the_instance(); ?>">Nickname</label>
        <input type="text" name="nickname" id="nickname<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->nickname ); ?>" required>
      </div>
      <div class="form-item form-right">
        <label for="date_of_birth<?php $template->the_instance(); ?>">Date of Birth (10/15/1995)</label>
        <input type="text" name="date_of_birth" id="date_of_birth<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->date_of_birth ); ?>" required>
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
      <div class="form-item form-left">
        <label for="current_club<?php $template->the_instance(); ?>">Current Club</label>
        <input type="text" name="current_club" id="current_club<?php $template->the_instance(); ?>" value="<?php echo esc_attr( $profileuser->current_club ); ?>" required>
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

    <div class="form-row text-right pad-t">
      <input type="hidden" name="action" value="profile" />
      <input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
      <input type="hidden" name="user_id" id="user_id" value="<?php echo esc_attr( $current_user->ID ); ?>" />
      <input type="submit" class="btn btn--primary" value="<?php esc_attr_e( 'Update Profile' ); ?>" name="submit" />
    </div>

    <?php do_action( 'show_user_profile', $profileuser ); ?>
  </form>