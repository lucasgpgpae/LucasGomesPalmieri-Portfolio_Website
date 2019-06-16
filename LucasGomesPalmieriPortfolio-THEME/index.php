<?php get_header(); ?>

<!-- INICIO DA PAGINA ***************************** -->


<!-- ----------------------------------------------------------- -->
<!-- --------------------START PROJECTS PAGE-------------------- -->

<div class="projects-page-title-div">
  <h2 class="page-title" style="font-size:100px;">PROJECTS</h2>
</div>

<div class="row projects-row">
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<!-- START POST -->
  <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
    <!-- POST LINK -->
      <a href="thepost.html" class="project-post-link">
        <!-- POST DIV -->
          <div class="project-post">
            <!-- CONTENT -->
              <div class="project-img-div">
                <img src="<?php the_post_thumbnail_url(); ?>" class="project-img">
              </div>

              <div class="project-title-div">
                <h4 class="project-title">-><?php the_title(); ?></h4>
              </div>

              <div class="project-summary-div">
                <p class="project-summary"><?php the_excerpt(); ?></p>
              </div>
            <!-- END CONTENT -->
          </div>
        <!-- END POST DIV -->
      </a>
    <!-- END POST LINK -->
  </div>
<!-- END POST -->
<?php endwhile; else:  ?>
  <p>Projects Not Found!</p>
<?php endif; ?>



</div>

<!-- ---------------------END PROJECTS PAGE--------------------- -->
<!-- ----------------------------------------------------------- -->






<!-- FIM DA PAGINA ******************************** -->

<?php get_footer(); ?>
