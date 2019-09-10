<?php
/**
 * Partial template for content in self-paced courses
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="container full-page p">
		<?php the_content(); ?>
	</div>
	<div class="course-grid">

			<?php echo showSelfcourses();?>

	</div>
	</div>
			<div class="service-separator">
	</div>
	<div>
		<p>
		Are we missing something? Have an idea for a self-paced course that would be useful to you or your colleagues? To suggest a topic for a self-paced course please fill out this form.
		</p>
	</div>
	<div class="col-md-6 offset-md-3">
			<?php echo do_shortcode ( '[gravityform id="8" title="false" description="false"]' ) ?>
	</div>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
