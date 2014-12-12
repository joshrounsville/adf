<?php get_header(); ?>


<section>
	<div class="container">

		<div class="row">
			<div class="span12">
			<?php if (is_category()) { ?>
				<h1>Posts Categorized: <?php single_cat_title(); ?></h1>
			<?php } elseif (is_tag()) { ?>
				<h1>Posts Tagged: <?php single_tag_title(); ?></h1>
			<?php } elseif (is_author()) {
				global $post;
				$author_id = $post->post_author;
			?>
				<h1>Posts By: <?php the_author_meta('display_name', $author_id); ?></h1>
			<?php } elseif (is_day()) { ?>
				<h1>Daily Archives: <?php the_time('l, F j, Y'); ?></h1>
			<?php } elseif (is_month()) { ?>
				<h1>Monthly Archives: <?php the_time('F Y'); ?></h1>
			<?php } elseif (is_year()) { ?>
				<h1>Yearly Archives: <?php the_time('Y'); ?></h1>
			<?php } ?>
			</div>
		</div>

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