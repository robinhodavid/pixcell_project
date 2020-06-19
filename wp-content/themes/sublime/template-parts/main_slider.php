<section>
	<div class="home"> <!-- Home -->

		<div class="home_slider_container">	 <!-- Home Slider -->

			<div class="owl-carousel owl-theme home_slider">
				<?php $args = array( 'post_type'=>'Banner',
	                                 'posts_per_page' => 4); ?>
	        	<?php $loop = new WP_Query( $args ); ?>
				<!-- Obtenemos el número de Publicaciones -->
				<?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
						<div class="home_slider_content_container">
								<div class="container">
									<div class="row">
										<div class="col">
											<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
												<div class="home_slider_title"><?php the_title(); ?></div>
												<div class="home_slider_subtitle"><?php the_content(); ?> </div>
												<div class="button button_light home_button">
													<?php if (get_field('boton_url')): ?>
													<a href="<?php the_field('boton_url'); ?>">Comprar</a>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>

						</div>
					</div> <!-- End Slider Item -->
				<?php $i++; endwhile; ?>
			</div>
										<div class="home_slider_dots_container">
								<div class="container">
									<div class="row">
										<div class="col">
											<div class="home_slider_dots">
												<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
													<?php for ($a=1; $a <= $i; $a++): ?> 
																<li class="home_slider_custom_dot active">
																<?php echo "0" . $a . " . "; ?>
																</li>	
														<!--<li class="home_slider_custom_dot">02.</li>
														<li class="home_slider_custom_dot">03.</li> -->
													<?php endfor; ?> 
													
												</ul>
											</div>
										</div>
									</div>
								</div>	
							</div> <!-- Home Slider Dots -->
		</div>
	</div> <!-- Home - end -->	
	
</section>

