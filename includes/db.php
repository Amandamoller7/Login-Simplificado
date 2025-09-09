<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "futebol_db";

$msqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Conexao falhou: " . $mysqli->connect_error);
}

?>