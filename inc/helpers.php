<?php
/**
 * Fonctions utilitaires (URLs assets, pages, menu de secours)
 * et compatibilité des Page Templates déplacés dans /templates.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ------------------------------------------------------------
 * Helpers
 * ------------------------------------------------------------ */
function prd_img( $name ) { return esc_url( get_template_directory_uri() . '/assets/img/' . $name ); }
function prd_pdf( $name ) { return esc_url( get_template_directory_uri() . '/assets/pdf/' . $name ); }

/**
 * URL d'une page à partir de son slug. Si la page n'existe pas encore dans
 * l'admin WP, on retombe sur /?page_name=slug qui redirigera dès création.
 */
function prd_page_url( $slug ) {
    $page = get_page_by_path( $slug );
    if ( $page ) {
        return get_permalink( $page );
    }
    return esc_url( home_url( '/?page_name=' . $slug ) );
}

/* ------------------------------------------------------------
 * Menu fallback
 * ------------------------------------------------------------ */
function prd_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url( home_url( '/' ) )         . '">Accueil</a></li>';
    echo '<li><a href="' . prd_page_url( 'cv' )               . '">CV</a></li>';
    echo '<li><a href="' . prd_page_url( 'lettre-motivation' ). '">Lettre</a></li>';
    echo '<li><a href="' . prd_page_url( 'projets' )          . '">Projets</a></li>';
    echo '<li><a href="' . prd_page_url( 'veille' )           . '">Veille</a></li>';
    echo '<li><a href="' . prd_page_url( 'contact' )          . '">Contact</a></li>';
    echo '</ul>';
}

/* ------------------------------------------------------------
 * Compatibilité Page Templates déplacés vers /templates
 *
 * Les pages déjà assignées en base stockent l'ancien chemin
 * (ex. « template-cv.php »). Après déplacement dans /templates,
 * on remappe ce chemin pour ne pas perdre l'association de page.
 * ------------------------------------------------------------ */
function prd_remap_legacy_page_template( $template ) {
    if ( $template && file_exists( $template ) ) {
        return $template;
    }

    $slug = get_page_template_slug( get_queried_object_id() );
    if ( $slug && 'default' !== $slug && 0 === validate_file( $slug ) ) {
        $candidate = locate_template( 'templates/' . basename( $slug ) );
        if ( $candidate ) {
            return $candidate;
        }
    }

    return $template;
}
add_filter( 'page_template', 'prd_remap_legacy_page_template' );
