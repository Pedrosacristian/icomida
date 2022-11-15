<?php

print_r(PHP_EOL);

print_r('--------------------------------------');
print_r('         Editar Motoboys          ');
print_r('--------------------------------------');
 
$id = readString('Digite o ID que seja alterar: ' );
$nome = readString('Digite o novo nome: ');
$placa = readString('Digite a nova placa: ');

$sql = "UPDATE motoboys SET '$nome', placa = '$placa'  WHERE id = $id;";

$result = mysqli_query($connection, $sqli);

if ($result) {
    print_r('Registro atualizado com sucesso');
} else {
    print_r('Ocorreu um erro: ' . mysqli_error($connection));
}

