-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/06/2024 às 22:19
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
-- Banco de dados: `clientes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_cliente` int(4) NOT NULL,
  `data/hota` datetime NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `data/hota`, `nome`, `email`, `idade`) VALUES
(12348, '2024-06-27 22:10:01', 'Hadassa Heloise das Neves', 'hadassaheloisedasneves@andrade.com', '22'),
(12349, '2024-06-27 22:10:16', 'Agatha Tânia Aragão', 'agathataniaaragao@eletrolexeng.com.br', '22'),
(12350, '2024-06-27 22:10:16', 'Liz Luna Isabelle Araújo', 'liz_luna_araujo@zipmail.com', '55'),
(12351, '2024-06-27 22:11:24', 'Rodrigo Sebastião Benedito Aparício', 'rodrigo-aparicio72@hotmail.co.uk', '73'),
(12352, '2024-06-27 22:12:34', 'Alexandre Sebastião Kevin Moraes', 'alexandre_moraes@comunikapublicidade.com.br', '73'),
(12353, '2024-06-27 22:12:34', 'Isadora Caroline Ana Jesus', 'isadora_jesus@zoomfoccus.com.br', '70');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id_cliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12354;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
