<?php

    class FeatureProducts {
        
        public $image_url;
        public $alt;
        public $name;
        public $price;

        // Create the connection to pass the details from spring22.php as a $props/property in the following function.
        public function __construct($props = []) {
            $this->image_url = $props['image_url'] ?? null;
            $this->alt = $props['alt'] ?? null;
            $this->name = $props['name'] ?? null;
            if(isset($props['price'])) $this->set_price($props['price']);
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
    }