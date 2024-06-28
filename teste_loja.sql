-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/06/2024 às 22:29
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
-- Banco de dados: `teste_loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `nome_categoria` varchar(20) NOT NULL,
  `desc_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`nome_categoria`, `desc_categoria`) VALUES
('Celulares', 'Aparelho movél'),
('Computador', 'Computadores de mesa, notebooks, laptops dentre outros'),
('Videogame', 'Produtos como: Videogames, Jogos, Assinaturas dentre outros.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id_cliente` int(4) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `data_regs` date NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `tel_comercial` varchar(11) DEFAULT NULL,
  `tel_celular` varchar(12) NOT NULL,
  `email_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_cliente`, `nome_cliente`, `data_regs`, `rua`, `bairro`, `cep`, `tel_comercial`, `tel_celular`, `email_cliente`) VALUES
(1, 'Gustavo', '0000-00-00', 'Cosmo di sandro', 'Jd. Paulistano', '02813-047', '', '11930036030', 'gustavo.almeida.201632@gmail.com'),
(2, 'João', '0000-00-00', 'Cosmo di Sandro', 'Jd. Paulistano', '02813-047', NULL, '11930036030', 'joaovitor@gmail.com'),
(3, 'Sonia', '2024-06-28', 'Cosmo di Sandro', 'Jd. Paulistano', '02813-047', NULL, '11930036030', 'soniamaria@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_dtlh_pedido`
--

CREATE TABLE `tb_dtlh_pedido` (
  `id_pedido` int(4) NOT NULL,
  `id_produto` int(4) NOT NULL,
  `qtde_produto_total` int(3) NOT NULL,
  `pre_total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pedidos`
--

CREATE TABLE `tb_pedidos` (
  `id_pedido` int(4) NOT NULL,
  `data_pedido` date NOT NULL,
  `id_cliente` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id_produto` int(4) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `desc_produto` varchar(100) NOT NULL,
  `preco_produto` varchar(10) NOT NULL,
  `qtde_produto_estoque` int(4) NOT NULL,
  `nome_categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id_produto`, `nome_produto`, `desc_produto`, `preco_produto`, `qtde_produto_estoque`, `nome_categoria`) VALUES
(1, 'Xbox Series S', 'Console de videogame de mesa.', '2.600', 19, 'Videogame'),
(2, 'Notebook Lenovo Ultrafino IdeaPad 3 R7-5700U 8GB 5', 'Sem descrição', '3000', 28, 'Computador'),
(3, 'Samsung Galaxy S23 5G 256GB Tela 6.1\'\' 8GB RAM', 'Sem descrição', '2.300', 156, 'Celulares'),
(4, 'Apple iPhone 15 (128 GB) — Preto', 'Sem descrição', '4.700', 256, 'Celulares'),
(5, 'Nintendo Switch OLED', 'Nacional, Portátil e Doméstico, Tela de 7 Polegadas, Bateria de até 9 Horas, 64GB de Armazenamento, ', '1.947', 99, 'Videogame');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`nome_categoria`);

--
-- Índices de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  MODIFY `id_pedido` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id_produto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
