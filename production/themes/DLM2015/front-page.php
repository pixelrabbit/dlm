<?php get_header(); ?>

<div class="site-profiles">
	<div class="container">
		<div class="row">
			<?php 
			$args = array( 'post_type' => 'profiles', 'posts_per_page' => 3 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="col-sm-4">
				<div class="profile">
					<a href="/attorneys#<?php echo $post->post_name; ?>" class="imgwrap"><?php the_post_thumbnail('profile'); ?></a>
					<h2><a href="/attorneys#<?php echo $post->post_name; ?>"><?php the_title(); ?></a></h2>
					<p><?php the_field('profile_summary'); ?></p>
					<?php edit_post_link(); ?>
				</div>
			</div>
			<?php endwhile;?>
		</div>
	</div>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="site-content">
	<div class="container">
		<div class="row">
			<?php while ( have_rows('columns') ) : the_row(); ?>
			<div class="col-sm-6 col"> 
				<h2><?php the_sub_field('column_title'); ?></h2>
				<?php the_sub_field('column_content'); ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>

<div class="site-services">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<h1><?php the_field('services_heading'); ?></h1>
			</div>
			<div class="col-sm-9">
				<div class="row">
					<?php 
					$args = array( 'post_type' => 'services' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="col-sm-6">
						<div class="area">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Learn More</a></p>
							<?php edit_post_link(); ?>
						</div>
					</div>
					<?php endwhile;?>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="site-blog">
	<div class="container">
		<div class="row">
			<?php 
			$args = array( 'post_type' => 'post','posts_per_page'=>1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="col-sm-4">
				<a href="<?php the_permalink(); ?>" class="imgwrap"><?php the_post_thumbnail('profile'); ?></a>
			</div>
			<div class="col-sm-8">
				<?php 
				$posts_page_id = get_option( 'page_for_posts');
				$posts_page = get_page( $posts_page_id);
				$posts_page_title = $posts_page->post_title;
				$posts_page_url = get_page_uri($posts_page_id  );
				?>
					<h4><a href="<?php echo $posts_page_url; ?>">DLM Blog</a></h4>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php get_template_part( 'content', 'meta' ); ?>
					<p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read More</a></p>
					<?php edit_post_link(); ?>
			</div>
			<?php endwhile;?>
		</div>
	</div>
</div>

<?php get_footer(); ?>