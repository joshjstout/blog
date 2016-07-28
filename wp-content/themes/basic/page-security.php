<?php get_header(); ?>
	<main id="content">

		<?php while (have_posts()) : the_post(); ?>

			<article class="page" id="pageid-<?php the_ID(); ?>">

				<div class="entry clearfix">
					<!-- Gets posts with categories that match the page title.-->
					<?php query_posts('category_name=' . get_the_title() . '&post_status=publish,future'); ?>
					<?php if (have_posts()) : while (have_posts()) :
					the_post(); ?>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p><?php the_content(); ?>
						<?php endwhile; else:
						endif; ?>
				</div>

			</article>

			<?php
		endwhile; ?>

	</main> <!-- #content -->
<?php // get_sidebar(); ?>
<?php get_footer(); ?>