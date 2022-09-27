<?php 

    require('../app/init.php');

?><!DOCTYPE html>
<html lang="en-CA">
    <head>
        <?php
            $title_text = "LOCLO &vert; living locally&period;";
            require ('partials/global/head.php');
        ?>
    </head>
    <body class="theme-wrapper">
        <?php 
            $active_page = "home";
            require ('partials/global/header.php');
        ?>
        <main>
            <section class="bnr container section-height" data-aos="fade-right" data-aos-delay="400">
                <div class="left-col col" data-aos="fade-right" data-aos-delay="400">
                    <p>Shop the Drop&colon; <br><span>Spring Local 2022</span></p>
                </div>
                <div class="img-container">
                    <img src="images/pexels-cottonbro-6626999.jpg" alt="Three male models sitting together">
                </div>
                <div class="right-col col is-flex" data-aos="fade-up" data-aos-delay="600">
                    <a class="btn box-shadow" href="#" title="View Spring Local Collection">View Now</a>
                </div>
            </section>
            <section class="why-loclo is-flex container section-padding" data-aos="fade-left" data-aos-delay="800">
                <div class="display-flex">
                    <div class="left-col col is-flex" data-aos="fade-right" data-aos-delay="700">
                        <h2>Why <br>LOCLO&quest;</h2>
                    </div>
                    <div class="right-col col" data-aos="fade-left" data-aos-delay="700">
                        <p>LOCLO is&comma; as it sounds&comma; &quot;local&period;&quot;</p>
                        <p>We want to sustainably make comfortable clothes for every body&period;</p>
                        <p>No one wants to buy the same pair of shorts five times within a year when they can buy <b><em>one</em></b> good quality pair of shorts that will last a long time&period;</p>
                        <p class="hidden show">There&apos;s more to our story&period; Continue reading to learn more&period;</p>
                        <div class="is-flex" data-aos="fade-up" data-aos-delay="800">
                            <a class="btn box-shadow" href="#" title="Learn More">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="new-arrivals container section-padding" data-aos="fade-up" data-aos-delay="300">
                <h2>New Arrivals</h2>
                <ul class="new-items is-flex">
                    <li>
                        <img class="box-shadow" src="images/pexels-polina-tankilevitch-6945618.jpg" alt="Two women in sage silk dresses">
                        <h3>Summer Slip Dress</h3>
                        <p>&dollar;85&period;00</p>
                    </li>
                    <li>
                        <img class="box-shadow" src="images/pexels-angela-roma-7479835.jpg" alt="Two women in black and sand hoodies">
                        <h3>Classic Hoodie</h3>
                        <p>&dollar;110&period;00</p>
                    </li>
                    <li>
                        <img class="box-shadow" src="images/pexels-anna-shvets-4557402.jpg" alt="Two women in white tank tops">
                        <h3>Cropped White Tee</h3>
                        <p>&dollar;65&period;00</p>
                    </li>
                    <li class="hidden show-one-product">
                        <img class="box-shadow" src="images/pexels-cottonbro-6626903.jpg" alt="Man with pullover and bucket hat">
                        <h3>Classic Pullover</h3>
                        <p>&dollar;95&period;00</p>
                    </li>
                    <li class="hidden">
                        <img class="box-shadow" src="images/pexels-monstera-6311599.jpg" alt="Woman in round-neck tee shirt">
                        <h3>Classic Tee</h3>
                        <p>&dollar;60&period;00</p>
                    </li>
                    <li class="hidden">
                        <img class="box-shadow" src="images/pexels-polina-kovaleva-5885670.jpg" alt="Man with pullover and bucket hat">
                        <h3>Spring Frill Dress</h3>
                        <p>&dollar;90&period;00</p>
                    </li>
                </ul>
                <div class="is-flex" data-aos="fade-up" data-aos-delay="300">
                    <a class="btn box-shadow" href="#" title="Shop All">Shop All</a>
                </div>
            </section>
        </main>
        <?php require ('partials/global/footer.php'); ?>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="scripts/main.js"></script>
    </body>
</html>