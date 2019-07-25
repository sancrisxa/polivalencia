-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jul-2019 às 23:09
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polivalencia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `data_nascimento`, `cidade`, `telefone`) VALUES
(1, 'Fulano', '2000-09-02', 'Belo Horizonte', '31 9 9999 - 9999'),
(2, ':nome', '0000-00-00', ':cidade', ':telefone'),
(3, 'House MD.', '2019-07-24', 'Belo Horizonte', '31 9 8888 - 8888'),
(4, 'Daredevil', '2019-07-17', 'Belo Horizonte', '31 9 8888 - 8888'),
(5, 'Punisher', '2019-07-10', 'SÃ£o Paulo', '31 9 8888 - 8888'),
(6, 'Luke Cage', '2019-07-01', 'Sao Paulo', '31 9 8888 - 8888');

-- --------------------------------------------------------

--
-- Estrutura da tabela `habilitacoes`
--

CREATE TABLE `habilitacoes` (
  `id` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `id_posto_trabalho` int(11) NOT NULL,
  `habilitado` tinyint(4) NOT NULL,
  `validade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `habilitacoes`
--

INSERT INTO `habilitacoes` (`id`, `id_funcionario`, `id_posto_trabalho`, `habilitado`, `validade`) VALUES
(1, 1, 1, 1, '2019-07-26'),
(2, 1, 1, 1, '2019-07-12'),
(3, 1, 1, 0, '2019-07-12'),
(4, 5, 2, 1, '2019-07-04'),
(5, 4, 3, 1, '2019-07-02'),
(6, 3, 3, 1, '2019-07-30'),
(7, 4, 3, 1, '2019-07-31'),
(8, 1, 3, 1, '2019-08-28'),
(9, 6, 3, 1, '2019-09-06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postos_trabalho`
--

CREATE TABLE `postos_trabalho` (
  `id` int(11) NOT NULL,
  `setor` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postos_trabalho`
--

INSERT INTO `postos_trabalho` (`id`, `setor`, `nome`, `tipo`) VALUES
(1, 'Trabalho', 'teste', 'CLT'),
(2, 'SÃ£o Paulo', 'SÃ£o Paulo', 'CLT'),
(3, 'Sao Paulo', 'Sao Paulo', 'CLT'),
(4, 'Industria', 'Sao Paulo', 'Mecanico');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `habilitacoes`
--
ALTER TABLE `habilitacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_funcionario` (`id_funcionario`),
  ADD KEY `id_posto_trabalho` (`id_posto_trabalho`);

--
-- Indexes for table `postos_trabalho`
--
ALTER TABLE `postos_trabalho`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `habilitacoes`
--
ALTER TABLE `habilitacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `postos_trabalho`
--
ALTER TABLE `postos_trabalho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `habilitacoes`
--
ALTER TABLE `habilitacoes`
  ADD CONSTRAINT `habilitacoes_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionarios` (`id`),
  ADD CONSTRAINT `habilitacoes_ibfk_2` FOREIGN KEY (`id_posto_trabalho`) REFERENCES `postos_trabalho` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
