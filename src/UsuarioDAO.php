<?php
require_once "ConexaoBD.php";

class UsuarioDAO{
    public static function cadastrar(){
        $nome = $_POST['nome'];
        $CPF = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data = $_POST['data'];
        $genero = $_POST['genero'];
        $senha = md5($_POST['senha']);

        $sql = "insert into usuario (nome, CPF, email, telefone, data, genero, senha) values ('$nome', '$CPF', '$email', '$telefone', '$data', '$genero', '$senha')";
        $conexao = ConexaoBD::conectar();
        $conexao -> exec($sql);
    }

    public static function autentificarUsuario($email, $senha){
        $senha = md5($senha);
        $sql = "select * from usuario where email = '$email' and senha = '$senha'";
        $conexao = ConexaoBD::conectar();

        $resultado = $conexao->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

}