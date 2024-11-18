<?php
session_start();
if (!isset($_SESSION['email'])){
    header("location:login.php") ;
}
//n deixa entrar pela URL em qualqquer página sem que seja feito login
?>