/*
Navicat MySQL Data Transfer

Source Server         : 1.-LocalHost
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : bcagro

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-04-13 11:52:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `nosotros_tema`
-- ----------------------------
DROP TABLE IF EXISTS `nosotros_tema`;
CREATE TABLE `nosotros_tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text,
  `observaciones` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nosotros_tema
-- ----------------------------
