-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/04/2025 às 22:40
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdescolar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `professor`
--

CREATE TABLE `professor` (
  `idProfessor` int(11) NOT NULL,
  `nomePROFESSOR` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `professor`
--

INSERT INTO `professor` (`idProfessor`, `nomePROFESSOR`) VALUES
(1, 'tio patinhas'),
(2, 'pato donalds'),
(3, 'mega patalogica'),
(11, 'luiz');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbaluno`
--

CREATE TABLE `tbaluno` (
  `ra` int(11) NOT NULL,
  `nomeALUNO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbaluno`
--

INSERT INTO `tbaluno` (`ra`, `nomeALUNO`) VALUES
(1, 'huguinho'),
(2, 'luizinho'),
(3, 'duduzinho'),
(4, 'luiz');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdisciplinas`
--

CREATE TABLE `tbdisciplinas` (
  `iddisciblina` int(11) NOT NULL,
  `nomeDisciplinas` varchar(50) DEFAULT NULL,
  `cargaHoraria` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbdisciplinas`
--

INSERT INTO `tbdisciplinas` (`iddisciblina`, `nomeDisciplinas`, `cargaHoraria`) VALUES
(1, 'Programação Web II', '50'),
(2, 'Banco de Dados II', '100');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`idProfessor`);

--
-- Índices de tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  ADD PRIMARY KEY (`ra`);

--
-- Índices de tabela `tbdisciplinas`
--
ALTER TABLE `tbdisciplinas`
  ADD PRIMARY KEY (`iddisciblina`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `idProfessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  MODIFY `ra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbdisciplinas`
--
ALTER TABLE `tbdisciplinas`
  MODIFY `iddisciblina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
