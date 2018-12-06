  CREATE DATABASE  YetiCave
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

  USE YetiCave;

  CREATE TABLE lots (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date_create DATETIME,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(30) NOT NULL,
    image BIGINT(20) UNSIGNED,
    starting_price INT,
    date_expire DATETIME,
    path_lot VARCHAR (20),
    user_id INT NOT NULL,
    winner_id INT NOT NULL,
    category_id INT NOT NULL
  );

  CREATE TABLE bets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    add_date DATETIME,
    price INT,
    user_id INT NOT NULL,
    lot_id INT NOT NULL
  );

  CREATE TABLE category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (30)
  );

  CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR (30) NOT NULL UNIQUE,
    password VARCHAR(20),
    name VARCHAR(30),
    contact VARCHAR(60),
    avatar VARCHAR(255),
    date_registered TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    lot_id INT NOT NULL,
    bet_id INT NOT  NULL
  );