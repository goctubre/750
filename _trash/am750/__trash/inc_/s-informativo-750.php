<div class="sticky" data-scroll data-scroll-sticky data-scroll-target="#nota-principal">
	<h2 class="is-size-5 has-text-weight-bold mb-5"> Informativo 750 </h3>

		<!--CAROUSEL INFORMATIVO-->
		<div class="swiper-container-mob">

			<div class="swiper-wrapper" data-autorefresh="/inc/s-informativo-loop.php" >

				<!-- loop informativo -->
					<?php include get_theme_file_path( '/inc/s-informativo-loop.php' );?>
				<!-- end of the loop -->

			<!-- // informativo -->
			</div>

			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev mob-bt-prev"></div>
			<div class="swiper-button-next mob-bt-next"></div>
		</div>
		<!--fin carrousel INFORMATIVO-->



</div>	<!--//STICKY-->