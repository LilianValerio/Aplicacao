-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2018 às 20:38
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinestesys`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disturbio_codigos`
--

CREATE TABLE `disturbio_codigos` (
  `cod_disturbio` int(11) NOT NULL,
  `desc_disturbio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_dependente`
--

CREATE TABLE `user_dependente` (
  `id_dependente` int(11) NOT NULL,
  `data_nasc_dependente` varchar(12) NOT NULL,
  `id_responsavel` int(16) NOT NULL,
  `cod_disturbio_dependente` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_responsavel`
--

CREATE TABLE `user_responsavel` (
  `id_resp` int(11) NOT NULL,
  `cpf_resp` int(12) NOT NULL,
  `nome_resp` varchar(35) NOT NULL,
  `sexo_resp` int(1) NOT NULL,
  `email_resp` varchar(30) NOT NULL,
  `senha_resp` varchar(16) NOT NULL,
  `telefone_resp` int(16) NOT NULL,
  `cidade_resp` varchar(30) NOT NULL,
  `estado_resp` varchar(25) NOT NULL,
  `logradouro_resp` varchar(35) NOT NULL,
  `perfil_usuario_resp` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disturbio_codigos`
--
ALTER TABLE `disturbio_codigos`
  ADD PRIMARY KEY (`cod_disturbio`);

--
-- Indexes for table `user_dependente`
--
ALTER TABLE `user_dependente`
  ADD PRIMARY KEY (`id_dependente`),
  ADD KEY `fk_id_responsavel` (`id_responsavel`),
  ADD KEY `fk_cod_disturbio_dependente` (`cod_disturbio_dependente`);

--
-- Indexes for table `user_responsavel`
--
ALTER TABLE `user_responsavel`
  ADD PRIMARY KEY (`id_resp`,`cpf_resp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_dependente`
--
ALTER TABLE `user_dependente`
  MODIFY `id_dependente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_responsavel`
--
ALTER TABLE `user_responsavel`
  MODIFY `id_resp` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `user_dependente`
--
ALTER TABLE `user_dependente`
  ADD CONSTRAINT `fk_cod_disturbio_dependente` FOREIGN KEY (`cod_disturbio_dependente`) REFERENCES `disturbio_codigos` (`cod_disturbio`),
  ADD CONSTRAINT `fk_id_responsavel` FOREIGN KEY (`id_responsavel`) REFERENCES `user_responsavel` (`id_resp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
