<?php
//wp_footer();
$footerMenu = wp_get_nav_menu_items(
    get_nav_menu_locations('footer-social')['footer-social']
);
?>

<nav class="flex justify-between px-20 py-20 border-solid border-2">
    <!-- <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo"> -->
    <div class="uppercase text-center">
        <p>Annorganiz@gmail.com</p>
        <p>Téléphone: 0612132432</p>
        <p>Adresse rue fictive</p>
        <p>Paris 5e</p>
    </div>
    <div class="flex justify-evenly items-center gap-12">
        <img src="<?php echo get_template_directory_uri() ?>/img/footer-logo-facebook.png" alt="logo instagram" class="w-9 h-9">
        <img src="<?php echo get_template_directory_uri() ?>/img/footer-logo-instagram.png" alt="logo linkedin" class="w-9 h-9">
        <img src="<?php echo get_template_directory_uri() ?>/img/footer-logo-linkedin.png" alt="logo facebook" class="w-9 h-9">
    </div>
</nav>

<?php wp_footer(); ?>

</body>

</html>