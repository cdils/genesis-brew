<?php
/**
 * Plugin Name: Genesis Brew Collection
 * Plugin URI: genesis-brew
 * Description: The Brew Collection for Genesis Blocks
 * Version: 0.1
 * Author: Carrie Dils
 * Author URI: https://carriedils.com
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

add_action( 'plugins_loaded', 'genesis_brew_collection', 12 );
/**
 * Setup the plugin.
 */
function genesis_brew_collection() {
	// Ensure a proper version of Genesis Blocks is active before continuing.
	if ( ! function_exists( 'genesis_blocks_register_layout_component' ) ) {
		return;
	}
	// Register the Brew Home Layout.
	genesis_blocks_register_layout_component(
		array(
			'type'       => 'layout',
			'key'        => 'genesis_brew_home',
			'name'       => 'Brew Home Page',
			'content'    => require 'layouts/home.php',
			'category'   => array(
				'Text',
			),
			'keywords'   => array(
				'Home',
			),
			'image'      => plugin_dir_url( __FILE__ ) . 'assets/brew_layout_home.png',
			'collection'    => array(
				'slug'      => 'brew',
				'label'     => 'Brew Collection',
				'thumbnail' => plugin_dir_url( __FILE__ ) . 'assets/brew_collection.png',
			),
		),
	);
	// Register the Brew Hero Section.
	genesis_blocks_register_layout_component(
		array(
			'type'       => 'section',
			'key'        => 'genesis_brew_hero',
			'name'       => 'Brew Hero',
			'content'    => require 'sections/hero.php',
			'category'   => array(
				'Text',
			),
			'keywords'   => array(
				'Hero',
				'Photo',
				'Header',
			),
			'image'      => plugin_dir_url( __FILE__ ) . 'assets/brew_section_hero.png',
			'collection' => array(
				'slug'  => 'brew',
				'label' => 'Brew Collection',
			),
		),
	);
	// Register the Brew Brag Section.
	genesis_blocks_register_layout_component(
		array(
			'type'       => 'section',
			'key'        => 'genesis_brew_services',
			'name'       => 'Brew Brag',
			'content'    => require 'sections/brag.php',
			'category'   => array(
				'Text',
			),
			'keywords'   => array(
				'Services',
			),
			'image'      => plugin_dir_url( __FILE__ ) . 'assets/brew_section_brag.png',
			'collection' => array(
				'slug'  => 'brew',
				'label' => 'Brew Collection',
			),
		),
	);
	// Register the Brew About Section.
	genesis_blocks_register_layout_component(
		array(
			'type'       => 'section',
			'key'        => 'genesis_brew_about_1',
			'name'       => 'Brew About',
			'content'    => require 'sections/about.php',
			'category'   => array(
				'Text',
			),
			'keywords'   => array(
				'About',
			),
			'image'      => plugin_dir_url( __FILE__ ) . 'assets/brew_section_about.png',
			'collection' => array(
				'slug'  => 'brew',
				'label' => 'Brew Collection',
			),
		),
	);
	// Register the Brew Steps Section.
	genesis_blocks_register_layout_component(
		array(
			'type'       => 'section',
			'key'        => 'genesis_brew_process',
			'name'       => 'Brew Steps',
			'content'    => require 'sections/steps.php',
			'category'   => array(
				'Text',
			),
			'keywords'   => array(
				'Process',
				'Steps',
			),
			'image'      => plugin_dir_url( __FILE__ ) . 'assets/brew_section_steps.png',
			'collection' => array(
				'slug'  => 'brew',
				'label' => 'Brew Collection',
			),
		),
	);
	// Register the Brew Quote Section.
	genesis_blocks_register_layout_component(
		array(
			'type'       => 'section',
			'key'        => 'genesis_brew_testimonials',
			'name'       => 'Brew Quote',
			'content'    => require 'sections/quote.php',
			'category'   => array(
				'Text',
			),
			'keywords'   => array(
				'Quote',
			),
			'image'      => plugin_dir_url( __FILE__ ) . 'assets/brew_section_quote.png',
			'collection' => array(
				'slug'  => 'brew',
				'label' => 'Brew Collection',
			),
		),
	);
}
