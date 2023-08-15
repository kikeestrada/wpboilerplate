<?php
/**
 * WPboilerplate Awesome WordPress Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage wpboilerplate
 * @since 1.0.0
 * @version 1.0.0
 *
 */

//wpboilerplate Theme get core class
function includeFilesFromFolder($folderPath) {
  $files = scandir($folderPath);
  foreach ($files as $file) { 
    $filePath = $folderPath . '/' . $file;
    if (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
      include_once $filePath;
    }
  }
}
$folderPath = __DIR__ . '/core-functions';
includeFilesFromFolder($folderPath);
