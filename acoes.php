<?php
session_start();
require 'conexao.php';

if(isset($_POST['create_usuario'])){
    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $data_nascimento= mysqli_real_escape_string($conn, trim($_POST['data_nascimento']));
    $senha = isset($_POST ['senha']) ? mysqli_real_escape_string($conn, password_hash( trim($_POST['senha']), PASSWORD_DEFAULT)) : '';

        $sql = "INSERT INTO usuarios (nome, email, data_nascimento, senha) VALUES ('$nome', '$email', '$data_nascimento', '$senha')";

        mysqli_query($conn, $sql);
           

        if (mysqli_affected_rows($conn) > 0){
            $_SESSION['mensagem'] = 'Usuário criado com sucesso';
            header('location: index.php');
            exit();
        }else{
             $_SESSION['mensagem'] = 'Não foi possível criar o usuario...';
            header('location: index.php');
            exit();
        }

}
?>