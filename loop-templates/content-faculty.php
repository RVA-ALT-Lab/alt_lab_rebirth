<?php
/**
 * Partial template for content in service
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title entry-home">', '</h1>' ); ?>
			
	</header><!-- .entry-header -->

</article>
</div>
</div>
</div>

<div class="entry-content faculty-page">
	<div class="container">
		<?php the_content(); ?>
	</div>
	<div class="container">
		<h2 class="entry-home" id="faculty-list">Our Team</h2>
	</div>
	<div class="leadership" id="faculty-list-leadership">
		<div class="container">
			<h2 class="faculty-group">Administration</h2>
			<?php echo showFaculty('Administration');?>
		</div>
	</div>
	<div class="design" id="faculty-list-instructional-design">
		<div class="container">
			<h2 class="faculty-group">Instructional Design</h2>
			<?php echo showFaculty('instructional-design');?>
		</div>
	</div>
	<div class="media">
		<div class="container" id="faculty-list-learning-media">
			<h2 class="faculty-group">Learning Media</h2>
			<?php echo showFaculty('learning-media');?>
		</div>
	</div>
	<div class="rd" id="faculty-list-rd">
		<div class="container">		
			<h2 class="faculty-group">R+D</h2>
			<?php echo showFaculty('rd');?>
		</div>
	</div>		

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

<!-- TOPICS-->
<!-- <div class="home-topics" id="topic-parent">
	<div class="container">
		<div class="row">
			<div class="col-md-12"><h2 class="big-title">What are you interested in?</h2></div>
			<?php// echo home_topics();?>
		</div>
	</div>
</div> -->
<!--END TOPICS -->

<div class="container">
	<footer class="entry-footer">
</footer>		

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
