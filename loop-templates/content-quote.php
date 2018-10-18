<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header single-quote-speaker">
		<h1>Quote from <?php echo get_the_quote_speaker();?></h1>
		<div class="entry-meta">
				<div class="single-quote-title">
					<?php echo get_the_quote_speaker_title();?>						
				</div>
				<div class="single-quote-dept">
					<?php echo get_the_quote_speaker_dept();?>
				</div>
			</div><!-- .entry-meta -->
	</header><!-- .entry-header -->


	<div class="entry-content single-quote-content">
		<blockquote>
			<?php echo get_the_quote();?>
		</blockquote>
		

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
