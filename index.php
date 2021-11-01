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

    };

    class Account {

        public $accountId;
        public $pointsNumber;
        public $purchasesRecords;
    };

    class Cart {

        public $itemsQuantity;
    };

    class Wishlist {

        public $productsId;
    };

    class Products {
        
        public $name;
        public $description;
        public $category;
        public $price;
    };

    class SeasonalItems {

        public $periodOfSale;
        
    };

    class DiscountedItems {

        public $amountOfItems;
        public $discountPercentage;
       
    };

; ?>
