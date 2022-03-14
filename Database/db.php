<?php 

class db {

private $hostName = "localhost";
private $serverUsername = "root";
private $serverPassword = "";
private $dbName = "2133963_Kenny_Meijer";
private $conn;

    public function connect() { 
        try {
            $this->conn = new PDO("mysql:host=$this->hostName;dbname=$this->dbName", $this->serverUsername, $this->serverPassword);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function retrieve($query) {
        $var = $this->conn->query($query);
        
        while($row = $var->fetch(PDO::FETCH_OBJ)) {
            $results[] = $row;
        }
        return $results;
    }

    public function insert($query) {
        // return $query;
        if($this->conn->exec($query)) {
            return "something";
        } else {
            return 'Nothing';
        }
    }
}

?>