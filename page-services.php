<?php get_header() ?>

<?php
if (have_posts()) : the_post();
      while (have_posts()) : the_post(); 
      endwhile;
endif;
?> 

<div class="item text-center px-5"> 
      <div class="pt-5">
            <h2>YDELSER HOS <strong>SØRENS FARVE & TAPET</strong></h2>
      </div>
      <div class="py-1">
          <?php if ( get_field('service_title_description') ):?> 
              <em><h3 id="services-title" class="text-black"><?php echo esc_html( get_field('service_title_description') );?></h3></em>
          <?php endif;?>
      </div>
      <div class="pt-2 pb-3 pb-sm-4 px-3 px-sm-5">
          <?php if ( get_field('service-description') ):?> 
              <p class="text-black"><?php echo esc_html( get_field('service-description') );?></p>
          <?php endif;?>
      </div>
</div>


<div class="d-flex flex-wrap justify-content-center pt-3 pb-2 px-5">
    <div class="card m-3 col-12 col-sm-6" style="width: 16.5rem;">
        <div><img src="<?php the_field("service-one-image")?>" class="" alt="..." width="263" height="300"></div>
        <div class="card-body">
            <?php if (get_field('service-heading-one')): ?>
                <p class="text-black"><strong><?php echo esc_html(get_field('service-heading-one'));?></strong></p>
            <?php endif; ?>
            <?php if (get_field('service-description-one')): ?>
                <p class="text-black"><?php echo esc_html(get_field('service-description-one')); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="card m-3 col-12 col-sm-6" style="width: 16.5rem;">
        <div><img src="<?php the_field("service-two-image")?>" class="" alt="..." width="263" height="300"></div>
        <div class="card-body">
            <?php if (get_field('service-heading-two')): ?>
                <p class="text-black"><strong><?php echo esc_html(get_field('service-heading-two'));?></strong></p>
            <?php endif; ?>
            <?php if (get_field('service-description-two')): ?>
                <p class="text-black"><?php echo esc_html(get_field('service-description-two'));?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="card m-3 col-12 col-sm-6" style="width: 16.5rem;">
        <div><img src="<?php the_field("service-three-image")?>" class="" alt="..." width="263" height="300"></div>
        <div class="card-body">
            <?php if (get_field('service-heading-three')): ?>
                <p class="text-black"><strong><?php echo esc_html(get_field('service-heading-three'));?></strong></p>
            <?php endif; ?>
            <?php if (get_field('service-description-three')): ?>
                <p class="text-black"><?php echo esc_html(get_field('service-description-three'));?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="card m-3 col-12 col-sm-6" style="width: 16.5rem;">
        <div><img src="<?php the_field("service-four-image")?>" class="" alt="..." width="263" height="300"></div>
        <div class="card-body">
            <?php if (get_field('service-heading-four')): ?>
                <p class="text-black"><strong><?php echo esc_html(get_field('service-heading-four'));?></strong></p>
            <?php endif; ?>
            <?php if (get_field('service-description-four')): ?>
                <p class="text-black"><?php echo esc_html(get_field('service-description-four'));?></p>
            <?php endif; ?>
        </div>
    </div>
</div>


<div class="item text-center px-5">
  <div class="pt-5 px-4">
    <h4>SKAL <strong>VI HJÆLPE DIG </strong> MED DIT NÆSTE PROJEKT ?</h4>
  </div>
  <div class="text-center pt-3 px-3 px-sm-5">
    <?php if (get_field('contact_form_description_one')): ?>
      <p class="text-black"><?php echo esc_html(get_field('contact_form_description_one')); ?></p>
    <?php endif; ?>
  </div>
</div>


<div id="service-box" class="item">
  <div class="row justify-content-center w-100">
    <div class="col-md-6 col-lg-5 pt-5">
      <div class="img pb-5 text-center">
        <img id="service-img" src="<?php the_field("service_section_contact_image") ?>" class="mx-auto" alt="">
      </div>
    </div>
    <div id="service-contact-section" class="col-md-6 col-lg-5">
      <h5 id="contact-heading">HOS <strong>SØRENS FARVE & TAPET</strong><br> ER VI KLAR TIL <strong> HJÆLPE DIG</strong></h5>
      <?php echo do_shortcode('[contact-form-7 id="cf12f98" title="Kontakt-form1"]')?>
    </div>
  </div>
</div>




<?php get_footer()?> 