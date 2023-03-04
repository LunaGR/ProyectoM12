create database micro;
use micro;

create table usuario (
	id int primary key auto_increment,
    nombre varchar (255),
    pass varchar(255),
    tipo_usuario tinyint
);

INSERT INTO usuario (id,nombre,pass,tipo_usuario)
VALUES ('', 'paco', '1234', '0');

INSERT INTO usuario (id,nombre,pass,tipo_usuario)
VALUES ('', 'usuario', '1234', '1');

select * from usuario;