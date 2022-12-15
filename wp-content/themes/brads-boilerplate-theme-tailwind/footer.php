<?php
//wp_footer();
$footerMenu = wp_get_nav_menu_items(
    get_nav_menu_locations('footer-social')['footer-social']
);
?>
<nav class="">
    <div class="flex flex-wrap max-lg:flex-col justify-between px-20 py-20 gap-12 max-lg:gap-8  max-lg:px-10 ">
        <div class="uppercase font-['Poppins'] font-bold text-footer-purple">
            <p class="tracking-wide text-purple-900">Annorganiz@gmail.com</p>
            <p class="tracking-wide text-purple-900">Téléphone: 0612132432</>
            <p class="tracking-wide text-purple-900">Adresse rue fictive</>
            <p class="tracking-wide text-purple-900">Paris 5e</>
        </div>
        <div class="flex justify-evenly items-center gap-12 max-lg:gap-8 ">
            <img src="<?php echo get_template_directory_uri() ?>/img/footer-logo-facebook.png" alt="logo instagram" class="w-9 h-9">
            <img src="<?php echo get_template_directory_uri() ?>/img/footer-logo-instagram.png" alt="logo linkedin" class="w-9 h-9">
            <img src="<?php echo get_template_directory_uri() ?>/img/footer-logo-linkedin.png" alt="logo facebook" class="w-9 h-9">
        </div>

    </div>
</nav>
<div class="flex text-center bg-red-400">

</div>

<div class="" >
    <div class="flex text-center text-xs text-footer-purple ">
        <p> COPYRIGHT 2019 2022 - ANNORGANIZ </p>
        <p> | </p>
        <a href="#"> ACCUEIL </a>
        <p> | </p>
        <a href="#"> CONTACT </a>
        <p> | </p>
        <a href="#"> A PROPOS </a>
        <p> | </p>
        <a href="#"> PRESTATION </a>
        <p> | </p>
        <a href="#"> MENTION LEGALE </a>
        <p> | </p>
        <a href="#"> BLOG </a>
    </div>

</div>







<?php wp_footer(); ?>
</body>
</html>