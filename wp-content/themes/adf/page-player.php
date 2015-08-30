<?php
/*
 Template Name: Player Page
*/
?>

<?php get_header(); ?>


<?php if ( is_super_admin() ) : ?>

<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span6 offset3">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <?php
          $args = array(
            'role' => 'player'
          );

          $blogusers = get_users( $args );
        ?>

        <ul>
          <?php foreach ( $blogusers as $user ) : ?>
            <?php echo '<li><a href="/player/' . esc_html( $user->user_nicename ) . '">' . esc_html( $user->first_name ) . ' ' . esc_html( $user->last_name ) . '</a></li>'; ?>
          <?php endforeach; ?>
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