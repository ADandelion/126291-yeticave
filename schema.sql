  CREATE DATABASE  126291-yeticave
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

  USE YetiCave;

  CREATE TABLE lots (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date_create DATETIME DEFAULT CURRENT_TIMESTAMP,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(30) NOT NULL,
    image BIGINT(20) UNSIGNED NOT NULL,
    starting_price INT,
    date_expire DATETIME,
    bet_step INT,
    user_id INT NOT NULL,
    winner_id INT NOT NULL,
    category_id INT NOT NULL
  );

  CREATE TABLE bets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    add_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    price INT,
    user_id INT NOT NULL,
    lot_id INT NOT NULL
  );

  CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (30)
  );

  CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR (30) NOT NULL UNIQUE,
    password VARCHAR(20) NOT NULL,
    name VARCHAR(30),
    contact VARCHAR(60) NOT NULL,
    avatar VARCHAR(255),
    date_registered TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  );