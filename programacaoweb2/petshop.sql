-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/11/2024 às 20:15
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
-- Banco de dados: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(10) UNSIGNED NOT NULL,
  `tutor_id_tutor` int(10) UNSIGNED NOT NULL,
  `veterinario_id_veterinario` int(10) UNSIGNED NOT NULL,
  `pet_id_pet` int(10) UNSIGNED NOT NULL,
  `data_consulta` date DEFAULT NULL,
  `hora_consulta` time DEFAULT NULL,
  `descricao_consulta` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pet`
--

CREATE TABLE `pet` (
  `id_pet` int(10) UNSIGNED NOT NULL,
  `tutor_id_tutor` int(10) UNSIGNED NOT NULL,
  `nome_pet` varchar(100) DEFAULT NULL,
  `especie_pet` varchar(20) DEFAULT NULL,
  `idade_pet` varchar(20) DEFAULT NULL,
  `peso_pet` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tutor`
--

CREATE TABLE `tutor` (
  `id_tutor` int(10) UNSIGNED NOT NULL,
  `pet_id_pet` int(10) UNSIGNED NOT NULL,
  `nome_tutor` varchar(100) DEFAULT NULL,
  `cpf_tutor` varchar(14) DEFAULT NULL,
  `fone_tutor` varchar(20) DEFAULT NULL,
  `email_tutor` varchar(100) DEFAULT NULL,
  `endereco_tutor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `veterinario`
--

CREATE TABLE `veterinario` (
  `id_veterinario` int(10) UNSIGNED NOT NULL,
  `nome_veterinario` varchar(100) DEFAULT NULL,
  `crmv_veterinario` varchar(10) DEFAULT NULL,
  `especialidade_veterinario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `consulta_FKIndex1` (`tutor_id_tutor`),
  ADD KEY `consulta_FKIndex2` (`veterinario_id_veterinario`),
  ADD KEY `consulta_FKIndex3` (`pet_id_pet`);

--
-- Índices de tabela `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id_pet`),
  ADD KEY `pet_FKIndex1` (`tutor_id_tutor`);

--
-- Índices de tabela `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id_tutor`),
  ADD KEY `tutor_FKIndex1` (`pet_id_pet`);

--
-- Índices de tabela `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`id_veterinario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pet`
--
ALTER TABLE `pet`
  MODIFY `id_pet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id_tutor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `id_veterinario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
