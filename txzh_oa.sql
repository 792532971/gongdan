# Host: localhost  (Version: 5.5.53)
# Date: 2019-03-18 15:17:59
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "txzh_admin"
#

DROP TABLE IF EXISTS `txzh_admin`;
CREATE TABLE `txzh_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(255) NOT NULL COMMENT '用户账号',
  `nickname` varchar(255) NOT NULL COMMENT '用户昵称',
  `password` varchar(200) NOT NULL COMMENT '用户密码',
  `num` int(20) unsigned NOT NULL COMMENT '编号',
  `minzu` varchar(20) DEFAULT NULL COMMENT '民族',
  `workdate` int(11) DEFAULT NULL COMMENT '入职时间',
  `quitdate` int(11) DEFAULT NULL COMMENT '离职时间',
  `id_card` varchar(30) DEFAULT NULL COMMENT '身份证号',
  `bankname` varchar(50) DEFAULT NULL COMMENT '开户行',
  `banknum` varchar(255) DEFAULT NULL COMMENT '工资卡账号',
  `deptname` varchar(30) DEFAULT NULL COMMENT '部门',
  `ranking` varchar(20) DEFAULT NULL COMMENT '职位',
  `groupid` int(20) unsigned DEFAULT NULL COMMENT '分组',
  `pic` varchar(200) DEFAULT NULL COMMENT '头像',
  `sex` tinyint(2) unsigned DEFAULT NULL COMMENT '性别0=男1=女',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `mobile_tel` varchar(20) DEFAULT NULL COMMENT '移动电话',
  `dep_id` int(10) DEFAULT NULL COMMENT '所属部门id',
  `is_del` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除 0:未删除;1已删除',
  `last_login_ip` varchar(30) DEFAULT NULL COMMENT '最后登录ip',
  `login_count` int(8) DEFAULT '0' COMMENT '登录次数',
  `logout_time` int(11) DEFAULT NULL COMMENT '退出时间',
  `status` tinyint(2) unsigned DEFAULT '0' COMMENT '0正常1禁用2离职',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='用户表';

#
# Data for table "txzh_admin"
#

/*!40000 ALTER TABLE `txzh_admin` DISABLE KEYS */;
INSERT INTO `txzh_admin` VALUES (1,'admin','貂蝉姐姐','ZzdkckhxQTl5ek5PNGZjdnlrbkJjdz09OjqgRu23qL+QmtkVmUEPxt3x',10000,'汉族',1549555200,-28800,'','工商银行','6228480016849841',NULL,'开发主管',1,NULL,1,NULL,'792532666@qq.com','18920233333',1,0,NULL,18,NULL,0),(2,'asdsa','貂蝉妹妹','ZzdkckhxQTl5ek5PNGZjdnlrbkJjdz09OjqgRu23qL+QmtkVmUEPxt3x',123,'dasd',1546876800,1551974400,'','建设银行','1234567894567895689',NULL,'维护主管',2,NULL,1,NULL,'12345@163.com','18900000000',NULL,0,NULL,0,NULL,0),(5,'sadasda','wqeqw','a2k2b01MNzVwRWRVYlJ2RWFtWnYrUT09Ojr4JV5mdd5djiga4hqNCC0h',0,NULL,2019,NULL,'510923199306031753',NULL,NULL,NULL,NULL,2,NULL,0,NULL,'416541@qq.com','15108281915',NULL,0,NULL,0,NULL,1),(6,'sadasda','wqeqw','c0pqZklHd1E1cWRicHFzUDhOcXlMdz09OjrvhATYxb4WgKsvMPpNSogf',0,NULL,2019,NULL,'510923199306031753',NULL,NULL,NULL,NULL,2,NULL,0,NULL,'416541@qq.com','15108281915',NULL,0,NULL,0,NULL,1),(7,'asdas','asdasdas','dDVCMlBQUDZpanczNDg3Y21kRG00dz09Ojqy76CfumGm3Mnmm+6cpb8N',0,NULL,1551715200,NULL,'510923199306031753',NULL,NULL,NULL,NULL,1,NULL,0,NULL,'asdas@qq.com','17608036666',NULL,0,NULL,0,NULL,0);
/*!40000 ALTER TABLE `txzh_admin` ENABLE KEYS */;

#
# Structure for table "txzh_admin_login_log"
#

DROP TABLE IF EXISTS `txzh_admin_login_log`;
CREATE TABLE `txzh_admin_login_log` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `username` varchar(20) DEFAULT NULL COMMENT '登录账号',
  `login_time` int(11) unsigned DEFAULT NULL COMMENT '登录时间',
  `login_ip` int(25) unsigned DEFAULT NULL COMMENT '登录IP',
  `logout_time` int(11) DEFAULT NULL COMMENT '退出时间',
  `status` tinyint(2) unsigned DEFAULT '0' COMMENT '0:登录1:退出',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

#
# Data for table "txzh_admin_login_log"
#

/*!40000 ALTER TABLE `txzh_admin_login_log` DISABLE KEYS */;
INSERT INTO `txzh_admin_login_log` VALUES (1,'admin',1551765132,0,NULL,0),(2,'admin',1551765333,1062730643,NULL,0),(3,'admin',1551765634,1062730643,NULL,0),(4,'admin',1551765677,1062730643,NULL,0),(5,'admin',1551765739,1062730643,NULL,0),(6,'admin',1551765975,1062730643,NULL,0),(7,NULL,1551766021,NULL,NULL,1),(8,'admin',1551766054,1062730643,NULL,0),(9,'admin',1551766059,NULL,NULL,1),(10,'admin',1551766387,1062730643,NULL,0),(11,'admin',NULL,NULL,1551766448,1),(12,'admin',1551766511,1062730643,NULL,0),(13,'admin',NULL,1062730643,1551766529,1),(14,'admin',1551766534,1062730643,NULL,0),(15,'admin',NULL,1062730643,1551767370,1),(16,'admin',1551767512,1062730643,NULL,0),(17,'admin',1551838610,1062730643,NULL,0),(18,'admin',1551838619,1062730643,NULL,0),(19,'admin',1551838664,1062730643,NULL,0),(20,'admin',NULL,1062730643,1551838709,1),(21,'admin',1551838713,1062730643,NULL,0),(22,'admin',1551841522,1062730643,NULL,0),(23,'admin',1551849697,1062730643,NULL,0),(24,'admin',1551921549,1062730643,NULL,0),(25,'admin',1551947260,1062730643,NULL,0),(26,'admin',1552008285,1062730643,NULL,0),(27,'admin',1552026457,1062730643,NULL,0),(28,'admin',1552026698,1062730643,NULL,0),(29,'admin',1552268159,1062730643,NULL,0),(30,'admin',1552291450,1062730643,NULL,0),(31,'admin',1552302122,1062730643,NULL,0),(32,'admin',1552353913,1062730643,NULL,0),(33,'admin',1552443280,1062730643,NULL,0);
/*!40000 ALTER TABLE `txzh_admin_login_log` ENABLE KEYS */;

#
# Structure for table "txzh_auth_group"
#

DROP TABLE IF EXISTS `txzh_auth_group`;
CREATE TABLE `txzh_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户组ID',
  `title` char(100) NOT NULL DEFAULT '' COMMENT '规则名称',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态：0=开启，1=关闭',
  `rules` char(80) NOT NULL DEFAULT '' COMMENT '规则（所对应的是规则表的id）',
  `desc` varchar(50) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "txzh_auth_group"
#

INSERT INTO `txzh_auth_group` VALUES (1,'开发部',0,'','开发人员'),(2,'维护部',0,'','5434'),(3,'财务部',0,'',NULL);

#
# Structure for table "txzh_auth_group_access"
#

DROP TABLE IF EXISTS `txzh_auth_group_access`;
CREATE TABLE `txzh_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL COMMENT '用户ID',
  `group_id` mediumint(8) unsigned NOT NULL COMMENT '用户组ID',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "txzh_auth_group_access"
#

INSERT INTO `txzh_auth_group_access` VALUES (6,2),(7,1);

#
# Structure for table "txzh_auth_rule"
#

DROP TABLE IF EXISTS `txzh_auth_rule`;
CREATE TABLE `txzh_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '规则表ID',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '路径（控制器/方法）',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则名称例如:管理员添加,修改,删除',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态：0=开启，1=关闭',
  `condition` char(100) NOT NULL DEFAULT '' COMMENT '规则表达式，为空表示存在就验证，不为空表示按照条件验证',
  `pid` int(10) unsigned DEFAULT '0',
  `show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

#
# Data for table "txzh_auth_rule"
#

INSERT INTO `txzh_auth_rule` VALUES (58,'admin/index','管理员列表',1,0,'',0,1),(59,'admin/add','管理员添加',1,0,'',58,1),(60,'admin/del','管理员删除',1,0,'',58,1),(61,'rule/index','权限规则列表',1,0,'',0,1),(62,'rule/add','规则添加',1,0,'',61,1);

#
# Structure for table "txzh_chat_img"
#

DROP TABLE IF EXISTS `txzh_chat_img`;
CREATE TABLE `txzh_chat_img` (
  `img_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `chat_id` int(11) NOT NULL COMMENT '聊天记录id',
  `img_url` varchar(255) DEFAULT NULL COMMENT '图片url',
  `create_time` int(11) unsigned DEFAULT NULL COMMENT '生成时间',
  `img_type` tinyint(2) unsigned DEFAULT NULL COMMENT '1管理员2客户',
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

#
# Data for table "txzh_chat_img"
#

INSERT INTO `txzh_chat_img` VALUES (39,44,'http://192.168.4.109:8090/uploads/20190315/e548939514a7d3dbe113bd4f697ac013.jpg',1552645858,2),(40,44,'http://192.168.4.109:8090/uploads/20190315/64856c2313528c661cb9770f96c71bd0.jpg',1552645858,2);

#
# Structure for table "txzh_dep"
#

DROP TABLE IF EXISTS `txzh_dep`;
CREATE TABLE `txzh_dep` (
  `dep_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '部门id',
  `dep_name` varchar(20) NOT NULL COMMENT '部门名称',
  `dep_pinyin` varchar(20) DEFAULT NULL COMMENT '部门拼音',
  `dep_pid` int(10) unsigned DEFAULT NULL COMMENT '上级部门id',
  `status` tinyint(2) unsigned DEFAULT '0' COMMENT '0正常1禁用',
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COMMENT='部门表';

#
# Data for table "txzh_dep"
#

INSERT INTO `txzh_dep` VALUES (30,'阿达','阿萨达萨',0,0),(31,'爱上大飒飒','啊是打算打算',30,0);

#
# Structure for table "txzh_ticket"
#

DROP TABLE IF EXISTS `txzh_ticket`;
CREATE TABLE `txzh_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(128) NOT NULL DEFAULT '' COMMENT '工单序号',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '工单标题',
  `model_id` int(11) NOT NULL DEFAULT '0' COMMENT '对应的工单模型',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:待解决,1受理,2待回复,3已完成',
  `submit_time` int(11) NOT NULL DEFAULT '0' COMMENT '工单提交时间',
  `refer_time` int(11) NOT NULL DEFAULT '0' COMMENT '工单耗时参照时间',
  `run_time` int(11) NOT NULL DEFAULT '0' COMMENT '工单解决时长',
  `complete_time` int(11) NOT NULL DEFAULT '0' COMMENT '工单完成时间',
  `read` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:未读 1:已读',
  `admin_id` int(11) NOT NULL DEFAULT '0' COMMENT '工单操作者ID',
  `member_id` int(11) NOT NULL DEFAULT '-1' COMMENT '站内会员ID . -1表示匿名提交',
  `admin_name` varchar(128) NOT NULL DEFAULT '' COMMENT '工单操作者名字',
  `contact` tinyint(4) NOT NULL DEFAULT '0' COMMENT '联系方式 1:邮箱 2:手机号码',
  `contact_account` varchar(128) NOT NULL DEFAULT '' COMMENT '联系账号',
  `close` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:正常 1:关闭',
  PRIMARY KEY (`id`),
  KEY `number` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

#
# Data for table "txzh_ticket"
#

INSERT INTO `txzh_ticket` VALUES (38,'JMUI19323644501','萨达萨达是',1,0,1552644695,1552645870,0,0,0,0,3,'',1,'792532971@qq.com',0);

#
# Structure for table "txzh_ticket_chat"
#

DROP TABLE IF EXISTS `txzh_ticket_chat`;
CREATE TABLE `txzh_ticket_chat` (
  `ticket_chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL DEFAULT '0' COMMENT '工单ID',
  `user_id` int(11) NOT NULL DEFAULT '-1' COMMENT '用户ID,为0则为发起工单者回复',
  `user_name` varchar(128) NOT NULL DEFAULT 'Customer' COMMENT '回复者的名称,为空则为Customer,即用户回复',
  `ticket_chat_content` text NOT NULL COMMENT '回复内容',
  `ticket_chat_time` int(11) NOT NULL DEFAULT '0' COMMENT '沟通时间',
  `type` tinyint(2) unsigned DEFAULT NULL COMMENT '1管理员,2客户',
  PRIMARY KEY (`ticket_chat_id`),
  KEY `ticket_id` (`ticket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='工单沟通内容';

#
# Data for table "txzh_ticket_chat"
#

INSERT INTO `txzh_ticket_chat` VALUES (41,38,3,'user12342','萨达萨达撒给发的是郭德纲豆腐干豆腐干豆腐',1552644695,2),(44,38,3,'user12342','阿萨达萨达撒',1552645858,2),(45,38,3,'user12342','的说法是的发送到',1552645870,2);

#
# Structure for table "txzh_ticket_content"
#

DROP TABLE IF EXISTS `txzh_ticket_content`;
CREATE TABLE `txzh_ticket_content` (
  `ticket_content_id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL DEFAULT '0' COMMENT '工单ID',
  `ticket_form_id` int(11) NOT NULL DEFAULT '0' COMMENT '对应的工单表单ID',
  `ticket_form_content` text NOT NULL COMMENT '表单内容值',
  PRIMARY KEY (`ticket_content_id`),
  KEY `ticket_id` (`ticket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='工单动态表单内容表';

#
# Data for table "txzh_ticket_content"
#


#
# Structure for table "txzh_ticket_form"
#

DROP TABLE IF EXISTS `txzh_ticket_form`;
CREATE TABLE `txzh_ticket_form` (
  `form_id` int(11) NOT NULL AUTO_INCREMENT,
  `form_model_id` int(11) NOT NULL DEFAULT '0' COMMENT '对应的工单模型ID',
  `form_name` varchar(128) NOT NULL DEFAULT '' COMMENT '工单表单名词',
  `form_description` varchar(128) NOT NULL DEFAULT '' COMMENT '工单表单显示名称',
  `form_explain` varchar(128) NOT NULL DEFAULT '' COMMENT '工单表单说明',
  `form_msg` varchar(128) NOT NULL DEFAULT '' COMMENT '提示信息',
  `form_type` varchar(16) NOT NULL DEFAULT '' COMMENT '工单表单类型',
  `form_option` text NOT NULL COMMENT '工单表单的选项值',
  `form_verify` varchar(32) NOT NULL DEFAULT '' COMMENT '工单表单的验证类型',
  `form_required` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否必填 0: 否 1:必填',
  `form_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否启用 0:否 1:启用',
  `form_listsort` int(11) NOT NULL DEFAULT '0' COMMENT '动态表单的排序值（升值））',
  `form_bind` int(11) NOT NULL DEFAULT '0' COMMENT '绑定的联动表单',
  `form_bind_value` varchar(255) NOT NULL DEFAULT '' COMMENT '联动触发值',
  PRIMARY KEY (`form_id`),
  KEY `form_model_id` (`form_model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='工单动态表单';

#
# Data for table "txzh_ticket_form"
#


#
# Structure for table "txzh_ticket_model"
#

DROP TABLE IF EXISTS `txzh_ticket_model`;
CREATE TABLE `txzh_ticket_model` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `model_number` varchar(32) DEFAULT '' COMMENT '每个用户看到的唯一工单模型ID',
  `model_name` varchar(128) NOT NULL DEFAULT '' COMMENT '工单模型名称',
  `model_des` varchar(255) DEFAULT NULL,
  `model_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '工单模型是否启用',
  `model_login` int(11) NOT NULL DEFAULT '0',
  `model_verify` int(11) NOT NULL DEFAULT '0',
  `model_cid` int(11) NOT NULL DEFAULT '0',
  `model_listsort` int(11) NOT NULL DEFAULT '0',
  `model_explain` text NOT NULL,
  `model_group_id` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`model_id`),
  UNIQUE KEY `model_number` (`model_number`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='工单模型';

#
# Data for table "txzh_ticket_model"
#

INSERT INTO `txzh_ticket_model` VALUES (1,'qweqw','BUG提交','asdsa',0,0,0,0,0,'',''),(2,'21312312','小工单而已','asdas',0,0,0,0,0,'','');

#
# Structure for table "txzh_user"
#

DROP TABLE IF EXISTS `txzh_user`;
CREATE TABLE `txzh_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(255) NOT NULL COMMENT '用户账号',
  `nickname` varchar(255) NOT NULL COMMENT '用户昵称',
  `password` varchar(200) NOT NULL COMMENT '用户密码',
  `num` int(20) unsigned DEFAULT NULL COMMENT '编号',
  `minzu` varchar(20) DEFAULT NULL COMMENT '民族',
  `id_card` varchar(30) DEFAULT NULL COMMENT '身份证号',
  `pic` varchar(200) DEFAULT NULL COMMENT '头像',
  `sex` varchar(6) DEFAULT NULL COMMENT '性别',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `mobile_tel` varchar(20) DEFAULT NULL COMMENT '移动电话',
  `is_del` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除 0:未删除;1已删除',
  `last_login_ip` varchar(30) DEFAULT NULL COMMENT '最后登录ip',
  `login_count` int(8) DEFAULT '0' COMMENT '登录次数',
  `logout_time` int(11) DEFAULT NULL COMMENT '退出时间',
  `create_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='用户表';

#
# Data for table "txzh_user"
#

/*!40000 ALTER TABLE `txzh_user` DISABLE KEYS */;
INSERT INTO `txzh_user` VALUES (2,'user1234','','12345',NULL,NULL,NULL,NULL,NULL,NULL,'792532971@qq.com','13882005701',0,NULL,0,NULL,1552361837),(3,'user12342','','827ccb0eea8a706c4c34a16891f84e7b',NULL,NULL,NULL,NULL,NULL,NULL,'792532971@qq.com','13882005701',0,NULL,0,NULL,1552361917),(4,'user123422','','827ccb0eea8a706c4c34a16891f84e7b',NULL,NULL,NULL,NULL,NULL,NULL,'792532971@qq.com','13882005701',0,NULL,0,NULL,1552362033),(5,'user33','','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,NULL,NULL,NULL,'792532971@qq.com','13980717888',0,NULL,0,NULL,1552362055),(6,'user1234as','','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,NULL,NULL,NULL,'792532971@qq.com','18900000000',0,NULL,0,NULL,1552362360);
/*!40000 ALTER TABLE `txzh_user` ENABLE KEYS */;
