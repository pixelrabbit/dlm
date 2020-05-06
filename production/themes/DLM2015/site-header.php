<header class="site-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1><?php the_field('banner_title'); ?></h1>
				<h2><?php the_field('banner_subtitle'); ?></h2>
			</div>
		</div>
	</div>
</header>
<?php if(get_field('banner_slogan')): ?>
<div class="site-slogan">
	<div class="container">
		<div class="row">
			<h2><?php the_field('banner_slogan'); ?></h2>
		</div>
	</div>
</div>
<?php endif; ?>