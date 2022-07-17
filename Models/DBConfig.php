<?php
    class DBConfig{
        private $servername = "member.luan.vn";
        private $username = "root";
        private $password = "";
        private $dbname = "member_manager";

        private $conn = NULL;
        private $result = NULL;

        /**
         * connect to database
         */
        public function connect(){
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            // Check connection
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
            return $this->conn;
        }

        
        public function execute($sql){
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        /**
         * //truy van du lieu
         */
        public function getData(){
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }

        /**
         * //truy van du lieu can sua theo id
         */
        public function getByID($table, $id){
            $sql =  "SELECT * FROM $table WHERE id='$id'";
            $this->execute($sql);
            if($this->num_row() != 0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }

        /**
         * //truy van tat ca du lieu
         */
        public function getAllData($table){
            $sql = "SELECT * FROM $table";
            $this->execute($sql);
            if($this->num_row() == 0){
                $datas = 0;
            }
            else{
                while($data = $this->getData()){
                    $datas[] = $data;
                }
            }
            return $datas;
        }

        /**
         * //them du lieu
         */
        public function insertData($name, $birthday, $country){
            $sql = "INSERT INTO members(name, birthday, country) 
            VALUES('$name', '$birthday', '$country')";

            return $this->execute($sql);
        }

        /**
         * //cap nhat du lieu
         */
        public function updateMember($id, $name, $birthday, $country){
            $sql = "UPDATE members SET name = '$name',
            birthday = '$birthday', country = '$country'
            WHERE id = $id";
            return $this->execute($sql);
        }

        /**
         * //xoa ban ghi
         */
        public function delete($table, $id){
            $sql = "DELETE FROM $table WHERE id = '$id'";
            return $this->execute($sql);
        }

        /**
         * //dem so ban ghi
         */
        public function num_row(){
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }
            else{
                $num = 0;
            }
            return $num;
        }
    }
?>