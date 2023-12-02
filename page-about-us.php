<?php get_header()?>

<?php
if (have_posts()):the_post();
      while (have_posts()):the_post(); 
      endwhile;
endif;
?> 

<div id="aboutus-container" class="row justify-content-md-center w-100">
  <div id="about-us-box" class="col-lg-4 col-md-6 px-3 px-md-5 pr-md-5">
    <div class="mb-4 m-3 m-lg-5 col-md-12 col-lg-12"><img id="aboutus-img" src="<?php the_field("image")?>" class="img-fluid" alt=""></div>
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
  </div>
</div>


<?php get_footer()?> 