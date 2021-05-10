<?php

function cptui_register_my_taxes_bs_recipe_tags() {

/**
 * Taxonomy: recipe tags.
 */

$labels = [
    "name" => __( "recipe tags", "bootscore" ),
    "singular_name" => __( "recipe tag", "bootscore" ),
    "menu_name" => __( "Recipe tags", "bootscore" ),
    "all_items" => __( "All recipe tags", "bootscore" ),
    "edit_item" => __( "Edit recipe tag", "bootscore" ),
    "view_item" => __( "View recipe tag", "bootscore" ),
    "update_item" => __( "Update recipe tag name", "bootscore" ),
    "add_new_item" => __( "Add new recipe tag", "bootscore" ),
    "new_item_name" => __( "New recipe tag name", "bootscore" ),
    "parent_item" => __( "Parent recipe tag", "bootscore" ),
    "parent_item_colon" => __( "Parent recipe tag:", "bootscore" ),
    "search_items" => __( "Search recipe tags", "bootscore" ),
    "popular_items" => __( "Popular recipe tags", "bootscore" ),
    "separate_items_with_commas" => __( "Separate recipe tags with commas", "bootscore" ),
    "add_or_remove_items" => __( "Add or remove recipe tags", "bootscore" ),
    "choose_from_most_used" => __( "Choose from the most used recipe tags", "bootscore" ),
    "not_found" => __( "No recipe tags found", "bootscore" ),
    "no_terms" => __( "No recipe tags", "bootscore" ),
    "items_list_navigation" => __( "recipe tags list navigation", "bootscore" ),
    "items_list" => __( "recipe tags list", "bootscore" ),
    "back_to_items" => __( "Back to recipe tags", "bootscore" ),
];


$args = [
    "label" => __( "recipe tags", "bootscore" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'bs_recipe_tags', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "bs_recipe_tags",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    "show_in_graphql" => false,
];
register_taxonomy( "bs_recipe_tags", [ "bs_recipe" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_bs_recipe_tags' );
