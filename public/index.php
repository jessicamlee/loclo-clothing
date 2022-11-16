<?php 

    require('../app/init.php');
    $spring22collect = FeatureProducts::find_all();

?><!DOCTYPE html>
<html lang="en-CA">
    <head>
        <?php
            $title_text = "Spring Local 2022 &vert; LOCLO Clothing";
            require('partials/global/head.php');
        ?>
    </head>
    <body class="theme-wrapper">
        <?php 
            $active_page = "home";
            include('partials/global/header.php');
        ?>
        <main class="main-home">
            <?php include('partials/home/banner.php'); ?>
            <?php include('partials/home/whyloclo.php'); ?>
            <?php include('partials/home/newarrivals.php'); ?>
            <?php include('partials/global/footer.php'); ?>
        </main>
        <script src="../node_modules/aos/dist/aos.js"></script>
        <script src="scripts/main.js"></script>
    </body>
</html>