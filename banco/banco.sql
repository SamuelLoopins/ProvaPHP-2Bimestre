drop database prova2;

create database prova2;

use prova2;

create table fluxo_caixa(
	id int not null auto_increment primary key,
    data_fluxo date not null,
    tipo varchar(10) not null,
    valor decimal(10,2),
    historico varchar(150),
    cheque varchar(3));