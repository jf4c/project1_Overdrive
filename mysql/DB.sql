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

alter table users add CEP varchar(10) after addres;
alter table users add rua varchar(20) after CEP;
alter table users add bairro varchar(50) after rua;
alter table users add cidade varchar(50) after bairro;
alter table users add UF varchar(5) after cidade;

alter table users drop rua;

desc users;

insert into users
(name, CPF, CNH, phone, addres, pass, admin) values
("admin", "00000000", "0000000", "70707000", "admin", md5(md5('admin')), true); 

select * from users;

select addres, pass from users where addres = 'admin' and pass = md5(md5('admin')); 

select CPF from users where CPF = '44091104894';

-- drop table;

desc users;

select * from users;

alter table users add empresa varchar(255);
alter table users add foreign key (empresa)
references company(CNPJ);

update users set empresa = "45.339.363/0001-95" where userId = '11';

