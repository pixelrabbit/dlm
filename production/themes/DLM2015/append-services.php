<div class="row">
<?php 
$args = array( 'post_type' => 'services');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="col-sm-6">
		<div class="service-detail">
			<a name="<?php echo $post->post_name; ?>"></a>
			<?php if(has_post_thumbnail()): ?>
				<div class="imgwrap"><?php the_post_thumbnail('profile'); ?></div>
			<?php endif; ?>
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
			<?php edit_post_link(); ?>
		</div>
	</div>
<?php endwhile;?>
</div>