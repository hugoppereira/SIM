-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2016 at 05:57 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `Consultas`
--

CREATE TABLE `Consultas` (
  `ConsultaId` int(11) NOT NULL,
  `Sintoma` varchar(30) NOT NULL,
  `Doenca` varchar(50) NOT NULL,
  `Medicacao` varchar(50) NOT NULL,
  `Comentario` varchar(500) NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Hospital`
--

CREATE TABLE `Hospital` (
  `HospitalId` int(3) NOT NULL,
  `Nome` varchar(20) COLLATE armscii8_bin DEFAULT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Morada`
--

CREATE TABLE `Morada` (
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
-- Table structure for table `Paciente`
--

CREATE TABLE `Paciente` (
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
-- Table structure for table `Sintomas`
--

CREATE TABLE `Sintomas` (
  `SintomasId` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Sintomas`
--

INSERT INTO `Sintomas` (`SintomasId`, `Nome`, `Descricao`) VALUES
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
-- Table structure for table `Triagem`
--

CREATE TABLE `Triagem` (
  `TriagemId` int(10) NOT NULL,
  `PacienteId` int(11) NOT NULL,
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
-- Table structure for table `TriagemSintomas`
--

CREATE TABLE `TriagemSintomas` (
  `TriagemSintomasId` int(11) NOT NULL,
  `TriagemId` int(11) NOT NULL,
  `SintomasId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserId` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Perfil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UserId`, `Username`, `Password`, `Nome`, `DataNascimento`, `Perfil`) VALUES
(1, 'ze', '1234', 'ze', '0000-00-00', ''),
(2, 'hugo', '1234', '', '0000-00-00', 'enfermeiro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Consultas`
--
ALTER TABLE `Consultas`
  ADD PRIMARY KEY (`ConsultaId`);

--
-- Indexes for table `Hospital`
--
ALTER TABLE `Hospital`
  ADD PRIMARY KEY (`HospitalId`);

--
-- Indexes for table `Morada`
--
ALTER TABLE `Morada`
  ADD PRIMARY KEY (`MoradaId`);

--
-- Indexes for table `Paciente`
--
ALTER TABLE `Paciente`
  ADD PRIMARY KEY (`PacienteId`);

--
-- Indexes for table `Sintomas`
--
ALTER TABLE `Sintomas`
  ADD PRIMARY KEY (`SintomasId`),
  ADD UNIQUE KEY `Nome` (`Nome`);

--
-- Indexes for table `Triagem`
--
ALTER TABLE `Triagem`
  ADD PRIMARY KEY (`TriagemId`),
  ADD UNIQUE KEY `TriagemId_2` (`TriagemId`),
  ADD KEY `TriagemId` (`TriagemId`);

--
-- Indexes for table `TriagemSintomas`
--
ALTER TABLE `TriagemSintomas`
  ADD PRIMARY KEY (`TriagemSintomasId`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Hospital`
--
ALTER TABLE `Hospital`
  MODIFY `HospitalId` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Sintomas`
--
ALTER TABLE `Sintomas`
  MODIFY `SintomasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `TriagemSintomas`
--
ALTER TABLE `TriagemSintomas`
  MODIFY `TriagemSintomasId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;