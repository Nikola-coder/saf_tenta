<?php

function cptui_register_my_taxes_bs_recipe_category() {

	/**
	 * Taxonomy: recipe categories.
	 */

	$labels = [
		"name" => __( "recipe categories", "bootscore" ),
		"singular_name" => __( "recipe category", "bootscore" ),
		"menu_name" => __( "Recipes category", "bootscore" ),
		"all_items" => __( "All recipes category", "bootscore" ),
		"edit_item" => __( "Edit recipe cateogry", "bootscore" ),
		"view_item" => __( "View recipe cateogry", "bootscore" ),
		"update_item" => __( "Update recipe cateogry name", "bootscore" ),
		"add_new_item" => __( "Add new recipe cateogry", "bootscore" ),
		"new_item_name" => __( "New recipe cateogry name", "bootscore" ),
		"parent_item" => __( "Parent recipe cateogry", "bootscore" ),
		"parent_item_colon" => __( "Parent recipe cateogry:", "bootscore" ),
		"search_items" => __( "Search recipes category", "bootscore" ),
		"popular_items" => __( "Popular recipes category", "bootscore" ),
		"separate_items_with_commas" => __( "Separate recipes category with commas", "bootscore" ),
		"add_or_remove_items" => __( "Add or remove recipes category", "bootscore" ),
		"choose_from_most_used" => __( "Choose from the most used recipes category", "bootscore" ),
		"not_found" => __( "No recipes category found", "bootscore" ),
		"no_terms" => __( "No recipes category", "bootscore" ),
		"items_list_navigation" => __( "recipes category list navigation", "bootscore" ),
		"items_list" => __( "recipes category list", "bootscore" ),
		"back_to_items" => __( "Back to recipes category", "bootscore" ),
	];

	
	$args = [
		"label" => __( "recipe categories", "bootscore" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'bs_recipe_category', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "bs_recipe_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "bs_recipe_category", [ "bs_recipe" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_bs_recipe_category' );

