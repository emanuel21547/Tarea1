<?php   
    session_start();
    $usuarios= $_POST['login'];
    $password = sha1($_POST['password']);

    include "../../../clases/Usuarios.php";
    $Usuarios = new Usuarios();

    echo $Usuarios->loginUsuario($usuarios, $password);

?>