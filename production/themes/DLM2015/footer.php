			<div class="site-footer">
				<div class="container">
					<div class="row">
						<?php if(get_field('phone','options')) echo "<p class='telephone'>".get_field('phone','options')."</p>" ?>
						<?php if(get_field('contact_email','options')) echo "<p class='contact'><a href='mailto:".get_field('contact_email','options')."'>".get_field('contact_email','options')."</a></p>"?>
						<?php if(get_field('address','options')) echo "<address><a href='//maps.google.com/?q=".get_field('address','options')."' target='_blank'>".get_field('address','options')."</a></address>" ?>
						
						<cite><?php echo sprintf('%1$s %2$s %3$s. All Rights Reserved.', '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?></cite>
					</div>
				</div>
			</div>
		</div>
<?php wp_footer(); ?>
</body>
</html>