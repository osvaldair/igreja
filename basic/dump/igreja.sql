-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.8-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para igreja
CREATE DATABASE IF NOT EXISTS `igreja` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `igreja`;


-- Copiando estrutura para tabela igreja.atividades
CREATE TABLE IF NOT EXISTS `atividades` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_atividades_membro` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.atividade_membro
CREATE TABLE IF NOT EXISTS `atividade_membro` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_atividades` int(11) unsigned NOT NULL,
  `id_membro` int(11) unsigned NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_atividade_membro_atividades` (`id_atividades`),
  KEY `FK_atividade_membro_membro` (`id_membro`),
  CONSTRAINT `FK_atividade_membro_atividades` FOREIGN KEY (`id_atividades`) REFERENCES `atividades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_atividade_membro_membro` FOREIGN KEY (`id_membro`) REFERENCES `membro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.auth_assignment
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.auth_item
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.auth_item_child
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.auth_rule
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.cad_saldo_inicial
CREATE TABLE IF NOT EXISTS `cad_saldo_inicial` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `saldo_ini_caixa_diario` float(16,2) unsigned DEFAULT NULL,
  `saldo_ini_caixa_banco` float(16,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cad_saldo_inicial_caixa_diario` (`saldo_ini_caixa_diario`),
  KEY `FK_cad_saldo_inicial_caixa_banco` (`saldo_ini_caixa_banco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.caixa
CREATE TABLE IF NOT EXISTS `caixa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_caixa_banco` int(11) unsigned NOT NULL,
  `id_caixa_diario` int(11) unsigned NOT NULL,
  `data` date DEFAULT NULL,
  `saldo` float(16,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_caixa_caixa_banco` (`id_caixa_banco`),
  KEY `FK_caixa_caixa_diario` (`id_caixa_diario`),
  CONSTRAINT `FK_caixa_caixa_banco` FOREIGN KEY (`id_caixa_banco`) REFERENCES `caixa_banco` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_caixa_caixa_diario` FOREIGN KEY (`id_caixa_diario`) REFERENCES `caixa_diario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.caixa_banco
CREATE TABLE IF NOT EXISTS `caixa_banco` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_cad_saldo_inicial` int(10) unsigned NOT NULL,
  `data` date DEFAULT NULL,
  `valor_receita` double DEFAULT NULL,
  `valor_despesa` double DEFAULT NULL,
  `historico` varchar(45) DEFAULT NULL,
  `saldo` float(16,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_caixa_banco_cad_saldo_inicial` (`id_cad_saldo_inicial`),
  CONSTRAINT `FK_caixa_banco_cad_saldo_inicial` FOREIGN KEY (`id_cad_saldo_inicial`) REFERENCES `cad_saldo_inicial` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.caixa_diario
CREATE TABLE IF NOT EXISTS `caixa_diario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_cad_saldo_inicial` int(10) unsigned NOT NULL,
  `data` date DEFAULT NULL,
  `valor_receita` double DEFAULT NULL,
  `valor_despesa` double DEFAULT NULL,
  `historico` varchar(45) DEFAULT NULL,
  `saldo` float(16,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_caixa_diario_cad_saldo_inicial` (`id_cad_saldo_inicial`),
  CONSTRAINT `FK_caixa_diario_cad_saldo_inicial` FOREIGN KEY (`id_cad_saldo_inicial`) REFERENCES `cad_saldo_inicial` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.cargo
CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `data_ordenacao` date NOT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.cargo_membro
CREATE TABLE IF NOT EXISTS `cargo_membro` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_membro` int(11) unsigned NOT NULL,
  `id_cargo` int(11) unsigned NOT NULL,
  `data_inicio` date NOT NULL,
  `data_termino` date DEFAULT NULL,
  `status` enum('Ativo','Suspenso','Férias','Substituto') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cargo_membro_membro` (`id_membro`),
  KEY `FK_cargo_membro_cargo` (`id_cargo`),
  CONSTRAINT `FK_cargo_membro_cargo` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_cargo_membro_membro` FOREIGN KEY (`id_membro`) REFERENCES `membro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.congregacao
CREATE TABLE IF NOT EXISTS `congregacao` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome_congregacao` varchar(255) NOT NULL,
  `cnpj` bigint(14) unsigned DEFAULT NULL,
  `pr_dirigente` varchar(255) NOT NULL,
  `tel_fixo` bigint(11) unsigned DEFAULT NULL,
  `tel_celular` bigint(11) unsigned DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `qtde_membros` int(11) unsigned NOT NULL,
  `data_aniversario_congreg` date NOT NULL,
  `data_aniversario_pr` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_membro` int(11) unsigned NOT NULL,
  `nome_departamento` varchar(20) DEFAULT NULL,
  `dirigente` varchar(10) NOT NULL,
  `qtde_integrantes` int(10) unsigned DEFAULT NULL,
  `data_congresso` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_departamento_membro` (`id_membro`),
  CONSTRAINT `FK_departamento_membro` FOREIGN KEY (`id_membro`) REFERENCES `membro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.despesa
CREATE TABLE IF NOT EXISTS `despesa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.despesa_congregacao
CREATE TABLE IF NOT EXISTS `despesa_congregacao` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_caixa` int(11) unsigned NOT NULL,
  `id_despesa` int(11) unsigned NOT NULL,
  `id_congregacao` int(11) unsigned NOT NULL,
  `data` date NOT NULL,
  `valor` bigint(100) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_despesa_congregacao_despesa` (`id_despesa`),
  KEY `FK_despesa_congregacao_congregacao` (`id_congregacao`),
  KEY `FK_despesa_congregacao_caixa` (`id_caixa`),
  CONSTRAINT `FK_despesa_congregacao_caixa` FOREIGN KEY (`id_caixa`) REFERENCES `caixa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_despesa_congregacao_congregacao` FOREIGN KEY (`id_congregacao`) REFERENCES `congregacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_despesa_congregacao_despesa` FOREIGN KEY (`id_despesa`) REFERENCES `despesa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.dizimo
CREATE TABLE IF NOT EXISTS `dizimo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_membro` int(10) unsigned NOT NULL,
  `id_congregacao` int(10) unsigned NOT NULL,
  `data` date DEFAULT NULL,
  `valor` float(16,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_dizimo_membro` (`id_membro`),
  KEY `FK_dizimo_congregacao` (`id_congregacao`),
  CONSTRAINT `FK_dizimo_congregacao` FOREIGN KEY (`id_congregacao`) REFERENCES `congregacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_dizimo_membro` FOREIGN KEY (`id_membro`) REFERENCES `membro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.endereco
CREATE TABLE IF NOT EXISTS `endereco` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_membro` int(11) unsigned NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_endereco_membro` (`id_membro`),
  CONSTRAINT `FK_endereco_membro` FOREIGN KEY (`id_membro`) REFERENCES `membro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.escala
CREATE TABLE IF NOT EXISTS `escala` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_atividades` int(11) unsigned NOT NULL,
  `id_membro` int(11) unsigned NOT NULL,
  `id_congregacao` int(11) unsigned NOT NULL,
  `dia_escala` date DEFAULT NULL,
  `local_escala` varchar(10) DEFAULT NULL,
  `horario_escala` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_escala_atividades` (`id_atividades`),
  KEY `FK_escala_membro` (`id_membro`),
  KEY `FK_escala_congregacao` (`id_congregacao`),
  CONSTRAINT `FK_escala_atividades` FOREIGN KEY (`id_atividades`) REFERENCES `atividades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_escala_congregacao` FOREIGN KEY (`id_congregacao`) REFERENCES `congregacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_escala_membro` FOREIGN KEY (`id_membro`) REFERENCES `membro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.freq_ebd
CREATE TABLE IF NOT EXISTS `freq_ebd` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_membro` int(11) unsigned NOT NULL,
  `id_congregacao` int(11) unsigned NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `presenca` enum('Sim','Não') NOT NULL,
  `professor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_freq_ebd_membro` (`id_membro`),
  KEY `FK_freq_ebd_congregacao` (`id_congregacao`),
  CONSTRAINT `FK_freq_ebd_congregacao` FOREIGN KEY (`id_congregacao`) REFERENCES `congregacao` (`id`),
  CONSTRAINT `FK_freq_ebd_membro` FOREIGN KEY (`id_membro`) REFERENCES `membro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.grupo_usuario
CREATE TABLE IF NOT EXISTS `grupo_usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `data_inclusao` date DEFAULT NULL,
  `administrador` varchar(15) DEFAULT NULL,
  `avancado` varchar(15) DEFAULT NULL,
  `padrao` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.membro
CREATE TABLE IF NOT EXISTS `membro` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_congregacao` int(11) unsigned NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rg` bigint(20) unsigned NOT NULL,
  `cpf` bigint(11) unsigned NOT NULL,
  `sexo` enum('Feminino','Masculino') NOT NULL,
  `dt_nascimento` date NOT NULL,
  `naturalidade` varchar(50) NOT NULL,
  `estado_civil` enum('Solteiro','Casado','Divorciado','Desquitado','Viúvo') NOT NULL,
  `conjugue` varchar(100) DEFAULT NULL,
  `nome_mae` varchar(100) NOT NULL,
  `nome_pai` varchar(100) NOT NULL,
  `qtde_filhos` int(11) unsigned NOT NULL,
  `status` enum('Ativo','Congregado','Afastado','Desligado','Transferido','Falecido','Desaparecido','Inativo') NOT NULL,
  `email` varchar(100) NOT NULL,
  `dt_batismo` date NOT NULL,
  `batizado_es` enum('Sim','Não') NOT NULL,
  `dt_membresia` date NOT NULL,
  `biblia` enum('Sim','Não') NOT NULL,
  `dizimista` enum('Sim','Não') NOT NULL,
  `motivo_entrada` varchar(50) DEFAULT NULL,
  `escolaridade` enum('Ensino Fundamental','Ensino Médio','Graduação','Pós-Graduação') NOT NULL,
  `igreja_anterior` varchar(100) DEFAULT NULL,
  `tel_fixo` bigint(20) unsigned DEFAULT NULL,
  `tel_celular` bigint(20) unsigned DEFAULT NULL,
  `profissao` varchar(50) DEFAULT NULL,
  `ebd` enum('Sim','Não') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_membro_congregacao` (`id_congregacao`),
  CONSTRAINT `FK_membro_congregacao` FOREIGN KEY (`id_congregacao`) REFERENCES `congregacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.migration
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.receita
CREATE TABLE IF NOT EXISTS `receita` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.receita_congregacao
CREATE TABLE IF NOT EXISTS `receita_congregacao` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_caixa` int(10) unsigned NOT NULL,
  `id_congregacao` int(11) unsigned NOT NULL,
  `id_receita` int(11) unsigned NOT NULL,
  `data` date NOT NULL,
  `valor` float(16,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_receita_caixa` (`id_caixa`),
  KEY `FK_receita_congregacao` (`id_congregacao`),
  KEY `FK_receita_tipo_receita` (`id_receita`),
  CONSTRAINT `FK_receita_congregacao_caixa` FOREIGN KEY (`id_caixa`) REFERENCES `caixa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_receita_congregacao_congregacao` FOREIGN KEY (`id_congregacao`) REFERENCES `congregacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_receita_congregacao_receita` FOREIGN KEY (`id_receita`) REFERENCES `receita` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela igreja.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_grupo_usuario` int(11) unsigned NOT NULL,
  `id_congregacao` int(11) unsigned NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `data_inclusao` date DEFAULT NULL,
  `login` varchar(15) DEFAULT NULL,
  `senha` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_usuario_grupo_usuario` (`id_grupo_usuario`),
  KEY `FK_usuario_congregacao` (`id_congregacao`),
  CONSTRAINT `FK_usuario_congregacao` FOREIGN KEY (`id_congregacao`) REFERENCES `congregacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_usuario_grupo_usuario` FOREIGN KEY (`id_grupo_usuario`) REFERENCES `grupo_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
