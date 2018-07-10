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
		<div class="home-callout"><?php echo acf_fetch_call_out_two();?></div>
		<div class="home-description"><?php echo acf_fetch_description_two();?></div>	
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


<div class="home-topics">
	<div class="container" >
		<div class="row" id="topic-parent">
			<?php echo home_topics();?>
		</div>
	</div>
</div>
<!--quote slider-->
<div class="container">
<div class="row quotes justify-content-md-center">
						<div class="col-md-12 quote-box">
							<div id="carouselExampleControls" class="carousel slide" data-ride="false">
								  <div class="carousel-inner">
								  <div class="quote-slogan">Words from VCU Faculty</div>	

								    <!--ITEMS START-->
									<? echo quote_maker();?>																
									<!--ITEMS END-->
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
<div class="container">
	<footer class="entry-footer">
</footer>		

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
