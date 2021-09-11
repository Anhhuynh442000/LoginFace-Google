<?php
    require_once './vendor/autoload.php';
    class db{
        public $facebook;
        private $host = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'facebook';
        public $conn = '';
        public function __construct()
        {
            if(!session_id()){
                session_start();
            }
        
            // Call facebook API
            $this->facebook = new \Facebook\Facebook([
                'app_id' => '578740683312828',
                'app_secret'=>'7f91110070b1f6f7b6f8f7b9f7495db5',
                'default_graph_version'=> 'v11.0'
            ]);
            $this->conn = mysqli_connect($this->host, $this->username, $this->password); 
            mysqli_select_db($this->conn, $this->dbname);
            mysqli_query($this->conn, "SET NAME UTF-8");  
        }
        public function insertData($username, $email, $picture){
            $query = "INSERT INTO users(first_name, email, picture)
                    values('$username', '$email', '$picture')";

            if(mysqli_query($this->conn, $query)){
                echo "Thành công";
            }else{
                 echo "Error: " . $query . "<br>" . mysqli_error($this->conn);
            }
        }
    }
?>