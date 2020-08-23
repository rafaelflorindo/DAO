<?php

class Sql extends PDO
{
    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost;dbname=dbtestedao","root", "");
    }

    private function setParams($statement, $parameters = array()){
        foreach($parameters as $key => $value){
            $this->setParam($statement, $key, $value);
        }
//array("key"=>"value") :nome , "valor"
    }
    private function setParam($statement, $key, $value){
        $statement->bindParam($key,$value);
    }
    public function query($rawQuery, $params = array()){
        $stmt = $this->conn->prepare($rawQuery);//associação dos parâmetros na consulta
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }
    //rawQuery = query bruta comandos select que vai para o BD
    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>