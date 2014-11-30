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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `article` */

insert  into `article`(`id`,`cuid`,`cid`,`title`,`content`,`ctime`,`status`,`readnum`) values (1,2,5,'不落的太阳','说的分手分手的放松放松放松对方水电费',333,1,333),(2,2,5,'天蓝蓝','士大夫撒发生法撒旦法师',222,1,222),(3,2,5,'青草香','阿萨德飞洒发撒旦法师',111,1,111);

/*Table structure for table `class` */

DROP TABLE IF EXISTS `class`;

CREATE TABLE `class` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `class` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '类别名',
  `ctime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '类别创建时间',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '状态：0为启用1启用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `class` */

insert  into `class`(`id`,`class`,`ctime`,`status`) values (1,'情感',11,0),(2,'科技',33,0),(3,'旅游',22,0),(4,'军事',55,0),(5,'文化',44,0);

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
  `status` smallint(2) unsigned NOT NULL DEFAULT '1' COMMENT '状态:1正常，0禁用',
  `logip` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '登陆IP',
  `lastlog` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '最后登陆时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`email`,`kidname`,`password`,`user`,`age`,`gender`,`job`,`birth`,`live_province`,`live_city`,`ht_province`,`ht_city`,`persign`,`headpic`,`ctime`,`status`,`logip`,`lastlog`) values (2,'1617507676@qq.com','jack','111','杨杰',20,1,'软件',0,NULL,NULL,NULL,NULL,NULL,NULL,0,1,NULL,0),(3,'1601676@qq.com','aaaa','111111','杨杰',0,1,'计算机/网络',0,'35','0',NULL,'0',NULL,NULL,1417286841,1,NULL,0),(4,'1601676@qq.com','aaaa','111111','杨杰',0,1,'计算机/网络',0,'35','0',NULL,'0',NULL,NULL,1417286859,1,NULL,0),(5,'12111@qq.com','aa','fba19a6a8f1962f8137e759694b5a904','杨杰',0,1,'计算机/网络',0,'23','11',NULL,NULL,NULL,NULL,1417287221,1,NULL,0),(6,'1211231@qq.com','aa','fba19a6a8f1962f8137e759694b5a904','杨杰',0,1,'计算机/网络',336844800,'19','12',NULL,NULL,NULL,NULL,1417287382,1,NULL,0);

/*Table structure for table `user_article` */

DROP TABLE IF EXISTS `user_article`;

CREATE TABLE `user_article` (
  `uid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `aid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '文章id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_article` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
