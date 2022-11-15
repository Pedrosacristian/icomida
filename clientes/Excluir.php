<?php

print_r(PHP_EOL);

print_r('--------------------------------------'. PHP_EOL);
print_r('            Excluir Motoboy           '. PHP_EOL);
print_r('--------------------------------------'. PHP_EOL);

$id = (' Qual ID deseja excluir: ');

$sql = 'DELETE FROM motoboys WHERE id = $id;';

$result = mysqli_query($connection, $sql);

if ($result) {
    print_r('Registro ecluido com sucesso!');
} else {
    print_r('Ocorreu um erro: '. mysqli_error($connection));
}

