-- MySQL dump 10.13  Distrib 5.5.40, for Win32 (x86)
--
-- Host: localhost    Database: phplyb
-- ------------------------------------------------------
-- Server version	5.5.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'zhonghua','iotzzh');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leavewords`
--

DROP TABLE IF EXISTS `leavewords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leavewords` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `qq` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `homepage` varchar(50) DEFAULT NULL,
  `face` varchar(50) DEFAULT NULL,
  `leave_title` varchar(50) DEFAULT NULL,
  `leave_contents` text,
  `leave_time` datetime DEFAULT NULL,
  `ip` varchar(20) NOT NULL DEFAULT '',
  `is_audit` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=gb2312;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leavewords`
--

LOCK TABLES `leavewords` WRITE;
/*!40000 ALTER TABLE `leavewords` DISABLE KEYS */;
INSERT INTO `leavewords` VALUES (26,'ee',12343444,'234@qq.com','http://dddd','1','ddddd','ddddddd','2016-04-24 22:31:17','::1',1),(28,'dddd',2147483647,'3333@.ddd.ck','http://','4','dddd','ddddd','2016-04-29 23:27:44','::1',1),(29,'测试1',9999,'39399@qq.com','http://hehhe ','2','heheh ','yindn diij dj jd j dj jd ','2016-05-01 00:03:25','::1',1),(30,'dddd',33333,'39399@qq.com','http://','5','ddd','dsfffffffffff','2016-05-01 00:03:49','::1',1),(31,'ddddd',33333,'39399@qq.com','http://','6','dddvvbv','adfffffffffffffff','2016-05-01 00:04:26','::1',1),(32,'ddddd',33333,'39399@qq.com','http://','6','dddd','fffddsaas','2016-05-01 00:04:47','::1',1),(33,'测试1・',555222,'333@qq.co','http://','2','测试1','测试1','2016-05-03 20:18:14','::1',1),(34,'测试2',9399,'3333@qq.com','http://','3','测试2','测试2','2016-05-03 20:18:58','::1',1),(35,'测试3',2523,'333@qq.com','http://','7','测试3','测试3','2016-05-03 20:50:11','::1',1),(36,'测试4',3456778,'20393@qq.com','http://','2','测试4','测试4','2016-05-03 20:50:46','::1',1),(37,'测试5',526355,'52655@qq.com','http://','1','测试5','测试5','2016-05-03 20:51:37','::1',1),(38,'一只小苹果',55865,'5565@ss.com','http://','1','哦买噶','我吃着苹果看着博客，看着看着，苹果吃完了，还是没看完。。。','2016-05-10 19:08:02','::1',1),(39,'小飞蛾',42688,'455wer@.fghh','http://','2','没看到想看的','我找不到重点啊','2016-05-10 19:09:39','::1',1),(40,'疯子',126574,'15@.iuytgv','http://','4','我就喜欢说实话','怎么样，我就是一个疯子','2016-05-10 19:10:50','::1',1),(42,'美国小兵',855221,'418@.ertg','http://','6','我是美国人','我欣赏你，你懂的','2016-05-10 19:12:44','::1',1),(43,'中国人',6532512,'3685485@qq.com','http://www.iotzzh.com','7','界面设计','问了几个人，除了站长自己觉得界面设计还不错意外，最好的评价就是还可以……','2016-05-10 19:38:57','::1',1);
/*!40000 ALTER TABLE `leavewords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lockip`
--

DROP TABLE IF EXISTS `lockip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lockip` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `lockip` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=gb2312;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lockip`
--

LOCK TABLES `lockip` WRITE;
/*!40000 ALTER TABLE `lockip` DISABLE KEYS */;
INSERT INTO `lockip` VALUES (10,'');
/*!40000 ALTER TABLE `lockip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reply` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `leaveid` int(10) DEFAULT NULL,
  `leaveuser` varchar(10) DEFAULT NULL,
  `reply_contents` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=gb2312;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reply`
--

LOCK TABLES `reply` WRITE;
/*!40000 ALTER TABLE `reply` DISABLE KEYS */;
INSERT INTO `reply` VALUES (8,9,'管理员','已测试完成！'),(9,8,'管理员','恩，好的，谢谢！'),(10,4,'管理员','呵呵，谢谢！'),(11,5,'管理员','请多多指教！'),(17,28,'管理员','点点滴滴点点滴滴'),(18,26,'管理员','cccccc'),(19,32,'管理员','ceshi1'),(20,34,'管理员','测试2'),(21,33,'管理员','测试1'),(22,43,'管理员','好吧……我会改善的……'),(23,42,'管理员','暂无回复内容'),(24,40,'管理员','有点儿……');
/*!40000 ALTER TABLE `reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system`
--

DROP TABLE IF EXISTS `system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system` (
  `name` varchar(225) DEFAULT NULL COMMENT '网站名称',
  `title` varchar(225) DEFAULT NULL COMMENT '标题',
  `keywords` varchar(225) DEFAULT NULL COMMENT '关键字',
  `smalltext` varchar(225) DEFAULT NULL COMMENT 'smalltext',
  `url` varchar(80) DEFAULT NULL COMMENT '网站地址',
  `page` int(11) DEFAULT '5',
  `is_audit` int(11) DEFAULT '0',
  `is_html` int(11) DEFAULT '0',
  `copyright` text COMMENT '版权信息'
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system`
--

LOCK TABLES `system` WRITE;
/*!40000 ALTER TABLE `system` DISABLE KEYS */;
INSERT INTO `system` VALUES ('中华博客','中华博客','中华博客','中华博客','http://www.iotzzh.com',5,1,1,'版权所有：您的网站名称 Copyright@2016-2016.5ALL Rights Reserved');
/*!40000 ALTER TABLE `system` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-10 21:02:47
