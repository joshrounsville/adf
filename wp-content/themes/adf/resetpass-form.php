<?php $template->the_action_template_message( 'resetpass' ); ?>
<?php $template->the_errors(); ?>
<form name="resetpasswordform" id="resetpasswordform<?php $template->the_instance(); ?>" class="form-validate" action="<?php $template->the_action_url( 'resetpass' ); ?>" method="post">

  <h3 class="pad-b">Login</h3>

  <div class="form-row">
    <div class="form-item form-left">
      <label for="pass1<?php $template->the_instance(); ?>"><?php _e( 'New password' ); ?></label>
      <input autocomplete="off" name="pass1" id="pass1<?php $template->the_instance(); ?>" value="" type="password" autocomplete="off">
    </div>
    <div class="form-item form-right">
      <label for="pass2<?php $template->the_instance(); ?>"><?php _e( 'Confirm new password' ); ?></label>
      <input autocomplete="off" name="pass2" id="pass2<?php $template->the_instance(); ?>" value="" type="password" autocomplete="off">
    </div>
  </div>

  <div class="form-row">
    <div class="pass-strength" id="pass-strength-result"><?php _e( 'Strength indicator' ); ?></div>
    <p class="description indicator-hint"><?php _e( 'Hint: The password should be at least seven characters long. To make it stronger, use upper and lower case letters, numbers and symbols like ! " ? $ % ^ &amp; ).' ); ?></p>
  </div>

  <?php do_action( 'resetpassword_form' ); ?>

  <div class="form-row text-right pad-t">
    <input type="submit" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" class="btn btn--primary" value="<?php esc_attr_e( 'Reset Password' ); ?>" />
    <input type="hidden" name="key" value="<?php $template->the_posted_value( 'key' ); ?>" />
    <input type="hidden" name="login" id="user_login" value="<?php $template->the_posted_value( 'login' ); ?>" />
    <input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
    <input type="hidden" name="action" value="resetpass" />
  </div>
</form>
<?php $template->the_action_links( array( 'lostpassword' => false ) ); ?>