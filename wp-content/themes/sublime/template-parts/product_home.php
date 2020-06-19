<section>
	<!-- Products -->
	<div class="products">
		<div class="title-card-productos"><h2>Los más recientes</h2></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="product_grid">
			
						 <?php $args = array( 'post_type' => 'product', 
						 					  'posts_per_page' => 8); ?>
	                     <?php $loop = new WP_Query( $args ); ?>
	                     <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						<!-- Product -->
							<div class="product">
								<div class="product_image">
									<a href="<?php the_permalink();?>">	
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
									</a>
								</div>
								
								<div class="product_extra product_new">
									<a href="<?php the_permalink(); ?>">Nuevo</a>
								</div>
								<div class="product_content">
									<div class="product_title">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>	
										</a>
									</div>
									<div class="product_price"><?php echo $product->get_price_html(); ?></div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
						
				</div>
			</div>
		</div>
	</div>
</section>