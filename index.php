<?php
    require_once('config.php');

    $usuario = new Usuario();
    $usuario->loadById(1);
    echo $usuario;
    /*$sql = new Sql();
    $usuario = $sql->select("SELECT * FROM dbusuario");
    echo json_encode($usuario);*/
?>