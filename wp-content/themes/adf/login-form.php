  <?php $template->the_errors(); ?>

  <form name="loginform" id="loginform<?php $template->the_instance(); ?>" class="form-validate" action="<?php $template->the_action_url( 'login' ); ?>" method="post">

    <h3 class="pad-b">Sign In</h3>

    <div class="form-row">
      <div class="form-item-full-width">
        <label for="user_login<?php $template->the_instance(); ?>">Username</label>
        <input type="text" name="log" id="user_login<?php $template->the_instance(); ?>" value="<?php $template->the_posted_value( 'log' ); ?>" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-item-full-width">
        <label for="user_pass<?php $template->the_instance(); ?>">Password</label>
        <input type="password" name="pwd" id="user_pass<?php $template->the_instance(); ?>" value="" required>
      </div>
    </div>

    <?php do_action( 'login_form' ); ?>

    <div class="form-row text-right">
      <div class="form-item-full-width">
        <input type="submit" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" class="btn btn--primary btn--block" value="Sign In">
        <input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'login' ); ?>" />
        <input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
        <input type="hidden" name="action" value="login" />
      </div>
    </div>

    <div class="form-row">
      <div class="form-item form-left form-radio">
        <input name="rememberme" type="checkbox" id="rememberme<?php $template->the_instance(); ?>" value="forever" />
        <label for="rememberme<?php $template->the_instance(); ?>">Remember Me</label>
      </div>
      <div class="form-item form-right text-right">
        <?php $template->the_action_links( array( 'login' => false ) ); ?>
      </div>
    </div>

  </form>
