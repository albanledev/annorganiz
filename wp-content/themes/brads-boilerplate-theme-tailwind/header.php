<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body class='bg-red-500' <?php body_class(); ?>>
  <?php
  // wp_nav_menu();
  $footerMenu = wp_get_nav_menu_items(
    get_nav_menu_locations('footer-social')['footer-social']
  );
  //dump($footerMenu);

  ?>
  <nav>
    <ul>
      <?php foreach ($footerMenu as $item) : ?>
        <li>
          <a href="<?= $item->url ?>">
            <?= $item->title ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>