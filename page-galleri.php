<?php get_header() ?>

<?php
if (have_posts()) : the_post();
      while (have_posts()) : the_post(); 
      endwhile;
endif;
?> 

<div class="text-center pt-5 px-5">
        <h2>SØRENS FARVE & TAPET <strong>GALLERI</strong></h2>
        <?php if (get_field('galleri_titel')): ?>
            <em><h3 id="galleri-title" class="text-black"><?php echo esc_html(get_field('galleri_titel'));?></h3></em>
        <?php endif; ?>
    </div>

<!-- Gallery -->
<div id="galleri" class="row w-100 d-flex justify-content-center mt-5 mb-5">
    
    <div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
        <?php $image = get_field("image_one")?>
        <img src="<?php echo $image["sizes"]["medium"]?>" class="zoom-img mt-4">
        <?php $image = get_field("image_two")?>
        <img src="<?php echo $image["sizes"]["medium"]?>" class="zoom-img mt-5">
    </div>

    <div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
        <?php $image = get_field("image_three")?>
        <img src="<?php echo $image["sizes"]["medium"]?>" class="zoom-img mt-4">
        <?php $image = get_field("image_four")?>
        <img src="<?php echo $image["sizes"]["medium"]?>" class="zoom-img mt-5">
    </div>

    <div class="col-md-4 col-lg-3 mb-4 mb-lg-0"> 
        <?php $image = get_field("image_five")?>
        <img src="<?php echo $image["sizes"]["medium"]?>" class="zoom-img mt-4">
        <?php $image = get_field("image_six")?>
        <img src="<?php echo $image["sizes"]["medium"]?>" class="zoom-img mt-5">
    </div>
</div>



<?php get_footer()?> 