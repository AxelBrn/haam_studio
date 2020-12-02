DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS sub_categories;
DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS company;
DROP TABLE IF EXISTS roles;

CREATE TABLE roles(
   id SMALLINT UNSIGNED AUTO_INCREMENT,
   label VARCHAR(50) NOT NULL,
   CONSTRAINT PK_Roles PRIMARY KEY(id)
)ENGINE=INNODB;

CREATE TABLE company(
   id SMALLINT UNSIGNED AUTO_INCREMENT,
   label VARCHAR(255) NOT NULL,
   CONSTRAINT PK_Company PRIMARY KEY(id)
)ENGINE=INNODB;

CREATE TABLE categories(
   id SMALLINT UNSIGNED AUTO_INCREMENT,
   label VARCHAR(150),
   banner VARCHAR(250),
   card_img VARCHAR(250),
   CONSTRAINT PK_Categories PRIMARY KEY(id)
)ENGINE=INNODB;

CREATE TABLE sub_categories(
   id SMALLINT UNSIGNED AUTO_INCREMENT,
   label VARCHAR(150),
   id_category SMALLINT UNSIGNED NOT NULL,
   CONSTRAINT PK_Sub_Categories PRIMARY KEY(id),
   CONSTRAINT FK_Sub_Categories_Categories FOREIGN KEY(id_category) REFERENCES categories(id)
)ENGINE=INNODB;

CREATE TABLE users(
   id SMALLINT UNSIGNED AUTO_INCREMENT,
   firstname VARCHAR(150) NOT NULL,
   lastname VARCHAR(150) NOT NULL,
   email VARCHAR(200) NOT NULL,
   password VARCHAR(150) NOT NULL,
   adress VARCHAR(255),
   city VARCHAR(150),
   postal_code VARCHAR(5),
   id_company SMALLINT UNSIGNED,
   id_role SMALLINT UNSIGNED NOT NULL,
   CONSTRAINT PK_Users PRIMARY KEY(id),
   CONSTRAINT FK_Users_Company FOREIGN KEY(id_company) REFERENCES company(id),
   CONSTRAINT FK_Users_Roles FOREIGN KEY(id_role) REFERENCES roles(id)
)ENGINE=INNODB;

CREATE TABLE products(
   id SMALLINT UNSIGNED AUTO_INCREMENT,
   label VARCHAR(255) NOT NULL,
   price DECIMAL(5,2) NOT NULL,
   id_sub_category SMALLINT UNSIGNED NOT NULL,
   id_company SMALLINT UNSIGNED NOT NULL,
   CONSTRAINT PK_Products PRIMARY KEY(id),
   CONSTRAINT FK_Products_Sub_Categories FOREIGN KEY(id_sub_category) REFERENCES sub_categories(id),
   CONSTRAINT FK_Products_Company FOREIGN KEY(id_company) REFERENCES company(id)
)ENGINE=INNODB;

INSERT INTO roles (id, label) VALUES
(NULL, 'customer'),
(NULL, 'professional');

INSERT INTO categories (id, label, banner, card_img) VALUES
(NULL, 'Fashion', 'fdgnf', 'clothes-product.jpg'),
(NULL, 'Food', 'dfsgdh', 'food-product.jpg'),
(NULL, 'Decoration', 'xfcgvhjkl', 'deco-product.jpg');

