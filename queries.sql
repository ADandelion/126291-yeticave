-- Добавляем список категорий;

INSERT INTO `categories`
       (name)
VALUES
       ('Доски и лыжи'),
       ('Крепления'),
       ('Ботинки'),
       ('Одежда'),
       ('Инструменты'),
       ('Разное');

-- Добавляем пользователей

INSERT INTO `users`
       (email, password, name, contact, avatar)
VALUES
       ('alexblag@gmail.com', 'qwerty123', 'Alex', '022-520330', '/img/ava.png'),
       ('alexblag@ya.ru', 'qweqwe123', 'Masha', '079123456', '/img/ava1.png');


