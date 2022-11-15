<?php

print_r(PHP_EOL);

print_r('--------------------------------------');
print_r('            Listar Motoboys           ');
print_r('--------------------------------------');

$sql = 'SELECT * FROM motoboys; ' ;

$result = mysqli_query($connection, $sql);

if($result) {
    
    print_r (PHP_EOL . 'registros encontrados:' .mysqli_num_rows($result) . PHP_EOL);
    
    $data = mysqli_fetch_all($result);

    foreach ($data as $row)  {
        print_r ('ID: ' . $row[0]. PHP_EOL);
        print_r ('NOME: ' . $row[1]. PHP_EOL);
        print_r ('PLACA: ' . $row[2]. PHP_EOL);

    }
} else {
    print_r('ocorreu um erro: ' . mysqli_error($connection));
    
}

