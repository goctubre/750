<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package am750
 */

get_header();
?>

	<div class="container" id="noticia">

		<div class="columns">
			<div class="column is-9">

				<!--BANNER -->
				<?php include get_theme_file_path( '/inc/banner-top-inner.php' );?>
				<!--//BANNER-->

				<div class="columns">
					<div class="column is-1">
						<ul id="redesleft" class="redes sticky">
							<?php include get_theme_file_path( '/inc/redes.php' );?>
						</ul>
					</div>

					<div class="column is-10-desktop is-10-fullhd"> <!--chequear size fullhd-->
						
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', get_post_type() );

							// If comments are open or we have at least one comment, load up the comment template.
							//if ( comments_open() || get_comments_number() ) :
							//	comments_template();
							//endif;

						endwhile; // End of the loop.
						?>


						<!--TE PUEDE INTERESAR--->
						<h2 class="is-size-4 mb-5 visibility"> Te puede interesar </h2>

						<?php
							global $post;
							$args = array( 'post_status' => 'publish', 'numberposts' => 5, 'post__not_in' => array(get_the_ID()),
								//'category_name' =>  'entrevistas, audicuentos, deportes, la-venganza-sera-terrible',  //'orderby' => 'menu_order',
								'orderby' => 'date', 'order' => 'DESC');
							$myposts = get_posts( $args );

							foreach( $myposts as $post ) : setup_postdata($post); ?>
								<article class="mb-3 columns mas-notas visibility" data-url="<?php the_permalink();?>" data-title=" <?php the_title(); ?>">
									<div class="column is-5">
										<a href="<?php the_permalink();?>" aria-hidden="true" tabindex="-1">
											<figure class="image is-3by2">
												<?php if ( has_post_thumbnail() ) : ?> <?php the_post_thumbnail( 'medium',  array('class' => 'is-bordeado'));?> 
												<?php endif; ?>
											</figure>
										</a>
									</div>	

									<div class="column is-6">
										<a href="<?php the_permalink();?>">
											<?php
												$categories = get_the_category();
												$output = '';
												if ( ! empty( $categories ) ) {
												    foreach( $categories as $category ) {
												        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'Ver todos las notas en %s', 'textdomain' ), $category->name ) ) . '"> <button class="button is-light etiquet mb-2">' . esc_html( $category->name ) . '</button> </a>';
												    }
												    echo trim( $output );
												}
											?>

								    		<h3 class="is-size-5 has-text-weight-semibold is-fira mt-2 mb-2"> <a href="<?php the_permalink();?>">  <?php the_title(); ?> </a> </h3>
								    		<p class="lh-140"> <?php echo wp_trim_words( get_the_content(), 20, '...' );?> </p>
								    		<a href="<?php the_permalink();?>" aria-hidden="true" tabindex="-1"> <button class="button mt-4">Leer más</button> </a>
								    	</a>
								    </div>
									
								</article>
								
								<hr class="dashed">

						<?php endforeach; ?>
						<!-- //TE PUEDE INTERESAR--->
						
						<!--AJAX LOAD MORE-->
						<?php //echo do_shortcode( '[ajax_posts button_label="Más notas..." type="post"]' ); ?>

					</div>
				</div>
			</div>

			<div class="column is-3"> <?php get_sidebar();?> </div>
		</div>



		<script>
			// TE PUEDE INTERESAR
			const masnotas = [...document.querySelectorAll('.mas-notas')];
			const options = { threshold: 1};
			const observer = new IntersectionObserver(function (entries) {
			  entries.forEach(entry => {
			    if (entry.isIntersecting) {
			      entry.target.classList.add('active');
			      var linksUrl = entry.target.getAttribute('data-url');
			      var titlesUrl = entry.target.getAttribute('data-title');
			      history.pushState(null, null, linksUrl);
			      document.title = titlesUrl;
				  sendPageView();
			    } else {
			      entry.target.classList.remove('active');
			    }
			  });
			}, options);
			masnotas.forEach(masnotas => { observer.observe(masnotas);});
		</script>


	</div>



<?php
//get_sidebar();
get_footer();