<?php
/**
 * Single course partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
<?php if( is_user_logged_in()): ?>


	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->
	
	<div class="row workshop-details">
		<div class="workshop-description col-md-6">
			<h2>Description</h2>
			<?php the_content(); ?>			
		</div>
			<div class="col-md-6">
				<?php echo acf_fetch_audience();?>
				<?php echo learning_outcomes();?>				
				<?php echo vcu_examples();?>
				<?php echo outside_examples();?>
			</div>
		</div>


		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->
<?php else: ?>
	<h2>Please login to see this content.</h2>
	<a href="<?php echo wp_login_url(); ?>" title="Login">Login</a>
<?php endif; ?>
	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
