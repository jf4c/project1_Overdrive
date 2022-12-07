CREATE DATABASE  IF NOT EXISTS `dados` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `dados`;
-- MariaDB dump 10.19  Distrib 10.4.25-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: dados
-- ------------------------------------------------------
-- Server version	10.4.25-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `companyId` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `fantasyName` varchar(255) DEFAULT NULL,
  `CNPJ` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `CEP` varchar(10) DEFAULT NULL,
  `rua` varchar(20) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `UF` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'Garagem das pipas','Garagem das pipas','45.339.363/0001-95','35855594','13668048','luiz terrasi','500','Aguas Claras','Porto Ferreira','SP'),(11,'Garagem das pipas','Garagem das pipas','55.139.163/0001-95','35855594','13668-048','Rua Luis Terassi','500','Jardim Águas Claras','Porto Ferreira','SP'),(12,'Camila e Débora Joalheria ME','Joia','16.338.649/0001-57','35855594','69900-502','Rua Alan Kardec','156','Bosque','Rio Branco','AC'),(13,'Hadassa e Manuela Esportes ME','Garagem das pipas','40.880.262/0001-02','35855594','65049-233','Rua Três','564','Conjunto Cial','São Luís','MA'),(14,'Yuri Comercio','Bebidas Ltda','54.557.914/0001-87','35855594','13616-103','Rua Antonio Di Fusco','678','Residencial Rocco Lenci','Leme','SP'),(15,'Pizzaria ME','Pizzaria ME','08.000.857/0001-13','35855594','66840-225','Rua do Futuro II','650','São João do Outeiro (Outeiro)','Belém','PA'),(16,'Telecomunicações ME','Comunique-se','39.892.050/0001-66','35855594','78118-353','Rua Costa Rica','667','Cristo Rei','Várzea Grande','MT'),(17,'Fotografias Ltda','Fotografias Ltdas','70.894.324/0001-04','35855594','72236-209','QNP 32 Conjunto I','156','Ceilândia Sul (Ceilândia)','Brasília','DF'),(18,'Padaria Ltda','Padaria Ltda','86.855.371/0001-70','35855594','41310-350','Travessa Frank Nalva','632','Águas Claras','Salvador','BA'),(19,'Lucas e Sônia Docinhos','Docinhos','35.776.212/0001-40','35855594','45012-484','Rua K','1568','Primavera','Vitória da Conquista','BA'),(20,'Adega Ltda','A Adega','44.298.921/0001-58','35855594','71015-082','QI 16 Bloco H','432','Guará I','Brasília','DF'),(21,'OVERDRIVE','...','33.143.114/0001-40','(19)9192-1394','13604-049','Viela João Rocha de ','211','Jardim São João','Araras','SP');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userId` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `CPF` varchar(20) DEFAULT NULL,
  `CNH` varchar(20) DEFAULT NULL,
  `carro` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `CEP` varchar(10) DEFAULT NULL,
  `rua` varchar(20) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `UF` varchar(5) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT 0,
  `company_Id` mediumint(8) unsigned DEFAULT NULL,
  PRIMARY KEY (`userId`),
  KEY `company_Id` (`company_Id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`company_Id`) REFERENCES `company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (81,'Vanessa','a_vanessinha_1990@hotmail.com','a9bc2b43a7adb97c888e9f3f2b3f85af','299.827.458-75','25436567872','Car02','(11)16509-5315','14801-744','Rua Oswaldo Souza Li','889','Jardim Universal','Araraquara','SP',0,NULL),(82,'Chama','Chama@hotmail.com','6b6c03084dc3d866d47a4157d27160ef','435.188.670-67','47237104727','Car03','(11) 16509-5315','02924-601','Avenida General Edga','543','Vila Palmeiras','São Paulo','SP',0,NULL),(83,'XLR8','XLR8@hotmail.com','a9bc2b43a7adb97c888e9f3f2b3f85af','142.467.640-19','25436567872','Car04','(63) 14748-7846','14406-700','Rua Prata','762','Parque Continental','Franca','SP',0,NULL),(84,'Glutao','glutao1@hotmail.com','6b6c03084dc3d866d47a4157d27160ef','591.217.970-21','47237104727','Car05','(63) 78219-3559','12922-424','Rua Expedicionário L','342','Jardim Vista Alegre','Bragança Paulista','SP',0,NULL),(85,'giga','Gigante@hotmail.com','a9bc2b43a7adb97c888e9f3f2b3f85af','562.364.960-21','25436567872','Car06','(84) 37872-1944','13668048','Luis Terassi','234','Jardim Águas Claras','Porto Ferreira','SP',0,NULL),(86,'Caue','Caue@hotmail.com','6b6c03084dc3d866d47a4157d27160ef','955.441.520-63','47237104727','Car07','(21) 42756-2760','13276-350','Rua Caieiras','1234','Jardim Paulista','Valinhos','SP',0,NULL),(87,'Caze','caze_1990@hotmail.com','a9bc2b43a7adb97c888e9f3f2b3f85af','258.898.190-97','25436567872','Car08','(21) 33131-7609','09272-413','Rua Camaratuba','567','Tamanduateí 8','Santo André','SP',0,NULL),(88,'cromatico','cromatico@hotmail.com','6b6c03084dc3d866d47a4157d27160ef','957.368.300-86','','','(48) 49144-1426','13053-304','Rua Francisco Antôni','349','Jardim São Domingos','Campinas','SP',0,NULL),(89,'enzo','enzo@hotmail.com','a9bc2b43a7adb97c888e9f3f2b3f85af','600.693.750-62','25436567872','Car010','(11) 64706-8395','23515-310','Rua de Vila','932','Santa Cruz','Rio de Janeiro','RJ',0,NULL),(90,'neymar','neymar@hotmail.com','6b6c03084dc3d866d47a4157d27160ef','539.193.840-67','47237104727','Car011','(11) 69854-8815','22230-061','Rua Marquês de Abran','1731','Flamengo','Rio de Janeiro','RJ',0,NULL),(91,'Denis','dnis@gmail.com','a9bc2b43a7adb97c888e9f3f2b3f85af','539.193.840-67','25436567872','Car012','(11) 27405-6207','27262-600','Rua Dolores Duran','452','São Lucas','Volta Redonda','RJ',0,NULL),(92,'gustavo','gustavo@hotmail.com','6b6c03084dc3d866d47a4157d27160ef','858.861.110-42','47237104727','Car013','(11) 82858-4851','23826-620','Rua João Alves da Cr','1223','Ilha da Madeira','Itaguaí','RJ',0,NULL),(93,'Julia','julia@hotmail.com','a9bc2b43a7adb97c888e9f3f2b3f85af','650.799.360-37','25436567872','Car014','(11) 30963-5235','25976-580','Estrada do Castello','1256','Albuquerque','Teresópolis','RJ',0,NULL),(94,'Carol','richarlison1@hotmail.com','6b6c03084dc3d866d47a4157d27160ef','650.157.320-31','47237104727','Car015','(11) 60498-3198','24346-099','Alameda A','1257','Itaipu','Niterói','RJ',0,NULL),(95,'Elena','a_vanessinha_1990@hotmail.com','a9bc2b43a7adb97c888e9f3f2b3f85af','694.485.590-97','25436567872','Car016','(11) 89000-1068','26255-620','Rua Felipe Camarão','1213','da Luz','Nova Iguaçu','RJ',0,NULL),(96,'Anika','aaanika2@hotmail.com','c2ebe4b69a6b3e508e58d13b9977cd96','694.485.590-97','54126054060','Car017','(11) 19665-0870','27265-540','Rua General Sílvio R','778','Ponte Alta','Volta Redonda','RJ',0,NULL),(97,'Júlio Costa','juliofac2001@hotmail.com','70873e8580c9900986939611618d7b1e','440.911.048-94','','','(11)20235-1899','13668-048','Luis Terassi',NULL,'Jardim Águas Claras','Porto Ferreira','SP',1,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-07 14:16:03
