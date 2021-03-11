    <div id="mas-vistas" class="mt-6">
        <h3 class="is-size-5 has-text-weight-bold mb-5"> Más vistas </h3>
        <ul>

          <?php global $post;
            $args = array( 'numberposts' => 5, 'offset'=> 1, 'category_name' => 'actualidad' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : setup_postdata($post); ?>
            <li class="has-text-weight-bold">
              <a href="<?php the_permalink(); ?>">
                <?php //the_post_thumbnail(); ?>
                <?php the_title(); ?>
              </a>
              <?php pp_setPostViews(get_the_ID()); //echo pp_getPostViews(get_the_ID());; ?>
            </li>
            <hr class="dashed">
        <?php endforeach; ?>

        </ul>
    </div>
<!-- wp_reset_postdata(); -->