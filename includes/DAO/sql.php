<?php 
   class Kdkhost extends PDO {
       private $conn;
       private function __construct(){
           $this->conn = new PDO("mysql:dbname=php7transferenci_udemy; host=localhost",
           "php7transferenci_udemy",
           "udemy2019.");

       }

       private function setParams($statment, $parameters = array()){
        foreach($parameters as $key => $value){
            $this -> setParam($key, $value);
        }
       }

       private function setParam($statment, $key, $value){
           $statment->bindParam($key, $value);
       }

       public function query($rawQuary, $params = array()){
           $stmt = $this->conn->prepare($RawQuary);
           $this->setParams($stmt, $params);

           return $stmt->execute();
       }
   } 
?>