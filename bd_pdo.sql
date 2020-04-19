create database fornecedor_crud_php_pdo;

use fornecedor_crud_php_pdo;

create table fornecedor(codigo int primary key auto_increment, nome varchar(80), email varchar(80), cnpj varchar(14), stts varchar(1));
select * from fornecedor;
