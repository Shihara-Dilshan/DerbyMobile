<?php
    class Database {
        private $conn;

        public function connect(){
            $this->conn = null;

            try {
                $this->conn = new PDO("sqlite:".__DIR__."/DB");
            }catch(PDOException $PDOE){
                echo "Error while connecting to the database: ".$PDOE->getMessage(); 
            }

            return $this->conn;
        }
    }