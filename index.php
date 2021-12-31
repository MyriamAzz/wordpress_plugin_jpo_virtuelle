<?php
/*
Plugin Name: JPO Virtuelle
Description: Plugin test pour les jpo virtuelle 
Author: Myriam Azzimani
Version: 1.0
GitHub Plugin URI: https://github.com/MyriamAzz/wordpress_plugin_jpo_virtuelle.git

*/

function cptui_register_my_cpts_jpo() {

    /**
     * Création du Custom Post Type: JPO.
     */
    
    
    $labels = [
        "name" => __( "JPO", "custom-post-type-ui" ),
        "singular_name" => __( "JPO", "custom-post-type-ui" ),
        "menu_name" => __( "JPO", "custom-post-type-ui" ),
        "all_items" => __( "les Associations", "custom-post-type-ui" ),
        "add_new" => __( "Ajouter un nouveau", "custom-post-type-ui" ),
        "add_new_item" => __( "Ajout d'une association", "custom-post-type-ui" ),
    ];
    
    $args = [
        "label" => __( "JPO", "custom-post-type-ui" ),
        "labels" => $labels,
        'menu_icon' => 'dashicons-groups',
        "description" => "les email ayant participé au jpo virtuelle .",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "jpo", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title"],
        "show_in_graphql" => false,
    ];
    
    register_post_type( "jpo", $args );
    }
    
    add_action( 'init', 'cptui_register_my_cpts_jpo' );
    
    