-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.5.53-log - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出  表 xjh.about 结构
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name',
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'keyword',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'description',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Slug',
  `imgUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'imgUrl',
  `desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description',
  `content` text COLLATE utf8_unicode_ci COMMENT 'Content',
  `sort` int(11) DEFAULT '0' COMMENT 'Sort',
  `status` int(2) DEFAULT '1' COMMENT 'Status：0-UnActive，1-Active',
  `created_at` int(10) DEFAULT NULL COMMENT 'Create Time',
  `updated_at` int(10) DEFAULT NULL COMMENT 'Modify Time',
  `language` int(2) DEFAULT '1' COMMENT 'Language Type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  xjh.about 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
REPLACE INTO `about` (`id`, `name`, `keyword`, `description`, `slug`, `imgUrl`, `desc`, `content`, `sort`, `status`, `created_at`, `updated_at`, `language`) VALUES
	(1, '00000', '4455599', '5566600', NULL, '', '2233377', '<p>3344488<br/></p>', 9, 1, 1542188806, 1542189253, 1);
/*!40000 ALTER TABLE `about` ENABLE KEYS */;


-- 导出  表 xjh.banner 结构
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `cat_id` int(11) DEFAULT '0' COMMENT 'category Id',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name',
  `imgUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'imgUrl',
  `desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description',
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Url',
  `sort` int(11) DEFAULT '0' COMMENT 'Sort',
  `status` int(2) DEFAULT '1' COMMENT 'Status：0-UnActive，1-Active',
  `created_at` int(10) DEFAULT NULL COMMENT 'Create Time',
  `updated_at` int(10) DEFAULT NULL COMMENT 'Modify Time',
  `language` int(2) DEFAULT '1' COMMENT 'Language Type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  xjh.banner 的数据：~8 rows (大约)
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
REPLACE INTO `banner` (`id`, `cat_id`, `name`, `imgUrl`, `desc`, `url`, `sort`, `status`, `created_at`, `updated_at`, `language`) VALUES
	(1, 1, '首页', '/upload/banner/201811191440464918.jpg', '', '', 0, 1, 1542609646, 1542609646, 1),
	(2, 2, '关于我们', '/upload/banner/201811191441172253.jpg', '', '', 0, 1, 1542609677, 1542609677, 1),
	(3, 6, '合作伙伴', '/upload/banner/201811191441547671.jpg', '', '', 0, 1, 1542609714, 1542609714, 1),
	(4, 7, '合作流程', '/upload/banner/201811191442505429.jpg', '', '', 0, 1, 1542609770, 1542609770, 1),
	(5, 5, '文化传播', '/upload/banner/201811191443186907.jpg', '', '', 0, 1, 1542609798, 1542609798, 1),
	(6, 8, '联系我们', '/upload/banner/201811191443473498.jpg', '', '', 0, 1, 1542609827, 1542609827, 1),
	(7, 4, '案例欣赏', '/upload/banner/201811191445453556.jpg', '', '', 0, 1, 1542609945, 1542609945, 1),
	(8, 3, '钜禾服务', '/upload/banner/201811191447555826.jpg', '', '', 0, 1, 1542610075, 1542610075, 1);
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;


-- 导出  表 xjh.cases 结构
CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `cat_id` int(11) DEFAULT '0' COMMENT 'category Id',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name',
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'keyword',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'description',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Slug',
  `imgUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'imgUrl',
  `desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description',
  `content` text COLLATE utf8_unicode_ci COMMENT 'Content',
  `sort` int(11) DEFAULT '0' COMMENT 'Sort',
  `status` int(2) DEFAULT '1' COMMENT 'Status：0-UnActive，1-Active',
  `created_at` int(10) DEFAULT NULL COMMENT 'Create Time',
  `updated_at` int(10) DEFAULT NULL COMMENT 'Modify Time',
  `language` int(2) DEFAULT '1' COMMENT 'Language Type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  xjh.cases 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `cases` DISABLE KEYS */;
REPLACE INTO `cases` (`id`, `cat_id`, `name`, `keyword`, `description`, `slug`, `imgUrl`, `desc`, `content`, `sort`, `status`, `created_at`, `updated_at`, `language`) VALUES
	(1, NULL, '122212313', '4', '5', NULL, '', '2', '<p>3<br/></p>', 0, 1, 1542185249, 1542186674, 1);
/*!40000 ALTER TABLE `cases` ENABLE KEYS */;


-- 导出  表 xjh.category 结构
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `parentId` int(11) NOT NULL DEFAULT '0' COMMENT '父类ID',
  `idPath` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分类ID路径',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分类名称',
  `model` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '模块名称',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `status` int(4) DEFAULT '1' COMMENT '状态',
  `language` int(4) DEFAULT '0' COMMENT '所属语言',
  PRIMARY KEY (`id`),
  KEY `parentId` (`parentId`),
  KEY `language` (`language`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  xjh.category 的数据：~12 rows (大约)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
REPLACE INTO `category` (`id`, `parentId`, `idPath`, `name`, `model`, `sort`, `status`, `language`) VALUES
	(1, 0, '/0/1/', '首页', 'banner', 0, 1, 1),
	(2, 0, '/0/2/', '关于我们', 'banner', 0, 1, 1),
	(3, 0, '/0/3/', '钜禾服务', 'banner', 0, 1, 1),
	(4, 0, '/0/4/', '案例赏析', 'banner', 0, 1, 1),
	(5, 0, '/0/5/', '文化传播', 'banner', 0, 1, 1),
	(6, 0, '/0/6/', '合作伙伴', 'banner', 0, 1, 1),
	(7, 0, '/0/7/', '合作流程', 'banner', 0, 1, 1),
	(8, 0, '/0/8/', '联系我们', 'banner', 0, 1, 1),
	(9, 0, '/0/9/', '案例欣赏', 'cases', 2, 1, 1),
	(10, 0, '/0/10/', '内容快讯', 'culture', 1, 1, 1),
	(11, 0, '/0/11/', '行业资讯', 'culture', 0, 1, 1),
	(12, 0, '/0/12/', '合作伙伴', 'partner', 0, 1, 1);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- 导出  表 xjh.config 结构
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置ID',
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '配置名称',
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '配置说明',
  `value` text COLLATE utf8_unicode_ci COMMENT '配置值',
  `remark` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '配置说明',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `status` int(4) DEFAULT '1' COMMENT '状态',
  `created_at` int(4) DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(4) DEFAULT '0' COMMENT '更新时间',
  `language` int(4) DEFAULT '0' COMMENT '所属语言',
  PRIMARY KEY (`id`),
  UNIQUE KEY `index` (`name`,`id`,`language`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  xjh.config 的数据：~14 rows (大约)
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
REPLACE INTO `config` (`id`, `name`, `title`, `value`, `remark`, `sort`, `status`, `created_at`, `updated_at`, `language`) VALUES
	(1, 'WEB_SITE_TITLE', '网站标题', '内容管理框架1', '网站标题前台显示标题', 9999, 1, 1378898976, 1541054975, 1),
	(2, 'WEB_SITE_DESCRIPTION', '网站描述', '内容管理框架2', '网站搜索引擎描述', 1, 1, 1378898976, 1472528403, 1),
	(3, 'WEB_SITE_KEYWORD', '网站关键字', '黄龙飞11', '网站搜索引擎关键字', 8, 1, 1378898976, 1472528403, 1),
	(4, 'WEB_SITE_COPYRIGHT', '网站版权', '© China Radio International.CRI. All Rights Reserved.16A Shijingshan Road,Beijing,China.100040', '设置在网站', 9, 1, 1378900335, 1472528403, 1),
	(5, 'WEB_SITE_RESOURCES_URL', '上传图片服务器域名（可用二级域名）', 'http://img.yiicms.com/', '域名格式（https://resources.alilinet.com/）', 3, 1, 1379053380, 1516948101, 1),
	(6, 'COLOR_STYLE', '后台色系', 'default_color', '后台颜色风格', 10, 1, 1379122533, 1472528403, 1),
	(7, 'WEB_SITE_ALLOW_UPLOAD_TYPE', '站点允许上传文件类型', 'jpg,rar,png,gif,rar', '只需要填写后缀即可', 1, 1, 1512626843, 1517147572, 1),
	(8, 'OAUTH_QQ', '第三方QQ登录配置项', '{\\r\\n	"client_id": "**********",\\r\\n	"client_secret": "**********",\\r\\n	"redirect_uri": "**********"\\r\\n}', '配置项', 1, 1, 1516869590, 1539942431, 1),
	(9, 'WEB_SITE_AJAX_URL', '网站AJAX请求域名', 'https://www.alilinet.com/', '网站AJAX请求域名', 2, 1, 1516869798, 1516948115, 1),
	(10, 'WEB_SITE_BACKGROUND', '站点头部背景图', '/images/background.jpg', '站点头部背景图', 3, 1, 1516949337, 1516949390, 1),
	(11, 'NETEASE_COOKIE', '网易云音乐cookie', '888888', '网易云音乐cookie', 1, 1, 1527666426, 1539942454, 1),
	(12, 'WEB_SITE_TEL', '服务电话', '0086-13556194195', NULL, 0, 1, 1541401973, 1541401973, 1),
	(13, 'WEB_SITE_MAIL', '服务邮箱', '123456789@qq.com', NULL, 0, 1, 1541401973, 1541401973, 1),
	(14, 'WEB_SITE_ADDRESS', '地址', 'Room 1306, office building, Shuangcheng International Building,', NULL, 0, 1, 1541401973, 1541401973, 1);
/*!40000 ALTER TABLE `config` ENABLE KEYS */;


-- 导出  表 xjh.contact 结构
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name',
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'keyword',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'description',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Slug',
  `imgUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'imgUrl',
  `desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description',
  `content` text COLLATE utf8_unicode_ci COMMENT 'Content',
  `sort` int(11) DEFAULT '0' COMMENT 'Sort',
  `status` int(2) DEFAULT '1' COMMENT 'Status：0-UnActive，1-Active',
  `created_at` int(10) DEFAULT NULL COMMENT 'Create Time',
  `updated_at` int(10) DEFAULT NULL COMMENT 'Modify Time',
  `language` int(2) DEFAULT '1' COMMENT 'Language Type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  xjh.contact 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
REPLACE INTO `contact` (`id`, `name`, `keyword`, `description`, `slug`, `imgUrl`, `desc`, `content`, `sort`, `status`, `created_at`, `updated_at`, `language`) VALUES
	(1, 'asdfasdf3333', '324', '4444', NULL, '', 'asdf', '<p>asdf<br/></p>', 0, 1, 1542244467, 1542244477, 1);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;


-- 导出  表 xjh.culture 结构
CREATE TABLE IF NOT EXISTS `culture` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `cat_id` int(11) DEFAULT '0' COMMENT 'category Id',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name',
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'keyword',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'description',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Slug',
  `imgUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'imgUrl',
  `desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description',
  `content` text COLLATE utf8_unicode_ci COMMENT 'Content',
  `sort` int(11) DEFAULT '0' COMMENT 'Sort',
  `status` int(2) DEFAULT '1' COMMENT 'Status：0-UnActive，1-Active',
  `created_at` int(10) DEFAULT NULL COMMENT 'Create Time',
  `updated_at` int(10) DEFAULT NULL COMMENT 'Modify Time',
  `language` int(2) DEFAULT '1' COMMENT 'Language Type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  xjh.culture 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `culture` DISABLE KEYS */;
REPLACE INTO `culture` (`id`, `cat_id`, `name`, `keyword`, `description`, `slug`, `imgUrl`, `desc`, `content`, `sort`, `status`, `created_at`, `updated_at`, `language`) VALUES
	(1, NULL, 'aa', 'dd', 'ee', NULL, '', 'bb', '<p>cc<br/></p>', 0, 1, 1542189307, 1542189307, 1);
/*!40000 ALTER TABLE `culture` ENABLE KEYS */;


-- 导出  表 xjh.migration 结构
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  xjh.migration 的数据：~12 rows (大约)
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
REPLACE INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1542183665),
	('m181031_022853_about', 1542184572),
	('m181031_023321_contact', 1542184573),
	('m181031_024006_category', 1542184574),
	('m181101_021024_config', 1542184574),
	('m181101_091445_banner', 1542184575),
	('m181105_090400_user', 1542184575),
	('m181114_074044_culture', 1542184576),
	('m181114_074216_process', 1542184577),
	('m181114_074322_partner', 1542184578),
	('m181114_074616_service', 1542184578),
	('m181114_074852_cases', 1542184579);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;


-- 导出  表 xjh.partner 结构
CREATE TABLE IF NOT EXISTS `partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `cat_id` int(11) DEFAULT '0' COMMENT 'category Id',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name',
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'keyword',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'description',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Slug',
  `imgUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'imgUrl',
  `desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description',
  `content` text COLLATE utf8_unicode_ci COMMENT 'Content',
  `sort` int(11) DEFAULT '0' COMMENT 'Sort',
  `status` int(2) DEFAULT '1' COMMENT 'Status：0-UnActive，1-Active',
  `created_at` int(10) DEFAULT NULL COMMENT 'Create Time',
  `updated_at` int(10) DEFAULT NULL COMMENT 'Modify Time',
  `language` int(2) DEFAULT '1' COMMENT 'Language Type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  xjh.partner 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `partner` DISABLE KEYS */;
REPLACE INTO `partner` (`id`, `cat_id`, `name`, `keyword`, `description`, `slug`, `imgUrl`, `desc`, `content`, `sort`, `status`, `created_at`, `updated_at`, `language`) VALUES
	(1, NULL, '1', '44', '555555', NULL, '', '222', '<p>333<br/></p>', 0, 1, 1542187884, 1542187884, 1);
/*!40000 ALTER TABLE `partner` ENABLE KEYS */;


-- 导出  表 xjh.process 结构
CREATE TABLE IF NOT EXISTS `process` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name',
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'keyword',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'description',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Slug',
  `imgUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'imgUrl',
  `desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description',
  `content` text COLLATE utf8_unicode_ci COMMENT 'Content',
  `sort` int(11) DEFAULT '0' COMMENT 'Sort',
  `status` int(2) DEFAULT '1' COMMENT 'Status：0-UnActive，1-Active',
  `created_at` int(10) DEFAULT NULL COMMENT 'Create Time',
  `updated_at` int(10) DEFAULT NULL COMMENT 'Modify Time',
  `language` int(2) DEFAULT '1' COMMENT 'Language Type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  xjh.process 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `process` DISABLE KEYS */;
REPLACE INTO `process` (`id`, `name`, `keyword`, `description`, `slug`, `imgUrl`, `desc`, `content`, `sort`, `status`, `created_at`, `updated_at`, `language`) VALUES
	(1, '123', '234', '5555', NULL, '', '123444', '<p>333<br/></p>', 0, 1, 1542599654, 1542599654, 1);
/*!40000 ALTER TABLE `process` ENABLE KEYS */;


-- 导出  表 xjh.service 结构
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name',
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'keyword',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'description',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Slug',
  `imgUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'imgUrl',
  `desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Description',
  `content` text COLLATE utf8_unicode_ci COMMENT 'Content',
  `sort` int(11) DEFAULT '0' COMMENT 'Sort',
  `status` int(2) DEFAULT '1' COMMENT 'Status：0-UnActive，1-Active',
  `created_at` int(10) DEFAULT NULL COMMENT 'Create Time',
  `updated_at` int(10) DEFAULT NULL COMMENT 'Modify Time',
  `language` int(2) DEFAULT '1' COMMENT 'Language Type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  xjh.service 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
/*!40000 ALTER TABLE `service` ENABLE KEYS */;


-- 导出  表 xjh.user 结构
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  xjh.user 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'b7zsDPtKfK6YwgDQhuQhkVUNwHXUvHEg', '$2y$13$QWNFR3q4TEqd2CwMRjSBB.ZXt1R0ni.juZTlwJREsaKRf0LjtTexS', 'qaqMQXz5ef7f6APucSYZ9V151HNW8O7t_1527576370', 'kevin0217@126.com', 10, 1542184575, 0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
