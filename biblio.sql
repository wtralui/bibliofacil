-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Ago-2021 às 07:43
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id` int(33) NOT NULL,
  `nome_apenada` text NOT NULL,
  `nome_livro` text NOT NULL,
  `autor` text NOT NULL,
  `data_emprestimo` date NOT NULL,
  `data_devolucao` date NOT NULL,
  `condicao_emprestimo` text NOT NULL,
  `condicao_devolucao` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `nome_apenada`, `nome_livro`, `autor`, `data_emprestimo`, `data_devolucao`, `condicao_emprestimo`, `condicao_devolucao`, `status`) VALUES
(1, 'User1', 'Primeiro', '1', '2021-08-28', '2021-04-08', 'Perfeito estado', 'Perfeito estado', 'Emprestado'),
(2, 'User6', 'Livro1', 'Autor11', '2021-08-28', '2021-08-31', 'Perfeito estado', 'Conservado', 'Devolvido'),
(3, 'User1', 'Livro3', 'Autor33', '2021-08-28', '2021-08-31', 'Perfeito estado', 'Com marcas de uso', 'Devolvido'),
(4, 'User1', 'Primeiro', '1', '2021-08-21', '2021-08-25', 'Perfeito estado', 'Conservado', 'Devolvido'),
(5, 'User1', 'Primeiro', '1', '2021-08-28', '0000-00-00', 'Perfeito estado', 'Conservado', 'Devolvido'),
(6, 'User4', 'Livro1', 'Autor11', '2021-08-28', '2021-08-30', 'Perfeito estado', 'Paginas rasuradas e rasgadas', 'Devolvido'),
(7, 'User1', 'Primeiro', '1', '2021-08-28', '2021-08-31', 'Perfeito estado', 'Com marcas de uso', 'Devolvido'),
(8, 'João Fernando Teste', 'Livro qualquer33', 'Autor teste', '2021-08-28', '2021-08-31', 'Perfeito estado', 'Perfeito estado', 'Emprestado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(3) NOT NULL,
  `nome_livro` text NOT NULL,
  `autor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `nome_livro`, `autor`) VALUES
(1, 'Primeiro', '1'),
(2, 'Livro1', 'Autor11'),
(3, 'Livro3', 'Autor33'),
(4, 'Livro qualquer33', 'Autor teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`) VALUES
(0, 'User1'),
(1, 'User2'),
(2, 'User3'),
(3, 'User4'),
(4, 'User5'),
(5, 'User6'),
(6, 'User7'),
(7, 'User8'),
(8, 'User9'),
(10, 'sdazzzzzzz'),
(11, 'Felipe'),
(12, 'Carlos'),
(13, 'Apenado 13'),
(14, 'sou o 15?'),
(15, 'Felipe Fernandes'),
(16, 'User1'),
(17, 'User2'),
(18, 'Azelindo'),
(19, 'Arlindo'),
(20, 'Apenado20'),
(21, 'Apenado22'),
(22, 'Apenado23'),
(23, '24'),
(24, '25'),
(25, '26'),
(26, '27'),
(27, '28'),
(28, '29'),
(29, '30'),
(30, 'FelipeCC'),
(31, 'Um apenado qualquer'),
(32, 'Um apenado qualquer33'),
(33, 'Apenado n° 40912301'),
(34, 'João Fernando Teste');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
