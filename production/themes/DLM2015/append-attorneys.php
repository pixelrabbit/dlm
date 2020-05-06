<?php 
$args = array( 'post_type' => 'profiles');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="profile-detail row">
	<a name="<?php echo $post->post_name; ?>"></a>
	<div class="col-sm-3">
		<div class="imgwrap"><?php the_post_thumbnail('profile'); ?></div>
	</div>
	<div class="col-sm-9">
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
		<?php edit_post_link(); ?>
	</div>
</div>
<?php endwhile;?>