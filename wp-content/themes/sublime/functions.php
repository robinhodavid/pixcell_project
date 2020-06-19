<?php 
//Main Menu Create
if (function_exists('register_nav_menus')){
	register_nav_menus (array('mainmenu' => 'Menú principal'));
}

the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail( array(100,100) ); 

add_theme_support( 'post-thumbnails' );
  

//Compatibilidad con galerías a partir de WooCommerce 3.0>
add_action( 'after_setup_theme', 'yourtheme_setup' );
function yourtheme_setup() {
add_theme_support( 'wc-product-gallery-slider' );
}
/**
* Declare WooCommerce Support
*/
function oblique_woocommerce_support() {
add_theme_support( 'woocommerce' );
// add_theme_support( 'wc-product-gallery-zoom' );
   add_theme_support( 'wc-product-gallery-lightbox' );
   add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'oblique_woocommerce_support' );



//Aquí los regisros de los custom post type
// Register Custom Post Type
function main_banner() {

	$labels = array(
		'name'                  => _x( 'Banners', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Banner Principal', 'apk' ),
		'name_admin_bar'        => __( 'Post Type', 'apk' ),
		'archives'              => __( 'Items de Archivos', 'apk' ),
		'attributes'            => __( 'Atributos', 'apk' ),
		'parent_item_colon'     => __( 'artículo principal', 'apk' ),
		'all_items'             => __( 'Todos los items', 'apk' ),
		'add_new_item'          => __( 'Agregar nuevo item', 'apk' ),
		'add_new'               => __( 'Agregar Nuevo', 'apk' ),
		'new_item'              => __( 'Nuevo item', 'apk' ),
		'edit_item'             => __( 'Editar item', 'apk' ),
		'update_item'           => __( 'Actualizar Items', 'apk' ),
		'view_item'             => __( 'Vista del item', 'apk' ),
		'view_items'            => __( 'Vistas de los items', 'apk' ),
		'search_items'          => __( 'Buscar', 'apk' ),
		'not_found'             => __( 'No encontrado', 'apk' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'apk' ),
		'featured_image'        => __( 'Foto Principal', 'apk' ),
		'set_featured_image'    => __( 'Establecer imagen principal', 'apk' ),
		'remove_featured_image' => __( 'Remover foto principal', 'apk' ),
		'use_featured_image'    => __( 'Usar como foto principal', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Subida de este item', 'apk' ),
		'items_list'            => __( 'Lista de items', 'apk' ),
		'items_list_navigation' => __( 'items de lista de navegación', 'apk' ),
		'filter_items_list'     => __( 'Filtros de listas de items', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Banner', 'apk' ),
		'description'           => __( 'Banner principal', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
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
add_action( 'init', 'main_banner', 0 );


function small_banner_Ads() {

	$labels = array(
		'name'                  => _x( 'Smallbannerads', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Smallbannerads', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Small Ads', 'apk' ),
		'name_admin_bar'        => __( 'Post Type', 'apk' ),
		'archives'              => __( 'Items de Archivos', 'apk' ),
		'attributes'            => __( 'Atributos', 'apk' ),
		'parent_item_colon'     => __( 'artículo principal', 'apk' ),
		'all_items'             => __( 'Todos los items', 'apk' ),
		'add_new_item'          => __( 'Agregar nuevo item', 'apk' ),
		'add_new'               => __( 'Agregar Nuevo', 'apk' ),
		'new_item'              => __( 'Nuevo item', 'apk' ),
		'edit_item'             => __( 'Editar item', 'apk' ),
		'update_item'           => __( 'Actualizar Items', 'apk' ),
		'view_item'             => __( 'Vista del item', 'apk' ),
		'view_items'            => __( 'Vistas de los items', 'apk' ),
		'search_items'          => __( 'Buscar', 'apk' ),
		'not_found'             => __( 'No encontrado', 'apk' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'apk' ),
		'featured_image'        => __( 'Foto Principal', 'apk' ),
		'set_featured_image'    => __( 'Establecer imagen principal', 'apk' ),
		'remove_featured_image' => __( 'Remover foto principal', 'apk' ),
		'use_featured_image'    => __( 'Usar como foto principal', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Subida de este item', 'apk' ),
		'items_list'            => __( 'Lista de items', 'apk' ),
		'items_list_navigation' => __( 'items de lista de navegación', 'apk' ),
		'filter_items_list'     => __( 'Filtros de listas de items', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Small Ads', 'apk' ),
		'description'           => __( 'Banner para Small Ads', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Smallbannerads', $args );

}
add_action( 'init', 'small_banner_Ads', 0 );


function large_banner_Ads() {

	$labels = array(
		'name'                  => _x( 'Largebannerads', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Largebannerads', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Large Ads', 'apk' ),
		'name_admin_bar'        => __( 'Post Type', 'apk' ),
		'archives'              => __( 'Items de Archivos', 'apk' ),
		'attributes'            => __( 'Atributos', 'apk' ),
		'parent_item_colon'     => __( 'artículo principal', 'apk' ),
		'all_items'             => __( 'Todos los items', 'apk' ),
		'add_new_item'          => __( 'Agregar nuevo item', 'apk' ),
		'add_new'               => __( 'Agregar Nuevo', 'apk' ),
		'new_item'              => __( 'Nuevo item', 'apk' ),
		'edit_item'             => __( 'Editar item', 'apk' ),
		'update_item'           => __( 'Actualizar Items', 'apk' ),
		'view_item'             => __( 'Vista del item', 'apk' ),
		'view_items'            => __( 'Vistas de los items', 'apk' ),
		'search_items'          => __( 'Buscar', 'apk' ),
		'not_found'             => __( 'No encontrado', 'apk' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'apk' ),
		'featured_image'        => __( 'Foto Principal', 'apk' ),
		'set_featured_image'    => __( 'Establecer imagen principal', 'apk' ),
		'remove_featured_image' => __( 'Remover foto principal', 'apk' ),
		'use_featured_image'    => __( 'Usar como foto principal', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Subida de este item', 'apk' ),
		'items_list'            => __( 'Lista de items', 'apk' ),
		'items_list_navigation' => __( 'items de lista de navegación', 'apk' ),
		'filter_items_list'     => __( 'Filtros de listas de items', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Largebannerads', 'apk' ),
		'description'           => __( 'Banner para Large Ads', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( '' ),
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
	register_post_type( 'Largebannerads', $args );

}
add_action( 'init', 'large_banner_Ads', 0 );

// Register Custom Post Type - testimonials
function testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Testimonials', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Testimonios', 'apk' ),
		'name_admin_bar'        => __( 'Post Type', 'apk' ),
		'archives'              => __( 'Items de Archivos', 'apk' ),
		'attributes'            => __( 'Atributos', 'apk' ),
		'parent_item_colon'     => __( 'artículo principal', 'apk' ),
		'all_items'             => __( 'Todos los items', 'apk' ),
		'add_new_item'          => __( 'Agregar nuevo item', 'apk' ),
		'add_new'               => __( 'Agregar Nuevo', 'apk' ),
		'new_item'              => __( 'Nuevo item', 'apk' ),
		'edit_item'             => __( 'Editar item', 'apk' ),
		'update_item'           => __( 'Actualizar Items', 'apk' ),
		'view_item'             => __( 'Vista del item', 'apk' ),
		'view_items'            => __( 'Vistas de los items', 'apk' ),
		'search_items'          => __( 'Buscar', 'apk' ),
		'not_found'             => __( 'No encontrado', 'apk' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'apk' ),
		'featured_image'        => __( 'Foto Principal', 'apk' ),
		'set_featured_image'    => __( 'Establecer imagen principal', 'apk' ),
		'remove_featured_image' => __( 'Remover foto principal', 'apk' ),
		'use_featured_image'    => __( 'Usar como foto principal', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Subida de este item', 'apk' ),
		'items_list'            => __( 'Lista de items', 'apk' ),
		'items_list_navigation' => __( 'items de lista de navegación', 'apk' ),
		'filter_items_list'     => __( 'Filtros de listas de items', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'apk' ),
		'description'           => __( 'Testimonios', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Testimonials', $args );

}
add_action( 'init', 'testimonials', 0 );


// Register Custom Post Type
function marcas() {

	$labels = array(
		'name'                  => _x( 'Marcas', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Marcas', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Marcas', 'apk' ),
		'name_admin_bar'        => __( 'Post Type', 'apk' ),
		'archives'              => __( 'Items de Archivos', 'apk' ),
		'attributes'            => __( 'Atributos', 'apk' ),
		'parent_item_colon'     => __( 'artículo principal', 'apk' ),
		'all_items'             => __( 'Todos los items', 'apk' ),
		'add_new_item'          => __( 'Agregar nuevo item', 'apk' ),
		'add_new'               => __( 'Agregar Nuevo', 'apk' ),
		'new_item'              => __( 'Nuevo item', 'apk' ),
		'edit_item'             => __( 'Editar item', 'apk' ),
		'update_item'           => __( 'Actualizar Items', 'apk' ),
		'view_item'             => __( 'Vista del item', 'apk' ),
		'view_items'            => __( 'Vistas de los items', 'apk' ),
		'search_items'          => __( 'Buscar', 'apk' ),
		'not_found'             => __( 'No encontrado', 'apk' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'apk' ),
		'featured_image'        => __( 'Foto Principal', 'apk' ),
		'set_featured_image'    => __( 'Establecer imagen principal', 'apk' ),
		'remove_featured_image' => __( 'Remover foto principal', 'apk' ),
		'use_featured_image'    => __( 'Usar como foto principal', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Subida de este item', 'apk' ),
		'items_list'            => __( 'Lista de items', 'apk' ),
		'items_list_navigation' => __( 'items de lista de navegación', 'apk' ),
		'filter_items_list'     => __( 'Filtros de listas de items', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Marcas', 'apk' ),
		'description'           => __( 'Carrusel de Marcas', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-pressthis',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Marcas', $args );

}
add_action( 'init', 'marcas', 0 );

function theme_add_menuclass( $classes, $args ) {
    if ( $args->theme_location == 'mainmenu' ) {
        return preg_replace( '/<li /i', '<li class="hassubs active"', $classes );
    }
    return $classes;
}
add_filter( 'wp_nav_menu_items', 'theme_add_menuclass', 10, 2 );