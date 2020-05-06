<?php if ( has_post_thumbnail()) :?>
	<div class="entry-thumbnail imgwrap"><?php the_post_thumbnail(); ?></div>
<?php endif; ?>
<header class="header">
	<?php echo is_singular() ? '<h1 class="entry-title">' : '<h2 class="entry-title">'; ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
	<?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> 
	<?php //edit_post_link(); ?>
	<?php if (!is_page() && !is_search() ) get_template_part( 'content', 'meta' ); ?>
</header>
<section class="entry-content">
	<?php the_content(); ?>
	<?php edit_post_link(); ?>
</section>

<?php get_template_part('append', $post->post_name); ?>