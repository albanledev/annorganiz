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




    <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="ez" class="h-auto">
    <img src="<?php echo get_template_directory_uri() ?>./img/burger.png" alt="ezez" class="lg:hidden h-4 mt-9">

    <ul class="lg:flex justify-end gap-[3vw] py-7 hidden lg:block">

      <?php foreach ($headerMenu as $item) : ?>
        <li class=" font-['Poppins'] text-[#3B0273] ">
          <a href=" <?= $item->url ?>">
            <?= $item->title ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>



  </nav>

</body>
</html>