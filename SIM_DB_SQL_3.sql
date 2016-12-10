-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Dez-2016 às 16:08
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `ConsultaId` int(11) NOT NULL,
  `Sintoma` varchar(30) NOT NULL,
  `Doenca` varchar(50) NOT NULL,
  `Medicacao` varchar(50) NOT NULL,
  `Comentario` varchar(500) NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospital`
--

CREATE TABLE `hospital` (
  `HospitalId` int(3) NOT NULL,
  `Nome` varchar(20) COLLATE armscii8_bin DEFAULT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `morada`
--

CREATE TABLE `morada` (
  `MoradaId` varchar(5) NOT NULL,
  `Morada` varchar(100) DEFAULT NULL,
  `Localidade` varchar(30) DEFAULT NULL,
  `Distrito` varchar(20) DEFAULT NULL,
  `Contacto` int(10) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='moradas e contactos';

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `PacienteId` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `NIF` int(10) NOT NULL,
  `CartSaude` int(15) NOT NULL,
  `Obs` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sintomas`
--

CREATE TABLE `sintomas` (
  `SintomasId` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sintomas`
--

INSERT INTO `sintomas` (`SintomasId`, `Nome`, `Descricao`) VALUES
(1, 'dificuldades respiratórias', ''),
(2, 'problemas cardiacos', ''),
(3, 'fracturas', ''),
(4, 'tonturas', ''),
(5, 'hemorragia', ''),
(6, 'azia', ''),
(7, 'vomitos', ''),
(8, 'cefaleia', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `triagem`
--

CREATE TABLE `triagem` (
  `TriagemId` int(10) NOT NULL,
  `UserId` int(11) NOT NULL,
  `DifResp` int(1) NOT NULL,
  `ProbCard` int(1) NOT NULL,
  `Fracturas` int(1) NOT NULL,
  `Tonturas` int(1) NOT NULL,
  `Hemorragia` int(1) NOT NULL,
  `Azia` int(1) NOT NULL,
  `Vomitos` int(1) NOT NULL,
  `Cefaleia` int(1) NOT NULL,
  `Temp` int(1) NOT NULL,
  `Tensao` int(1) NOT NULL,
  `Triagem` int(1) NOT NULL,
  `Coment` varchar(500) NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `triagemsintomas`
--

CREATE TABLE `triagemsintomas` (
  `TriagemSintomasId` int(11) NOT NULL,
  `TriagemId` int(11) NOT NULL,
  `SintomasId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Morada` text NOT NULL,
  `Contacto` int(11) NOT NULL,
  `Sexo` text NOT NULL,
  `DataNascimento` text NOT NULL,
  `NIF` int(11) DEFAULT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Perfil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`UserId`, `Nome`, `Morada`, `Contacto`, `Sexo`, `DataNascimento`, `NIF`, `Username`, `Password`, `Perfil`) VALUES
(1, 'ze', '', 0, '', '', NULL, 'ze', '1234', ''),
(2, '', '', 0, '', '', NULL, 'hugo', '1234', 'enfermeiro'),
(3, 'admin', '', 0, '', '2016-12-06', NULL, 'admin', 'admin', 'admin'),
(4, 'Alex', 'madeira', 914789522, 'masculino', '', 123456, 'alex', 'alex', 'medico'),
(5, 'afonso', 'a', 123, 'masculino', '21-10-1965', 123456, 'af', 'af', ''),
(7, 'j', 'j', 1, 'feminino', '21-10-1965', 1, '1', '1', ''),
(8, 'joÃ£o', 'lisboa', 917478955, 'masculino', '21-10-1965', 123456, 'jo', 'jo', ''),
(9, 'a', 'a', 1, 'masculino', '1987-10-21', 123456, 'a', 'a', ''),
(10, 'b', 'b', 1, 'masculino', '1987-10-21', 123456, 'b', 'b', ''),
(11, 'q', 'q', 123456, 'masculino', '1987-10-21', 123456, 'q', 'q', 'paciente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`ConsultaId`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`HospitalId`);

--
-- Indexes for table `morada`
--
ALTER TABLE `morada`
  ADD PRIMARY KEY (`MoradaId`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`PacienteId`);

--
-- Indexes for table `sintomas`
--
ALTER TABLE `sintomas`
  ADD PRIMARY KEY (`SintomasId`),
  ADD UNIQUE KEY `Nome` (`Nome`);

--
-- Indexes for table `triagem`
--
ALTER TABLE `triagem`
  ADD PRIMARY KEY (`TriagemId`),
  ADD UNIQUE KEY `TriagemId_2` (`TriagemId`),
  ADD KEY `TriagemId` (`TriagemId`);

--
-- Indexes for table `triagemsintomas`
--
ALTER TABLE `triagemsintomas`
  ADD PRIMARY KEY (`TriagemSintomasId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `HospitalId` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sintomas`
--
ALTER TABLE `sintomas`
  MODIFY `SintomasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `triagemsintomas`
--
ALTER TABLE `triagemsintomas`
  MODIFY `TriagemSintomasId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
