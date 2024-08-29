-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 05:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odasu`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_CadastroUsuario` (IN `pnomeUsuario` VARCHAR(100), IN `psobrenomeUsuario` VARCHAR(100), IN `pemailUsuario` VARCHAR(100), IN `pcelUsuario` VARCHAR(20), IN `psenhaEmail` VARCHAR(255), IN `pnascimentoUsuario` DATE)   BEGIN
    -- Inserir dados na tabela tb_usuario
    INSERT INTO tb_usuario(nome_usuario, sobrenome_usuario, email_usuario, cel_usuario, senha_usuario, nascimento_usuario)
    VALUES (pnomeUsuario, psobrenomeUsuario, pemailUsuario, pcelUsuario, psenhaEmail, pnascimentoUsuario);

    -- Selecionar todos os dados da tabela tb_usuario (se desejado)
    -- Remover ou ajustar esta linha se não for necessário retornar todos os dados
    SELECT * FROM tb_usuario;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Login` (IN `pEmailUsuario` VARCHAR(100), IN `pSenhaUsuario` VARCHAR(255))   BEGIN
	DECLARE login VARCHAR(100);
    DECLARE senha VARCHAR(255);
    DECLARE id INT(11);
    DECLARE nome VARCHAR(100);
    
    
    SET login = (SELECT email_usuario from tb_usuario
                 WHERE email_usuario = pEmailUsuario);
                 
    SET senha = (SELECT senha_usuario from tb_usuario
                WHERE senha_usuario = pSenhaUsuario AND email_usuario = login);
                
    SET nome = (SELECT nome_usuario from tb_usuario
                 WHERE email_usuario = login AND senha_usuario = senha);
             
    SET id = (SELECT id_usuario from tb_usuario
                 WHERE email_usuario = login AND senha_usuario = senha);

    IF login IS NOT NULL
    THEN 
    	IF pSenhaUsuario = senha
        THEN
             SELECT nome AS "Resposta", id AS "Resposta2";
        ELSE
        	SELECT "Senha incorreta" AS "Resposta", NULL AS "Resposta2";
        END IF;
    ELSE
    	SELECT "Usuário não encontrado" AS "Resposta", NULL AS "Resposta2";
    END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(100) NOT NULL,
  `descricao_categoria` text DEFAULT NULL,
  `data_criacao_categoria` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_categoria`
--

INSERT INTO `tb_categoria` (`id_categoria`, `nome_categoria`, `descricao_categoria`, `data_criacao_categoria`) VALUES
(1, 'Equipamentos', 'Cadeira,espelho,mesa...', '2024-08-28 15:44:28'),
(2, 'Rosto', 'Blush,Mascara,Esfoliante,Maquiagem...', '2024-08-28 15:44:28'),
(3, 'Cabelo', 'Escova,Tesoura,Prancha de cabelo...', '2024-08-28 15:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_conversa`
--

CREATE TABLE `tb_conversa` (
  `id_conversa` int(11) NOT NULL,
  `id_remetente_conversa` int(11) DEFAULT NULL,
  `id_destinatario_conversa` int(11) DEFAULT NULL,
  `mensagem_conversa` text NOT NULL,
  `data_hora_conversa` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `img_Produto` blob NOT NULL,
  `descricao_produto` text DEFAULT NULL,
  `preco_produto` decimal(10,2) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `data_criacao_produto` datetime DEFAULT current_timestamp(),
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_produto`
--

INSERT INTO `tb_produto` (`id_produto`, `nome_produto`, `img_Produto`, `descricao_produto`, `preco_produto`, `id_usuario`, `data_criacao_produto`, `categoria_id`) VALUES
(11, 'Creme rosa', 0x2e2e2f5375616974652d4f646173752f696d6167656d42442f4372656d6520526f73612e6a7067, 'creme', 77.00, 2, '2024-08-29 11:51:34', 2),
(12, 'creme', 0x2e2e2f5375616974652d4f646173752f696d6167656d42442f4372656d6520417a756c2e6a7067, 'azul', 99999999.99, 6, '2024-08-29 12:12:08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `sobrenome_usuario` varchar(100) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `cel_usuario` varchar(20) DEFAULT NULL,
  `senha_usuario` varchar(255) NOT NULL,
  `data_criacao_usuario` datetime DEFAULT current_timestamp(),
  `nascimento_usuario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nome_usuario`, `sobrenome_usuario`, `email_usuario`, `cel_usuario`, `senha_usuario`, `data_criacao_usuario`, `nascimento_usuario`) VALUES
(1, 'admin', '', 'admin@admin', '2000-01-01', 'admin', '2024-08-14 15:17:35', '0000-00-00'),
(2, 'Maisa', 'Yamamura', 'maisahm@gmail.com', '123', '1235', '2024-08-14 15:27:50', '1999-10-01'),
(3, 'Maria', 'Faria', 'mariadb@maria.com', '11 9999-9999', '1236', '2024-08-14 15:33:23', '2001-01-01'),
(4, 'Luis', 'Zavatta', 'zavatta@gmail.com', '99 99999999', '1237', '2024-08-14 16:15:43', '2012-12-12'),
(5, 'julia', 'rego', 'julia@gmail.com', '99999999999999', '123', '2024-08-28 20:46:16', '2001-12-12'),
(6, 'pam', 'Ferreira', 'pamela@gmail.com', '111111111111', '1238', '2024-08-29 12:11:16', '2001-10-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `nome_categoria` (`nome_categoria`);

--
-- Indexes for table `tb_conversa`
--
ALTER TABLE `tb_conversa`
  ADD PRIMARY KEY (`id_conversa`),
  ADD KEY `id_remetente_conversa` (`id_remetente_conversa`),
  ADD KEY `id_destinatario_conversa` (`id_destinatario_conversa`);

--
-- Indexes for table `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `fk_categoria_produto` (`categoria_id`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email_usuario` (`email_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_conversa`
--
ALTER TABLE `tb_conversa`
  MODIFY `id_conversa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_conversa`
--
ALTER TABLE `tb_conversa`
  ADD CONSTRAINT `tb_conversa_ibfk_1` FOREIGN KEY (`id_remetente_conversa`) REFERENCES `tb_usuario` (`id_usuario`),
  ADD CONSTRAINT `tb_conversa_ibfk_2` FOREIGN KEY (`id_destinatario_conversa`) REFERENCES `tb_usuario` (`id_usuario`);

--
-- Constraints for table `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD CONSTRAINT `fk_categoria_produto` FOREIGN KEY (`categoria_id`) REFERENCES `tb_categoria` (`id_categoria`),
  ADD CONSTRAINT `tb_produto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
