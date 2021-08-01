create table user(
	id int not null unique AUTOINCREMENT primary key,
	userName varchar(50) not null unique,
	email varchar(50) not null unique,	
	password varchar(255) not null,
	mobile char(10) not null unique	
);
