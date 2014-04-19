CREATE DATABASE TAF;

USE TAF;

Create TABLE allUsers
(
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(25),
email VARCHAR(25),
password VARCHAR(20);
PRIMARY KEY (id),
hash VARCHAR(32),
premium BOOLEAN
);


Create TABLE shops{
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(25),
address VARCHAR(50),
email varchar(25),
password varchar(20),
PRIMARY KEY (id),
hash VARCHAR(32),
premium BOOLEAN
};

Create TABLE artists
{
id iNT NOT NULL AUTO_INCREMENT,
first_name VARCHAR(30),
last_name VARCHAR(30),
email VARCHAR(30),
hash VARCHAR(32),
shop_id INT,
password VARCHAR(20),
FOREIGN KEY (shop_id) REFERENCES shops(id),
premium BOOLEAN
};

Create TABLE artistSpecialties{
id INT NOT NULL AUTO_INCREMENT,
artist int,
genre_id int,
FOREIGN KEY (artist) REFERENCES artists(id),
FOREIGN KEY (genre_id) REFERENCES genres(id)
}

Create TABLE genres
{
id INT NOT NULL AUTO_INCREMENT,
genre VARCHAR(30),
}

