<?php
class connect{
    public $server;
    public $dbName;
    public $username;
    public $password;

    public function __construct(){
        $this->server ="ckshdphy86qnz0bj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $this->username ="u41uyij4p8n9ah8d";
        $this->password ="lvpehdlf9ginryxc";
        $this->dbName="xn6qo7c8g6ldviz4";
    }
    //option 1: mysqli
    function connectToMySQL():mysqli{
        $conn = new mysqli($this->server,$this->username,$this->password,$this->dbName);

        if($conn->connect_error){
            die("Failed".$conn->connect_error);
        }else{
            //echo "Connect!";
        }
        return $conn;
    }
    //opinion 2 : PDO
    function connectToPDO():PDO{
        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->dbName",$this->username,$this->password);
            //echo "Connect! PDO";
        }catch(PDOException $e){
            die("Failed".$e);
        }
        return $conn;
    }
}
    // $c = new Connect();
    // $c->connectToPDO();

//$c->connectToMySQL();
?>