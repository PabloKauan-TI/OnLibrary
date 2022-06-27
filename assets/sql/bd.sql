-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jun-2022 às 20:53
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `onlibrary`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadaluno`
--

CREATE TABLE `cadaluno` (
  `matricula_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(50) DEFAULT NULL,
  `email_aluno` varchar(50) DEFAULT NULL,
  `senha_aluno` varchar(50) DEFAULT NULL,
  `telefone_aluno` varchar(50) DEFAULT NULL,
  `endereco_aluno` varchar(50) DEFAULT NULL,
  `curso_aluno` varchar(50) DEFAULT NULL,
  `serie_aluno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadaluno`
--

INSERT INTO `cadaluno` (`matricula_aluno`, `nome_aluno`, `email_aluno`, `senha_aluno`, `telefone_aluno`, `endereco_aluno`, `curso_aluno`, `serie_aluno`) VALUES
(12345, 'afinha do Fluxo', 'martinstimbop@gmail.com', 'pablito123', '888888888', 'Fluxinho', 'Informática', '2º'),
(123456, 'vitor fernades', 'martinstimbop@gmail.com', 'pablito123', '88 99999999', 'bvyjvjvuvjhfghvk', 'Comércio', '1º'),
(234565, 'Kauane Martins Timbó', 'kauane@gmail.com', 'kk123', '992254678', 'aalexandre', 'Enfermagem', '1º');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadbibliotecaria`
--

CREATE TABLE `cadbibliotecaria` (
  `id_bibliotecaria` int(11) NOT NULL,
  `nome_bibliotecaria` varchar(50) DEFAULT NULL,
  `endereco_bibliotecaria` varchar(50) DEFAULT NULL,
  `telefone_bibliotecaria` varchar(50) DEFAULT NULL,
  `email_bibliotecaria` varchar(50) DEFAULT NULL,
  `senha_bibliotecaria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadbibliotecaria`
--

INSERT INTO `cadbibliotecaria` (`id_bibliotecaria`, `nome_bibliotecaria`, `endereco_bibliotecaria`, `telefone_bibliotecaria`, `email_bibliotecaria`, `senha_bibliotecaria`) VALUES
(4, 'Pablo Kauan', '12345678', '123456789', 'martinstimbop@gmail.com', 'pablito123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadlivro`
--

CREATE TABLE `cadlivro` (
  `cod_livro` int(11) NOT NULL,
  `titulo_livro` varchar(50) DEFAULT NULL,
  `autor_livro` varchar(50) DEFAULT NULL,
  `qtd_livro` varchar(50) DEFAULT NULL,
  `imagem_livro` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadlivro`
--

INSERT INTO `cadlivro` (`cod_livro`, `titulo_livro`, `autor_livro`, `qtd_livro`, `imagem_livro`) VALUES
(14, 'Aitron ', 'Airton Jr', '10', '91c557a7828ed4fefcacf541a56cfa52.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimolivro`
--

CREATE TABLE `emprestimolivro` (
  `cod_emp` int(11) NOT NULL,
  `titulo_livro` varchar(50) DEFAULT NULL,
  `aluno` varchar(50) DEFAULT NULL,
  `serie` varchar(50) DEFAULT NULL,
  `curso` varchar(50) DEFAULT NULL,
  `data_emp` date DEFAULT NULL,
  `data_rec` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emprestimolivro`
--

INSERT INTO `emprestimolivro` (`cod_emp`, `titulo_livro`, `aluno`, `serie`, `curso`, `data_emp`, `data_rec`) VALUES
(4, 'Rafinha do Fluxo', 'Fleuriciany', '1º', 'Informática', '2022-06-15', '2022-06-13');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadaluno`
--
ALTER TABLE `cadaluno`
  ADD PRIMARY KEY (`matricula_aluno`);

--
-- Índices para tabela `cadbibliotecaria`
--
ALTER TABLE `cadbibliotecaria`
  ADD PRIMARY KEY (`id_bibliotecaria`);

--
-- Índices para tabela `cadlivro`
--
ALTER TABLE `cadlivro`
  ADD PRIMARY KEY (`cod_livro`);

--
-- Índices para tabela `emprestimolivro`
--
ALTER TABLE `emprestimolivro`
  ADD PRIMARY KEY (`cod_emp`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadaluno`
--
ALTER TABLE `cadaluno`
  MODIFY `matricula_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3565768;

--
-- AUTO_INCREMENT de tabela `cadbibliotecaria`
--
ALTER TABLE `cadbibliotecaria`
  MODIFY `id_bibliotecaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cadlivro`
--
ALTER TABLE `cadlivro`
  MODIFY `cod_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `emprestimolivro`
--
ALTER TABLE `emprestimolivro`
  MODIFY `cod_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
