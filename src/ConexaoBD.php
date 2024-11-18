<?php

class ConexaoBD{

    public static function conectar():PDO{
        $conexao = new PDO("mysql:host=172.16.1.52;dbname=psicologia","Aluno","Coringa");
        return $conexao;
    }
}

ConexaoBD::conectar();