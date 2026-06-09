<?php
/**
 * Portfolio Romain Dacet — functions.php
 *
 * Point d'entrée du thème : charge les modules situés dans /inc.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

$prd_includes = array(
    '/inc/setup.php',   // Configuration du thème + assets
    '/inc/helpers.php', // Fonctions utilitaires + compat templates
    '/inc/data.php',    // Données (compétences, formation, projets…)
);

foreach ( $prd_includes as $prd_file ) {
    require_once get_template_directory() . $prd_file;
}
unset( $prd_file );
