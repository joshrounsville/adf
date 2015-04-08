<?php
/*
 Template Name: About Section - Contact
*/
?>


<?php get_header(); ?>


<section class="callout">
  <div class="container relative">


    <div class="row">
      <div class="span8">
        <h1 class="pad-b--20 text-white text-uppercase">Academia de Futebol Training</h1>
        <h4 class="pad-b text-white strong">Oregon's Premier Technical Development Academy</h4>
      </div>
    </div>

  </div>
</section>


<?php get_template_part( 'library/partials/nav', 'subpage' ); ?>


<section class="pad-v--2x">
  <div class="container">

    <div class="row">
      <div class="span6">
        <h2 class="pad-b--20">Staff Contact</h2>
        <ul class="list-staff-contact mar-b--20">
          <li><strong>Joaquim Capuia</strong>, President <a href="mailto:joaquim@adftraining.org" target="_blank">joaquim@adftraining.org</a></li>
          <li><strong>Jb Cunha</strong>, Coach <a href="mailto:jcunha@adftraining.org" target="_blank">jcunha@adftraining.org</a></li>
          <li><strong>Gracy Mosquera</strong>, Coach <a href="mailto:GM@adftraining.org" target="_blank">GM@adftraining.org</a></li>
          <li><strong>Foday Kabba</strong>, Coach <a href="mailto:foday@adftraining.org" target="_blank">foday@adftraining.org</a></li>
          <li><strong>Sorin Popovich</strong>, Goal Keeper Trainer <a href="mailto:spopovich@adftraining.org" target="_blank">spopovich@adftraining.org</a></li>
        </ul>
      </div>
      <div class="span6">
        <h2 class="pad-b--20">General Inquiries</h2>
        <p class="pad-b--30">Join us Now : Learn The Technique, Learn The Art!</p>
        <form action="#" class="form-validate">
          <div class="form-row">
            <div class="form-item form-left">
              <label for="first_name">First Name</label>
              <input type="text" name="first_name" id="first_name" required>
            </div>
           <div class="form-item form-right">
              <label for="last_name">Last Name</label>
              <input type="text" name="last_name" id="last_name" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item form-left">
              <label for="email_address">Email Address</label>
              <input type="email" name="email_address" id="email_address" required>
            </div>
           <div class="form-item form-right">
              <label for="phone_number">Phone Number</label>
              <input type="tel" name="phone_number" id="phone_number" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item form-full-width">
              <label for="message">Message</label>
              <textarea name="message" id="message" rows="6" cols="50" required></textarea>
            </div>
          </div>
          <div class="form-row text-right">
            <input type="submit" name="submit" class="btn btn--primary" id="submit" value="Send">
          </div>
        </form>
      </div>
    </div>

  </div>
</section>


<section class="bg-gray pad-v--2x bg-map">
  <div class="container">

    <div class="row on-top">
      <div class="span5">
        <div class="bg-white pad-v pad-h border-radius">
          <h3 class="pad-b--10">Office</h3>
          <p class="pad-b--10 strong"><a href="https://goo.gl/maps/fU1WY" target="_blank">5037 Ne 9th Avenue <br>Portland, Oregon 97211</a></p>
          <ul class="pad-b--10">
            <li>Phone: <a href="tel:5038759456" target="_blank"><strong>503-875-9456</strong></a></li>
            <li>Fax: <a href="tel:3039865222" target="_blank"><strong>303-986-5222</strong></a> Attn: Joaquim/Benjamin</li>
          </ul>
          <ul>
            <li>Hours:</li>
            <li>Mon - Wed: 8:00am - 4:30pm</li>
            <li>Thurs - Fri: 10:00am - 2:00pm</li>
            <li>Sat &amp; Sun: Closed</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
  <div class="overlay"></div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.532313978003!2d-122.656849!3d45.559733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5495a7197a82e90f%3A0x98d80b7c0eeae8f3!2s5037+NE+9th+Ave%2C+Portland%2C+OR+97211!5e0!3m2!1sen!2sus!4v1427003727853" width="1600" height="590" frameborder="0" style="border:0"></iframe>
</section>


<?php if ( !is_user_logged_in() ) : ?>
<section class="pad-v">
  <div class="container">

    <div class="row text-center">
      <div class="span12">
        <h3 class="h2 semi pad-b--20">Ready to take your game to the next level?</h3>
        <a href="<?php echo get_page_link(78); ?>" class="btn btn--primary">Register</a>
      </div>
    </div>

  </div>
</section>
<?php endif; ?>


<?php get_footer(); ?>