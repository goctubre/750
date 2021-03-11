<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h4 class="mt-3 mb-3 has-text-weight-bold"><?php esc_html_e( 'No se encontraron resultados que coincidan con tu búsqueda', 'am750' ); ?></h4>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Lo sentimos, pero nada coincide con los términos de búsqueda. <a href="%1$s">Volvé a intentarlo con algunas palabras clave diferentes.</a>.', 'am750' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p class="mb-3"><?php esc_html_e( 'Lo sentimos, pero nada coincide con los términos de búsqueda. Volvé a intentarlo con algunas palabras clave diferentes.', 'am750' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p class="mb-6"><?php esc_html_e( 'Parece que no podemos encontrar lo que estás buscando. Quizás la búsqueda pueda ayudar.', 'am750' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
