/*
SQLyog 企业版 - MySQL GUI v8.14 
MySQL - 5.6.17 : Database - blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `blog`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cuid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '作者id',
  `cid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '文章类id',
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '文章标题',
  `content` longtext COLLATE utf8_unicode_ci COMMENT '文章内容',
  `ctime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建日期',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '文章状态',
  `readnum` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '阅读次数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `class` */

DROP TABLE IF EXISTS `class`;

CREATE TABLE `class` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `class` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '类别名',
  `ctime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '类别创建时间',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '状态：0为启用1启用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '文章id',
  `euid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '评论人id',
  `comment` text COLLATE utf8_unicode_ci COMMENT '评论',
  `ctime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '评论时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `read_log` */

DROP TABLE IF EXISTS `read_log`;

CREATE TABLE `read_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '文章id',
  `ip` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '访客ip',
  `ctime` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '访问时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'email地址',
  `kidname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '笔名,账号',
  `password` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '密码',
  `user` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '用户名',
  `age` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '年龄',
  `gender` smallint(2) unsigned NOT NULL DEFAULT '1' COMMENT '性别：1男，2女',
  `job` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '职业',
  `birth` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '生日',
  `live_province` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '现居住地：省',
  `live_city` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '现居住地：市',
  `ht_province` varchar(64) CHARACTER SET utf8 DEFAULT NULL COMMENT '家乡：省',
  `ht_city` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '家乡：市',
  `persign` varchar(125) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '个人签名',
  `headpic` varchar(125) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '个人头像',
  `ctime` int(11) unsigned DEFAULT '0' COMMENT '创建时间',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '状态:1正常，0禁用',
  `logip` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '登陆IP',
  `lastlog` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '最后登陆时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
