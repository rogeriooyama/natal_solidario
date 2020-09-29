-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Set-2020 às 19:59
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `natal_solidario_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `criancas`
--

CREATE TABLE `criancas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `idade` varchar(3) NOT NULL,
  `observacoes` text NOT NULL,
  `nome_padrinho` varchar(100) NOT NULL,
  `tel_padrinho` varchar(50) NOT NULL,
  `email_padrinho` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `criancas`
--

INSERT INTO `criancas` (`id`, `nome`, `sobrenome`, `sexo`, `idade`, `observacoes`, `nome_padrinho`, `tel_padrinho`, `email_padrinho`, `status`) VALUES
(9, 'Ana', 'Beatriz', 'Feminino', '11', '', '', '', '', 0),
(10, 'Ana', 'Cecília', 'Feminino', '9', '', '', '', '', 0),
(11, 'Antônia', 'Athayde', 'Feminino', '10', '', '', '', '', 0),
(12, 'Andreia', 'Belén', 'Feminino', '8', '', '', '', '', 0),
(13, 'Rebeca', 'Lemes', 'Feminino', '11', '', '', '', '', 0),
(14, 'Telmo', 'Maciel', 'Masculino', '10', '', '', '', '', 0),
(15, 'Luís', 'Nogueira', 'Masculino', '10', '', '', '', '', 0),
(16, 'Henrique', 'Colares', 'Masculino', '9', '', '', '', '', 0),
(17, 'Henrique', 'Silva', 'Masculino', '11', '', '', '', '', 0),
(18, 'Gilberto', 'Vasconcelos', 'Masculino', '9', '', '', '', '', 0),
(19, 'Joaquim', 'Viana', 'Masculino', '11', '', '', '', '', 0),
(20, 'Gilberto', 'Silva', 'Masculino', '10', '', '', '', '', 0),
(21, 'Flávia', 'Silva', 'Feminino', '11', '', '', '', '', 0),
(22, 'Márcio', 'Landim', 'Masculino', '11', '', '', '', '', 0),
(23, 'Manuela', 'Chaves', 'Feminino', '9', '', '', '', '', 0),
(24, 'Lina', 'Silva', 'Feminino', '10', '', '', '', '', 0),
(25, 'Julia', 'Silva', 'Feminino', '11', '', '', '', '', 0),
(26, 'Manuela', 'Chaves', 'Feminino', '9', '', '', '', '', 0),
(27, 'Jordana', 'Silva', 'Feminino', '9', '', '', '', '', 0),
(28, 'Fernanda', 'Silva', 'Feminino', '9', '', '', '', '', 0),
(29, 'Debora', 'Silva', 'Feminino', '11', '', '', '', '', 0),
(30, 'Delia', 'Lemos', 'Feminino', '10', '', '', '', '', 0),
(31, 'Paula', 'Neves', 'Feminino', '10', '', '', '', '', 0),
(32, 'Juliana', 'Silva', 'Feminino', '9', '', '', '', '', 0),
(33, 'Roberta', 'Silva', 'Feminino', '11', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `sobrenome`, `username`, `password`) VALUES
(3, 'admin', 'admin', 'admin', '$2y$10$XConP1hCCSxcXKlsfYJtZO.z3KDbQOU4BBL2fGQcWjepdnVO2XdXq');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `criancas`
--
ALTER TABLE `criancas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `criancas`
--
ALTER TABLE `criancas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
