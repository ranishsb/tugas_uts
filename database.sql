
create table tb_user (
	user_id int(11) not null AUTO_INCREMENT,
	user_name varchar(50) not null,
	user_password varchar(256) not null,
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_name)
	);

create table album (
id int(11) not null auto_increment,
name varchar(100) not null,
text varchar(100) not null,
photo_id int(11) default null,
primary key(id),
unique key(name)
);

create table photos (
id int(11) not null auto_increment,
date date,
title text,
post_id int(11) default null,
primary key(id),
unique key(date)
);

create table post (
id int(11) not null auto_increment,
date date,
slug varchar(100) not null,
title text,
card_id int(11) default null,
primary key(id),
unique key(date)
);


create table category (
id int(11) not null auto_increment,
name varchar(100) not null,
text varchar(100) not null,
primary key(id),
unique key(text)
);











