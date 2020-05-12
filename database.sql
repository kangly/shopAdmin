# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.19-log)
# Database: shop
# Generation Time: 2020-05-03 14:37:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table shop_admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_admin`;

CREATE TABLE `shop_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员表id',
  `username` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '邮箱',
  `mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `nickname` varchar(50) NOT NULL DEFAULT '' COMMENT '昵称',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态,默认0正常,1禁用',
  `login_ip` varchar(15) NOT NULL DEFAULT '' COMMENT '最后登录ip',
  `login_time` datetime DEFAULT NULL COMMENT '最后登录时间',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `shop_admin` WRITE;
/*!40000 ALTER TABLE `shop_admin` DISABLE KEYS */;

INSERT INTO `shop_admin` (`id`, `username`, `email`, `mobile`, `nickname`, `password`, `state`, `login_ip`, `login_time`, `create_time`)
VALUES
	(1,'admin','371976974@qq.com','15230116812','小康','e19d5cd5af0378da05f63f891c7467af',0,'127.0.0.1','2020-05-03 22:36:28','2020-05-02 10:19:28');

/*!40000 ALTER TABLE `shop_admin` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table shop_product
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_product`;

CREATE TABLE `shop_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品表id',
  `title` varchar(100) NOT NULL COMMENT '名称',
  `desc` text NOT NULL COMMENT '描述',
  `image` varchar(255) NOT NULL COMMENT '封面图片',
  `is_sale` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否上架',
  `sold_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '销量',
  `review_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评论数',
  `price` decimal(10,2) NOT NULL COMMENT '单价',
  `created_time` timestamp NOT NULL COMMENT '创建时间',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后更新时间',
  PRIMARY KEY (`id`),
  KEY `idx_title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table shop_product_sku
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_product_sku`;

CREATE TABLE `shop_product_sku` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品sku表id',
  `product_id` int(10) unsigned NOT NULL COMMENT '商品表id',
  `title` varchar(100) NOT NULL COMMENT 'sku名称',
  `desc` varchar(200) NOT NULL COMMENT 'sku描述',
  `price` decimal(10,2) NOT NULL COMMENT '单价',
  `stock` int(10) unsigned NOT NULL COMMENT '库存',
  `created_time` timestamp NOT NULL COMMENT '创建时间',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后更新时间',
  PRIMARY KEY (`id`),
  KEY `idx_product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;