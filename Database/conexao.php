<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'php_procedural';
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $db_name, $port);

if (mysqli_connect_error()) {
    echo 'Falha na conexão: ' . mysqli_connect_error();
}