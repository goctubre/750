<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header mb-5">
		<?php
			$categories = get_the_category();
			$output = '';
			if ( ! empty( $categories ) ) {
			    foreach( $categories as $category ) {
			        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '"> <button class="button is-light etiquet">' . esc_html( $category->name ) . '</button> </a>';
			    }
			    echo trim( $output );
			}

				the_title( '<h1 class="is-size-2 mt-4 mb-4 is-fira">', '</h1>' );

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				am750_posted_on();
				am750_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<figure class="image is-16by9 mb-5">
	  <?php am750_post_thumbnail(); ?>
	</figure>


	<div class="ad-slot" id="mobile_nota_btf" data-adtype="box_mobile"> </div>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'am750' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'am750' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<div id="redescompartir">
		<b>Compartir: </b>
		<ul class="redes"> 
			<?php include get_theme_file_path( '/inc/redes.php' );?>
		</ul>
	</div>

	<footer class="entry-footer">
		<?php am750_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->

<hr class="dashed">