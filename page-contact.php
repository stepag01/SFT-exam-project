<?php get_header() ?>

<?php
if (have_posts()) : the_post();
      while (have_posts()) : the_post(); 
      endwhile;
endif;
?> 

<div id="contact-container-box" class="item">
<div class="text-center pt-3 pb-3">
    <div>
        <h2 id="contact-heading"><strong>SØRENS FARVE & TAPET</strong></h2>
    </div>
    <div>
        <?php if ( get_field('contact_title_') ):?> 
            <em><h3 id="contact-title" class="text-black"><?php echo esc_html( get_field('contact_title_') );?></h3></em>
        <?php endif;?>
    </div>
</div>

<section id="contact-box" class="mb-4 pt-5">
    <div class="row w-100 justify-content-center">
        <div class="col-md-4 mb-5 me-3">
            <img id="contact-hero-image" src="<?php the_field("contact_image")?>" class="mx-auto">
        </div>

        <div id="contact-info-section" class="col-md-5 text-start pt-5 pb-3 px-5">
            <ul id="contact-info-textarea1" class="list-unstyled">
                <li class="d-flex align-items-center pt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="29" fill="currentColor" class="bi bi-geo-alt-fill mb-2" viewBox="0 0 17 17">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                        </svg>
                        <?php if (get_field('adresse')):?>
                              <p class="text-black ms-3"><?php echo esc_html(get_field('adresse'));?></p>
                        <?php endif; ?>
                </li>

                <li class="d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone mb-2" viewBox="0 0 17 17">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                  <?php if (get_field('phone_number')):?>
                        <p class="text-black ms-3"><?php echo esc_html(get_field('phone_number'));?></p>
                  <?php endif; ?>
                </li>

                <li class="d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope mb-2" viewBox="0 0 17 17">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg>
                  <?php if (get_field('email')):?>
                        <p class="text-black ms-3"><?php echo esc_html(get_field('email'));?></p>
                  <?php endif; ?>
                </li>
            </ul>
            <div>
            <p id="headline2-contact" class="text-black mb-4 pt-4">ÅBNINGSTIDER</p>
                    <div class="row">
                        <div id="contact-info-textarea2" class="col d-flex">
                            <div>
                                <p>Man-Fre:</p>
                                <p>Lørdag:</p>
                                <p>Søndag:</p>
                            </div>
                            <div class="px-4">
                            <?php if (get_field('opening_hours_monday_friday')):?>
                                <p class="text-black"><?php echo esc_html(get_field('opening_hours_monday_friday'));?></p>
                            <?php endif; ?>
                            <?php if (get_field('opening_hours_saturday')):?>
                                <p class="text-black"><?php echo esc_html(get_field('opening_hours_saturday'));?></p>
                            <?php endif; ?>
                                <p>LUKKET</p>
                            </div>
                        </div>
                    </div>
                </div>
                  
        </div> 
    </div>


    <div class="text-center pt-5 px-3 px-sm-5">
        <h3>HAR DU YDERLIGERE <strong>SPØRGSMÅL?</strong></h3>
        <div class="px-3 px-sm-5 pt-3">
            <?php if (get_field('contact_form_text_area')): ?> 
                <p class="text-black"><?php echo esc_html(get_field('contact_form_text_area')); ?></p>
            <?php endif; ?>  
        </div>
    </div>
    

<div id="contact-form-box" class="item">
  <div class="row w-100 justify-content-center">
    <div class="col-md-6 col-lg-5 pt-5">
      <div class="img pb-5 text-center">
        <img id="contact-img" src="<?php the_field("contact_form_image") ?>" class="mx-auto" alt="">
      </div>
    </div>
    <div id="service-contact-section" class="px-5 col-md-6 col-lg-5">
    <h3 id="contact-form-headline" class="pt-5">VI STÅR KLAR TIL AT <strong>HJÆLPE DIG</strong></h3>
        <?php echo do_shortcode('[contact-form-7 id="b7c4d11" title="Kontakt-form2"]')?>
    </div>
  </div>
</div>

</section>
</div>


<?php get_footer()?> 