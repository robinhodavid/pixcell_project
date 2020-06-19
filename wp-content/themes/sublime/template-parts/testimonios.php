<section>
	<div class ="testimonios">

			<div class="title-card-testimonios"><h2>Así opinan nuestros clientes</h2></div>
			<div class="container wrapper">
				<!-- Home Slider -->		
					<div class="owl-carousel owl-theme home_slider">
						<!-- Slider Item -->
						<?php $argstesti = array( 'post_type'=>'Testimonials',
	                                  'posts_per_page' => 6); ?>
	        			<?php $looptesti = new WP_Query( $argstesti ); ?>
						
						<?php while ( $looptesti->have_posts() ) : $looptesti->the_post(); ?>	
							<div class="owl-item home_slider_item testimonial-item">	
									<div class="testimonial-client">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
										<p class="client-name"><?php the_title();?> </p>
										<?php if (get_field('tipo_de_consumidor')): ?>
											<span> <?php the_field('tipo_de_consumidor'); ?> </span>
										<?php endif; ?>
									</div>
									<div class="testimonial-text">
										<p><?php the_content(); ?></p>
									</div>
							</div>
						<?php endwhile; ?>	
				   </div>				   
			</div>
		</div>
</section>