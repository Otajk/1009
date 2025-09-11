create database cadastro_simples;

use cadastro_simples;

create table usuarios (
    id int auto_increment primary key,
    nome varchar(150) not null,
    email varchar(100) not null
    
);

INSERT into usuarios (nome, email) VALUES
('Maria', 'maria@gmail.com'),
('João', 'joao@gmail.com'),
('André', 'andre@gmail.com');