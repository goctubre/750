<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="columns mb-6">

		<div class="column is-3">
			<figure class="image is-16by9 mb-5">
			  <?php the_post_thumbnail('large', array('class' => 'is-bordeado')); ?>
			</figure>
		</div>

		<div class="column is-6">

			<?$categories = get_the_category();
			$output = '';
			if ( ! empty( $categories ) ) {
			    foreach( $categories as $category ) {
			        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'Ver todas las noticias en %s', 'textdomain' ), $category->name ) ) . '"> <button style="margin-left:-10px" class="button is-light etiquet mb-2">' . esc_html( $category->name ) . '</button> </a>';
			    }
			    echo trim( $output );
			}?>

			<div class="mt-3 mb-3 is-size-6">
				<?php
				am750_posted_on();
				//am750_posted_by();
				?>
			</div><!-- .entry-meta -->

			<?php

				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if ( 'post' === get_post_type() ) :
				?>

			<?php endif; ?>
		</div><!-- .entry-header -->


	</div>

</article><!-- #post-<?php the_ID(); ?> -->