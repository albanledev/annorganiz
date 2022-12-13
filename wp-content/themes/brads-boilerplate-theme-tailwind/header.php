<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body class='' <?php body_class(); ?>>
  <?php
  // wp_nav_menu();

  $headerMenu = wp_get_nav_menu_items(
      get_nav_menu_locations('header')['header']
  );
  //dump($footerMenu);
  ?>
  
  
  <nav class="flex justify-between px-20">
      <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo" >
    <ul class="flex justify-end gap-5">
      <?php foreach ($headerMenu as $item) :?>
        <li class="">
          <a href="<?= $item->url ?>">
            <?= $item->title ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>



  </nav>

