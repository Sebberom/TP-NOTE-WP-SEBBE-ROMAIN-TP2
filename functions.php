<?php
require_once get_template_directory() . '/includes/hooks/images.php';


function Randonee_CPT_Complete() {
    $labels = array(
        'name' => 'Randonnées',
        'singular_name' => 'Randonnées',
        'menu_name' => 'Randonnées',
        'name_admin_bar' => 'Randonnées',
        'add_new' => 'Ajouter Nouveau',
        'add_new_item' => 'Ajouter Nouvelle Randonnées',
        'new_item' => 'Nouvealle Randonnées',
        'edit_item' => 'Éditer Randonnées',
        'view_item' => 'Voir Randonnées',
        'all_items' => 'Toutes les Randonnées',
        'search_items' => 'Chercher Randonnées',
        'parent_item_colon' => 'Plat Randonnées:',
        'not_found' => 'Aucune Randonnées trouvé.',
        'not_found_in_trash' => 'Aucune Randonnées trouvé dans la corbeille.'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Un type de contenu personnalisé pour les Randonnées.',
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'randonnee'),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
    );
    register_post_type('randonnee', $args);
}
add_action('init', 'Randonee_CPT_Complete');


function randonnee_archive_styles() {
    if ( is_post_type_archive('randonnee') ) {
        wp_enqueue_style(
            'randonnee-card-style',
            get_template_directory_uri() . '/assets/css/randonnee-card.css',
            array(),
            '1.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'randonnee_archive_styles');

function Randonee_register_randonnee_taxonomy(){
    register_taxonomy(
        'difficulte',
        ['randonnee'],
        [
            'labels' => [ 'name' => 'Difficulté',
            'singular_name' => 'Difficulté' ],
            'rewrite' => ['slug' => 'difficulte'],
            'public' => true,
            'show_admin_column' => true,
            'hierarchical' => true,
            
        ]
    );
}
add_action('init', 'Randonee_register_randonnee_taxonomy');

?>