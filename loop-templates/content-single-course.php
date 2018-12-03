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
	<div class="alt-lab-lead data"><?php alt_lab_lead();?></div>
		<div class="department data"><?php project_department();?></div>
		<div class="design data"><?php alt_lab_design_pattern();?></div>
		
		<div class="project-dates">
			<h2>Dates</h2>
			<ul>
				<li class="start-date">Start Date: <?php echo acf_fetch_work_start_date();?></li>
				<li class="start-date">Due Date: <?php echo acf_fetch_due_date();?></li>			
				<li class="start-date">Launch Date: <?php echo acf_fetch_launch_date();?></li>
			</ul>
		</div>

		<div class="faculty-accordion">Faculty: <?php project_faculty();?></div>
		<div class="description-accordion">Description: <?php echo project_description();?></div>

		<div class="updates">
			<h2>Updates</h2>
			<?php echo acf_fetch_updates();?>

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
