-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Хост: 45.40.156.6:3311
-- Время создания: Апр 23 2020 г., 18:57
-- Версия сервера: 5.6.32
-- Версия PHP: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- База данных: `wgq641809654428`
--

-- --------------------------------------------------------

--
-- Структура таблицы `wp_terms`
--

CREATE TABLE `wp_terms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci AUTO_INCREMENT=87 ;

--
-- Дамп данных таблицы `wp_terms`
--

INSERT INTO `wp_terms` VALUES(1, 'Без рубрики', '%d0%b1%d0%b5%d0%b7-%d1%80%d1%83%d0%b1%d1%80%d0%b8%d0%ba%d0%b8', 0);
INSERT INTO `wp_terms` VALUES(9, 'Main', 'main', 0);
INSERT INTO `wp_terms` VALUES(11, '3D Rendering', '3d-rendering', 0);
INSERT INTO `wp_terms` VALUES(16, 'Gallery', 'post-format-gallery', 0);
INSERT INTO `wp_terms` VALUES(17, 'Spotless Agency', 'spotless-agency', 0);
INSERT INTO `wp_terms` VALUES(18, 'Virtual Staging Statistic', 'virtual-staging-statistic', 0);
INSERT INTO `wp_terms` VALUES(20, '3d rendering', '3d-rendering', 0);
INSERT INTO `wp_terms` VALUES(25, 'Virtual Staging Tips', 'virtual-staging-tips', 0);
INSERT INTO `wp_terms` VALUES(26, 'Tips For Realtors', 'tips-for-realtors', 0);
INSERT INTO `wp_terms` VALUES(29, 'Real Estate Tools', 'real-estate-tools', 0);
INSERT INTO `wp_terms` VALUES(83, 'Virtual Staging', 'virtual-staging', 0);
INSERT INTO `wp_terms` VALUES(84, 'Architectural Visualization', 'architectural-visualization', 0);
INSERT INTO `wp_terms` VALUES(85, 'Floor Plan Visualization', 'floor-plan-visualization', 0);
INSERT INTO `wp_terms` VALUES(86, 'Furniture Renderings', 'furniture-renderings', 0);
