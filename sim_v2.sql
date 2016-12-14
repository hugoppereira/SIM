-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Dez-2016 às 09:42
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
  `Glicemia` int(10) NOT NULL,
  `Triagem` int(1) NOT NULL,
  `Horaentrada` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Horasaida` datetime NOT NULL,
  `EmEspera` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `triagem`
--

INSERT INTO `triagem` (`TriagemId`, `UserId`, `DifResp`, `ProbCard`, `Fracturas`, `Tonturas`, `Hemorragia`, `Azia`, `Vomitos`, `Cefaleia`, `Temp`, `Tensao`, `Glicemia`, `Triagem`, `Horaentrada`, `Horasaida`, `EmEspera`) VALUES
(1, 14, 1, 1, 0, 0, 0, 1, 0, 0, 37, 13, 100, 1, '2016-12-12 16:44:51', '2016-12-12 20:44:51', 0),
(2, 14, 1, 0, 0, 0, 0, 0, 0, 0, 37, 13, 100, 3, '2016-12-12 19:48:44', '2016-12-12 20:48:44', 0),
(3, 25, 1, 1, 1, 0, 0, 1, 0, 1, 40, 15, 150, 1, '2016-12-12 19:57:37', '2016-12-12 23:57:37', 0),
(5, 14, 0, 0, 0, 0, 1, 0, 1, 0, 37, 15, 100, 5, '2016-12-12 21:01:54', '2016-12-12 21:01:54', 0),
(6, 11, 0, 0, 0, 0, 0, 0, 0, 0, 37, 13, 100, 5, '2016-12-13 02:57:58', '2016-12-13 02:57:58', 0),
(7, 17, 0, 0, 0, 0, 1, 0, 0, 1, 37, 13, 100, 5, '2016-12-13 19:16:40', '2016-12-13 19:16:40', 0),
(8, 16, 0, 0, 1, 1, 0, 0, 0, 0, 37, 13, 150, 3, '2016-12-13 19:17:09', '2016-12-13 20:17:09', 0),
(9, 11, 0, 0, 0, 0, 0, 1, 1, 0, 37, 10, 150, 5, '2016-12-13 19:18:12', '2016-12-13 19:18:12', 0),
(10, 22, 1, 0, 0, 0, 0, 0, 0, 0, 37, 13, 100, 3, '2016-12-13 19:18:24', '2016-12-13 20:18:24', 0),
(11, 15, 0, 0, 0, 0, 0, 0, 1, 0, 37, 13, 150, 5, '2016-12-13 19:18:46', '2016-12-13 19:18:46', 0),
(12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 37, 13, 100, 5, '2016-12-13 21:14:01', '2016-12-13 21:14:01', 0),
(13, 11, 0, 0, 1, 0, 0, 0, 1, 0, 37, 13, 100, 5, '2016-12-14 09:30:05', '2016-12-14 09:30:05', 0),
(14, 14, 1, 0, 0, 0, 0, 0, 0, 0, 37, 12, 98, 2, '2016-12-14 09:30:47', '2016-12-14 11:30:47', 0);

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
(11, 'q', 'q', 123456, 'masculino', '1987-10-21', 123456, 'q', 'q', 'paciente'),
(12, 'hulk', 'sesimbra', 123456, 'masculino', '21-10-1965', 123456, 'hulk', 'hulk', 'enfermeiro'),
(13, 'asd', 'asd', 123, 'masculino', '1987-10-21', 1234, 'asd', 'asd', ''),
(14, 'qwerty', 'qwerty', 123456, 'feminino', '1987-10-21', 1234, 'qwe', 'qwe', 'paciente'),
(15, 'zxc', 'zxc', 914789522, 'masculino', '1987-10-21', 123456, 's', 's', 'paciente'),
(16, '1', '1', 123456, 'masculino', '1987-10-21', 123456, '1', '1', 'paciente'),
(17, '2', '2', 2, 'masculino', '21-10-1965', 2, '2', '2', 'paciente'),
(18, '2', '2', 2, 'masculino', '21-10-1965', 2, '2', '2', ''),
(19, '2', '2', 2, 'masculino', '21-10-1965', 2, '2', '2', ''),
(20, '8', '8', 8, 'masculino', '1987-10-21', 8, '8', '8', 'paciente'),
(21, 'r', 'r', 914789522, 'masculino', '1987-10-21', 123456, 'r', 'r', 'paciente'),
(22, 'p', 'p', 914789522, 'masculino', '1987-10-21', 123456, 'p', 'p', 'paciente'),
(23, 'k', 'k', 914789522, 'masculino', '1987-10-21', 123456, 'k', 'k', 'paciente'),
(24, 'p', 'p', 8, 'masculino', '1987-10-21', 123456, 'p', 'p', 'paciente'),
(25, 'ConstanÃ§a Quinteiro', 'cotovia', 91775588, 'feminino', '1991-01-30', 123577, 'consta', 'consta', 'paciente');

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
-- AUTO_INCREMENT for table `triagem`
--
ALTER TABLE `triagem`
  MODIFY `TriagemId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `triagemsintomas`
--
ALTER TABLE `triagemsintomas`
  MODIFY `TriagemSintomasId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
