

create database banco_de_usuarios;

use banco_de_usuarios; 

CREATE TABLE usuarios2 (
    id_cliente INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    senha TEXT NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    cpf CHAR(11) NOT NULL,
    logradouro VARCHAR(255) NOT NULL,
    cep CHAR(8) NOT NULL,
    municipio VARCHAR(100) NOT NULL,
    estado CHAR(2) NOT NULL,
    numero_casa VARCHAR(255) NOT NULL,
    cnh_categoria  CHAR(2) NOT NULL,
    data_nascimento DATE default NULL,
    cnh_numero VARCHAR(20) NOT NULL,
    cnh_validade DATE default NULL
); 


select *  from usuarios2;

