<?php
/**
 * Partial template for content in register
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
</article>
</div>
</div>
</div>

<div class="entry-content register-page">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/altlab_vert_slash.svg" alt="ALT Lab logo" class="services-logo">
				<h2 class="services-services">register:</h2>
			</div>
			<div class="col-md-8">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title-register">', '</h1>' ); ?>					
				</header><!-- .entry-header -->

				<?php echo acf_fetch_call_out_one_text() ?>
				
				
			</div>
		</div>
			<div class="service-separator">
		</div>
	</div>
	<div class="container-fluid service-callout-two">
		<div class="row service-thumb">			
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2><?php echo acf_fetch_call_out_two_title() ?></h2>
						<?php echo acf_fetch_call_out_two_text() ?>
					</div>					
				</div>				
			</div>
			<?php if (!acf_fetch_special_media()) :?>
				<img src="<?php echo the_post_thumbnail_url('large');?>" class="img-fluid img-right">
			<?php else:?>
				<div class="special-media">
			   		<?php echo acf_fetch_special_media();?>	
				</div>
			<?php endif;?>

		</div>	
	</div>
	<div class="container">
		<div class="service-separator">
		</div>
	</div>	

	<div class="container-fluid yellow extra-info">
		<div class="container white">			
			<div class="row">
				<div class="col-md-3 related">
					<!-- <h2>Related</h3>
					<a href="http://192.168.33.10/wordpress/altlab/events/category/video/list/">
						<div class="service-icon">
							<h3>Events</h3>
							<i class="icon-events"></i>
						</div>
					</a> -->
					<!-- <a href="http://192.168.33.10/wordpress/altlab/events/category/video/list/">
						<div class="service-icon">
							<h3>Projects</h3>
							<i class="icon-projects"></i>
						</div>
					</a> -->
				</div>
				<div class="col-md-3">
					<!-- services -->
				</div>
				<div class="col-md-3">
					<!-- button -->
				</div>
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


<div class="container">
	<footer class="entry-footer">
</footer>		

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
