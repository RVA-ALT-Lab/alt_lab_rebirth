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
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-light bg-primary" id="the-menu">

		<div class="container">
  <div class="row alt-menu">
    <div class="col-md-6 alt-logo"></div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6 menu-item hvr-sweep-to-right"><i class="fa fa-cog" aria-hidden="true"></i>
design<br>courses </div>
         <div class="col-md-6 menu-item hvr-sweep-to-right"><i class="fa fa-wifi" aria-hidden="true"></i>
move<br>online</div>
        <div class="col-md-6 menu-item hvr-sweep-to-right"><i class="fa fa-play" aria-hidden="true"></i>
produce<br>videos </div>
        <div class="col-md-6 menu-item hvr-sweep-to-right"><i class="fa fa-file-code-o" aria-hidden="true"></i>
create<br> websites</div>
        <div class="col-md-6 menu-item last hvr-sweep-to-right"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
attend<br>workshops</div>
        <div class="col-md-6 menu-item last hvr-sweep-to-right"><i class="fa fa-share" aria-hidden="true"></i>
contact<br> us</div>       
      </div>        
      </div>
    </div>
  </div>
</div>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

<?php echo bannerMaker();?>
