<?php
	$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'mapa-portada', 'posts_per_page' => 1 ));
	
	if ( $the_query->have_posts() ) : ?>

	 	<hr class="dashed">
		 
	    <!-- the loop -->
	    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<a href="<?php the_permalink(); ?>"> <h3 class="is-size-2 is-size-3-mobile mt-3 mb-4 is-fira lh-110 has-text-centered  has-text-left-mobile has-text-weight-bold"> <?php the_title(); ?> </h3> </a>
			<p class="mb-5 has-text-centered has-text-left-mobile"> <?php echo get_post_meta( get_the_ID(),  'bajada', true ); ?> </p>	
	    <?php endwhile; ?>
	    <!-- end of the loop -->
	    <?php wp_reset_postdata(); ?>

	<?php else : ?> 
		<p><?php //_e( 'Upsss.' ); ?></p>
<?php endif; ?>

<script type="text/javascript">
// window.addEventListener('message', function(e) {
// 	if(e.origin=="https://www.pagina12.com.ar"){
// 		console.log("pagina12 heihgt",e.data.height);
// 		if(e.data.height){
// 	        // console.log("e.data.height",e.data.height);
// 	        document.querySelector('#iframemapa').style.height = e.data.height+'px';
// 	    }
// 	}
    
// });
</script>

<!--IFRAME MAPA-->
<iframe id="iframemapa" src="<?php echo get_option( 'mapa_url');?>" style="border:0px #ffffff none;" name="mario" scrolling="no" marginheight="0px" marginwidth="0px" allowfullscreen="" width="100%" frameborder="0">
</iframe>
<!--//IFRAME MAPA-->