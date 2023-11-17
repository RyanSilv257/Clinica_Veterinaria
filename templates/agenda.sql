-- phpMyAdmin SQL Dump
-- version 5.1.4-dev+20220429.6af017a6ad
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Ago-2023 às 02:09
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--
USE clinicaveterinaria;

CREATE TABLE 'Cliente'(
	'CodCliente' INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    'Nome' VARCHAR(100) NOT NULL,
    'Endereco' VARCHAR(100),
    'Telefone' VARCHAR(10),
    'Celular' CHAR(11),
    'CPF' CHAR(11) NOT NULL
);

CREATE UNIQUE INDEX IDX_CPF ON
	'Cliente'('CPF');

CREATE INDEX IDX_Nome ON
	'Cliente'('Nome');

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO 'Cliente'('Nome', 'Endereco', 'Celular', 'Telefone', 'CPF')
VALUES ('João da Silva', 'Rua Dez, 20 - Vila Verde', '11933445565', '1144556677', '12234456678');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contacts`
--
-- ALTER TABLE `contacts`
--   ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contacts`
--
-- ALTER TABLE `contacts`
--   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
