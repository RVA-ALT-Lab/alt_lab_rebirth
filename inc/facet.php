<?php while ( have_posts() ): the_post(); ?>
<div class="row facet-workshop">
	<div class="col-md-4 facet-workshop-img">
		<?php the_post_thumbnail('medium');?>
	</div>
	<div class="col-md-8 facet-workshop-info">
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<div class="facet-author">by <?php the_author();?></div>		
	</div>
</div>
<?php endwhile; ?>