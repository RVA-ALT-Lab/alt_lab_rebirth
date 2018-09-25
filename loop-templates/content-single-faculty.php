<?php
/**
 * Single faculty partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="bio-title"><?php echo acf_fetch_title();?></div>
	</header><!-- .entry-header -->
	<div class="row the-faculty">
		<div class="col-md-4">
				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		</div>
		<div class="entry-content faculty-bio col-md-8">
			<?php the_content(); ?>
		</div>
	</div>
		<div class="row">
			<!--loop to show projects and or other neat things that we wish to associate with the person-->
		</div>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
