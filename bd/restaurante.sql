-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2021 às 04:43
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedido`
--

CREATE TABLE `item_pedido` (
  `codigo` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `item_pedido`
--

INSERT INTO `item_pedido` (`codigo`, `nome_produto`, `preco`, `quantidade`) VALUES
(15, 'Burguer', 15, 1),
(16, 'Coca', 10, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_normal`
--

CREATE TABLE `usuario_normal` (
  `user_id` int(11) NOT NULL,
  `usuario_norm` varchar(30) NOT NULL,
  `senha_norm` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario_normal`
--

INSERT INTO `usuario_normal` (`user_id`, `usuario_norm`, `senha_norm`) VALUES
(1, 'user', 'user');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuário`
--

CREATE TABLE `usuário` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuário`
--

INSERT INTO `usuário` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `usuario_normal`
--
ALTER TABLE `usuario_normal`
  ADD PRIMARY KEY (`user_id`);

--
-- Índices para tabela `usuário`
--
ALTER TABLE `usuário`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuario_normal`
--
ALTER TABLE `usuario_normal`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuário`
--
ALTER TABLE `usuário`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
