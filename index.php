<?php 

    // // proprietà, cioè una variabile
    // public $nome="pippo";

    // // metodo, cioè una funzione
    // public function saluto(){
    //    echo "ciao da ".$this->nome;
    // }

    class User {

        public $name;
        public $mail;
        public $password;

        public function __construct($name, $mail, $password) {
            $this -> name = $name;
            $this -> mail = $mail;
            $this -> password = $password;
        }
    };

    class Account {

        public $accountId;
        public $pointsNumber;
        public $purchasesRecords;

        public function __construct($accountId, $pointsNumber, $purchasesRecords) {
            $this -> accountId = $accountId;
            $this -> pointsNumber = $pointsNumber;
            $this -> purchasesRecords = $purchasesRecords;

        }
    };

    class Cart {

        public $itemsQuantity;

        public function __construct($itemsQuantity) {
            $this -> itemsQuantity = $itemsQuantity;

        }
    };

    class Wishlist extends Cart {

        public $productsId;

        public function __construct($productsId, $itemsQuantity) {
            $this -> productsId = $productsId;

            parent::__construct($itemsQuantity);
        }
    };

    class Products {
        
        public $name;
        public $description;
        public $category;
        public $price;

        public function __construct($name, $description, $category, $price) {
            $this -> name = $name;
            $this -> description = $description;
            $this -> category = $category;
            $this -> price = $price;

        }
    };

    class SeasonalItems extends Products {

        public $periodOfSale;

        public function __construct($periodOfSale, $name, $description, $category, $price) {
            $this->periodOfSale = $periodOfSale;
            parent::__construct($name, $description, $category, $price);
        }
        
    };

    class DiscountedItems extends Products {

        public $amountOfItems;
        public $discountPercentage;

        public function __construct($amountOfItems, $discountPercentage, $name, $description, $category, $price) {
            $this->amountOfItems = $amountOfItems;
            $this->discountPercentage = $discountPercentage;
            parent::__construct($name, $description, $category, $price);
        }
    };

; ?>
