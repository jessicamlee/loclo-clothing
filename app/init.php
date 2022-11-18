<?php 
    define('PROJECT_ROOT', dirname(__DIR__, 1));
    require('env.php');

    // Include functions
    require('functions.php');

    // Add the FeatureProducts Class
    require(get_path('app/Classes/FeatureProducts.php'));
    require(get_path('app/Classes/Category.php'));

    // Connect to the database
    $db = db_connect();

    // Call upon the set_db function to pass db stored in $db to the class. All objects created from class will now have access to $db.
    FeatureProducts::set_db($db);
    Category::set_db($db);
