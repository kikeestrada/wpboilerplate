<?php
   /**
    * The header.
    *
    * This is the template that displays all of the <head> section and everything up until main.
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package WordPress
    * @subpackage Twenty_Twenty_One
    * @since Twenty Twenty-One 1.0
    */   
   ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5, user-scalable=yes">
  <!-- IE Compatibility -->
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <!-- Apple Mobile Web App Settings -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <!-- Miscellaneous -->
  <meta name="format-detection" content="telephone=no">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	<title><?php wp_title( ' | ', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<main>
