<?php while ( have_posts() ): the_post(); ?>
<div class="row facet-workshop">
	<div class="col-md-12 facet-workshop-info">
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	</div>
</div>
<?php endwhile; ?>