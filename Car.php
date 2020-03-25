<?php 

    interface ICar {
        public function get_name();
        public function message();
        public function set_name($name);
    }

    class Car implements ICar
    {
        public $name;
        public $brand;
        public $model;
        public $year;
        private $price;

        public function __construct($name, $brand, $model, $year, $price) {
            $this->name = $name;
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
            $this->price = $price;
        }

        public function get_name() {
           return $this->name;
        }

        public function message() {
            print("This is a $this->brand $this->name, model $this->model, year $this->year");
        }

        public function set_name($name) {
            $this->name = $name;
        }

    }

    

?>