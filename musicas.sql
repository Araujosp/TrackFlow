-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/04/2026 às 17:22
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `musicas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `musicas`
--

CREATE TABLE `musicas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `artista` varchar(100) DEFAULT NULL,
  `album` varchar(100) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `duracao_segundos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `musicas`
--

INSERT INTO `musicas` (`id`, `titulo`, `artista`, `album`, `ano`, `genero`, `duracao_segundos`) VALUES
(1, 'Blinding Lights', 'The Weeknd', 'After Hours', 2020, 'Pop', 200),
(2, 'Shape of You', 'Ed Sheeran', 'Divide', 2017, 'Pop', 233),
(3, 'Smells Like Teen Spirit', 'Nirvana', 'Nevermind', 1991, 'Rock', 301),
(4, 'Billie Jean', 'Michael Jackson', 'Thriller', 1982, 'Pop', 294),
(5, 'Bohemian Rhapsody', 'Queen', 'A Night at the Opera', 1975, 'Rock', 354),
(6, 'Lose Yourself', 'Eminem', '8 Mile', 2002, 'Hip-Hop', 326),
(7, 'Rolling in the Deep', 'Adele', '21', 2010, 'Pop', 228),
(8, 'Thinking Out Loud', 'Ed Sheeran', 'x', 2014, 'Pop', 281),
(9, 'Hotel California', 'Eagles', 'Hotel California', 1976, 'Rock', 390),
(10, 'Imagine', 'John Lennon', 'Imagine', 1971, 'Soft Rock', 183);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `musicas`
--
ALTER TABLE `musicas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `musicas`
--
ALTER TABLE `musicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
