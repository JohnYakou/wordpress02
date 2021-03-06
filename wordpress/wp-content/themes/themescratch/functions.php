<?php

// add_action est un hook (crochet) qui me permet d'utiliser la fonction prédéfinie widgets_init. Elle va me permettre de declarer des zones/widgets qui recevront ensuite du contenu sur mes pages
// A cette fonction widgets_init, je lui donne un nom personnalisé 'themescratch_init_sidebar
add_action('widgets_init', 'themescratch_init_sidebar');

// j'utilise ma fonction pour créer mes widgets
function themescratch_init_sidebar(){
    // declaration de ma page premiere zone/widgets, celle en haut à gauche
    register_sidebar( array(
        // Son nom, pour le retrouver le back-office de WP
        'name' => __('haut gauche', 'themescratch'),
        // son id que je devrai recevoir
        'id' => __('haut-gauche'),
        'description' => __('Zone en haut à gauche', 'themescratch')
        )
    );

    register_sidebar( array(
        'name' => __('haut droit', 'themescratch'),
        'id' => __('haut-droit'),
        'description' => __('Zone en haut à droite', 'themescratch')
        )
    );

    register_sidebar( array(
        'name' => __('entete', 'themescratch'),
        'id' => __('entete'),
        'description' => __('entete', 'themescratch')
        )
    );

    register_sidebar( array(
        'name' => __('bas gauche', 'themescratch'),
        'id' => __('bas-gauche'),
        'description' => __('Zone en bas à gauche', 'themescratch')
        )
    );

    register_sidebar( array(
        'name' => __('bas droit', 'themescratch'),
        'id' => __('bas-droit'),
        'description' => __('Zone en bas à droite', 'themescratch')
        )
    );
}