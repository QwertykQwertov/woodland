-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 14 2024 г., 23:02
-- Версия сервера: 10.3.34-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `woodland`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_link` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_order` int(11) NOT NULL COMMENT 'Порядок вывода на странице'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `category_link`, `category_order`) VALUES
(1, 'Столы', 'category_tables.jpg', '', 'tables', 1),
(2, 'Табуретки', 'category_stoools.jpg', '', 'stools', 2),
(3, 'Тумбы лофт', 'category_tumba.jpg', '', 'stands_loft', 3),
(4, 'Стулья деревянные', 'category_chair.jpg', '', 'chairs_wood', 4),
(5, 'Коробки для упаковки', 'category_pack.jpg', '', 'box_packing', 5),
(6, 'Для ресторанов и кафе', 'category_restaurant.jpg', '', 'restaurant', 6),
(7, 'Садовая мебель', 'category_garden.jpg', '', 'gardens', 7),
(8, 'Изделия под заказ', 'category_special.jpg', '', 'specials', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `products_tables`
--

CREATE TABLE `products_tables` (
  `id` int(10) NOT NULL,
  `article` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Краткое описание',
  `full_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Полное описание',
  `category` int(5) NOT NULL,
  `subcategory` int(5) DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `opt_price` float NOT NULL,
  `length` int(10) NOT NULL COMMENT 'Длина',
  `height` int(10) NOT NULL COMMENT 'Высота',
  `width` int(10) NOT NULL COMMENT 'Ширина',
  `weight` float NOT NULL COMMENT 'Вес',
  `color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products_tables`
--

INSERT INTO `products_tables` (`id`, `article`, `name`, `short_description`, `full_description`, `category`, `subcategory`, `image`, `price`, `opt_price`, `length`, `height`, `width`, `weight`, `color`) VALUES
(1, '', 'Журнальный столик 1', 'Журнальный столик в стиле лофт идеально впишется в ваш интерьер', 'Журнальный столик в стиле лофт - это элегантное сочетание индустриальной эстетики и функциональности. Его основу составляет прочный металлический каркас из труб квадратного сечения, окрашенный в матовый черный цвет. Столешница выполнена из массива дерева толщиной 40 мм с сохранением естественной текстуры и характерных природных особенностей материала. Поверхность обработана прозрачным матовым лаком, защищающим дерево и подчеркивающим его природную красоту.  Геометрически простая конструкция и контраст натурального дерева с металлом создают яркий индустриальный характер, типичный для стиля лофт. Столик отлично впишется как в современный интерьер, так и в пространство в стиле индастриал или урбан. Компактные размеры делают его практичным элементом меблировки, не загромождающим пространство.', 1, 4, 'journal1.jpg', 9999, 123, 500, 700, 300, 3, ''),
(2, '', 'Журнальный столик 2', 'Красивый журнальный столик для вашего интерьера', 'Стильный квадратный журнальный столик - это выразительный предмет мебели, сочетающий в себе строгую геометрию и индустриальный характер. Столешница подчеркивает природный рисунок древесины и создает приятную тактильную поверхность. Древесина обработана маслом, придающим благородный оттенок и надежную защиту.     Конструкция усилена перегородками, которые не только обеспечивают дополнительную устойчивость, но и создают характерный облик. Высота столика 45 см оптимальна для комфортного использования.     Четкие линии, прочная конструкция и продуманные пропорции делают этот столик универсальным предметом мебели, способным стать функциональным акцентом в современном интерьере.', 1, 4, 'journal2.jpg\r\n', 4999, 123, 500, 450, 500, 3.4, ''),
(3, '', 'Журнальный столик 3', 'Круглый журнальный столик понравится ценителям минимализма', '    Изящный круглый журнальный столик объединяет в себе современную эстетику и индустриальный шарм стиля лофт.     Столешница диаметром 80 см выполнена из массива дуба с выразительной природной текстурой и обработана матовым лаком, сохраняющим естественный оттенок древесины.     Края столешницы имеют деликатную фаску, смягчающую общий образ мебели.      Высота столика 45 см делает его удобным как для повседневного использования, так и для создания уютной зоны отдыха. Лаконичный дизайн и сбалансированные пропорции позволяют столику гармонично вписаться в любой современный интерьер,     добавляя в него нотку индустриального стиля.', 1, 4, 'journal3.jpg\r\n', 5999, 123, 800, 450, 800, 5, '');

-- --------------------------------------------------------

--
-- Структура таблицы `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(10) NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `image`, `link`, `category`, `description`) VALUES
(1, 'Лофт', 'table_loft.jpg', 'loft_tables', 1, 'Столы лофт'),
(2, 'С эпоксидной смолой', 'table_epoxyd.jpg', 'epoxide', 1, 'Столы с эпоксидной смолой'),
(3, 'Деревянные', 'table_wood.jpg', 'wood_tables', 1, 'Столы деревянные'),
(4, 'Журнальные', 'table_journal.jpg', 'journal', 1, 'Столы журнальные'),
(5, 'Лофт', 'stool_loft.jpg', 'stools_loft', 2, 'Табуретки лофт'),
(6, 'Деревянные', 'stool_wood.jpg', 'stools_wood', 2, 'Табуретки деревянные'),
(7, 'Разделочные доски', 'razdelochnye_doski.jpg', '', 6, 'Разделочные доски'),
(8, 'Подносы', 'podnos.jpg', '', 6, 'Подносы'),
(9, 'Салфетницы', 'salfetnica.webp', '', 6, 'Салфетницы'),
(10, 'Подставки', 'podstavka.jpg', '', 6, 'Подставки'),
(11, 'Блюда', 'bludo.jpg', '', 6, 'Блюда'),
(13, 'Рейки на фасады стен', 'reiky.jpg', '', 6, 'Рейки на фасады стен'),
(14, 'Ящики под бутылки', 'box.jpg', '', 6, 'Ящики под бутылки'),
(15, 'Инвентарь столовый', 'inventar.jpg', '', 6, 'Инвентарь столовый');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_tables`
--
ALTER TABLE `products_tables`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `products_tables`
--
ALTER TABLE `products_tables`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
