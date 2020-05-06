<section class="entry-meta">
	<span class="author vcard"><?php the_author(); ?></span>
	<span class="meta-sep"> | </span>
	<span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
	<span class="entry-cat"><?php the_category(', '); ?></span>
</section>