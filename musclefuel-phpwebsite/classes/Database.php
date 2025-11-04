<?php
class Database {


    private $host = "172.31.22.43"; 
    private $db_name = "Ahmet200575280";
    private $username = "Ahmet200575280";
    private $password = "a5yYDXeotX";
    
    public $conn;

    public function connect() {

        $this->conn = null;
        try {
             $this->conn = new PDO(
                 "mysql:host=".$this->host.";dbname=".$this->db_name.";charset=utf8mb4",
                 $this->username,
                 $this->password
            
                );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }  catch(PDOException $e) {
           
         echo "Connection Error:".$e->getMessage();
        }
        
         return $this->conn;
    }
}
?>