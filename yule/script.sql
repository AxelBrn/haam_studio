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
   image VARCHAR(250),
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
(NULL, 'Fashion', 'banner-fashion.jpg', 'clothes-product.jpg'),
(NULL, 'Food', 'banner-food.jpg', 'food-product.jpg'),
(NULL, 'Decoration', 'banner-deco.jpg', 'deco-product.jpg');

INSERT INTO sub_categories (id, label, id_category) VALUES
(NULL, 'Sweet', 2),
(NULL, 'Savory', 2),
(NULL, 'Drink', 2),
(NULL, 'Clothes', 1),
(NULL, 'Outerwear', 1),
(NULL, 'Jewelry', 1),
(NULL, 'Ornament', 3),
(NULL, 'String decoration', 3),
(NULL, 'Christmas trees', 3);

INSERT INTO company (id, label) VALUES
(NULL, 'DUPONT Christmas Wool'),
(NULL, 'SMITH & SONS'),
(NULL, 'DONALD Mickey cheese');

INSERT INTO products (id, label, price, image, id_sub_category, id_company) VALUES
(NULL, 'Pancakes', 1.50, 'pancakes.jpg', 1, 3),
(NULL, 'Waffles', 1.50, 'gaufres.jpg', 1, 3),
(NULL, 'Pretzel', 2, 'bretzel.jpg', 1, 3),
(NULL, 'Raclette cheese', 20, 'pain.jpg', 2, 3),
(NULL, 'Red jumper', 30, 'pull_noel.jpg', 4, 1),
(NULL, 'Red sweat shirt', 40, 'sweat_noel.jpg', 4, 1),
(NULL, 'Yellow scarf', 15, 'echarpe.jpg', 5, 1),
(NULL, 'Orange mittens', 15, 'mitaine.jpg', 5, 1),
(NULL, 'Red santa claus', 4, 'perenoel.jpg', 7, 2),
(NULL, 'Star', 2, 'etoile.jpg', 7, 2),
(NULL, 'Christmas balls', 3, 'boules.jpg', 7, 2),
(NULL, 'Light string color', 25, 'guirlande_lumineuse.jpg', 8, 2);