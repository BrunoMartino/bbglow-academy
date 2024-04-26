<?php get_header(); ?>
<?php if (have_posts()) { while(have_posts()) { the_post();?>
  <div class="container mx-auto">
  <h1 class='text-2xl font-poppins font-bold px-8 py-6'><?php the_title()?></h1>
  <main class='text-lg font-poppins font-medium px-8 mb-6'> <?php the_content()?></main>
  </div>
  
  <?php } } ?>
  <?php get_footer(); ?>