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
        }

        static public function find_all_by_category($cat_id) {

            // Return as an array ($cat_array) of strings by splitting string parameter ($cat_id) using explode();
            $cat_array = explode(',', $cat_id);

            // Now that they're separated, return a string ($params) from the elements of an array ($cat_array) using implode();
            $params = implode(',', array_fill( 0, count($cat_array), '?' ));

            // For multiple ids selected (into an array), IN is used to retrieve more than one category id (and its items categorized with it).
            // Place the ids into the concatenated $params in the {}.
            $sql = "SELECT * FROM spring22 WHERE category_id IN ({$params})";

            // After gathering the ids as integers, define the $param_datatype for each id requested to retrieve the corresponding data from the database.
            // str_repeat(); repeats a string the specified number of times as defined by the (string, integer times)
            // count(); counts all elements in the array ($cat_array)
            $param_datatype = str_repeat( 'i', count($cat_array) );

            // Prepare the variables to be passed through the parameters.
            $stmt = self::$db->prepare($sql);

            // Bind multiple parameters to protect table 
            // The data to protect is defined by the $param_datatype variable and identified the array ($cat_array) of ids that separate the elements in the array using the "spread" operator "..."
            $stmt->bind_param($param_datatype, ...$cat_array);

            // Execute the statement above
            $stmt->execute();

            // Return the result through the $stmt variable
            $result = $stmt->get_result();

            // Return the result from above
            return $result;
        }
    }