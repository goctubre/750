<div class="swiper-container">
  <div class="swiper-wrapper">
	<!-- loop ENTREVISTAS -->
	<?php 
		$the_query = new WP_Query( array( 'category_name' => 'la-venganza-sera-terrible', 'posts_per_page' => 8));
	 ?>

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    	<div class="swiper-slide">
    		<a href="<?php the_permalink(); ?>">
    			<figure class="image is-square">
    				<?php the_post_thumbnail('medium', array('class' => 'is-bordeado')); ?>
    			</figure>
    		</a>
    	</div>

	<?php endwhile; ?>
	<!-- // ENTREVISTAS -->

  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>