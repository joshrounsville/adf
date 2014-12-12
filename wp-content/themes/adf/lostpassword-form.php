
  <?php $template->the_errors(); ?>
  <form name="lostpasswordform" id="lostpasswordform" action="<?php $template->the_action_url( 'lostpassword' ); ?>" method="post">
    <?php $template->the_action_template_message( 'lostpassword' ); ?>
    <h3 class="pad-b">Lost Password</h3>
    <div class="form-row">
      <div class="form-item form-full-width">
        <label for="user_login"><?php _e( 'Username or E-mail:' ); ?></label>
        <input type="text" name="user_login" id="user_login" class="input" value="<?php $template->the_posted_value( 'user_login' ); ?>" size="20" />
      </div>
    </div>

    <?php do_action( 'lostpassword_form' ); ?>

    <div class="form-row text-right pad-t">
      <input type="submit" name="wp-submit" id="wp-submit" class="btn btn--primary" value="<?php esc_attr_e( 'Get New Password' ); ?>" />
      <input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'lostpassword' ); ?>" />
      <input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
      <input type="hidden" name="action" value="lostpassword" />
      <?php $template->the_action_links( array( 'lostpassword' => false ) ); ?>
    </div>
  </form>
