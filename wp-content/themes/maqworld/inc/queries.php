<?php

function maqworld_lista_plataformas() { ?>
    <ul class="lista-plataformas">
        <?php 
            $args = array(
                'post_type' => 'maqworld_plataformas',
                'posts_per_page' => 10,
            );
            $plataformas = new WP_Query($args);
            while( $plataformas->have_posts() ): $plataformas->the_post();
        ?>

        <li class="plataforma card">
            <?php the_post_thumbnail('square'); ?>
            <div class="contenido">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p><?php the_field('marca'); ?> - <?php the_field('precio'); ?>€</p>
                
            </div>
        </li>

        <?php endwhile; wp_reset_postdata(); ?> 


    </ul>


<?php
}