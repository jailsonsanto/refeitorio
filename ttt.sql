create database ttt;

use ttt;

create table usuario(
id_Usuario int not null,
nome varchar(45),
email varchar(50),

primary key(id_Usuario));

create table produto(
id int not null auto_increment,
nome varchar(45),
descricao varchar(45),
preco numeric (9,2),
primary key (id));

alter table produto
modify  id int not null ;
drop table produto;


insert into produto values(1, 'celular', 'otimo estado',250);
insert into produto values(2, 'monitor', 'full hd', 540);
insert into produto values(3, 'gol','semi-novo',28000);
insert into produto values(4, 'cadeira', 'acochoada',35.00);
insert into produto values(5, 'sofa', 'nunca usado',1500.00);
insert into produto values(6, 'lavadora','16kg', 250.00);ttt

alter table produto
change id_Produto id int not null;