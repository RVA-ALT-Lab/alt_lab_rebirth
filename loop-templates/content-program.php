<?php
/**
 * Partial template for content in program
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

			<?php echo showProgram();?>

	</div>
			<div class="service-separator">
	</div>
	<div>
		<p>
		Are we missing something? Have an idea for a facilitated course that would be useful to you or your colleagues? To suggest a topic for a facilitated course please fill out this form.
		</p>
	</div>
	<div class="col-md-6 offset-md-3">
			<?php echo do_shortcode ( '[gravityform id="8" title="false" description="false"]' ) ?>
	</div>
	<div>
		<!--<ul><strong><em>Coming Soon!!</em></strong>
			<li>Evaluating Online@VCU – An overview for faculty of the OSCQR rubric and the VCU version of the rubric</li>
			<li>Leading Online@VCU – Course to train leaders in guiding their departments to transitioning online</li>
		</ul>-->

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
