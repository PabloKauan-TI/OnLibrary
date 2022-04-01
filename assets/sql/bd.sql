/* bdonlibrary: */
CREATE DATABASE onlibrary;

CREATE TABLE cadbibliotecaria (
    id_bibliotecaria INT AUTO_INCREMENT PRIMARY KEY,
    nome_bibliotecaria VARCHAR(50),
    endereco_bibliotecaria VARCHAR(50),
    telefone_bibliotecaria INT(6),
    email_bibliotecaria VARCHAR(50),
    senha_bibliotecaria INT(6)
);

CREATE TABLE cadaluno (
    matricula_aluno INT AUTO_INCREMENT  PRIMARY KEY,
    nome_aluno VARCHAR(50),
    email_aluno VARCHAR(50),
    senha_aluno VARCHAR(50),
    telefone_aluno INT(12),
    endereco_aluno VARCHAR(50),
    curso_aluno VARCHAR(50),
    serie_aluno INT(6)
);

CREATE TABLE cadlivro (
    cod_livro INT AUTO_INCREMENT  PRIMARY KEY,
    titulo_livro VARCHAR(50),
    autor_livro VARCHAR(50),
    qtd_livro INT(50),
    dtemp_livro DATE,
    dtdevo_livro DATE,
    id_bibliotecaria INT(50)
);

CREATE TABLE emprestimolivro (
    cod_livro INT AUTO_INCREMENT PRIMARY KEY,
    titulo_livro VARCHAR(50),
    aluno VARCHAR(50),
    serie INT(6),
    curso VARCHAR(50),
    data_emp DATE,
    situacao VARCHAR(50)
);
 
ALTER TABLE cadlivro ADD CONSTRAINT FK_cadlivro_2
    FOREIGN KEY (id_bibliotecaria)
    REFERENCES cadbibliotecaria (id_bibliotecaria);

