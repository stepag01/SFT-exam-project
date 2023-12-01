<?php get_header() ?>

<?php
if (have_posts()) : the_post();
      while (have_posts()) : the_post(); 
      endwhile;
endif;
?> 

<!-- Gallery -->
<div id="galleri" class="row w-100 d-flex justify-content-center mt-5 mb-5">
    <div class="text-center pb-5">
        <h3><strong>SØRENS FARVE & TAPET</strong></h3>
        <h5>GALLERI INSPIRATION</h5>
    </div>
    
    <div class="col-md-12 col-lg-3 mb-4 mb-lg-0">
        <img src="<?php the_field("image_one")?>" class="w-100 zoom-img">
        <img src="<?php the_field("image_two")?>" class="w-100 zoom-img mt-4">
    </div>

    <div class="col-md-12 col-lg-3 mb-4 mb-lg-0">
        <img src="<?php the_field("image_three")?>" class="w-100 zoom-img">
        <img src="<?php the_field("image_four")?>" class="w-100 zoom-img mt-4">
    </div>

    <div class="col-md-12 col-lg-3 mb-4 mb-lg-0"> 
        <img src="<?php the_field("image_five")?>" class="w-100 zoom-img mb-4">
        <img src="<?php the_field("image_six")?>" class="w-100 zoom-img">
    </div>
</div>



<?php get_footer()?> 