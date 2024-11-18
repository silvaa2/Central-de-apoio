<?php
require_once "PsicoDAO.php";

PsicoDAO::cadastrarPsico($_GET);

header("Location:../agendamento.php");