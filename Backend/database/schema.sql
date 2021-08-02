CREATE TABLE `user` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`userName`	varchar ( 50 ) NOT NULL UNIQUE,
	`email`	varchar ( 50 ) NOT NULL UNIQUE,
	`password`	varchar ( 255 ) NOT NULL,
	`mobile`	char ( 10 ) NOT NULL UNIQUE
);

CREATE TABLE `orders` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`totalPrice`	REAL NOT NULL CHECK(totalPrice > 0),
	`orderTime`	VARCHAR ( 50 ) NOT NULL,
	`orderDate`	VARCHAR ( 50 ) NOT NULL,
	`address`	VARCHAR ( 50 ) NOT NULL,
	`isPaid`	INT NOT NULL CHECK(isPaid IN ( 1 , 0 )),
	`userId`	INT NOT NULL,
	CONSTRAINT `FK_USERID` FOREIGN KEY(`userId`) REFERENCES `user`(`id`)
);

CREATE TABLE `food`(
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`name`	VARCHAR ( 50 ) NOT NULL,
	`description`	VARCHAR ( 50 ) NOT NULL,
	`quantity`	INT NOT NULL CHECK(quantity > 0),
	`Price`	REAL NOT NULL CHECK(Price > 0)
);

CREATE TABLE `foodOrders`(
	`foodId`	INTEGER NOT NULL,
	`orderId`	INTEGER NOT NULL,

	CONSTRAINT PK_FOODORDERS 
	PRIMARY KEY(foodId, orderId)
);
