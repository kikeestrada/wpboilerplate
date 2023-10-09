<?php

// Exit if accessed directly
if (!defined("ABSPATH")) {
  exit();
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists("chld_thm_cfg_locale_css")):
  function chld_thm_cfg_locale_css($uri)
  {
      if (
          empty($uri) &&
          is_rtl() &&
          file_exists(get_template_directory() . "/rtl.css")
      ) {
          $uri = get_template_directory_uri() . "/rtl.css";
      }
      return $uri;
  }
endif;
add_filter("locale_stylesheet_uri", "chld_thm_cfg_locale_css");

if (!function_exists("child_theme_configurator_css")):
  function child_theme_configurator_css()
  {
      wp_enqueue_style(
          "chld_thm_cfg_child",
          trailingslashit(get_stylesheet_directory_uri()) . "style.css",
          [
              "twenty-twenty-one-style",
              "twenty-twenty-one-style",
              "twenty-twenty-one-print-style",
          ]
      );
  }
endif;
add_action("wp_enqueue_scripts", "child_theme_configurator_css", 10);


function remove_parentstyles_and_enqueue_scripts()
{
    wp_dequeue_style("twenty-twenty-one-style", [], null);
    wp_dequeue_style("chld_thm_cfg_child", [], null);

    // Custom theme CSS path
    $themecsspath = get_stylesheet_directory() . "/style.css";
    wp_enqueue_style(
        "core",
        get_theme_file_uri() . "/style.css" . "?v=" . filemtime($themecsspath),
        [],
        null
    );

    // Child theme CSS path
    $themecsspath2 = get_stylesheet_directory() . "/style.css";
    wp_enqueue_style(
        "child",
        get_stylesheet_uri() . "?v=" . filemtime($themecsspath2),
        [],
        null
    );

    // Enqueue script.js with versioning and jQuery dependency
    $themescriptpath = get_stylesheet_directory() . "/script.js";
    if (file_exists($themescriptpath)) {
        wp_enqueue_script(
            "custom-script",
            get_stylesheet_directory_uri() . "/script.js" . "?v=" . filemtime($themescriptpath),
            ['jquery'], // jQuery como dependencia
            null,
            true // Carga el script en el footer
        );
    }
}
add_action("wp_enqueue_scripts", "remove_parentstyles_and_enqueue_scripts", 20);

