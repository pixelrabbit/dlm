<?php get_header(); ?>
<div class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content' ); ?>
				<?php //comments_template(); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
			</div>
			<div class="col-sm-4">
				<?php get_sidebar(); ?>
			</div> 
		</div>
	</div> 
</div>

<?php get_footer(); ?>