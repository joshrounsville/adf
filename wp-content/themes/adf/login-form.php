  <?php $template->the_errors(); ?>
  <form name="loginform" id="loginform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'login' ); ?>" method="post">

    <h3 class="pad-b">Login</h3>

    <div class="form-row">
      <div class="form-item form-left">
        <label for="user_login<?php $template->the_instance(); ?>"><?php _e( 'Username' ); ?></label>
        <input type="text" name="log" id="user_login<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'log' ); ?>" size="20" />
      </div>
      <div class="form-item form-right">
        <label for="user_pass<?php $template->the_instance(); ?>"><?php _e( 'Password' ); ?></label>
        <input type="password" name="pwd" id="user_pass<?php $template->the_instance(); ?>" class="input" value="" size="20" />
      </div>
    </div>

    <?php do_action( 'login_form' ); ?>

    <div class="form-row">
      <div class="form-item form-full-width form-radio">
        <input name="rememberme" type="checkbox" id="rememberme<?php $template->the_instance(); ?>" value="forever" />
        <label for="rememberme<?php $template->the_instance(); ?>"><?php esc_attr_e( 'Remember Me' ); ?></label>
      </div>
    </div>

    <div class="form-row text-right pad-t">
      <input type="submit" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" class="btn btn--primary" value="<?php esc_attr_e( 'Log In' ); ?>" />
      <input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'login' ); ?>" />
      <input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
      <input type="hidden" name="action" value="login" />
      <?php $template->the_action_links( array( 'login' => false ) ); ?>
    </div>
  </form>
