<?php 

    // Returns a URL to a path
    // Adds a leading '/' if one has not been provided.
    function get_public_url($path = "") {
        if($path[0] != '/') {
            $path = '/' . $path;
        }
        return WWW_ROOT . '/public' . $path;
    }

    // Redirect users to path specified in $path
    function redirect($path) {
        header('Location: ' . get_public_url($path) );
    }

    // Returns the location on the server to a path
    // Adds a leading '/' if one has not been provided.
    function get_path($path = "") {
        if($path[0] != '/') {
            $path = '/' . $path;
        }
        return PROJECT_ROOT . $path;
    }

    function get_project_path($path = "") {
        if($path[0] != '/') {
            $path = '/' . $path;
        }
        return PROJECT_ROOT . $path;
    }

    // Return special characters as HTML entities
    function h($str) {
        return htmlspecialchars($str);
    }

    // Prints human readable data to test, and prevent the script from continuing
    function dd($data) {
        echo wrap_pre($data);
        die();
    }

    // Connect to database
    function db_connect() {

        // Create the variables for the following: 
        $host = DB_HOST;
        $username = DB_USER;
        $password = DB_PASS;
        $db_name =  DB_NAME;
    
        // Define the $db variable to be called upon later.
        $db = new mysqli($host, $username, $password, $db_name);
    
        if($db->connect_errno) {
            echo "Failed to connect to MySQL: " . $db -> connect_error;
            exit();
        }
    
        return $db;
    }