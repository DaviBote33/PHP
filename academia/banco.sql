CREATE DATABASE IF NOT EXISTS academia
    DEFAULT CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;

USE academia;

CREATE TABLE IF NOT EXISTS alunos (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(150) NOT NULL,
    data_nascimento DATE NOT NULL,
    plano VARCHAR(50) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (cpf)
);

CREATE TABLE IF NOT EXISTS professores (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(150) NOT NULL,
    especialidade VARCHAR(100) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (cpf)
);

CREATE TABLE IF NOT EXISTS instrutores (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(150) NOT NULL,
    registro_profissional VARCHAR(30) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (cpf)
);
