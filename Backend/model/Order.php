<?php
    class Order{
        private $id;
        private $total;
        private $orderTime;
        private $orderDate;
        private $address;
        private $isPaid;
        private $userId;

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setTotal($total)
        {
            $this->total = $total;
        }

        public function getTotal()
        {
            return $this->total;
        }

        public function setOrderTime($orderTime)
        {
            $this->orderTime = $orderTime;
        }

        public function getOrderTime()
        {
            return $this->orderTime;
        }

        public function setOrderDate($orderDate)
        {
            $this->orderDate = $orderDate;
        }

        public function getOrderDate()
        {
            return $this->orderDate;
        }

        public function setAddress($address)
        {
            $this->address = $address;
        }

        public function getAddress()
        {
            return $this->address;
        }

        public function setIsPaid($isPaid)
        {
            $this->isPaid = $isPaid;
        }

        public function getIsPaid()
        {
            return $this->isPaid;
        }

        public function setUserId($userId)
        {
            $this->userId = $userId;
        }

        public function getUserId()
        {
            return $this->userId;
        }
    }