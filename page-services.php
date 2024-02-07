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
      <div class="pt-2 pb-0 pb-sm-4 px-3 px-sm-5">
          <?php if ( get_field('service-description') ):?> 
              <p class="text-black"><?php echo esc_html( get_field('service-description') );?></p>
          <?php endif;?>
      </div>
</div>

<section>
  <div id="cCarousel">
    <div class="arrow pb-1" id="prev">←<i class="fa-solid fa-chevron-left"></i></div>
    <div class="arrow pb-1" id="next">→<i class="fa-solid fa-chevron-right"></i></div>

    <div id="carousel-vp">
      <div id="cCarousel-inner">

        <article class="cCarousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/boligindretning.jpg" class="" alt="">
          <div class="infos mt-3">
            <h6><strong>BOLIGINDRETNING</strong></h6>
            <p>
                Vi tilbyder hos Sørens Farve og Tapet boligindretning, for dig som 
                mangler nye ideer og inspiration. Er du i tvivl om hvilke trends, 
                møbler og farver til boligen der hitter, så står vi altid til rådighed 
                med professionel rådgivning du kan bruge til noget.
            </p>
          </div>
        </article>

        <article class="cCarousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/maling.jpg" class="" alt="">
          <div class="infos pt-3">
            <h6><strong>MALING AF VÆGGE</strong></h6>
            <p>
                Vi tilbyder hos Sørens Farve og Tapet maling af den højeste kvalitet.  
                Står du og mangler professionel vejledning, så er du i trygge hænder hos os. 
                Vi står altid klar til at hjælpe dig, med dine ønsker og drømme. Vi har et bredt udvalg.
            </p>
          </div>
        </article>

        <article class="cCarousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hero-img.jpg.jpg" class="" alt="">
          <div class="infos pt-3">
            <h6><strong>TAPET</strong></h6>
            <p>
            Vi tilbyder hos Sørens Farve og Tapet et bredt udvalg af tapet. Vi har et bredt 
            sortiment i alverdens farver og mønstre, så du har et væld af muligheder at vælge imellem. Vi er 
            altid behjælpelige, og klar med rådgivning, så du får de bedst mulige resultater. 
            </p>
          </div>
        </article>

        <article class="cCarousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/gulvbelægning.jpg" class="" alt="">
          <div class="infos pt-3">
            <h6><strong>GULVBELÆGNING</strong></h6>
            <p>
            Vi tilbyder hos Sørens Farve og Tapet gulvbelægning, af den højeste kvalitet. Om du er til
            "gør-det-selv" eller har behov for professionelle, garanterer vi kyndig rådighed. 
            Vi har et bredt udvalg i butikken, så der er noget for enhver smag.
            </p>
          </div>
        </article>

        <article class="cCarousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gardiner.jpg" class="" alt="">
          <div class="infos pt-3">
            <h6><strong>GARDINER</strong></h6>
            <p>
                Vi tilbyder hos Sørens Farve og Tapet et bredt udvalg af løsninger til gardiner og solafskærmning. 
                Gardiner skal både være flotte og funktionelle. Vi vil gerne hjælpe dig, så du får gardiner, du bliver 
                glad for. Vi måler naturligvis op og monterer. 
            </p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<div class="item text-center px-5 pb-4">
  <div class="pt-3 px-4">
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
    <div class="col-md-6 col-lg-5">
      <div class="img text-center">
        <img id="service-img" src="<?php the_field("service_section_contact_image") ?>" class="mx-auto" alt="">
      </div>
    </div>
    <div id="service-contact-section" class="col-md-6 col-lg-5">
      <h5 id="contact-heading">HOS <strong>SØRENS FARVE & TAPET</strong><br> ER VI KLAR TIL <strong> HJÆLPE DIG</strong></h5>
      <?php echo do_shortcode('[contact-form-7 id="e587677" title="Kontaktform-1"]')?>
    </div>
  </div>
</div>





<?php get_footer()?> 