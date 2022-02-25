-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Fev-2022 às 12:54
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(50) NOT NULL,
  `email_aluno` varchar(30) NOT NULL,
  `nascimento_aluno` date DEFAULT NULL,
  `sexo_aluno` enum('M','F') DEFAULT NULL,
  `matricula_aluno` int(11) DEFAULT NULL,
  `telefone_aluno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `nome_aluno`, `email_aluno`, `nascimento_aluno`, `sexo_aluno`, `matricula_aluno`, `telefone_aluno`) VALUES
(1, 'Aluno1', 'aluno1@localhost', '2100-01-01', 'M', 11, '1100'),
(2, 'Aluno2', 'aluno2@localhost', '2200-02-02', 'F', 22, '2200'),
(3, 'Aluno3', 'aluno3@localhost', '2300-03-03', 'M', 33, '3300'),
(5, 'Aluno4', 'aluno4@localhost', '2400-04-04', 'F', 44, '4400'),
(6, 'Aluno5', 'aluno5@localhost', '2500-05-05', 'M', 55, '5500');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursa`
--

CREATE TABLE `cursa` (
  `id_cursa` int(11) NOT NULL,
  `id_aluno_cursa` int(11) NOT NULL,
  `id_disc_cursada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursa`
--

INSERT INTO `cursa` (`id_cursa`, `id_aluno_cursa`, `id_disc_cursada`) VALUES
(1, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id_disc` int(11) NOT NULL,
  `descricao_disc` text DEFAULT NULL,
  `nome_disc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id_disc`, `descricao_disc`, `nome_disc`) VALUES
(2, 'Blá blá blá', 'Tópicos gerais'),
(3, 'Bló bló bló', 'Culinária quântica'),
(4, 'Au au au au ', 'Estudos caninos 2'),
(5, '...', 'Teoria abstrata'),
(6, '1264758', 'Numérica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ensina`
--

CREATE TABLE `ensina` (
  `id_ensina` int(11) NOT NULL,
  `id_prof_ensina` int(11) NOT NULL,
  `id_disc_ensinada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ensina`
--

INSERT INTO `ensina` (`id_ensina`, `id_prof_ensina`, `id_disc_ensinada`) VALUES
(1, 3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id_professor` int(11) NOT NULL,
  `nome_professor` varchar(50) NOT NULL,
  `email_professor` varchar(30) NOT NULL,
  `nascimento_professor` date DEFAULT NULL,
  `sexo_professor` enum('M','F') DEFAULT NULL,
  `matricula_professor` int(11) DEFAULT NULL,
  `telefone_professor` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id_professor`, `nome_professor`, `email_professor`, `nascimento_professor`, `sexo_professor`, `matricula_professor`, `telefone_professor`) VALUES
(1, 'Professor1', 'professor1@localhost', '1901-01-01', 'M', 11, '1111'),
(2, 'Professor2', 'professor2@localhost', '1902-02-02', 'F', 22, '2222'),
(3, 'Professor3', 'professor3@localhost', '1903-03-03', 'M', 33, '3333'),
(4, 'Professor4', 'professor4@localhost', '1904-04-04', 'F', 44, '4444'),
(6, 'Professor5', 'professor5@localhost', '1905-05-05', 'M', 55, '5555');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Índices para tabela `cursa`
--
ALTER TABLE `cursa`
  ADD PRIMARY KEY (`id_cursa`),
  ADD KEY `id_aluno_cursa` (`id_aluno_cursa`),
  ADD KEY `id_disc_cursada` (`id_disc_cursada`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id_disc`);

--
-- Índices para tabela `ensina`
--
ALTER TABLE `ensina`
  ADD PRIMARY KEY (`id_ensina`),
  ADD KEY `id_prof_ensina` (`id_prof_ensina`),
  ADD KEY `id_disc_ensinada` (`id_disc_ensinada`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id_professor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `cursa`
--
ALTER TABLE `cursa`
  MODIFY `id_cursa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id_disc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `ensina`
--
ALTER TABLE `ensina`
  MODIFY `id_ensina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cursa`
--
ALTER TABLE `cursa`
  ADD CONSTRAINT `cursa_ibfk_1` FOREIGN KEY (`id_aluno_cursa`) REFERENCES `alunos` (`id_aluno`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cursa_ibfk_2` FOREIGN KEY (`id_disc_cursada`) REFERENCES `disciplinas` (`id_disc`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `ensina`
--
ALTER TABLE `ensina`
  ADD CONSTRAINT `ensina_ibfk_1` FOREIGN KEY (`id_prof_ensina`) REFERENCES `professores` (`id_professor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ensina_ibfk_2` FOREIGN KEY (`id_disc_ensinada`) REFERENCES `disciplinas` (`id_disc`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
