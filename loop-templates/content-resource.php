<?php
/**
 * Partial template for content in resource
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<div class="entry-content service-page">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/altlab_vert_slash.svg" alt="ALT Lab logo" class="services-logo">
				<h2 class="services-services">services:</h2>
			</div>
			<div class="col-md-8">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title-service">', '</h1>' ); ?>					
				</header><!-- .entry-header -->
				<div>
					<?php the_content(); ?>
				</div>
			</div>
			<div class="service-separator">
			</div>
			<div class="course-grid">
				<?php echo showResource();?>
			</div>
			<div class="service-separator">
			</div>
			<div>
				<p>
				Are we missing something? Have an idea for a resource page that would be useful to you or your colleagues? To suggest a topic for a faculty resources page please fill out this form.
				</p>
			</div>
			<div class="col-md-6 offset-md-3">
					<?php echo do_shortcode ( '[gravityform id="8" title="false" description="false"]' ) ?>
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

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
