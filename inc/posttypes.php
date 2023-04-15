<?php


if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function myclasses_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Classes', 'Post Type General Name', 'myclasses' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'myclasses' ),
		'menu_name'             => __( 'Classes', 'myclasses' ),
		'name_admin_bar'        => __( 'Class', 'myclasses' ),
		'archives'              => __( 'Archivo', 'myclasses' ),
		'attributes'            => __( 'Atributos', 'myclasses' ),
		'parent_item_colon'     => __( 'Class Padre', 'myclasses' ),
		'all_items'             => __( 'Todas Las Classes', 'myclasses' ),
		'add_new_item'          => __( 'Agregar Class', 'myclasses' ),
		'add_new'               => __( 'Agregar Class', 'myclasses' ),
		'new_item'              => __( 'Nueva Class', 'myclasses' ),
		'edit_item'             => __( 'Editar Class', 'myclasses' ),
		'update_item'           => __( 'Actualizar Class', 'myclasses' ),
		'view_item'             => __( 'Ver Class', 'myclasses' ),
		'view_items'            => __( 'Ver Classes', 'myclasses' ),
		'search_items'          => __( 'Buscar Class', 'myclasses' ),
		'not_found'             => __( 'No Encontrado', 'myclasses' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'myclasses' ),
		'featured_image'        => __( 'Imagen Destacada', 'myclasses' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'myclasses' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'myclasses' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'myclasses' ),
		'insert_into_item'      => __( 'Insertar en Class', 'myclasses' ),
		'uploaded_to_this_item' => __( 'Agregado en Class', 'myclasses' ),
		'items_list'            => __( 'Lista de Classes', 'myclasses' ),
		'items_list_navigation' => __( 'Navegación de Classes', 'myclasses' ),
		'filter_items_list'     => __( 'Filtrar Classes', 'myclasses' ),
	);
	$args = array(
		'label'                 => __( 'Class', 'myclasses' ),
		'description'           => __( 'Classes para el Sitio Web', 'myclasses' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'myclasses_clases', $args );

}
add_action( 'init', 'myclasses_clases_post_type', 0 );




 /* Agrega el post type de Chefs Instructores */
 function edc_posttype_chefs_instructores() {
	$labels = array(
		'name'                  => _x( 'Chefs / Instructores', 'edc' ),
		'singular_name'         => _x( 'Chef / Instructor',  'edc' ),
		'menu_name'             => _x( 'Chefs / Instructores', 'Admin Menu text', 'edc' ),
		'name_admin_bar'        => _x( 'Chefs / Instructores', 'Add New on Toolbar', 'edc' ),
		'add_new'               => __( 'Agregar ', 'edc' ),
		'add_new_item'          => __( 'Agregar Nuevo Chef', 'edc' ),
		'new_item'              => __( 'Nueva Chef', 'edc' ),
		'edit_item'             => __( 'Editar Chef', 'edc' ),
		'view_item'             => __( 'Ver Chef', 'edc' ),
		'all_items'             => __( 'Todos los Chef', 'edc' ),
		'search_items'          => __( 'Buscar Chefs / Instructores', 'edc' ),
		'parent_item_colon'     => __( 'Padre Chefs / Instructores:', 'edc' ),
		'not_found'             => __( 'No se encontraron Chefs.', 'edc' ),
		'not_found_in_trash'    => __( 'No se encontrar Chefs en la Papelera', 'edc' ),
		'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'edc' ),
		'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'edc' ),
		'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'edc' ),
		'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'edc' ),
		'archives'              => _x( 'Archivo de Chefs', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'edc' ),
		'insert_into_item'      => _x( 'Insertar en Chefs', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'edc' ),
		'uploaded_to_this_item' => _x( 'Cargadas En Chefs', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'edc' ),
		'filter_items_list'     => _x( 'Filtrar Lista de Chefs', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'edc' ),
		'items_list_navigation' => _x( 'Chefs navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'edc' ),
		'items_list'            => _x( 'Chefs lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'edc' ),
	);
 
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'chefs-instructores' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_icon'          => 'dashicons-admin-users',
		// true como paginas (pueden tener hijos), false como posts (no tienen hijos)
		'hierarchical'       => false,
		'menu_position'      => 7,
		'supports'           => array( 'title', 'editor',  'thumbnail' ),
		'show_in_rest'       => true,
		'rest_base'          => 'chefs-instructores'
	);
 
	register_post_type( 'Instructors', $args );
}
 
add_action( 'init', 'edc_posttype_chefs_instructores' );