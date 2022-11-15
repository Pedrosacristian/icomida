<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'icomida';

$connection = mysqli_connect($host, $username, $password, $database);

if ($connection == false) {
    print_r('Error: falahna conexão' .mysqli_connect_error());
    exit;
}

Print('conectado no banco de dados!'. PHP_EOL);