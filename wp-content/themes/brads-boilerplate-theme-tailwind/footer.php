<div class="border-t mt-4 py-4">
  <div class="max-w-4xl px-4 mx-auto text-xs text-gray-400">Your footer content here.</div>
</div>

<?php
//wp_footer();
$footerMenu = wp_get_nav_menu_items(
    get_nav_menu_locations('footer-social')['footer-social']
);
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
</body>
</html>