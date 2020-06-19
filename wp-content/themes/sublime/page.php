<?php get_header ();  ?>

	<?php if( have_posts() ) : while (have_posts() ) : the_post(); ?>
		<?php if (has_post_thumbnail() ){
			the_post_thumbnail('post-thumbnails', array( 'class' => '')); } ?>

			<h2> <?php the_title();?></h2>
			<p class="lead"> <?php echo get_the_date();?></p>
			<div class="text-justify">
					<?php the_content();?>
			</div>
		<?php endwhile; endif;?>


<?php get_footer(); ?>
