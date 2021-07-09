<?php 
    class Product {
        use Categories;
        use User;
        public $name;
        public $description;
        public $price;
        public $id;
        public function setSconto($account) {

            if($account == "premium" ) {
                $this-> sconto = 40;
                echo("sconto del 40% per te che sei un utente premium !");
            }else {
                $this-> sconto = 0;
            }

        }
        function __construct($name, $description, $price, $id) {
            $this->name = $name;
            $this->description = $description;
            $this->id = $id;
            $this->price = $price;
        }
    
    }

    trait Categories {
        public $name_category;
        public function setCategories($name_category) {
            $this->name_category = $name_category;
        }
    }

    trait User {
        public $name_user;
        public $surname_user;
        public $age_user;
        public $id_user;
        public $account  = "basic";

        public function setUser($name_user, $surname_user, $age_user, $id_user, $account = "") {
           $this->name_user = $name_user;
           $this->surname_user = $surname_user;
           $this->age_user = $age_user;
           $this->id_user = $id_user;
           $this->account = $account;
       }
    }

