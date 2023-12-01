<?php get_header() ?>

<?php
if (have_posts()) : the_post();
      while (have_posts()) : the_post(); 
      endwhile;
endif;
?>

<!-- Hero-sektion -->
<section class="bgimage">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
          <div class="hero-text">
            <div>
              <?php if ( get_field('headline' ) ):?> <!-- hero image - headline -->
                <h1 class=""><strong><?php echo esc_html( get_field('headline'));?></strong></h1>
              <?php endif;?>
            </div>
            <div class="mt-3">
              <?php if ( get_field('paragraph' ) ):?> <!-- hero image - paragraf -->
                <h5 class=""><?php echo esc_html( get_field('paragraph') );?> <strong><u><a class="text-black" href="<?php echo get_permalink(get_page_by_path("Cases"))?>">HER</a></u></strong></h5>
              <?php endif;?>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<!-- Deres brands -->
<div id="brands-box" class="px-5 text-center">
  <div class="row">
      <div class="col-lg-3 col-sm-3 col-md-6 mt-3">
        <img src="<?php the_field("brand_image_one")?>" height="90">
      </div>
      <div class="col-lg-3 col-sm-3 col-md-6 mt-3">
        <img src="<?php the_field("brand_image_two")?>" height="90">
      </div>
      <div class="col-lg-3 col-sm-3 col-md-6 mt-3">
        <img src="<?php the_field("brand_image_three")?>" height="90">
      </div>
      <div class="col-lg-3 col-sm-3 col-md-6 mt-3">
        <img src="<?php the_field("brand_image_four")?>" height="90">
      </div>
  </div>
</div> 



<!-- Titel -->
<div class="text-center mt-5 px-4 px-sm-2"> <!-- Adjusted padding for small screens and left padding for large screens -->
  <div class="pt-4 pb-2">
    <h3> VORES <strong> YDELSER </strong></h3>
  </div>
  <div class="px-3 px-md-5">
    <?php if (get_field('description')):?> 
        <p class="text-black px-3 px-sm-0"> <!-- Adjusted padding for small screens -->
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


<!-- newsletter -->
<div id="newsletter-box" class="newsletter">
  <img id="newsletter-img" src="<?php the_field("newsletter_image")?>" alt="">
  <div>
      <div class="text-start px-5">
        <h2 id="tilmeld">TILMELD DIG VORES<strong> NYHEDSBREV</strong></h2> 
      </div>
      <div class="text-start px-5 py-2">
        <p class="me-5">Hold dig opdateret på vores arrangementer i butikken samt løbende tilbud via vores nyhedsbrev, ved at tilmelde dig herunder.</p>
      </div>
      <div id="mc_embed_signup">
        <form action="https://easv365.us21.list-manage.com/subscribe/post?u=b86e2bda8f5db7614c413780b&amp;id=a1de8dac54&amp;f_id=0055ece6f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
            <div id="mc_embed_signup_scroll">
                <div class="mc-field-group">
                  <div>
                    <div class="row d-flex">
                      <label for="mce-FNAME">Dit fornavn <span class="asterisk">*</span></label>
                    </div>
                    <div class="pt-2">
                      <input type="text" name="FNAME" class="text" id="mce-FNAME" value=""></div><div class="mc-field-group">
                    </div>

                    <div class="row d-flex">
                      <label for="mce-LNAME">Dit efternavn </label>
                    </div>
                    <div class="pt-2">
                      <input type="text" name="LNAME" class="text" id="mce-LNAME" value=""></div><div class="mc-field-group">
                    </div>

                    <div class="row d-flex">
                      <label for="mce-LNAME">Din email <span class="asterisk">*</span></label>
                    </div>
                    <div class="pt-2">
                      <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value=""></div><div class="mc-field-group">
                    </div>

                    <div class="row d-flex">
                      <label for="mce-PHONE">Dit mobilnummer </label>
                    </div>
                    <div class="pt-2">
                      <input type="text" name="PHONE" class="REQ_CSS" id="mce-PHONE" value="">
                    </div>
                  </div>
                  <div class="indicates-required pt-2"><span class="asterisk">*</span> Påkrævet</div>
                </div>
                <div id="mce-responses" class="clear foot">
                <div class="response" id="mce-error-response" style="display: none;"></div>
                <div class="response" id="mce-success-response" style="display: none;"></div>

            </div>
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
                <input type="text" name="b_b86e2bda8f5db7614c413780b_a1de8dac54" tabindex="-1" value="">
            </div>
                <div class="optionalParent">
                    <div class="clear foot">
                        <input type="submit" name="tilmeld" id="mc-embedded-subscribe" class="button" value="Tilmeld">
                        <p style="margin: 0px auto;"><a href="http://eepurl.com/iE-be2" title="Mailchimp - email marketing made easy and fun"><span style="display: inline-block; background-color: transparent; border-radius: 4px;"></span></a></p>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>
</div>



<!-- Anmeldelser -->
<div id="anmeldelses-box" class="container pt-5">
    <div class="text-center pt-3">
        <h3><strong>DIN MENING </strong> BETYDER MEGET FOR OS</h3>
    </div>
</div>


<?php
$Reviews = new WP_Query(
  array(
    "post_type" => "review",
    "posts_per_page" => -1
  )
);
?>

<div id="anmeldelses-section" class="container">
  <div class="row text-center">
    <?php while($Reviews->have_posts()): $Reviews->the_post()?>
      <div class="col-md-4 col-lg-4 mb-4">
        <div class="d-flex justify-content-center mb-2 font-italic px-3">
          <div class="thumb"><img src="<?php the_field("image")?>" class="rounded-circle shadow-1-strong" width="50" height="50" alt=""></div>
        </div>
        <h6 class="text-center mt-2 text-black"><strong><?php echo esc_html(get_field('name'));?></strong></h6>
        <p id="review-description" class="text-center mt-2 mb-4 text-black"><?php echo esc_html(get_field('review_description'));?></p>
      </div>
    <?php endwhile;?>
    <?php wp_reset_postdata()?>
  </div>
</div>


<?php get_footer()?> 