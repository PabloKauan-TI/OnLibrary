/*script do banco de dados*/

CREATE TABLE cadlivro (
    cod_livro int,
    titulo_livro varchar(50),
    autor_livro varchar(50),
    quantidade_livro int(10),
    data_empresta date,
    data_devolucao date,
    PRIMARY KEY (cod_livro)	
);

CREATE TABLE cadaluno (
    nome_aluno varchar(50),
    email_aluno varchar(50),
    senha_aluno varchar(50),
    telefone_aluno int(12),
    endereco_aluno varchar(50),
    curso_aluno varchar(50),
    serie_aluno int(5),
    matricula_aluno int, 
    PRIMARY KEY (matricula_aluno)
);

CREATE TABLE cadadm (
    nome_adm varchar(50),
    email_adm varchar(50),
    senha_adm varchar(50),
    telefone_adm int(12),
    endereco_adm varchar(50),
    PRIMARY KEY (nome_adm)
);

CREATE TABLE emprestimo_livro (
    cod_livro int,
    titulo_livroo varchar(50),
    aluno varchar(50),
    serie int(5),
    curso varchar(50),
    data_emp date,
    situacao varchar(50),
    PRIMARY KEY (cod_livro)
);