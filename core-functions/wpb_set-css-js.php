<?php

// Salir si se intenta acceder directamente al archivo
if (!defined('ABSPATH')) {
    exit;
}

if ( !function_exists( 'child_theme_enqueue_styles_and_scripts' ) ) :

    function child_theme_enqueue_styles_and_scripts() {
        // Desencolar estilos del tema padre
        wp_dequeue_style('twenty-twenty-one-style');
        wp_deregister_style('twenty-twenty-one-style');

        // Encolar CSS personalizado del tema hijo
        $child_theme_css_path = get_stylesheet_directory() . '/theme-styles.css';
        if (file_exists($child_theme_css_path)) {
            wp_enqueue_style(
                'child-theme-styles', // Handle
                get_stylesheet_directory_uri() . '/theme-styles.css', // Ruta al archivo CSS del tema hijo
                [], // Un array de estilos de los que depende
                filemtime($child_theme_css_path) // Número de versión para el control de cache
            );
        }

        // Encolar JS personalizado del tema hijo
        $child_theme_js_path = get_stylesheet_directory() . '/theme-scripts.js';
        if (file_exists($child_theme_js_path)) {
            wp_enqueue_script(
                'child-theme-scripts', // Handle
                get_stylesheet_directory_uri() . '/theme-scripts.js', // Ruta al archivo JS del tema hijo
                ['jquery'], // Un array de scripts de los que depende
                filemtime($child_theme_js_path), // Número de versión para el control de cache
                true // Cargar en el footer
            );
        }
    }

endif;

// Agregamos la acción con prioridad 20 para asegurarnos de que se ejecute después de que el tema padre haya encolado sus estilos
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles_and_scripts', 20);


?>
