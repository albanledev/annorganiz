<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
</style>

<?php

get_header(); ?>




<div class="prose max-w-full">
  <?php if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>
      <div>





        <!-- <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> -->


        <!-- <h1>test</h1> -->


        <div class="w-full p-4 bg-[#723EA5] flex justify-evenly m-auto flex-wrap mt-6">
          <img src="<?php echo get_template_directory_uri() ?>./img/anne.png" alt="" class="w-[200px] h-[200px]">
          <p class="text-[16px] md:text-[24px] text-white md:w-[50%] w-[80%]">Bienvenue chez moi, je m’appelle Anne. Professionnelle de l’Organisation, je vous accueille avec plaisir.<br><br>

            Vous aussi, vous aspirez à retrouver un intérieur qui vous ressemble et qui vous ressource ?
            Jeunes ou moins jeunes, débordés ou dépassés, accumulateurs ou fans de récupération, je vous accompagne avec ma méthode simple et efficace.</p>
        </div>


        <div class="flex flex-wrap justify-center gap-4 m-auto mt-8 pt-8">
          <div><img src="<?php echo get_template_directory_uri() ?>./img/valeur.png" alt=""></div>
          <div><img src="<?php echo get_template_directory_uri() ?>./img/valeur.png" alt=""></div>
          <div><img src="<?php echo get_template_directory_uri() ?>./img/valeur.png" alt=""></div>
          <div><img src="<?php echo get_template_directory_uri() ?>./img/valeur.png" alt=""></div>

        </div>


        <div class="w-full p-4 bg-[#723EA5] flex justify-evenly m-auto flex-wrap mt-6">

          <div><img src="<?php echo get_template_directory_uri() ?>./img/gray.png" alt=""></div>

          <p class="text-[16px] md:text-[24px] text-white md:w-[80%] w-[80%]">
            L’adaptabilité<br>
            A chaque problème une solution. Jalonnée dans ma vie personnelle comme professionnelle par des expériences riches en émotions heureuses et malheureuses.J’ai su rapidement être un caméléon et m’adapter aux situations pour y voir le verre plein !
          </p>
        </div>


      </div>
</div>
</div>


<?php

?>
</div>
<?php }
  } ?>
</div>






<?php get_footer();
