create database mvc_gestao;
use mvc_gestao;

create table Livros(
	ID integer auto_increment primary key,
    titulo varchar(255),
    autor varchar(255),
    ano_publicacao date,
    editora varchar(255)

);

select * from Livros;
