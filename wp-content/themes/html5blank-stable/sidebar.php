<!-- sidebar -->
<aside class="sidebar" role="complementary">


			<div class="slider">	

				<?php if( have_rows('test-slider', 13) ): ?>
						<?php while( have_rows('test-slider', 13) ): the_row(); ?>
								

							<div class="slide">
								
								<a class="testimonial-sidebar" href="<?php the_permalink(13);?>">
			    		    			
		    		    			<p><?php the_sub_field('excerpt-sidebar', 13); ?></p>
		    		    		
									<h3><?php the_sub_field('name-sidebar', 13); ?></h3>

								</a>

							</div>

						<?php endwhile; ?>
				<?php endif; ?>

			</div> 


</aside>
<!-- /sidebar -->
