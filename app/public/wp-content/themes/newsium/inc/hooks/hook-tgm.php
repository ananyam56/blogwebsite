<?php
/**
 * Recommended plugins
 *
 * @package Newsium
 */

if ( ! function_exists( 'newsium_recommended_plugins' ) ) :

    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function newsium_recommended_plugins() {

        $plugins = array(
            array(
                'name'     => esc_html__( 'AF Companion', 'newsium' ),
                'slug'     => 'af-companion',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Elespare – News Magazine and Blog Widgets and Template Kits for Elementor with Header/Footer Builder', 'newsium' ),
                'slug'     => 'elespare',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Blockspare - Beautiful Page Building Blocks for WordPress', 'newsium' ),
                'slug'     => 'blockspare',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'WP Post Author', 'newsium' ),
                'slug'     => 'wp-post-author',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Latest Posts Block Lite', 'newsium' ),
                'slug'     => 'latest-posts-block-lite',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Magic Content Box Lite', 'newsium' ),
                'slug'     => 'magic-content-box-lite',
                'required' => false,
            )
        );

        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'newsium_recommended_plugins' );
