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

desc users;

insert into users
(name, CPF, CNH, phone, addres, pass, admin) values
("admin", "00000000", "0000000", "70707000", "admin", md5(md5('admin')), true); 

select * from users;

select addres, pass from users where addres = 'admin' and pass = md5(md5('admin')); 

-- drop table;

desc users;-- 

select * from users;

select * from users;-- 


select addres from users where addres = '{$user}' and pass = md5(md5('{$password}'));

select * from users order by id desc 


