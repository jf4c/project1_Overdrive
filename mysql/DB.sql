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
   `company_Id` mediumint(8) DEFAULT NULL,
   PRIMARY KEY (`userId`)
 ) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

desc users;


insert into users
(name,                 Email,                     CPF,         CEP,          rua,              bairro,              cidade,       uf,             pass,       admin)     values
("Júlio Costa","juliofac2001@hotmail.com", "440.911.048.94", "13668048", "Luis Terassi", "Jardim Águas Claras", "Porto Ferreira", "SP",  md5(md5('jfac1923')), true); 


SHOW CREATE TABLE users;

select * from users



