<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="the-greeting"></h2>       
      </div>
      <div class="modal-body">
        <div id="the-person"></div>
        <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]');?>
      </div>
      <div class="modal-footer">
        footer elements
      </div>
    </div>
  </div>
</div>

		<!-- Modal -->
<div class="modal fade" id="workshopModal" tabindex="-1" role="dialog" aria-labelledby="workshopModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="the-greeting"></h2>       
      </div>
      <div class="modal-body">
        <div id="the-person"></div>
        <?php echo do_shortcode('[gravityform id="3" title="false" description="false"]');?>
      </div>
      <div class="modal-footer">
        footer elements
      </div>
    </div>
  </div>
</div>

<div class="wrapper" id="wrapper-footer">

	<footer class="<?php echo esc_attr( $container ); ?>">

		<div class="row" id="footer">


							<div class="footer-widget col-md-3">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - far left") ) : ?><?php endif;?>
							</div>
							<div class="footer-widget col-md-3">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - medium left") ) : ?><?php endif;?>
							</div>
							<div class="footer-widget col-md-3">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - medium right") ) : ?><?php endif;?>
							</div>
							<div class="footer-widget col-md-3">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - far right") ) : ?><?php endif;?>
							</div>	
											


		</div><!-- row end -->

	</div><!-- container end -->

</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

