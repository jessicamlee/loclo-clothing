<?php 

    require('../../app/init.php');
    $spring22collect = FeatureProducts::find_all();

?><!DOCTYPE html>
<html lang="en-CA">
    <head>
        <?php
            $title_text = "Shop the Latest &vert; LOCLO Clothing";
            require('../partials/pages/head_pages.php');
        ?>
    </head>
    <body class="theme-wrapper">
        <?php 
            $active_page = "shopall";
            include('../partials/pages/header_pages.php');
        ?>
        <main class="main-shopall">
            <?php include('../partials/shopall/featureproducts.php'); ?>
            <?php include('../partials/pages/footer_pages.php'); ?>
        </main>
        <script src="../../node_modules/aos/dist/aos.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>