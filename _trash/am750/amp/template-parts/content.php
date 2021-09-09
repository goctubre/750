<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header mb-5">
		<?php
		//if ( is_singular() ) :

			// $categories = get_the_category();
			// $output = '';
			// if ( ! empty( $categories ) ) {
			//     foreach( $categories as $category ) {
			//         $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '"> <button class="button is-light etiquet mb-2">' . esc_html( $category->name ) . '</button> </a>';
			//     }
			//     echo trim( $output );
			// }

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
			<h3 class='has-text-weight-normal'> <?php //am750_posted_on(); //am750_posted_by(); ?> </h3>
			<!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<hr class="dashed">
	
	<?php 
	$full = get_the_post_thumbnail_url('', 'full');
    $large = get_the_post_thumbnail_url('', 'large');
    $mediumlarge = get_the_post_thumbnail_url('', 'medium_large');
    $medium = get_the_post_thumbnail_url('', 'medium');
    $small = get_the_post_thumbnail_url('', 'thumbnail');
    $titulo =  esc_html (get_the_title());

	$html=' 
        <figure class="image '.$relation.'" > 
                <amp-img layout="responsive" width="100" height="100" class="" alt="'.$titulo.'" srcset="'.$full.'">
            </picture> 
        </figure>';

        echo $html;
	?>

	<!-- figure class="image is-16by9 mb-3">  <?php //am750_post_thumbnail(); ?> </figure> -->


	<p class="is-size-6 mb-6"> <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?> </p>

	<div class="nota-contenido"> <?php //the_content(); ?> 

<?php
$content = $content = apply_filters('the_content',$post->post_content);

$pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
$replacement = '<figure style="padding-top:20px;padding-bottom:20px;"><amp-img$1class="$2 "$3 layout="responsive"></figure>';

$content = preg_replace($pattern, $replacement, $content);



$content=str_replace('loading="lazy"', '', $content);
$content=str_replace('allowfullscreen', '', $content);

$resultTemp = str_replace('<iframe', '<amp-iframe', $content);
$resultFinal = str_replace('</iframe>', '</amp-iframe>', $resultTemp);

// $pattern ="/<iframe(.*?)class=\"(.*?)\"(.*?)>/i";
// $replacement = '<amp-iframe$1class="$2 "$3 layout="responsive"></amp-iframe>';

// $content = preg_replace($pattern, $replacement, $content);

echo $resultFinal;
?>
</div>
<!-- <?php //if(get_post_meta(get_the_ID(), "que_paso_meta_key", true)!=""){?>
	<div class="que_paso">
		<div class=""><b>¿Qué paso?</b></div>
		<div class=""><?php //echo get_post_meta(get_the_ID(), "que_paso_meta_key", true); ?> </div>
	</div>
	<?php //}?>
	<?php //if(get_post_meta(get_the_ID(), "importante_meta_key", true)!=""){?>
	<div class="importante">
		<div class=""><b>¿Por qué es importante?</b></div>
		<div class=""><?php //echo get_post_meta(get_the_ID(), "importante_meta_key", true); ?> </div>
	</div>
	<?php //}?>
	<?php //if(get_post_meta(get_the_ID(), "opinion_meta_key", true)!=""){?>
	<div class="mi_opinion">
		<div class=""><b>Opinión</b></div>
		<div class=""><?php //echo get_post_meta(get_the_ID(), "opinion_meta_key", true); ?> </div>
	</div>
	<?php //}?> -->


	<div class="ad-slot" id="mobile_nota_btf" data-adtype="box_mobile"> </div>

	<div id="redescompartir">
		<b>Compartir: </b>
		<ul class="redes"> 
			<?php include get_theme_file_path( '/amp/inc/redes.php' );?>
		</ul>
	</div>

	<footer class="entry-footer">
		<?php //am750_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->

<!-- <hr class="dashed"> -->

<!--BANNER -->
<section id="banner-middle-nota" class="mt-4 mb-3">
	<div class="container">
		<div class="columns">
			<div class="column has-text-centered">
				<div class="ad-slot" id="Notas_Leaderboard_BTC" data-adtype="leaderboard"></div>
			</div>
		</div>
	</div>
</section>
<!--//BANNER-->


<hr class="dashed">