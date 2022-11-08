<?php

    class Category {

        static protected $db;
        
        public $category_id;
        public $category;

        // Set the database via function named "set_db". This line will refer to the connection defined by "$db = db_connect();" noted in functions.php.
        static public function set_db($db) {
            self::$db = $db;
        }

        // Create the connection to pass the details from spring22.php as a $props/property in the following function.
        public function __construct($props = []) {
            $this->category_id = $props['category_id'] ?? null;
            $this->category = $props['category'] ?? null;
        }

        static public function find_all() {
            // Add SQL variable to request ALL the data, using "SELECT" and "*" for all from all the notes entries.
            $sql = "SELECT * FROM categories";

            // Get the result for retrieving all the FeatureProducts by running the query.
            // Use "self" to reference the class rather than the object, which is important for the static method. 
            $result = self::$db->query($sql);

            // Return the result from above
            return $result;

            // Use the above Static method in the public/index.php to display the products.
        }
    }