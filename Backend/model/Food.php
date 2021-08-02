<?php
    class Food{
        private $id;
        private $name;
        private $description;
        private $quantity;
        private $price;

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setDescriptione($description){
            $this->description = $description;
        }

        public function getDescriptione(){
            return $this->description;
        }

        public function setQuantity($quantity){
            $this->quantity = $quantity;
        }

        public function getQuantity(){
            return $this->quantity;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price;
        }
    }