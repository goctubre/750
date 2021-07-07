<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-newPost="true" data-title="<?php echo get_the_title()?>" data-url="<?php echo str_replace(home_url(), '', get_permalink())?>">
	<header class="entry-header mb-5">
		<?php
		//if ( is_singular() ) :

			$categories = get_the_category();
			$output = '';
			if ( ! empty( $categories ) ) {
			    foreach( $categories as $category ) {
			        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '"> <button class="button is-light etiquet mb-2">' . esc_html( $category->name ) . '</button> </a>';
			    }
			    echo trim( $output );
			}

			the_title( '<h1 class="is-size-1 is-size-3-mobile mt-4 mb-4 is-fira">', '</h1>' ); //IS-SIZE-2
			
			pp_setPostViews(get_the_ID()); 
			//echo pp_getPostViews(get_the_ID());

			echo "<h2 class='has-text-weight-normal'>".get_post_meta(get_the_ID(), "bajada", true)."</h2>";

			// echo "<h2 class='has-text-weight-normal'>";
			// echo get_post_meta(get_the_ID(), "bajada", true);
			// echo "</h2>";

		//else :
			//the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		//endif;

		if ( 'post' === get_post_type() ) :
			?>
			<h3 class='has-text-weight-normal'> <?php am750_posted_on(); am750_posted_by(); ?> </h3>
			<!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<hr class="dashed">
	
	<?php echo picture_image('full', 'medium', 'medium', 'medium', 'is-16by9', 'is-bordeado');?>
	<!-- figure class="image is-16by9 mb-3">  <?php //am750_post_thumbnail(); ?> </figure> -->

	<p class="is-size-6 mb-6"> <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?> </p>

	<div class="nota-contenido"> <?php the_content(); ?> </div>

	<div class="ad-slot" id="mobile_nota_btf" data-adtype="box_mobile"> </div>

	<div id="redescompartir">
		<b>Compartir: </b>
		<ul class="redes">  <?php include get_theme_file_path( '/inc/redes.php' );?> </ul>
	</div>

	<footer class="entry-footer"> <?php am750_entry_footer(); ?> </footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->

<!-- <hr class="dashed"> -->

<!--BANNER -->
<section class="mt-4 mb-3 has-text-centered banner-middle-nota ad-slot">
	<div class="ad-slot" id="Notas_Leaderboard_BTC" data-adtype="leaderboard"></div>
</section>
<!--//BANNER-->


<hr class="dashed">