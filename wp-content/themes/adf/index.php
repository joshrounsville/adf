<?php get_header(); ?>


<section>
	<div class="container">

		<div class="row">
			<div class="span8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_title(); ?>
					<?php the_excerpt(); ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="span4">
				<?php get_sidebar(); ?>
			</div>
		</div>

	</div>
</section>


<?php get_footer(); ?>