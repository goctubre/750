<?php 
$the_query = new WP_Query( array('post_status' => 'publish', 'category_name' => 'destacados', 'orderby' => $orderby, 'order' => $order, 'posts_per_page' => 4 ) );
?>

<!-- loop destacado -->
<?php $count = 0; ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<?php $count++; ?>
	<?php if ($count == 1) : ?>
    	<article>
			<button class="button is-750 etiquet has-text-weight-bold mb-2 noclick">
				<?php echo get_post_meta( get_the_ID(),  'tema', true ); ?>
			</button>

    		<a href="<?php the_permalink(); ?>">
        		<h2 class="is-size-5 has-text-weight-semibold mb-3 is-fira"><?php the_title(); ?></h2>
       	 	</a>

            <?php if ( has_post_thumbnail() ) : ?>
                <?php echo picture_image('medium', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?>
            <?php endif; ?>

    	</article>

    	<p class="is-size-5 is-celeste has-text-weight-bold rayita pt-3 pb-5 is-hidden-mobile">Leé también</p>



	<div id="quierosaber">
         <?php else : ?>
    		<article class="mb-4 pr-0 rayita sabermas">
        		<a href="<?php the_permalink(); ?>">
            		<h3 class="is-size-6 has-text-weight-bold is-fira"><?php the_title(); ?></h3>
           	 	</a>
        	</article>     	
    	<?php endif; ?>
    <?php endwhile; ?>
    </div>

        <div class="has-text-centered is-hidden-desktop"> 
             <button id="sabermas" class="button is-750 etiquet has-text-weight-bold ml-2 mt-5 is-hidden-desktop" onclick="masDestacados()"> <img src="<?php echo get_template_directory_uri(); ?>/img/i-prev.svg" width="11" height="7"/> Quiero saber más</button> 
        </div>
<!-- end loop destacado -->