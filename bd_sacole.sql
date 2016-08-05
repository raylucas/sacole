-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2016 às 00:25
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_sacole`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_deposito`
--

CREATE TABLE `tb_deposito` (
  `id` int(11) NOT NULL,
  `categoria` text NOT NULL,
  `qnt` int(11) NOT NULL,
  `ra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_deposito`
--

INSERT INTO `tb_deposito` (`id`, `categoria`, `qnt`, `ra`) VALUES
(51, 'Pilha', 1, 140001789),
(52, 'Pilha', 5, 140001789),
(53, 'Celular', 9, 140001789);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ponts`
--

CREATE TABLE `tb_ponts` (
  `id` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `ponts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_deposito`
--
ALTER TABLE `tb_deposito`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ponts`
--
ALTER TABLE `tb_ponts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_deposito`
--
ALTER TABLE `tb_deposito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `tb_ponts`
--
ALTER TABLE `tb_ponts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
