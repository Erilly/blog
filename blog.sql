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
  `uid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '作者id',
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '文章标题',
  `content` longtext COLLATE utf8_unicode_ci COMMENT '文章内容',
  `ctime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建日期',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '文章状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `commen` */

DROP TABLE IF EXISTS `commen`;

CREATE TABLE `commen` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `commen` text COLLATE utf8_unicode_ci COMMENT '评论内容',
  `good` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '被赞次数',
  `ctime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '评论日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `commen_ship` */

DROP TABLE IF EXISTS `commen_ship`;

CREATE TABLE `commen_ship` (
  `aid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '文章id',
  `cid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '评论id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `discuss` */

DROP TABLE IF EXISTS `discuss`;

CREATE TABLE `discuss` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `discuss` text COLLATE utf8_unicode_ci COMMENT '回复内容',
  `ctime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '回复时间',
  `good` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '被赞次数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `discuss_ship` */

DROP TABLE IF EXISTS `discuss_ship`;

CREATE TABLE `discuss_ship` (
  `cid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'comment的id',
  `did` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'discuss的id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `follow_ship` */

DROP TABLE IF EXISTS `follow_ship`;

CREATE TABLE `follow_ship` (
  `uid` int(11) DEFAULT '0' COMMENT '用户id',
  `fid` int(11) DEFAULT '0' COMMENT '关注用户id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
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
  `perdesc` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '暂未添加。' COMMENT '个人描述',
  `headpic` varchar(125) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '个人头像',
  `ctime` int(11) unsigned DEFAULT '0' COMMENT '创建时间',
  `status` smallint(2) unsigned NOT NULL DEFAULT '1' COMMENT '状态:1正常，0禁用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
