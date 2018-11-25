-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2018 às 17:10
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transportadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_perfil` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`id`, `id_perfil`, `email`, `senha`) VALUES
(1, 1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfis`
--

CREATE TABLE `perfis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfis`
--

INSERT INTO `perfis` (`id`, `nome`) VALUES
(1, 'gerente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorios`
--

CREATE TABLE `relatorios` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(200) NOT NULL,
  `dataOcorrencia` datetime NOT NULL,
  `CT-e` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `filial` varchar(100) NOT NULL,
  `NF` varchar(2) NOT NULL,
  `origem` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `destinatario` varchar(100) NOT NULL,
  `motorista` varchar(100) NOT NULL,
  `dataAgendamento` datetime NOT NULL,
  `dataAgendaProg` datetime NOT NULL,
  `transitTime` datetime NOT NULL,
  `distancia` int(11) NOT NULL,
  `cavalo` varchar(20) NOT NULL,
  `frota` varchar(20) NOT NULL,
  `dt` varchar(20) NOT NULL,
  `ocorrencia` varchar(20) NOT NULL,
  `posicoes` varchar(20) NOT NULL,
  `status2` varchar(30) NOT NULL,
  `km` float NOT NULL,
  `hrsUteis` float NOT NULL,
  `carreta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `relatorios`
--

INSERT INTO `relatorios` (`id`, `status`, `dataOcorrencia`, `CT-e`, `data`, `filial`, `NF`, `origem`, `destino`, `destinatario`, `motorista`, `dataAgendamento`, `dataAgendaProg`, `transitTime`, `distancia`, `cavalo`, `frota`, `dt`, `ocorrencia`, `posicoes`, `status2`, `km`, `hrsUteis`, `carreta`) VALUES
(1, 'CARGA AGENDADA', '2018-11-01 03:26:10', '1-1-36.725', '2018-11-07', '1 - UNILOG - UBERLANDIA', 'nf', 'ITUIUTABA-MG', 'MANAUS-AM', 'NESTLE BRASIL LTDA', 'WILLIAN GLEIB DE MELO', '2018-11-07 11:28:25', '2018-11-06 11:17:23', '2018-11-19 07:10:13', 1834, 'HAC-3060', 'TRANSCABRAL', '4558397774', 'Ocorrencia', 'Posicoes', 'ENCERRADA', 335.63, 108.5, 'OKZ-1545'),
(2, 'CARGA AGENDADA', '2018-09-14 08:00:00', '1-1-36.727', '2018-09-11', '1 - UNILOG - UBERLANDIA', 'nf', 'IBIA-MG', 'FEIRA DE SANTANA-MG', 'NESTLE BRASIL LTDAALDO ', 'ALDO FERNANDO FERREIRA', '2018-09-14 08:00:00', '2018-09-15 09:10:00', '2018-09-14 08:00:00', 811, 'HDI-9094', 'TERCEIROS', '4558294526', 'Ocorrencia', 'Posicoes', 'ATRASADO', 520.97, 15.5, 'HDI-9777'),
(3, 'CTE GERADO', '2018-09-07 09:35:00', '1-1-36.721', '2018-09-07', '1 - UNILOG - UBERLANDIA', 'nf', 'MONTES CLAROS-MG', 'MAUA-SP', 'VIVIANE MALVESI MEEDUARDO ', 'EDUARDO BOTELHO SOUZA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-09-11 01:35:00', 99, 'GLD-5821', 'TERCEIROS', '10235389', 'Ocorrencia', 'Posicoes', 'Atrasado', 900.22, 636.5, 'NYE-5146');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_acesso_perfil` (`id_perfil`);

--
-- Indexes for table `perfis`
--
ALTER TABLE `perfis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `perfis`
--
ALTER TABLE `perfis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `relatorios`
--
ALTER TABLE `relatorios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acessos`
--
ALTER TABLE `acessos`
  ADD CONSTRAINT `fk_id_acesso_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `perfis` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
