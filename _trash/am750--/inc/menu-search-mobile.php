 <!-- SEARCH MOBILE -->
<div id="searchmobile">
	<div id="cerrar">
		<svg viewbox="0 0 40 40"> <path class="close-x" d="M 10,10 L 30,30 M 30,10 L 10,30" /> </svg>
	</div>

	<form role="search" method="get" class="search-form" action="/">
		<div class="field is-grouped">
		  <p class="control is-expanded">
		    <input class="input" type="text" name="s" value="<?php the_search_query(); ?>"  placeholder="Buscar" />
		  </p>
		  <p class="control">
		    <a class="button">  Buscar </a>
		  </p>
		</div>
	</form>
	
	<h2 class="title is-size-4 has-text-centered"> Noticias más recientes </h2>
	<div class="buscador-noticias">

	<!-- loop informativo -->
        <ul>
          <?php global $post;
            $args = array( 'post_status' => 'publish', 'numberposts' => 5, 'offset'=> 1, 'category_name' => 'actualidad' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : setup_postdata($post); ?>
            <li class="has-text-weight-bold">
              <a href="<?php the_permalink(); ?>">

		        <div class="columns is-mobile">
		          <figure class="image column is-4">
		          	<?php the_post_thumbnail(); ?>
		          </figure>

			        <div class="column">
			           <h3 class= "is-size-5 has-text-weight-semibold is-fira"> <?php the_title(); ?> </h3>
			        </div>
				</div>  
              </a>
              <?php pp_setPostViews(get_the_ID()); //echo pp_getPostViews(get_the_ID());; ?>
            </li>
            <hr class="dashed">
        <?php endforeach; ?>
        </ul>
	<?php wp_reset_postdata(); ?>
	<!-- // informativo -->
	</div>
</div>
 <!-- //SEARCH MOBILE -->