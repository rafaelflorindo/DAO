<?php
class Usuario{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;
    //criar os metodos acessores
    
    public function loadById($id){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM dbusuario where idusuario = :id", array(":id"=>$id));
        if(count($results)>0){
            $row = $results[0];
            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new Datetime($row['dtcadastro']));
        }
    }
    public function __toString()
    {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }

    public function setIdusuario($value){
        $this->idusuario=$value;
    }
    public function getIdusuario(){
        return $this->idusuario;
    }
    public function setDeslogin($value){
        $this->deslogin=$value;
    }
    public function getDeslogin(){
        return $this->deslogin;
    }
    public function setDessenha($value){
        $this->dessenha=$value;
    }
    public function getDessenha(){
        return $this->dessenha;
    }
    public function setDtcadastro($value){
        $this->dtcadastro=$value;
    }
    public function getDtcadastro(){
        return $this->dtcadastro;
    }
}
?>