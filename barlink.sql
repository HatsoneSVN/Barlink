-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2021 a las 15:59:21
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barlink`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `id_loc` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `id_loc`, `img`) VALUES
(1, 1, 'img_Muna/img_muna_1.jpg'),
(2, 1, 'img_Muna/img_muna_2.jpg'),
(3, 2, 'img_7Sillas/img_7Sillas_1.jpg'),
(4, 3, 'img_DonJaime/img_donJaime_1.jpg'),
(5, 4, 'img_LaCatedral/img_LaCatedral_1.jpg'),
(6, 4, 'img_LaCatedral/img_LaCatedral_2.jpg'),
(7, 4, 'img_LaCatedral/img_LaCatedral_3.jpg'),
(8, 5, 'img_Venecia/img_venecia_1.jpg'),
(9, 6, 'img/img_LaCasona_1.jpg'),
(10, 7, 'img/img_Bodeguilla_1.jpg'),
(11, 8, 'img/img_Mencia_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locales`
--

CREATE TABLE `locales` (
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tlf` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL,
  `pizzeria` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caffe` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `espanyol` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carne` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `italiano` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `com_rapida` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mediterraneo` varchar(3) DEFAULT NULL,
  `bar` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pub` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `japones` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `restaurante` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `locales`
--

INSERT INTO `locales` (`name`, `direccion`, `created_at`, `updated_at`, `tlf`, `precio`, `calificacion`, `pizzeria`, `caffe`, `espanyol`, `carne`, `italiano`, `com_rapida`, `mediterraneo`, `bar`, `pub`, `japones`, `id`, `img`, `restaurante`) VALUES
('Restaurante Muna', 'Calle de Gil y Carrasco 25, 24401 Ponferrada España', '0000-00-00 00:00:00', NULL, '693 76 23 ', 3, 3, 'no', 'no', 'si', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 1, 'img/img_Muna/img_muna_1.jpg', 'si'),
('Restaurante 7 Sillas', 'Plaza del Ayuntamiento 7, \r\n    24401 Ponferrada España', NULL, NULL, '987 42 94 ', 3, 2, 'no', 'no', 'si', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 2, 'img/img_7Sillas/img_7Sillas_1.jpg', 'si'),
('Don Jaime', 'Plaza Republica Argentina, 24400 Ponferrada España', NULL, NULL, '987 01 22 ', 3, 4, 'no', 'no', 'si', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 3, 'img/img_DonJaime/img_donjaime_1.jpg', 'si'),
('La Central', 'Avenida de La Libertad 46, 24404 Ponferrada España', NULL, NULL, '987 03 93 ', 1, 5, 'no', 'no', 'si', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 4, 'img/img_LaCentral/img_LaCentral_1.jpg', 'si'),
('Venecia Steakhouse', 'Avenida Portugal 79 Calle Cuenca sn, 24403 Ponferrada España', NULL, NULL, '987 41 11 ', 2, 3, 'no', 'no', 'si', 'si', 'no', 'no', 'si', 'no', 'no', 'no', 5, 'img/img_Venecia/img_venecia_1.jpg', 'si'),
('Restaurante La Casona', '\r\nC/ Real 72. Fuentes nuevas, 24411 Ponferrada España', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '987 45 53 ', 2, 4, 'no', 'no', 'si', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 6, 'img/img_LaCasona/img_LaCasona_1.jpg', 'si'),
('La Bodeguilla\r\n', '\r\nPlaza de Fernando Miranda Nº5, Ponferrada España', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '653 98 07 ', 2, 5, 'no', 'no', 'si', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 7, 'img/img_Bodeguilla/img_Bodeguilla_1.jpg', 'si'),
('Restaurante Mencía', '\r\nCalle Nicolas de Brujas 14, 24401 Ponferrada España', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '637 85 11 ', 2, 3, 'no', 'no', 'si', 'no', 'no', 'no', 'si', 'no', 'no', 'no', 8, 'img/img_Mencia/img_Mencia_1.jpg', 'si'),
('Zorebi', '\r\nCalle Ancha 4 Frente entrada parking Ayuntamiento, 24401 Ponferrada España', NULL, NULL, '667 97 01 ', 1, 3, 'no', 'no', 'si', 'no', 'no', 'no', 'no', 'si', 'no', 'no', 14, 'img/img_Zorebi/img_zorebi_1.jpg', 'si'),
('4 Bocas', '\r\nPlaza Virgen de La Encina 4, 24401 Ponferrada España', NULL, NULL, ' 648 24 43', 1, 4, 'no', 'no', 'si', 'si', 'no', 'no', 'no', 'si', 'no', 'no', 15, 'img/img_4Bocas/img_4bocas_1.jpg', 'si'),
(' Destileria', '\r\nCalle del Obispo Osmundo Nº 5, 24401 Ponferrada España', NULL, NULL, '987 40 42 ', 1, 4, 'no', 'no', 'si', 'no', 'no', 'si', 'no', 'si', 'si', 'no', 16, 'img/img_Destileria/img_destileria_1.jpg', 'si'),
('Coherencia Ecobar', '\r\nCalle Tras Cl Ayuntamiento, 24401 Ponferrada España', NULL, NULL, '679 38 71 ', 3, 4, 'no', 'si', 'si', 'no', 'no', 'no', 'no', 'si', 'si', 'no', 17, 'img/img_Coherencia/img_coherencia_1.jpg', 'si'),
('Gatopardo Gastrobar', 'Calle Satunino Cachon nº14, 24401 Ponferrada España', NULL, NULL, '987 17 48 ', 3, 4, 'no', 'no', 'si', 'no', 'no', 'no', 'si', 'si', 'si', 'no', 18, 'img/img_Gatopardo/img_gatopardo_1.jpg', 'si'),
('La Cañería', '\r\nCalle Ancha 2 En la Plaza Tierno Galván, 24401 Ponferrada España', NULL, NULL, '629 83 70 ', 2, 3, 'no', 'si', 'no', 'no', 'no', 'no', 'no', 'si', 'si', 'no', 19, 'img/img_Cañeria/img_cañeria_1.jpg', 'si'),
('Rosita Milagros', 'Calle Joaquin Soler Serrano 2, 24404 Ponferrada España', NULL, NULL, '987 03 37 ', 1, 4, 'no', 'no', 'no', 'si', 'no', 'no', 'no', 'si', 'no', 'no', 20, 'img/img_Rosita/img_rosita_1.jpg', 'si'),
('Albergue Valle de Fornela', '\r\nC/Cuento s/n Fornela, 24429 Ponferrada España', NULL, NULL, '987 19 93 ', 3, 5, 'no', 'no', 'si', 'si', 'no', 'no', 'no', 'si', 'si', 'no', 21, 'img/img_Fornela/img_fornela_1.jpg', 'si'),
('Trastevere', 'Calle Reloj, 6, 24401 Ponferrada, León', NULL, NULL, '987 41 90 ', 2, 4, 'si', 'no', 'si', 'no', 'si', 'si', 'si', 'is', 'no', 'no', 22, 'img/img_Trastevere/img_trastevere_1.jpg', 'si'),
('Mamma Mia', 'Calle Matilde Conesa, 10, 24404 Ponferrada, León', NULL, NULL, '987 04 04 ', 3, 4, 'si', 'no', 'no', 'no', 'si', 'si', 'si', 'no', 'no', 'no', 23, 'img/img_mamaMia/img_MamaMia_1.jpg', 'si'),
('La Torre De Pizza', ' Av. España, 35, 24402 Ponferrada, León', NULL, NULL, ' 987 42 44', 1, 3, 'si', 'no', 'no', 'no', 'si', 'si', 'si', 'no', 'no', 'no', 24, 'img/img_TorrePizza/img_TorrePizza_1.jpg', 'si'),
('La Capricciosa', 'Plaza Virgen de la Encina Bajo nº1, 24401 Ponferrada, León', NULL, NULL, '987 49 75 ', 1, 4, 'si', 'no', 'no', 'no', 'si', 'si', 'si', 'no', 'no', 'no', 25, 'img/img_Capricciosa/img_Capricciosa_1.jpg', 'si'),
('Hamaki', ' Hornos s/n. Mercado de Abastos, Local 71, 24402 Ponferrada', NULL, NULL, '672 34 52 ', 1, 5, 'no', 'no', 'no', 'si', 'no', 'si', 'no', 'no', 'no', 'si', 26, 'img/img_Hamaki/img_Hamaki_1.jpg', 'si'),
('Sibuya Urban Sushi Bar', 'Plaza Tierno Galván, 1, 24400 Ponferrada, León', NULL, NULL, '987 03 39 ', 3, 4, 'no', 'no', 'no', 'si', 'no', 'si', 'si', 'is', 'no', 'si', 27, 'img/img_Sibuya/img_Sibuya_1.jpg', 'si'),
('Wok Hd', 'Calle Msp, 4, 24400 Ponferrada, León', NULL, NULL, ' 987 40 75', 2, 4, 'no', 'no', 'no', 'si', 'no', 'si', 'si', 'no', 'no', 'si', 28, 'img/img_Wok/img_Wok_1.jpg', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_06_184057_locales', 1),
(5, '2021_03_07_173451_cambiar_propiedades_to_locales_table', 1),
(6, '2021_03_07_200034_add_created_at_to_locales_table', 1),
(7, '2021_03_07_200143_add_updated_at_to_locales_table', 1),
(8, '2021_03_31_231257_add_imagen_to_locales_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opiniones`
--

CREATE TABLE `opiniones` (
  `id_op` int(11) NOT NULL,
  `opinion` text DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `id_us` int(11) DEFAULT NULL,
  `id_loc` int(11) DEFAULT NULL,
  `calificaciones` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `opiniones`
--

INSERT INTO `opiniones` (`id_op`, `opinion`, `titulo`, `id_us`, `id_loc`, `calificaciones`, `precio`) VALUES
(1, 'safd', 'dsff', 1, 4, NULL, NULL),
(2, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(3, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(4, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(5, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(6, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(7, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(8, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(9, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(10, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(11, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(12, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(13, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(14, 'primera opinion', 'TItulo de la primera op', 1, 4, NULL, NULL),
(15, 'esta bien', 'esta buien', 1, 4, NULL, NULL),
(16, 'esta bien', 'esta buien', 1, 4, NULL, NULL),
(17, 'esta bien', 'esta buien', 1, 4, NULL, NULL),
(18, 'esta bien', 'esta buien', 1, 4, NULL, NULL),
(19, 'esta bien', 'esta buien', 1, 4, NULL, NULL),
(20, '', '', 4, 1, NULL, NULL),
(21, 'esta bien', 'esta buien', 1, 4, 5, 1),
(22, 'esta bien', 'esta buien', 1, 4, 5, 1),
(23, 'esta bien', 'esta buien', 1, 4, 5, 1),
(24, 'esta bien', 'esta buien', 1, 4, 5, 1),
(25, 'esta bien', 'esta buien', 1, 4, 5, 1),
(26, 'esta bien', 'esta buien', 1, 4, 5, 1),
(27, 'esta bien', 'esta buien', 1, 4, 5, 1),
(28, 'esta bien', 'esta buien', 1, 4, 5, 1),
(29, 'esta bien', 'esta buien', 1, 4, 5, 1),
(30, 'esta bien', 'esta buien', 1, 4, 5, 1),
(31, 'esta bien', 'esta buien', 1, 4, 5, 1),
(32, 'esta bien', 'esta buien', 1, 4, 5, 1),
(33, 'esta bien', 'esta buien', 1, 4, 5, 1),
(34, 'esta bien', 'esta buien', 1, 4, 5, 1),
(35, 'esta bien', 'esta buien', 1, 4, 5, 1),
(36, 'esta bien', 'esta buien', 1, 4, 5, 1),
(37, 'esta bien', 'esta buien', 1, 4, 5, 1),
(38, 'esta bien', 'esta buien', 1, 4, 5, 1),
(39, 'esta bien', 'esta buien', 1, 4, 5, 1),
(40, 'esta bien', 'esta buien', 1, 4, 5, 1),
(41, 'esta bien', 'esta buien', 1, 4, 5, 1),
(42, 'esta bien', 'esta buien', 1, 4, 5, 1),
(43, 'esta bien', 'esta buien', 1, 4, 5, 1),
(44, 'esta bien', 'esta buien', 1, 4, 5, 1),
(45, 'esta bien', 'esta buien', 1, 4, 5, 1),
(46, 'esta bien', 'esta buien', 1, 4, 5, 1),
(47, 'esta bien', 'esta buien', 1, 4, 5, 1),
(48, 'esta bien', 'esta buien', 1, 4, 5, 1),
(49, 'esta bien', 'esta buien', 1, 4, 5, 1),
(50, 'esta bien', 'esta buien', 1, 4, 5, 1),
(51, 'esta bien', 'esta buien', 1, 4, 5, 1),
(52, 'esta bien', 'esta buien', 1, 4, 5, 1),
(53, 'esta bien', 'esta buien', 1, 4, 5, 1),
(54, 'esta bien', 'esta buien', 1, 4, 5, 1),
(55, 'esta bien', 'esta buien', 1, 4, 5, 1),
(56, 'esta bien', 'esta buien', 1, 4, 5, 1),
(57, 'esta bien', 'esta buien', 1, 4, 5, 1),
(58, 'esta bien', 'esta buien', 1, 4, 5, 1),
(59, 'esta bien', 'esta buien', 1, 4, 5, 1),
(60, 'esta bien', 'esta buien', 1, 4, 5, 1),
(61, 'esta bien', 'esta buien', 1, 4, 5, 1),
(62, 'esta bien', 'esta buien', 1, 4, 5, 1),
(63, 'esta bien', 'esta buien', 1, 4, 5, 1),
(64, 'esta bien', 'esta buien', 1, 4, 5, 1),
(65, 'esta bien', 'esta buien', 1, 4, 5, 1),
(66, 'esta bien', 'esta buien', 1, 4, 5, 1),
(67, 'esta bien', 'esta buien', 1, 4, 5, 1),
(68, 'esta bien', 'esta buien', 1, 4, 5, 1),
(69, 'esta bien', 'esta buien', 1, 4, 5, 1),
(70, 'esta bien', 'esta buien', 1, 4, 5, 1),
(71, 'esta bien', 'esta buien', 1, 4, 5, 1),
(72, 'esta bien', 'esta buien', 1, 4, 5, 1),
(73, 'esta bien', 'esta buien', 1, 4, 5, 1),
(74, 'esta bien', 'esta buien', 1, 4, 5, 1),
(75, 'dssfsasddf', 'esta buien', 1, 3, 5, 2),
(76, 'dssfsasddf', 'esta buien', 1, 3, 5, 2),
(77, 'dssfsasddf', 'esta buien', 1, 3, 5, 2),
(78, 'dssfsasddf', 'esta buien', 1, 3, 5, 2),
(79, 'dssfsasddf', 'esta buien', 1, 3, 5, 2),
(80, 'dssfsasddf', 'esta buien', 1, 3, 5, 2),
(81, 'dssfsasddf', 'esta buien', 1, 3, 5, 2),
(82, 'vddsfgd', 'dvsvf', 1, 4, 5, 2),
(83, 'vddsfgd', 'dvsvf', 1, 4, 5, 2),
(84, 'sd', 'esta buien', 1, 1, 3, 2),
(85, 'Fui con la familia y me cundió bastante', 'Un bar bastante bueno', 6, 3, 4, 2),
(86, 'Fui con la familia y me cundió bastante', 'Un bar bastante bueno', 6, 3, 4, 2),
(87, 'Fui con la familia y me cundió bastante', 'Un bar bastante bueno', 6, 3, 4, 2),
(88, 'sfasdfadsasfddsaf', 'otra nueva op', 6, 3, 2, 3),
(89, 'sfasdfadsasfddsaf', 'otra nueva op', 6, 3, 2, 3),
(90, 'sfasdfadsasfddsaf', 'otra nueva op', 6, 3, 2, 3),
(91, 'sfasdfadsasfddsaf', 'otra nueva op', 6, 3, 2, 3),
(92, 'd', 'd', 6, 3, 4, 1),
(93, 'd', 'd', 6, 3, 4, 1),
(94, 'd', 'd', 6, 3, 4, 1),
(95, 'd', 'd', 6, 3, 4, 1),
(96, 'd', 'd', 6, 3, 4, 1),
(97, 'd', 'd', 6, 3, 4, 1),
(98, 'cierto es la ultima', 'es la ultima', 6, 3, 1, 1),
(99, 'Todo bien chachi', 'Muy contento', 4, 14, 3, 1),
(100, 'La cejas de paramo mi ma, como come , jesus', 'Fui con la cejas', 4, 14, 5, 2),
(101, 'opinion', 'Titulo', 4, 3, 1, 2),
(102, 'd', 'd', 4, 2, 1, 2),
(103, 'pues muy bien', 'Primera op', 7, 8, 4, 2),
(104, 'hola', 'sitio', 7, 8, 5, 1),
(105, 'bueno', 'bueno', 7, 8, 3, 2),
(106, 'jjj', 'Fui con la cejas', 7, 8, 1, 1),
(107, 'h', 'Primera op', 7, 8, 2, 3),
(108, 'd', 'd', 7, 6, 4, 3),
(109, 'd', 'd', 7, 5, 0, 2),
(110, 'opinion normal de 50 char , para validar correctametne', 'titulo normal', 7, 5, 0, 1),
(111, 'dddddddddddddddddddddddddddddddddddddddddddddddddddd', 'dddddddddddddd', 7, 5, 4, 1),
(112, 'dddddddddddddddddddddddddddddddddddddddddddddddddddd', 'ddddddddddddd', 7, 5, 4, 1),
(113, 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'dddddddddddddddddd', 7, 5, 3, 1),
(114, 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'holaaaaaaaaaa', 8, 15, 3, 2),
(119, '', '', 11, 25, 4, 1),
(120, '', '', 11, 16, 4, 1),
(121, '', '', 11, 15, 4, 1),
(122, 'dfgdfsgdsfgdfsgdsfgdsfgdsfgdsfggfsdfgdsfgdfgdsfgdsfgdsfgdfsg', 'fdfgdsfgdsfgd', 11, 20, 4, 1),
(123, 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'Fui con la cejas', 11, 23, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('danieljsedgvane24@gmail.com', '$2y$10$o.hesqBxQYmwm/HCn1jV6eRkhZKvICkOvYS6faVKi/ag6cEIg9gmm', '2021-05-03 17:09:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_op` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `id_op`) VALUES
(1, 'daniel', 'danieljsedgvane24@gmail.com', NULL, '$2y$10$8hTcWN9YNB6UNZVZ4Hd54OxwtjczHwqC7VuWrUrVPSIadV/u7VOiG', NULL, '2021-04-28 16:23:45', '2021-04-28 16:23:45', NULL),
(2, 'aleatorio', 'sdfafsd@gmail.com', NULL, '$2y$10$zQDv4iL.sMvFR7v6FwgUbOK9IS/JInQ/zR.WpKWGGOBN3.7SZ0.oC', NULL, '2021-05-11 16:11:08', '2021-05-11 16:11:08', NULL),
(3, 'NUEVO', 'NUEVO@gmail.com', NULL, '$2y$10$9xbRDSfqiMj3spgC3Ej2bOyjLh48wHwW0lBT/IzwLs8a9IEMyK7P2', NULL, '2021-05-13 15:32:17', '2021-05-13 15:32:17', NULL),
(4, 'ines', 'ines@gmail.com', NULL, '$2y$10$0TKYjz070eFshq7mosCIcuiVxKZVGdeq/YVAgGp/I86gLqV9epHyq', NULL, '2021-05-15 08:37:27', '2021-05-15 08:37:27', NULL),
(5, 'jorge', 'jorge@gmail.com', NULL, '$2y$10$aOLxXwArEtsLc5KPz2Sc0.yFuUl5hvn9H5j5iiFX2TDrLHnjRBc0G', NULL, '2021-05-17 16:29:25', '2021-05-17 16:29:25', NULL),
(6, 'otrroUsuario', 'otrroUsuario@gmail.com', NULL, '$2y$10$hC04HUlX2DMKurHJUiqoR.sii2BE7RQ3dGO6IIU59InvbJN0j7tSO', NULL, '2021-05-19 14:30:56', '2021-05-19 14:30:56', NULL),
(7, 'angy', 'angy@gmail.com', NULL, '$2y$10$LXrPo3Xg97dIAFNoSJ5sHetHDq5I7wFrr/zjSFjSC/uFqQkiW5wlG', NULL, '2021-05-22 15:20:55', '2021-05-22 15:20:55', NULL),
(8, 'cristina jáñez', 'cristinaparamo03@gmail.com', NULL, '$2y$10$XM1y7amjumM3s5oxPjNrN.tThTrDu284GueYisSs40SUNzcwCCA6C', NULL, '2021-05-23 15:24:12', '2021-05-23 15:24:12', NULL),
(9, 'Tutor', 'tutor@gmail.com', NULL, '$2y$10$IfLcXvVBTWYDV4RufPBa0OjJaxqik9E7wAzjjuV3IKbjI269CFlC6', NULL, '2021-05-27 08:19:06', '2021-05-27 08:19:06', NULL),
(10, 'tutorP', 'tutorP@gmail.com', NULL, '$2y$10$e0dKN7kvb4hwmXfjG.L/bOrFYmliqLDlgoLFo61tnBAqN76OXKr0O', NULL, '2021-05-27 08:29:57', '2021-05-27 08:29:57', NULL),
(11, 'Us', 'Us@gmail.com', NULL, '$2y$10$PluAmNE.9/CWFT7yTuPYRuhFMZ2iHOIST7YFtZdRZJQnyqFntvQsy', NULL, '2021-05-28 12:07:54', '2021-05-28 12:07:54', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_loc` (`id_loc`);

--
-- Indices de la tabla `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  ADD PRIMARY KEY (`id_op`),
  ADD KEY `id_loc` (`id_loc`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `locales`
--
ALTER TABLE `locales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `fk_id_loc` FOREIGN KEY (`id_loc`) REFERENCES `locales` (`id`);

--
-- Filtros para la tabla `opiniones`
--
ALTER TABLE `opiniones`
  ADD CONSTRAINT `opiniones_ibfk_1` FOREIGN KEY (`id_loc`) REFERENCES `locales` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
