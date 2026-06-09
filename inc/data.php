<?php
/**
 * Données du portfolio : compétences, formation, expériences, projets.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

function prd_get_skills() {
    return array(
        array( 'name' => 'Linux',                    'desc' => 'Administration système, gestion des utilisateurs et des services.' ),
        array( 'name' => 'Serveurs Windows & Linux', 'desc' => 'Installation, configuration et maintenance de serveurs.' ),
        array( 'name' => 'Configuration réseau',     'desc' => 'Routage, firewall, DNS, mise en place d\'infrastructures.' ),
        array( 'name' => 'Scripts',                  'desc' => 'Automatisation en Bash et PHP CLI.' ),
        array( 'name' => 'MySQL',                    'desc' => 'Conception, requêtes et gestion de bases de données.' ),
        array( 'name' => 'HTML / CSS',               'desc' => 'Intégration web et mise en forme de sites statiques.' ),
    );
}

function prd_get_formation() {
    return array(
        array( 'date' => '2025 – 2026', 'title' => 'BTS SIO — 1ʳᵉ année',                 'desc' => 'Services Informatiques aux Organisations, Lycée Guy Mollet, Arras.' ),
        array( 'date' => 'Juin 2025',   'title' => 'Permis de conduire',                   'desc' => 'Obtention du permis B.' ),
        array( 'date' => '2024 – 2025', 'title' => 'BTS CIEL — 1ʳᵉ année',                 'desc' => 'Cybersécurité, Informatique, Électronique, Lycée Gustave Eiffel, Armentières.' ),
        array( 'date' => '2024',        'title' => 'Baccalauréat Système Numérique — opt. B', 'desc' => 'Audiovisuel, réseau et équipements domestiques — mention AB. Lycée Savary-Ferry, Arras.' ),
        array( 'date' => '2021 – 2022', 'title' => 'Seconde professionnelle',              'desc' => 'Transition numérique et énergétique, Lycée Savary-Ferry, Arras.' ),
    );
}

function prd_get_experiences() {
    return array(
        array( 'date' => '26 mai – 4 juillet 2025',     'title' => 'Conseil départemental du Pas-de-Calais', 'tagline' => 'Appel de clients, installation de matériel (service informatique).' ),
        array( 'date' => '29 janv. – 23 févr. 2024',    'title' => 'Préfecture d\'Arras',                    'tagline' => 'Installation Windows, mise en place d\'un réseau pour une salle de conférence.' ),
        array( 'date' => '25 sept. – 22 oct. 2023',     'title' => 'Pro&Cie',                                'tagline' => 'Réparation et dépannage de machines électroménagères.' ),
        array( 'date' => '8 mai – 2 juin 2023',         'title' => 'Axecibles',                              'tagline' => 'Installation Windows / Linux et résolution de problèmes internes.' ),
        array( 'date' => '21 nov. – 17 déc. 2022',      'title' => 'Itech Informatique et Technologies',     'tagline' => 'Configuration d\'un Qwartz avec l\'employeur.' ),
        array( 'date' => '6 juin – 2 juillet 2022',     'title' => 'Amipro Boréal Parc',                     'tagline' => 'Réparation de PC et installation Windows.' ),
        array( 'date' => '6 – 17 décembre 2021',        'title' => 'Inov-Agency',                            'tagline' => 'Première expérience — programmation HTML / CSS.' ),
    );
}

function prd_get_projects() {
    return array(
        array(
            'slug'     => 'brasserie',
            'title'    => 'Brasserie Terroir & Savoirs',
            'tagline'  => 'Site vitrine WordPress sur mesure pour une brasserie artisanale.',
            'year'     => '2026',
            'context'  => 'BTS SIO — projet personnel',
            'tags'     => array( 'WordPress', 'PHP', 'HTML/CSS', 'JavaScript', 'InfinityFree' ),
            'live_url' => 'https://rdacetbrasserie.free.nf',
            'url'      => 'projet-brasserie',
        ),
    );
}
