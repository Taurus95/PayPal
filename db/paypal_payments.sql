-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-06-2019 a las 15:43:44
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `csolu4_clientes_andres`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paypal_payments`
--

DROP TABLE IF EXISTS `paypal_payments`;
CREATE TABLE `paypal_payments` (
  `id` int(11) NOT NULL,
  `item_no` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `transaccion_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `payment_amount` float(10,2) NOT NULL,
  `currency_code` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paypal_payments`
--
ALTER TABLE `paypal_payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paypal_payments`
--
ALTER TABLE `paypal_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
