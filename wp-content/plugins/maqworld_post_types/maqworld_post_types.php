<?php
/*
    Plugin Name: MaqWorld - Post Types
    Plugin URI:
    Description: Añade Plataformas Elevadoras en la web
    Version: 1.0.0
    Author: Javier García Sánchez
    Author URI: https://www.linkedin.com/in/javigarciasanchez/
    Text Domain: maqworld
*/

if(!defined('ABSPATH')) die(); //Bloquea la entrada si alguien quiere ver el contenido del plugin insertando URL

// Registrar Custom Post Type
function maqworld_plataformas_post_type() {

	$labels = array(
		'name'                  => _x( 'plataformas', 'Post Type General Name', 'maqworld' ),
		'singular_name'         => _x( 'Plataforma', 'Post Type Singular Name', 'maqworld' ),
		'menu_name'             => __( 'plataformas', 'maqworld' ),
		'name_admin_bar'        => __( 'Plataforma', 'maqworld' ),
		'archives'              => __( 'Archivo', 'maqworld' ),
		'attributes'            => __( 'Atributos', 'maqworld' ),
		'parent_item_colon'     => __( 'Plataforma Padre', 'maqworld' ),
		'all_items'             => __( 'Todas Las plataformas', 'maqworld' ),
		'add_new_item'          => __( 'Agregar Plataforma', 'maqworld' ),
		'add_new'               => __( 'Agregar Plataforma', 'maqworld' ),
		'new_item'              => __( 'Nueva Plataforma', 'maqworld' ),
		'edit_item'             => __( 'Editar Plataforma', 'maqworld' ),
		'update_item'           => __( 'Actualizar Plataforma', 'maqworld' ),
		'view_item'             => __( 'Ver Plataforma', 'maqworld' ),
		'view_items'            => __( 'Ver plataformas', 'maqworld' ),
		'search_items'          => __( 'Buscar Plataforma', 'maqworld' ),
		'not_found'             => __( 'No Encontrado', 'maqworld' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'maqworld' ),
		'featured_image'        => __( 'Imagen Destacada', 'maqworld' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'maqworld' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'maqworld' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'maqworld' ),
		'insert_into_item'      => __( 'Insertar en Plataforma', 'maqworld' ),
		'uploaded_to_this_item' => __( 'Agregado en Plataforma', 'maqworld' ),
		'items_list'            => __( 'Lista de plataformas', 'maqworld' ),
		'items_list_navigation' => __( 'Navegación de plataformas', 'maqworld' ),
		'filter_items_list'     => __( 'Filtrar plataformas', 'maqworld' ),
	);
	$args = array(
		'label'                 => __( 'Plataforma', 'maqworld' ),
		'description'           => __( 'plataformas para el Sitio Web', 'maqworld' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'maqworld_plataformas', $args );

}
add_action( 'init', 'maqworld_plataformas_post_type', 0 );