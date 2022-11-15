<?php

print_r(PHP_EOL);

print_r('--------------------------------------');
print_r('         Gerenciar motoboys        ');
print_r('--------------------------------------');

print_r( PHP_EOL .'escolha uma das seguintes opções:' . PHP_EOL );

print_r( '1) Listar motoboys ' . PHP_EOL);
print_r( '2) Cadastrar um motoboy '. PHP_EOL);
print_r( '3) Ediatr um motoboy '. PHP_EOL);
print_r( '4) Excluir um motoboy '. PHP_EOL);
print_r( '5) Voltar'. PHP_EOL);

$option = readString ('digite uma opção: ');
    
    if($option ==1)
    {
        include 'motoboy/listar.php';
    }
    if($option ==2)
    {
        include 'motoboy/cadastrar.php';
    }
    if($option ==3)
    {
        include 'motoboy/editar.php';
    }
    if($option ==4)
    {
        include 'motoboy/excluir.php';
    }
 
