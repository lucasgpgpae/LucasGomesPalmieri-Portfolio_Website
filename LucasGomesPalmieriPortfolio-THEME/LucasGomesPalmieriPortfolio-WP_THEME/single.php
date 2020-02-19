<?php get_header(); ?>

<!-- INICIO DA PAGINA ***************************** -->

<!-- ----------------------------------------------------------- -->
<!-- --------------------START THE POST PAGE-------------------- -->
  <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="projects-page-title-div" style="margin-top: 100px; margin-bottom: 15px;" onselectstart="return false">
    <h2 class="page-title"><?php the_title(); ?></h2>
  </div>

  <div class="project-page-content-div">
    <div class="project-page-content-text-div">
      <p class="project-page-content-text"><?php the_content(); ?></p>
    </div>
    <div class="project-page-content-image-div">
      <img src="<?php the_post_thumbnail_url(); ?>" class="project-img" style="border: 0;">
    </div>
  </div>
<?php endwhile; else:  ?>
  <p>Project Not Found!</p>
<?php endif; ?>

<!-- ---------------------END THE POST PAGE--------------------- -->
<!-- ----------------------------------------------------------- -->



<!-- FIM DA PAGINA ******************************** -->

<?php get_footer(); ?>
