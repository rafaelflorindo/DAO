<?php
    require_once('config.php');
    //carregar os dados de todos os usuários
    /*$sql = new Sql();
    $usuario = $sql->select("SELECT * FROM dbusuario");
    echo json_encode($usuario);
    */
    
    //Carrega os dados de um usuario
    /*
    $usuario = new Usuario();
    $usuario->loadById(1);
    echo $usuario;
    */

    //Carrega uma lista de usuarios
    /*
    $lista = Usuario::getList();
    echo json_encode($lista);
    */

    //carrega um lista de usuarios por login
    /*$search = Usuario::search("raf");
    echo json_encode($search);
    */

    //carrega o usuario utilizando o login e a senha
    $usuario = new Usuario();
    $usuario->login("rafael.florindo","123");
    echo $usuario;
    
?>