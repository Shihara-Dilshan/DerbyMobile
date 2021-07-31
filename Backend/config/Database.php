<?php
class Database
{
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("sqlite:" . __DIR__ . "/DB");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $PDOE) {
            echo "Error while connecting to the database: " . $PDOE->getMessage();
            die();
        }

        return $this->conn;
    }
}
