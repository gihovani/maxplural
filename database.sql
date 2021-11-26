-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for osx10.16 (x86_64)
--
-- Host: 127.0.0.1    Database: maxplural
-- ------------------------------------------------------
-- Server version	10.3.31-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `avatar` varchar(100) DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `situacao` enum('1','0') NOT NULL DEFAULT '1',
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,NULL,'Gihovani Filipp','gihovani@mt2015.com','gihovani','senha','1','2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(2,NULL,'Kleverton Kulmann','kleverton@mt2015.com','kleverton','senha','1','2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(3,NULL,'Gregg Courts','chase40@hotmail.com','DarkGoldenRod','senha','','2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(4,NULL,'Elfrieda Inlet','norma20@hotmail.com','DeepSkyBlue','senha','','2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(5,NULL,'Cummings Way','elijah.rogahn@yahoo.com','DarkKhaki','senha','1','2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(6,NULL,'Jammie Cliffs','zion.dicki@hotmail.com','LightGray','senha','','2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(7,NULL,'Addie Islands','fkihn@gmail.com','PowderBlue','senha','','2021-11-17 19:52:36','2021-11-17 19:52:36',NULL);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner_imagem`
--

DROP TABLE IF EXISTS `banner_imagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner_imagem` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imagem` varchar(200) NOT NULL,
  `imagem_mobile` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `titulo` varchar(200) NOT NULL,
  `conteudo` text DEFAULT NULL,
  `prioridade` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner_imagem`
--

LOCK TABLES `banner_imagem` WRITE;
/*!40000 ALTER TABLE `banner_imagem` DISABLE KEYS */;
INSERT INTO `banner_imagem` VALUES (1,'bg-slide-1.png','bg-slide-1-mob.png','site/empreendimentos','Banner 01','<div class=\'slider-text container\'><h5>Viva com</h5><h4><i>PERSONALIDADE</i></h4></div><div class=\'marca-saiba-mais d-flex relative container\'><img src=\'./assets/imgs/marcas/m-derby-logo.svg\' alt=\'Derby Logo\' />Saiba mais <span class=\'nextArrow-icon\'></span></div>',1,'2021-11-26 16:23:11','2021-11-17 19:52:41',NULL),(2,'bg-slide-1.png','bg-slide-1-mob.png','site/empreendimentos','Banner 02','<div class=\'slider-text container\'><h5>Viva com</h5><h4><i>PERSONALIDADE</i></h4></div><div class=\'marca-saiba-mais d-flex relative container\'><img src=\'./assets/imgs/marcas/m-derby-logo.svg\' alt=\'Derby Logo\' />Saiba mais <span class=\'nextArrow-icon\'></span></div>',2,'2021-11-17 19:52:41','2021-11-17 19:52:41',NULL),(3,'bg-slide-1.png','bg-slide-1-mob.png','site/empreendimentos','Banner 03','<div class=\'slider-text container\'><h5>Viva com</h5><h4><i>PERSONALIDADE</i></h4></div><div class=\'marca-saiba-mais d-flex relative container\'><img src=\'./assets/imgs/marcas/m-derby-logo.svg\' alt=\'Derby Logo\' />Saiba mais <span class=\'nextArrow-icon\'></span></div>',3,'2021-11-17 19:52:41','2021-11-17 19:52:41',NULL),(4,'bg-slide-1.png','bg-slide-1-mob.png','site/empreendimentos','Banner 04','<div class=\'slider-text container\'><h5>Viva com</h5><h4><i>PERSONALIDADE</i></h4></div><div class=\'marca-saiba-mais d-flex relative container\'><img src=\'./assets/imgs/marcas/m-derby-logo.svg\' alt=\'Derby Logo\' />Saiba mais <span class=\'nextArrow-icon\'></span></div>',4,'2021-11-17 19:52:41','2021-11-17 19:52:41',NULL);
/*!40000 ALTER TABLE `banner_imagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caracteristica`
--

DROP TABLE IF EXISTS `caracteristica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caracteristica` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imagem` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `prioridade` int(11) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo` (`titulo`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caracteristica`
--

LOCK TABLES `caracteristica` WRITE;
/*!40000 ALTER TABLE `caracteristica` DISABLE KEYS */;
INSERT INTO `caracteristica` VALUES (1,'localizacao.svg','Localização privilegiada',1,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(2,'fechadura.svg','Fechadura<br />digital',2,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(3,'lavanderia.svg','Lavanderia compartilhada',3,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(4,'pet.svg','Pet Place',4,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(5,'bike.svg','Bicicletário',5,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(6,'academia.svg','Academia',6,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(7,'piscina.svg','Piscina<br />panorâmica',7,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(8,'work.svg','Work zone',8,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(9,'diamond.svg','Áreas gourmet individuais',9,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(10,'lavanderia-52df7.svg','Lavanderia exclusiva por andar',10,'2021-11-24 19:52:42','2021-11-24 19:52:42',NULL),(11,'sofa-icon-c9ffc.svg','Fácil de decorar',11,'2021-11-24 21:16:01','2021-11-24 21:09:44',NULL),(12,'idea-icon.svg','Moderno e Inteligente',12,'2021-11-24 21:33:50','2021-11-24 21:33:50',NULL),(13,'locker-icon.svg','Lockers Compartilhados',13,'2021-11-24 21:39:18','2021-11-24 21:39:18',NULL),(14,'question_icon.svg','Gestão de Contas da propriedade',11,'2021-11-24 22:23:50','2021-11-24 22:23:50',NULL),(15,'question_icon-b4cf6.svg','Checkin e checkout de hóspedes',11,'2021-11-24 22:24:07','2021-11-24 22:24:07',NULL),(16,'question_icon-7c2e8.svg','Marketing ativo do imóvel',11,'2021-11-24 22:24:16','2021-11-24 22:24:16',NULL),(17,'question_icon-f1f4a.svg','Caléndario facilitado',11,'2021-11-24 22:24:26','2021-11-24 22:24:26',NULL),(18,'question_icon-80f9b.svg','Manutenção e limpeza',11,'2021-11-24 22:24:37','2021-11-24 22:24:37',NULL),(19,'question_icon-d6682.svg','Serviço personalizado',12,'2021-11-24 22:24:48','2021-11-24 22:24:48',NULL),(20,'question_icon-7dfd8.svg','Suporte 24 horas ao hóspede',11,'2021-11-24 22:25:00','2021-11-24 22:25:00',NULL),(21,'question_icon-80efa.svg','300m da Praia de Boa Viagem',11,'2021-11-24 22:25:22','2021-11-24 22:25:22',NULL),(22,'question_icon-11cda.svg','Próximo ao aeroporto, shopping center, hospital, academias e escolas',11,'2021-11-24 22:25:33','2021-11-24 22:25:33',NULL),(23,'piscina-844e6.svg','Apartamentos jardim com jacuzzi ou piscina privativa',1,'2021-11-26 18:11:13','2021-11-26 18:11:13',NULL),(24,'question_icon-80efa-953e4.svg','Empreendimento vista mar (apenas a 350 metros da praia)',2,'2021-11-26 18:12:00','2021-11-26 18:12:00',NULL),(25,'diamond-e5efb.svg','Espaços compartilhados descentralizados (evitando aglomeração)',3,'2021-11-26 18:12:43','2021-11-26 18:12:43',NULL),(26,'question_icon-80efa-68c4c.svg','Várias experiências de lazer',4,'2021-11-26 18:13:44','2021-11-26 18:13:44',NULL),(27,'question_icon-80efa-c1146.svg','Gazebos com hidros no centro do empreendimento',5,'2021-11-26 18:13:57','2021-11-26 18:13:57',NULL),(28,'piscina-8c2c9.svg','Espaço para bar/restaurante integrado a piscina',6,'2021-11-26 18:14:15','2021-11-26 18:14:15',NULL),(29,'localizacao-3db8d.svg','Localização: próximo aos restaurantes Bora Bora e Beijupirá',7,'2021-11-26 18:14:36','2021-11-26 18:14:36',NULL),(30,'localizacao-ed517.svg','Situado na Av Beira Mar de Piedade',1,'2021-11-26 18:36:49','2021-11-26 18:36:49',NULL),(31,'diamond-4194c.svg','A praia a poucos metros do empreendimento',2,'2021-11-26 18:37:08','2021-11-26 18:37:08',NULL),(32,'localizacao-b1d0e.svg','Próximo ao Shopping Guararapes',3,'2021-11-26 18:37:22','2021-11-26 18:37:22',NULL),(33,'question_icon-80efa-21fc4.svg','Salão de Jogos',4,'2021-11-26 18:37:49','2021-11-26 18:37:49',NULL),(34,'question_icon-80efa-ed0c1.svg','Adega Café',5,'2021-11-26 18:38:16','2021-11-26 18:38:16',NULL);
/*!40000 ALTER TABLE `caracteristica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuracao`
--

DROP TABLE IF EXISTS `configuracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuracao` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `telefone_fixo` varchar(200) DEFAULT NULL,
  `telefone_whatsapp` varchar(200) DEFAULT NULL,
  `telefone_vendas_fixo` varchar(200) DEFAULT NULL,
  `telefone_vendas_whatsapp` varchar(200) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `instagram` varchar(200) DEFAULT NULL,
  `linkedin` varchar(200) DEFAULT NULL,
  `youtube` varchar(200) DEFAULT NULL,
  `whatsapp` varchar(200) DEFAULT NULL,
  `whatsapp_vendas` varchar(200) DEFAULT NULL,
  `chat_online` varchar(200) DEFAULT NULL,
  `central_vendas` varchar(200) DEFAULT NULL,
  `horario_atendimento` text DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuracao`
--

LOCK TABLES `configuracao` WRITE;
/*!40000 ALTER TABLE `configuracao` DISABLE KEYS */;
INSERT INTO `configuracao` VALUES (1,'comercial@maxplural.com.br','(81) 3204.3336','(81) 99887.0019','(81) 4000.1581','(81) 99827.0035','https://www.facebook.com/MaxpluralDesenvolvimentoImobiliario','https://www.instagram.com/max_plural/','https://www.linkedin.com/company/maxplural/','https://www.youtube.com/channel/UCzFdmtYAGSVZT-deI7lBYww','https://api.whatsapp.com/send/?phone=5581998870019&text=Olá','https://api.whatsapp.com/send/?phone=5581998270035&text=Olá','https://api.whatsapp.com/send/?phone=5581998870019&text=Olá','tel:+558130322261','Segunda-Quinta: 08h ás 18h<br />\r\nSexta: 08h ás 17h','Rua Antonio Lumack de Monte, 128.<br />\r\nSalas 1501 e 1502<br />\r\nEmpresarial Center 3<br />\r\nBoa Viagem - Recife/PE - CEP 51020-350','2021-11-26 17:41:24','2021-11-26 17:36:03',NULL);
/*!40000 ALTER TABLE `configuracao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contato` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `assunto` varchar(200) NOT NULL,
  `mensagem` text DEFAULT NULL,
  `empreendimento_id` int(10) unsigned DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contato_empreendimento_id_foreign` (`empreendimento_id`),
  CONSTRAINT `contato_empreendimento_id_foreign` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` VALUES (2,'GIHOVANI DEMETRIO','gihovani@gmail.com','(48) 9966-66667','Tabelas-de Valores',NULL,NULL,'2021-11-26 12:47:45','2021-11-26 12:47:45',NULL);
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empreendimento`
--

DROP TABLE IF EXISTS `empreendimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empreendimento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `linha_id` int(10) unsigned NOT NULL,
  `tipo` enum('Lançamento','Entregue','Construção') NOT NULL DEFAULT 'Lançamento',
  `imagem` varchar(100) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `palavras_chave` varchar(100) DEFAULT NULL,
  `descricao` varchar(200) NOT NULL,
  `conteudo` longtext NOT NULL,
  `especificacoes_tecnicas` text DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `style` text DEFAULT NULL,
  `javascript` text DEFAULT NULL,
  `situacao` enum('1','0') NOT NULL DEFAULT '1',
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `empreendimento_linha_id_foreign` (`linha_id`),
  CONSTRAINT `empreendimento_linha_id_foreign` FOREIGN KEY (`linha_id`) REFERENCES `linha` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empreendimento`
--

LOCK TABLES `empreendimento` WRITE;
/*!40000 ALTER TABLE `empreendimento` DISABLE KEYS */;
INSERT INTO `empreendimento` VALUES (1,9,'Lançamento','MAXDRB.png','https://www.youtube.com/embed/Umb_PgSpTcw','max-derby-boulevard','MAX DERBY BOULEVARD','quartos:1 e 2 quartos,banheiros: 1 banheiro,metragem: 25 e 41m²','Av. Governador Carlos de Lima Cavalcanti, 60 - Recife/PE','<p>Projeto com identidade &uacute;nica, contemplando itens de lazer e servi&ccedil;os que a vida moderna exige, adotando o uso de equipamentos tecnol&oacute;gicos e forte apelo de design. Procuramos em primeiro momento causar impacto a quem o observa, com sua acentuada horizontalidade na fachada principal provocada por jardineiras em balan&ccedil;o e coroada com o volume da piscina de vista panor&acirc;mica.</p>\r\n','<p>- Metragem &ndash; <strong>unidades com 25 e 41m&sup2;</strong><br />\r\n- Vagas de Garagem &ndash; <strong>Vagas rotativas</strong><br />\r\n- Su&iacute;tes / Quartos - <strong>1 e 2 quartos</strong><br />\r\n- Banheiros - <strong>1</strong><br />\r\n- Jardim privativo - <strong>Sim</strong></p>\r\n','Avenida Governador Carlos de Lima Cavalcanti, Nº 60, Boa Vista, Recife - PE','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.445324137394!2d-34.89811568522021!3d-8.055974794199445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18dd4e1e6a55%3A0xdc6e9c72173f3a89!2sAv.%20Governador%20Carlos%20de%20Lima%20Cavalcanti%2C%2060%20-%20Boa%20Vista%2C%20Recife%20-%20PE%2C%2050070-110!5e0!3m2!1spt-BR!2sbr!4v1637874143906!5m2!1spt-BR!2sbr',NULL,NULL,'1','2021-11-26 19:42:18','2021-11-17 19:52:36',NULL),(2,6,'Lançamento','MAXBV_EXT_02_.png',NULL,'max-bv-parque-dos-manguezais','MAX BV - PARQUE DOS MANGUEZAIS','quartos:1 quarto,banheiros: 1 banheiro,metragem: 23m²',' Aviador Severiano Lins, 58 - Recife / PE','<p>O Max BV, novo empreendimento da MaxPlural na sua linha Max Compact, chega para oferecer uma nova rela&ccedil;&atilde;o entre morador e regi&atilde;o. Cada detalhe foi pensado para que voc&ecirc; desfrute do que a modernidade tem de melhor, a praticidade. As fechaduras digitais, portarias virtuais, os dutos de coleta e o self market, m&aacute;quinas de conveni&ecirc;ncia de auto-servi&ccedil;o, oferecem a seguran&ccedil;a e a facilidade de todos desejamos . A lavanderia e lockers compartilhados, o biciclet&aacute;rio e o co working atendem a nossa necessidade de coletividade, enquanto as &aacute;reas gourmet individuais nos d&atilde;o a privacidade que todos precisamos. Pet place, porque hoje nossas casas abrigam esses amigos de quatro patas que nos deixam mais felizes. E a piscina panor&acirc;mica e a academia de mais de 100m&sup2; com p&eacute; direito duplo s&atilde;o diferenciais para quem quer mais qualidade de vida.</p>\r\n\r\n<p>&nbsp;</p>\r\n','<p>- Metragem: <strong>23m&sup2;</strong><br />\r\n- Vagas de Garagem: <strong>1</strong><br />\r\n- Su&iacute;tes / Quartos: <strong>1</strong><br />\r\n- Banheiros: <strong>1</strong><br />\r\n- Jardim privativo: <strong>Simhttps://youtu.be/Umb_PgSpTcw</strong></p>\r\n','R Aviador Severiano Lins, 58','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.9484346378554!2d-34.8946780852198!3d-8.106733294163853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f092ca970c5%3A0x469b5884c7fccea6!2sR.%20Aviador%20Severiano%20Lins%2C%2058%20-%20Boa%20Viagem%2C%20Recife%20-%20PE%2C%2051020-060!5e0!3m2!1spt-BR!2sbr!4v1637792684394!5m2!1spt-BR!2sbr',NULL,NULL,'1','2021-11-26 19:42:18','2021-11-17 19:52:36',NULL),(3,7,'Construção','lagunabeach.png',NULL,'loft-home-design','LOFT HOME DESIGN','quartos:1 e 2 quartos,banheiros: 1 e 2 banheiros,metragem: 22 a 109m²','Rua Compositor Ataulfo Alves,245 Recife / PE','<p>A 300m da Praia De Boa Viagem, o Loft Home Design &eacute; um projeto em sintonia m&aacute;xima com o morar contempor&acirc;neo. Suas plantas modulares permitem configura&ccedil;&otilde;es &uacute;nicas, adequadas para cada morador. O Loft tamb&eacute;m possui uma cobertura incr&iacute;vel: imagine receber os amigos em uma adega integrada a um caf&eacute;, relaxar em uma hidro no topo da cobertura... Ou ent&atilde;o nadar na piscina de borda infinita com vista da praia de Boa Viagem. E claro, como se n&atilde;o bastasse tudo isto, o projeto se integra a rua, sua cal&ccedil;ada e seu entorno, fazendo do Loft um empreendimento &uacute;nico em sua forma de pensar a coletividade.</p>\r\n','<p>- Metragem: <strong>22 a 109m&sup2; com 42 unidades</strong><br />\r\n- Vagas de Garagem &ndash; <strong>Vagas rotativas</strong><br />\r\n- Su&iacute;tes / Quartos &ndash; <strong>1 e 2 quartos</strong><br />\r\n- Banheiros &ndash; <strong>1 e 2</strong><br />\r\n- Jardim privativo - <strong>N&atilde;o</strong></p>\r\n','Rua Compositor Ataulfo Alves,245, Boa Viagem, Recife - PE','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.6924376687375!2d-34.90645468521963!3d-8.132761194145619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1fcb9cc8937b%3A0xc4d2786dbb7a276c!2sR.%20Compositor%20Ataulfo%20Alves%2C%20245%20-%20Boa%20Viagem%2C%20Recife%20-%20PE%2C%2051130-020!5e0!3m2!1spt-BR!2sbr!4v1637803648132!5m2!1spt-BR!2sbr',NULL,NULL,'1','2021-11-26 19:42:18','2021-11-17 19:52:37',NULL),(4,10,'Lançamento','laguna-beach.png',NULL,'laguna-beach-flat','LAGUNA BEACH FLAT','quartos:1 quarto,banheiro:1 banheiro,metragem: 32 a 49m²','R. Merepe III, 13 - Ipojuca / PE','<p>Cercado por vegeta&ccedil;&atilde;o, a &aacute;rea de lazer do Laguna &eacute; um para&iacute;so dentro de outro para&iacute;so, chamado Porto de Galinhas, eleita 7 vezes consecutivas a praia mais bonita do Brasil. O Laguna &eacute; para voc&ecirc; que quer fazer um investimento entre sua vida pessoal e profissional.</p>\r\n','<p>- Metragem: <strong>32,30m&sup2; a 49,70m&sup2;</strong><br />\r\n- Vagas de Garagem: <strong>01</strong><br />\r\n- Su&iacute;tes / Quartos: <strong>01</strong><br />\r\n- Banheiros <strong>: 01</strong><br />\r\n- Jardim privativo: <strong>n&atilde;o</strong></p>\r\n','R. Merepe III, 13, Porto de Galinhas, Ipojuca - PE','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15783.973179050176!2d-35.0072206!3d-8.5000307!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8fbe049625c5862f!2sLaguna%20Suites!5e0!3m2!1spt-BR!2sbr!4v1637805689697!5m2!1spt-BR!2sbr',NULL,NULL,'1','2021-11-26 19:42:18','2021-11-17 19:52:37',NULL),(5,10,'Entregue','AQUAZUL.png',NULL,'aquazul','AQUAZUL','quartos:1 e 2 quartos,banheiro:1 banheiro,metragem: 49 a 106m²','Rua Três, 146 - Ipojuca / PE','<p>Em um condom&iacute;nio compacto, no cora&ccedil;&atilde;o de Porto de Galinhas, o Aquazul conta com 18 flats exclusivos e 10 op&ccedil;&otilde;es de plantas. Nas &aacute;reas comuns, o condom&iacute;nio conta com mais de 400m de espelho d`&aacute;gua, al&eacute;m de piscinas individuais. No Aquazul os destaques est&atilde;o nos lofts, com p&eacute; direito duplo e hidromassagem na cobertura.</p>\r\n\r\n<p><strong>Diferenciais:</strong></p>\r\n\r\n<p><strong>- Condom&iacute;nio compacto em Porto de Galinhas, com 18 flats exclusivos<br />\r\n- S&atilde;o 300m&sup2; de espelho d&rsquo;&aacute;gua, al&eacute;m de piscinas individuais<br />\r\n- Hidromassagem na cobertura</strong></p>\r\n','<p>- Metragem: de<strong> 49,45m&sup2; a 106,46m&sup2;</strong><br />\r\n- Vagas de Garagem: <strong>1 por unidade</strong><br />\r\n- Su&iacute;tes / Quartos: <strong>1 e 2 quartos</strong><br />\r\n- Banheiros: <strong>1</strong><br />\r\n- Jardim privativo: <strong>n&atilde;o</strong></p>\r\n','Rua Três, 146, Porto de Galinhas, Ipojuca - PE','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15785.304054425329!2d-34.9952646!3d-8.4676441!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x672cd7f760877530!2sAquazul%20Flats!5e0!3m2!1spt-BR!2sbr!4v1637807522262!5m2!1spt-BR!2sbr',NULL,NULL,'1','2021-11-26 19:42:18','2021-11-17 19:52:37',NULL),(6,1,'Entregue','FP_brand-55d02.png','https://www.youtube.com/embed/ec5ZpPkv2IU','edificio-fernando-pessoa','Edifício Fernando Pessoa','quartos:1 quarto,banheiro:1 banheiro,metragem: 37 a 95m²','Av. Sen. Sergio Guerra, 1320, Jaboatão dos Guararapes/PE','<p>Sabe o que &eacute; melhor que uma piscina com borda infinita? Uma piscina com borda infinita e aqu&aacute;rio. Mais uma vez nos superamos ao transformar a cobertura do empreendimento em um projeto &uacute;nico e inacredit&aacute;vel, o Homedesign Fernando Pessoa &eacute; excepcional em tudo, escolha morar em um apartamento automatizado com plantas de 38 e 93m&sup2;, de frente para o mar. Escolha morar em um empreendimento com adega, bistr&ocirc;, lounge, sinuca, fitness, pilates, caf&eacute;, quadra de t&ecirc;nis e lavanderia com Wi-Fi. Escolha morar no Fernando Pessoa.</p>\r\n','<p>- Metragem: <strong>37m&sup2; a 95m&sup2;</strong><br />\r\n- Vagas de Garagem: <strong>02 vagas</strong><br />\r\n- Su&iacute;tes / Quartos: <strong>01 </strong><br />\r\n- Banheiros: <strong>01</strong><br />\r\n- Jardim privativo: <strong>N&atilde;o</strong></p>\r\n','Av. Sen. Sergio Guerra, 1320, Piedade, Jaboatão dos Guararapes - PE','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15797.502716827777!2d-34.9132941!3d-8.1648528!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7aae1f632ae77ed%3A0x26f0a3349e8f66f!2sCondom%C3%ADnio%20Fernando%20Pessoa%20Home%20Home%20Design!5e0!3m2!1spt-BR!2sbr!4v1637891274812!5m2!1spt-BR!2sbr',NULL,NULL,'1','2021-11-26 19:42:18','2021-11-17 19:52:37',NULL),(7,1,'Lançamento','deco-default.png',NULL,'deco-design-concept','Deco Design Concept','quartos:1 e 2 quartos,banheiro:1 banheiro,metragem: 28 a 84m²','Av. Beira Mar, 1198 - Jaboatão dos Guararapes / PE','<p>Escolha 1, 2, 3 ou 4 m&oacute;dulos, s&atilde;o diversos espa&ccedil;os dispon&iacute;veis que v&atilde;o de 28 a 84m&sup2;, n&atilde;o importa qual deles, todos est&atilde;o posicionados com vista para o mar. Aproveite tamb&eacute;m uma cobertura inacredit&aacute;vel com uma piscina de borda infinita de frente para o mar. Mas n&oacute;s sabemos que voc&ecirc; ainda quer mais, ent&atilde;o aproveite o espa&ccedil;o Fitness, o SPA ou receba os amigos no espa&ccedil;o gourmet. O DECO &eacute; o empreendimento design ideal para voc&ecirc;, seja por todas estas comodidades que j&aacute; falamos, pelo seu sistema de ar-condicionado inteligente, a automa&ccedil;&atilde;o residencial ou pela sua tecnologia utilizada no seu acabamento, com piso auto nivelador e andares com cores diferenciadas. Morar no DECO &eacute; uma experi&ecirc;ncia &uacute;nica.</p>\r\n','<p>- Metragem: <strong>28,22m&sup2; a 84,52m&sup2;</strong><br />\r\n- Vagas de Garagem: <strong>1 por unidade</strong><br />\r\n- Su&iacute;tes / Quartos: <strong>1 e 2 quartos</strong><br />\r\n- Banheiros: <strong>1 e 2</strong><br />\r\n- Jardim privativo: <strong>n&atilde;o</strong></p>\r\n','Av. Beira Mar, 1198, Piedade, Jaboatão dos Guararapes - PE','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15797.553055716366!2d-34.9127876!3d-8.1635802!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53d3ab69f72d3a84!2sEdificio%20Deco%20Design%20Concept!5e0!3m2!1spt-BR!2sbr!4v1637897839513!5m2!1spt-BR!2sbr',NULL,NULL,'1','2021-11-26 19:42:18','2021-11-17 19:52:37',NULL),(8,12,'Construção','emp-2.png',NULL,'beach-flat-serrambi','Beach Flat Serrambi','quartos:2 e 3 quartos,banheiro:2 banheiros,metragem: 29 a 85m²','Lote 1-A, Quadra C-1, Loteamento Ponta de Serrambi - Ipojuca / PE','<p>O Beach Flat Serrambi &eacute; um produto diferenciado, adequado ao conceito de viver contempor&acirc;neo. Localizado em um dos trechos de praia mais cobi&ccedil;adas de Pernambuco, a 60km do Recife, o empreendimento mistura o clima de praia com a contemporaneidade do ambiente urbano e a seguran&ccedil;a de um condom&iacute;nio fechado. &Eacute; design, &eacute; arte, &eacute; Maxplural.</p>\r\n','<p>- Metragem: <strong>29m&sup2; a 85m&sup2;</strong><br />\r\n- Vagas de Garagem: <strong>01 vaga por unidade</strong><br />\r\n- Su&iacute;tes / Quartos: <strong>02 a 03 quartos</strong><br />\r\n- Banheiros: <strong>Su&iacute;te e social</strong><br />\r\n- Jardim privativo: <strong>Sim</strong></p>\r\n\r\n<p><strong>- mais de 1000m&sup2; de &aacute;rea verde<br />\r\n- acesso privativo com recep&ccedil;&atilde;o<br />\r\n- 02 elevadores com acesso direto &aacute; &aacute;rea de lazer<br />\r\n- varanda gourmet<br />\r\n- piscina com 3 experi&ecirc;ncias&nbsp;<br />\r\n- playground</strong></p>\r\n','Lote 1-A, Quadra C-1, Loteamento Ponta de Serrambi, Serrambi, Ipojuca','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.3376515783712!2d-35.0089634708214!3d-8.562245199615342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7aa90428aef660f%3A0x73db5eb4188d6f25!2sR.%20Italaia%2C%2023%20-%20Ponta%20de%20Serrambi%2C%20Ipojuca%20-%20PE%2C%2055590-000!5e0!3m2!1spt-BR!2sbr!4v1637908733468!5m2!1spt-BR!2sbr',NULL,NULL,'1','2021-11-26 19:42:18','2021-11-17 19:52:37',NULL),(9,13,'Construção','cupe-default-81812.png',NULL,'cupe','CUPE','quartos:1 2 e 3 quartos,banheiro:1 e 2 banheiros,metragem: 26 a 117m²','Quadra \"C\", Componente do loteamento Porto do Sol - Ipojuca / PE','<p>Viver no Cupe Suites &eacute; ter a experi&ecirc;ncia de acordar todos os dias com o som das ondas do mar. &Eacute; ter ao seu alcance duas amplas &aacute;reas de lazer integradas &agrave; praia. Desfrutar de uma vista panor&acirc;mica e depois colocar os p&eacute;s na areia. Um projeto exclusivo, pensado nos m&iacute;nimos detalhes. Assinado pelo renomado escrit&oacute;rio Marcelo Souza Le&atilde;o &amp; Chala&ccedil;a e com paisagismo exclusivo de Luiz Vieira.</p>\r\n\r\n<p>- &Aacute;rea de lazer &agrave; beira-mar e paisagismo de Luiz Vieira<br />\r\n- Lazer panor&acirc;mico no segundo pavimento (piscina no rooftop)<br />\r\n- Beira Mar<br />\r\n- Playground<br />\r\n- Brinquedoteca<br />\r\n- Piscina com vista privilegiada<br />\r\n- Espa&ccedil;o para loja de conveni&ecirc;ncia&nbsp;</p>\r\n','<p>- Metragem: de<strong> 26,04m&sup2; a 117,51&sup2;</strong><br />\r\n- Vagas de Garagem: <strong>1 por unidade</strong><br />\r\n- Su&iacute;tes / Quartos: <strong>1, 2 e 3</strong><br />\r\n- Banheiros: 1 a 2<br />\r\n- Jardim privativo: <strong>sim (unidades de jardim possuem piscina ou jacuzzi privativa )</strong></p>\r\n','ote do Terreno parte próprio e parte de marinha n° 14-A, da Quadra \"C\", Componente do loteamento Porto do Sol, do município de Ipojuca, Porto de Galinhas, Ipojuca - PE','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1973.1351109381985!2d-34.9967252!3d-8.4730834!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7aa925567bc6975%3A0xbbf118ad19e3e08d!2sR.%20K%2C%20331-165%20-%20Porto%20de%20Galinhas%2C%20Ipojuca%20-%20PE%2C%2055590-000!5e0!3m2!1spt-BR!2sbr!4v1637913085336!5m2!1spt-BR!2sbr',NULL,NULL,'1','2021-11-26 19:42:18','2021-11-17 19:52:37',NULL),(31,14,'Construção','capa-max-carneirs.png','https://www.youtube.com/embed/rECtjexwshc','max-carneiros-suites','Max Carneiros Suites','R Projetada Quadra 18-A (Loteamento Prive São Jose dos Manguinhos)','UMA DAS PRAIAS MAIS BONITAS DO BRASIL','<p>O seu novo destino &eacute; a Praia dos Carneiros. Contemple um cen&aacute;rio paradis&iacute;aco, com uma faixa de 5km de areias finas e claras cercadas de belos coqueirais e aproveite as &aacute;guas calmas e cristalinas com piscinas naturais. Tudo isso a 90 km do Aeroporto do Recife e 50 km de Porto de Galinhas.</p>\r\n','<h3>Residenciais:</h3>\r\n\r\n<p>- Metragem: <strong>De 22,22 a 139,42m&sup2; (unidades com jardim e piscina privativa)</strong></p>\r\n\r\n<p>- Vagas de Garagem - <strong>210 vagas rotativas</strong></p>\r\n\r\n<p>- Su&iacute;tes / Quartos - <strong>1, 2 e 3 quartos</strong></p>\r\n\r\n<p>- Banheiros &ndash; <strong>1 e 2</strong></p>\r\n\r\n<p>- Jardim privativo &ndash; <strong>Sim (com piscina ou jacuzzi privativa &ndash; dar destaque a esse diferencial)</strong></p>\r\n\r\n<h3><strong>Diferenciais:</strong></h3>\r\n\r\n<p>- Listagem de diferenciais</p>\r\n\r\n<p>Apartamentos jardim com jacuzzi ou piscina privativa</p>\r\n\r\n<p>Empreendimento vista mar (apenas a 350 metros da praia)</p>\r\n\r\n<p>Espa&ccedil;os compartilhados descentralizados (evitando aglomera&ccedil;&atilde;o)</p>\r\n\r\n<p>V&aacute;rias experi&ecirc;ncias de lazer</p>\r\n\r\n<p>Gazebos com hidros no centro do empreendimento</p>\r\n\r\n<p>Espa&ccedil;o para bar/restaurante integrado a piscina</p>\r\n\r\n<p>Localiza&ccedil;&atilde;o: pr&oacute;ximo aos restaurantes Bora Bora e Beijupir&aacute;</p>\r\n','R. da Pe, 72 - Tamandaré, Praia dos Carneiros, PE, 55578-000','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3943.8754946333856!2d-35.079569!3d-8.703372!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd24d5d011252feb0!2sPraia%20dos%20Carneiros!5e0!3m2!1spt-BR!2sbr!4v1637960809851!5m2!1spt-BR!2sbr',NULL,NULL,'1','2021-11-26 18:09:27','2021-11-26 18:09:27',NULL),(32,15,'Entregue','capa-stark.png',NULL,'stark-home-design','Stark Home Design','quartos:3 suites,banheiros: 2','Av. Bernardo Vieira de Melo, 993 - Jaboatão dos Guararapes/PE','<p>Escolha um apartamento entre 39 e 104m2, tanto faz, voc&ecirc; est&aacute; morando de frente pro mar. Aproveite a cobertura panor&acirc;mica com 6 experi&ecirc;ncias de piscina, incluindo hidromassagens e spa, fitness, sauna, living com adega e caf&eacute; integrados. Mas incr&iacute;vel mesmo &eacute; a vista de tirar o f&ocirc;lego da piscina com borda infinita e 45m de l&acirc;mina d`&aacute;gua. N&atilde;o importa o motivo, o Stark &eacute; o empreendimento ideal para voc&ecirc; que procura um novo estilo de vida.</p>\r\n','<p>- Metragem: <strong>38,86m&sup2; a 104,93m&sup2;</strong></p>\r\n\r\n<p>- Vagas de Garagem: <strong>1</strong></p>\r\n\r\n<p>- Su&iacute;tes / Quartos: <strong>1 e 2</strong></p>\r\n\r\n<p>- Banheiros: <strong>1 e 2</strong></p>\r\n\r\n<p>- Jardim privativo: <strong>n&atilde;o</strong></p>\r\n','Av. Bernardo Vieira de Melo, 993 - Jaboatão dos Guararapes/PE','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15797.373333164833!2d-34.9143567!3d-8.1681228!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf999fe649606d0e!2sStark%20Home%20Design!5e0!3m2!1spt-BR!2sbr!4v1637965243680!5m2!1spt-BR!2sbr',NULL,NULL,'1','2021-11-26 19:22:55','2021-11-26 19:22:55',NULL);
/*!40000 ALTER TABLE `empreendimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empreendimento_arquivo`
--

DROP TABLE IF EXISTS `empreendimento_arquivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empreendimento_arquivo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `empreendimento_id` int(10) unsigned NOT NULL,
  `tabela_valores` enum('0','1') NOT NULL DEFAULT '0',
  `arquivo` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empreendimento_arquivo_empreendimento_id_foreign` (`empreendimento_id`),
  CONSTRAINT `empreendimento_arquivo_empreendimento_id_foreign` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empreendimento_arquivo`
--

LOCK TABLES `empreendimento_arquivo` WRITE;
/*!40000 ALTER TABLE `empreendimento_arquivo` DISABLE KEYS */;
INSERT INTO `empreendimento_arquivo` VALUES (1,1,'0','MAXDRB_BOOK_WPP_MAX_v06.pdf','E-BOOK DO EMPREENDIMENTO','2021-11-25 21:37:00','2021-11-17 19:52:36',NULL),(9,3,'0','Book-Loft.pdf','E-BOOK DO EMPREENDIMENTO','2021-11-24 22:42:59','2021-11-17 19:52:37',NULL),(29,8,'0','Miolo-Book-Serrambi-AJUSTE-06.pdf','E-BOOK DO EMPREENDIMENTO','2021-11-26 03:42:13','2021-11-17 19:52:37',NULL),(33,9,'0','CUPE_BOOK_V11_WPP.pdf','E-BOOK DO EMPREENDIMENTO','2021-11-26 04:47:56','2021-11-17 19:52:38',NULL),(121,2,'0','ebook-MAXBV.pdf','E-book Max BV','2021-11-24 22:08:25','2021-11-24 22:08:25',NULL),(122,9,'0','CUPE_MIOLO-book_compressed.pdf','E-BOOK 2 DO EMPREENDIMENTO','2021-11-26 12:37:18','2021-11-26 12:37:18',NULL),(123,9,'0','CUPE_BOOK_V05_compressed.pdf','E-BOOK 3 DO EMPREENDIMENTO','2021-11-26 12:38:29','2021-11-26 12:38:29',NULL),(124,7,'0','Marca-DECO.pdf','MARCA DECO','2021-11-26 12:44:29','2021-11-26 12:44:29',NULL),(125,31,'0','MP0087-20---Max-Carneiros---Book-12.pdf','E-BOOK DO EMPREENDIMENTO','2021-11-26 18:17:07','2021-11-26 18:17:07',NULL),(126,32,'0','Book-Stark-Home-Designer.pdf','E-BOOK DO EMPREENDIMENTO','2021-11-26 19:23:49','2021-11-26 19:23:49',NULL);
/*!40000 ALTER TABLE `empreendimento_arquivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empreendimento_caracteristica`
--

DROP TABLE IF EXISTS `empreendimento_caracteristica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empreendimento_caracteristica` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `empreendimento_id` int(10) unsigned NOT NULL,
  `caracteristica_id` int(10) unsigned NOT NULL,
  `prioridade` int(10) unsigned NOT NULL DEFAULT 0,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empreendimento_caracteristica_empreendimento_id_foreign` (`empreendimento_id`),
  KEY `empreendimento_caracteristica_caracteristica_id_foreign` (`caracteristica_id`),
  CONSTRAINT `empreendimento_caracteristica_caracteristica_id_foreign` FOREIGN KEY (`caracteristica_id`) REFERENCES `caracteristica` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `empreendimento_caracteristica_empreendimento_id_foreign` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=301 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empreendimento_caracteristica`
--

LOCK TABLES `empreendimento_caracteristica` WRITE;
/*!40000 ALTER TABLE `empreendimento_caracteristica` DISABLE KEYS */;
INSERT INTO `empreendimento_caracteristica` VALUES (1,1,1,0,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(2,1,2,0,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(10,2,1,0,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(11,2,2,0,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(13,2,4,0,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(14,2,5,0,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(15,2,6,0,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(16,2,7,0,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(18,2,9,0,'2021-11-17 19:52:36','2021-11-17 19:52:36',NULL),(46,6,1,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(47,6,2,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(48,6,3,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(49,6,4,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(50,6,5,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(51,6,6,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(52,6,7,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(53,6,8,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(54,6,9,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(55,7,1,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(56,7,2,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(57,7,3,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(58,7,4,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(59,7,5,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(60,7,6,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(61,7,7,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(62,7,8,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(63,7,9,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(64,8,1,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(65,8,2,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(66,8,3,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(67,8,4,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(68,8,5,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(69,8,6,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(70,8,7,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(71,8,8,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(72,8,9,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(73,9,1,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(74,9,2,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(75,9,3,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(76,9,4,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(77,9,5,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(78,9,6,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(79,9,7,0,'2021-11-17 19:52:37','2021-11-17 19:52:37',NULL),(80,9,8,0,'2021-11-17 19:52:38','2021-11-17 19:52:38',NULL),(81,9,9,0,'2021-11-17 19:52:38','2021-11-17 19:52:38',NULL),(271,2,10,0,'2021-11-24 19:59:02','2021-11-24 19:59:02',NULL),(272,2,11,0,'2021-11-24 21:10:11','2021-11-24 21:10:11',NULL),(273,2,12,0,'2021-11-24 21:34:12','2021-11-24 21:34:12',NULL),(274,2,13,0,'2021-11-24 21:39:45','2021-11-24 21:39:45',NULL),(275,3,21,0,'2021-11-24 22:29:11','2021-11-24 22:29:11',NULL),(276,3,17,0,'2021-11-24 22:29:11','2021-11-24 22:29:11',NULL),(277,3,15,0,'2021-11-24 22:29:11','2021-11-24 22:29:11',NULL),(278,3,14,0,'2021-11-24 22:29:11','2021-11-24 22:29:11',NULL),(279,3,18,0,'2021-11-24 22:29:11','2021-11-24 22:29:11',NULL),(280,3,16,0,'2021-11-24 22:29:11','2021-11-24 22:29:11',NULL),(281,3,22,0,'2021-11-24 22:29:11','2021-11-24 22:29:11',NULL),(282,3,19,0,'2021-11-24 22:29:11','2021-11-24 22:29:11',NULL),(283,3,20,0,'2021-11-24 22:29:11','2021-11-24 22:29:11',NULL),(284,1,15,0,'2021-11-25 18:05:13','2021-11-25 18:05:13',NULL),(285,1,12,0,'2021-11-25 18:05:13','2021-11-25 18:05:13',NULL),(286,31,23,0,'2021-11-26 18:16:28','2021-11-26 18:16:28',NULL),(287,31,24,0,'2021-11-26 18:16:28','2021-11-26 18:16:28',NULL),(288,31,28,0,'2021-11-26 18:16:28','2021-11-26 18:16:28',NULL),(289,31,25,0,'2021-11-26 18:16:28','2021-11-26 18:16:28',NULL),(290,31,27,0,'2021-11-26 18:16:28','2021-11-26 18:16:28',NULL),(291,31,29,0,'2021-11-26 18:16:28','2021-11-26 18:16:28',NULL),(292,31,26,0,'2021-11-26 18:16:28','2021-11-26 18:16:28',NULL),(293,32,31,0,'2021-11-26 19:22:55','2021-11-26 19:22:55',NULL),(294,32,6,0,'2021-11-26 19:22:55','2021-11-26 19:22:55',NULL),(295,32,34,0,'2021-11-26 19:22:55','2021-11-26 19:22:55',NULL),(296,32,3,0,'2021-11-26 19:22:55','2021-11-26 19:22:55',NULL),(297,32,7,0,'2021-11-26 19:22:55','2021-11-26 19:22:55',NULL),(298,32,32,0,'2021-11-26 19:22:55','2021-11-26 19:22:55',NULL),(299,32,33,0,'2021-11-26 19:22:55','2021-11-26 19:22:55',NULL),(300,32,30,0,'2021-11-26 19:22:55','2021-11-26 19:22:55',NULL);
/*!40000 ALTER TABLE `empreendimento_caracteristica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empreendimento_imagem`
--

DROP TABLE IF EXISTS `empreendimento_imagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empreendimento_imagem` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `empreendimento_id` int(10) unsigned NOT NULL,
  `tipo` enum('Banner','Fachada','Área de Lazer','Decorado','Especificação','Obra') NOT NULL DEFAULT 'Banner',
  `imagem` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empreendimento_imagem_empreendimento_id_foreign` (`empreendimento_id`),
  CONSTRAINT `empreendimento_imagem_empreendimento_id_foreign` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empreendimento_imagem`
--

LOCK TABLES `empreendimento_imagem` WRITE;
/*!40000 ALTER TABLE `empreendimento_imagem` DISABLE KEYS */;
INSERT INTO `empreendimento_imagem` VALUES (1,2,'Banner','MAXBV_UND_02-350bc.png','Max BV - banner-1','2021-11-24 19:42:36','2021-11-24 19:37:29',NULL),(2,2,'Especificação','MAXBV_1oPAV_LAZER.png','WORK ZONE','2021-11-24 20:14:12','2021-11-24 20:13:10',NULL),(3,2,'Especificação','MAXBV_2oPAV_LAZER.png','LAZER','2021-11-24 20:13:34','2021-11-24 20:13:34',NULL),(4,2,'Especificação','MAXBV_PH.png','ÁREA COMUM','2021-11-24 20:15:54','2021-11-24 20:15:35',NULL),(5,2,'Especificação','MAXBV_PH_TERREO.png','TÉRREO','2021-11-24 20:15:49','2021-11-24 20:15:49',NULL),(6,2,'Especificação','MAXBV_PH_VAZADO_01.png','PAV. VAZADO 1','2021-11-24 20:16:21','2021-11-24 20:16:21',NULL),(7,2,'Especificação','MAXBV_PH_VAZADO_02.png','PAV. VAZADO 2','2021-11-24 20:16:35','2021-11-24 20:16:35',NULL),(8,2,'Fachada','MAXBV_EXT_01.png','Fachada dia','2021-11-24 20:19:15','2021-11-24 20:19:15',NULL),(9,2,'Fachada','MAXBV_EXT_02-b3142.png','Fachada<br>Pôr-do-sol','2021-11-24 20:21:42','2021-11-24 20:19:36',NULL),(12,2,'Área de Lazer','MAXBV_PETPLACE.png','Pet Place','2021-11-24 20:34:07','2021-11-24 20:22:54',NULL),(14,2,'Área de Lazer','MAXBV_SELFMARKET_v03.png','Self Market','2021-11-24 20:29:38','2021-11-24 20:26:33',NULL),(15,2,'Decorado','MAXBV_UND_01.png','Apartamento<br> Decorado','2021-11-24 20:50:39','2021-11-24 20:27:26',NULL),(16,2,'Decorado','MAXBV_UND_02-d5b2a.png','Varanda','2021-11-24 20:49:23','2021-11-24 20:27:48',NULL),(17,2,'Banner','MAXBV_UND_03_02.png','Apartamento<br>Decorado 3','2021-11-24 20:28:30','2021-11-24 20:28:30',NULL),(18,2,'Área de Lazer','MAXBV_FITNESS_H_v02.png','Academia','2021-11-24 20:31:04','2021-11-24 20:31:04',NULL),(19,2,'Área de Lazer','MAXBV_COWORKING.png','COWORKING','2021-11-24 20:32:29','2021-11-24 20:32:29',NULL),(20,2,'Área de Lazer','MAXBV_LAVANDERIA_V02.png','Lavanderia','2021-11-24 20:35:58','2021-11-24 20:35:58',NULL),(21,2,'Área de Lazer','MAXBV_POOL_01-a475c.png','Piscina Frente','2021-11-24 20:37:37','2021-11-24 20:37:37',NULL),(22,2,'Área de Lazer','MAXBV_POOL_02-43b26.png','Piscina Costas','2021-11-24 20:37:50','2021-11-24 20:37:50',NULL),(23,2,'Decorado','MAXBV_UND_03_02-60ab5.png','Quarto Decorado','2021-11-24 20:48:48','2021-11-24 20:48:48',NULL),(24,3,'Banner','802_1-banner.png','LOFT-Banner','2021-11-24 22:31:36','2021-11-24 22:31:36',NULL),(25,3,'Fachada','FACHADA-01.png','Fachada','2021-11-24 22:32:40','2021-11-24 22:32:40',NULL),(26,3,'Fachada','FACHADA-SUL.png','Fachada Sul','2021-11-24 22:32:55','2021-11-24 22:32:55',NULL),(27,3,'Fachada','ENTRADA.png','Entrada','2021-11-24 22:33:29','2021-11-24 22:33:29',NULL),(28,3,'Fachada','DRONE-2.png','Vista Superior','2021-11-24 22:33:45','2021-11-24 22:33:45',NULL),(29,3,'Decorado','402.png','Quarto','2021-11-24 22:35:54','2021-11-24 22:35:54',NULL),(30,3,'Decorado','802_1.png','Sala','2021-11-24 22:36:11','2021-11-24 22:36:11',NULL),(31,3,'Decorado','802_2.png','Sala','2021-11-24 22:39:39','2021-11-24 22:36:35',NULL),(32,3,'Decorado','1302_01.png','Sala','2021-11-24 22:39:35','2021-11-24 22:36:57',NULL),(33,3,'Decorado','1302_02.png','Sala','2021-11-24 22:39:30','2021-11-24 22:37:11',NULL),(34,3,'Área de Lazer','LAVANDERIA_02.png','Lavanderia','2021-11-24 22:39:50','2021-11-24 22:38:13',NULL),(35,3,'Área de Lazer','GARAGEM.png','Garagem','2021-11-24 22:39:54','2021-11-24 22:38:28',NULL),(36,3,'Área de Lazer','PISCINA.png','Piscina','2021-11-24 22:40:00','2021-11-24 22:38:44',NULL),(37,4,'Banner','Gretadias-098-banner.png','Laguna-banner','2021-11-24 23:09:36','2021-11-24 23:09:36',NULL),(38,4,'Fachada','Gretadias-151.png','Entrada','2021-11-24 23:13:01','2021-11-24 23:13:01',NULL),(39,4,'Fachada','Gretadias-122.png','Vista Sul','2021-11-24 23:13:29','2021-11-24 23:13:29',NULL),(40,4,'Área de Lazer','Gretadias-023.png','Academia','2021-11-24 23:13:57','2021-11-24 23:13:57',NULL),(41,4,'Área de Lazer','Gretadias-068.png','Piscina','2021-11-24 23:14:14','2021-11-24 23:14:14',NULL),(42,4,'Área de Lazer','Gretadias-087.png','Piscina','2021-11-24 23:14:34','2021-11-24 23:14:34',NULL),(43,4,'Área de Lazer','Gretadias-088.png','Piscina','2021-11-24 23:25:04','2021-11-24 23:14:53',NULL),(44,4,'Área de Lazer','Gretadias-124.png','Academia','2021-11-24 23:15:09','2021-11-24 23:15:09',NULL),(45,4,'Área de Lazer','Gretadias-123.png','Playground','2021-11-24 23:15:21','2021-11-24 23:15:21',NULL),(46,4,'Área de Lazer','Gretadias-158.png','Instalações','2021-11-24 23:17:50','2021-11-24 23:17:38',NULL),(47,4,'Área de Lazer','Gretadias-081.png','Restaurante','2021-11-24 23:18:18','2021-11-24 23:18:18',NULL),(48,4,'Área de Lazer','Gretadias-068-32ea0.png','Quiosque','2021-11-24 23:18:36','2021-11-24 23:18:36',NULL),(49,4,'Decorado','Gretadias-031.png','Sala de Espera','2021-11-24 23:19:02','2021-11-24 23:19:02',NULL),(50,4,'Área de Lazer','Gretadias-024.png','Recepção','2021-11-24 23:19:22','2021-11-24 23:19:22',NULL),(51,5,'Banner','Gretadias-063.png','Aquazul-banner','2021-11-24 23:45:42','2021-11-24 23:45:42',NULL),(52,5,'Fachada','Gretadias-063-8ebeb.png','Fachada','2021-11-24 23:46:56','2021-11-24 23:46:56',NULL),(53,5,'Área de Lazer','Gretadias-015.png','Vista Externa','2021-11-24 23:49:07','2021-11-24 23:49:07',NULL),(54,5,'Área de Lazer','Gretadias-052.png','Ducha pré-piscina','2021-11-24 23:50:30','2021-11-24 23:50:30',NULL),(55,5,'Área de Lazer','Gretadias-017.png','Deck','2021-11-24 23:51:31','2021-11-24 23:51:31',NULL),(56,5,'Área de Lazer','Gretadias-062.png','Piscina','2021-11-24 23:51:43','2021-11-24 23:51:43',NULL),(57,5,'Decorado','Gretadias-032.png','Saguão','2021-11-24 23:52:01','2021-11-24 23:52:01',NULL),(58,5,'Decorado','Gretadias-101.png','Corredores','2021-11-24 23:52:27','2021-11-24 23:52:27',NULL),(59,5,'Área de Lazer','Gretadias-089.png','Piscina','2021-11-24 23:52:57','2021-11-24 23:52:57',NULL),(60,5,'Área de Lazer','Gretadias-062-ed4de.png','Sacada','2021-11-24 23:53:48','2021-11-24 23:53:48',NULL),(61,5,'Área de Lazer','Gretadias-060.png','Vista Deck','2021-11-24 23:54:26','2021-11-24 23:54:26',NULL),(62,5,'Área de Lazer','Gretadias-119.png','300m² de espelho d\'água','2021-11-24 23:55:56','2021-11-24 23:55:56',NULL),(63,1,'Banner','MAXDRB_HALL-banner.png','banner','2021-11-25 19:12:03','2021-11-25 19:11:01',NULL),(64,1,'Fachada','MAXDRB_FACHADA_DIURNA-c79a3.png','Fachada','2021-11-25 21:16:39','2021-11-25 20:30:06',NULL),(65,1,'Fachada','MAXDRB_FACHADA_NOTURNA-0ea3e.png','Fachada','2021-11-25 21:16:48','2021-11-25 20:30:28',NULL),(66,1,'Fachada','MAXDRB_LOCALIZACAO-70508.png','Fachada Aérea','2021-11-25 21:17:26','2021-11-25 20:30:43',NULL),(67,1,'Área de Lazer','MAXDRB_FITNESS-0a5dd.png','Academia','2021-11-25 21:21:28','2021-11-25 21:01:42',NULL),(68,1,'Área de Lazer','MAXDRB_GOURMET-ca925.png','&nbsp;','2021-11-25 21:21:37','2021-11-25 21:02:15',NULL),(69,1,'Área de Lazer','MAXDRB_HALL-bbea5.png','Hall de Entrada','2021-11-25 21:21:45','2021-11-25 21:03:30',NULL),(70,1,'Área de Lazer','MAXDRB_LAVANDERIA_FINAL-0a690.png','Lavanderia','2021-11-25 21:22:37','2021-11-25 21:03:42',NULL),(71,1,'Área de Lazer','MAXDRB_LOUNGE_COBERTURA-c3131.png','Lounge Cobertura','2021-11-25 21:23:02','2021-11-25 21:04:04',NULL),(72,1,'Área de Lazer','MAXDRB_POOL_01-2630d.png','Piscina','2021-11-25 21:23:18','2021-11-25 21:05:31',NULL),(73,1,'Área de Lazer','MAXDRB_POOL_02-28f2a.png','Piscina','2021-11-25 21:23:29','2021-11-25 21:06:00',NULL),(74,1,'Área de Lazer','MAXDRB_SELFMARKET-39b66.png','Self Market','2021-11-25 21:23:36','2021-11-25 21:06:19',NULL),(75,1,'Área de Lazer','MAXDRB_WORKZONE-e127e.png','Workzone','2021-11-25 21:23:46','2021-11-25 21:06:33',NULL),(76,1,'Área de Lazer','MAXDRB_FESTAS_01-f402f.png','Salão de Festas','2021-11-25 21:24:20','2021-11-25 21:10:30',NULL),(77,1,'Área de Lazer','MAXDRB_FESTAS_02-02bad.png','Salão de Festas','2021-11-25 21:24:26','2021-11-25 21:10:46',NULL),(78,1,'Área de Lazer','MAXDRB_PETPLACE-823c5.png','Pet Place','2021-11-25 21:24:38','2021-11-25 21:11:18',NULL),(79,1,'Decorado','MAXDRB_AP_2QT_01-a5b24.png','Apartamento','2021-11-25 21:24:56','2021-11-25 21:12:09',NULL),(80,1,'Decorado','MAXDRB_AP_2QT_02-0a303.png','Apartamento','2021-11-25 21:25:02','2021-11-25 21:12:21',NULL),(81,1,'Decorado','MAXDRB_AP_FLAT-29377.png','Flat','2021-11-25 21:25:06','2021-11-25 21:12:29',NULL),(82,1,'Especificação','PH_MAXDRB_1PAV_LAZER.png','Área de Lazer','2021-11-25 21:30:16','2021-11-25 21:30:16',NULL),(83,1,'Especificação','PH_MAXDRB_2PAV_LAZER.png','Área de Lazer','2021-11-25 21:30:34','2021-11-25 21:30:34',NULL),(84,1,'Especificação','PH_MAXDRB_GARAGEM_01.png','Garagem','2021-11-25 21:30:45','2021-11-25 21:30:45',NULL),(85,1,'Especificação','PH_MAXDRB_TERREO.png','Térreo','2021-11-25 21:30:56','2021-11-25 21:30:56',NULL),(86,1,'Especificação','PH_MAXDRB_TIPO.png','Pavimento','2021-11-25 21:31:09','2021-11-25 21:31:09',NULL),(87,1,'Especificação','PH_MAXDRB_VAZADO.png','Andar Vazado / Garagem','2021-11-25 21:32:33','2021-11-25 21:31:21',NULL),(88,6,'Banner','Gretadias-046.png','Fernando Pessoa Banner','2021-11-25 23:02:05','2021-11-25 23:02:05',NULL),(89,6,'Fachada','Gretadias-017-2-06b37.png','Fachada','2021-11-25 23:14:15','2021-11-25 23:02:26',NULL),(90,6,'Fachada','Gretadias-078-0facd.png','Fachada Frontal','2021-11-25 23:12:17','2021-11-25 23:03:11',NULL),(91,6,'Fachada','IMG_0749-d8a6c.png','Fachada','2021-11-25 23:12:32','2021-11-25 23:03:48',NULL),(92,6,'Fachada','IMG_0756-0a077.png','Fachada','2021-11-25 23:12:42','2021-11-25 23:04:19',NULL),(93,6,'Área de Lazer','Gretadias-011-2.png','Piscina','2021-11-25 23:05:03','2021-11-25 23:05:03',NULL),(94,6,'Decorado','Gretadias-039.png','Sacada','2021-11-25 23:05:33','2021-11-25 23:05:22',NULL),(95,6,'Área de Lazer','Gretadias-058.png','Deck','2021-11-25 23:05:47','2021-11-25 23:05:47',NULL),(96,6,'Área de Lazer','Gretadias-046-a3ed7.png','Deck','2021-11-25 23:05:58','2021-11-25 23:05:58',NULL),(97,6,'Área de Lazer','Gretadias-092-db2d2.png','Quadra','2021-11-25 23:14:28','2021-11-25 23:06:20',NULL),(98,6,'Área de Lazer','Gretadias-068-5856f.png','Terraço','2021-11-25 23:15:21','2021-11-25 23:06:51',NULL),(99,6,'Área de Lazer','Gretadias-052-ed8be.png','Quadra','2021-11-25 23:15:29','2021-11-25 23:07:03',NULL),(100,6,'Área de Lazer','Gretadias-105.png','Hall','2021-11-25 23:16:03','2021-11-25 23:16:03',NULL),(101,6,'Área de Lazer','Gretadias-109.png','Hall','2021-11-25 23:16:18','2021-11-25 23:16:18',NULL),(102,6,'Área de Lazer','Gretadias-111.png','Hall','2021-11-25 23:16:36','2021-11-25 23:16:36',NULL),(103,6,'Área de Lazer','Gretadias-097.png','Quadra','2021-11-25 23:16:57','2021-11-25 23:16:57',NULL),(104,6,'Decorado','IMG_0785.png','Apartamento','2021-11-25 23:17:22','2021-11-25 23:17:22',NULL),(105,6,'Decorado','IMG_0798.png','Apartamento','2021-11-25 23:17:33','2021-11-25 23:17:33',NULL),(106,6,'Área de Lazer','IMG_0767.png','Hall','2021-11-25 23:17:52','2021-11-25 23:17:52',NULL),(107,6,'Área de Lazer','Gretadias-101-52ce8.png','Hall','2021-11-25 23:18:55','2021-11-25 23:18:55',NULL),(108,7,'Banner','Gretadias-029-2-1.png','banner','2021-11-26 01:45:19','2021-11-26 00:47:29',NULL),(109,7,'Fachada','Gretadias-029-2-1-4af46.png','Fachada','2021-11-26 02:03:39','2021-11-26 02:03:39',NULL),(110,7,'Fachada','Gretadias-059-1.png','Frente','2021-11-26 02:03:51','2021-11-26 02:03:51',NULL),(111,7,'Fachada','Gretadias-069-1.png','Frontal','2021-11-26 02:04:14','2021-11-26 02:04:14',NULL),(112,7,'Fachada','Gretadias-096-1.png','Fachada','2021-11-26 02:04:27','2021-11-26 02:04:27',NULL),(113,7,'Área de Lazer','Gretadias-118-1.png','Terraço','2021-11-26 02:05:51','2021-11-26 02:05:51',NULL),(114,7,'Área de Lazer','Gretadias-002-2-1.png','Piscina','2021-11-26 02:06:05','2021-11-26 02:06:05',NULL),(115,7,'Área de Lazer','Gretadias-004-2-1.png','Piscina','2021-11-26 02:06:17','2021-11-26 02:06:17',NULL),(116,7,'Área de Lazer','Gretadias-003-2-1.png','Recepção','2021-11-26 02:06:35','2021-11-26 02:06:35',NULL),(117,7,'Área de Lazer','Gretadias-061-1.png','Hall','2021-11-26 02:06:52','2021-11-26 02:06:52',NULL),(118,7,'Área de Lazer','Gretadias-005-2-1.png','Piscina','2021-11-26 02:07:10','2021-11-26 02:07:10',NULL),(119,7,'Área de Lazer','Gretadias-115-1.png','Vista do Terraço','2021-11-26 02:07:37','2021-11-26 02:07:37',NULL),(120,7,'Área de Lazer','Gretadias-123-1.png','Hall','2021-11-26 02:07:51','2021-11-26 02:07:51',NULL),(121,7,'Área de Lazer','Gretadias-124-1.png','Hall','2021-11-26 02:08:05','2021-11-26 02:08:05',NULL),(122,8,'Banner','Serrambi-Beach-Flat-da-MaxPlural.png','banner','2021-11-26 03:59:50','2021-11-26 03:59:50',NULL),(123,8,'Fachada','MAX-PLURAL----FLAT-SERRAMBI---EXT---FACHADA---R03.png','Fachada','2021-11-26 04:00:34','2021-11-26 04:00:34',NULL),(124,8,'Área de Lazer','MAX-PLURAL----FLAT-SERRAMBI---EXT---PISCINA-MEZANINO---R03.png','Piscina','2021-11-26 04:01:01','2021-11-26 04:01:01',NULL),(125,8,'Área de Lazer','MAX-PLURAL----FLAT-SERRAMBI---EXT---PISCINA-TERREO---R03.png','Piscina','2021-11-26 04:01:20','2021-11-26 04:01:20',NULL),(126,8,'Área de Lazer','MAX-PLURAL----FLAT-SERRAMBI---EXT---ACESSO---R03.png','Deck','2021-11-26 04:01:37','2021-11-26 04:01:37',NULL),(127,8,'Área de Lazer','Varanda.png','varanda','2021-11-26 04:09:54','2021-11-26 04:09:54',NULL),(128,8,'Decorado','MAX-PLURAL----FLAT-SERRAMBI---INT---SALA-AP-03---R02.png','Apartamento','2021-11-26 04:10:50','2021-11-26 04:10:50',NULL),(129,8,'Decorado','MAX-PLURAL----FLAT-SERRAMBI---INT---SALA-AP-103---R05.png','Apartamento','2021-11-26 04:11:14','2021-11-26 04:11:14',NULL),(130,8,'Especificação','APTO-JARDIM.png','Jardim','2021-11-26 04:12:15','2021-11-26 04:12:15',NULL),(131,8,'Especificação','APTO-LOFT.png','Loft','2021-11-26 04:12:27','2021-11-26 04:12:27',NULL),(132,8,'Especificação','APTO-LOFT-MEZANINO.png','Mezanino','2021-11-26 04:12:40','2021-11-26 04:12:40',NULL),(133,8,'Especificação','APTO-LUXO.png','Apartamento','2021-11-26 04:13:08','2021-11-26 04:13:08',NULL),(134,8,'Especificação','MAXPLURAL---FLAT-SERRAMBI---HUM---LOFT-MEZANINO---R02.png','Loft Mezanino','2021-11-26 04:13:59','2021-11-26 04:13:59',NULL),(135,8,'Especificação','MAXPLURAL---FLAT-SERRAMBI---HUM---PAV-1-E-2.png','Pavimento 1 e 2','2021-11-26 04:14:16','2021-11-26 04:14:16',NULL),(136,8,'Especificação','MAXPLURAL---FLAT-SERRAMBI---HUM---PAV-3---R01.png','Pavimento 3','2021-11-26 04:14:37','2021-11-26 04:14:37',NULL),(137,8,'Especificação','MAXPLURAL---FLAT-SERRAMBI---HUM---TERREO.png','Terreo','2021-11-26 04:14:50','2021-11-26 04:14:50',NULL),(138,8,'Obra','MAXPLURAL---FLAT-SERRAMBI---INS---INSERCAO---R01.png','Vista aérea','2021-11-26 04:15:39','2021-11-26 04:15:39',NULL),(139,8,'Obra','G1495623-TRATADA.png','Vista Aérea','2021-11-26 04:16:49','2021-11-26 04:16:49',NULL),(140,8,'Obra','G1546294-TRATADA.png','Vista Aérea','2021-11-26 04:17:04','2021-11-26 04:17:04',NULL),(141,8,'Obra','G1566449-TRATADA.png','Vista Aérea','2021-11-26 04:17:12','2021-11-26 04:17:12',NULL),(142,9,'Banner','pg_img_16_final.png','Banner','2021-11-26 04:38:56','2021-11-26 04:38:56',NULL),(143,9,'Decorado','pg_img_09_2_final-5571c.png','Apartamento','2021-11-26 04:42:32','2021-11-26 04:39:50',NULL),(144,9,'Decorado','pg_img_10_2_final-e77a8.png','Apartamento','2021-11-26 04:42:21','2021-11-26 04:42:21',NULL),(145,9,'Decorado','pg_img_08_final.png','Apartamento','2021-11-26 04:42:53','2021-11-26 04:42:53',NULL),(146,9,'Decorado','pg_img_04_R00_final.png','Apartamento','2021-11-26 04:43:08','2021-11-26 04:43:08',NULL),(147,9,'Decorado','pg_img_03_R00_final.png','Apartamento','2021-11-26 04:43:18','2021-11-26 04:43:18',NULL),(148,9,'Decorado','pg_img_02_R00_final.png','Apartamento','2021-11-26 04:43:33','2021-11-26 04:43:33',NULL),(149,9,'Decorado','pg_img_01_R00_final.png','Apartamento','2021-11-26 04:43:46','2021-11-26 04:43:46',NULL),(150,9,'Decorado','pg_img_11_2_final.png','Apartamento','2021-11-26 04:44:10','2021-11-26 04:44:10',NULL),(151,9,'Decorado','pg_img_07_final.png','Apartamento','2021-11-26 04:44:27','2021-11-26 04:44:27',NULL),(152,9,'Decorado','pg_img_14_2_final.png','Apartamento','2021-11-26 04:44:57','2021-11-26 04:44:57',NULL),(153,9,'Decorado','pg_img_18.png','Apartamento','2021-11-26 04:45:04','2021-11-26 04:45:04',NULL),(154,9,'Decorado','pg_img_18-FINAL.png','Apartamento','2021-11-26 04:45:11','2021-11-26 04:45:11',NULL),(155,9,'Área de Lazer','pg_img_16_final-3e823.png','Externa','2021-11-26 04:45:27','2021-11-26 04:45:27',NULL),(156,9,'Área de Lazer','pg_img_15_final2.png','Piscina','2021-11-26 04:45:41','2021-11-26 04:45:41',NULL),(157,9,'Fachada','pg_img_15_final2-5d9d7.png','Fachada','2021-11-26 04:46:08','2021-11-26 04:46:08',NULL),(158,9,'Área de Lazer','pg_img_12_final.png','Piscina','2021-11-26 04:46:20','2021-11-26 04:46:20',NULL),(159,9,'Área de Lazer','pg_img_13_final.png','Varanda','2021-11-26 04:46:38','2021-11-26 04:46:38',NULL),(160,31,'Banner','decorado5.jpg','Max Carneiros Suites','2021-11-26 18:20:41','2021-11-26 18:20:41',NULL),(161,31,'Decorado','decorado1.jpg','Quarto 01','2021-11-26 18:21:51','2021-11-26 18:21:20',NULL),(162,31,'Decorado','decorado2.jpg','Quarto 02','2021-11-26 18:22:02','2021-11-26 18:21:39',NULL),(163,31,'Decorado','decorado3.jpg','Sala','2021-11-26 18:22:23','2021-11-26 18:22:23',NULL),(164,31,'Decorado','decorado4.jpg','Quintal','2021-11-26 18:22:43','2021-11-26 18:22:36',NULL),(165,31,'Decorado','decorado6.jpg','Quarto 03','2021-11-26 18:23:07','2021-11-26 18:23:07',NULL),(166,31,'Decorado','decorado7.jpg','Mezanino','2021-11-26 18:23:36','2021-11-26 18:23:36',NULL),(167,31,'Decorado','decorado8.jpg','Quarto 04','2021-11-26 18:23:53','2021-11-26 18:23:53',NULL),(168,31,'Especificação','plantas1.jpg','Especificação Tec.','2021-11-26 18:24:24','2021-11-26 18:24:24',NULL),(169,31,'Especificação','plantas2.jpg','Planta Completa','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(170,31,'Especificação','plantas3.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(171,31,'Especificação','plantas4.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(172,31,'Especificação','plantas5.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(173,31,'Especificação','plantas6.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(174,31,'Especificação','plantas7.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(175,31,'Especificação','plantas8.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(176,31,'Especificação','plantas9.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(177,31,'Especificação','plantas10.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(178,31,'Especificação','plantas11.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(179,31,'Especificação','plantas12.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(180,31,'Especificação','plantas13.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(181,31,'Especificação','plantas14.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(182,31,'Especificação','plantas15.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(183,31,'Especificação','plantas16.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(184,31,'Especificação','plantas17.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(185,31,'Especificação','plantas18.jpg','Planta','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(186,31,'Obra','obra19.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(187,31,'Obra','obra20.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(188,31,'Obra','obra1.jpg','Obra','2021-11-26 18:24:24','2021-11-26 18:24:24',NULL),(189,31,'Obra','obra2.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(190,31,'Obra','obra3.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(191,31,'Obra','obra4.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(192,31,'Obra','obra5.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(193,31,'Obra','obra6.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(194,31,'Obra','obra7.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(195,31,'Obra','obra8.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(196,31,'Obra','obra9.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(197,31,'Obra','obra10.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(198,31,'Obra','obra11.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(199,31,'Obra','obra12.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(200,31,'Obra','obra13.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(201,31,'Obra','obra14.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(202,31,'Obra','obra15.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(203,31,'Obra','obra16.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(204,31,'Obra','obra17.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(205,31,'Obra','obra18.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(206,31,'Obra','obra21.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(207,31,'Obra','obra22.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(208,31,'Obra','obra23.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(209,31,'Obra','obra24.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(210,31,'Obra','obra25.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(211,31,'Obra','obra26.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(212,31,'Obra','obra27.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(213,31,'Obra','obra28.jpg','Obra','2021-11-26 18:24:42','2021-11-26 18:24:42',NULL),(214,32,'Banner','banner-stark1.jpg','Visual','2021-11-26 19:24:20','2021-11-26 19:24:20',NULL),(215,32,'Fachada','fachada-stark1.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(216,32,'Área de Lazer','lazer-stark1.jpg','Lazer','2021-11-26 19:26:38','2021-11-26 19:26:38',NULL),(217,32,'Banner','banner-stark2.jpg','Visual','2021-11-26 19:24:20','2021-11-26 19:24:20',NULL),(218,32,'Banner','banner-stark3.jpg','Visual','2021-11-26 19:24:20','2021-11-26 19:24:20',NULL),(219,32,'Fachada','fachada-stark2.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(220,32,'Fachada','fachada-stark3.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(221,32,'Fachada','fachada-stark4.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(222,32,'Fachada','fachada-stark5.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(223,32,'Fachada','fachada-stark6.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(224,32,'Fachada','fachada-stark7.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(225,32,'Fachada','fachada-stark8.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(226,32,'Fachada','fachada-stark9.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(227,32,'Fachada','fachada-stark10.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(228,32,'Fachada','fachada-stark11.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(229,32,'Fachada','fachada-stark12.jpg','Fachada','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(230,32,'Área de Lazer','lazer-stark2.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(231,32,'Área de Lazer','lazer-stark3.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(232,32,'Área de Lazer','lazer-stark4.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(233,32,'Área de Lazer','lazer-stark5.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(234,32,'Área de Lazer','lazer-stark6.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(235,32,'Área de Lazer','lazer-stark7.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(236,32,'Área de Lazer','lazer-stark8.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(237,32,'Área de Lazer','lazer-stark9.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(238,32,'Área de Lazer','lazer-stark10.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(239,32,'Área de Lazer','lazer-stark11.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(240,32,'Área de Lazer','lazer-stark12.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(241,32,'Área de Lazer','lazer-stark13.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(242,32,'Área de Lazer','lazer-stark14.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(243,32,'Área de Lazer','lazer-stark15.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(244,32,'Área de Lazer','lazer-stark16.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(245,32,'Área de Lazer','lazer-stark17.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(246,32,'Área de Lazer','lazer-stark18.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(247,32,'Área de Lazer','lazer-stark19.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(248,32,'Área de Lazer','lazer-stark20.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL),(249,32,'Área de Lazer','lazer-stark21.jpg','Área de Lazer','2021-11-26 19:26:18','2021-11-26 19:26:18',NULL);
/*!40000 ALTER TABLE `empreendimento_imagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empreendimento_status`
--

DROP TABLE IF EXISTS `empreendimento_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empreendimento_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `empreendimento_id` int(10) unsigned NOT NULL,
  `terraplenagem` int(11) NOT NULL,
  `fundacao` int(11) NOT NULL,
  `revestimento` int(11) NOT NULL,
  `alvenaria` int(11) NOT NULL,
  `infraestrutura` int(11) NOT NULL,
  `acabamento` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empreendimento_status_empreendimento_id_foreign` (`empreendimento_id`),
  CONSTRAINT `empreendimento_status_empreendimento_id_foreign` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empreendimento_status`
--

LOCK TABLES `empreendimento_status` WRITE;
/*!40000 ALTER TABLE `empreendimento_status` DISABLE KEYS */;
INSERT INTO `empreendimento_status` VALUES (1,1,70,0,0,0,0,0,0,'2021-11-25 21:35:40','2021-11-17 19:52:36',NULL),(2,2,100,50,0,0,0,0,0,'2021-11-24 20:47:32','2021-11-17 19:52:37',NULL),(3,3,100,100,60,60,60,0,63,'2021-11-24 22:56:22','2021-11-17 19:52:37',NULL),(4,4,100,0,0,0,0,0,0,'2021-11-24 23:11:38','2021-11-17 19:52:37',NULL),(5,5,100,100,100,100,100,100,100,'2021-11-24 23:38:26','2021-11-17 19:52:37',NULL),(6,6,100,100,100,100,100,100,100,'2021-11-25 23:45:32','2021-11-17 19:52:37',NULL),(7,7,100,100,100,100,100,100,100,'2021-11-26 03:35:30','2021-11-17 19:52:37',NULL),(8,8,100,100,60,15,20,25,12,'2021-11-26 04:21:42','2021-11-17 19:52:37',NULL),(9,9,60,0,0,0,0,0,0,'2021-11-26 04:48:53','2021-11-17 19:52:38',NULL),(31,31,50,56,0,0,50,0,2,'2021-11-26 18:19:26','2021-11-26 18:19:26',NULL),(32,32,100,100,100,100,100,100,100,'2021-11-26 19:23:24','2021-11-26 19:23:24',NULL);
/*!40000 ALTER TABLE `empreendimento_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linha`
--

DROP TABLE IF EXISTS `linha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `linha` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imagem` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `prioridade` int(11) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  `situacao` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo` (`titulo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linha`
--

LOCK TABLES `linha` WRITE;
/*!40000 ALTER TABLE `linha` DISABLE KEYS */;
INSERT INTO `linha` VALUES (1,'MAX-beach-7394f.png','Max Beach','Empreendimentos no padrão Maxplural nas mais belas praias de Pernambuco.',1,'2021-11-26 12:23:32','2021-11-17 19:52:36',NULL,'1'),(2,'MAX-compact-796e7.png','Max Compact','Empreendimentos compactos de 1 e 2 quartos com localização | estrutura de lazer diferenciada e facilidades.',2,'2021-11-26 12:24:01','2021-11-17 19:52:36',NULL,'1'),(3,'MAX-concept-4c7e7.png','Max Concept','Empreendimentos de médio e alto padrão de 2 e 3 quartos com foco em inovação, tecnologia.',3,'2021-11-26 12:23:23','2021-11-17 19:52:36',NULL,'1'),(4,'pbqp-d51b0.png','Programa Brasileiro da Qualidade e Produtividade do Habitat','Programa Brasileiro da Qualidade e Produtividade do Habitat',4,'2021-11-26 12:29:03','2021-11-17 19:52:36',NULL,'0'),(5,'gptw.png','Great Place to Work','Great Place to Work',4,'2021-11-26 12:29:19','2021-11-17 19:52:36',NULL,'0'),(6,'LOGO_MAXBV_BRANCO.png','Max Boa Viagem','Max Boa Viagem – Parque dos Manguezais',4,'2021-11-26 12:29:30','2021-11-24 20:11:27',NULL,'0'),(7,'loft-logo-branca.svg','Loft','Loft Home Design',4,'2021-11-26 12:28:49','2021-11-24 22:14:15',NULL,'0'),(9,'LOGO_MAXDRB_WHITE.png','MAX DRB','MAX DERBY BOULEVARD',4,'2021-11-26 12:28:43','2021-11-25 18:00:38',NULL,'0'),(10,'sem-linha-94c4d.png','Sem Linha','',110,'2021-11-26 12:22:18','2021-11-25 23:38:23',NULL,'0'),(11,'deco-logo-1-d9ffb.png','DECO','DECO Design Concept',110,'2021-11-26 12:28:56','2021-11-26 02:02:48',NULL,'0'),(12,'LOGO-BRANCA-Serrambi.png','Serrambi','Beach Serrambi Flats',6,'2021-11-26 12:30:13','2021-11-26 03:36:46',NULL,'0'),(13,'logo-CUPE_SUITES_PH_NEGATIVO.png','Cupe','Cupe Suites',7,'2021-11-26 12:30:27','2021-11-26 04:38:36',NULL,'0'),(14,'logo_maX_carneiros-BRANCA.png','MAX Carneiros','MAX Carneiros Suites',8,'2021-11-26 17:50:48','2021-11-26 17:50:48',NULL,'0'),(15,'Stark_Logo-branca.png','Stark','Stark Home Design',9,'2021-11-26 17:51:13','2021-11-26 17:51:13',NULL,'0');
/*!40000 ALTER TABLE `linha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2021-11-10-120000','App\\Database\\Migrations\\CreateMpSessionsTable','default','App',1637189535,1),(2,'2021-11-10-133023','App\\Database\\Migrations\\CreateAdminTable','default','App',1637189535,1),(3,'2021-11-10-133023','App\\Database\\Migrations\\CreatePaginaTable','default','App',1637189536,1),(4,'2021-11-11-133023','App\\Database\\Migrations\\CreateLinhaTable','default','App',1637189536,1),(5,'2021-11-13-133023','App\\Database\\Migrations\\CreateConfiguracaoTable','default','App',1637189536,1),(6,'2021-11-13-143023','App\\Database\\Migrations\\CreateEmpreendimentoTable','default','App',1637189536,1),(7,'2021-11-13-143024','App\\Database\\Migrations\\CreateCaracteristicaTable','default','App',1637189536,1),(8,'2021-11-13-143024','App\\Database\\Migrations\\CreateEmpreendimentoArquivoTable','default','App',1637189536,1),(9,'2021-11-13-143024','App\\Database\\Migrations\\CreateEmpreendimentoCaracteristicaTable','default','App',1637189536,1),(10,'2021-11-13-143024','App\\Database\\Migrations\\CreateEmpreendimentoImagemTable','default','App',1637189536,1),(11,'2021-11-13-143024','App\\Database\\Migrations\\CreateEmpreendimentoStatusTable','default','App',1637189536,1),(12,'2021-11-15-093023','App\\Database\\Migrations\\CreateContatoTable','default','App',1637189536,1),(13,'2021-11-15-143024','App\\Database\\Migrations\\CreateBannerImagemTable','default','App',1637189536,1),(14,'2021-11-18-103023','App\\Database\\Migrations\\CreateNoticiaTable','default','App',1637788524,2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mp_sessions`
--

DROP TABLE IF EXISTS `mp_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mp_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mp_sessions`
--

LOCK TABLES `mp_sessions` WRITE;
/*!40000 ALTER TABLE `mp_sessions` DISABLE KEYS */;
INSERT INTO `mp_sessions` VALUES ('0h3djqu015k70b59gkqk4km8jftdab1e','::1','2021-11-26 22:16:41','__ci_last_regenerate|i:1637965001;_ci_previous_url|s:43:\"http://localhost:8080/admin/empreendimentos\";admin|O:8:\"stdClass\":10:{s:2:\"id\";s:1:\"1\";s:6:\"avatar\";N;s:4:\"nome\";s:15:\"Gihovani Filipp\";s:5:\"email\";s:19:\"gihovani@mt2015.com\";s:5:\"login\";s:8:\"gihovani\";s:5:\"senha\";s:5:\"senha\";s:8:\"situacao\";s:1:\"1\";s:10:\"updated_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"created_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"deleted_at\";N;}'),('0poai2vs7hagcuoiio4tbmf7hh569f19','::1','2021-11-26 19:23:12','__ci_last_regenerate|i:1637954464;_ci_previous_url|s:35:\"http://localhost:8080/admin/banners\";admin|O:8:\"stdClass\":10:{s:2:\"id\";s:1:\"1\";s:6:\"avatar\";N;s:4:\"nome\";s:15:\"Gihovani Filipp\";s:5:\"email\";s:19:\"gihovani@mt2015.com\";s:5:\"login\";s:8:\"gihovani\";s:5:\"senha\";s:5:\"senha\";s:8:\"situacao\";s:1:\"1\";s:10:\"updated_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"created_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"deleted_at\";N;}'),('1r39ubj4j3ijsocf7tda4h5l63le7rc4','::1','2021-11-26 14:28:31','__ci_last_regenerate|i:1637936911;_ci_previous_url|s:50:\"http://localhost:8080/admin/empreendimentoImagens/\";admin|O:8:\"stdClass\":10:{s:2:\"id\";s:1:\"1\";s:6:\"avatar\";N;s:4:\"nome\";s:15:\"Gihovani Filipp\";s:5:\"email\";s:19:\"gihovani@mt2015.com\";s:5:\"login\";s:8:\"gihovani\";s:5:\"senha\";s:5:\"senha\";s:8:\"situacao\";s:1:\"1\";s:10:\"updated_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"created_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"deleted_at\";N;}'),('6dt6f4s2ouuc02g7vovcg5nqukdkp0r8','::1','2021-11-26 21:02:10','__ci_last_regenerate|i:1637960530;_ci_previous_url|s:43:\"http://localhost:8080/admin/empreendimentos\";admin|O:8:\"stdClass\":10:{s:2:\"id\";s:1:\"1\";s:6:\"avatar\";N;s:4:\"nome\";s:15:\"Gihovani Filipp\";s:5:\"email\";s:19:\"gihovani@mt2015.com\";s:5:\"login\";s:8:\"gihovani\";s:5:\"senha\";s:5:\"senha\";s:8:\"situacao\";s:1:\"1\";s:10:\"updated_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"created_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"deleted_at\";N;}'),('7p4rp57r4tbk8pe1bb1858f62g3kdnm6','::1','2021-11-26 21:15:28','__ci_last_regenerate|i:1637960530;_ci_previous_url|s:43:\"http://localhost:8080/admin/empreendimentos\";admin|O:8:\"stdClass\":10:{s:2:\"id\";s:1:\"1\";s:6:\"avatar\";N;s:4:\"nome\";s:15:\"Gihovani Filipp\";s:5:\"email\";s:19:\"gihovani@mt2015.com\";s:5:\"login\";s:8:\"gihovani\";s:5:\"senha\";s:5:\"senha\";s:8:\"situacao\";s:1:\"1\";s:10:\"updated_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"created_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"deleted_at\";N;}'),('8eqob17082oun5otcpqmrf2dhf2lcarh','::1','2021-11-26 19:21:04','__ci_last_regenerate|i:1637954464;_ci_previous_url|s:36:\"http://localhost:8080/admin/contatos\";admin|O:8:\"stdClass\":10:{s:2:\"id\";s:1:\"1\";s:6:\"avatar\";N;s:4:\"nome\";s:15:\"Gihovani Filipp\";s:5:\"email\";s:19:\"gihovani@mt2015.com\";s:5:\"login\";s:8:\"gihovani\";s:5:\"senha\";s:5:\"senha\";s:8:\"situacao\";s:1:\"1\";s:10:\"updated_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"created_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"deleted_at\";N;}'),('ah72u5bnrvpnmutkctlg3aqejgf1a2tp','::1','2021-11-26 15:21:25','__ci_last_regenerate|i:1637940085;_ci_previous_url|s:34:\"http://localhost:8080/admin/linhas\";admin|O:8:\"stdClass\":10:{s:2:\"id\";s:1:\"1\";s:6:\"avatar\";N;s:4:\"nome\";s:15:\"Gihovani Filipp\";s:5:\"email\";s:19:\"gihovani@mt2015.com\";s:5:\"login\";s:8:\"gihovani\";s:5:\"senha\";s:5:\"senha\";s:8:\"situacao\";s:1:\"1\";s:10:\"updated_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"created_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"deleted_at\";N;}'),('cl17p2bpva5459e61hlbnq5q7tg9qdf5','::1','2021-11-26 15:41:46','__ci_last_regenerate|i:1637941306;_ci_previous_url|s:43:\"http://localhost:8080/admin/empreendimentos\";admin|O:8:\"stdClass\":10:{s:2:\"id\";s:1:\"1\";s:6:\"avatar\";N;s:4:\"nome\";s:15:\"Gihovani Filipp\";s:5:\"email\";s:19:\"gihovani@mt2015.com\";s:5:\"login\";s:8:\"gihovani\";s:5:\"senha\";s:5:\"senha\";s:8:\"situacao\";s:1:\"1\";s:10:\"updated_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"created_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"deleted_at\";N;}'),('eo1n18lb3j3qvmr0rm50sdpo65fnerq3','::1','2021-11-26 21:36:33','__ci_last_regenerate|i:1637962593;_ci_previous_url|s:58:\"http://localhost:8080/admin/empreendimentoImagens/index/31\";admin|O:8:\"stdClass\":10:{s:2:\"id\";s:1:\"1\";s:6:\"avatar\";N;s:4:\"nome\";s:15:\"Gihovani Filipp\";s:5:\"email\";s:19:\"gihovani@mt2015.com\";s:5:\"login\";s:8:\"gihovani\";s:5:\"senha\";s:5:\"senha\";s:8:\"situacao\";s:1:\"1\";s:10:\"updated_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"created_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"deleted_at\";N;}'),('ju0cjjgbnkm3m3hgtncaarbogkv8jks6','::1','2021-11-26 14:50:27','__ci_last_regenerate|i:1637938227;_ci_previous_url|s:35:\"http://localhost:8080/admin/paginas\";admin|O:8:\"stdClass\":10:{s:2:\"id\";s:1:\"1\";s:6:\"avatar\";N;s:4:\"nome\";s:15:\"Gihovani Filipp\";s:5:\"email\";s:19:\"gihovani@mt2015.com\";s:5:\"login\";s:8:\"gihovani\";s:5:\"senha\";s:5:\"senha\";s:8:\"situacao\";s:1:\"1\";s:10:\"updated_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"created_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"deleted_at\";N;}'),('rjohjnl206dn8s5rumton7lkb4ev8l76','::1','2021-11-26 22:33:33','__ci_last_regenerate|i:1637965001;_ci_previous_url|s:43:\"http://localhost:8080/admin/empreendimentos\";admin|O:8:\"stdClass\":10:{s:2:\"id\";s:1:\"1\";s:6:\"avatar\";N;s:4:\"nome\";s:15:\"Gihovani Filipp\";s:5:\"email\";s:19:\"gihovani@mt2015.com\";s:5:\"login\";s:8:\"gihovani\";s:5:\"senha\";s:5:\"senha\";s:8:\"situacao\";s:1:\"1\";s:10:\"updated_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"created_at\";s:19:\"2021-11-17 19:52:36\";s:10:\"deleted_at\";N;}');
/*!40000 ALTER TABLE `mp_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticia`
--

DROP TABLE IF EXISTS `noticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` enum('Empreendimentos','Eventos') NOT NULL DEFAULT 'Empreendimentos',
  `imagem` varchar(100) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `palavras_chave` varchar(100) DEFAULT NULL,
  `descricao` varchar(200) NOT NULL,
  `conteudo` longtext NOT NULL,
  `style` text DEFAULT NULL,
  `javascript` text DEFAULT NULL,
  `situacao` enum('1','0') NOT NULL DEFAULT '1',
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticia`
--

LOCK TABLES `noticia` WRITE;
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagina`
--

DROP TABLE IF EXISTS `pagina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagina` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` enum('Página','Notícias') NOT NULL DEFAULT 'Página',
  `imagem` varchar(100) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `palavras_chave` varchar(100) DEFAULT NULL,
  `descricao` varchar(200) NOT NULL,
  `conteudo` longtext NOT NULL,
  `style` text DEFAULT NULL,
  `javascript` text DEFAULT NULL,
  `situacao` enum('1','0') NOT NULL DEFAULT '1',
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagina`
--

LOCK TABLES `pagina` WRITE;
/*!40000 ALTER TABLE `pagina` DISABLE KEYS */;
INSERT INTO `pagina` VALUES (1,'Página',NULL,'linhas','TÍTULO SOBRE NOSSAS LINHAS',NULL,'Desde 2005 temos feito a diferença no mercado imobiliário de Pernambuco. Unimos incorporação, engenharia e design para criar experiências. ','<h2>Nossas Linhas</h2>\r\n\r\n<p>Desde 2005 temos feito a diferen&ccedil;a no mercado imobili&aacute;rio de Pernambuco. Unimos incorpora&ccedil;&atilde;o, engenharia e design para criar experi&ecirc;ncias. Com a busca incessante pelo melhor, investimos na qualidade e inova&ccedil;&atilde;o sem deixar de atender as necessidades essenciais de cada morador. Com empreendimentos em localiza&ccedil;&otilde;es nobres como Boa Viagem, Piedade, Porto de Galinhas, Serrambi, entre outros, buscamos oferecer em cada produto um morar diferenciado, unindo design e funcionalidade.</p>\r\n','section #title-page{background-image:url(./assets/imgs/linhas/bg-title-nossas-linhas.png)}section #title-page h1{font-size:2.5rem;font-weight:600;margin:10rem 0}#content.linhas{background:#fff}#content.linhas *{color:var(--main-bg-color)}#content.linhas-cards .linhas-cards__card{background-color:#f5f5f5;border-radius:80px;width:27%;margin:1.5%;transition:all .3s}#content.linhas-cards .linhas-cards__card:hover{box-shadow:0 20px 40px #00000044}#content.linhas-cards .linhas-cards__card>div{padding:40px 30px 20px;min-height:270px}#content.linhas-cards .linhas-cards__card>div img{max-width:235px}@media screen and (max-width:1200px){#content.linhas .linhas-cards__card:nth-child(-n+3)>div img{max-height:55px}}@media screen and (max-width:769px){#content.linhas .linhas-cards__card{width:47%}#content.linhas .linhas-cards__card>div{min-height:225px}}@media screen and (max-width:420px){#content.linhas .linhas-cards__card{width:97%}#content.linhas .linhas-cards__card>div{min-height:180px}}',NULL,'1','2021-11-26 11:51:29','2021-11-17 19:52:41',NULL),(2,'Página',NULL,'sobre','A MAXPLURAL',NULL,'Ser uma empresa diligente, com cultura organizacional bem definida, entregando produtos de alto valor agregado, que supre as expectativas dos clientes e acionistas. ','<h2>Miss&atilde;o:</h2>\r\n\r\n<p>Ser uma empresa diligente, com cultura organizacional bem definida, entregando produtos de alto valor agregado, que supre as expectativas dos clientes e acionistas.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Vis&atilde;o:&nbsp;</h2>\r\n\r\n<p>Estar nos pr&oacute;ximos 5 anos em Recife:</p>\r\n\r\n<p>- Entre as 10 construtoras com melhor EBITDA;</p>\r\n\r\n<p>- Entre as 5 com melhor recall de marca no segmento residencial;</p>\r\n\r\n<p>- Entre as 3 com melhor qualidade de obra&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Valores:&nbsp;</h2>\r\n\r\n<p>- Cliente em primeiro lugar;</p>\r\n\r\n<p>- Qualidade;</p>\r\n\r\n<p>- &Eacute;tica;</p>\r\n\r\n<p>- Gest&atilde;o eficaz de recursos;</p>\r\n\r\n<p>- Vanguarda no conhecimento,</p>\r\n\r\n<p>- Dilig&ecirc;ncia.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Po&iacute;tica de qualidade:</h2>\r\n\r\n<p>A MaxPlural no desenvolvimento de solu&ccedil;&otilde;es imobili&aacute;rias, tem por compromisso ser uma empresa diligente, com cultura organizacional bem definida, entregando produtos de alto valor agregado, a partir de solu&ccedil;&otilde;es flex&iacute;veis com tecnologia, sustentabilidade nos canteiros de obras, colaboradores comprometidos em aprimorar os processos do sistema de qualidade, atendendo aos requisitos legais, garantindo a satisfa&ccedil;&atilde;o dos nossos clientes e acionistas.&nbsp;</p>\r\n','#content{background-color:#fff}#content.historia{background-image:url(./assets/imgs/sobre/bg-tabs.png);background-size:cover;background-position:center}#content.historia *{color:var(--main-bg-color)}#content .logos div:not(:last-child){width:15%;padding:40px 20px}#content .logos div:not(:last-child) img{filter:brightness(.5);width:100%}@media screen and (max-width:768px){#content .logos div:not(:last-child){width:25%}}@media screen and (max-width:520px){#content .logos div:not(:last-child){width:41%;padding:20px}}',NULL,'1','2021-11-26 11:50:27','2021-11-17 19:52:41',NULL),(3,'Página',NULL,'privacidade','Política de Privacidade',NULL,'Página com a nossa Política de Privacidade','<h2>Pol&iacute;tica de Privacidade</h2>\r\n\r\n<h3>1. Disposi&ccedil;&otilde;es Gerais:</h3>\r\n\r\n<p>1.1. Este documento, denominado &ldquo;Pol&iacute;tica de Privacidade&rdquo;, importa-se a fornecer informa&ccedil;&otilde;es sobre coleta, uso, armazenamento, tratamento e prote&ccedil;&atilde;o dos dados pessoais dos usu&aacute;rios e visitantes do site, no intento de apresentar plena e total transpar&ecirc;ncia, bem como, demonstrar aos interessados, acerca dos tipos de dados que s&atilde;o coletados, as raz&otilde;es para esta coleta e a maneira como os usu&aacute;rios podem administrar ou excluir suas informa&ccedil;&otilde;es pessoais.</p>\r\n\r\n<p>1.2. Esta Pol&iacute;tica de Privacidade se aplica a todos os usu&aacute;rios e visitantes do site, integrando os Termos e Condi&ccedil;&otilde;es Gerais de Uso do site.</p>\r\n\r\n<p>1.3. O presente documento foi elaborado em conformidade com a Lei Geral de Prote&ccedil;&atilde;o de Dados Pessoais (Lei 13.709/18), o Marco Civil da Internet (Lei 12.965/14) (e o Regulamento da UE n. 2016/6790). Ainda, o documento poder&aacute; ser modificado em decorr&ecirc;ncia de eventual atualiza&ccedil;&atilde;o normativa, raz&atilde;o pela qual se convida o usu&aacute;rio a consultar periodicamente este instrumento.</p>\r\n\r\n<h3>2. Dos dados pessoais:</h3>\r\n\r\n<p>2.1. Poder&atilde;o ser coletadas as informa&ccedil;&otilde;es fornecidas pelo usu&aacute;rio, no momento do contato ou do cadastro, mediante preenchimento de formul&aacute;rio, bem como as informa&ccedil;&otilde;es coletadas automaticamente na utiliza&ccedil;&atilde;o dos servi&ccedil;os.</p>\r\n\r\n<p>2.2. As informa&ccedil;&otilde;es coletadas poder&atilde;o ser utilizadas em servi&ccedil;os prestados pela MAXPLURAL, respeitando e considerando as finalidades descritas e o consentimento previamente concedido.</p>\r\n\r\n<p>2.3. Caso necess&aacute;rio, os dados pessoais poder&atilde;o ser utilizados para o cumprimento de obriga&ccedil;&atilde;o legal ou exerc&iacute;cio regular de direitos em processo judicial, administrativo ou arbitral.</p>\r\n\r\n<p>2.4. Poder&atilde;o ainda, as informa&ccedil;&otilde;es coletadas, atrav&eacute;s de pr&eacute;via autoriza&ccedil;&atilde;o, serem utilizadas para fins publicit&aacute;rios, como por exemplo, para o envio de e-mail marketing aos usu&aacute;rios, mensagens de texto, carta, mensagens em aplicativos de mensagens como WhatsApp, Telegram e demais da mesma natureza, bem como para contatos telef&ocirc;nicos.</p>\r\n\r\n<p>2.5. Em caso de o usu&aacute;rio n&atilde;o mais desejar receber informativos publicit&aacute;rios, poder&aacute;, a qualquer momento, se descadastrar, mediante manifesta&ccedil;&atilde;o de oposi&ccedil;&atilde;o por meio da aba de &ldquo;Contato&rdquo; do site.</p>\r\n\r\n<p>2.5.1. Neste mesmo espa&ccedil;o, o usu&aacute;rio poder&aacute;, mediante requisi&ccedil;&atilde;o expressa, apresentar solicita&ccedil;&otilde;es de tratamento dos seus dados pessoais, como confirma&ccedil;&atilde;o da exist&ecirc;ncia de tratamento, acesso aos dados pessoais, corre&ccedil;&atilde;o de dados, incompletos, inexatos ou desatualizados, anonimiza&ccedil;&atilde;o , bloqueio ou elimina&ccedil;&atilde;o de dados desnecess&aacute;rios, excessivos ou tratados em desconformidade com a lei, portabilidade dos dados a outro fornecedor de servi&ccedil;o ou produto, elimina&ccedil;&atilde;o dos dados tratados com consentimento do Usu&aacute;rio, obten&ccedil;&atilde;o de informa&ccedil;&otilde;es sobre as entidades com as quais compartilhou os seus dados, informa&ccedil;&atilde;o sobre a possibilidade do Usu&aacute;rio n&atilde;o fornecer o consentimento, bem como de ser informado sobre as consequ&ecirc;ncias em caso de negativa, e, revoga&ccedil;&atilde;o do consentimento.</p>\r\n\r\n<p>2.5.2. Fica ciente o usu&aacute;rio que eventual solicita&ccedil;&atilde;o de exclus&atilde;o de informa&ccedil;&otilde;es essenciais para a gest&atilde;o de seu cadastro junto &agrave; MAXPLURAL implicar&aacute; no t&eacute;rmino de sua rela&ccedil;&atilde;o contratual, com o consequente cancelamento dos servi&ccedil;os ent&atilde;o prestados.</p>\r\n\r\n<p>2.5.3. Fica ciente o usu&aacute;rio que sua requisi&ccedil;&atilde;o poder&aacute; ser legalmente rejeitada, seja por motivos formais ou legais, sendo certo que, na hip&oacute;tese de impossibilidade de atendimento destas requisi&ccedil;&otilde;es, a MAXPLURAL apresentar&aacute; as justificativas razo&aacute;veis.</p>\r\n\r\n<h3>3. Do tempo de armazenamento:</h3>\r\n\r\n<p>3.1. Os dados pessoais do usu&aacute;rio e visitante s&atilde;o armazenados pela plataforma durante o per&iacute;odo necess&aacute;rio para a presta&ccedil;&atilde;o do servi&ccedil;o ou o cumprimento das finalidades previstas no presente documento, conforme o disposto no inciso I do artigo 15 da Lei 13.709/18.</p>\r\n\r\n<p>3.2. Os dados podem ser removidos ou anonimizados a pedido do usu&aacute;rio, exceto nos casos em que a lei oferecer outro tratamento.</p>\r\n\r\n<p>3.3. Poder&atilde;o os dados pessoais dos usu&aacute;rios ser conservados ap&oacute;s o t&eacute;rmino de seu tratamento apenas nas hip&oacute;teses previstas no artigo 16 da Lei 13.709/18.</p>\r\n\r\n<p>&ldquo;I - cumprimento de obriga&ccedil;&atilde;o legal ou regulat&oacute;ria pelo controlador;</p>\r\n\r\n<p>II - estudo por &oacute;rg&atilde;o de pesquisa, garantida, sempre que poss&iacute;vel, a anonimiza&ccedil;&atilde;o dos dados pessoais;</p>\r\n\r\n<p>III - transfer&ecirc;ncia a terceiro, desde que respeitados os requisitos de tratamento de dados dispostos nesta Lei; ou</p>\r\n\r\n<p>IV - uso exclusivo do controlador, vedado seu acesso por terceiro, e desde que anonimizados os dados.&rdquo;</p>\r\n\r\n<h3>4. Da seguran&ccedil;a:</h3>\r\n\r\n<p>4.1. A plataforma se compromete a tomar medidas de seguran&ccedil;a adequadas contra acesso, altera&ccedil;&atilde;o, divulga&ccedil;&atilde;o ou destrui&ccedil;&atilde;o n&atilde;o autorizada de dados.</p>\r\n\r\n<p>4.2. Os dados pessoais armazenados s&atilde;o tratados com confidencialidade, dentro dos limites legais. No entanto, as informa&ccedil;&otilde;es pessoais poder&atilde;o ser divulgadas no caso de a plataforma ser obrigada por lei a faz&ecirc;-lo ou em caso de o usu&aacute;rio violar os Termos de Servi&ccedil;o.</p>\r\n\r\n<p>4.3. A plataforma adota os melhores esfor&ccedil;os para preservar a privacidade e proteger os dados pessoais do usu&aacute;rio. Contudo, na remota hip&oacute;tese de incid&ecirc;ncia de vazamento de informa&ccedil;&otilde;es em raz&atilde;o de ataque de hackers ou crackers, ou culpa exclusiva do usu&aacute;rio, como no caso em que ele mesmo transfere seus dados a terceiros, o site se compromete a comunicar o usu&aacute;rio em caso de alguma viola&ccedil;&atilde;o de seguran&ccedil;a dos seus dados pessoais, bem como garante o pleno esfor&ccedil;o para remediar as consequ&ecirc;ncias do evento.</p>\r\n\r\n<h3>5. Dos cookies:</h3>\r\n\r\n<p>5.1. Os cookies referem-se a arquivos de texto enviados pela plataforma ao computador do usu&aacute;rio e visitante e que nele ficam armazenados, com informa&ccedil;&otilde;es relacionadas &agrave; navega&ccedil;&atilde;o no site. Tais informa&ccedil;&otilde;es s&atilde;o relacionadas aos dados de acesso como local e hor&aacute;rio de acesso e s&atilde;o armazenadas pelo navegador do usu&aacute;rio e visitante para que o servidor da plataforma possa l&ecirc;-las posteriormente a fim de personalizar os servi&ccedil;os da plataforma.</p>\r\n\r\n<p>5.2. O usu&aacute;rio e o visitante da plataforma manifesta conhecer e aceitar que pode ser utilizado um sistema de coleta de dados de navega&ccedil;&atilde;o mediante &agrave; utiliza&ccedil;&atilde;o de cookies.</p>\r\n\r\n<p>5.3. O cookie persistente permanece no disco r&iacute;gido do usu&aacute;rio e visitante depois que o navegador &eacute; fechado e ser&aacute; usado pelo navegador em visitas subsequentes ao site. Os cookies persistentes podem ser removidos seguindo as instru&ccedil;&otilde;es do seu navegador. J&aacute; o cookie de sess&atilde;o &eacute; tempor&aacute;rio e desaparece depois que o navegador &eacute; fechado. &Eacute; poss&iacute;vel redefinir seu navegador da web para recusar todos os cookies, por&eacute;m alguns recursos da plataforma podem n&atilde;o funcionar corretamente se a capacidade de aceitar cookies estiver desabilitada.</p>\r\n\r\n<h3>6. Do consentimento:</h3>\r\n\r\n<p>6.1. Ao utilizar os servi&ccedil;os e fornecer as informa&ccedil;&otilde;es pessoais na plataforma, o usu&aacute;rio est&aacute; consentindo com a presente Pol&iacute;tica de Privacidade.</p>\r\n\r\n<p>6.2. O usu&aacute;rio, ao cadastrar-se, manifesta conhecer e pode exercitar seus direitos de cancelar seu cadastro, acessar e atualizar seus dados pessoais e garante a veracidade das informa&ccedil;&otilde;es por ele disponibilizadas.</p>\r\n\r\n<p>6.3. O usu&aacute;rio tem direito de retirar o seu consentimento a qualquer tempo, nos termos do item 2.5., 2.5.1., 2.5.2. e 2.5.3. do presente instrumento.</p>\r\n','#content{background-color:#fff}#content.privacidade *{color:var(--main-bg-color)}',NULL,'1','2021-11-26 11:47:40','2021-11-17 19:52:41',NULL),(4,'Página',NULL,'newsletter','Newsletter',NULL,'Seu cadastro para receber artigos e dicas foi realizado com sucesso!','<h2>Inscri&ccedil;&atilde;o em nossa Newsletter</h2>\r\n\r\n<p>Obrigado por se cadastrar na newsletter da Max Plural!<br />\r\nSeu cadastro para receber artigos e dicas foi realizado com sucesso!</p>\r\n','#content{background-color:#fff}#content.newsletter *{color:var(--main-bg-color)}',NULL,'1','2021-11-26 11:45:25','2021-11-17 19:52:41',NULL),(5,'Página',NULL,'offline','Você não está conectado à Internet',NULL,'Você está offline.','<p>Parece que voc&ecirc; perdeu sua conex&atilde;o com a Internet.<br />\r\nPode ser necess&aacute;rio reconectar ao Wi-Fi.</p>\r\n',NULL,NULL,'1','2021-11-26 11:42:41','2021-11-25 20:52:26',NULL);
/*!40000 ALTER TABLE `pagina` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-26 19:42:43
