<?php get_header()?>

<?php
if (have_posts()):the_post();
      while (have_posts()):the_post(); 
      endwhile;
endif;
?> 

<div class="item text-center px-5">
  <div class="pt-5">
    <h2>CASES HOS <strong>SØRENS FARVE & TAPET</strong></h2>
  </div>
  <div class="py-1">
    <?php if (get_field('case_title_description')):?> 
      <em><h3 id="cases-title" class="text-black"><?php echo esc_html(get_field('case_title_description'));?></h3></em>
    <?php endif;?>
  </div>
  <div class="pt-3 px-2 text-center px-sm-5">
    <?php if (get_field('cases_description')):?> 
      <p class="text-black"><?php echo esc_html(get_field('cases_description'));?></p>
    <?php endif;?>
  </div>
</div>


<div id="cases-box" class="item">
  <div class="row w-100">
    <!-- Case One -->
    <div class="col-md-6 px-3 pt-5"> 
      <div class="img py-4">
        <img id="cases-img1" src="<?php the_field("case_one_image")?>" alt="" class="">
      </div>
    </div>
    <div class="col-md-5 d-flex align-items-center px-3"> 
      <div class="pt-5">
        <?php if ( get_field('case_customer_one') ):?> 
          <p id="case-paragraf1" class="text-black"><strong><?php echo esc_html( get_field('case_customer_one') );?></strong></p>
        <?php endif;?>
        <?php if ( get_field('case_headline_one_') ):?> 
          <p class="text-black"><?php echo esc_html( get_field('case_headline_one_') );?></p>
        <?php endif;?>
        <div class="pt-4">
          <?php if ( get_field('case_description_one') ):?> 
            <p id="case-description1" class="text-black"><?php echo esc_html( get_field('case_description_one') );?></p>
          <?php endif;?>
        </div>
      </div>
    </div>

    <!-- Case Two -->
    <div class="col-md-6 px-3 pt-5"> 
      <div class="img py-4">
        <img id="cases-img2" src="<?php the_field("case_two_image")?>" alt="" class="">
      </div>
    </div>
    <div class="col-md-5 d-flex align-items-center px-3"> 
      <div class="pt-5">
        <?php if ( get_field('case_customer_two') ):?> 
          <p id="case-paragraf2" class="text-black"><strong><?php echo esc_html( get_field('case_customer_two') );?></strong></p>
        <?php endif;?>
        <?php if ( get_field('case_headline_two') ):?> 
          <p class="text-black"><?php echo esc_html( get_field('case_headline_two') );?></p>
        <?php endif;?>
        <div class="pt-4">
          <?php if ( get_field('case_description_two') ):?> 
            <p id="case-description2" class="text-black"><?php echo esc_html( get_field('case_description_two') );?></p>
          <?php endif;?>
        </div>
      </div>
    </div>

    <!-- Case Three -->
    <div class="col-md-6 px-3 pt-5"> 
      <div class="img py-4 pb-5">
        <img id="cases-img3" src="<?php the_field("case_three_image")?>" alt="" class="">
      </div>
    </div>
    <div class="col-md-5 d-flex align-items-center px-3"> 
      <div class="pt-5">
        <?php if ( get_field('case_customer_three') ):?> 
          <p id="case-paragraf3" class="text-black"><strong><?php echo esc_html( get_field('case_customer_three') );?></strong></p>
        <?php endif;?>
        <?php if ( get_field('case_headline_three') ):?> 
          <p class="text-black"><?php echo esc_html( get_field('case_headline_three') );?></p>
        <?php endif;?>
        <div class="pt-4 pb-5">
          <?php if ( get_field('case_description_three') ):?> 
            <p id="case-description3" class="text-black"><?php echo esc_html( get_field('case_description_three') );?></p>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</div>



















      







<?php get_footer()?> 