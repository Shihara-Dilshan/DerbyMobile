<?php
    class FoodOrder{
        private $foodId;
        private $orderId;

        public function setFoodId($foodId){
            $this->foodId = $foodId;
        }

        public function getFoodId(){
            return $this->foodId;
        }

        public function setOrderId($orderId){
            $this->orderId = $orderId;
        }

        public function getOrderId(){
            return $this->orderId;
        }
    }