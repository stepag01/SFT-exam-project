<?php wp_footer()?>

<!-- FOOTER -->
<footer id="footer-box" class="w-100 flex-shrink-0 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 pt-3">
                    <img src="<?php echo get_template_directory_uri()?>/img/SFT-logo.png" height="50" width="170">
                    <ul class="list-unstyled text-black pt-2"> 
                        <li>
                            <a class="footer-link text-black" href="<?php echo get_permalink(get_page_by_path("front-page"))?>">Forside</a>
                        </li>
                        <li>
                            <a class="footer-link text-black" href="<?php echo get_permalink(get_page_by_path("about-us"))?>">Om os</a>
                        </li>
                        <li>
                            <a class="footer-link text-black" href="<?php echo get_permalink(get_page_by_path("services"))?>">Vores ydelser</a>
                        </li>
                        <li>
                            <a class="footer-link text-black" href="<?php echo get_permalink(get_page_by_path("cases"))?>">Cases</a>
                        </li>
                        <li>
                            <a class="footer-link text-black" href="<?php echo get_permalink(get_page_by_path("galleri"))?>">Galleri</a>
                        </li>
                        <li>
                            <a class="footer-link text-black" href="<?php echo get_permalink(get_page_by_path("contact"))?>">Kontakt</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 pt-4">
                    <p class="text-black mb-4">KONTAKT</p>
                    <div>
                      <p>Storegade 11</p>
                      <p>6740, Bramming</p>
                      <p>75 17 43 96</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-4">
                    <p class="text-black mb-4">ÅBNINGSTIDER</p>
                    <div class="row">
                    <div class="row">
                        <div class="col d-flex">
                            <div>
                                <p>Man-Fre:</p>
                                <p>Lørdag:</p>
                                <p>Søndag:</p>
                            </div>
                            <div class="px-4">
                                <p>9.00 - 17.30</p>
                                <p>9.00 - 13.00</p>
                                <p>LUKKET</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div id="socials-footer" class="col-lg-4 col-md-6 pt-4 px-3">
                    <p class="text-black mb-1 px-1">FØLG OS HER</p>
                    <div class="row py-3 px-1">
                        <div class="col">
                        <a href="https://www.facebook.com/farveogtapet/">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22" height="22" viewBox="0 0 24 24">
                                <path d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z"></path>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/sorensfarve/">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22" height="22" viewBox="0 0 24 24">
                                <path d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"></path>
                            </svg>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
