<?php 
/*
* Template Name: Template para Galerias
*/
get_header(); ?>

<main class="contenedor pagina seccion ">
    <div class="contenido-principal">
    <?php while (have_posts()) : the_post(); ?>
            <h1 class="text-center texto-primario"><?php the_title(); ?></h1>

            <?php
                //Obtiene la galeria de la página actual
                $galeria = get_post_gallery( get_the_ID(), false );
                //Obtiene los ids de las imagenes de la galeria
                $galeria_imagenes_ID = explode(',', $galeria['ids']); 
            ?>

            <ul class="galeria-imagenes">
                
            </ul>

        <?php endwhile; ?>
    </div>
 
</main>


<?php get_footer(); ?>