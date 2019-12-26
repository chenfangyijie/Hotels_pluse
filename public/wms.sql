/*
Navicat MySQL Data Transfer

Source Server         : seho
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : wms

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-06-23 21:44:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '');
INSERT INTO `admin` VALUES ('2', 'sehochen', '21232f297a57a5a743894a0e4a801fc3', '');

-- ----------------------------
-- Table structure for finance
-- ----------------------------
DROP TABLE IF EXISTS `finance`;
CREATE TABLE `finance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of finance
-- ----------------------------
INSERT INTO `finance` VALUES ('1', '40', '1561288297');
INSERT INTO `finance` VALUES ('2', '10', '1561288297');
INSERT INTO `finance` VALUES ('3', '12', '1561288297');
INSERT INTO `finance` VALUES ('4', '23', '1561204292');
INSERT INTO `finance` VALUES ('5', '45', '1561031492');
INSERT INTO `finance` VALUES ('6', '100', '1558957892');

-- ----------------------------
-- Table structure for house
-- ----------------------------
DROP TABLE IF EXISTS `house`;
CREATE TABLE `house` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `num` varchar(10) NOT NULL COMMENT '房间号',
  `price` decimal(10,2) NOT NULL COMMENT '价格',
  `type` varchar(10) NOT NULL COMMENT '类型',
  `status` varchar(10) DEFAULT '1' COMMENT '入住状态0有人、1空闲、2待打扫、3维修',
  `storey` varchar(10) DEFAULT NULL COMMENT '楼层',
  `user` varchar(50) DEFAULT NULL COMMENT '入住者姓名',
  `identity` varchar(20) DEFAULT NULL COMMENT '入住者身份证',
  `move_type` varchar(20) DEFAULT NULL COMMENT '入住类型。时长',
  `move_time` varchar(20) DEFAULT NULL COMMENT '入住时间',
  `expire_time` varchar(20) DEFAULT NULL COMMENT '到期时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of house
-- ----------------------------
INSERT INTO `house` VALUES ('53', '601', '600.00', '牛奶', '1', '6', null, null, null, null, null);
INSERT INTO `house` VALUES ('52', '501', '500.00', '大牛', '1', '5', null, null, null, null, null);
INSERT INTO `house` VALUES ('51', '301', '300.00', '3楼单间', '1', '3', null, null, null, null, null);
INSERT INTO `house` VALUES ('49', '202', '210.00', '游戏房', '1', '2', null, null, null, null, null);
INSERT INTO `house` VALUES ('50', '401', '400.00', '看景房', '3', '4', null, null, null, null, null);
INSERT INTO `house` VALUES ('47', '107', '180.00', '双人间', '0', '1', '对对', '330724197010122923', '1', '1561262400', '1561348800');
INSERT INTO `house` VALUES ('48', '108', '190.00', '三人间', '1', '1', null, null, null, null, null);
INSERT INTO `house` VALUES ('46', '106', '170.00', '单人间', '2', '1', null, null, null, null, null);
INSERT INTO `house` VALUES ('44', '104', '150.00', '标准房', '1', '1', null, null, null, null, null);
INSERT INTO `house` VALUES ('54', '105', '161.00', '大', '1', '1', null, null, null, null, null);
INSERT INTO `house` VALUES ('55', '201', '234.00', '2楼房', '2', '2', '', '', '3', '1561089600', '1561352400');
INSERT INTO `house` VALUES ('42', '103', '140.00', '电脑房', '4', '1', '我', '387325199308093039', '3', '1559959200', '1560571200');
INSERT INTO `house` VALUES ('41', '102', '130.00', '标准房', '0', '1', '测试', '330724197010122923', '1', '1561262400', '1561348800');
INSERT INTO `house` VALUES ('40', '101', '120.00', '标准房', '2', '1', '', '', '1', '1561262400', '1561348800');

-- ----------------------------
-- Table structure for jointime
-- ----------------------------
DROP TABLE IF EXISTS `jointime`;
CREATE TABLE `jointime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `num` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jointime
-- ----------------------------
INSERT INTO `jointime` VALUES ('21', '2天房', '2');
INSERT INTO `jointime` VALUES ('20', '6小时房', '0.025');
INSERT INTO `jointime` VALUES ('17', '1天房', '1');
INSERT INTO `jointime` VALUES ('18', '3天房', '3');
INSERT INTO `jointime` VALUES ('15', '午休房', '0.0083333333333333');
INSERT INTO `jointime` VALUES ('16', '半天房', '0.5');

-- ----------------------------
-- Table structure for storey
-- ----------------------------
DROP TABLE IF EXISTS `storey`;
CREATE TABLE `storey` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `num` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of storey
-- ----------------------------
INSERT INTO `storey` VALUES ('1', '1');
INSERT INTO `storey` VALUES ('2', '2');
INSERT INTO `storey` VALUES ('3', '3');
INSERT INTO `storey` VALUES ('4', '4');
INSERT INTO `storey` VALUES ('10', '5');
INSERT INTO `storey` VALUES ('11', '6');
SET FOREIGN_KEY_CHECKS=1;
