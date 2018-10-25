# Host: localhost  (Version: 5.5.53)
# Date: 2018-10-25 16:57:31
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "l_action"
#

DROP TABLE IF EXISTS `l_action`;
CREATE TABLE `l_action` (
  `action_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `controller` varchar(20) NOT NULL COMMENT '控制器',
  `action` varchar(20) DEFAULT NULL COMMENT '行为方法',
  `action_name` varchar(20) NOT NULL COMMENT '行为名',
  `parent_id` int(10) unsigned DEFAULT '0' COMMENT '上级ID',
  `commonand` varchar(10) DEFAULT NULL COMMENT '通用行为字符串eg: add新增 del删除 update修改 select 查询',
  PRIMARY KEY (`action_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='行为表';

#
# Data for table "l_action"
#

/*!40000 ALTER TABLE `l_action` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_action` ENABLE KEYS */;

#
# Structure for table "l_role"
#

DROP TABLE IF EXISTS `l_role`;
CREATE TABLE `l_role` (
  `role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_class` tinyint(1) unsigned DEFAULT '0' COMMENT '角色类别',
  `action_id` varchar(255) DEFAULT NULL COMMENT '行为ID',
  PRIMARY KEY (`role_id`),
  KEY `action_id` (`action_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='角色表';

#
# Data for table "l_role"
#

/*!40000 ALTER TABLE `l_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_role` ENABLE KEYS */;

#
# Structure for table "l_user"
#

DROP TABLE IF EXISTS `l_user`;
CREATE TABLE `l_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `salt` varchar(8) NOT NULL COMMENT '混淆字符',
  `email` varchar(100) DEFAULT NULL COMMENT '邮箱',
  `wechat` varchar(100) DEFAULT NULL COMMENT '微信',
  `phone` bigint(11) unsigned DEFAULT NULL COMMENT '手机号',
  `sex` tinyint(1) unsigned DEFAULT '0' COMMENT '性别0保密1男2女',
  `birthday` varchar(10) DEFAULT NULL COMMENT '生日yyyy-mm-dd',
  `last_ip` varchar(15) DEFAULT NULL COMMENT '最后登陆IP',
  `last_time` int(10) unsigned DEFAULT NULL COMMENT '最后登陆时间',
  `create_ip` varchar(15) DEFAULT NULL COMMENT '创建用户IP',
  `create_date` int(10) unsigned DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表';

#
# Data for table "l_user"
#

/*!40000 ALTER TABLE `l_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `l_user` ENABLE KEYS */;
