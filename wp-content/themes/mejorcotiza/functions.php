<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );
the_post_thumbnail( array(100,100) ); 


function my_theme_setup() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );



// Register Custom Post Type
function wp_proveedores() {

	$labels = array(
		'name'                  => _x( 'Proveedores', 'Post Type General Name', 'mejor_cotiza' ),
		'singular_name'         => _x( 'Proveedor', 'Post Type Singular Name', 'mejor_cotiza' ),
		'menu_name'             => __( 'Proveedores', 'mejor_cotiza' ),
		'name_admin_bar'        => __( 'Post Type', 'mejor_cotiza' ),
		'archives'              => __( 'Archivo', 'mejor_cotiza' ),
		'attributes'            => __( 'Atributos', 'mejor_cotiza' ),
		'parent_item_colon'     => __( 'Artículo principal', 'mejor_cotiza' ),
		'all_items'             => __( 'Todos los artículos', 'mejor_cotiza' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'mejor_cotiza' ),
		'add_new'               => __( 'Añadir nuevo', 'mejor_cotiza' ),
		'new_item'              => __( 'Nuevo artículo', 'mejor_cotiza' ),
		'edit_item'             => __( 'Editar elemento', 'mejor_cotiza' ),
		'update_item'           => __( 'Actualizar artículo', 'mejor_cotiza' ),
		'view_item'             => __( 'Ver ítem', 'mejor_cotiza' ),
		'view_items'            => __( 'Ver artículos', 'mejor_cotiza' ),
		'search_items'          => __( 'Buscar artículo', 'mejor_cotiza' ),
		'not_found'             => __( 'Extraviado', 'mejor_cotiza' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'mejor_cotiza' ),
		'featured_image'        => __( 'Foto principal', 'mejor_cotiza' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'mejor_cotiza' ),
		'remove_featured_image' => __( 'Remove featured image', 'mejor_cotiza' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'mejor_cotiza' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'mejor_cotiza' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'mejor_cotiza' ),
		'items_list'            => __( 'Lista de artículos', 'mejor_cotiza' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'mejor_cotiza' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'mejor_cotiza' ),
	);
	$args = array(
		'label'                 => __( 'Proveedor', 'mejor_cotiza' ),
		'description'           => __( 'Post Type Description', 'mejor_cotiza' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Proveedores', $args );

}
add_action( 'init', 'wp_proveedores', 0 );

// Register Custom Post Type
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner', 'Post Type General Name', 'mejor_cotiza' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'mejor_cotiza' ),
		'menu_name'             => __( 'Banner', 'mejor_cotiza' ),
		'name_admin_bar'        => __( 'Post Type', 'mejor_cotiza' ),
		'archives'              => __( 'Archivo', 'mejor_cotiza' ),
		'attributes'            => __( 'Atributos', 'mejor_cotiza' ),
		'parent_item_colon'     => __( 'Artículo principal', 'mejor_cotiza' ),
		'all_items'             => __( 'Todos los artículos', 'mejor_cotiza' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'mejor_cotiza' ),
		'add_new'               => __( 'Añadir nuevo', 'mejor_cotiza' ),
		'new_item'              => __( 'Nuevo artículo', 'mejor_cotiza' ),
		'edit_item'             => __( 'Editar elemento', 'mejor_cotiza' ),
		'update_item'           => __( 'Actualizar artículo', 'mejor_cotiza' ),
		'view_item'             => __( 'Ver ítem', 'mejor_cotiza' ),
		'view_items'            => __( 'Ver artículos', 'mejor_cotiza' ),
		'search_items'          => __( 'Buscar artículo', 'mejor_cotiza' ),
		'not_found'             => __( 'Extraviado', 'mejor_cotiza' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'mejor_cotiza' ),
		'featured_image'        => __( 'Foto principal', 'mejor_cotiza' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'mejor_cotiza' ),
		'remove_featured_image' => __( 'Remove featured image', 'mejor_cotiza' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'mejor_cotiza' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'mejor_cotiza' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'mejor_cotiza' ),
		'items_list'            => __( 'Lista de artículos', 'mejor_cotiza' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'mejor_cotiza' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'mejor_cotiza' ),
	);
	$args = array(
		'label'                 => __( 'Banner', 'mejor_cotiza' ),
		'description'           => __( 'Post Type Description', 'mejor_cotiza' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );




// Register Custom Post Type
function team() {

	$labels = array(
		'name'                  => _x( 'Equipo', 'Post Type General Name', 'mejor_cotiza' ),
		'singular_name'         => _x( 'Equipo', 'Post Type Singular Name', 'mejor_cotiza' ),
		'menu_name'             => __( 'Equipo', 'mejor_cotiza' ),
		'name_admin_bar'        => __( 'Post Type', 'mejor_cotiza' ),
		'archives'              => __( 'Archivo', 'mejor_cotiza' ),
		'attributes'            => __( 'Atributos', 'mejor_cotiza' ),
		'parent_item_colon'     => __( 'Artículo principal', 'mejor_cotiza' ),
		'all_items'             => __( 'Todos los artículos', 'mejor_cotiza' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'mejor_cotiza' ),
		'add_new'               => __( 'Añadir nuevo', 'mejor_cotiza' ),
		'new_item'              => __( 'Nuevo artículo', 'mejor_cotiza' ),
		'edit_item'             => __( 'Editar elemento', 'mejor_cotiza' ),
		'update_item'           => __( 'Actualizar artículo', 'mejor_cotiza' ),
		'view_item'             => __( 'Ver ítem', 'mejor_cotiza' ),
		'view_items'            => __( 'Ver artículos', 'mejor_cotiza' ),
		'search_items'          => __( 'Buscar artículo', 'mejor_cotiza' ),
		'not_found'             => __( 'Extraviado', 'mejor_cotiza' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'mejor_cotiza' ),
		'featured_image'        => __( 'Foto principal', 'mejor_cotiza' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'mejor_cotiza' ),
		'remove_featured_image' => __( 'Remove featured image', 'mejor_cotiza' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'mejor_cotiza' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'mejor_cotiza' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'mejor_cotiza' ),
		'items_list'            => __( 'Lista de artículos', 'mejor_cotiza' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'mejor_cotiza' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'mejor_cotiza' ),
	);
	$args = array(
		'label'                 => __( 'Equipo', 'mejor_cotiza' ),
		'description'           => __( 'Equipo mejor contiza', 'mejor_cotiza' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Equipo', $args );

}
add_action( 'init', 'team', 0 );



function bidding() {

	$labels = array(
		'name'                  => _x( 'Ofertas', 'Post Type General Name', 'mejor_cotiza' ),
		'singular_name'         => _x( 'Ofertas', 'Post Type Singular Name', 'mejor_cotiza' ),
		'menu_name'             => __( 'Ofertas', 'mejor_cotiza' ),
		'name_admin_bar'        => __( 'Post Type', 'mejor_cotiza' ),
		'archives'              => __( 'Archivo', 'mejor_cotiza' ),
		'attributes'            => __( 'Atributos', 'mejor_cotiza' ),
		'parent_item_colon'     => __( 'Artículo principal', 'mejor_cotiza' ),
		'all_items'             => __( 'Todos los artículos', 'mejor_cotiza' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'mejor_cotiza' ),
		'add_new'               => __( 'Añadir nuevo', 'mejor_cotiza' ),
		'new_item'              => __( 'Nuevo artículo', 'mejor_cotiza' ),
		'edit_item'             => __( 'Editar elemento', 'mejor_cotiza' ),
		'update_item'           => __( 'Actualizar artículo', 'mejor_cotiza' ),
		'view_item'             => __( 'Ver ítem', 'mejor_cotiza' ),
		'view_items'            => __( 'Ver artículos', 'mejor_cotiza' ),
		'search_items'          => __( 'Buscar artículo', 'mejor_cotiza' ),
		'not_found'             => __( 'Extraviado', 'mejor_cotiza' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'mejor_cotiza' ),
		'featured_image'        => __( 'Foto principal', 'mejor_cotiza' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'mejor_cotiza' ),
		'remove_featured_image' => __( 'Remove featured image', 'mejor_cotiza' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'mejor_cotiza' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'mejor_cotiza' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'mejor_cotiza' ),
		'items_list'            => __( 'Lista de artículos', 'mejor_cotiza' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'mejor_cotiza' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'mejor_cotiza' ),
	);
	$args = array(
		'label'                 => __( 'Ofertas', 'mejor_cotiza' ),
		'description'           => __( 'Ofertas mejor contiza', 'mejor_cotiza' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Ofertas', $args );

}
add_action( 'init', 'bidding', 0 );


// Register Custom Post Type
function Banner_materials() {

	$labels = array(
		'name'                  => _x( 'Banner materiales', 'Post Type General Name', 'mejor_cotiza' ),
		'singular_name'         => _x( 'Banner materiales', 'Post Type Singular Name', 'mejor_cotiza' ),
		'menu_name'             => __( 'Banner Materiales', 'mejor_cotiza' ),
		'name_admin_bar'        => __( 'Post Type', 'mejor_cotiza' ),
		'archives'              => __( 'Archivo', 'mejor_cotiza' ),
		'attributes'            => __( 'Atributos', 'mejor_cotiza' ),
		'parent_item_colon'     => __( 'Artículo principal', 'mejor_cotiza' ),
		'all_items'             => __( 'Todos los artículos', 'mejor_cotiza' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'mejor_cotiza' ),
		'add_new'               => __( 'Añadir nuevo', 'mejor_cotiza' ),
		'new_item'              => __( 'Nuevo artículo', 'mejor_cotiza' ),
		'edit_item'             => __( 'Editar elemento', 'mejor_cotiza' ),
		'update_item'           => __( 'Actualizar artículo', 'mejor_cotiza' ),
		'view_item'             => __( 'Ver ítem', 'mejor_cotiza' ),
		'view_items'            => __( 'Ver artículos', 'mejor_cotiza' ),
		'search_items'          => __( 'Buscar artículo', 'mejor_cotiza' ),
		'not_found'             => __( 'Extraviado', 'mejor_cotiza' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'mejor_cotiza' ),
		'featured_image'        => __( 'Foto principal', 'mejor_cotiza' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'mejor_cotiza' ),
		'remove_featured_image' => __( 'Remove featured image', 'mejor_cotiza' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'mejor_cotiza' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'mejor_cotiza' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'mejor_cotiza' ),
		'items_list'            => __( 'Lista de artículos', 'mejor_cotiza' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'mejor_cotiza' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'mejor_cotiza' ),
	);
	$args = array(
		'label'                 => __( 'Banner materiales', 'mejor_cotiza' ),
		'description'           => __( 'Post Type Description', 'mejor_cotiza' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner_materials', $args );

}
add_action( 'init', 'Banner_materials', 0 );


function distributor() {

	$labels = array(
		'name'                  => _x( 'Distribuidores', 'Post Type General Name', 'mejor_cotiza' ),
		'singular_name'         => _x( 'Distribuidores', 'Post Type Singular Name', 'mejor_cotiza' ),
		'menu_name'             => __( 'Distribuidores', 'mejor_cotiza' ),
		'name_admin_bar'        => __( 'Post Type', 'mejor_cotiza' ),
		'archives'              => __( 'Archivo', 'mejor_cotiza' ),
		'attributes'            => __( 'Atributos', 'mejor_cotiza' ),
		'parent_item_colon'     => __( 'Artículo principal', 'mejor_cotiza' ),
		'all_items'             => __( 'Todos los artículos', 'mejor_cotiza' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'mejor_cotiza' ),
		'add_new'               => __( 'Añadir nuevo', 'mejor_cotiza' ),
		'new_item'              => __( 'Nuevo artículo', 'mejor_cotiza' ),
		'edit_item'             => __( 'Editar elemento', 'mejor_cotiza' ),
		'update_item'           => __( 'Actualizar artículo', 'mejor_cotiza' ),
		'view_item'             => __( 'Ver ítem', 'mejor_cotiza' ),
		'view_items'            => __( 'Ver artículos', 'mejor_cotiza' ),
		'search_items'          => __( 'Buscar artículo', 'mejor_cotiza' ),
		'not_found'             => __( 'Extraviado', 'mejor_cotiza' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'mejor_cotiza' ),
		'featured_image'        => __( 'Foto principal', 'mejor_cotiza' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'mejor_cotiza' ),
		'remove_featured_image' => __( 'Remove featured image', 'mejor_cotiza' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'mejor_cotiza' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'mejor_cotiza' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'mejor_cotiza' ),
		'items_list'            => __( 'Lista de artículos', 'mejor_cotiza' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'mejor_cotiza' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'mejor_cotiza' ),
	);
	$args = array(
		'label'                 => __( 'Distribuidores', 'mejor_cotiza' ),
		'description'           => __( 'Distribuidores mejor contiza', 'mejor_cotiza' ),
		'labels'                => $labels,
		'supports'              => array( 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'distributor', $args );

}
add_action( 'init', 'distributor', 0 );


function professionals() {

	$labels = array(
		'name'                  => _x( 'Profesionales', 'Post Type General Name', 'mejor_cotiza' ),
		'singular_name'         => _x( 'Profesionales', 'Post Type Singular Name', 'mejor_cotiza' ),
		'menu_name'             => __( 'Profesionales', 'mejor_cotiza' ),
		'name_admin_bar'        => __( 'Post Type', 'mejor_cotiza' ),
		'archives'              => __( 'Archivo', 'mejor_cotiza' ),
		'attributes'            => __( 'Atributos', 'mejor_cotiza' ),
		'parent_item_colon'     => __( 'Artículo principal', 'mejor_cotiza' ),
		'all_items'             => __( 'Todos los artículos', 'mejor_cotiza' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'mejor_cotiza' ),
		'add_new'               => __( 'Añadir nuevo', 'mejor_cotiza' ),
		'new_item'              => __( 'Nuevo artículo', 'mejor_cotiza' ),
		'edit_item'             => __( 'Editar elemento', 'mejor_cotiza' ),
		'update_item'           => __( 'Actualizar artículo', 'mejor_cotiza' ),
		'view_item'             => __( 'Ver ítem', 'mejor_cotiza' ),
		'view_items'            => __( 'Ver artículos', 'mejor_cotiza' ),
		'search_items'          => __( 'Buscar artículo', 'mejor_cotiza' ),
		'not_found'             => __( 'Extraviado', 'mejor_cotiza' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'mejor_cotiza' ),
		'featured_image'        => __( 'Foto principal', 'mejor_cotiza' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'mejor_cotiza' ),
		'remove_featured_image' => __( 'Remove featured image', 'mejor_cotiza' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'mejor_cotiza' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'mejor_cotiza' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'mejor_cotiza' ),
		'items_list'            => __( 'Lista de artículos', 'mejor_cotiza' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'mejor_cotiza' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'mejor_cotiza' ),
	);
	$args = array(
		'label'                 => __( 'Profesionales', 'mejor_cotiza' ),
		'description'           => __( 'Profesionales mejor contiza', 'mejor_cotiza' ),
		'labels'                => $labels,
		'supports'              => array( 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'professionals', $args );

}
add_action( 'init', 'professionals', 0 );


function Banner_mejor() {

	$labels = array(
		'name'                  => _x( 'Banner mejor', 'Post Type General Name', 'mejor_cotiza' ),
		'singular_name'         => _x( 'Banner mejor', 'Post Type Singular Name', 'mejor_cotiza' ),
		'menu_name'             => __( 'Banner mejor', 'mejor_cotiza' ),
		'name_admin_bar'        => __( 'Post Type', 'mejor_cotiza' ),
		'archives'              => __( 'Archivo', 'mejor_cotiza' ),
		'attributes'            => __( 'Atributos', 'mejor_cotiza' ),
		'parent_item_colon'     => __( 'Artículo principal', 'mejor_cotiza' ),
		'all_items'             => __( 'Todos los artículos', 'mejor_cotiza' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'mejor_cotiza' ),
		'add_new'               => __( 'Añadir nuevo', 'mejor_cotiza' ),
		'new_item'              => __( 'Nuevo artículo', 'mejor_cotiza' ),
		'edit_item'             => __( 'Editar elemento', 'mejor_cotiza' ),
		'update_item'           => __( 'Actualizar artículo', 'mejor_cotiza' ),
		'view_item'             => __( 'Ver ítem', 'mejor_cotiza' ),
		'view_items'            => __( 'Ver artículos', 'mejor_cotiza' ),
		'search_items'          => __( 'Buscar artículo', 'mejor_cotiza' ),
		'not_found'             => __( 'Extraviado', 'mejor_cotiza' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'mejor_cotiza' ),
		'featured_image'        => __( 'Foto principal', 'mejor_cotiza' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'mejor_cotiza' ),
		'remove_featured_image' => __( 'Remove featured image', 'mejor_cotiza' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'mejor_cotiza' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'mejor_cotiza' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'mejor_cotiza' ),
		'items_list'            => __( 'Lista de artículos', 'mejor_cotiza' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'mejor_cotiza' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'mejor_cotiza' ),
	);
	$args = array(
		'label'                 => __( 'Banner mejor', 'mejor_cotiza' ),
		'description'           => __( 'Post Type Description', 'mejor_cotiza' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner_mejor', $args );

}
add_action( 'init', 'Banner_mejor', 0 );