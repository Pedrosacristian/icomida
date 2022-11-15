<?php

print_r(PHP_EOL);

print_r('--------------------------------------');
print_r('          Cadastrar Motoboys          ');
print_r('--------------------------------------');
 
$id = readString('Digite o ID: ' );
$nome = readString('Digite um nome: ');
$placa = readString('Digite uma placa: ');

$sql = "INSERT INTO motoboys (id, nome, placa) VALUES ($id, '$nome', '$placa');";
$result = mysqli_query($connection, $sqli);

if ($result) {
    print_r('Registro inserido com sucesso');
} else {
    print_r('Ocorreu um erro: ' . mysqli_error($connection));
}

