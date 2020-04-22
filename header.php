<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<!-- Matomo -->
	<script type="text/javascript">
	  var _paq = _paq || [];
	  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u="https://stats.rampages.us/";
	    _paq.push(['setTrackerUrl', u+'piwik.php']);
	    _paq.push(['setSiteId', '7']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<!-- End Matomo Code -->
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
	  	<div class="alert-banner">
	  		<div class="alert-message col-md-12">ALERT: In response to COVID-19, we are offering rapid online transition support for faculty. <a href="https://altlab.vcu.edu/rapid-response/">View the support resources from VCU.</a></div>
		</div>
		<nav class="navbar navbar-expand-md" id="the-menu">

		<?php if ( 'container' == $container ) : ?>
			<div class="container" >
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0 nav-big home"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
							<h1 class="navbar-brand mb-0 nav-small home"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?>" itemprop="url">ALT Lab</a></h1>

						<?php else : ?>

							<a class="navbar-brand nav-big" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a><span class="foo"></span>
							<a class="navbar-brand nav-small" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img src="<?php echo get_template_directory_uri();?>/imgs/altlogo_black_mobile.svg" class="mobile-logo" alt="ALT Lab logo."></a>
						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->
				<!-- <button type="button" class="mail-icon" data-toggle="modal" data-target="#contactModal">
				  <i class="icon mail" id="header-mail"></i>
				</button> -->

				<button class="search-icon" type="button" data-toggle="collapse" data-target="#search-box-dropdown" aria-label="Toggle search bar" aria-controls="search-box-dropdown" aria-expanded="false" id="search-button">
					<i class="icon search" id="header-search"></i>
				</button>

				<div class="collapse" id="search-box-dropdown"><?php get_search_form();?></div>	
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>			

		</nav><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->
	<div class="special-border">
		<!-- <h3>This is the best of times. This is the worst of times...<h3> -->
		<!--BIG MENU-->
		<?php if(is_front_page() ):?>
			<div class= "big-menu">
				<div class="container">
					<div class="row alt-menu justify-content-md-center">
						<div class="alt-logo-background"><div class="col-md-4 alt-logo"><img src="https://altlab.vcu.edu/wp-content/themes/alt_lab_rebirth/imgs/altlab_logo_blackgold3.svg" style="height:240px;" alt="The ALT Lab logo with a solar system background.">
						</div>
					</div>
						<div class="col-md-6 alt-big-menu">
							<div class="row">
								<div class="col-6 menu-item hvr-sweep-to-right"><a href="design-instruction"><i class="fa fa-cog" aria-hidden="true"></i>
							online<br />course design</a>
								</div>
								<div class="col-6 menu-item hvr-sweep-to-right"><a href="create-websites"><i class="fa fa-file-code-o" aria-hidden="true"></i>
							web<br />creation</a>
									</div>
								<div class="col-6 menu-item hvr-sweep-to-right"><a href="produce-videos"><i class="fa fa-play" aria-hidden="true"></i>
									media<br />production</a>
								</div>
								<div class="col-6 menu-item last hvr-sweep-to-right"><a href="professional-development"><i class="fa fa-briefcase" aria-hidden="true"></i>
									professional<br />development</a>
								</div>
								<div class="col-6 menu-item hvr-sweep-to-right"><a href="faculty-resources"><i class="fa fa-university" aria-hidden="true"></i>
									faculty<br />resources</a>
								</div>   
								<div class="col-6 menu-item last hvr-sweep-to-right"><a href="innovate-with-us"><i class="fa fa-rocket" aria-hidden="true"></i>
									innovate<br />with us</a>
								</div>   
							</div>        
						</div>
					</div>
				</div>
			</div>
		<?php endif;?>
