-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jun-2018 às 22:41
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estrutura da tabela `tprofissional`
--

CREATE TABLE `tprofissional` (
  `idprofis` int(6) UNSIGNED NOT NULL,
  `profissao` varchar(30) DEFAULT NULL,
  `especialidade` varchar(30) DEFAULT NULL,
  `data_ini_area` date DEFAULT NULL,
  `id_user` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tusuario`
--

CREATE TABLE `tusuario` (
  `id_user` int(6) UNSIGNED NOT NULL,
  `nome_user` varchar(30) NOT NULL,
  `sobrenome_user` varchar(30) NOT NULL,
  `sexo_user` varchar(1) NOT NULL,
  `email_user` varchar(60) NOT NULL,
  `senha_user` varchar(60) NOT NULL,
  `tel_user` varchar(15) DEFAULT NULL,
  `cidade_user` varchar(60) NOT NULL,
  `estado_user` varchar(20) NOT NULL,
  `tipo_user` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tusuario2`
--

CREATE TABLE `tusuario2` (
  `idusuario2` int(6) UNSIGNED NOT NULL,
  `tipo_disturbio` varchar(40) NOT NULL,
  `desc_disturbio` varchar(40) NOT NULL,
  `data_nasc` date NOT NULL,
  `id_user` int(6) UNSIGNED DEFAULT NULL,
  `nome_user2` varchar(30) NOT NULL,
  `sobrenome_user2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tprofissional`
--
ALTER TABLE `tprofissional`
  ADD PRIMARY KEY (`idprofis`),
  ADD KEY `fk_tusuario_tprofissional` (`id_user`);

--
-- Indexes for table `tusuario`
--
ALTER TABLE `tusuario`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tusuario2`
--
ALTER TABLE `tusuario2`
  ADD PRIMARY KEY (`idusuario2`),
  ADD KEY `fk_tusuario_tusuario2` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tprofissional`
--
ALTER TABLE `tprofissional`
  MODIFY `idprofis` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tusuario`
--
ALTER TABLE `tusuario`
  MODIFY `id_user` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tusuario2`
--
ALTER TABLE `tusuario2`
  MODIFY `idusuario2` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tprofissional`
--
ALTER TABLE `tprofissional`
  ADD CONSTRAINT `fk_tusuario_tprofissional` FOREIGN KEY (`id_user`) REFERENCES `tusuario` (`id_user`);

--
-- Limitadores para a tabela `tusuario2`
--
ALTER TABLE `tusuario2`
  ADD CONSTRAINT `fk_tusuario_tusuario2` FOREIGN KEY (`id_user`) REFERENCES `tusuario` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
