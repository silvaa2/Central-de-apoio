<?php
require_once "ConexaoBD.php";
require_once "funcoes.php";

class DataDAO{
    public static function agendar()
    {
        $idpsicologo = $_POST['idpsicologo'];
        $data = $_POST['data'];
        $horario = $_POST['horario'];
        session_start();
        $email = $_SESSION['email'];

        $sql = "insert into agendamento (idpsicologo, data, horario, usuario) values ('$idpsicologo', '$data', '$horario', '$email')";


        $conexao = ConexaoBD::conectar();
        $conexao->exec($sql);
    }

    public static function consultarData()
    {
        $conexao = ConexaoBD::conectar();
        $sql = "select * from agendamento";
        $datas = $conexao->query($sql); 
        return $datas;
    }
}