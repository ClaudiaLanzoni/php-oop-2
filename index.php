<?php 

    class User {

        protected $name;
        protected $mail;
        protected $password;

        public function __construct($name, $mail, $password) {
            $this -> name = $name;
            $this -> mail = $mail;
            $this -> password = $password;
        }

        public function getName() {
            return $this -> name;
        }

        public function setName($name) {
            return $this -> name = $name;
        }

        public function getMail() {
            return $this -> mail;
        }

        public function setMail($mail) {
            return $this -> mail = $mail;
        }

        public function getPassword() {
            return $this -> password;
        }

        public function setPassword($password) {
            return $this -> password = $password;
        }
    };

    class Account {

        protected $accountId;
        protected $pointsNumber;
        protected $purchasesRecord;

        public function __construct($accountId, $pointsNumber, $purchasesRecords) {
            $this -> accountId = $accountId;
            $this -> pointsNumber = $pointsNumber;
            $this -> purchasesRecords = $purchasesRecords;
        }

        public function getAccountId() {
            return $this -> accountId;
        }

        public function setAccountId($accountId) {
            return $this -> accountId = $accountId;
        }

        public function getPointsNumber() {
            return $this -> pointsNumber;
        }

        public function setPointsNumber($pointsNumber) {
            return $this -> pointsNumber = $pointsNumber;
        }

        public function getPurchasesRecord() {
            return $this -> purchasesRecord;
        }

        public function setPurchasesRecord($purchasesRecord) {
            return $this -> purchasesRecord = $purchasesRecord;
        }
    };

    class Cart {

        protected $itemsQuantity;

        public function __construct($itemsQuantity) {
            $this -> itemsQuantity = $itemsQuantity;

        }

        public function getItemsQuantity() {
            return $this -> itemsQuantity;
        }

        public function setItemsQuantity($itemsQuantity) {
            return $this -> itemsQuantity = $itemsQuantity;
        }
    };

    class Wishlist extends Cart {

        protected $productId;

        public function __construct($productId, $itemsQuantity) {
            $this -> productId = $productId;

            parent::__construct($itemsQuantity);
        }

        public function getProductsId() {
            return $this -> productId;
        }

        public function setProductId($productId) {
            return $this -> productId = $productId;
        }
    };

    class Product {
        
        protected $name;
        protected $description;
        protected $category;
        protected $price;

        public function __construct($name, $description, $category, $price) {
            $this -> name = $name;
            $this -> description = $description;
            $this -> category = $category;
            $this -> price = $price;

        }

        public function getName() {
            return $this -> name;
        }

        public function setName($name) {
            return $this -> name = $name;
        }

        public function getDescription() {
            return $this -> description;
        }

        public function setDescription($description) {
            return $this -> description = $description;
        }

        public function getCategory() {
            return $this -> category;
        }

        public function setCategory($category) {
            return $this -> category = $category;
        }

        public function getPrice() {
            return $this -> price;
        }

        public function setPrice($price) {
            return $this -> price = $price;
        }
    };

    class SeasonalItems extends Product {

        protected $periodOfSale;

        public function __construct($periodOfSale, $name, $description, $category, $price) {
            $this->periodOfSale = $periodOfSale;
            parent::__construct($name, $description, $category, $price);
        }

        public function getPeriod() {
            return $this -> periodOfSale;
        }

        public function setPeriod($periodOfSale) {
            return $this -> periodOfSale = $periodOfSale;
        }
        
    };

    class DiscountedItems extends Product {

        protected $amountOfItems;
        protected $discountPercentage;

        public function __construct($amountOfItems, $discountPercentage, $name, $description, $category, $price) {
            $this->amountOfItems = $amountOfItems;
            $this->discountPercentage = $discountPercentage;
            parent::__construct($name, $description, $category, $price);
        }

        public function getAmountOfItems() {
            return $this -> amountOfItems;
        }

        public function setAmountOfItems($amountOfItems) {
            return $this -> amountOfItems = $amountOfItems;
        }

        public function getPeriod() {
            return $this -> discountPercentage;
        }

        public function setPeriod($discountPercentage) {
            return $this -> discountPercentage = $discountPercentage;
        }
    };

; ?>
