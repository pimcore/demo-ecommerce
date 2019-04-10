
SET NAMES utf8mb4;



DROP TABLE IF EXISTS `application_logs_archive_01_2018`;
CREATE TABLE `application_logs_archive_01_2018` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `application_logs_archive_04_2016`;
CREATE TABLE `application_logs_archive_04_2016` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `application_logs_archive_05_2016`;
CREATE TABLE `application_logs_archive_05_2016` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `application_logs_archive_06_2016`;
CREATE TABLE `application_logs_archive_06_2016` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `application_logs_archive_06_2017`;
CREATE TABLE `application_logs_archive_06_2017` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `application_logs_archive_06_2018`;
CREATE TABLE `application_logs_archive_06_2018` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `application_logs_archive_07_2016`;
CREATE TABLE `application_logs_archive_07_2016` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `application_logs_archive_07_2018`;
CREATE TABLE `application_logs_archive_07_2018` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `application_logs_archive_08_2016`;
CREATE TABLE `application_logs_archive_08_2016` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `application_logs_archive_08_2017`;
CREATE TABLE `application_logs_archive_08_2017` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `application_logs_archive_09_2016`;
CREATE TABLE `application_logs_archive_09_2016` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `application_logs_archive_10_2016`;
CREATE TABLE `application_logs_archive_10_2016` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `application_logs_archive_10_2017`;
CREATE TABLE `application_logs_archive_10_2017` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `application_logs_archive_11_2017`;
CREATE TABLE `application_logs_archive_11_2017` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `application_logs_archive_12_2017`;
CREATE TABLE `application_logs_archive_12_2017` (
  `id` bigint(20) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `priority` enum('emergency','alert','critical','error','warning','notice','info','debug') DEFAULT NULL,
  `fileobject` varchar(1024) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `component` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `relatedobject` bigint(20) DEFAULT NULL,
  `relatedobjecttype` enum('object','document','asset') DEFAULT NULL,
  `maintenanceChecked` tinyint(4) DEFAULT NULL
) ENGINE=ARCHIVE DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `bundle_advancedobjectsearch_savedsearch`;
CREATE TABLE `bundle_advancedobjectsearch_savedsearch` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `ownerId` int(20) DEFAULT NULL,
  `config` text CHARACTER SET latin1,
  `sharedUserIds` varchar(1000) DEFAULT NULL,
  `shortCutUserIds` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `bundle_advancedobjectsearch_update_queue`;
CREATE TABLE `bundle_advancedobjectsearch_update_queue` (
  `o_id` bigint(10) NOT NULL DEFAULT '0',
  `classId` int(11) DEFAULT NULL,
  `in_queue` tinyint(1) DEFAULT NULL,
  `worker_timestamp` int(20) DEFAULT NULL,
  `worker_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `bundle_outputdataconfigtoolkit_outputdefinition`;
CREATE TABLE `bundle_outputdataconfigtoolkit_outputdefinition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `o_id` int(11) NOT NULL,
  `o_classId` int(11) NOT NULL,
  `channel` varchar(255) COLLATE utf8_bin NOT NULL,
  `configuration` longtext CHARACTER SET latin1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique` (`o_id`,`o_classId`,`channel`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `bundle_web2print_favorite_outputdefinitions`;
CREATE TABLE `bundle_web2print_favorite_outputdefinitions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `o_classId` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `configuration` longtext CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `ecommerceframework_cart`;
CREATE TABLE `ecommerceframework_cart` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `userid` int(20) NOT NULL,
  `name` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `creationDateTimestamp` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `ecommerceframework_cartcheckoutdata`;
CREATE TABLE `ecommerceframework_cartcheckoutdata` (
  `cartId` int(20) NOT NULL,
  `key` varchar(150) COLLATE utf8_bin NOT NULL,
  `data` longtext CHARACTER SET latin1,
  PRIMARY KEY (`cartId`,`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `ecommerceframework_cartitem`;
CREATE TABLE `ecommerceframework_cartitem` (
  `productId` int(20) NOT NULL,
  `cartId` int(20) NOT NULL,
  `count` int(20) NOT NULL,
  `itemKey` varchar(100) COLLATE utf8_bin NOT NULL,
  `parentItemKey` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `comment` longtext CHARACTER SET latin1,
  `addedDateTimestamp` int(10) NOT NULL,
  `sortIndex` int(10) NOT NULL,
  PRIMARY KEY (`itemKey`,`cartId`,`parentItemKey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `ecommerceframework_optimized_productindex`;
CREATE TABLE `ecommerceframework_optimized_productindex` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `o_virtualProductId` int(11) NOT NULL,
  `o_virtualProductActive` tinyint(1) NOT NULL,
  `o_classId` int(11) NOT NULL,
  `o_parentId` int(11) NOT NULL,
  `o_type` varchar(20) NOT NULL,
  `categoryIds` varchar(255) NOT NULL,
  `parentCategoryIds` varchar(255) NOT NULL,
  `priceSystemName` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `inProductList` tinyint(1) NOT NULL,
  `description` text,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `tentTentPegs` varchar(50) DEFAULT NULL,
  `tentWaterproofRain` varchar(50) DEFAULT NULL,
  `tentWaterproofGround` varchar(50) DEFAULT NULL,
  `rucksacksVolume` double DEFAULT NULL,
  `rucksacksWeight` double DEFAULT NULL,
  `rucksacksLoad` double DEFAULT NULL,
  `matsWidth` double DEFAULT NULL,
  `matsLength` double DEFAULT NULL,
  `matsHeight` double DEFAULT NULL,
  `simularity_color` int(11) DEFAULT NULL,
  `simularity_gender` int(11) DEFAULT NULL,
  `simularity_category` int(11) DEFAULT NULL,
  `simularity_feature` int(11) DEFAULT NULL,
  `simularity_technolgy` int(11) DEFAULT NULL,
  `simularity_attributes` int(11) DEFAULT NULL,
  PRIMARY KEY (`o_id`),
  FULLTEXT KEY `search` (`name`,`seoname`,`color`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ecommerceframework_optimized_productindex_relations`;
CREATE TABLE `ecommerceframework_optimized_productindex_relations` (
  `src` int(11) NOT NULL,
  `src_virtualProductId` int(11) NOT NULL,
  `dest` int(11) NOT NULL,
  `fieldname` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`src`,`dest`,`fieldname`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `ecommerceframework_pricing_rule`;
CREATE TABLE `ecommerceframework_pricing_rule` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `label` text CHARACTER SET latin1,
  `description` text,
  `behavior` enum('additiv','stopExecute') DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `prio` tinyint(3) unsigned NOT NULL,
  `condition` text NOT NULL COMMENT 'configuration der condition',
  `actions` text NOT NULL COMMENT 'configuration der action',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `active` (`active`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ecommerceframework_productindex`;
CREATE TABLE `ecommerceframework_productindex` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `o_virtualProductId` int(11) NOT NULL,
  `o_virtualProductActive` tinyint(1) NOT NULL,
  `o_classId` int(11) NOT NULL,
  `o_parentId` int(11) NOT NULL,
  `o_type` varchar(20) NOT NULL,
  `categoryIds` varchar(255) NOT NULL,
  `parentCategoryIds` varchar(255) NOT NULL,
  `priceSystemName` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `inProductList` tinyint(1) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `tentTentPegs` varchar(50) DEFAULT NULL,
  `tentWaterproofRain` varchar(50) DEFAULT NULL,
  `tentWaterproofGround` varchar(50) DEFAULT NULL,
  `rucksacksVolume` double DEFAULT NULL,
  `rucksacksWeight` double DEFAULT NULL,
  `rucksacksLoad` double DEFAULT NULL,
  `matsWidth` double DEFAULT NULL,
  `matsLength` double DEFAULT NULL,
  `matsHeight` double DEFAULT NULL,
  `simularity_color` int(11) DEFAULT NULL,
  `simularity_gender` int(11) DEFAULT NULL,
  `simularity_category` int(11) DEFAULT NULL,
  `simularity_feature` int(11) DEFAULT NULL,
  `simularity_technolgy` int(11) DEFAULT NULL,
  `simularity_attributes` int(11) DEFAULT NULL,
  PRIMARY KEY (`o_id`),
  FULLTEXT KEY `search` (`name`,`seoname`,`color`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ecommerceframework_productindex_relations`;
CREATE TABLE `ecommerceframework_productindex_relations` (
  `src` int(11) NOT NULL,
  `src_virtualProductId` int(11) NOT NULL,
  `dest` int(11) NOT NULL,
  `fieldname` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`src`,`dest`,`fieldname`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



DROP TABLE IF EXISTS `ecommerceframework_productindex_store`;
CREATE TABLE `ecommerceframework_productindex_store` (
  `o_id` bigint(20) NOT NULL DEFAULT '0',
  `o_virtualProductId` bigint(20) DEFAULT NULL,
  `tenant` varchar(50) NOT NULL DEFAULT '',
  `data` text CHARACTER SET latin1,
  `crc_current` int(11) DEFAULT NULL,
  `crc_index` int(11) DEFAULT NULL,
  `worker_timestamp` int(11) DEFAULT NULL,
  `worker_id` varchar(20) DEFAULT NULL,
  `in_preparation_queue` tinyint(1) DEFAULT NULL,
  `preparation_worker_timestamp` int(11) DEFAULT NULL,
  `preparation_worker_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`tenant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ecommerceframework_vouchertoolkit_reservations`;
CREATE TABLE `ecommerceframework_vouchertoolkit_reservations` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `token` varchar(250) NOT NULL,
  `cart_id` varchar(250) NOT NULL,
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ecommerceframework_vouchertoolkit_statistics`;
CREATE TABLE `ecommerceframework_vouchertoolkit_statistics` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `voucherSeriesId` bigint(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `voucherSeriesId` (`voucherSeriesId`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `ecommerceframework_vouchertoolkit_tokens`;
CREATE TABLE `ecommerceframework_vouchertoolkit_tokens` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `voucherSeriesId` bigint(20) DEFAULT NULL,
  `token` varchar(250) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `usages` bigint(20) DEFAULT '0',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`),
  KEY `length` (`length`),
  KEY `voucherSeriesId_length` (`voucherSeriesId`,`length`)
) ENGINE=InnoDB AUTO_INCREMENT=200002 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_OAuth1Token_38`;
CREATE TABLE `object_brick_query_OAuth1Token_38` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `token` longtext,
  `tokenSecret` longtext,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_OAuth2Token_38`;
CREATE TABLE `object_brick_query_OAuth2Token_38` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `accessToken` longtext,
  `tokenType` varchar(190) DEFAULT NULL,
  `expiresAt` varchar(190) DEFAULT NULL,
  `refreshToken` longtext,
  `scope` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderDatatrans_9`;
CREATE TABLE `object_brick_query_PaymentProviderDatatrans_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `auth_aliasCC` varchar(255) DEFAULT NULL,
  `auth_expm` varchar(255) DEFAULT NULL,
  `auth_expy` varchar(255) DEFAULT NULL,
  `auth_reqtype` varchar(255) DEFAULT NULL,
  `auth_uppTransactionId` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_refno` varchar(255) DEFAULT NULL,
  `auth_maskedCC` varchar(255) DEFAULT NULL,
  `auth_pmethod` varchar(255) DEFAULT NULL,
  `paymentFinished` bigint(20) DEFAULT NULL,
  `sourceOrder__id` int(11) DEFAULT NULL,
  `sourceOrder__type` enum('document','asset','object') DEFAULT NULL,
  `configurationKey` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderMpay24_9`;
CREATE TABLE `object_brick_query_PaymentProviderMpay24_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_OPERATION` varchar(255) DEFAULT NULL,
  `auth_TID` varchar(255) DEFAULT NULL,
  `auth_STATUS` varchar(255) DEFAULT NULL,
  `auth_PRICE` varchar(255) DEFAULT NULL,
  `auth_CURRENCY` varchar(255) DEFAULT NULL,
  `auth_P_TYPE` varchar(255) DEFAULT NULL,
  `auth_BRAND` varchar(255) DEFAULT NULL,
  `auth_MPAYTID` varchar(255) DEFAULT NULL,
  `auth_APPR_CODE` varchar(255) DEFAULT NULL,
  `auth_PROFILE_STATUS` varchar(255) DEFAULT NULL,
  `auth_FILTER_STATUS` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderOGone_9`;
CREATE TABLE `object_brick_query_PaymentProviderOGone_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_paymentMethod` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_ip` varchar(255) DEFAULT NULL,
  `auth_paymentId` varchar(255) DEFAULT NULL,
  `auth_customerName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderPayPal_9`;
CREATE TABLE `object_brick_query_PaymentProviderPayPal_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `auth_token` varchar(255) DEFAULT NULL,
  `auth_PayerID` varchar(255) DEFAULT NULL,
  `configurationKey` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderQpay_9`;
CREATE TABLE `object_brick_query_PaymentProviderQpay_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_language` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_paymentType` varchar(255) DEFAULT NULL,
  `paymentFinished` bigint(20) DEFAULT NULL,
  `sourceOrder__id` int(11) DEFAULT NULL,
  `sourceOrder__type` enum('document','asset','object') DEFAULT NULL,
  `auth_anonymousPan` varchar(190) DEFAULT NULL,
  `auth_maskedPan` varchar(190) DEFAULT NULL,
  `auth_expiry` varchar(190) DEFAULT NULL,
  `auth_bankAccountOwner` varchar(190) DEFAULT NULL,
  `auth_bankAccountIBAN` varchar(190) DEFAULT NULL,
  `configurationKey` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`),
  KEY `p_index_auth_paymentType` (`auth_paymentType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderWirecardSeamless_9`;
CREATE TABLE `object_brick_query_PaymentProviderWirecardSeamless_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `auth_paymentType` varchar(255) DEFAULT NULL,
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_paymentState` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_gatewyReferenceNumber` varchar(255) DEFAULT NULL,
  `configurationKey` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_apparel_12`;
CREATE TABLE `object_brick_query_apparel_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `styles` text,
  `fittings` text,
  `zips` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_approvals_12`;
CREATE TABLE `object_brick_query_approvals_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `fifaApproved` tinyint(1) DEFAULT NULL,
  `fifaInspected` tinyint(1) DEFAULT NULL,
  `imsChecked` tinyint(1) DEFAULT NULL,
  `ihfApproved` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_featuresBenefitsBackpacks_12`;
CREATE TABLE `object_brick_query_featuresBenefitsBackpacks_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_featuresBenefitsMats_12`;
CREATE TABLE `object_brick_query_featuresBenefitsMats_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_featuresBenefitsShoes_12`;
CREATE TABLE `object_brick_query_featuresBenefitsShoes_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_featuresBenefitsSleepingbags_12`;
CREATE TABLE `object_brick_query_featuresBenefitsSleepingbags_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_featuresBenefitsTents_12`;
CREATE TABLE `object_brick_query_featuresBenefitsTents_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_featuresHeadlamps_12`;
CREATE TABLE `object_brick_query_featuresHeadlamps_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `lumen` double DEFAULT NULL,
  `lightDistance` double DEFAULT NULL,
  `lightDuration` double DEFAULT NULL,
  `ledType` varchar(255) DEFAULT NULL,
  `ledBoost` varchar(255) DEFAULT NULL,
  `ledRed` varchar(255) DEFAULT NULL,
  `waterResistant` varchar(255) DEFAULT NULL,
  `batteries` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `hasFlashingMode` tinyint(1) DEFAULT NULL,
  `isCeApproved` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_matsSpecs_12`;
CREATE TABLE `object_brick_query_matsSpecs_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `length` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `materialTop` varchar(255) DEFAULT NULL,
  `materialBottom` varchar(255) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `isCFCfree` tinyint(1) DEFAULT NULL,
  `has3partWaveShape` tinyint(1) DEFAULT NULL,
  `structure` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_outdoor_12`;
CREATE TABLE `object_brick_query_outdoor_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_rucksackSpecs_12`;
CREATE TABLE `object_brick_query_rucksackSpecs_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `volume` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `load` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `expandTo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_shoeDetails_12`;
CREATE TABLE `object_brick_query_shoeDetails_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_shoe_12`;
CREATE TABLE `object_brick_query_shoe_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `footTypes` text,
  `gaitTypes` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_snowsport_12`;
CREATE TABLE `object_brick_query_snowsport_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_specsSleepingbags_12`;
CREATE TABLE `object_brick_query_specsSleepingbags_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `weight` double DEFAULT NULL,
  `length` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `bodySize` double DEFAULT NULL,
  `fabricShell` varchar(255) DEFAULT NULL,
  `fabricLining` varchar(255) DEFAULT NULL,
  `filling` varchar(255) DEFAULT NULL,
  `protection` varchar(255) DEFAULT NULL,
  `packingSize` varchar(255) DEFAULT NULL,
  `temperatureComfort` double DEFAULT NULL,
  `temperatureLimit` double DEFAULT NULL,
  `temperatureExtreme` double DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_tentGroundsheet_12`;
CREATE TABLE `object_brick_query_tentGroundsheet_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `groundSheet1` int(11) DEFAULT NULL,
  `groundSheet2` int(11) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_tentSpecifications_12`;
CREATE TABLE `object_brick_query_tentSpecifications_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `outsideMaterial` varchar(255) DEFAULT NULL,
  `insideMaterial` varchar(255) DEFAULT NULL,
  `floorMaterial` varchar(255) DEFAULT NULL,
  `waterproofRain` varchar(255) DEFAULT NULL,
  `waterproofGround` varchar(255) DEFAULT NULL,
  `construction` varchar(255) DEFAULT NULL,
  `tentPegs` varchar(255) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `isMainSeamTaped` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_weight_12`;
CREATE TABLE `object_brick_query_weight_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `weight` double DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_OAuth1Token_38`;
CREATE TABLE `object_brick_store_OAuth1Token_38` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `token` longtext,
  `tokenSecret` longtext,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_OAuth2Token_38`;
CREATE TABLE `object_brick_store_OAuth2Token_38` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `accessToken` longtext,
  `tokenType` varchar(190) DEFAULT NULL,
  `expiresAt` varchar(190) DEFAULT NULL,
  `refreshToken` longtext,
  `scope` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderDatatrans_9`;
CREATE TABLE `object_brick_store_PaymentProviderDatatrans_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `auth_aliasCC` varchar(255) DEFAULT NULL,
  `auth_expm` varchar(255) DEFAULT NULL,
  `auth_expy` varchar(255) DEFAULT NULL,
  `auth_reqtype` varchar(255) DEFAULT NULL,
  `auth_uppTransactionId` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_refno` varchar(255) DEFAULT NULL,
  `auth_maskedCC` varchar(255) DEFAULT NULL,
  `auth_pmethod` varchar(255) DEFAULT NULL,
  `paymentFinished` bigint(20) DEFAULT NULL,
  `configurationKey` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderMpay24_9`;
CREATE TABLE `object_brick_store_PaymentProviderMpay24_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_OPERATION` varchar(255) DEFAULT NULL,
  `auth_TID` varchar(255) DEFAULT NULL,
  `auth_STATUS` varchar(255) DEFAULT NULL,
  `auth_PRICE` varchar(255) DEFAULT NULL,
  `auth_CURRENCY` varchar(255) DEFAULT NULL,
  `auth_P_TYPE` varchar(255) DEFAULT NULL,
  `auth_BRAND` varchar(255) DEFAULT NULL,
  `auth_MPAYTID` varchar(255) DEFAULT NULL,
  `auth_APPR_CODE` varchar(255) DEFAULT NULL,
  `auth_PROFILE_STATUS` varchar(255) DEFAULT NULL,
  `auth_FILTER_STATUS` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderOGone_9`;
CREATE TABLE `object_brick_store_PaymentProviderOGone_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `configurationKey` varchar(190) DEFAULT NULL,
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_paymentMethod` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_ip` varchar(255) DEFAULT NULL,
  `auth_paymentId` varchar(255) DEFAULT NULL,
  `auth_customerName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderPayPal_9`;
CREATE TABLE `object_brick_store_PaymentProviderPayPal_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `auth_token` varchar(255) DEFAULT NULL,
  `auth_PayerID` varchar(255) DEFAULT NULL,
  `configurationKey` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderQpay_9`;
CREATE TABLE `object_brick_store_PaymentProviderQpay_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_language` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_paymentType` varchar(255) DEFAULT NULL,
  `paymentFinished` bigint(20) DEFAULT NULL,
  `auth_anonymousPan` varchar(190) DEFAULT NULL,
  `auth_maskedPan` varchar(190) DEFAULT NULL,
  `auth_expiry` varchar(190) DEFAULT NULL,
  `auth_bankAccountOwner` varchar(190) DEFAULT NULL,
  `auth_bankAccountIBAN` varchar(190) DEFAULT NULL,
  `configurationKey` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`),
  KEY `p_index_auth_paymentType` (`auth_paymentType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderWirecardSeamless_9`;
CREATE TABLE `object_brick_store_PaymentProviderWirecardSeamless_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `auth_paymentType` varchar(255) DEFAULT NULL,
  `auth_orderNumber` varchar(255) DEFAULT NULL,
  `auth_paymentState` varchar(255) DEFAULT NULL,
  `auth_amount` varchar(255) DEFAULT NULL,
  `auth_currency` varchar(255) DEFAULT NULL,
  `auth_gatewyReferenceNumber` varchar(255) DEFAULT NULL,
  `configurationKey` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_apparel_12`;
CREATE TABLE `object_brick_store_apparel_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `fittings` text,
  `zips` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_approvals_12`;
CREATE TABLE `object_brick_store_approvals_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `fifaApproved` tinyint(1) DEFAULT NULL,
  `fifaInspected` tinyint(1) DEFAULT NULL,
  `imsChecked` tinyint(1) DEFAULT NULL,
  `ihfApproved` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_featuresBenefitsBackpacks_12`;
CREATE TABLE `object_brick_store_featuresBenefitsBackpacks_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_featuresBenefitsMats_12`;
CREATE TABLE `object_brick_store_featuresBenefitsMats_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_featuresBenefitsShoes_12`;
CREATE TABLE `object_brick_store_featuresBenefitsShoes_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_featuresBenefitsSleepingbags_12`;
CREATE TABLE `object_brick_store_featuresBenefitsSleepingbags_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_featuresBenefitsTents_12`;
CREATE TABLE `object_brick_store_featuresBenefitsTents_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_featuresHeadlamps_12`;
CREATE TABLE `object_brick_store_featuresHeadlamps_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `lumen` double DEFAULT NULL,
  `lightDistance` double DEFAULT NULL,
  `lightDuration` double DEFAULT NULL,
  `ledType` varchar(255) DEFAULT NULL,
  `ledBoost` varchar(255) DEFAULT NULL,
  `ledRed` varchar(255) DEFAULT NULL,
  `waterResistant` varchar(255) DEFAULT NULL,
  `batteries` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `hasFlashingMode` tinyint(1) DEFAULT NULL,
  `isCeApproved` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_matsSpecs_12`;
CREATE TABLE `object_brick_store_matsSpecs_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `length` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `materialTop` varchar(255) DEFAULT NULL,
  `materialBottom` varchar(255) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `isCFCfree` tinyint(1) DEFAULT NULL,
  `has3partWaveShape` tinyint(1) DEFAULT NULL,
  `structure` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_outdoor_12`;
CREATE TABLE `object_brick_store_outdoor_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_rucksackSpecs_12`;
CREATE TABLE `object_brick_store_rucksackSpecs_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `volume` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `load` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `expandTo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_shoeDetails_12`;
CREATE TABLE `object_brick_store_shoeDetails_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_shoe_12`;
CREATE TABLE `object_brick_store_shoe_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `footTypes` text,
  `gaitTypes` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_snowsport_12`;
CREATE TABLE `object_brick_store_snowsport_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `specs` text,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_specsSleepingbags_12`;
CREATE TABLE `object_brick_store_specsSleepingbags_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `weight` double DEFAULT NULL,
  `length` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `bodySize` double DEFAULT NULL,
  `fabricShell` varchar(255) DEFAULT NULL,
  `fabricLining` varchar(255) DEFAULT NULL,
  `filling` varchar(255) DEFAULT NULL,
  `protection` varchar(255) DEFAULT NULL,
  `packingSize` varchar(255) DEFAULT NULL,
  `temperatureComfort` double DEFAULT NULL,
  `temperatureLimit` double DEFAULT NULL,
  `temperatureExtreme` double DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_tentGroundsheet_12`;
CREATE TABLE `object_brick_store_tentGroundsheet_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `groundSheet1` int(11) DEFAULT NULL,
  `groundSheet2` int(11) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_tentSpecifications_12`;
CREATE TABLE `object_brick_store_tentSpecifications_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `outsideMaterial` varchar(255) DEFAULT NULL,
  `insideMaterial` varchar(255) DEFAULT NULL,
  `floorMaterial` varchar(255) DEFAULT NULL,
  `waterproofRain` varchar(255) DEFAULT NULL,
  `waterproofGround` varchar(255) DEFAULT NULL,
  `construction` varchar(255) DEFAULT NULL,
  `tentPegs` varchar(255) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `isMainSeamTaped` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_weight_12`;
CREATE TABLE `object_brick_store_weight_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `weight` double DEFAULT NULL,
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_FilterCategory_7`;
CREATE TABLE `object_collection_FilterCategory_7` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  `includeParentCategories` tinyint(1) DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_FilterMultiRelation_7`;
CREATE TABLE `object_collection_FilterMultiRelation_7` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  `useAndCondition` tinyint(1) DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_FilterMultiSelectFromMultiSelect_7`;
CREATE TABLE `object_collection_FilterMultiSelectFromMultiSelect_7` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `UseAndCondition` tinyint(1) DEFAULT NULL,
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_FilterMultiSelect_7`;
CREATE TABLE `object_collection_FilterMultiSelect_7` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `UseAndCondition` tinyint(1) DEFAULT NULL,
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_FilterNumberRangeSelection_7`;
CREATE TABLE `object_collection_FilterNumberRangeSelection_7` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  `ranges__range1#from` double DEFAULT NULL,
  `ranges__range1#to` double DEFAULT NULL,
  `ranges__range2#from` double DEFAULT NULL,
  `ranges__range2#to` double DEFAULT NULL,
  `ranges__range3#from` double DEFAULT NULL,
  `ranges__range3#to` double DEFAULT NULL,
  `ranges__range4#from` double DEFAULT NULL,
  `ranges__range4#to` double DEFAULT NULL,
  `preSelectFrom` double DEFAULT NULL,
  `preSelectTo` double DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_FilterNumberRange_7`;
CREATE TABLE `object_collection_FilterNumberRange_7` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  `rangeFrom` double DEFAULT NULL,
  `rangeTo` double DEFAULT NULL,
  `preSelectFrom` double DEFAULT NULL,
  `preSelectTo` double DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_FilterRelation_7`;
CREATE TABLE `object_collection_FilterRelation_7` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_FilterSelectFromMultiSelect_7`;
CREATE TABLE `object_collection_FilterSelectFromMultiSelect_7` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_FilterSelect_7`;
CREATE TABLE `object_collection_FilterSelect_7` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL,
  `scriptPath` varchar(255) DEFAULT NULL,
  `field__tenant` varchar(100) DEFAULT NULL,
  `field__field` varchar(200) DEFAULT NULL,
  `field__preSelect` text,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_OrderByFields_7`;
CREATE TABLE `object_collection_OrderByFields_7` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `field` varchar(190) DEFAULT NULL,
  `direction` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_OrderPriceModifications_9`;
CREATE TABLE `object_collection_OrderPriceModifications_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `amount` decimal(19,4) DEFAULT NULL,
  `netAmount` decimal(19,4) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_PaymentInfo_9`;
CREATE TABLE `object_collection_PaymentInfo_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `paymentStart` bigint(20) DEFAULT NULL,
  `paymentReference` varchar(255) DEFAULT NULL,
  `paymentState` varchar(190) DEFAULT NULL,
  `internalPaymentId` varchar(255) DEFAULT NULL,
  `paymentFinish` bigint(20) DEFAULT NULL,
  `message` longtext,
  `provider_qpay_amount` varchar(255) DEFAULT NULL,
  `provider_qpay_paymentType` varchar(255) DEFAULT NULL,
  `provider_qpay_paymentState` varchar(255) DEFAULT NULL,
  `provider_datatrans_acqAuthorizationCode` varchar(255) DEFAULT NULL,
  `provider_datatrans_amount` varchar(255) DEFAULT NULL,
  `provider_datatrans_responseXML` longtext,
  `provider_paypal_TransactionType` varchar(255) DEFAULT NULL,
  `provider_paypal_PaymentType` varchar(255) DEFAULT NULL,
  `provider_paypal_amount` varchar(255) DEFAULT NULL,
  `providerData` longtext,
  `provider_payu_amount` varchar(255) DEFAULT NULL,
  `provider_payu_PaymentType` varchar(255) DEFAULT NULL,
  `provider_ogone_amount` varchar(255) DEFAULT NULL,
  `provider_ogone_PaymentId` varchar(255) DEFAULT NULL,
  `provider_ogone_PaymentType` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_PricingRule_8`;
CREATE TABLE `object_collection_PricingRule_8` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `ruleId` double DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_SimilarityField_7`;
CREATE TABLE `object_collection_SimilarityField_7` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `field` varchar(190) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_TaxEntry_35`;
CREATE TABLE `object_collection_TaxEntry_35` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `percent` double DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_TaxEntry_localized_35`;
CREATE TABLE `object_collection_TaxEntry_localized_35` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(190) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`,`index`,`fieldname`),
  KEY `ooo_id` (`ooo_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_collection_VoucherTokenTypePattern_33`;
CREATE TABLE `object_collection_VoucherTokenTypePattern_33` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `prefix` varchar(255) DEFAULT NULL,
  `length` double DEFAULT NULL,
  `count` double DEFAULT NULL,
  `characterType` varchar(190) DEFAULT NULL,
  `separator` varchar(255) DEFAULT NULL,
  `separatorCount` decimal(64,0) DEFAULT NULL,
  `allowOncePerCart` tinyint(1) DEFAULT NULL,
  `onlyTokenPerCart` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_VoucherTokenTypeSingle_33`;
CREATE TABLE `object_collection_VoucherTokenTypeSingle_33` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `token` varchar(255) DEFAULT NULL,
  `usages` decimal(64,0) DEFAULT NULL,
  `onlyTokenPerCart` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_collection_productImages_12`;
CREATE TABLE `object_collection_productImages_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `index` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `image` int(11) DEFAULT NULL,
  PRIMARY KEY (`o_id`,`index`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `index` (`index`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_data_12`;
CREATE TABLE `object_localized_data_12` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `colorName` varchar(255) DEFAULT NULL,
  `price` decimal(19,4) DEFAULT NULL,
  `priceOld` decimal(19,4) DEFAULT NULL,
  `fromPrice` tinyint(1) DEFAULT NULL,
  `description` longtext,
  `material` longtext,
  `youtubeVideo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`),
  KEY `p_index_colorName` (`colorName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_data_14`;
CREATE TABLE `object_localized_data_14` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `image` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `seotext` longtext,
  `sortkey` double DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`),
  KEY `p_index_sortkey` (`sortkey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_data_15`;
CREATE TABLE `object_localized_data_15` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `description` longtext,
  `icon` int(11) DEFAULT NULL,
  `usage` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_data_16`;
CREATE TABLE `object_localized_data_16` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `icon` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `description` longtext,
  `link` text,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_data_23`;
CREATE TABLE `object_localized_data_23` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `icon` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `description` longtext,
  `link` text,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_data_35`;
CREATE TABLE `object_localized_data_35` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_12_de_AT`;
CREATE TABLE `object_localized_query_12_de_AT` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `colorName` varchar(255) DEFAULT NULL,
  `price` decimal(19,4) DEFAULT NULL,
  `priceOld` decimal(19,4) DEFAULT NULL,
  `fromPrice` tinyint(1) DEFAULT NULL,
  `description` longtext,
  `material` longtext,
  `downloads` text,
  `videos` text,
  `rotation__id` int(11) DEFAULT NULL,
  `rotation__type` enum('document','asset','object') DEFAULT NULL,
  `youtubeVideo` varchar(255) DEFAULT NULL,
  `textsAvailable` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`),
  KEY `p_index_colorName` (`colorName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_12_en_GB`;
CREATE TABLE `object_localized_query_12_en_GB` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `colorName` varchar(255) DEFAULT NULL,
  `price` decimal(19,4) DEFAULT NULL,
  `priceOld` decimal(19,4) DEFAULT NULL,
  `fromPrice` tinyint(1) DEFAULT NULL,
  `description` longtext,
  `material` longtext,
  `downloads` text,
  `videos` text,
  `rotation__id` int(11) DEFAULT NULL,
  `rotation__type` enum('document','asset','object') DEFAULT NULL,
  `youtubeVideo` varchar(255) DEFAULT NULL,
  `textsAvailable` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`),
  KEY `p_index_colorName` (`colorName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_12_fr_FR`;
CREATE TABLE `object_localized_query_12_fr_FR` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `colorName` varchar(255) DEFAULT NULL,
  `price` decimal(19,4) DEFAULT NULL,
  `priceOld` decimal(19,4) DEFAULT NULL,
  `fromPrice` tinyint(1) DEFAULT NULL,
  `description` longtext,
  `material` longtext,
  `downloads` text,
  `videos` text,
  `rotation__id` int(11) DEFAULT NULL,
  `rotation__type` enum('document','asset','object') DEFAULT NULL,
  `youtubeVideo` varchar(255) DEFAULT NULL,
  `textsAvailable` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`),
  KEY `p_index_colorName` (`colorName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_14_de_AT`;
CREATE TABLE `object_localized_query_14_de_AT` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `image` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `seotext` longtext,
  `sortkey` double DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`),
  KEY `p_index_sortkey` (`sortkey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_14_en_GB`;
CREATE TABLE `object_localized_query_14_en_GB` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `image` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `seotext` longtext,
  `sortkey` double DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`),
  KEY `p_index_sortkey` (`sortkey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_14_fr_FR`;
CREATE TABLE `object_localized_query_14_fr_FR` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `image` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `seotext` longtext,
  `sortkey` double DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`),
  KEY `p_index_sortkey` (`sortkey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_15_de_AT`;
CREATE TABLE `object_localized_query_15_de_AT` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `description` longtext,
  `icon` int(11) DEFAULT NULL,
  `usage` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_15_en_GB`;
CREATE TABLE `object_localized_query_15_en_GB` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `description` longtext,
  `icon` int(11) DEFAULT NULL,
  `usage` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_15_fr_FR`;
CREATE TABLE `object_localized_query_15_fr_FR` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `description` longtext,
  `icon` int(11) DEFAULT NULL,
  `usage` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_16_de_AT`;
CREATE TABLE `object_localized_query_16_de_AT` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `icon` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `description` longtext,
  `link` text,
  `images` text,
  `documents` text,
  `videos` text,
  `downloads` text,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_16_en_GB`;
CREATE TABLE `object_localized_query_16_en_GB` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `icon` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `description` longtext,
  `link` text,
  `images` text,
  `documents` text,
  `videos` text,
  `downloads` text,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_16_fr_FR`;
CREATE TABLE `object_localized_query_16_fr_FR` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `icon` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `description` longtext,
  `link` text,
  `images` text,
  `documents` text,
  `videos` text,
  `downloads` text,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_23_de_AT`;
CREATE TABLE `object_localized_query_23_de_AT` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `icon` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `description` longtext,
  `link` text,
  `images` text,
  `documents` text,
  `videos` text,
  `downloads` text,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_23_en_GB`;
CREATE TABLE `object_localized_query_23_en_GB` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `icon` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `description` longtext,
  `link` text,
  `images` text,
  `documents` text,
  `videos` text,
  `downloads` text,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_23_fr_FR`;
CREATE TABLE `object_localized_query_23_fr_FR` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `icon` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `seoname` varchar(255) DEFAULT NULL,
  `description` longtext,
  `link` text,
  `images` text,
  `documents` text,
  `videos` text,
  `downloads` text,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_localized_query_35_de_AT`;
CREATE TABLE `object_localized_query_35_de_AT` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_35_en_GB`;
CREATE TABLE `object_localized_query_35_en_GB` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_localized_query_35_fr_FR`;
CREATE TABLE `object_localized_query_35_fr_FR` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`ooo_id`,`language`),
  KEY `ooo_id` (`ooo_id`),
  KEY `language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_metadata_12`;
CREATE TABLE `object_metadata_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(71) NOT NULL,
  `column` varchar(255) NOT NULL,
  `data` text,
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`o_id`,`dest_id`,`type`,`fieldname`,`column`,`ownertype`,`ownername`,`position`,`index`),
  KEY `o_id` (`o_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `column` (`column`),
  KEY `ownertype` (`ownertype`),
  KEY `ownername` (`ownername`),
  KEY `position` (`position`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_metadata_41`;
CREATE TABLE `object_metadata_41` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(71) NOT NULL,
  `column` varchar(190) NOT NULL,
  `data` text,
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`o_id`,`dest_id`,`type`,`fieldname`,`column`,`ownertype`,`ownername`,`position`,`index`),
  KEY `o_id` (`o_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `column` (`column`),
  KEY `ownertype` (`ownertype`),
  KEY `ownername` (`ownername`),
  KEY `position` (`position`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_12`;
CREATE TABLE `object_query_12` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '12',
  `oo_className` varchar(255) DEFAULT 'Product',
  `artno` varchar(255) DEFAULT NULL,
  `ean` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `brand__id` int(11) DEFAULT NULL,
  `brand__type` enum('document','asset','object') DEFAULT NULL,
  `gender` text,
  `categories` text,
  `features` text,
  `technologies` text,
  `attributes` text,
  `collection` text,
  `color` text,
  `materialComposition` text,
  `secondaryMaterialComposition` text,
  `relatedProducts` text,
  `imagesInheritance` varchar(190) DEFAULT NULL,
  `attributesAvailable` varchar(190) DEFAULT NULL,
  `variantsAvailable` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_artno` (`artno`),
  KEY `p_index_size` (`size`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_14`;
CREATE TABLE `object_query_14` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '14',
  `oo_className` varchar(255) DEFAULT 'ProductCategory',
  `filterdefinition__id` int(11) DEFAULT NULL,
  `filterdefinition__type` enum('document','asset','object') DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_15`;
CREATE TABLE `object_query_15` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '15',
  `oo_className` varchar(255) DEFAULT 'ProductCollection',
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_16`;
CREATE TABLE `object_query_16` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '16',
  `oo_className` varchar(255) DEFAULT 'ProductTechnology',
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_23`;
CREATE TABLE `object_query_23` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '23',
  `oo_className` varchar(255) DEFAULT 'ProductAttribute',
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_30`;
CREATE TABLE `object_query_30` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '30',
  `oo_className` varchar(255) DEFAULT 'OfferToolOffer',
  `totalPrice` decimal(19,4) DEFAULT NULL,
  `items` text,
  `offernumber` varchar(255) DEFAULT NULL,
  `dateCreated` bigint(20) DEFAULT NULL,
  `dateValidUntil` bigint(20) DEFAULT NULL,
  `discount` decimal(19,4) DEFAULT NULL,
  `customItems` text,
  `discountType` varchar(190) DEFAULT NULL,
  `cartId` varchar(255) DEFAULT NULL,
  `totalPriceBeforeDiscount` decimal(19,4) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_31`;
CREATE TABLE `object_query_31` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '31',
  `oo_className` varchar(255) DEFAULT 'OfferToolOfferItem',
  `product__id` int(11) DEFAULT NULL,
  `product__type` enum('document','asset','object') DEFAULT NULL,
  `productNumber` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `subItems` text,
  `comment` longtext,
  `originalTotalPrice` decimal(19,4) DEFAULT NULL,
  `finalTotalPrice` decimal(19,4) DEFAULT NULL,
  `discount` decimal(19,4) DEFAULT NULL,
  `DiscountType` varchar(190) DEFAULT NULL,
  `cartItemKey` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_32`;
CREATE TABLE `object_query_32` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '32',
  `oo_className` varchar(255) DEFAULT 'OfferToolCustomProduct',
  `price` decimal(19,4) DEFAULT NULL,
  `productGroup` varchar(190) DEFAULT NULL,
  `OSproductNumber` varchar(255) DEFAULT NULL,
  `OSName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_33`;
CREATE TABLE `object_query_33` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '33',
  `oo_className` varchar(255) DEFAULT 'OnlineShopVoucherSeries',
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_34`;
CREATE TABLE `object_query_34` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '34',
  `oo_className` varchar(255) DEFAULT 'OnlineShopVoucherToken',
  `token` varchar(255) DEFAULT NULL,
  `tokenId` double DEFAULT NULL,
  `voucherSeries__id` int(11) DEFAULT NULL,
  `voucherSeries__type` enum('document','asset','object') DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_35`;
CREATE TABLE `object_query_35` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '35',
  `oo_className` varchar(255) DEFAULT 'OnlineShopTaxClass',
  `taxEntryCombinationType` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_36`;
CREATE TABLE `object_query_36` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '36',
  `oo_className` varchar(255) DEFAULT 'CustomerSegmentGroup',
  `name` varchar(255) DEFAULT NULL,
  `reference` varchar(190) DEFAULT NULL,
  `calculated` tinyint(1) DEFAULT NULL,
  `showAsFilter` tinyint(1) DEFAULT NULL,
  `exportNewsletterProvider` tinyint(1) DEFAULT NULL,
  `filterSortOrder` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_showAsFilter` (`showAsFilter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_37`;
CREATE TABLE `object_query_37` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '37',
  `oo_className` varchar(255) DEFAULT 'CustomerSegment',
  `name` varchar(255) DEFAULT NULL,
  `group__id` int(11) DEFAULT NULL,
  `group__type` enum('document','asset','object') DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `calculated` tinyint(1) DEFAULT NULL,
  `useAsTargetGroup` tinyint(1) DEFAULT NULL,
  `targetGroup` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_reference` (`reference`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_38`;
CREATE TABLE `object_query_38` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '38',
  `oo_className` varchar(255) DEFAULT 'SsoIdentity',
  `provider` varchar(190) DEFAULT NULL,
  `identifier` varchar(190) DEFAULT NULL,
  `profileData` longtext,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_provider` (`provider`),
  KEY `p_index_identifier` (`identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_39`;
CREATE TABLE `object_query_39` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '39',
  `oo_className` varchar(255) DEFAULT 'TermSegmentBuilderDefinition',
  `name` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_40`;
CREATE TABLE `object_query_40` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '40',
  `oo_className` varchar(255) DEFAULT 'LinkActivityDefinition',
  `code` varchar(190) DEFAULT NULL,
  `attributeType` varchar(190) DEFAULT NULL,
  `label` varchar(190) DEFAULT NULL,
  `link` text,
  `active` varchar(190) DEFAULT NULL,
  `utm_source` varchar(190) DEFAULT NULL,
  `utm_medium` varchar(190) DEFAULT NULL,
  `utm_campaign` varchar(190) DEFAULT NULL,
  `utm_term` varchar(190) DEFAULT NULL,
  `utm_content` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_41`;
CREATE TABLE `object_query_41` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '41',
  `oo_className` varchar(255) DEFAULT 'Customer',
  `active` tinyint(1) DEFAULT NULL,
  `gender` varchar(190) DEFAULT NULL,
  `firstname` varchar(190) DEFAULT NULL,
  `lastname` varchar(190) DEFAULT NULL,
  `street` varchar(190) DEFAULT NULL,
  `zip` varchar(190) DEFAULT NULL,
  `city` varchar(190) DEFAULT NULL,
  `countryCode` varchar(190) DEFAULT NULL,
  `email` varchar(190) DEFAULT NULL,
  `phone` varchar(190) DEFAULT NULL,
  `manualSegments` text,
  `calculatedSegments` text,
  `idEncoded` varchar(190) DEFAULT NULL,
  `password` varchar(190) DEFAULT NULL,
  `ssoIdentities` text,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_idEncoded` (`idEncoded`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_query_7`;
CREATE TABLE `object_query_7` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '7',
  `oo_className` varchar(255) DEFAULT 'FilterDefinition',
  `pageLimit` double DEFAULT NULL,
  `ajaxReload` tinyint(1) DEFAULT NULL,
  `limitOnFirstLoad` double DEFAULT NULL,
  `defaultOrderByInheritance` varchar(190) DEFAULT NULL,
  `conditionsInheritance` varchar(190) DEFAULT NULL,
  `filtersInheritance` varchar(190) DEFAULT NULL,
  `crossSellingCategory__id` int(11) DEFAULT NULL,
  `crossSellingCategory__type` enum('document','asset','object') DEFAULT NULL,
  `similarityFieldsInheritance` varchar(190) DEFAULT NULL,
  `infiniteScroll` tinyint(1) DEFAULT NULL,
  `orderByAsc` longtext,
  `orderByDesc` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_8`;
CREATE TABLE `object_query_8` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '8',
  `oo_className` varchar(255) DEFAULT 'OnlineShopOrderItem',
  `product__id` int(11) DEFAULT NULL,
  `product__type` enum('document','asset','object') DEFAULT NULL,
  `productNumber` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `totalPrice` decimal(19,4) DEFAULT NULL,
  `subItems` text,
  `comment` longtext,
  `orderState` varchar(190) DEFAULT NULL,
  `totalNetPrice` decimal(19,4) DEFAULT NULL,
  `taxInfo` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_9`;
CREATE TABLE `object_query_9` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '9',
  `oo_className` varchar(255) DEFAULT 'OnlineShopOrder',
  `ordernumber` varchar(255) DEFAULT NULL,
  `totalPrice` decimal(19,4) DEFAULT NULL,
  `orderdate` bigint(20) DEFAULT NULL,
  `items` text,
  `customer__id` int(11) DEFAULT NULL,
  `customer__type` enum('document','asset','object') DEFAULT NULL,
  `paymentReference` varchar(255) DEFAULT NULL,
  `orderState` varchar(190) DEFAULT NULL,
  `cartId` varchar(255) DEFAULT NULL,
  `customerOrderData` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `comment` longtext,
  `customerCompany` varchar(255) DEFAULT NULL,
  `customerStreet` varchar(255) DEFAULT NULL,
  `customerZip` varchar(255) DEFAULT NULL,
  `customerCountry` varchar(190) DEFAULT NULL,
  `customerEmail` varchar(255) DEFAULT NULL,
  `deliveryCompany` varchar(255) DEFAULT NULL,
  `deliveryStreet` varchar(255) DEFAULT NULL,
  `deliveryZip` varchar(255) DEFAULT NULL,
  `deliveryCity` varchar(255) DEFAULT NULL,
  `deliveryCountry` varchar(190) DEFAULT NULL,
  `voucherTokens` text,
  `customerCity` varchar(255) DEFAULT NULL,
  `subTotalPrice` decimal(19,4) DEFAULT NULL,
  `customerFirstname` varchar(255) DEFAULT NULL,
  `customerLastname` varchar(255) DEFAULT NULL,
  `deliveryLastname` varchar(255) DEFAULT NULL,
  `deliveryFirstname` varchar(255) DEFAULT NULL,
  `giftItems` text,
  `subTotalNetPrice` decimal(19,4) DEFAULT NULL,
  `totalNetPrice` decimal(19,4) DEFAULT NULL,
  `taxInfo` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_12`;
CREATE TABLE `object_relations_12` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_14`;
CREATE TABLE `object_relations_14` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_15`;
CREATE TABLE `object_relations_15` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_16`;
CREATE TABLE `object_relations_16` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_23`;
CREATE TABLE `object_relations_23` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_30`;
CREATE TABLE `object_relations_30` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_31`;
CREATE TABLE `object_relations_31` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_32`;
CREATE TABLE `object_relations_32` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_33`;
CREATE TABLE `object_relations_33` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_34`;
CREATE TABLE `object_relations_34` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_35`;
CREATE TABLE `object_relations_35` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_36`;
CREATE TABLE `object_relations_36` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_37`;
CREATE TABLE `object_relations_37` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_38`;
CREATE TABLE `object_relations_38` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_39`;
CREATE TABLE `object_relations_39` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_40`;
CREATE TABLE `object_relations_40` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_41`;
CREATE TABLE `object_relations_41` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_relations_7`;
CREATE TABLE `object_relations_7` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_8`;
CREATE TABLE `object_relations_8` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_relations_9`;
CREATE TABLE `object_relations_9` (
  `src_id` int(11) NOT NULL DEFAULT '0',
  `dest_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `fieldname` varchar(70) NOT NULL DEFAULT '0',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
  `ownername` varchar(70) NOT NULL DEFAULT '',
  `position` varchar(70) NOT NULL DEFAULT '0',
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`,`index`),
  KEY `index` (`index`),
  KEY `src_id` (`src_id`),
  KEY `dest_id` (`dest_id`),
  KEY `fieldname` (`fieldname`),
  KEY `position` (`position`),
  KEY `ownertype` (`ownertype`),
  KEY `type` (`type`),
  KEY `ownername` (`ownername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_12`;
CREATE TABLE `object_store_12` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `artno` varchar(255) DEFAULT NULL,
  `ean` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `gender` text,
  `color` text,
  `imagesInheritance` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_artno` (`artno`),
  KEY `p_index_size` (`size`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_14`;
CREATE TABLE `object_store_14` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_15`;
CREATE TABLE `object_store_15` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_16`;
CREATE TABLE `object_store_16` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_23`;
CREATE TABLE `object_store_23` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_30`;
CREATE TABLE `object_store_30` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `totalPrice` decimal(19,4) DEFAULT NULL,
  `offernumber` varchar(255) DEFAULT NULL,
  `dateCreated` bigint(20) DEFAULT NULL,
  `dateValidUntil` bigint(20) DEFAULT NULL,
  `discount` decimal(19,4) DEFAULT NULL,
  `discountType` varchar(190) DEFAULT NULL,
  `cartId` varchar(255) DEFAULT NULL,
  `totalPriceBeforeDiscount` decimal(19,4) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_31`;
CREATE TABLE `object_store_31` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `productNumber` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `comment` longtext,
  `originalTotalPrice` decimal(19,4) DEFAULT NULL,
  `finalTotalPrice` decimal(19,4) DEFAULT NULL,
  `discount` decimal(19,4) DEFAULT NULL,
  `DiscountType` varchar(190) DEFAULT NULL,
  `cartItemKey` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_32`;
CREATE TABLE `object_store_32` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `price` decimal(19,4) DEFAULT NULL,
  `productGroup` varchar(190) DEFAULT NULL,
  `OSproductNumber` varchar(255) DEFAULT NULL,
  `OSName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_33`;
CREATE TABLE `object_store_33` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_34`;
CREATE TABLE `object_store_34` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `token` varchar(255) DEFAULT NULL,
  `tokenId` double DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_35`;
CREATE TABLE `object_store_35` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `taxEntryCombinationType` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_36`;
CREATE TABLE `object_store_36` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `reference` varchar(190) DEFAULT NULL,
  `calculated` tinyint(1) DEFAULT NULL,
  `showAsFilter` tinyint(1) DEFAULT NULL,
  `exportNewsletterProvider` tinyint(1) DEFAULT NULL,
  `filterSortOrder` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_showAsFilter` (`showAsFilter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_37`;
CREATE TABLE `object_store_37` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `calculated` tinyint(1) DEFAULT NULL,
  `useAsTargetGroup` tinyint(1) DEFAULT NULL,
  `targetGroup` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_reference` (`reference`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_38`;
CREATE TABLE `object_store_38` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `provider` varchar(190) DEFAULT NULL,
  `identifier` varchar(190) DEFAULT NULL,
  `profileData` longtext,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_provider` (`provider`),
  KEY `p_index_identifier` (`identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_39`;
CREATE TABLE `object_store_39` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(190) DEFAULT NULL,
  `terms` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_40`;
CREATE TABLE `object_store_40` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `code` varchar(190) DEFAULT NULL,
  `attributeType` varchar(190) DEFAULT NULL,
  `label` varchar(190) DEFAULT NULL,
  `link` text,
  `active` varchar(190) DEFAULT NULL,
  `utm_source` varchar(190) DEFAULT NULL,
  `utm_medium` varchar(190) DEFAULT NULL,
  `utm_campaign` varchar(190) DEFAULT NULL,
  `utm_term` varchar(190) DEFAULT NULL,
  `utm_content` varchar(190) DEFAULT NULL,
  `attributes` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_41`;
CREATE TABLE `object_store_41` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(1) DEFAULT NULL,
  `gender` varchar(190) DEFAULT NULL,
  `firstname` varchar(190) DEFAULT NULL,
  `lastname` varchar(190) DEFAULT NULL,
  `street` varchar(190) DEFAULT NULL,
  `zip` varchar(190) DEFAULT NULL,
  `city` varchar(190) DEFAULT NULL,
  `countryCode` varchar(190) DEFAULT NULL,
  `email` varchar(190) DEFAULT NULL,
  `phone` varchar(190) DEFAULT NULL,
  `idEncoded` varchar(190) DEFAULT NULL,
  `password` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`oo_id`),
  KEY `p_index_idEncoded` (`idEncoded`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_7`;
CREATE TABLE `object_store_7` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `pageLimit` double DEFAULT NULL,
  `ajaxReload` tinyint(1) DEFAULT NULL,
  `limitOnFirstLoad` double DEFAULT NULL,
  `defaultOrderByInheritance` varchar(190) DEFAULT NULL,
  `conditionsInheritance` varchar(190) DEFAULT NULL,
  `filtersInheritance` varchar(190) DEFAULT NULL,
  `similarityFieldsInheritance` varchar(190) DEFAULT NULL,
  `infiniteScroll` tinyint(1) DEFAULT NULL,
  `orderByAsc` longtext,
  `orderByDesc` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_8`;
CREATE TABLE `object_store_8` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `productNumber` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `totalPrice` decimal(19,4) DEFAULT NULL,
  `comment` longtext,
  `orderState` varchar(190) DEFAULT NULL,
  `totalNetPrice` decimal(19,4) DEFAULT NULL,
  `taxInfo` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_9`;
CREATE TABLE `object_store_9` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `ordernumber` varchar(255) DEFAULT NULL,
  `totalPrice` decimal(19,4) DEFAULT NULL,
  `orderdate` bigint(20) DEFAULT NULL,
  `paymentReference` varchar(255) DEFAULT NULL,
  `orderState` varchar(190) DEFAULT NULL,
  `cartId` varchar(255) DEFAULT NULL,
  `customerOrderData` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `comment` longtext,
  `customerCompany` varchar(255) DEFAULT NULL,
  `customerStreet` varchar(255) DEFAULT NULL,
  `customerZip` varchar(255) DEFAULT NULL,
  `customerCountry` varchar(190) DEFAULT NULL,
  `customerEmail` varchar(255) DEFAULT NULL,
  `deliveryCompany` varchar(255) DEFAULT NULL,
  `deliveryStreet` varchar(255) DEFAULT NULL,
  `deliveryZip` varchar(255) DEFAULT NULL,
  `deliveryCity` varchar(255) DEFAULT NULL,
  `deliveryCountry` varchar(190) DEFAULT NULL,
  `customerCity` varchar(255) DEFAULT NULL,
  `subTotalPrice` decimal(19,4) DEFAULT NULL,
  `customerFirstname` varchar(255) DEFAULT NULL,
  `customerLastname` varchar(255) DEFAULT NULL,
  `deliveryLastname` varchar(255) DEFAULT NULL,
  `deliveryFirstname` varchar(255) DEFAULT NULL,
  `subTotalNetPrice` decimal(19,4) DEFAULT NULL,
  `totalNetPrice` decimal(19,4) DEFAULT NULL,
  `taxInfo` longtext,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `pimcore_migrations`;
CREATE TABLE `pimcore_migrations` (
  `migration_set` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `migrated_at` datetime NOT NULL,
  PRIMARY KEY (`migration_set`,`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



DROP TABLE IF EXISTS `plugin_cmf_actiontrigger_actions`;
CREATE TABLE `plugin_cmf_actiontrigger_actions` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `ruleId` int(20) unsigned NOT NULL,
  `actionDelay` int(20) unsigned NOT NULL,
  `implementationClass` varchar(255) NOT NULL,
  `options` text,
  `creationDate` bigint(20) NOT NULL,
  `modificationDate` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ruleId` (`ruleId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_actiontrigger_queue`;
CREATE TABLE `plugin_cmf_actiontrigger_queue` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customerId` int(11) unsigned NOT NULL,
  `actionDate` bigint(20) unsigned DEFAULT NULL,
  `actionId` int(11) unsigned DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  `environment` text,
  PRIMARY KEY (`id`),
  KEY `customerId` (`customerId`),
  KEY `actionId` (`actionId`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_actiontrigger_rules`;
CREATE TABLE `plugin_cmf_actiontrigger_rules` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `trigger` text COMMENT 'configuration of triggers',
  `condition` text COMMENT 'configuration of conditions',
  `creationDate` int(11) NOT NULL,
  `modificationDate` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `active` (`active`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_activities`;
CREATE TABLE `plugin_cmf_activities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customerId` int(11) unsigned NOT NULL,
  `activityDate` bigint(20) unsigned DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `implementationClass` varchar(255) NOT NULL,
  `o_id` int(11) unsigned DEFAULT NULL,
  `a_id` varchar(255) DEFAULT NULL,
  `attributes` blob,
  `md5` char(32) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customerId` (`customerId`),
  KEY `o_id` (`o_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_customer_filter_definition`;
CREATE TABLE `plugin_cmf_customer_filter_definition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ownerId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `definition` text NOT NULL,
  `allowedUserIds` text,
  `readOnly` bit(1) DEFAULT b'0',
  `shortcutAvailable` bit(1) DEFAULT b'0',
  `creationDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `modificationDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_deletions`;
CREATE TABLE `plugin_cmf_deletions` (
  `id` int(11) unsigned NOT NULL,
  `entityType` char(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  KEY `type` (`entityType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_duplicates_false_positives`;
CREATE TABLE `plugin_cmf_duplicates_false_positives` (
  `row1` text NOT NULL,
  `row2` text NOT NULL,
  `row1Details` text NOT NULL,
  `row2Details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_duplicatesindex`;
CREATE TABLE `plugin_cmf_duplicatesindex` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `duplicateData` text NOT NULL,
  `duplicateDataMd5` varchar(32) DEFAULT NULL,
  `fieldCombination` char(255) NOT NULL DEFAULT '',
  `fieldCombinationCrc` int(11) unsigned NOT NULL,
  `metaphone` varchar(50) DEFAULT NULL,
  `soundex` varchar(50) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `duplicateDataCrc` (`duplicateDataMd5`),
  KEY `fieldCombination` (`fieldCombination`),
  KEY `soundex` (`soundex`),
  KEY `metaphone` (`metaphone`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_duplicatesindex_customers`;
CREATE TABLE `plugin_cmf_duplicatesindex_customers` (
  `duplicate_id` int(11) unsigned NOT NULL,
  `customer_id` int(11) unsigned NOT NULL,
  KEY `duplicate_id` (`duplicate_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_newsletter_queue`;
CREATE TABLE `plugin_cmf_newsletter_queue` (
  `customerId` int(11) unsigned NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `operation` varchar(20) DEFAULT NULL,
  `modificationDate` bigint(20) DEFAULT NULL,
  UNIQUE KEY `customerId` (`customerId`),
  KEY `operation` (`operation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_potential_duplicates`;
CREATE TABLE `plugin_cmf_potential_duplicates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `duplicateCustomerIds` varchar(255) NOT NULL DEFAULT '',
  `fieldCombinations` text NOT NULL,
  `declined` tinyint(1) DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `duplicateIds` (`duplicateCustomerIds`),
  KEY `declined` (`declined`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_segment_assignment`;
CREATE TABLE `plugin_cmf_segment_assignment` (
  `elementId` int(11) NOT NULL DEFAULT '0',
  `elementType` enum('document','asset','object') NOT NULL DEFAULT 'document',
  `segments` text,
  `breaksInheritance` tinyint(4) DEFAULT NULL,
  `inPreparation` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`elementId`,`elementType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `plugin_cmf_segment_assignment_index`;
CREATE TABLE `plugin_cmf_segment_assignment_index` (
  `elementId` int(11) NOT NULL DEFAULT '0',
  `elementType` enum('document','asset','object') NOT NULL DEFAULT 'document',
  `segmentId` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`elementId`,`elementType`,`segmentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `plugin_cmf_segment_assignment_queue`;
CREATE TABLE `plugin_cmf_segment_assignment_queue` (
  `elementId` int(11) NOT NULL DEFAULT '0',
  `elementType` enum('document','asset','object') NOT NULL DEFAULT 'document',
  PRIMARY KEY (`elementId`,`elementType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `plugin_cmf_segmentbuilder_changes_queue`;
CREATE TABLE `plugin_cmf_segmentbuilder_changes_queue` (
  `customerId` int(11) unsigned NOT NULL,
  UNIQUE KEY `customerId` (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_sequence_numbers`;
CREATE TABLE `plugin_cmf_sequence_numbers` (
  `name` char(50) NOT NULL,
  `number` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

