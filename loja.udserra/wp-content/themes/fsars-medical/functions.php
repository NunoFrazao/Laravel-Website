<?php
/**
 * @package fsars-medical
 */
require_once get_template_directory() . "/core/customizer/fsars_medical_customizer.php";
require_once get_template_directory() . "/core/fsars_medical_custom_jsstyle.php";
require_once get_template_directory() . "/core/fsars_medical_custom_themesupport.php";
require_once get_template_directory() . "/core/fsars_medical_custom_widgets.php";
require_once get_template_directory() . "/core/fsars_medical_custom_content_excerpt.php";

add_action('customize_register', 'fsars_medical_customize_register_custom_controls', 9);

function fsars_medical_customize_register_custom_controls($wp_customize) {
    get_template_part('core/proupgrade/fsars_medical', 'sectionpro');
}

function fsars_medical_customize_controls_js() {
    $theme = wp_get_theme();
    wp_enqueue_script('fsars-medical-customizer-section-pro-jquery', get_template_directory_uri() . '/core/proupgrade/fsars_medical_customize-controls.js', array('customize-controls'), $theme->get('Version'), true);
    wp_enqueue_style('fsars-medical-customizer-section-pro', get_template_directory_uri() . '/core/proupgrade/fsars_medical_customize-controls.css', $theme->get('Version'));
}

add_action('customize_controls_enqueue_scripts', 'fsars_medical_customize_controls_js');

function fsars_medical_enqueue_comments_reply() {
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('comment_form_before', 'fsars_medical_enqueue_comments_reply');

if (!function_exists('fsars_medical_sanitize_page')) :

    function fsars_medical_sanitize_page($page_id, $setting) {
        // Ensure $input is an absolute integer.
        $page_id = absint($page_id);
        // If $page_id is an ID of a published page, return it; otherwise, return the default.
        return ( 'publish' === get_post_status($page_id) ? $page_id : $setting->default );
    }
endif;