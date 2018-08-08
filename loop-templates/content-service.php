<?php
/**
 * Partial template for content in service
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
</article>
</div>
</div>
</div>

<div class="entry-content service-page">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri();?>/imgs/altlab_logo_blackgold.svg" alt="ALT Lab logo" class="services-logo">
				<h2 class="services-services">services:</h2>
			</div>
			<div class="col-md-8">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title-service">', '</h1>' ); ?>					
				</header><!-- .entry-header -->
				<?php echo acf_fetch_call_out_one_text() ?>
				<h2>The Team</h2>
				<?php echo show_faculty_service('innovative-media');?>
			</div>
		</div>
		<div class="service-separator">
		</div>
	</div>
	<div class="container-fluid service-callout-two">
		<div class="row service-thumb">			
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h2><?php echo acf_fetch_call_out_two_title() ?></h2>
						<?php echo acf_fetch_call_out_two_text() ?>
					</div>					
				</div>				
			</div>
			<img src="<?php echo the_post_thumbnail_url('large');?>" class="img-fluid img-right">
		</div>	
	</div>
	<div class="container">
		<div class="service-separator">
		</div>
	</div>	

	<div class="container-fluid yellow">
		<div class="container white">			
			<div class="row">
				<div class="col-md-3">
					icons
				</div>
				<div class="col-md-3">
					services
				</div>
				<div class="col-md-3">
					button
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
