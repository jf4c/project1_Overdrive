create table users(
userId mediumint(8) unsigned NOT NULL auto_increment, 
`name` varchar(255),
Email varchar(255),
CPF varchar(255),
CNH varchar(255),
phone varchar(20),
addres varchar(255),
pass varchar(255),
car varchar(255) default null,
admin bool default FALSE,
primary key(userId)
)auto_increment=1;

alter table users drop car;

desc users;

insert into users
(name,                 Email,                     CPF,         CEP,          rua,              bairro,              cidade,       uf,             pass,       admin)     values
("Júlio Costa","juliofac2001@hotmail.com", "440.911.048.94", "13668048", "Luis Terassi", "Jardim Águas Claras", "Porto Ferreira", "SP",  md5(md5('jfac1923')), true); 

insert into users
(empresa)    values
("45.339.363/0001-95"); 



select * from users order by userId;


ALTER TABLE users
  DROP FOREIGN KEY empresa;

