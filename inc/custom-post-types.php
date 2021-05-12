<?php
function cptui_register_my_cpts_bs_recipe() {

/**
 * Post Type: recipes.
 */

$labels = [
    "name" => __( "recipes", "bootscore" ),
    "singular_name" => __( "recipe", "bootscore" ),
    "menu_name" => __( "Recipes", "bootscore" ),
    "all_items" => __( "All recipes", "bootscore" ),
    "add_new" => __( "Add new", "bootscore" ),
    "add_new_item" => __( "Add new recipe", "bootscore" ),
    "edit_item" => __( "Edit recipe", "bootscore" ),
    "new_item" => __( "New recipe", "bootscore" ),
    "view_item" => __( "View recipe", "bootscore" ),
    "view_items" => __( "View recipes", "bootscore" ),
    "search_items" => __( "Search recipes", "bootscore" ),
    "not_found" => __( "No recipes found", "bootscore" ),
    "not_found_in_trash" => __( "No recipes found in trash", "bootscore" ),
    "parent" => __( "Parent recipe:", "bootscore" ),
    "featured_image" => __( "Featured image for this recipe", "bootscore" ),
    "set_featured_image" => __( "Set featured image for this recipe", "bootscore" ),
    "remove_featured_image" => __( "Remove featured image for this recipe", "bootscore" ),
    "use_featured_image" => __( "Use as featured image for this recipe", "bootscore" ),
    "archives" => __( "recipe archives", "bootscore" ),
    "insert_into_item" => __( "Insert into recipe", "bootscore" ),
    "uploaded_to_this_item" => __( "Upload to this recipe", "bootscore" ),
    "filter_items_list" => __( "Filter recipes list", "bootscore" ),
    "items_list_navigation" => __( "recipes list navigation", "bootscore" ),
    "items_list" => __( "recipes list", "bootscore" ),
    "attributes" => __( "recipes attributes", "bootscore" ),
    "name_admin_bar" => __( "recipe", "bootscore" ),
    "item_published" => __( "recipe published", "bootscore" ),
    "item_published_privately" => __( "recipe published privately.", "bootscore" ),
    "item_reverted_to_draft" => __( "recipe reverted to draft.", "bootscore" ),
    "item_scheduled" => __( "recipe scheduled", "bootscore" ),
    "item_updated" => __( "recipe updated.", "bootscore" ),
    "parent_item_colon" => __( "Parent recipe:", "bootscore" ),
];

$args = [
    "label" => __( "recipes", "bootscore" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "bs_recipe", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-food",
    "supports" => [ "title", "editor", "thumbnail", "excerpt" ],
    "taxonomies" => [ "bs_recipe_category", "bs_recipe_tags" ],
    "show_in_graphql" => false,
];

register_post_type( "bs_recipe", $args );
}

add_action( 'init', 'cptui_register_my_cpts_bs_recipe' );
