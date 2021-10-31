<?php
function ae_import_files() {
    return array(
        array(
            'import_file_name'           => 'Landzai',
            //'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( LANDZAI_DEMO_FILES ) . 'home-1/data.xml',
            'import_widget_file_url'     => trailingslashit( LANDZAI_DEMO_FILES ) . 'home-1/widget.wie',
            'import_customizer_file_url' => trailingslashit( LANDZAI_DEMO_FILES ) . 'home-1/options.dat',
            'import_preview_image_url'   => trailingslashit( get_template_directory_uri() ).   'screenshot.jpg',
            'import_notice'              => __( 'All are set with one click demo import', 'landzai' ),
            'preview_url'                => 'http://unikforce.xyz/landzai',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'ae_import_files' );

// Before Import
function ae_clear_before_import() {
    global $wpdb;
    //delete posts
    $tables = ['commentmeta','comments','postmeta','posts','termmeta','terms','term_relationships','term_taxonomy'];

    foreach ( $tables as $table ) {
        $table  = $wpdb->prefix . $table;
        $wpdb->query( "TRUNCATE TABLE $table" );
    }
}
add_action( 'pt-ocdi/before_content_import', 'ae_clear_before_import' );

// After Import
function ae_after_import_setup($selected_import) {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );


    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
        )
    );

    // Assign front page and posts page (blog page).

    $front_page_id = get_page_by_title( 'Home 1' );

    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'ae_after_import_setup' );

//Personalize
function ae_plugin_page_setup( $default_settings ) {
    $default_settings['parent_slug'] = 'themes.php';
    $default_settings['page_title']  = esc_html__( 'Demo Importer' , 'landzai' );
    $default_settings['menu_title']  = esc_html__( 'Demo Importer' , 'landzai' );
    $default_settings['capability']  = 'import';
    $default_settings['menu_slug']   = 'ae-demo-importer';

    return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'ae_plugin_page_setup' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

function landzai_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes','landzai_mime_types');
