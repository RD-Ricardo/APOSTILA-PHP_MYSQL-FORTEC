CREATE DATABASE dbAgenda;

USE dbagenda;

CREATE TABLE tb_contato(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nm_contato VARCHAR(100),
    nr_rua INT(10),
    nm_bairro VARCHAR(100),
    nr_cep VARCHAR(8),
    sg_estado VARCHAR(2),
    nm_cidade VARCHAR(100),
    email VARCHAR(100),
    nr_telefones VARCHAR(11)
);

INSERT INTO  tb_contato(nm_contato, nr_rua,nm_bairro,nr_cep,sg_estado,nm_cidade,email,nr_telefones) VALUES
("Ricardo",122,"Vera Cruz", "11730000", "sp","Mongaguá", "ricardodias169@gmail.com", "13988017249")
("Laura", 12, "Quietude", "11718135", "sp", "Praia Grande", "laura12@gmail.com", "13974307483"),
("Rosi", 5, "Ribeirópolis", "11714050", "sp", "Praia Grande", "rosi123@gmail.com", "13974353483"),
("Carla", 13, "Caiçara", "11706132", "sp", "Praia Grande", "carla123@gmail.com", "13974307483"); 