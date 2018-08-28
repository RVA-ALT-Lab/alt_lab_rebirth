<?php
/**
 * Template Name: WORKSHOP BROWSER
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->
	<div class="entry-content">
			<div class="container">
				<div class="row">			
					<div class="col-md-4 facet-facets">
						<div class="facet-box">
							<h3 class="filter-lead">Filter workshops by</h3>
							<h3>Tools</h3>
							<?php echo facetwp_display( 'facet', 'workshop_tools' );?>
							<h3>Concepts</h3>
							<?php echo facetwp_display( 'facet', 'workshop_concepts');?>							
						</div>	
					</div>
					<div class="col-md-8 facet-holder"><!--ALPHA PRIME WORKSHOP LOOP-->
							<?php echo facetwp_display( 'template', 'workshop_display' );?>
							<?php echo do_shortcode('[facetwp pager="true"]') ;?>
							<button class="btn btn-alp btn-dark" value="Reset" onclick="FWP.reset()" class="facet-reset" />Reset Filters</button>
					</div>
				</div>
			</div>	
		</div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
