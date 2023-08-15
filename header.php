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
  <meta name="viewport" content="initial-scale=1.0, width=device-width">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="viewport" content="width = 320, initial-scale = 2.3, user-scalable = no">
  <meta name="viewport" content="width = device-width, initial-scale = 2.3, user-scalable = no">
  <meta name="viewport" content="width = device-width, initial-scale = 2.3, minimum-scale = 1, maximum-scale = 5">
  <meta name="viewport" content="width = 320, initial-scale = 2.3, user-scalable = no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-compatible" content="IE=11">
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7">
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	<title><?php wp_title( ' | ', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
</head>
<body <?php body_class(); ?>>
	<main>
