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

<!--CONTACT Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="the-greeting" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" id="closer" aria-label="Close">
          <span aria-hidden="true">Close <span class="close-x">X</span></span>
        </button>
      <div class="modal-header">
        <h2 class="modal-title" id="the-greeting">Hi</h2>       
      </div>
      <div class="modal-body">
        <div id="the-person"></div>
        <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]');?>
      </div>
      <div class="modal-footer">        
      </div>
    </div>
  </div>
</div>
    <!-- END Modal -->


    <!-- WORKSHOP Modal -->
<div class="modal fade" id="workshopModal" tabindex="-1" role="dialog" aria-labelledby="workshop-the-greeting" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" id="workshopcloser" aria-label="Close">
          <span aria-hidden="true">Close <span class="close-x">X</span></span>
        </button>
      <div class="modal-header">
        <h2 class="modal-title" id="workshop-the-greeting">Hi</h2>       
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[gravityform id="3" title="false" description="false"]');?>
      </div>
      <div class="modal-footer">        
      </div>
    </div>
  </div>
</div>

    <!-- END WORKSHOP Modal -->

<div class="wrapper" id="wrapper-footer">

  <footer class="<?php echo esc_attr( $container ); ?>">

    <div class="row" id="footer">


              <div class="footer-widget col-md-5">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - far left") ) : ?><?php endif;?>
                <div class="footer-address">
                  <div class="alt-name">Academic Learning Transformation Lab</div>
                  <div class="alt-address">1000 Floyd Ave, Suite 4102 | Richmond, Virginia 23284 </div>
                  <div class="alt-contact">altlab@vcu.edu | <a class="footer-link" href="tel:8048286786">Tel: 804-828-6786</a></div>
                  <div class="alt-name"><a class="footer-link" href="https://www.vcu.edu/">Virginia Commonwealth University</a></div>
                </div>
              </div>
              <div class="footer-widget col-md-3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - medium right") ) : ?><?php endif;?>
                <div class="footer-required">
                  <div class="text-only">
                    <a href="https://ts.vcu.edu/cgi-bin/posh.pl?posh_referer=https://altlab.vcu.edu/">View text version</a>
                  </div>
                  <div class="last-update">
                    Last updated: January 3rd, 2022
                  </div>
                  <div class="kitchen-sink">
                    <a class="footer-link" href="https://www.vcu.edu/privacy-statement/">Privacy</a> | <a class="footer-link" href="http://accessibility.vcu.edu/">Accessibility</a> | <a class="footer-link" href="mailto:altlab@vcu.edu">Webmaster</a>
                  </div>
                </div>
              </div>
              <div class="footer-widget col-md-3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer - far right") ) : ?><?php endif;?>
                  <a href="<?php echo esc_url( wp_login_url() ); ?>" alt="<?php esc_attr_e( 'Login', 'textdomain' ); ?>">
                      <?php _e( 'Login', 'textdomain' );?>
                  </a>
              </div>  
                      


    </div><!-- row end -->

  </div><!-- container end -->

</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
</div>
</body>

</html>