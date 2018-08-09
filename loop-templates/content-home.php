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
					<div class="home-description"><?php echo acf_fetch_description_one();?></div>
					
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
			<div class="col-md-12">
				<h2 class="home-callout">What are you interested in?</h2>
			</div>
		</div>
			<?php echo home_topics();?>
		</div>
	</div>
</div>
<!--END TOPICS-->
<!--HOW DOES THIS WORK-->

<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="entry-home interested">How does this work?</h2>
			</div>
		</div>
</div>

<div class="timeline-body">	
	<?php how_does_this_work();?>
</div>

<!--END WORK-->

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
<div class="container-fluid">
<div class="row image-row">
			<div class="col-md-4">
				<img class="img-fluid image-row-photo" src="<?php echo get_stylesheet_directory_uri();?>/imgs/max_video.jpg" alt="A group of faculty participating in faculty development.">
			</div>
			<div class="col-md-4">
				<img class="img-fluid image-row-photo" src="<?php echo get_stylesheet_directory_uri();?>/imgs/stan_helping.jpg" alt="A group of faculty participating in faculty development.">
			</div>
			<div class="col-md-4">
				<img class="img-fluid image-row-photo" src="<?php echo get_stylesheet_directory_uri();?>/imgs/videogame_learning.jpg" alt="A group of faculty participating in faculty development.">
			</div>
		</div>
</div>

<!--about us-->
<div class="about-us">
	<div class="container">		
		<div class="row">
			<div class="col-md-12">
				<h2 class="entry-home">About Us</h2>				
			</div>						
		</div>
		<div class="row about-us-row">
			<div class="col-md-6">
				<img class="about-us-img img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/imgs/about_us.jpg" alt="A group of faculty participating in faculty development.">
			</div>
			<div class="col-md-6">
				<p>A diverse team of educators and media professionals, we are dedicated to . . . 
			</div>
		</div>
	</div>
</div>
<!--END about us-->
<div class="container">
	<footer class="entry-footer">
</footer>		

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
