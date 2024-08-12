/*BANCO DE DADOS DO PROJETO*/
create database Unistudy default character set utf8 collate utf8_general_ci;
use Unistudy;

/*TABELAS*/
CREATE TABLE usuario (
usuarioID INT PRIMARY KEY auto_increment,
email VARCHAR(50),
nomeUsuario VARCHAR(20),
senhaUsuario VARBINARY(255)  
);

create table materias(
materiasID int primary key auto_increment,
materiasNome varchar(45),
UsuarioID int,
foreign key(UsuarioID)references usuario (UsuarioID)
);

CREATE TABLE progressao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    UsuarioID INT NOT NULL,
    item VARCHAR(255) NOT NULL,
    FOREIGN KEY (UsuarioID) REFERENCES usuario(usuarioID)

);


create table cronograma(cronogramaID int primary key auto_increment,
materiaNome varchar(20),
materiaID int,
diaSemana varchar(3),
horario varchar(5),
foreign key(materiaID)references materias (materiasID)
);

/*INSERÇÃO DE DADOS NA TABELA MATERIAS*/
INSERT INTO `unistudy`.`cronograma` (`cronogramaID`, `materiaNome`, `diaSemana`, `horario`) VALUES ('', 'Português', 'seg', 'manha');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Matemática', 'seg', 'tarde');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('História', 'seg', 'noite');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Química', 'seg', 'extra');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Geografia', 'ter', 'manha');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Física', 'ter', 'tarde');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Sociologia', 'ter', 'noite');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Lingua Estrangeira', 'ter', 'extra');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Artes', 'qua', 'manha');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Biologia', 'qua', 'tarde');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Literatura', 'qua', 'noite');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Leitura', 'qua', 'extra');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Redação', 'qui', 'manha');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Matemática', 'qui', 'tarde');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Física', 'qui', 'noite');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Português', 'qui', 'extra');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Matemática', 'sex', 'manha');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Redação', 'sex', 'tarde');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Leitura', 'sex', 'noite');
INSERT INTO `unistudy`.`cronograma` (`materiaNome`, `diaSemana`, `horario`) VALUES ('Simulado', 'sex', 'extra');

