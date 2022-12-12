<?php

get_header(); ?>




<div class="prose max-w-full">
  <?php if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>
      <div>



        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

        <div class='bg-gray-500 w-full h-[50px] p-5'>
          <div class='bg-white w-[80%] h-10 px-4 py-4 rounded-[20px]'>
            <div>
              <div class="bg-gray-800 w-64 h-80"></div>
            </div>
            <div class="w-[90%] bg-red-600 h-5 rounded-md text-lg px-4">
              <h1>test</h1>
            </div>
          </div>
        </div>


        <?php the_content(); ?>
      </div>
  <?php }
  } ?>
</div>






<?php get_footer();
