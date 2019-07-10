<?php
/**
 * Single resource partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<!-- <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header> -->

	<div class="row">
			<div class="course-card">
				<div class="card-body">
					<img class="course-img img-fluid" <?php echo get_the_post_thumbnail( $post->ID, 'small' );?>
					<?php the_title( '<h2 class="faculty-name">', '</h2>' );?>
					<div class="faculty-bio-text">
						<?php echo acf_fetch_resource_description();?>
					</div>
					<div class="workshop-request self-course-url">
						<a href="<?php echo acf_fetch_resource_url();?>" class="btn btn-alt">Learn more about '<?php the_title();?>'</a>
					</div>
				</div>
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