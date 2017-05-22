<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package emptyWordpressTheme
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8"/>
	<title><?php bloginfo('name'); ?><?php bloginfo('description'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("template_directory");?>/styles/css/vendor.css"/>
	<link rel="stylesheet" href="<?php bloginfo("template_directory");?>/styles/css/main.css"/>
	<!-- <script src="<?php bloginfo("template_directory");?>bower_components/angular/angular.min.js"></script> -->
  </head>
  <body>
