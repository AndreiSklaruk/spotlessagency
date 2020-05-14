-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Хост: 45.40.156.6:3311
-- Время создания: Апр 23 2020 г., 18:58
-- Версия сервера: 5.6.32
-- Версия PHP: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- База данных: `wgq641809654428`
--

-- --------------------------------------------------------

--
-- Структура таблицы `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` VALUES(13191, 11, 0);
INSERT INTO `wp_term_relationships` VALUES(13193, 83, 0);
INSERT INTO `wp_term_relationships` VALUES(13194, 9, 0);
INSERT INTO `wp_term_relationships` VALUES(13195, 9, 0);
INSERT INTO `wp_term_relationships` VALUES(13196, 9, 0);
INSERT INTO `wp_term_relationships` VALUES(13198, 9, 0);
INSERT INTO `wp_term_relationships` VALUES(13259, 9, 0);
INSERT INTO `wp_term_relationships` VALUES(13269, 9, 0);
INSERT INTO `wp_term_relationships` VALUES(13272, 9, 0);
INSERT INTO `wp_term_relationships` VALUES(13318, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(13318, 20, 0);
INSERT INTO `wp_term_relationships` VALUES(13329, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(13329, 18, 0);
INSERT INTO `wp_term_relationships` VALUES(13336, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13336, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13345, 20, 0);
INSERT INTO `wp_term_relationships` VALUES(13345, 29, 0);
INSERT INTO `wp_term_relationships` VALUES(13354, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13354, 29, 0);
INSERT INTO `wp_term_relationships` VALUES(13361, 20, 0);
INSERT INTO `wp_term_relationships` VALUES(13361, 29, 0);
INSERT INTO `wp_term_relationships` VALUES(13367, 20, 0);
INSERT INTO `wp_term_relationships` VALUES(13371, 20, 0);
INSERT INTO `wp_term_relationships` VALUES(13376, 18, 0);
INSERT INTO `wp_term_relationships` VALUES(13376, 29, 0);
INSERT INTO `wp_term_relationships` VALUES(13382, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13400, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(13405, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13423, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13444, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(13451, 29, 0);
INSERT INTO `wp_term_relationships` VALUES(13458, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13464, 29, 0);
INSERT INTO `wp_term_relationships` VALUES(13469, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13475, 29, 0);
INSERT INTO `wp_term_relationships` VALUES(13482, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13489, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13495, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13502, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13508, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13512, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(13518, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13544, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13550, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13562, 18, 0);
INSERT INTO `wp_term_relationships` VALUES(13569, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13576, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13586, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13596, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13620, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13632, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13649, 29, 0);
INSERT INTO `wp_term_relationships` VALUES(13653, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13673, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(13687, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(13704, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(13715, 18, 0);
INSERT INTO `wp_term_relationships` VALUES(13726, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(13861, 9, 0);
INSERT INTO `wp_term_relationships` VALUES(14335, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(14393, 9, 0);
INSERT INTO `wp_term_relationships` VALUES(14394, 9, 0);
INSERT INTO `wp_term_relationships` VALUES(14395, 9, 0);
INSERT INTO `wp_term_relationships` VALUES(14425, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(14449, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(14457, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(14486, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(14495, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(14508, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(14643, 83, 0);
INSERT INTO `wp_term_relationships` VALUES(14646, 83, 0);
INSERT INTO `wp_term_relationships` VALUES(14650, 83, 0);
INSERT INTO `wp_term_relationships` VALUES(14653, 83, 0);
INSERT INTO `wp_term_relationships` VALUES(14657, 83, 0);
INSERT INTO `wp_term_relationships` VALUES(14659, 83, 0);
INSERT INTO `wp_term_relationships` VALUES(14665, 85, 0);
INSERT INTO `wp_term_relationships` VALUES(14667, 85, 0);
INSERT INTO `wp_term_relationships` VALUES(14669, 85, 0);
INSERT INTO `wp_term_relationships` VALUES(14671, 84, 0);
INSERT INTO `wp_term_relationships` VALUES(14673, 84, 0);
INSERT INTO `wp_term_relationships` VALUES(14675, 84, 0);
INSERT INTO `wp_term_relationships` VALUES(14677, 86, 0);
INSERT INTO `wp_term_relationships` VALUES(14679, 86, 0);
INSERT INTO `wp_term_relationships` VALUES(14681, 86, 0);
INSERT INTO `wp_term_relationships` VALUES(15041, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(15056, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(15063, 20, 0);
INSERT INTO `wp_term_relationships` VALUES(15072, 20, 0);
INSERT INTO `wp_term_relationships` VALUES(15078, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(15084, 20, 0);
INSERT INTO `wp_term_relationships` VALUES(15090, 20, 0);
INSERT INTO `wp_term_relationships` VALUES(15094, 20, 0);
INSERT INTO `wp_term_relationships` VALUES(15100, 20, 0);
INSERT INTO `wp_term_relationships` VALUES(15199, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(15209, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(15231, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(15254, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(15277, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(15277, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(15278, 25, 0);
INSERT INTO `wp_term_relationships` VALUES(15278, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(15279, 17, 0);
INSERT INTO `wp_term_relationships` VALUES(15279, 26, 0);
INSERT INTO `wp_term_relationships` VALUES(15303, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15325, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15348, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15374, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15379, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15389, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15397, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15402, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15415, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15429, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15434, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15438, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15442, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15448, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15456, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15460, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15465, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15471, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15476, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15483, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15494, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15501, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15508, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15512, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15519, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15523, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15527, 1, 0);
INSERT INTO `wp_term_relationships` VALUES(15549, 29, 0);
INSERT INTO `wp_term_relationships` VALUES(15564, 29, 0);
INSERT INTO `wp_term_relationships` VALUES(15577, 26, 0);
