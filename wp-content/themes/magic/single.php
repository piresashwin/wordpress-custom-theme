<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2>
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>
	<p>
		<?php the_content(); ?>
	</p>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>