<?php 
    // Define Path Constants
    define('WWW_ROOT', 'http://localhost/loclo-clothing');
    define('PROJECT_ROOT', dirname(__DIR__, 1));

    // Add Database Constants
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'loclo_clothing');

    // Include functions
    require('functions.php');

    // Add the FeatureProducts Class
    require(get_path('app/Classes/FeatureProducts.php'));

    // Connect to the database
    $db = db_connect();

    // Call upon the set_db function to pass db stored in $db to the class. All objects created from class will now have access to $db.
    FeatureProducts::set_db($db);
