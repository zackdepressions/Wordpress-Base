<!DOCTYPE html>
<meta charset="utf-8">
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body >


<header>
  <?php 
    // navbar fixo
    include 'inc/navbar/navbar_fixed.php'; 

    // navbar estatico
    // include 'inc/navbar/navbar_estatico.php'; 
  ?>
</header>

