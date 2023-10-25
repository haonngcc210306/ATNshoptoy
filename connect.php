<?php
class connect{
    public $server;
    public $dbName;
    public $username;
    public $password;

    public function __construct(){
        $this->server ="y6aj3qju8efqj0w1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $this->username ="symqwkguz2uzsvlv";
        $this->password ="puivrkksx9hpdoz6";
        $this->dbName="	lhpn5gwb63dbynb2";
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