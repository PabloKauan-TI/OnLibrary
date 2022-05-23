/* bdonlibrary: */
CREATE DATABASE onlibrary;

CREATE TABLE cadbibliotecaria (
    id_bibliotecaria INT AUTO_INCREMENT PRIMARY KEY,
    nome_bibliotecaria VARCHAR(50),
    endereco_bibliotecaria VARCHAR(50),
    telefone_bibliotecaria VARCHAR(50),
    email_bibliotecaria VARCHAR(50),
    senha_bibliotecaria VARCHAR(50)
);

CREATE TABLE cadaluno (
    matricula_aluno INT(11) AUTO_INCREMENT  PRIMARY KEY,
    nome_aluno VARCHAR(50),
    senha_aluno VARCHAR(50),
    curso_aluno VARCHAR(50),
    serie_aluno VARCHAR(50)
);

CREATE TABLE cadlivro (
    cod_livro INT AUTO_INCREMENT  PRIMARY KEY,
    titulo_livro VARCHAR(50),
    autor_livro VARCHAR(50),
    qtd_livro VARCHAR(50),
    imagem_livro VARCHAR(250)

);

CREATE TABLE emprestimolivro (
    cod_livro INT AUTO_INCREMENT PRIMARY KEY,
    titulo_livro VARCHAR(50),
    aluno VARCHAR(50),
    serie VARCHAR(50),
    curso VARCHAR(50),
    data_emp DATE,
    situacao VARCHAR(50)
);