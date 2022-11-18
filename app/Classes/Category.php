<?php

    class Category {

        static protected $db;
        
        public $id;
        public $name;

        // Set the database via function named "set_db". This line will refer to the connection defined by "$db = db_connect();" noted in functions.php.
        static public function set_db($db) {
            self::$db = $db;
        }

        // Create the connection to pass the details from spring22.php as a $props/property in the following function.
        public function __construct($props = []) {
            $this->id = $props['id'] ?? null;
            $this->name = $props['name'] ?? null;
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

        static public function find_all_by_category($cat_id) {

            // For multiple ids selected (into an array), IN is used to retrieve more than one category id (and its items categorized with it).
            $sql = "SELECT * FROM spring22 WHERE category_id IN ({$cat_id})";
 
            $result = self::$db->query($sql);

            return $result;
        }
    }