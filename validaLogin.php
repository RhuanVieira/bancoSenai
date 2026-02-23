<?php

session_start();
require './conexao.php';

if(isset($_POST['validar_usuario'])){
    $email = $_POST['email'];
    $senhaDigitada = $_POST['senha'];


    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $usuario = mysqli_fetch_assoc($result);

    if( $usuario && password_verify($senhaDigitada, $usuario['senha'])){
        header('location: ./');
    }else{
        echo "email ou senha invalidos";
    }

}


?>