<?php
    ini_set('display_errors', 'On');

    // Was working on a function that flipped open or close based on server time.
    // Array may follow order as follows: 0 - MTWR, 1 - F, 2 - Sat, 3 - Sun
    // Perhaps a location class.
    $locations = [
            //array("name" => "Bytes on the Run", "hours" => array());
    ];

    //Saving their username for something....
    //$user;

    //End goal is to make item objects out of whatever the user decides to buy and place them into an array
    //$cart = [];

    class item{

        public $name;
        public $quantity;
        public $price;
        public $special_instructions = []; //This will be the spot for all the small details...size, brand, etc.

        public function _construct($_name, $_quantity, $_price){

               $this->name = $_name;
               $this->quantity = $_quantity;
               $this->price = $_price;
        }

        public function set_quantity($new_quantity){
            $this->quantity = $new_quantity;
        }

        /*
        public set_instructions($new_instructions){
            $this->special_instructions = $new_instructions;
        }
        */

        public function set_price($new_price){
             $this->price = $new_price;
        }

        public function get_quantity(){
        }

        public function get_price(){
        }

        public function get_instructions(){
        }
    }

////////////////////////////////////////////Page Generation/////////////////////////////////////////////////////

    //Manipulates item data into a small database. Covers bases for now.
    function generate_item_data(){

        $final_item_data = [];

        $item_names = array("Whoopers", "Soda", "Coffee", "Ham & Cheese");
        $item_prices = array(1.99, 1.75, 1.49, 4.99);
        $item_types = array("candy", "soda", "hot_drink", "sandwich");

        for( $i = 0; $i<count($item_names); $i++){
                $temp_arr = ["name" => $item_names[$i], "price" => $item_prices[$i], "type" => $item_types[$i]];
                array_push($final_item_data, $temp_arr);
        }
        return $final_item_data;
    }

    // Generates items...at least till we can set up a database...
    function generate_items($item_data){

        foreach($item_data as $an_item){
            echo
            "<tr>
                <td>$an_item[name]</td>
                <td>$an_item[price]</td>
                <td>
                    <input type = 'number' id = 'quantity' name = 'quantity' min = 0 max = 10
                     placeholder = 0
                    >
                </td>
            </tr>";
        }
    }

    // Calls upon the header.
    function print_header($title){
        echo 
        "<!DOCTYPE html>

         <html lang='en' xmlns='http://www.w3.org/1999/xhtml'>
         <head>
             <meta charset='utf-8' />
             <title>Project Feed - $title</title>
             <link rel='stylesheet' type='text/css' href='assets/css/stylesheet.css' />
         </head>
         <body>
             <div id='topF'>
                 <div id='topC'>
                     <img src='assets/images/rit.png' alt='RIT logo' />
                 </div>
             </div>";
    }

     //Calls upon the footer.
     function print_footer(){
        echo
        "<div id='bottom'>
                 <p>Copyright</p>
             </div>
         </body>
         </html>";
     }
?>