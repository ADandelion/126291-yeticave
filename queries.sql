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
       ('alexblag@gmail.com', 'qwerty123', 'Alex', 022-520330, '/img/ava.png'),
       ('alexblag@ya.ru', 'qweqwe123', 'Masha', 079123456, '/img/ava1.png');


-- Добавляем лоты

INSERT INTO `lots`
        (name, description, image, starting_price, date_expire, bet_step, user_id, winner_id, category_id)
VALUES
        ('2014 Rossignol District Snowboard', 'Доска мега крутая', 'img/lot-1.jpg', 10999, '0000-00-00 00-00-00', 0, 1, 0, 1),
        ('Куртка для сноуборда DC Mutiny Charcoal', 'Куртка боевая', 'img/lot-5.jpg', 7500, '0000-00-00 00-00-00', 0, 2, 0, 4);

-- Добавляем ставки

INSERT INTO `bets`
        (price, user_id, lot_id)
VALUES
        (9500, 1, 2),
        (15000, 2, 1);



-- Запросы

-- 1. Получаем все категории
SELECT * FROM categories;

-- 2. получить самые новые, открытые лоты.
-- Каждый лот должен включать название, стартовую цену,
-- ссылку на изображение, цену, название категории;

SELECT lots.name, lots.image, categories.name  from lots
JOIN categories on lots.category_id = categories.id
ORDER by date_create desc;

--- Я не очень понял на счет цены ? Какая цена?

-- 3. показать лот по его id. Получите также название категории, к которой принадлежит лот

SELECT lots.id, categories.name
FROM lots
JOIN categories
ON lots.category_id = categories.id;

-- 4. обновить название лота по его идентификатору;

UPDATE lots
SET name = 'Другое'
WHERE id = 1;

-- 5. получить список самых свежих ставок для лота по его идентификатору;

SELECT * FROM bets
WHERE lot_id = 1
ORDER BY add_date DESC;