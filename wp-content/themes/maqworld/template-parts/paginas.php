<?php while (have_posts()) : the_post(); ?>
    <h1 class="text-center texto-primario"><?php the_title(); ?></h1>

    <?php
    if (has_post_thumbnail()) :
        the_post_thumbnail('blog', array('class' => 'imagen-destacada'));
    endif;
    ?>

    <?php //Revisa si el custom post types es plataformas
        if(get_post_type() === 'maqworld_plataformas'){
            $marca = get_field('marca');
            $precio = get_field('precio');
    ?>
            <p class="info-plataforma"> <?php echo $marca . " - " . $precio ?> </p>

    <?php } ?>

    <?php the_content(); ?>
<?php endwhile; ?>
