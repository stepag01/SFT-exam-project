<?php get_header()?>

<?php
if (have_posts()):the_post();
      while (have_posts()):the_post(); 
      endwhile;
endif;
?> 

<div id="aboutus-container" class="row justify-content-md-center w-100 mb-5 mt-5">
  <div id="about-us-box" class="col-lg-4 col-md-6 px-3 px-md-5 pr-md-5">
    <div class="mb-4 m-3 m-lg-5 col-md-12 col-lg-12"><?php $image = get_field("image")?><img id="aboutus_img" src="<?php echo $image["sizes"]["large"]?>" class="img-fluid"></div>
  </div>
  <div class="col-lg-7 m-lg-5 col-md-6 pt-5 pb-4 px-5 px-md-5 pl-md-5">
    <h2>HVEM ER VI HOS <strong>SØRENS FARVE & TAPET?</strong></h2>
    <div class="py-1">
      <?php if (get_field('about_us_title')): ?>
        <em><h3 id="aboutus-title"><?php echo esc_html(get_field('about_us_title')); ?></h3></em>
      <?php endif; ?>
    </div>
    <div class="pt-2">
      <?php if (get_field('about-us-description')): ?>
        <p class="text-black"><?php echo esc_html(get_field('about-us-description')); ?></p>
      <?php endif; ?>
      </div>
      <div class="py-3">
        <u><a class="text-black" href="<?php echo get_permalink(get_page_by_path("contact")) ?>"><button id="btn" type="button" class="btn btn-dark">Kontakt os for et samarbejde</button></a></u>
      </div>
    </div>
    </div>
  </div>
</div>


<?php get_footer()?> 