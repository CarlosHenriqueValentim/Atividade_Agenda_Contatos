#drop database if exists bd_agenda_contatos;
create database bd_agenda_contatos;
use bd_agenda_contatos;

create table contatos(
    id int not null primary key auto_increment,
    nome varchar(255) not null,
    email varchar(255) not null,
    telefone char(11),
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

# TESTES
insert into contatos(id, nome, email, telefone, data_cadastro) 
values ('1','Carlos','Carlos@gmail.com','11987654321', current_time());

select * 
from contatos;
