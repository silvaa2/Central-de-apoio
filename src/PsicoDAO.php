<?php
require_once "ConexaoBD.php";
require_once "funcoes.php";

class PsicoDAO
{
    public static function cadastrarPsico()
    {
        $nome = $_POST['nome'];
        $CRP = $_POST['crp'];
        $valor = $_POST['valor'];
        $tempo = $_POST['tempo'];
        $imagem = pegarImagem($_FILES);
        $descricao = $_POST['descricao'];

        $sql = "insert into psicologo (nome, CRP, valor, tempo, imagem, descricao) values ('$nome', '$CRP', '$valor', '$tempo','$imagem', '$descricao')";
        $conexao = ConexaoBD::conectar();
        $conexao->exec($sql);

    }
    public static function consultarPsico()
    {
        $conexao = ConexaoBD::conectar();
        $sql = "select * from psicologo";
        $psico = $conexao->query($sql);
        return $psico;
    }

    
}