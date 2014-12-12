<?php
/*
 Template Name: Player Page
*/
?>


<?php get_header(); ?>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span6 offset3">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <?php
          global $wpdb;
          $query = "SELECT ID from $wpdb->users";
          $author_ids = $wpdb->get_results($query);
          $users = array();
          foreach($author_ids as $author) {
            $curauth = get_userdata($author->ID);
            $role = $curauth->roles[0];
            if ( $role == 'player') {
              $firstName = $curauth->first_name;
              $lastName = $curauth->last_name;
              $link = "/player/" . $curauth->user_nicename . "/";
              $name = $firstName . ' ' . $lastName;
              $users[$link] = $name;
            }

          }
          asort($users);
        ?>
        <ol>
          <?php
            foreach($users as $link => $name) :
          ?>
          <li>
            <a href="<?php echo $link; ?>" title="<?php echo $name; ?>"><?php echo $name; ?></a>
          </li>
        <?php endforeach; ?>
        </ol>

      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>