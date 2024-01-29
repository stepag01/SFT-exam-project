<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("Sørens Farve & Tapet") ?></title>
    <?php wp_head()?> 
</head>
<body>
<nav>
    <div class="navbar"> <!-- fixed-top -->
        <div class="container nav-container">
            <input class="checkbox" type="checkbox"/>
            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>  
            <div class="logo pb-1">
             <a href="<?php echo get_permalink(get_page_by_path("front-page"))?>"><img src="<?php echo get_template_directory_uri()?>/img/SFT-logo.png" height="50" width="170"></a>
            </div>
          <div class="menu-items">
          <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-black me-lg-6 px-4" href="<?php echo get_permalink(get_page_by_path("front-page"))?>">FORSIDE</a>
        <li class="nav-item">
          <a class="nav-link text-black me-lg-6 px-4" href="<?php echo get_permalink(get_page_by_path("about-us"))?>">OM OS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black me-lg-6 px-4" href="<?php echo get_permalink(get_page_by_path("services"))?>">VORES YDELSER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black me-lg-6 px-4" href="<?php echo get_permalink(get_page_by_path("cases"))?>">CASES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black me-lg-6 px-4" href="<?php echo get_permalink(get_page_by_path("galleri"))?>">GALLERI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black me-lg-6 px-4" href="<?php echo get_permalink(get_page_by_path("contact"))?>">KONTAKT</a>
        </li>
      </ul>
          </div>
        </div>
      </div>
    </nav>


