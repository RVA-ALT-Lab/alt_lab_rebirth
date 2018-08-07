<?php
/**
 * Partial template for content in faculty
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
	<div class="leadership">
		<div class="container">
			<h2 class="faculty-group">Leadership</h2>
			<?php echo showFaculty('leadership');?>
		</div>
	</div>
	<div class="design">
		<div class="container">
			<h2 class="faculty-group">Instructional Design</h2>
			<?php echo showFaculty('instructional-design');?>
		</div>
	</div>
	<div class="media">
		<div class="container">
			<h2 class="faculty-group">Innovative Media</h2>
			<?php echo showFaculty('innovative-media');?>
		</div>
	</div>
	<div class="rd">
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

<div class="container">
	<footer class="entry-footer">
</footer>		

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
