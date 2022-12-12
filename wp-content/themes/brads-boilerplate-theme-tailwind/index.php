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



        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


        <h1>test</h1>
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
