create database teste;
use teste;
CREATE TABLE usuarios (
  id int primary key auto_increment,
  nome varchar(220) NOT NULL,
  email varchar(220) NOT NULL,
  usuario varchar(220) NOT NULL,
  senha varchar(220) NOT NULL
);
drop table usuarios;

INSERT INTO `usuarios` ( `nome`, `email`, `usuario`, `senha`) VALUES
('vitor', 'vitor@vitor.com.br', 'vitor@vitor.com.br', '$2y$10$d8Hpwwj/DENEW4sBuUDvUuCw4/2QgEoWvs8YlAXASltHqw5w7vKDm');
INSERT INTO `usuarios` ( `nome`, `email`, `usuario`, `senha`) VALUES
('vitor', 'jose@jose.com', 'jose@jose.com', '$2y$10$d8Hpwwj/DENEW4sBuUDvUuCw4/2QgEoWvs8YlAXASltHqw5w7vKDm');


select * from usuarios;

CREATE TABLE produtoC (
  id int primary key auto_increment,
  descricao varchar(220) NOT NULL,
  quantidade varchar(220) NOT NULL,
  preco varchar(220) NOT NULL,
  online  boolean
);