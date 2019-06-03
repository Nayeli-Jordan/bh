<?php 

/**
* Define paths to javascript, styles, theme and site.
**/
define( 'JSPATH', get_stylesheet_directory_uri() . '/js/' );
define( 'THEMEPATH', get_stylesheet_directory_uri() . '/' );
define( 'SITEURL', get_site_url() . '/' );


/*------------------------------------*\
	#SNIPPETS
\*------------------------------------*/
require_once( 'inc/pages.php' );
require_once( 'inc/post-types.php' );
/*require_once( 'inc/taxonomies.php' );*/

/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
* Enqueue frontend scripts and styles
**/
add_action( 'wp_enqueue_scripts', function(){
 
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(''), '2.1.1', true );
    wp_enqueue_script( 'cycle_js', JSPATH.'jquery.cycle2.js', array(), '', true );
    wp_enqueue_script( 'shuffle_js', JSPATH.'jquery.cycle2.shuffle.js', array(), '', true );
    wp_enqueue_script( 'easing_js', JSPATH.'jquery.easing.1.3.js', array(), '', true );
	wp_enqueue_script( 'bhs_functions', JSPATH.'functions.js', array(), '1.0', true );
 
	wp_localize_script( 'bhs_functions', 'siteUrl', SITEURL );
	wp_localize_script( 'bhs_functions', 'theme_path', THEMEPATH );
	
	// $is_home = is_front_page() ? "1" : "0";
	// wp_localize_script( 'rcc_functions', 'isHome', $is_home );
 
});

/**
* Configuraciones WP
*/

// Agregar css y js al administrador
function load_custom_files_wp_admin() {
        wp_register_style( 'bhs_admin_css', THEMEPATH . '/admin/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'bhs_admin_css' );

        wp_register_script( 'bhs_admin_js', THEMEPATH . 'admin/admin-script.js', false, '1.0.0' );
        wp_enqueue_script( 'bhs_admin_js' );        
}
add_action( 'admin_enqueue_scripts', 'load_custom_files_wp_admin' );

//Habilitar thumbnail en post
add_theme_support( 'post-thumbnails' ); 

//Habilitar menú (aparece en personalizar)
add_action('after_setup_theme', 'add_top_menu');
function add_top_menu(){
	register_nav_menu('top_menu',__('Top menu'));
}

//Delimitar número palabras excerpt
/*function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );*/


/**
* Optimización
*/

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/**
* SEO y Analitics
**/

//Código Analitics
// function add_google_analytics() {
//     echo '<script src="https://www.google-analytics.com/ga.js" type="text/javascript"></script>';
//     echo '<script type="text/javascript">';
//     echo 'var pageTracker = _gat._getTracker("UA-117075138-1");';
//     echo 'pageTracker._trackPageview();';
//     echo '</script>';
// }
// add_action('wp_footer', 'add_google_analytics');

/* Aplaza el análisis de JavaScript para una carga más rápida */
if(!is_admin()) {
    // Move all JS from header to footer
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}

/**
* SUPPORT WOOCOMMERCE
*/
/*add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}*/


/**
* CUSTOM FUNCTIONS
*/

/* Anuncio Inicial */
add_action( 'add_meta_boxes', 'add_custom_metabox' );
function add_custom_metabox(){
    add_meta_box( 'add_meta', 'Enlace Anuncio', 'display_add_atributos', 'add', 'advanced', 'default');
}

function display_add_atributos( $add ){
    $enlace   = esc_html( get_post_meta( $add->ID, 'add_enlace', true ) );
    $enlaceText   = esc_html( get_post_meta( $add->ID, 'add_enlaceText', true ) );
?>
    <table class="bhs-custum-fields">
        <tr>
            <th>
                <label for="add_enlace">Enlace Botón (URL)</label>
                <input type="text" id="add_enlace" name="add_enlace" placeholder="Texto Botón" value="<?php echo $enlace; ?>">
            </th>
            <th>
                <label for="add_enlaceText">Texto Botón</label>
                <input type="text" id="add_enlaceText" name="add_enlaceText" placeholder="URL" value="<?php echo $enlaceText; ?>">
            </th>
        </tr>
    </table>
<?php }

add_action( 'save_post', 'add_save_metas', 10, 2 );
function add_save_metas( $idadd, $add ){
    if ( $add->post_type == 'add' ){
        if ( isset( $_POST['add_enlace'] ) ){
            update_post_meta( $idadd, 'add_enlace', $_POST['add_enlace'] );
        }
        if ( isset( $_POST['add_enlaceText'] ) ){
            update_post_meta( $idadd, 'add_enlaceText', $_POST['add_enlaceText'] );
        }
    }
}