<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title entry-home">', '</h1>' ); ?>
			
	</header><!-- .entry-header -->

	<div class="entry-content">
		<h2>Innovative Media</h2>
		<?php echo showFaculty('innovative-media');?>
		<h2>R+D</h2>
		<?php echo showFaculty('rd');?>
		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->
</article>
</div>
</div>
</div>

<!--TOPICS-->
<div class="home-topics" id="topic-parent">
	<div class="container">
		<div class="row">
			<div class="col-md-12"><h2 class="big-title">What are you interested in?</h2></div>
			<?php echo home_topics();?>
		</div>
	</div>
</div>
<!--END TOPICS-->

<!--about us-->
<div class="about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-12"><h2 class="big-title">About Us</h2></div>
			<?php echo 'foo';?>
		</div>
	</div>
</div>
<!--END about us-->


<!--quote slider-->
<div class="container">
<div class="row quotes justify-content-md-center">
						<div class="col-md-12 quote-box">
							<div id="carouselExampleControls" class="carousel slide" data-ride="false">
								  <div class="carousel-inner">
								  <div class="quote-slogan">Words from VCU Faculty</div>	

									<? echo quote_maker();?>																
									
								  </div>
								  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">								   
								    <span class="quote-nav left"><i class="fa fa-chevron-left"></i></span>
								  </a>
								  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								    <span class="quote-nav right"><i class="fa fa-chevron-right"></i></span>
								  </a>
								</div>
						</div>	
 					</div>
</div>
<!--end quote-->
<div class="container">
	<footer class="entry-footer">
</footer>		

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
