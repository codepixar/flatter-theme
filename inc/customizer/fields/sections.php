<?php 
/**
 * @Packge     : Flatter
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'flatter_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'flatter' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'flatter_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'flatter' ),
            'panel'    => 'flatter_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'flatter_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'flatter' ),
            'panel'    => 'flatter_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'flatter_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'flatter' ),
            'panel'    => 'flatter_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'flatter_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'flatter' ),
            'panel'    => 'flatter_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'flatter_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'flatter' ),
            'panel'    => 'flatter_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'flatter_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'flatter' ),
            'panel'    => 'flatter_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'flatter_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'flatter' ),
            'panel'    => 'flatter_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'flatter_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'flatter' ),
            'panel'    => 'flatter_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>