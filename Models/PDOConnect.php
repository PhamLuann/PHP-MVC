<?php
    class PDOConnect
    {
        private $servername = "member.luan.vn";
        private $username = "root";
        private $password = "";
        private $dbname = "member_manager";

        private $conn = NULL;
        private $result = NULL;
        
        public function Connect()
        {
            try {
                $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $this->conn;
            } catch(PDOException $e) {
                die("Connection failed: " .$e->getMessage());
            }
        }

        /**
         * //Insert member
         */
        public function insertData($name, $birthday, $country){
            $sql = "INSERT INTO members(name, birthday, country)VALUES ('$name', '$birthday', '$country')";
                // use exec() because no results are returned
            $this->conn->exec($sql);
        }
    }
?>