<section>
	<div class="avds">
			<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
				
				<?php $argsmall = array( 'post_type'=>'Smallbannerads',
	                                  'posts_per_page' => 1); ?>
	        	<?php $loopsmall = new WP_Query( $argsmall ); ?>
			
				<?php while ( $loopsmall->have_posts() ) : $loopsmall->the_post(); ?>	

				<div class="avds_small">
					<div class="avds_background" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
					<div class="avds_small_inner">
						<div class="avds_discount_container">
							<img src="<?php echo get_template_directory_uri(); ?>/images/discount.png" alt="">
							<div>
								<div class="avds_discount">
									<div><?php if (get_field('percent')): ?>
										<span><?php the_field('percent'); ?></span>
									<?php endif; ?>
									</div>
									<?php if (get_field('descuento')): ?>
									<div><?php the_field('descuento'); ?></div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="avds_small_content">
							<div class="avds_title"><?php the_title();?></div>
							<div class="avds_link">
								<?php if (get_field('see_more')): ?>
								<a href="<?php the_field('see_more'); ?>">Ver más</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>


				<div class="avds_large">
					<?php $argslarge = array( 'post_type'=>'Largebannerads',
	                                  'posts_per_page' => 1); ?>
		        	<?php $loopslarge = new WP_Query( $argslarge ); ?>
				
					<?php while ( $loopslarge->have_posts() ) : $loopslarge->the_post(); ?>	

						<div class="avds_background" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
						<div class="avds_large_container">
							<div class="avds_large_content">
								<div class="avds_title"><?php the_title(); ?></div>
								<div class="avds_text"><?php the_content(); ?></div>
								<div class="avds_link avds_link_large">
									<?php if (get_field('see_more')): ?>
									<a href="<?php the_field('see_more'); ?>">Ver más</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endwhile;?>
				</div>
			</div>
		</div>
</section>