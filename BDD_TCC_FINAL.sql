-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jun-2021 às 00:58
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `codresposta` int(5) NOT NULL,
  `codusuario_fk` varchar(30) NOT NULL,
  `resposta_1` varchar(30) NOT NULL,
  `resposta_2` varchar(70) NOT NULL,
  `resposta_3` varchar(70) NOT NULL,
  `resposta_4` varchar(70) NOT NULL,
  `resposta_5` varchar(70) NOT NULL,
  `resposta_6` varchar(70) NOT NULL,
  `resposta_7` varchar(70) NOT NULL,
  `resposta_8` varchar(70) NOT NULL,
  `resposta_9` varchar(70) NOT NULL,
  `resposta_10` varchar(70) NOT NULL,
  `resposta_11` varchar(70) NOT NULL,
  `resposta_12` varchar(70) NOT NULL,
  `resposta_13` varchar(70) NOT NULL,
  `resposta_14` varchar(70) NOT NULL,
  `resposta_15` varchar(70) NOT NULL,
  `resposta_16` varchar(70) NOT NULL,
  `resposta_17` varchar(70) NOT NULL,
  `resposta_18` varchar(70) NOT NULL,
  `resposta_19` varchar(70) NOT NULL,
  `resposta_20` varchar(70) NOT NULL,
  `resposta_21` varchar(70) NOT NULL,
  `resposta_22` varchar(70) NOT NULL,
  `resposta_23` varchar(70) NOT NULL,
  `resposta_24` varchar(70) NOT NULL,
  `resposta_25` varchar(70) NOT NULL,
  `resposta_26` varchar(70) NOT NULL,
  `resposta_27` varchar(70) NOT NULL,
  `resposta_28` varchar(70) NOT NULL,
  `resposta_29` varchar(70) NOT NULL,
  `resposta_30` varchar(70) NOT NULL,
  `resposta_31` varchar(70) NOT NULL,
  `resposta_32` varchar(70) NOT NULL,
  `resposta_33` varchar(70) NOT NULL,
  `resposta_34` varchar(70) NOT NULL,
  `resposta_35` varchar(70) NOT NULL,
  `resposta_36` varchar(70) NOT NULL,
  `resposta_37` varchar(70) NOT NULL,
  `resposta_38` varchar(70) NOT NULL,
  `resposta_39` varchar(70) NOT NULL,
  `resposta_40` varchar(70) NOT NULL,
  `resposta_41` varchar(70) NOT NULL,
  `resposta_42` varchar(70) NOT NULL,
  `resposta_43` varchar(70) NOT NULL,
  `resposta_44` varchar(70) NOT NULL,
  `resposta_45` varchar(70) NOT NULL,
  `resposta_46` varchar(70) NOT NULL,
  `resposta_47` varchar(70) NOT NULL,
  `resposta_48` varchar(70) NOT NULL,
  `resposta_49` varchar(70) NOT NULL,
  `resposta_50` varchar(70) NOT NULL,
  `resposta_51` varchar(70) NOT NULL,
  `resposta_52` varchar(70) NOT NULL,
  `resposta_53` varchar(70) NOT NULL,
  `resposta_54` varchar(70) NOT NULL,
  `resposta_55` varchar(70) NOT NULL,
  `resposta_56` varchar(70) NOT NULL,
  `resposta_57` varchar(70) NOT NULL,
  `resposta_58` varchar(70) NOT NULL,
  `resposta_59` varchar(70) NOT NULL,
  `resposta_60` varchar(70) NOT NULL,
  `resposta_61` varchar(70) NOT NULL,
  `resposta_62` varchar(70) NOT NULL,
  `resposta_63` varchar(70) NOT NULL,
  `resposta_64` varchar(70) NOT NULL,
  `resposta_65` varchar(70) NOT NULL,
  `resposta_66` varchar(70) NOT NULL,
  `resposta_67` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `codusuario` int(5) NOT NULL,
  `identificador_unico` varchar(12) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `bairro` varchar(15) NOT NULL,
  `genero` varchar(11) NOT NULL,
  `idade` varchar(20) NOT NULL,
  `etnia` varchar(8) NOT NULL,
  `escolaridade` varchar(50) NOT NULL,
  `renda_familiar` varchar(20) NOT NULL,
  `nummembros` varchar(10) NOT NULL,
  `nota` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`codresposta`),
  ADD KEY `codresposta_fk` (`codusuario_fk`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `respostas`
--
ALTER TABLE `respostas`
  MODIFY `codresposta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codusuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
