<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "gestao_climatizacao";

$connect = new mysqli($host, $user, $pass, $db);

if ($connect->connect_error) {
    die("Erro de conexão: " . $connect->connect_error);
}
?>