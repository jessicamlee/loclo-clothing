<?php 

    require('../../app/init.php');

    $product_cat = $_GET['product_cat'] ?? '';

    if($_GET['product_cat']) {

        // If there is a value of the product_cat, then run the GET request to retrieve the data for the value.

        $spring22collect = Category::find_all_by_category($product_cat);

    } else {

        // If there is no value of the product_cat, then run the find_all(); function.
        $spring22collect = FeatureProducts::find_all();
    }

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
        <script src="../scripts/main.js"></script>
    </body>
</html>