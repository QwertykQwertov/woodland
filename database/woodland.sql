-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2024 г., 22:41
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
-- Структура таблицы `products_restaurant`
--

CREATE TABLE `products_restaurant` (
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
-- Дамп данных таблицы `products_restaurant`
--

INSERT INTO `products_restaurant` (`id`, `article`, `name`, `short_description`, `full_description`, `category`, `subcategory`, `image`, `price`, `opt_price`, `length`, `height`, `width`, `weight`, `color`) VALUES
(3, '', 'Разделочная доска', 'Разделочная доска, выполненная из массива дуба. Идеально подходит для нарезки продуктов. \r\nОбработана специальным маслом, предназначенным для разделочных досок.  ', 'Рекомендации по уходу:\r\n<ul>\r\n<li>Нельзя использовать доску в качестве подставки под горячее.</li>\r\n<li>Мыть сразу после использования в теплой воде без грубых абразивных губок.</li>\r\n<li>После ополаскивания протереть сухой чистой тканью.</li>\r\n<li>Не мыть в посудомоечной машине.</li>\r\n<li>Раз в пол года-год пропитывать минеральным, вазелиновым маслом.</li>\r\n</ul>', 6, 7, 'razdA.jpg', 1400, 0, 390, 24, 240, 0, ''),
(4, '', 'Разделочная доска', 'Разделочная доска, изготовленная вручную на нашем собственном столярном производстве.', 'Идеально подходит как для домашнего использования, так и для ресторанов, а также станет замечательным подарком! \r\nМы также предлагаем возможность изготовления досок по индивидуальному заказу.\r\n<br>\r\nДля производства досок используются такие материалы, как дуб, ясень и бук.\r\n', 6, 7, 'razdB.jpg', 1400, 0, 340, 26, 180, 0, ''),
(5, '', 'Набор кухонных досок', 'Набор кухонных досок\r\nМы используем только натуральные экологически чистые материалы. \r\nДревесина цельная, без клеевых соединений. \r\nИдеальные размеры, которые прекрасно дополнят интерьер вашей кухни!', 'Набор кухонных досок\r\nМы используем только натуральные экологически чистые материалы. \r\nДревесина цельная, без клеевых соединений. \r\nИдеальные размеры, которые прекрасно дополнят интерьер вашей кухни!\r\n', 6, 7, 'razdC.jpg', 1400, 0, 420, 27, 180, 0, '');

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
(1, 'tj00001', 'Журнальный столик 1', 'Этот прекрасный журнальный столик изготовлен из состаренного экологически чистого дерева.', 'Этот прекрасный журнальный столик изготовлен из состаренного экологически чистого дерева. Используются только натуральные красители и масла. Все материалы отличаются высоким качеством. Эта мебель пронизана подлинной атмосферой известных на весь мир индустриальных пространств.\r\n<br>\r\nДополнительные элементы, такие как колеса, ручки для перемещения, металлические уголки, заклепки, таблички и прочее, могут быть добавлены. Цвет может быть любым, размеры — по вашему желанию. Если у вас есть вопросы, не стесняйтесь обращаться — мы все обсудим.', 1, 4, 'jt0001.jpg', 15000, 123, 1150, 420, 600, 0, ''),
(2, 'tj00002', 'Журнальный столик 2', 'Журнальный столик изготовлен из антикварного дерева.\r\n', 'Журнальный столик изготовлен из антикварного дерева. Для его обработки используются только натуральные красители и масла. Эта мебель создает уникальную атмосферу. Цвет может быть любым, а размеры — на ваш выбор.', 1, 4, 'jt0002.jpg\r\n', 10000, 0, 700, 410, 580, 0, ''),
(3, 'tj00003', 'Журнальный столик 3', 'Круглый журнальный столик понравится ценителям минимализма', '    Изящный круглый журнальный столик объединяет в себе современную эстетику и индустриальный шарм стиля лофт.     Столешница диаметром 80 см выполнена из массива дуба с выразительной природной текстурой и обработана матовым лаком, сохраняющим естественный оттенок древесины.     Края столешницы имеют деликатную фаску, смягчающую общий образ мебели.      Высота столика 45 см делает его удобным как для повседневного использования, так и для создания уютной зоны отдыха. Лаконичный дизайн и сбалансированные пропорции позволяют столику гармонично вписаться в любой современный интерьер,     добавляя в него нотку индустриального стиля.', 1, 4, 'journal3.jpg\r\n', 5999, 123, 800, 450, 800, 5, '');

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
-- Индексы таблицы `products_restaurant`
--
ALTER TABLE `products_restaurant`
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
-- AUTO_INCREMENT для таблицы `products_restaurant`
--
ALTER TABLE `products_restaurant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
