<?php
    class User {
        private $userName;
        private $email;
        private $password;
        private $mobile;

        public function __construct($userName, $email, $password, $mobile){
            $this->userName = $userName;
            $this->email = $email;
            $this->password = $password;
            $this->mobile = $mobile;
        }
       
        public function setUserName($userName){
            $this->userName = $userName;
        }

        public function getUserName(){
            return $this->userName;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setMobile($mobile){
            $this->mobile = $mobile;
        }

        public function getMobile(){
            return $this->mobile;
        }
    }