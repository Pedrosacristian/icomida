<?php

include 'functions.php';
include 'connect-database.php';

print_r(PHP_EOL);

print_r('--------------------------------------');
print_r('         Bem vindo ao icomida        ');
print_r('--------------------------------------');

$exit = false;

while($exit == false) {
    print_r('oque voce deseja fazer agora (escolha uma das seguintes opções)'. PHP_EOL);

    print_r(PHP_EOL);
    print_r(PHP_EOL);

    print_r( '1) Gerenciar motoboys ' . PHP_EOL);
    print_r( '2) Gerenciar clientes '. PHP_EOL);
    print_r( '3) Gerenciar pedidos '. PHP_EOL);
    print_r( '4) Sair '. PHP_EOL);

    print_r(PHP_EOL);

    $option = readString ('digite uma opção: ');
    
    if($option ==1)
    {
        include 'motoboys.php';
    }
    if($option ==2)
    {
        include 'clientes.php';
    }
    if($option ==3)
    {
        include 'pedidos.php';
    }
    if($option ==4)
    {
        $exit = true;
    }
}

Print_r(PHP_EOL);

print_r('--------------------------------------');
print_r('                Até logo        ');
print_r('--------------------------------------');
