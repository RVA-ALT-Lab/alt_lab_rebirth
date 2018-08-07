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

		<nav class="navbar navbar-expand-md" id="the-menu">

		<?php if ( 'container' == $container ) : ?>
			<div class="container" >
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0 nav-big"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
							<h1 class="navbar-brand mb-0 nav-small"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">VCU ENVS</a></h1>

						<?php else : ?>

							<a class="navbar-brand nav-big" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
							<a class="navbar-brand nav-small" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'description' );?></a>
						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

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
			<button type="button" class="mail-icon" data-toggle="modal" data-target="#contactModal">
			  <i class="fa fa-envelope"></i>
			</button>
			<button class="search-icon" type="button" data-toggle="collapse" data-target="#search-box-dropdown" aria-label="Toggle search bar" aria-controls="search-box-dropdown" aria-expanded="false" id="search-button"><i class="fa fa-search"></i></button>
			<div class="collapse" id="search-box-dropdown"><?php get_search_form();?></div>	

		</nav><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->

		<!--BIG MENU-->
		<?php if(is_front_page()):?>
			<div class="container big-menu">
			  <div class="row alt-menu">
			    <div class="col-md-6 alt-logo"></div>
			    <div class="col-md-6 alt-big-menu">
			      <div class="row">
			        <div class="col-md-6 menu-item hvr-sweep-to-right"><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>
			design<br>courses </a></div>
			        <div class="col-md-6 menu-item hvr-sweep-to-right"><a href="#"><i class="fa fa-wifi" aria-hidden="true"></i>
			move<br>online</a></div>
			        <div class="col-md-6 menu-item hvr-sweep-to-right"><a href="#"><i class="fa fa-play" aria-hidden="true"></i>
			produce<br>videos</a></div>
			        <div class="col-md-6 menu-item hvr-sweep-to-right"><a href="#"><i class="fa fa-file-code-o" aria-hidden="true"></i>
			create<br> websites</a></div>
			        <div class="col-md-6 menu-item last hvr-sweep-to-right"><a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
			attend<br>workshops</a></div>
			        <div class="col-md-6 menu-item last hvr-sweep-to-right"><a href="#"><i class="fa fa-share" aria-hidden="true"></i>
			contact<br>us</a></div>       
			      </div>        
			      </div>
			    </div>
			  </div>
			</div>
		<?php endif;?>
