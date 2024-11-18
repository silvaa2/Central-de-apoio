<?php
require_once "src/UsuarioDAO.php";

//LOGIN
$email = $_POST['email'];
$senha = $_POST['senha'];

if (UsuarioDAO::autentificarUsuario($email, $senha)) {
    session_start();
    $_SESSION['email'] = $email;
    header("location:sobre.php");
} else {
    header("location:login.php");
    echo "Email ou senha inválida!";
}