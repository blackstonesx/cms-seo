-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 01-12-2009 a las 00:12:26
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `gcontent`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `contenidos`
-- 

CREATE TABLE `contenidos` (
  `id` int(10) NOT NULL auto_increment,
  `titulo` varchar(10) NOT NULL,
  `contenido` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `contenidos`
-- 

INSERT INTO `contenidos` VALUES (1, 'my page', 'ahora si quedo mejor, mi page eh!!');
INSERT INTO `contenidos` VALUES (2, 'nuestra p', 'ahora si quedo!!!');
