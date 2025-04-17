<?php
/**
 * Ecommerce Bazaar Theme Customizer
 *
 * @package Ecommerce Bazaar
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

if ( ! function_exists( 'ecommerce_bazaar_customize_register' ) ) :
function ecommerce_bazaar_customize_register( $wp_customize ) {

    // Add custom controls.
    require get_parent_theme_file_path( 'inc/customizer/custom-controls/info/class-info-control.php' );
    require get_parent_theme_file_path( 'inc/customizer/custom-controls/info/class-title-info-control.php' );
    require get_parent_theme_file_path( 'inc/customizer/custom-controls/toggle-button/class-login-designer-toggle-control.php' );
    require get_parent_theme_file_path( 'inc/customizer/custom-controls/radio-images/class-radio-image-control.php' );
    require get_parent_theme_file_path( 'inc/customizer/custom-controls/text-radio/class-text-radio-control.php' );
    require get_parent_theme_file_path( 'inc/customizer/custom-controls/slider/class-slider-control.php' );

    // Register the custom control type.
    $wp_customize->register_control_type( 'Ecommerce_Bazaar_Toggle_Control' );


    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_control( 'header_textcolor' )->label = __( 'Site Title Color', 'ecommerce-bazaar' );

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'ecommerce_bazaar_site_title_callback',
            'fallback_refresh'    => false,
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'ecommerce_bazaar_site_description_callback',
            'fallback_refresh'    => false, 
        ) );
    }

    // Display Site Title and Tagline
    $wp_customize->add_setting( 
        'ecommerce_bazaar_display_site_title_tagline', 
        array(
            'default'           => true,
            'type'              => 'theme_mod',
            'sanitize_callback' => 'ecommerce_bazaar_sanitize_checkbox',
        ) 
    );

    $wp_customize->add_control( 
        new Ecommerce_Bazaar_Toggle_Control( $wp_customize, 'ecommerce_bazaar_display_site_title_tagline', 
        array(
            'label'       => esc_html__( 'Display Site Title and Tagline', 'ecommerce-bazaar' ),
            'section'     => 'title_tagline',
            'type'        => 'ecommerce-bazaar-toggle',
            'settings'    => 'ecommerce_bazaar_display_site_title_tagline',
        ) 
    ));

    // Add setting
    $wp_customize->add_setting( 'ecommerce_bazaar_logo_width', array(
        'default'           => 150,
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage', // Optional for live preview
    ) );

    // Add control (range slider)
    $wp_customize->add_control( 'ecommerce_bazaar_logo_width', array(
        'label'       => __( 'Logo Resizer (px)', 'ecommerce-bazaar' ),
        'section'     => 'title_tagline',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 50,
            'max'  => 400,
            'step' => 1,
        ),
    ) ); 
}
endif;
add_action( 'customize_register', 'ecommerce_bazaar_customize_register' );

//General settings
get_template_part( 'inc/customizer/options/section-general' );

//typography settings
get_template_part( 'inc/customizer/options/section-typography' );

//header settings
get_template_part( 'inc/customizer/options/section-header' );

//banner settings
get_template_part( 'inc/customizer/options/section-banner' );

//product settings
get_template_part( 'inc/customizer/options/section-product' );

//blog settings
get_template_part( 'inc/customizer/options/section-blog' );

//page settings
get_template_part( 'inc/customizer/options/section-page' );

//footer settings
get_template_part( 'inc/customizer/options/section-footer' );

//customizer helper
get_template_part( 'inc/customizer/customizer-helpers' );

//data sanitization
get_template_part( 'inc/customizer/data-sanitization' );

/**
 * Enqueue the customizer stylesheet.
 */
if ( ! function_exists( 'ecommerce_bazaar_enqueue_customizer_stylesheets' ) ) :
function ecommerce_bazaar_enqueue_customizer_stylesheets() {
    wp_register_style( 'ecommerce-bazaar-customizer-css', get_template_directory_uri() . '/inc/customizer/assets/css/customizer.css', array(), '1.0.9', 'all' );
    wp_enqueue_style( 'ecommerce-bazaar-customizer-css' );
}
endif;
add_action( 'customize_controls_print_styles', 'ecommerce_bazaar_enqueue_customizer_stylesheets' );