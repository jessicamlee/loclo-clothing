<?php 
    // Define Path Constants
    define('WWW_ROOT', 'http://localhost/loclo-clothing');
    define('PROJECT_ROOT', dirname(__FILE__));

    // Add Database Constants
    define('DB_HOST', 'localhost');
    define('DB_USER', 'loclo_clothing_mngr');
    define('DB_PASS', 'r0!oT');
    define('DB_NAME', 'loclo_clothing');

    // Include functions
    require('functions.php');

    // Connect to the database
    // $db = db_connect();