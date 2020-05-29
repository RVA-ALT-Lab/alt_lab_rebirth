<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title entry-home" id="pd-2020">', '</h1>' ); ?>
						
				</header><!-- .entry-header -->
					<!--fall PD ALERT-->
				<div class="row anchor-pad" id="fall-pd">
					<div class="pd-alert col-md-4" >
						<h2>Get Ready for Fall!</h2>
						<img class="fluid" src="https://altlab.vcu.edu/wp-content/themes/alt_lab_rebirth/imgs/forward_arrow.png" alt="Forward arrow icon.">
					</div>
					<div class="col-md-8" id="fall-2020">
						<p>If you need assistance in making your Fall 2020 course flexible (face-to-face, hybrid, or online), we recommend two options:</p>
						<ul>
							<li><a href="https://altlab.vcu.edu/facilitated-courses/">Designing Online@VCU Course</a></li>
							<li><a href="https://altlab.vcu.edu/design-instruction/">Flexible Design Services</a>  </li>							
						</ul>
						<p>If the course you plan to teach in Fall 2020 already exists online, we recommend:</p>
						<ul>
							<li><a href="https://altlab.vcu.edu/facilitated-courses/">Teaching Online@VCU</a> Course</li>
						</ul>
						<p>If you have an online course and have experience in teaching online, we recommend our other resources:</p>
						<ul>
							<li><a href="https://altlab.vcu.edu/self-paced-courses/">Self-paced courses</a></li>
							<li><a href="https://altlab.vcu.edu/faculty-resources/">Faculty Resources</a></li>
						</ul>
					</div>
			    </div>
				<!--END fall pd ALERT-->
				<!--REMOTE ALERT-->
				<div class="row" id="remote-boot">
					<div class="pd-alert col-md-4" >
						<h2>Surviving Remote@VCU Summer Edition</h2>
					</div>
					<div class="col-md-8">
						<p>Surviving Remote@VCU is a two week course tailored for faculty that must move a face-to-face course to emergency remote teaching in response to a crisis like the COVID-19 pandemic. Learn more by clicking on the button below.</p>
						<a class="btn alt-button" href="https://altlab.vcu.edu/program/surviving-remotevcu/">Surviving Remote@VCU</a> 
					</div>
				</div>
				<!--END REMOTE ALERT-->
				<div class="row">
					<div class="entry-content col-md-8">						

						<div class="home-description"><?php echo acf_fetch_description_one();?></div>
						
						<?php the_content(); ?>

						<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
							'after'  => '</div>',
						) );
						?>
					</div><!-- .entry-content -->
					<div class="col-md-4 contact-us-section">
						<div>
							<!-- <h2>Let's get started</h2> -->
							<button class="btn alt-button" type="button" data-toggle="modal" data-target="#contactModal">Contact us</button>
						</div>
						<div>
							<div class="button-spacer">or to sign up for a course/workshop/event</div>
							<a href="register"><button class="btn alt-button-gray">Register</button></a>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>

<!--TOPICS-->
<!-- <div class="home-topics" id="topic-parent">
	<div id="arrow-holder"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="home-callout">What are you interested in?</h2>
			</div>
		</div>
			<?php //echo home_topics();?>
		</div>
	</div>
</div> -->
<!--END TOPICS-->
<!--HOW DOES THIS WORK-->

<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="home-side-bar">
					<span class="side-bar-title">Upcoming</span>
					<?php echo do_shortcode('[tribe_events_list limit="4"]');?>
					<span class="side-bar-title">News</span>
					<?php echo do_shortcode('[display-posts category="news" include_excerpt="true" include_date="true" excerpt_length="20" posts_per_page="4"]');?>
				</div>
			</div>

			<div class="col-md-8">
				<h2 class="entry-home interested">How does this work?</h2>
				<div class="timeline-body">	
					<?php how_does_this_work();?>
				</div>
			</div>
		</div>
</div>


<!--END WORK-->

<!--quote slider-->
<!--<div class="container">
					<div class="row quotes justify-content-md-center">
						<div class="col-md-12 quote-box">
							<div id="carouselExampleControls" class="carousel slide" data-ride="false">
								  <div class="carousel-inner">
								  <div class="quote-slogan">Words from VCU Faculty</div>	
									<? //echo do_shortcode('[quote category="foo"]');?>												
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
	</div> -->
<!--end quote-->
<div class="container">
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
				<h2 class="entry-home about">About Us</h2>				
			</div>						
		</div>
		<div class="row about-us-row">
			<div class="col-md-6">
				<img class="about-us-img img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/imgs/about_us.jpg" alt="A group of faculty participating in faculty development.">
			</div>
			<div class="col-md-6 about-us-description">
				<p>We are a diverse team of educators passionate about increasing access, improving educational outcomes, and creating powerful learning experiences.</p>
				<p><a href="about-us">Learn more about our team and how we can help you.</a></p>
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
