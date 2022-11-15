create database icomida;

use icomida;
create table motoboys(
    id integer(32),
    nome varchar(255),
    placa varchar(7)
);

create table pedidos(
    id integer(32),
    motoboy_id integer(32),
    cliente_id integer(32),
    data_criação datetime,
    descrição varchar(255),
    valor decimal(8, 2)
);

create table clientes(
    id integer(32),
    cpf varchar(11),
    nome varchar(255),
    endereço varchar(255),
);