<?php get_header(); ?>


<section>
	<div class="container">

		<div class="row">
			<div class="span8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_title(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>

				<a href="#" class="btn">Learn More</a>
				<a href="#" class="btn btn--secondary">Sign In</a>
				<a href="#" class="btn btn--yellow">button!</a>

				<svg class="icon-svg">
          <use xlink:href="#icon-globe" />
        </svg>
        <svg class="icon-svg">
          <use xlink:href="#icon-map-marker" />
        </svg>
        <svg class="icon-svg">
          <use xlink:href="#icon-pennant" />
        </svg>
        <svg class="icon-svg">
          <use xlink:href="#icon-soccer-ball" />
        </svg>
        <svg class="icon-svg">
          <use xlink:href="#icon-soccer-pitch" />
        </svg>
        <svg class="icon-svg">
          <use xlink:href="#icon-trophy" />
        </svg>
			</div>
			<div class="span4">
				<?php get_sidebar(); ?>
			</div>
		</div>

	</div>
</section>


<?php get_footer(); ?>