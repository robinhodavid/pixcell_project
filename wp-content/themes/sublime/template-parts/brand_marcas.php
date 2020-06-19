<section>
	<div class="brands-area d-flex align-items-center justify-content-between">
	    <!-- Brand Logo 1 -->
		<?php $argsmarca = array( 'post_type'=>'Marcas',
	                       'posts_per_page' => 6); ?>
		<?php $loopmarca = new WP_Query( $argsmarca ); ?>
		
		<?php while ( $loopmarca->have_posts() ) : $loopmarca->the_post(); ?>
		<!-- Item Marcas-->
		
	         <!-- Brand Logo 1 -->
	        <div class="single-brands-logo">
	            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
	        </div>
		<?php endwhile; ?>    
	</div>
</section>