-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 03 2024 г., 22:56
-- Версия сервера: 5.7.27-30
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u2891574_default`
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
-- Структура таблицы `products_box`
--

CREATE TABLE `products_box` (
  `id` int(10) NOT NULL,
  `article` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Краткое описание',
  `full_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Полное описание',
  `category` int(5) NOT NULL,
  `subcategory` int(5) DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_images` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Изображения для карусели',
  `price` float NOT NULL,
  `opt_price` float NOT NULL,
  `length` int(10) NOT NULL COMMENT 'Длина',
  `height` int(10) NOT NULL COMMENT 'Высота',
  `width` int(10) NOT NULL COMMENT 'Ширина',
  `weight` float NOT NULL COMMENT 'Вес',
  `color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products_box`
--

INSERT INTO `products_box` (`id`, `article`, `name`, `short_description`, `full_description`, `category`, `subcategory`, `image`, `other_images`, `price`, `opt_price`, `length`, `height`, `width`, `weight`, `color`) VALUES
(1, 'bx0001', 'Коробка упаковочная 1', 'Элегантные, прочные и стильные подарочные коробки из фанеры толщиной 4 мм.', 'Элегантные, прочные и стильные подарочные коробки из фанеры толщиной 4 мм.\r\n<br>\r\nПринимаем заказы от 10 штук.\r\n<br>\r\nПри заказе от 100 штук предоставляем оптовые скидки!\r\n<br>\r\nМы можем изготовить коробки по вашим индивидуальным размерам и предложить гравировку вашего логотипа или поздравления.\r\n<br>\r\nТакже доступны коробки в других уникальных формах.\r\n<br>\r\nДеревянные подарочные коробки – это современное, экологичное и оригинальное решение. С такой упаковкой вы непременно привлечете внимание!', 5, NULL, 'bx0001.jpg', NULL, 700, 0, 250, 100, 250, 0, ''),
(2, 'bx0002', 'Коробка упаковочная вино 1', 'Элегантные, прочные и стильные подарочные коробки из фанеры и липы.', 'Элегантные, прочные и стильные подарочные коробки из фанеры и липы.\r\n<br>\r\nМы принимаем заказы от 10 штук. \r\nРазмер можно адаптировать под вашу бутылку. <br>\r\nКоробки типа пенал из ольхи (дно и крышка выполнены из фанеры). <br>\r\nВнутренние размеры: 320Х90Х90 мм. \r\nРучка из веревки. <br>\r\nВозможность нанесения логотипа (шелкографией) на крышку. \r\nЛазерная гравировка доступна с любой стороны.<br>\r\nДеревянные подарочные коробки – это современное, экологичное и оригинальное решение. С такой упаковкой вы точно привлечете внимание!', 5, NULL, 'bx0002.jpg', 'bx0002_1.jpg', 600, 0, 320, 90, 90, 0, ''),
(3, 'bx0003', 'Коробка фанера 1', 'Элегантные, прочные и стильные подарочные коробки из фанеры.', 'Элегантные, прочные и стильные подарочные коробки из фанеры.\r\n<br>\r\nМы предлагаем деревянные коробочки различных форм, как с логотипом, так и без, для любых ваших нужд.<br>\r\nЦена варьируется в зависимости от размера и количества. <br>\r\nЕсть возможность нанесения логотипа (шелкографией) на крышку. <br>\r\nЛазерная гравировка доступна с любой стороны. <br>\r\nДеревянные подарочные коробки – это современное, экологичное и оригинальное решение. С такой упаковкой вы непременно привлечете внимание!', 5, NULL, 'bx0003.jpg', 'bx0003_1.jpg', 450, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `products_chairs`
--

CREATE TABLE `products_chairs` (
  `id` int(10) NOT NULL,
  `article` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Краткое описание',
  `full_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Полное описание',
  `category` int(5) NOT NULL,
  `subcategory` int(5) DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_images` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Изображения для карусели',
  `price` float NOT NULL,
  `opt_price` float NOT NULL,
  `length` int(10) NOT NULL COMMENT 'Длина',
  `height` int(10) NOT NULL COMMENT 'Высота',
  `width` int(10) NOT NULL COMMENT 'Ширина',
  `weight` float NOT NULL COMMENT 'Вес',
  `color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products_chairs`
--

INSERT INTO `products_chairs` (`id`, `article`, `name`, `short_description`, `full_description`, `category`, `subcategory`, `image`, `other_images`, `price`, `opt_price`, `length`, `height`, `width`, `weight`, `color`) VALUES
(1, 'stooll0001', 'Лофт стул 1', 'Сиденье выполнено из массива дуба и покрыто неколерованным маслом с воском.', 'Стулья, представленные на фотографии, изготовлены в нашей мастерской. Сиденье выполнено из массива дуба и покрыто неколерованным маслом с воском, что позволяет сохранить естественные оттенки дерева. Каркас стульев выполнен из металла, окрашенного порошковым методом, что обеспечивает долговечность и ударопрочность покрытия.\r\n<br>\r\nВы можете выбрать материалы:\r\nдуб, ясень, карагач, клен, сосна и другие ценные породы дерева по предварительной договоренности. Также мы работаем с эпоксидной смолой.\r\n<br>\r\nДоступные варианты покрытия древесины:\r\n<ul>\r\n<li>масло</li>\r\n<li>лак</li>\r\n<li>эмаль</li>\r\n<li>воск</li></ul>', 4, NULL, 'stooll0001.jpg', NULL, 5000, 0, 370, 600, 350, 0, ''),
(2, 'stooll0002', 'Лофт стул 2', 'Сиденье выполнено из массива дуба и покрыто неколерованным маслом с воском.', 'Стулья, представленные на фотографии, изготовлены в нашей мастерской. Сиденье выполнено из массива дуба и покрыто неколерованным маслом с воском, что позволяет сохранить естественные оттенки дерева. Каркас стульев выполнен из металла, окрашенного порошковым методом, что обеспечивает долговечность и ударопрочность покрытия.\r\n<br>\r\nВы можете выбрать материалы:\r\nдуб, ясень, карагач, клен, сосна и другие ценные породы дерева по предварительной договоренности. Также мы работаем с эпоксидной смолой.\r\n<br>\r\nДоступные варианты покрытия древесины:\r\n<ul>\r\n<li>масло</li>\r\n<li>лак</li>\r\n<li>эмаль</li>\r\n<li>воск</li></ul>', 4, NULL, 'stooll0002.jpg', NULL, 5500, 0, 320, 820, 400, 0, ''),
(3, 'chw0001', 'Стул деревянный 1', 'Изготовлен вручную из натуральных материалов, отличается высоким качеством и эстетичным дизайном.', 'Деревянный стул является одним из ключевых и важных элементов интерьера. Он изготовлен вручную из натуральных материалов, отличается высоким качеством и эстетичным дизайном.\r\n<br>\r\nНаши стулья неразборные, что существенно повышает их прочность.\r\n<br>\r\nВыбор цвета обсуждается индивидуально: это может быть эмаль, эффект старения, пропитка, масло или любой другой вариант, который органично впишется в интерьер вашего помещения.\r\n<br>\r\nМатериал: массив сосны', 4, NULL, 'chw0001.jpg', NULL, 11000, 0, 450, 450, 450, 0, ''),
(4, 'chw0002', 'Стул деревянный 2', 'Стулья изготовлены из массива натурального дерева.', 'Стулья изготовлены из массива натурального дерева. Покрытие может быть выполнено с использованием масла Борма или краски на водной основе, акрила, с возможностью выбора цвета по вашему желанию. Мы предложим вам стулья из массива сосны, дуба или ясеня.', 4, NULL, 'chw0002.jpg', NULL, 3300, 0, 450, 450, 450, 0, '');

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
  `other_images` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Остальные изображения',
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

INSERT INTO `products_restaurant` (`id`, `article`, `name`, `short_description`, `full_description`, `category`, `subcategory`, `image`, `other_images`, `price`, `opt_price`, `length`, `height`, `width`, `weight`, `color`) VALUES
(3, 'resraz0001', 'Разделочная доска', 'Разделочная доска, выполненная из массива дуба. Идеально подходит для нарезки продуктов. \r\nОбработана специальным маслом, предназначенным для разделочных досок.  ', 'Рекомендации по уходу:\r\n<ul>\r\n<li>Нельзя использовать доску в качестве подставки под горячее.</li>\r\n<li>Мыть сразу после использования в теплой воде без грубых абразивных губок.</li>\r\n<li>После ополаскивания протереть сухой чистой тканью.</li>\r\n<li>Не мыть в посудомоечной машине.</li>\r\n<li>Раз в пол года-год пропитывать минеральным, вазелиновым маслом.</li>\r\n</ul>', 6, 7, 'razdA.jpg', 'razdA2.jpg, razdA3.jpg, razdA4.jpg', 1400, 0, 390, 24, 240, 0, ''),
(4, 'resraz0002', 'Разделочная доска', 'Разделочная доска, изготовленная вручную на нашем собственном столярном производстве.', 'Идеально подходит как для домашнего использования, так и для ресторанов, а также станет замечательным подарком! \r\nМы также предлагаем возможность изготовления досок по индивидуальному заказу.\r\n<br>\r\nДля производства досок используются такие материалы, как дуб, ясень и бук.\r\n', 6, 7, 'razdB.jpg', 'razdB1.jpg, razdB2.jpg, razdB3.jpg', 1400, 0, 340, 26, 180, 0, ''),
(5, 'resraz0003', 'Набор кухонных досок', 'Набор кухонных досок\r\nМы используем только натуральные экологически чистые материалы. \r\nДревесина цельная, без клеевых соединений. \r\nИдеальные размеры, которые прекрасно дополнят интерьер вашей кухни!', 'Набор кухонных досок\r\nМы используем только натуральные экологически чистые материалы. \r\nДревесина цельная, без клеевых соединений. \r\nИдеальные размеры, которые прекрасно дополнят интерьер вашей кухни!\r\n', 6, 7, 'razdC.jpg', 'razdC1.jpg, razdC2.jpg', 3500, 0, 420, 27, 180, 0, ''),
(6, 'resraz0004', 'Доска сосна', 'Деревянная разделочная доска из хвойных пород дерева', 'Деревянная разделочная доска из хвойных пород дерева\r\n<br>\r\nМы предлагаем готовые размеры, а также возможность индивидуального изготовления под заказ! Доска выполнена из натурального массива и обладает отличными гигиеническими свойствами. Она обработана специальным натуральным минеральным маслом, предназначенным для деревянной посуды.\r\n<br>\r\nНаши предложения:\r\n<ul>\r\n<li>\r\nРазнообразные формы и количества</li>\r\n<li>Разные виды покрытия: масло, воск, тонирующее масло</li>\r\n</ul>\r\nСроки выполнения заказов быстрые: от 1 дня после согласования макета.\r\n<br>\r\nТакже доступна возможность изготовления тестового образца.', 6, 7, 'resraz0004.jpg', 'resraz0004_1.jpg, resraz0004_2.jpg, resraz0004_3.jpg', 600, 0, 320, 25, 200, 0, ''),
(7, 'resraz0005', 'Доска лиственница', 'Разделочная доска из лиственницы', 'Разделочная доска из лиственницы!\r\n<br>\r\nМы предлагаем как стандартные размеры, так и возможность индивидуального изготовления под заказ. Доска выполнена из натурального массива и обладает отличными гигиеническими свойствами. Она обработана специальным натуральным минеральным маслом, предназначенным для деревянной посуды.\r\n<br>\r\nНаши предложения:\r\n<ul><li>Разнообразные формы и размеры</li>\r\n<li>Разные виды покрытия: масло, воск, тонирующее масло</li>\r\n\r\nСроки выполнения заказов быстрые: от 1 дня после согласования макета.\r\n<br>\r\nТакже доступна возможность изготовления тестового образца.', 6, 7, 'resraz0005.jpg', 'resraz0005_1.jpg, resraz0005_2.jpg', 800, 0, 500, 20, 100, 0, ''),
(8, 'resraz0006', 'Доска ясень', 'Разделочная доска из массива ясеня', 'Разделочная доска из массива ясеня!  \r\n<br>\r\nПредлагаем как стандартные размеры, так и возможность индивидуального заказа!\r\n<br>\r\nИзготовлена из натурального дерева и обладает отличными гигиеническими характеристиками.\r\n<br>\r\nДоска обработана специальным натуральным минеральным маслом, предназначенным для использования с деревянной посудой!\r\n<br>\r\nВ нашем ассортименте:\r\n<ul><li>Любое количество и форма</li>\r\n<li>Разнообразные виды покрытия: масло, воск, тонирующее масло</li></ul>', 6, 7, 'resraz0006.jpg', 'resraz0006_1.jpg, resraz0006_2.jpg, resraz0006_3.jpg', 1000, 0, 0, 40, 180, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `products_stands`
--

CREATE TABLE `products_stands` (
  `id` int(10) NOT NULL,
  `article` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Краткое описание',
  `full_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Полное описание',
  `category` int(5) NOT NULL,
  `subcategory` int(5) DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_images` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Изображения для карусели',
  `price` float NOT NULL,
  `opt_price` float NOT NULL,
  `length` int(10) NOT NULL COMMENT 'Длина',
  `height` int(10) NOT NULL COMMENT 'Высота',
  `width` int(10) NOT NULL COMMENT 'Ширина',
  `weight` float NOT NULL COMMENT 'Вес',
  `color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products_stands`
--

INSERT INTO `products_stands` (`id`, `article`, `name`, `short_description`, `full_description`, `category`, `subcategory`, `image`, `other_images`, `price`, `opt_price`, `length`, `height`, `width`, `weight`, `color`) VALUES
(1, 'stal0001', 'Тумба лофт 1', 'Металлический каркас соединен с использованием бесшовной сварки и покрыт порошковым составом', 'Металлический каркас соединен с использованием бесшовной сварки и покрыт порошковым составом (цвет можно выбрать из палитры RAL). Массив древесины обработан специальным тонирующим маслом с воском, что обеспечивает надежную защиту от внешних воздействий, цвет также на выбор.<br> Массив дерева сосна', 3, 0, 'stal0001.jpg', NULL, 60500, 0, 2300, 500, 400, 0, ''),
(2, 'stal0002', 'Тумба лофт 2', 'Cварочные швы скрыты и фактически отсутствуют, благодаря чему текстура стола выглядит очень привлекательно.', 'Каркас изготавливается с применением бесшовной сварки, что является значительным преимуществом. Это означает, что сварочные швы скрыты и фактически отсутствуют, благодаря чему текстура стола выглядит очень привлекательно.\r\n<br>\r\nМы можем покрасить изделие в любой цвет и изготовить его в любых размерах! Стол обрабатывается защитным маслом с воском, что обеспечивает надежную защиту от внешних воздействий.', 3, 0, 'stal0002.jpg', NULL, 46535, 0, 2000, 500, 400, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `products_stools`
--

CREATE TABLE `products_stools` (
  `id` int(10) NOT NULL,
  `article` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Краткое описание',
  `full_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Полное описание',
  `category` int(5) NOT NULL,
  `subcategory` int(5) DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_images` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Изображения для карусели',
  `price` float NOT NULL,
  `opt_price` float NOT NULL,
  `length` int(10) NOT NULL COMMENT 'Длина',
  `height` int(10) NOT NULL COMMENT 'Высота',
  `width` int(10) NOT NULL COMMENT 'Ширина',
  `weight` float NOT NULL COMMENT 'Вес',
  `color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products_stools`
--

INSERT INTO `products_stools` (`id`, `article`, `name`, `short_description`, `full_description`, `category`, `subcategory`, `image`, `other_images`, `price`, `opt_price`, `length`, `height`, `width`, `weight`, `color`) VALUES
(1, 'chl0001', 'Лофт стул 1', 'Сиденье выполнено из массива дуба и покрыто неколерованным маслом с воском.', 'Стулья, представленные на фотографии, изготовлены в нашей мастерской. Сиденье выполнено из массива дуба и покрыто неколерованным маслом с воском, что позволяет сохранить естественные оттенки дерева. Каркас стульев выполнен из металла, окрашенного порошковым методом, что обеспечивает долговечность и ударопрочность покрытия.\r\n<br>\r\nВы можете выбрать материалы:\r\nдуб, ясень, карагач, клен, сосна и другие ценные породы дерева по предварительной договоренности. Также мы работаем с эпоксидной смолой.\r\n<br>\r\nДоступные варианты покрытия древесины:\r\n<ul>\r\n<li>масло</li>\r\n<li>лак</li>\r\n<li>эмаль</li>\r\n<li>воск</li></ul>', 2, 5, 'stooll0001.jpg', NULL, 5000, 0, 370, 600, 350, 0, ''),
(2, 'chl0002', 'Лофт стул 2', 'Сиденье выполнено из массива дуба и покрыто неколерованным маслом с воском.', 'Стулья, представленные на фотографии, изготовлены в нашей мастерской. Сиденье выполнено из массива дуба и покрыто неколерованным маслом с воском, что позволяет сохранить естественные оттенки дерева. Каркас стульев выполнен из металла, окрашенного порошковым методом, что обеспечивает долговечность и ударопрочность покрытия.\r\n<br>\r\nВы можете выбрать материалы:\r\nдуб, ясень, карагач, клен, сосна и другие ценные породы дерева по предварительной договоренности. Также мы работаем с эпоксидной смолой.\r\n<br>\r\nДоступные варианты покрытия древесины:\r\n<ul>\r\n<li>масло</li>\r\n<li>лак</li>\r\n<li>эмаль</li>\r\n<li>воск</li></ul>', 2, 5, 'stooll0002.jpg', NULL, 5500, 0, 320, 820, 400, 0, '');

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
  `other_images` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Изображения для карусели',
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

INSERT INTO `products_tables` (`id`, `article`, `name`, `short_description`, `full_description`, `category`, `subcategory`, `image`, `other_images`, `price`, `opt_price`, `length`, `height`, `width`, `weight`, `color`) VALUES
(1, 'tj0001', 'Журнальный столик 1', 'Этот прекрасный журнальный столик изготовлен из состаренного экологически чистого дерева.', 'Этот прекрасный журнальный столик изготовлен из состаренного экологически чистого дерева. Используются только натуральные красители и масла. Все материалы отличаются высоким качеством. Эта мебель пронизана подлинной атмосферой известных на весь мир индустриальных пространств.\r\n<br>\r\nДополнительные элементы, такие как колеса, ручки для перемещения, металлические уголки, заклепки, таблички и прочее, могут быть добавлены. Цвет может быть любым, размеры — по вашему желанию. Если у вас есть вопросы, не стесняйтесь обращаться — мы все обсудим.', 1, 4, 'jt0001.jpg', 'jt0001_1.jpg', 15000, 123, 1150, 420, 600, 0, ''),
(2, 'tj0002', 'Журнальный столик 2', 'Журнальный столик изготовлен из антикварного дерева.\r\n', 'Журнальный столик изготовлен из антикварного дерева. Для его обработки используются только натуральные красители и масла. Эта мебель создает уникальную атмосферу. Цвет может быть любым, а размеры — на ваш выбор.', 1, 4, 'jt0002.jpg\r\n', 'jt0002_1.jpg, jt0002_2.jpg, jt0002_3.jpg', 10000, 0, 700, 410, 580, 0, ''),
(4, 'tl0001', 'Стол лофт 1', 'Массив дерева и сварной металлический каркас гарантируют их прочность и долговечность.', 'Столы серии «Лофт» играют ключевую роль в оформлении одного из самых популярных стилей дизайна. При их изготовлении применяются массив дерева и сварной металлический каркас, что гарантирует их прочность и долговечность.<br>\r\nСтолешница 1200х800х30 мм. (возможны другие размеры). <br>Каркас изготовлен стальной из прямоугольной трубы 40х20х1,5 мм. (возможны другие размеры).', 1, 1, 'tl0001.png', '', 15000, 0, 1200, 30, 800, 0, ''),
(5, 'tl0002', 'Стол лофт 2', 'Массив дерева и сварной металлический каркас гарантируют их прочность и долговечность.', 'Столы серии «Лофт» играют ключевую роль в оформлении одного из самых популярных стилей дизайна. При их изготовлении применяются массив дерева и сварной металлический каркас, что гарантирует их прочность и долговечность.<br>\r\nРазмеры по высоте: от 75 см. (возможно изготовление любого размера)<br>\r\nРазмеры по ширине: от 140 см. (возможно изготовление любого размера) Размеры по глубине: от 85 см. (возможно изготовление любого размера)<br> Каркас:	металл (профильная труба)<br> Материал дерева:	дуб (возможен любой материал)', 1, 1, 'tl0002.jpg', '', 30000, 0, 850, 750, 1400, 0, ''),
(6, 'te0001', 'Эпоксидный стол 1', 'Уникальные узоры на поверхности, гармоничное сочетание с металлом или деревом.', 'Разнообразие дизайнерских решений\r\nСоздать два идентичных стола из эпоксидной смолы невозможно. Уникальные узоры на поверхности, гармоничное сочетание с металлом или деревом – все это дает возможность создавать поистине эксклюзивные изделия, которые при этом остаются функциональными.', 1, 2, 'te0001.jpg', '', 50000, 0, 0, 0, 0, 0, ''),
(7, 'te0002', 'Эпоксидный стол 2', 'Каждый стол может быть выполнен из любой древесины и в любом стиле, размере или цвете.', 'Каждый стол может быть выполнен из любой древесины и в любом стиле, размере или цвете. Вставки из смолы доступны как в прозрачном, так и в непрозрачном варианте, с выбором из более чем десяти оттенков.', 1, 2, 'te0002.jpg', '', 45000, 0, 0, 0, 0, 0, ''),
(8, 'to0001', 'Обеденный стол сосна', 'Деревянный стол в классическом дизайне станет прекрасным выбором для тех, кто ценит эстетику и комфорт.', 'Деревянный стол в классическом дизайне станет прекрасным выбором для тех, кто ценит эстетику и комфорт. Он универсален и может служить офисным, компьютерным, письменным, кухонным или обеденным столом. Столешница и ножки изготовлены из массива сосны, тщательно отшлифованы и покрыты прозрачным лаком. Материал стола полностью экологичен, что делает его безопасным для использования в домах с маленькими детьми.\r\n<br>\r\nТакой стол легко впишется в любое пространство благодаря своей многофункциональности. Он не требует особого ухода в процессе эксплуатации.\r\n<br>\"Длина стола без расширения (см)\r\n120<br>\r\nДлина стола с расширением (см)\r\n120<br>\r\nШирина (см)\r\n60<br>\r\nВысота (см)\r\n75<br>\r\nОсновной материал\r\nМассив сосны<br>\r\nЦвет\r\nБежевый<br>\r\nФорма стола\r\nПрямоугольник<br>\r\nТолщина (мм)\r\n40', 1, 3, 'to0001.jpg', '', 10000, 0, 1200, 750, 600, 0, 'бежевый'),
(9, 'to0002', 'Обеденный стол 2', 'Cтол легко впишется в любое пространство благодаря своей многофункциональности.', 'Столешница и ножки изготовлены из массива ясеня, тщательно отшлифованы и покрыты прозрачным лаком. Материал стола полностью экологичен, что делает его безопасным для использования в домах с маленькими детьми.\r\n<br>\r\nТакой стол легко впишется в любое пространство благодаря своей многофункциональности. Он не требует особого ухода в процессе эксплуатации.', 1, 3, 'to0002.jpg', '', 28000, 0, 900, 740, 600, 0, '');

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
-- Индексы таблицы `products_box`
--
ALTER TABLE `products_box`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_chairs`
--
ALTER TABLE `products_chairs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_restaurant`
--
ALTER TABLE `products_restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_stands`
--
ALTER TABLE `products_stands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_stools`
--
ALTER TABLE `products_stools`
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
-- AUTO_INCREMENT для таблицы `products_box`
--
ALTER TABLE `products_box`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `products_chairs`
--
ALTER TABLE `products_chairs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products_restaurant`
--
ALTER TABLE `products_restaurant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `products_stands`
--
ALTER TABLE `products_stands`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `products_stools`
--
ALTER TABLE `products_stools`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `products_tables`
--
ALTER TABLE `products_tables`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
