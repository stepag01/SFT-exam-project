<?php get_header() ?>

<?php
if (have_posts()) : the_post();
      while (have_posts()) : the_post(); 
      endwhile;
endif;
?> 


<!-- Hero-sektion -->
<section id="frontpage-box" style="background-image: url('<?php the_field("hero_img"); ?>');" class="bgimage">
  <div class="container-fluid"> 
    <div class="row w-100">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <div class="hero-text">
          <div>
            <?php if (get_field('headline')) : ?>
              <!-- hero image - headline -->
              <h1 class=""><strong><?php echo esc_html(get_field('headline')); ?></strong></h1>
            <?php endif; ?>
          </div>
          <div class="mt-3">
            <?php if (get_field('paragraph')) : ?>
              <!-- hero image - paragraf -->
              <h5 id="hero-paragraf"><?php echo esc_html(get_field('paragraph')); ?> <strong><u><a class="text-black" href="<?php echo get_permalink(get_page_by_path("Cases")) ?>">HER</a></u></strong></h5>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Deres brands -->
<div id="brands-box" class="px-5 text-center mx-auto">
  <div class="row">
      <div class="col-lg-4 col-sm-3 col-md-4 mt-3">
        <img src="<?php the_field("brand_image_one")?>" height="110">
      </div>
      <div class="col-lg-4 col-sm-3 col-md-4 mt-3">
        <img src="<?php the_field("brand_image_two")?>" height="110">
      </div>
      <div class="col-lg-4 col-sm-3 col-md-4 mt-3">
        <img src="<?php the_field("brand_image_three")?>" height="110">
      </div>
  </div>
  <div class="row">
      <div class="col-lg-4 col-sm-3 col-md-4 mt-3">
        <img src="<?php the_field("brand_image_four")?>" height="110">
      </div>
      <div class="col-lg-4 col-sm-3 col-md-4 mt-3">
        <img src="<?php the_field("brand_image_five")?>" height="110">
      </div>
      <div class="col-lg-4 col-sm-3 col-md-4 mt-3">
        <img src="<?php the_field("brand_image_six")?>" height="110">
      </div>
  </div>
</div> 





<!-- Titel -->
<div id="ydelses-container" class="text-center mt-3 px-4 px-sm-2"> 
  <div class="pt-5 pb-2">
    <h2><strong> YDELSER </strong>HOS SØRENS FARVE & TAPET</h2>
  </div>
  <div class="pb-2">
    <?php if (get_field('frontpage_service_title')):?> 
        <h3 id="frontpage-title" class="text-black px-3 px-sm-0"> 
          <em><?php echo esc_html(get_field('frontpage_service_title'));?></em>
        </h3>
    <?php endif;?>
  </div>
  <div class="px-3 pt-2 px-md-5">
    <?php if (get_field('description')):?> 
        <p class="text-black px-3 px-sm-0"> 
          <?php echo esc_html(get_field('description'));?>
        </p>
    <?php endif;?>
  </div>
</div>



<!-- Deres ydelser -->
<div id="ydelser-box" class="container text-center pt-4 px-3 px-sm-5">
    <div id="services-first3" class="row d-flex justify-content-around">
        <div class="col-12 col-sm-3">
            <?php if (get_field('service_one')):?>
                <a class="text-black" href="<?php echo get_permalink(get_page_by_path("services"))?>"><p class="text-black"><?php echo esc_html(get_field('service_one'));?></p></a>
            <?php endif;?>
        </div>
        <div class="col-12 col-sm-3">
            <?php if (get_field('service_two')):?>
              <a class="text-black" href="<?php echo get_permalink(get_page_by_path("services"))?>"><p class="text-black"><?php echo esc_html(get_field('service_two'));?></p></a>
            <?php endif;?>
        </div>
        <div class="col-12 col-sm-3">
            <?php if (get_field('service_three')):?>
              <a class="text-black" href="<?php echo get_permalink(get_page_by_path("services"))?>"><p class="text-black"><?php echo esc_html(get_field('service_three'));?></p></a>
            <?php endif;?>
        </div>
    </div>

    <div id="services-second3" class="row d-flex justify-content-around">
        <div class="col-12 col-sm-3">
            <?php if (get_field('service_four')):?>
              <a class="text-black" href="<?php echo get_permalink(get_page_by_path("services"))?>"><p class="text-black"><?php echo esc_html(get_field('service_four'));?></p></a>
            <?php endif;?>
        </div>
        <div class="col-12 col-sm-3">
            <?php if (get_field('service_five')):?>
              <a class="text-black" href="<?php echo get_permalink(get_page_by_path("services"))?>"><p class="text-black"><?php echo esc_html(get_field('service_five'));?></p></a>
            <?php endif;?>
        </div>
        <div class="col-12 col-sm-3">
            <?php if (get_field('service_six')):?>
              <a class="text-black" href="<?php echo get_permalink(get_page_by_path("services"))?>"><p class="text-black"><?php echo esc_html(get_field('service_six'));?></p></a>
            <?php endif;?>
        </div>
    </div>

    <div id="services-third3" class="row d-flex justify-content-around">
        <div class="col-12 col-sm-3">
            <?php if (get_field('service_seven')):?>
              <a class="text-black" href="<?php echo get_permalink(get_page_by_path("services"))?>"><p class="text-black"><?php echo esc_html(get_field('service_seven'));?></p></a>
            <?php endif;?>
        </div>
        <div class="col-12 col-sm-3">
            <?php if (get_field('service_eight')):?>
              <a class="text-black" href="<?php echo get_permalink(get_page_by_path("services"))?>"><p class="text-black"><?php echo esc_html(get_field('service_eight'));?></p></a>
            <?php endif;?>
        </div>
        <div class="col-12 col-sm-3">
            <?php if (get_field('service_nine')):?>
              <a class="text-black" href="<?php echo get_permalink(get_page_by_path("services"))?>"><p class="text-black"><?php echo esc_html(get_field('service_nine'));?></p></a>
            <?php endif;?>
        </div>
    </div>
</div>


<!-- Inspo-section -->
<div id="newsletter-box" class="newsletter">
  <img id="newsletter-img" src="<?php the_field("newsletter_image")?>" alt="">
    <div id="inspo-section" class="">
      <div id="inspo-text" class="">
          <h1>MANGLER DU <strong>INSPIRATION?</strong></h1>
          <h2>VI HAR ET STORT UDVALG</h2>
      </div>
      <div>
      <p class="py-3"> Hos Sørens Farve & Tapet har vi det meste, når det kommer til boligindretning og brugskunst, og vi har uden tvivl også noget der falder lige i din smag. På vores galleriside kan du få en masse inspiration til, hvad du kan finde i butikken og på samme tid blive inspireret til hvordan du kan skabe stemning i dit hjem.</p>  
    </div>
        <u><a class="text-black" href="<?php echo get_permalink(get_page_by_path("Galleri")) ?>"><button id="btn" type="button" class="btn btn-dark">Få inspiration her</button></a></u>
    </div>
</div>



<?php get_footer()?> 