<?php get_header(); ?>
<section class="site-content" role="main">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class='col-sm-8' id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php get_template_part('content'); ?>
				</article>
				<aside class="col-sm-4">
					<?php get_sidebar(); ?>
				</aside>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?> 