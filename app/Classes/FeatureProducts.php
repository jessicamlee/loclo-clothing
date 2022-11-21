<?php

    class FeatureProducts {

        static protected $db;
        
        public $product_img;
        public $image_alt;
        public $product_name;
        public $product_price;
        public $category_id;

        // Set the database via function named "set_db". This line will refer to the connection defined by "$db = db_connect();" noted in functions.php.
        static public function set_db($db) {
            self::$db = $db;
        }

        // Create the connection to pass the details from spring22.php as a $props/property in the following function.
        public function __construct($props = []) {
            $this->product_img = $props['product_img'] ?? null;
            $this->image_alt = $props['image_alt'] ?? null;
            $this->product_name = $props['product_name'] ?? null;
            if(isset($props['product_price'])) $this->set_price($props['product_price']);
            $this->category_id = $props['category_id'] ?? null;
        }

        // For content managers if this project was put through a GUI, set_price will ensure a numeric number is inputted for consistency across all the product items.
        public function set_price($price) {
            try {
                if(!is_numeric($price)) {
                    throw new Exception('Price must be a number');
                } else {
                    $this->price = number_format($price, 2);
                }
            }  catch(Exception $e) {
                echo $e;
            }                      
        }                    
    
        // If a price value is missing for a product, a message will appear to remind the content managers or anyone else that it needs to be resolved.
        public function get_price() {
            try {
                if(!isset($this->price)) {
                    throw new Exception('Price is not set');
                } elseif(!is_numeric($this->price)) {
                    throw new Exception('Price is not a number');
                } else {
                    return $this->price;
                }
            } catch(Exception $e) {
                echo $e;
            }
        }

        static public function find_all() {
            // Add SQL variable to request ALL the data, using "SELECT" and "*" for all from all the notes entries.
            $sql = "SELECT * FROM spring22";

            // Get the result for retrieving all the FeatureProducts by running the query.
            // Use "self" to reference the class rather than the object, which is important for the static method. 
            $result = self::$db->query($sql);

            // Return the result from above
            return $result;

            // Use the above Static method in the public/index.php to display the products.
        }

        static public function find_some() {
            $sql = "SELECT * FROM spring22 LIMIT 6";
            $result = self::$db->query($sql);
            return $result;
        }
    }