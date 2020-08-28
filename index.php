<?php
    require_once('config.php');
/*
    //carregar os dados de todos os usuários
    $sql = new Sql();
    
    $usuario = $sql->select("SELECT * FROM dbusuario");
    echo json_encode($usuario);
    */
    
    //carregar os dados mediante clausula
   /* $sql = new Sql();//DAO + PDO

    $ativo = 0;
    $usuario = $sql->select("SELECT * FROM dbusuario where ativo = :ATIVO", 
      array(":ATIVO"=>$ativo)
    );
    echo json_encode($usuario);
    
*/
    
    //Carrega os dados de um usuario
    /*
    $usuario = new Usuario();
    $usuario->loadById(8);
    echo $usuario;
    */

    //Carrega uma lista de usuarios
    /*
    $lista = Usuario::getList();
    echo json_encode($lista);
    */
/*
    //carrega um lista de usuarios por login
    $search = Usuario::search("raf");
    echo json_encode($search);*/
    
/*
    //carrega o usuario utilizando o login e a senha
    $usuario = new Usuario();
    $usuario->login("rafael.florindo","123");
    echo $usuario;
*/
    //criando um novo usuario
  /*  $aluno = new Usuario("nelidy.trem","123456");
    $aluno->insert();
    echo $aluno;
*/
    //atualizando um aluno
    $aluno = new Usuario();
    $aluno->loadById(8);
    $aluno->update("secretaria","987654321");
    echo $aluno;
    
    
    //excluindo um aluno
    /*$aluno = new Usuario();
    $aluno->loadById(5);
    $aluno->delete();
    echo $aluno;*/
?>