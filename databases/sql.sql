--
-- 招生活动 - 团购
--

CREATE TABLE `train_activity_groupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_list_id` int UNSIGNED DEFAULT '0' COMMENT 'activity_list_id',
  `uid` int UNSIGNED DEFAULT '0' COMMENT 'uid',
  `campus_id` int UNSIGNED DEFAULT '0' COMMENT 'campus_id',
  `token` varchar(32) DEFAULT NULL COMMENT '活动参数key对应管理',
  `activity_organization_name` varchar(255) DEFAULT NULL COMMENT '机构名称',
  `activity_images` varchar(2555) DEFAULT NULL COMMENT '活动图片,json',
  `activity_title` varchar(255) DEFAULT NULL COMMENT '活动标题',
  `activity_start_time` int UNSIGNED DEFAULT '0' COMMENT '活动开始时间',
  `activity_end_time` int UNSIGNED DEFAULT '0' COMMENT '活动结束时间',
  `course_name` varchar(255) DEFAULT NULL COMMENT '课程名称',
  `course_info` varchar(2555) DEFAULT NULL COMMENT '课程描述',
  `course_images` varchar(2555) DEFAULT NULL COMMENT '课程图片,json',
  `course_original_price` double(8,2) DEFAULT '0.00' COMMENT '课程原价',
  `course_activity_price` varchar(2555) DEFAULT NULL COMMENT '课程方案价格,json',
  `course_payment_state` int DEFAULT '0' COMMENT '课程是否开启支付 0未开启 1开启',
  `course_payment_type` int DEFAULT '0' COMMENT '支付模式 1：品团价，2：定金 多阶拼团方案只支持定金',
  `course_payment_price` double(8,2) DEFAULT '0.00' COMMENT '支付金额，定金模式下显示',
  `course_payment_limit` int DEFAULT '0' COMMENT '支付人数上限',
  `member_is_supported` int DEFAULT '0' COMMENT '是否支持老会员参团',
  `activity_info` varchar(2555) DEFAULT NULL COMMENT '活动说明',
  `activity_contact` varchar(2555) DEFAULT NULL COMMENT '联系方式',
  `activity_qrcode_path` varchar(255) DEFAULT NULL COMMENT '二维码图片',
  `activity_organization_info` text COMMENT '活动机构介绍',
  `activity_bg_music_path` varchar(255) DEFAULT NULL COMMENT '活动背景音乐',
  `activity_organization_mobile` varchar(18) DEFAULT NULL COMMENT '活动机构电话',
  `activity_data_state` int DEFAULT '0' COMMENT '活动数据是否展示 0：不展示 1:展示',
  `activity_sms_state` int DEFAULT '0' COMMENT '是否开启短信验证 0：不展示 1:展示',
  `activity__name` varchar(255) DEFAULT NULL COMMENT '活动名称',
  `activity_form_item` varchar(4096) DEFAULT NULL COMMENT '报名表单项，json',
  `activity_state` tinyint(1) DEFAULT '0' COMMENT '0:未发布 1：已发布',
  `time` int DEFAULT '0' COMMENT '时间',
  `state` tinyint(1) DEFAULT '0' COMMENT '0:正常 1：删除',
   PRIMARY KEY (`id`),
   INDEX `uid` (`uid`),
   INDEX `campus_id` (`campus_id`),
   UNIQUE `token` (`token`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
--
-- 招生活动 - 活动列表
--
CREATE TABLE IF NOT EXISTS `train_activity_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int UNSIGNED DEFAULT '0' COMMENT '活动类型 1团购 2秒杀 3砍价',
  `uid` int UNSIGNED DEFAULT '0' COMMENT 'uid',
  `campus_id` int UNSIGNED DEFAULT '0' COMMENT 'campus_id',
  `token` varchar(32) DEFAULT NULL COMMENT '活动参数key对应管理',
  `time` int(11) DEFAULT '0' COMMENT '时间',
  `state` tinyint(1) DEFAULT '0' COMMENT '0:正常 1：删除 2：已发布',
  PRIMARY KEY (`id`),
  INDEX `uid` (`uid`),
  INDEX `campus_id` (`campus_id`),
  UNIQUE `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 招生活动 - 团购报名会员
--

CREATE TABLE IF NOT EXISTS `train_activity_groupon_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int UNSIGNED DEFAULT '0' COMMENT '订单id',
  `activity_groupon_id` int UNSIGNED DEFAULT '0' COMMENT '活动ID',
  `name` varchar(32) DEFAULT NULL COMMENT '姓名',
  `mobile` varchar(15) DEFAULT NULL COMMENT '手机',
  `info` varchar(4096) DEFAULT NULL COMMENT '报名信息',
  `time` int(11) DEFAULT '0' COMMENT '时间',
  `state` tinyint(1) DEFAULT '0' COMMENT '0:正常 1：删除',
  PRIMARY KEY (`id`),
  INDEX `activity_groupon_id` (`activity_groupon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 招生活动 - 活动订单
--

CREATE TABLE IF NOT EXISTS `train_activity_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institution_payment_id` int UNSIGNED DEFAULT '0' COMMENT '收款商户号列表ID',
  `partnerid` varchar(32) DEFAULT NULL COMMENT '收款商户号', 
  `receipt_type` int UNSIGNED DEFAULT '0' COMMENT '收款方式 1：自有商户号收款 2：平台商户号收款',
  `type` int UNSIGNED DEFAULT '0' COMMENT '活动类型 1团购 2秒杀 3砍价',
  `order_sn` varchar(32) DEFAULT NULL COMMENT '订单号',
  `order_price` double(8,2) DEFAULT '0.00' COMMENT '订单金额',
  `order_pay_type` int UNSIGNED DEFAULT '1' COMMENT '订单支付类型 1：微信 ',
  `order_pay_state` int UNSIGNED DEFAULT '0' COMMENT '订单支付状态 0:未支付 1:已支付',  
  `order_pay_time` int UNSIGNED DEFAULT '0' COMMENT '订单支付时间',
  `order_callback_result` varchar(2555) DEFAULT NULL COMMENT '订单回调数据',
  `order_callback_state` varchar(2555) DEFAULT NULL COMMENT '订单回调状态',
  `time` int(11) DEFAULT '0' COMMENT '时间',
  `state` tinyint(1) DEFAULT '0' COMMENT '0:正常 1：删除',
  PRIMARY KEY (`id`),
  INDEX `order_sn` (`order_sn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;