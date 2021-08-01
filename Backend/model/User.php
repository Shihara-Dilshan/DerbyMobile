<?php
    class User {
        private $userName;
        private $email;
        private $password;
        private $mobile;
        private $conn;

        public function __construct($conn){
            $this->conn = $conn;
        }

        
    }