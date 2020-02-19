<?php /**
* Template Name: Contact Sent Page!
*/ ?>

<?php get_header(); ?>

<!-- INICIO PAGINA ***************************************************** -->


<!-- ----------------------------------------------------------- -->
<!-- ---------------------START CONTACT PAGE-------------------- -->

<div class="row contactrow">
  <div class="col-12 col-sm-12 col-md-6 col-lg-6 contact-form-div">
    <div class="contact-title-div">
      <h2 class="contact-title">CONTACT</h2>
    </div>
    <!-- START FORM -->
    <form class="form-contact" action="../enviaremail.php" method="post">
      <div class="form-group row form-row">
        <div class="col form-col">
          <input type="text" name="name" class="form-control form-text-field" placeholder="Name">
        </div>
        <div class="col form-col">
          <input type="email" name="email" class="form-control form-text-field" placeholder="Email">
        </div>
      </div>

      <div class="form-group row form-row">
        <div class="col form-col">
          <input type="text" name="subject" class="form-control form-text-field" placeholder="Subject" autocomplete="off">
        </div>
      </div>

      <div class="form-group row form-row">
        <div class="col form-col">
          <textarea name="message" class="form-control form-text-field" rows="4" placeholder="Message"></textarea>
        </div>
      </div>

      <div class="form-group row form-row">
        <div class="col form-col contact-info">
          <p class="contact-sent">Contact Sent!</p>
        </div>
        <div class="col form-col form-button-div">
          <button type="submit" class="btn btn-outline-info form-button">Submit</button>
        </div>
      </div>
    </form>
    <!-- END FORM -->
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-6 contact-img-div">

  </div>
</div>

<!-- ----------------------END CONTACT PAGE--------------------- -->
<!-- ----------------------------------------------------------- -->



<!-- FIM DA PAGINA *********************************************** -->

<?php get_footer(); ?>
