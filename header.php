<?php
/**
 * Hello iBlocks!
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Custom CSS -->
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/css/iblocks-teq-style.css" rel="stylesheet" type="text/css">
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
    <!-- Adobe Museo Slab font -->
    <link rel="stylesheet" href="https://use.typekit.net/yal1ewy.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-67374790-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-67374790-4');
      gtag('config', 'AW-677760146');
    </script>
  </head>
  <body <?php body_class(); ?>>

    <?php get_template_part( 'navigation', 'default' ); ?>

      <section class="main-content">
