
SET NAMES utf8mb4;



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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;



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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;



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



DROP TABLE IF EXISTS `keyvalue_groups`;
CREATE TABLE `keyvalue_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `keyvalue_keys`;
CREATE TABLE `keyvalue_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `type` enum('bool','number','select','text','translated','translatedSelect','range') DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `possiblevalues` text,
  `group` int(11) DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT '0',
  `modificationDate` bigint(20) unsigned DEFAULT '0',
  `translator` int(11) DEFAULT NULL,
  `mandatory` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group` (`group`),
  CONSTRAINT `keyvalue_keys_ibfk_1` FOREIGN KEY (`group`) REFERENCES `keyvalue_groups` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `keyvalue_translator_configuration`;
CREATE TABLE `keyvalue_translator_configuration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `translator` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



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
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_query_PaymentProviderPayPal_9`;
CREATE TABLE `object_brick_query_PaymentProviderPayPal_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `auth_token` varchar(255) DEFAULT NULL,
  `auth_PayerID` varchar(255) DEFAULT NULL,
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
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
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
  `zips` varchar(255) DEFAULT NULL,
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
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_PaymentProviderPayPal_9`;
CREATE TABLE `object_brick_store_PaymentProviderPayPal_9` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `auth_token` varchar(255) DEFAULT NULL,
  `auth_PayerID` varchar(255) DEFAULT NULL,
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
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
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
  PRIMARY KEY (`o_id`,`fieldname`),
  KEY `o_id` (`o_id`),
  KEY `fieldname` (`fieldname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_brick_store_apparel_12`;
CREATE TABLE `object_brick_store_apparel_12` (
  `o_id` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `fittings` text,
  `zips` varchar(255) DEFAULT NULL,
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
  `field` varchar(255) DEFAULT NULL,
  `direction` varchar(255) DEFAULT NULL,
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
  `paymentState` varchar(255) DEFAULT NULL,
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
  `field` varchar(255) DEFAULT NULL,
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
  `characterType` varchar(255) DEFAULT NULL,
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
  `usage` varchar(255) DEFAULT NULL,
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



DROP TABLE IF EXISTS `object_localized_data_9`;
CREATE TABLE `object_localized_data_9` (
  `ooo_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
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
  `usage` varchar(255) DEFAULT NULL,
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
  `usage` varchar(255) DEFAULT NULL,
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
  `usage` varchar(255) DEFAULT NULL,
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
  PRIMARY KEY (`o_id`,`dest_id`,`type`,`fieldname`,`column`,`ownertype`,`ownername`,`position`),
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
  PRIMARY KEY (`o_id`,`dest_id`,`type`,`fieldname`,`column`,`ownertype`,`ownername`,`position`),
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
  `imagesInheritance` varchar(255) DEFAULT NULL,
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
  `discountType` varchar(255) DEFAULT NULL,
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
  `DiscountType` varchar(255) DEFAULT NULL,
  `cartItemKey` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_query_32`;
CREATE TABLE `object_query_32` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `oo_classId` int(11) DEFAULT '32',
  `oo_className` varchar(255) DEFAULT 'OfferToolCustomProduct',
  `price` decimal(19,4) DEFAULT NULL,
  `productGroup` varchar(255) DEFAULT NULL,
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
  `terms` longtext,
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
  `attributes` longtext,
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
  `defaultOrderByInheritance` varchar(255) DEFAULT NULL,
  `conditionsInheritance` varchar(255) DEFAULT NULL,
  `filtersInheritance` varchar(255) DEFAULT NULL,
  `crossSellingCategory__id` int(11) DEFAULT NULL,
  `crossSellingCategory__type` enum('document','asset','object') DEFAULT NULL,
  `similarityFieldsInheritance` varchar(255) DEFAULT NULL,
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
  `orderState` varchar(255) DEFAULT NULL,
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
  `orderState` varchar(255) DEFAULT NULL,
  `cartId` varchar(255) DEFAULT NULL,
  `customerOrderData` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `comment` longtext,
  `customerCompany` varchar(255) DEFAULT NULL,
  `customerStreet` varchar(255) DEFAULT NULL,
  `customerZip` varchar(255) DEFAULT NULL,
  `customerCountry` varchar(255) DEFAULT NULL,
  `customerEmail` varchar(255) DEFAULT NULL,
  `deliveryCompany` varchar(255) DEFAULT NULL,
  `deliveryStreet` varchar(255) DEFAULT NULL,
  `deliveryZip` varchar(255) DEFAULT NULL,
  `deliveryCity` varchar(255) DEFAULT NULL,
  `deliveryCountry` varchar(255) DEFAULT NULL,
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
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
  `imagesInheritance` varchar(255) DEFAULT NULL,
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
  `discountType` varchar(255) DEFAULT NULL,
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
  `DiscountType` varchar(255) DEFAULT NULL,
  `cartItemKey` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`oo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `object_store_32`;
CREATE TABLE `object_store_32` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `price` decimal(19,4) DEFAULT NULL,
  `productGroup` varchar(255) DEFAULT NULL,
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
  PRIMARY KEY (`oo_id`),
  KEY `p_index_showAsFilter` (`showAsFilter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `object_store_37`;
CREATE TABLE `object_store_37` (
  `oo_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `calculated` tinyint(1) DEFAULT NULL,
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
  `defaultOrderByInheritance` varchar(255) DEFAULT NULL,
  `conditionsInheritance` varchar(255) DEFAULT NULL,
  `filtersInheritance` varchar(255) DEFAULT NULL,
  `similarityFieldsInheritance` varchar(255) DEFAULT NULL,
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
  `orderState` varchar(255) DEFAULT NULL,
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
  `orderState` varchar(255) DEFAULT NULL,
  `cartId` varchar(255) DEFAULT NULL,
  `customerOrderData` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `comment` longtext,
  `customerCompany` varchar(255) DEFAULT NULL,
  `customerStreet` varchar(255) DEFAULT NULL,
  `customerZip` varchar(255) DEFAULT NULL,
  `customerCountry` varchar(255) DEFAULT NULL,
  `customerEmail` varchar(255) DEFAULT NULL,
  `deliveryCompany` varchar(255) DEFAULT NULL,
  `deliveryStreet` varchar(255) DEFAULT NULL,
  `deliveryZip` varchar(255) DEFAULT NULL,
  `deliveryCity` varchar(255) DEFAULT NULL,
  `deliveryCountry` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `plugin_cmf_actiontrigger_queue`;
CREATE TABLE `plugin_cmf_actiontrigger_queue` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customerId` int(11) unsigned NOT NULL,
  `actionDate` bigint(20) unsigned DEFAULT NULL,
  `actionId` int(11) unsigned DEFAULT NULL,
  `creationDate` bigint(20) unsigned DEFAULT NULL,
  `modificationDate` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customerId` (`customerId`),
  KEY `actionId` (`actionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;



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



LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-assets.csv' INTO TABLE `assets`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-assets_metadata.csv' INTO TABLE `assets_metadata`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-bundle_advancedobjectsearch_savedsearch.csv' INTO TABLE `bundle_advancedobjectsearch_savedsearch`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-bundle_advancedobjectsearch_update_queue.csv' INTO TABLE `bundle_advancedobjectsearch_update_queue`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-bundle_outputdataconfigtoolkit_outputdefinition.csv' INTO TABLE `bundle_outputdataconfigtoolkit_outputdefinition`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-bundle_web2print_favorite_outputdefinitions.csv' INTO TABLE `bundle_web2print_favorite_outputdefinitions`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-classes.csv' INTO TABLE `classes`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-classificationstore_collectionrelations.csv' INTO TABLE `classificationstore_collectionrelations`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-classificationstore_collections.csv' INTO TABLE `classificationstore_collections`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-classificationstore_groups.csv' INTO TABLE `classificationstore_groups`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-classificationstore_keys.csv' INTO TABLE `classificationstore_keys`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-classificationstore_relations.csv' INTO TABLE `classificationstore_relations`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-classificationstore_stores.csv' INTO TABLE `classificationstore_stores`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-custom_layouts.csv' INTO TABLE `custom_layouts`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-dependencies.csv' INTO TABLE `dependencies`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-documents.csv' INTO TABLE `documents`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-documents_elements.csv' INTO TABLE `documents_elements`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-documents_email.csv' INTO TABLE `documents_email`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-documents_hardlink.csv' INTO TABLE `documents_hardlink`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-documents_link.csv' INTO TABLE `documents_link`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-documents_newsletter.csv' INTO TABLE `documents_newsletter`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-documents_page.csv' INTO TABLE `documents_page`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-documents_printpage.csv' INTO TABLE `documents_printpage`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-documents_snippet.csv' INTO TABLE `documents_snippet`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-documents_translations.csv' INTO TABLE `documents_translations`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_cart.csv' INTO TABLE `ecommerceframework_cart`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_cartcheckoutdata.csv' INTO TABLE `ecommerceframework_cartcheckoutdata`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_cartitem.csv' INTO TABLE `ecommerceframework_cartitem`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_optimized_productindex.csv' INTO TABLE `ecommerceframework_optimized_productindex`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_optimized_productindex_relations.csv' INTO TABLE `ecommerceframework_optimized_productindex_relations`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_pricing_rule.csv' INTO TABLE `ecommerceframework_pricing_rule`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_productindex.csv' INTO TABLE `ecommerceframework_productindex`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_productindex_relations.csv' INTO TABLE `ecommerceframework_productindex_relations`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_productindex_store.csv' INTO TABLE `ecommerceframework_productindex_store`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_vouchertoolkit_reservations.csv' INTO TABLE `ecommerceframework_vouchertoolkit_reservations`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_vouchertoolkit_statistics.csv' INTO TABLE `ecommerceframework_vouchertoolkit_statistics`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-ecommerceframework_vouchertoolkit_tokens.csv' INTO TABLE `ecommerceframework_vouchertoolkit_tokens`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-element_workflow_state.csv' INTO TABLE `element_workflow_state`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-email_blacklist.csv' INTO TABLE `email_blacklist`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-glossary.csv' INTO TABLE `glossary`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-keyvalue_groups.csv' INTO TABLE `keyvalue_groups`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-keyvalue_keys.csv' INTO TABLE `keyvalue_keys`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-keyvalue_translator_configuration.csv' INTO TABLE `keyvalue_translator_configuration`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-notes.csv' INTO TABLE `notes`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-notes_data.csv' INTO TABLE `notes_data`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_OAuth1Token_38.csv' INTO TABLE `object_brick_query_OAuth1Token_38`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_OAuth2Token_38.csv' INTO TABLE `object_brick_query_OAuth2Token_38`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_PaymentProviderDatatrans_9.csv' INTO TABLE `object_brick_query_PaymentProviderDatatrans_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_PaymentProviderPayPal_9.csv' INTO TABLE `object_brick_query_PaymentProviderPayPal_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_PaymentProviderQpay_9.csv' INTO TABLE `object_brick_query_PaymentProviderQpay_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_PaymentProviderWirecardSeamless_9.csv' INTO TABLE `object_brick_query_PaymentProviderWirecardSeamless_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_apparel_12.csv' INTO TABLE `object_brick_query_apparel_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_approvals_12.csv' INTO TABLE `object_brick_query_approvals_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_featuresBenefitsBackpacks_12.csv' INTO TABLE `object_brick_query_featuresBenefitsBackpacks_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_featuresBenefitsMats_12.csv' INTO TABLE `object_brick_query_featuresBenefitsMats_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_featuresBenefitsShoes_12.csv' INTO TABLE `object_brick_query_featuresBenefitsShoes_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_featuresBenefitsSleepingbags_12.csv' INTO TABLE `object_brick_query_featuresBenefitsSleepingbags_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_featuresBenefitsTents_12.csv' INTO TABLE `object_brick_query_featuresBenefitsTents_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_featuresHeadlamps_12.csv' INTO TABLE `object_brick_query_featuresHeadlamps_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_matsSpecs_12.csv' INTO TABLE `object_brick_query_matsSpecs_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_outdoor_12.csv' INTO TABLE `object_brick_query_outdoor_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_rucksackSpecs_12.csv' INTO TABLE `object_brick_query_rucksackSpecs_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_shoeDetails_12.csv' INTO TABLE `object_brick_query_shoeDetails_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_shoe_12.csv' INTO TABLE `object_brick_query_shoe_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_snowsport_12.csv' INTO TABLE `object_brick_query_snowsport_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_specsSleepingbags_12.csv' INTO TABLE `object_brick_query_specsSleepingbags_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_tentGroundsheet_12.csv' INTO TABLE `object_brick_query_tentGroundsheet_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_tentSpecifications_12.csv' INTO TABLE `object_brick_query_tentSpecifications_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_query_weight_12.csv' INTO TABLE `object_brick_query_weight_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_OAuth1Token_38.csv' INTO TABLE `object_brick_store_OAuth1Token_38`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_OAuth2Token_38.csv' INTO TABLE `object_brick_store_OAuth2Token_38`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_PaymentProviderDatatrans_9.csv' INTO TABLE `object_brick_store_PaymentProviderDatatrans_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_PaymentProviderPayPal_9.csv' INTO TABLE `object_brick_store_PaymentProviderPayPal_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_PaymentProviderQpay_9.csv' INTO TABLE `object_brick_store_PaymentProviderQpay_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_PaymentProviderWirecardSeamless_9.csv' INTO TABLE `object_brick_store_PaymentProviderWirecardSeamless_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_apparel_12.csv' INTO TABLE `object_brick_store_apparel_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_approvals_12.csv' INTO TABLE `object_brick_store_approvals_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_featuresBenefitsBackpacks_12.csv' INTO TABLE `object_brick_store_featuresBenefitsBackpacks_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_featuresBenefitsMats_12.csv' INTO TABLE `object_brick_store_featuresBenefitsMats_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_featuresBenefitsShoes_12.csv' INTO TABLE `object_brick_store_featuresBenefitsShoes_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_featuresBenefitsSleepingbags_12.csv' INTO TABLE `object_brick_store_featuresBenefitsSleepingbags_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_featuresBenefitsTents_12.csv' INTO TABLE `object_brick_store_featuresBenefitsTents_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_featuresHeadlamps_12.csv' INTO TABLE `object_brick_store_featuresHeadlamps_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_matsSpecs_12.csv' INTO TABLE `object_brick_store_matsSpecs_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_outdoor_12.csv' INTO TABLE `object_brick_store_outdoor_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_rucksackSpecs_12.csv' INTO TABLE `object_brick_store_rucksackSpecs_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_shoeDetails_12.csv' INTO TABLE `object_brick_store_shoeDetails_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_shoe_12.csv' INTO TABLE `object_brick_store_shoe_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_snowsport_12.csv' INTO TABLE `object_brick_store_snowsport_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_specsSleepingbags_12.csv' INTO TABLE `object_brick_store_specsSleepingbags_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_tentGroundsheet_12.csv' INTO TABLE `object_brick_store_tentGroundsheet_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_tentSpecifications_12.csv' INTO TABLE `object_brick_store_tentSpecifications_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_brick_store_weight_12.csv' INTO TABLE `object_brick_store_weight_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_FilterCategory_7.csv' INTO TABLE `object_collection_FilterCategory_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_FilterMultiRelation_7.csv' INTO TABLE `object_collection_FilterMultiRelation_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_FilterMultiSelectFromMultiSelect_7.csv' INTO TABLE `object_collection_FilterMultiSelectFromMultiSelect_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_FilterMultiSelect_7.csv' INTO TABLE `object_collection_FilterMultiSelect_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_FilterNumberRangeSelection_7.csv' INTO TABLE `object_collection_FilterNumberRangeSelection_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_FilterNumberRange_7.csv' INTO TABLE `object_collection_FilterNumberRange_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_FilterRelation_7.csv' INTO TABLE `object_collection_FilterRelation_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_FilterSelectFromMultiSelect_7.csv' INTO TABLE `object_collection_FilterSelectFromMultiSelect_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_FilterSelect_7.csv' INTO TABLE `object_collection_FilterSelect_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_OrderByFields_7.csv' INTO TABLE `object_collection_OrderByFields_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_OrderPriceModifications_9.csv' INTO TABLE `object_collection_OrderPriceModifications_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_PaymentInfo_9.csv' INTO TABLE `object_collection_PaymentInfo_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_PricingRule_8.csv' INTO TABLE `object_collection_PricingRule_8`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_SimilarityField_7.csv' INTO TABLE `object_collection_SimilarityField_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_TaxEntry_35.csv' INTO TABLE `object_collection_TaxEntry_35`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_TaxEntry_localized_35.csv' INTO TABLE `object_collection_TaxEntry_localized_35`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_VoucherTokenTypePattern_33.csv' INTO TABLE `object_collection_VoucherTokenTypePattern_33`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_VoucherTokenTypeSingle_33.csv' INTO TABLE `object_collection_VoucherTokenTypeSingle_33`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_collection_productImages_12.csv' INTO TABLE `object_collection_productImages_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_data_12.csv' INTO TABLE `object_localized_data_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_data_14.csv' INTO TABLE `object_localized_data_14`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_data_15.csv' INTO TABLE `object_localized_data_15`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_data_16.csv' INTO TABLE `object_localized_data_16`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_data_23.csv' INTO TABLE `object_localized_data_23`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_data_35.csv' INTO TABLE `object_localized_data_35`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_data_9.csv' INTO TABLE `object_localized_data_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_12_de_AT.csv' INTO TABLE `object_localized_query_12_de_AT`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_12_en_GB.csv' INTO TABLE `object_localized_query_12_en_GB`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_12_fr_FR.csv' INTO TABLE `object_localized_query_12_fr_FR`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_14_de_AT.csv' INTO TABLE `object_localized_query_14_de_AT`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_14_en_GB.csv' INTO TABLE `object_localized_query_14_en_GB`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_14_fr_FR.csv' INTO TABLE `object_localized_query_14_fr_FR`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_15_de_AT.csv' INTO TABLE `object_localized_query_15_de_AT`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_15_en_GB.csv' INTO TABLE `object_localized_query_15_en_GB`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_15_fr_FR.csv' INTO TABLE `object_localized_query_15_fr_FR`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_16_de_AT.csv' INTO TABLE `object_localized_query_16_de_AT`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_16_en_GB.csv' INTO TABLE `object_localized_query_16_en_GB`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_16_fr_FR.csv' INTO TABLE `object_localized_query_16_fr_FR`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_23_de_AT.csv' INTO TABLE `object_localized_query_23_de_AT`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_23_en_GB.csv' INTO TABLE `object_localized_query_23_en_GB`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_23_fr_FR.csv' INTO TABLE `object_localized_query_23_fr_FR`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_35_de_AT.csv' INTO TABLE `object_localized_query_35_de_AT`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_35_en_GB.csv' INTO TABLE `object_localized_query_35_en_GB`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_localized_query_35_fr_FR.csv' INTO TABLE `object_localized_query_35_fr_FR`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_metadata_12.csv' INTO TABLE `object_metadata_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_metadata_41.csv' INTO TABLE `object_metadata_41`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_12.csv' INTO TABLE `object_query_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_14.csv' INTO TABLE `object_query_14`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_15.csv' INTO TABLE `object_query_15`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_16.csv' INTO TABLE `object_query_16`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_23.csv' INTO TABLE `object_query_23`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_30.csv' INTO TABLE `object_query_30`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_31.csv' INTO TABLE `object_query_31`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_32.csv' INTO TABLE `object_query_32`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_33.csv' INTO TABLE `object_query_33`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_34.csv' INTO TABLE `object_query_34`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_35.csv' INTO TABLE `object_query_35`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_36.csv' INTO TABLE `object_query_36`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_37.csv' INTO TABLE `object_query_37`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_38.csv' INTO TABLE `object_query_38`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_39.csv' INTO TABLE `object_query_39`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_40.csv' INTO TABLE `object_query_40`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_41.csv' INTO TABLE `object_query_41`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_7.csv' INTO TABLE `object_query_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_8.csv' INTO TABLE `object_query_8`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_query_9.csv' INTO TABLE `object_query_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_12.csv' INTO TABLE `object_relations_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_14.csv' INTO TABLE `object_relations_14`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_15.csv' INTO TABLE `object_relations_15`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_16.csv' INTO TABLE `object_relations_16`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_23.csv' INTO TABLE `object_relations_23`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_30.csv' INTO TABLE `object_relations_30`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_31.csv' INTO TABLE `object_relations_31`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_32.csv' INTO TABLE `object_relations_32`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_33.csv' INTO TABLE `object_relations_33`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_34.csv' INTO TABLE `object_relations_34`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_35.csv' INTO TABLE `object_relations_35`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_36.csv' INTO TABLE `object_relations_36`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_37.csv' INTO TABLE `object_relations_37`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_38.csv' INTO TABLE `object_relations_38`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_39.csv' INTO TABLE `object_relations_39`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_40.csv' INTO TABLE `object_relations_40`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_41.csv' INTO TABLE `object_relations_41`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_7.csv' INTO TABLE `object_relations_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_8.csv' INTO TABLE `object_relations_8`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_relations_9.csv' INTO TABLE `object_relations_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_12.csv' INTO TABLE `object_store_12`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_14.csv' INTO TABLE `object_store_14`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_15.csv' INTO TABLE `object_store_15`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_16.csv' INTO TABLE `object_store_16`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_23.csv' INTO TABLE `object_store_23`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_30.csv' INTO TABLE `object_store_30`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_31.csv' INTO TABLE `object_store_31`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_32.csv' INTO TABLE `object_store_32`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_33.csv' INTO TABLE `object_store_33`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_34.csv' INTO TABLE `object_store_34`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_35.csv' INTO TABLE `object_store_35`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_36.csv' INTO TABLE `object_store_36`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_37.csv' INTO TABLE `object_store_37`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_38.csv' INTO TABLE `object_store_38`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_39.csv' INTO TABLE `object_store_39`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_40.csv' INTO TABLE `object_store_40`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_41.csv' INTO TABLE `object_store_41`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_7.csv' INTO TABLE `object_store_7`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_8.csv' INTO TABLE `object_store_8`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-object_store_9.csv' INTO TABLE `object_store_9`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-objects.csv' INTO TABLE `objects`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_actiontrigger_actions.csv' INTO TABLE `plugin_cmf_actiontrigger_actions`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_actiontrigger_queue.csv' INTO TABLE `plugin_cmf_actiontrigger_queue`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_actiontrigger_rules.csv' INTO TABLE `plugin_cmf_actiontrigger_rules`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_activities.csv' INTO TABLE `plugin_cmf_activities`(id, customerId, activityDate, type, implementationClass, o_id, a_id, @hexAttributes, md5, creationDate, modificationDate) SET attributes=UNHEX(@hexAttributes);
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_deletions.csv' INTO TABLE `plugin_cmf_deletions`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_duplicates_false_positives.csv' INTO TABLE `plugin_cmf_duplicates_false_positives`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_duplicatesindex.csv' INTO TABLE `plugin_cmf_duplicatesindex`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_duplicatesindex_customers.csv' INTO TABLE `plugin_cmf_duplicatesindex_customers`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_newsletter_queue.csv' INTO TABLE `plugin_cmf_newsletter_queue`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_potential_duplicates.csv' INTO TABLE `plugin_cmf_potential_duplicates`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_segment_assignment.csv' INTO TABLE `plugin_cmf_segment_assignment`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_segment_assignment_index.csv' INTO TABLE `plugin_cmf_segment_assignment_index`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_segment_assignment_queue.csv' INTO TABLE `plugin_cmf_segment_assignment_queue`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_segmentbuilder_changes_queue.csv' INTO TABLE `plugin_cmf_segmentbuilder_changes_queue`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-plugin_cmf_sequence_numbers.csv' INTO TABLE `plugin_cmf_sequence_numbers`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-properties.csv' INTO TABLE `properties`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-quantityvalue_units.csv' INTO TABLE `quantityvalue_units`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-recyclebin.csv' INTO TABLE `recyclebin`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-redirects.csv' INTO TABLE `redirects`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-sanitycheck.csv' INTO TABLE `sanitycheck`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-schedule_tasks.csv' INTO TABLE `schedule_tasks`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-search_backend_data.csv' INTO TABLE `search_backend_data`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-sites.csv' INTO TABLE `sites`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-tags.csv' INTO TABLE `tags`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-tags_assignment.csv' INTO TABLE `tags_assignment`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-targeting_personas.csv' INTO TABLE `targeting_personas`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-targeting_rules.csv' INTO TABLE `targeting_rules`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-translations_admin.csv' INTO TABLE `translations_admin`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-translations_website.csv' INTO TABLE `translations_website`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-tree_locks.csv' INTO TABLE `tree_locks`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-users.csv' INTO TABLE `users`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-users_permission_definitions.csv' INTO TABLE `users_permission_definitions`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-users_workspaces_asset.csv' INTO TABLE `users_workspaces_asset`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-users_workspaces_document.csv' INTO TABLE `users_workspaces_document`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-users_workspaces_object.csv' INTO TABLE `users_workspaces_object`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-uuids.csv' INTO TABLE `uuids`;
LOAD DATA INFILE '~~DOCUMENTROOT~~/vendor/pimcore/demo-ecommerce/dump/data/dumpexport-website_settings.csv' INTO TABLE `website_settings`;


DROP VIEW IF EXISTS object_12;
CREATE ALGORITHM=UNDEFINED  VIEW `object_12` AS select `object_query_12`.`oo_id` AS `oo_id`,`object_query_12`.`oo_classId` AS `oo_classId`,`object_query_12`.`oo_className` AS `oo_className`,`object_query_12`.`artno` AS `artno`,`object_query_12`.`ean` AS `ean`,`object_query_12`.`size` AS `size`,`object_query_12`.`brand__id` AS `brand__id`,`object_query_12`.`brand__type` AS `brand__type`,`object_query_12`.`gender` AS `gender`,`object_query_12`.`categories` AS `categories`,`object_query_12`.`features` AS `features`,`object_query_12`.`technologies` AS `technologies`,`object_query_12`.`attributes` AS `attributes`,`object_query_12`.`collection` AS `collection`,`object_query_12`.`color` AS `color`,`object_query_12`.`materialComposition` AS `materialComposition`,`object_query_12`.`secondaryMaterialComposition` AS `secondaryMaterialComposition`,`object_query_12`.`relatedProducts` AS `relatedProducts`,`object_query_12`.`imagesInheritance` AS `imagesInheritance`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_12` join `objects` on((`objects`.`o_id` = `object_query_12`.`oo_id`)));

DROP VIEW IF EXISTS object_14;
CREATE ALGORITHM=UNDEFINED  VIEW `object_14` AS select `object_query_14`.`oo_id` AS `oo_id`,`object_query_14`.`oo_classId` AS `oo_classId`,`object_query_14`.`oo_className` AS `oo_className`,`object_query_14`.`filterdefinition__id` AS `filterdefinition__id`,`object_query_14`.`filterdefinition__type` AS `filterdefinition__type`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_14` join `objects` on((`objects`.`o_id` = `object_query_14`.`oo_id`)));

DROP VIEW IF EXISTS object_15;
CREATE ALGORITHM=UNDEFINED  VIEW `object_15` AS select `object_query_15`.`oo_id` AS `oo_id`,`object_query_15`.`oo_classId` AS `oo_classId`,`object_query_15`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_15` join `objects` on((`objects`.`o_id` = `object_query_15`.`oo_id`)));

DROP VIEW IF EXISTS object_16;
CREATE ALGORITHM=UNDEFINED  VIEW `object_16` AS select `object_query_16`.`oo_id` AS `oo_id`,`object_query_16`.`oo_classId` AS `oo_classId`,`object_query_16`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_16` join `objects` on((`objects`.`o_id` = `object_query_16`.`oo_id`)));

DROP VIEW IF EXISTS object_23;
CREATE ALGORITHM=UNDEFINED  VIEW `object_23` AS select `object_query_23`.`oo_id` AS `oo_id`,`object_query_23`.`oo_classId` AS `oo_classId`,`object_query_23`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_23` join `objects` on((`objects`.`o_id` = `object_query_23`.`oo_id`)));

DROP VIEW IF EXISTS object_30;
CREATE ALGORITHM=UNDEFINED  VIEW `object_30` AS select `object_query_30`.`oo_id` AS `oo_id`,`object_query_30`.`oo_classId` AS `oo_classId`,`object_query_30`.`oo_className` AS `oo_className`,`object_query_30`.`totalPrice` AS `totalPrice`,`object_query_30`.`items` AS `items`,`object_query_30`.`offernumber` AS `offernumber`,`object_query_30`.`dateCreated` AS `dateCreated`,`object_query_30`.`dateValidUntil` AS `dateValidUntil`,`object_query_30`.`discount` AS `discount`,`object_query_30`.`customItems` AS `customItems`,`object_query_30`.`discountType` AS `discountType`,`object_query_30`.`cartId` AS `cartId`,`object_query_30`.`totalPriceBeforeDiscount` AS `totalPriceBeforeDiscount`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_30` join `objects` on((`objects`.`o_id` = `object_query_30`.`oo_id`)));

DROP VIEW IF EXISTS object_31;
CREATE ALGORITHM=UNDEFINED  VIEW `object_31` AS select `object_query_31`.`oo_id` AS `oo_id`,`object_query_31`.`oo_classId` AS `oo_classId`,`object_query_31`.`oo_className` AS `oo_className`,`object_query_31`.`product__id` AS `product__id`,`object_query_31`.`product__type` AS `product__type`,`object_query_31`.`productNumber` AS `productNumber`,`object_query_31`.`productName` AS `productName`,`object_query_31`.`amount` AS `amount`,`object_query_31`.`subItems` AS `subItems`,`object_query_31`.`comment` AS `comment`,`object_query_31`.`originalTotalPrice` AS `originalTotalPrice`,`object_query_31`.`finalTotalPrice` AS `finalTotalPrice`,`object_query_31`.`discount` AS `discount`,`object_query_31`.`DiscountType` AS `DiscountType`,`object_query_31`.`cartItemKey` AS `cartItemKey`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_31` join `objects` on((`objects`.`o_id` = `object_query_31`.`oo_id`)));

DROP VIEW IF EXISTS object_32;
CREATE ALGORITHM=UNDEFINED  VIEW `object_32` AS select `object_query_32`.`oo_id` AS `oo_id`,`object_query_32`.`oo_classId` AS `oo_classId`,`object_query_32`.`oo_className` AS `oo_className`,`object_query_32`.`price` AS `price`,`object_query_32`.`productGroup` AS `productGroup`,`object_query_32`.`OSproductNumber` AS `OSproductNumber`,`object_query_32`.`OSName` AS `OSName`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_32` join `objects` on((`objects`.`o_id` = `object_query_32`.`oo_id`)));

DROP VIEW IF EXISTS object_33;
CREATE ALGORITHM=UNDEFINED  VIEW `object_33` AS select `object_query_33`.`oo_id` AS `oo_id`,`object_query_33`.`oo_classId` AS `oo_classId`,`object_query_33`.`oo_className` AS `oo_className`,`object_query_33`.`name` AS `name`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_33` join `objects` on((`objects`.`o_id` = `object_query_33`.`oo_id`)));

DROP VIEW IF EXISTS object_34;
CREATE ALGORITHM=UNDEFINED  VIEW `object_34` AS select `object_query_34`.`oo_id` AS `oo_id`,`object_query_34`.`oo_classId` AS `oo_classId`,`object_query_34`.`oo_className` AS `oo_className`,`object_query_34`.`token` AS `token`,`object_query_34`.`tokenId` AS `tokenId`,`object_query_34`.`voucherSeries__id` AS `voucherSeries__id`,`object_query_34`.`voucherSeries__type` AS `voucherSeries__type`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_34` join `objects` on((`objects`.`o_id` = `object_query_34`.`oo_id`)));

DROP VIEW IF EXISTS object_35;
CREATE ALGORITHM=UNDEFINED  VIEW `object_35` AS select `object_query_35`.`oo_id` AS `oo_id`,`object_query_35`.`oo_classId` AS `oo_classId`,`object_query_35`.`oo_className` AS `oo_className`,`object_query_35`.`taxEntryCombinationType` AS `taxEntryCombinationType`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_35` join `objects` on((`objects`.`o_id` = `object_query_35`.`oo_id`)));

DROP VIEW IF EXISTS object_36;
CREATE ALGORITHM=UNDEFINED  VIEW `object_36` AS select `object_query_36`.`oo_id` AS `oo_id`,`object_query_36`.`oo_classId` AS `oo_classId`,`object_query_36`.`oo_className` AS `oo_className`,`object_query_36`.`name` AS `name`,`object_query_36`.`reference` AS `reference`,`object_query_36`.`calculated` AS `calculated`,`object_query_36`.`showAsFilter` AS `showAsFilter`,`object_query_36`.`exportNewsletterProvider` AS `exportNewsletterProvider`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_36` join `objects` on((`objects`.`o_id` = `object_query_36`.`oo_id`)));

DROP VIEW IF EXISTS object_37;
CREATE ALGORITHM=UNDEFINED  VIEW `object_37` AS select `object_query_37`.`oo_id` AS `oo_id`,`object_query_37`.`oo_classId` AS `oo_classId`,`object_query_37`.`oo_className` AS `oo_className`,`object_query_37`.`name` AS `name`,`object_query_37`.`group__id` AS `group__id`,`object_query_37`.`group__type` AS `group__type`,`object_query_37`.`reference` AS `reference`,`object_query_37`.`calculated` AS `calculated`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_37` join `objects` on((`objects`.`o_id` = `object_query_37`.`oo_id`)));

DROP VIEW IF EXISTS object_38;
CREATE ALGORITHM=UNDEFINED  VIEW `object_38` AS select `object_query_38`.`oo_id` AS `oo_id`,`object_query_38`.`oo_classId` AS `oo_classId`,`object_query_38`.`oo_className` AS `oo_className`,`object_query_38`.`provider` AS `provider`,`object_query_38`.`identifier` AS `identifier`,`object_query_38`.`profileData` AS `profileData`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_38` join `objects` on((`objects`.`o_id` = `object_query_38`.`oo_id`)));

DROP VIEW IF EXISTS object_39;
CREATE ALGORITHM=UNDEFINED  VIEW `object_39` AS select `object_query_39`.`oo_id` AS `oo_id`,`object_query_39`.`oo_classId` AS `oo_classId`,`object_query_39`.`oo_className` AS `oo_className`,`object_query_39`.`name` AS `name`,`object_query_39`.`terms` AS `terms`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_39` join `objects` on((`objects`.`o_id` = `object_query_39`.`oo_id`)));

DROP VIEW IF EXISTS object_40;
CREATE ALGORITHM=UNDEFINED  VIEW `object_40` AS select `object_query_40`.`oo_id` AS `oo_id`,`object_query_40`.`oo_classId` AS `oo_classId`,`object_query_40`.`oo_className` AS `oo_className`,`object_query_40`.`code` AS `code`,`object_query_40`.`attributeType` AS `attributeType`,`object_query_40`.`label` AS `label`,`object_query_40`.`link` AS `link`,`object_query_40`.`active` AS `active`,`object_query_40`.`utm_source` AS `utm_source`,`object_query_40`.`utm_medium` AS `utm_medium`,`object_query_40`.`utm_campaign` AS `utm_campaign`,`object_query_40`.`utm_term` AS `utm_term`,`object_query_40`.`utm_content` AS `utm_content`,`object_query_40`.`attributes` AS `attributes`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_40` join `objects` on((`objects`.`o_id` = `object_query_40`.`oo_id`)));

DROP VIEW IF EXISTS object_41;
CREATE ALGORITHM=UNDEFINED  VIEW `object_41` AS select `object_query_41`.`oo_id` AS `oo_id`,`object_query_41`.`oo_classId` AS `oo_classId`,`object_query_41`.`oo_className` AS `oo_className`,`object_query_41`.`active` AS `active`,`object_query_41`.`gender` AS `gender`,`object_query_41`.`firstname` AS `firstname`,`object_query_41`.`lastname` AS `lastname`,`object_query_41`.`street` AS `street`,`object_query_41`.`zip` AS `zip`,`object_query_41`.`city` AS `city`,`object_query_41`.`countryCode` AS `countryCode`,`object_query_41`.`email` AS `email`,`object_query_41`.`phone` AS `phone`,`object_query_41`.`manualSegments` AS `manualSegments`,`object_query_41`.`calculatedSegments` AS `calculatedSegments`,`object_query_41`.`idEncoded` AS `idEncoded`,`object_query_41`.`password` AS `password`,`object_query_41`.`ssoIdentities` AS `ssoIdentities`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_41` join `objects` on((`objects`.`o_id` = `object_query_41`.`oo_id`)));

DROP VIEW IF EXISTS object_7;
CREATE ALGORITHM=UNDEFINED  VIEW `object_7` AS select `object_query_7`.`oo_id` AS `oo_id`,`object_query_7`.`oo_classId` AS `oo_classId`,`object_query_7`.`oo_className` AS `oo_className`,`object_query_7`.`pageLimit` AS `pageLimit`,`object_query_7`.`ajaxReload` AS `ajaxReload`,`object_query_7`.`limitOnFirstLoad` AS `limitOnFirstLoad`,`object_query_7`.`defaultOrderByInheritance` AS `defaultOrderByInheritance`,`object_query_7`.`conditionsInheritance` AS `conditionsInheritance`,`object_query_7`.`filtersInheritance` AS `filtersInheritance`,`object_query_7`.`crossSellingCategory__id` AS `crossSellingCategory__id`,`object_query_7`.`crossSellingCategory__type` AS `crossSellingCategory__type`,`object_query_7`.`similarityFieldsInheritance` AS `similarityFieldsInheritance`,`object_query_7`.`infiniteScroll` AS `infiniteScroll`,`object_query_7`.`orderByAsc` AS `orderByAsc`,`object_query_7`.`orderByDesc` AS `orderByDesc`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_7` join `objects` on((`objects`.`o_id` = `object_query_7`.`oo_id`)));

DROP VIEW IF EXISTS object_8;
CREATE ALGORITHM=UNDEFINED  VIEW `object_8` AS select `object_query_8`.`oo_id` AS `oo_id`,`object_query_8`.`oo_classId` AS `oo_classId`,`object_query_8`.`oo_className` AS `oo_className`,`object_query_8`.`product__id` AS `product__id`,`object_query_8`.`product__type` AS `product__type`,`object_query_8`.`productNumber` AS `productNumber`,`object_query_8`.`productName` AS `productName`,`object_query_8`.`amount` AS `amount`,`object_query_8`.`totalPrice` AS `totalPrice`,`object_query_8`.`subItems` AS `subItems`,`object_query_8`.`comment` AS `comment`,`object_query_8`.`orderState` AS `orderState`,`object_query_8`.`totalNetPrice` AS `totalNetPrice`,`object_query_8`.`taxInfo` AS `taxInfo`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_8` join `objects` on((`objects`.`o_id` = `object_query_8`.`oo_id`)));

DROP VIEW IF EXISTS object_9;
CREATE ALGORITHM=UNDEFINED  VIEW `object_9` AS select `object_query_9`.`oo_id` AS `oo_id`,`object_query_9`.`oo_classId` AS `oo_classId`,`object_query_9`.`oo_className` AS `oo_className`,`object_query_9`.`ordernumber` AS `ordernumber`,`object_query_9`.`totalPrice` AS `totalPrice`,`object_query_9`.`orderdate` AS `orderdate`,`object_query_9`.`items` AS `items`,`object_query_9`.`customer__id` AS `customer__id`,`object_query_9`.`customer__type` AS `customer__type`,`object_query_9`.`paymentReference` AS `paymentReference`,`object_query_9`.`orderState` AS `orderState`,`object_query_9`.`cartId` AS `cartId`,`object_query_9`.`customerOrderData` AS `customerOrderData`,`object_query_9`.`currency` AS `currency`,`object_query_9`.`comment` AS `comment`,`object_query_9`.`customerCompany` AS `customerCompany`,`object_query_9`.`customerStreet` AS `customerStreet`,`object_query_9`.`customerZip` AS `customerZip`,`object_query_9`.`customerCountry` AS `customerCountry`,`object_query_9`.`customerEmail` AS `customerEmail`,`object_query_9`.`deliveryCompany` AS `deliveryCompany`,`object_query_9`.`deliveryStreet` AS `deliveryStreet`,`object_query_9`.`deliveryZip` AS `deliveryZip`,`object_query_9`.`deliveryCity` AS `deliveryCity`,`object_query_9`.`deliveryCountry` AS `deliveryCountry`,`object_query_9`.`voucherTokens` AS `voucherTokens`,`object_query_9`.`customerCity` AS `customerCity`,`object_query_9`.`subTotalPrice` AS `subTotalPrice`,`object_query_9`.`customerFirstname` AS `customerFirstname`,`object_query_9`.`customerLastname` AS `customerLastname`,`object_query_9`.`deliveryLastname` AS `deliveryLastname`,`object_query_9`.`deliveryFirstname` AS `deliveryFirstname`,`object_query_9`.`giftItems` AS `giftItems`,`object_query_9`.`subTotalNetPrice` AS `subTotalNetPrice`,`object_query_9`.`totalNetPrice` AS `totalNetPrice`,`object_query_9`.`taxInfo` AS `taxInfo`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className` from (`object_query_9` join `objects` on((`objects`.`o_id` = `object_query_9`.`oo_id`)));

DROP VIEW IF EXISTS object_localized_12_de_AT;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_12_de_AT` AS select `object_query_12`.`oo_id` AS `oo_id`,`object_query_12`.`oo_classId` AS `oo_classId`,`object_query_12`.`oo_className` AS `oo_className`,`object_query_12`.`artno` AS `artno`,`object_query_12`.`ean` AS `ean`,`object_query_12`.`size` AS `size`,`object_query_12`.`brand__id` AS `brand__id`,`object_query_12`.`brand__type` AS `brand__type`,`object_query_12`.`gender` AS `gender`,`object_query_12`.`categories` AS `categories`,`object_query_12`.`features` AS `features`,`object_query_12`.`technologies` AS `technologies`,`object_query_12`.`attributes` AS `attributes`,`object_query_12`.`collection` AS `collection`,`object_query_12`.`color` AS `color`,`object_query_12`.`materialComposition` AS `materialComposition`,`object_query_12`.`secondaryMaterialComposition` AS `secondaryMaterialComposition`,`object_query_12`.`relatedProducts` AS `relatedProducts`,`object_query_12`.`imagesInheritance` AS `imagesInheritance`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`de_AT`.`ooo_id` AS `ooo_id`,`de_AT`.`language` AS `language`,`de_AT`.`name` AS `name`,`de_AT`.`seoname` AS `seoname`,`de_AT`.`colorName` AS `colorName`,`de_AT`.`price` AS `price`,`de_AT`.`priceOld` AS `priceOld`,`de_AT`.`fromPrice` AS `fromPrice`,`de_AT`.`description` AS `description`,`de_AT`.`material` AS `material`,`de_AT`.`downloads` AS `downloads`,`de_AT`.`videos` AS `videos`,`de_AT`.`rotation__id` AS `rotation__id`,`de_AT`.`rotation__type` AS `rotation__type`,`de_AT`.`youtubeVideo` AS `youtubeVideo` from ((`object_query_12` join `objects` on((`objects`.`o_id` = `object_query_12`.`oo_id`))) left join `object_localized_query_12_de_AT` `de_AT` on((1 and (`object_query_12`.`oo_id` = `de_AT`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_12_default;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_12_default` AS select `object_query_12`.`oo_id` AS `oo_id`,`object_query_12`.`oo_classId` AS `oo_classId`,`object_query_12`.`oo_className` AS `oo_className`,`object_query_12`.`artno` AS `artno`,`object_query_12`.`ean` AS `ean`,`object_query_12`.`size` AS `size`,`object_query_12`.`brand__id` AS `brand__id`,`object_query_12`.`brand__type` AS `brand__type`,`object_query_12`.`gender` AS `gender`,`object_query_12`.`categories` AS `categories`,`object_query_12`.`features` AS `features`,`object_query_12`.`technologies` AS `technologies`,`object_query_12`.`attributes` AS `attributes`,`object_query_12`.`collection` AS `collection`,`object_query_12`.`color` AS `color`,`object_query_12`.`materialComposition` AS `materialComposition`,`object_query_12`.`secondaryMaterialComposition` AS `secondaryMaterialComposition`,`object_query_12`.`relatedProducts` AS `relatedProducts`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,group_concat(`object_localized_data_12`.`name` separator ',') AS `name`,group_concat(`object_localized_data_12`.`seoname` separator ',') AS `seoname`,group_concat(`object_localized_data_12`.`colorName` separator ',') AS `colorName`,group_concat(`object_localized_data_12`.`price` separator ',') AS `price`,group_concat(`object_localized_data_12`.`priceOld` separator ',') AS `priceOld`,group_concat(`object_localized_data_12`.`fromPrice` separator ',') AS `fromPrice`,group_concat(`object_localized_data_12`.`description` separator ',') AS `description`,group_concat(`object_localized_data_12`.`material` separator ',') AS `material`,group_concat(`object_localized_data_12`.`youtubeVideo` separator ',') AS `youtubeVideo` from ((`object_query_12` join `objects` on((`objects`.`o_id` = `object_query_12`.`oo_id`))) left join `object_localized_data_12` on((`objects`.`o_id` = `object_localized_data_12`.`ooo_id`))) group by `objects`.`o_id`;

DROP VIEW IF EXISTS object_localized_12_en;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_12_en` AS select `object_query_12`.`oo_id` AS `oo_id`,`object_query_12`.`oo_classId` AS `oo_classId`,`object_query_12`.`oo_className` AS `oo_className`,`object_query_12`.`artno` AS `artno`,`object_query_12`.`ean` AS `ean`,`object_query_12`.`size` AS `size`,`object_query_12`.`brand__id` AS `brand__id`,`object_query_12`.`brand__type` AS `brand__type`,`object_query_12`.`gender` AS `gender`,`object_query_12`.`categories` AS `categories`,`object_query_12`.`features` AS `features`,`object_query_12`.`technologies` AS `technologies`,`object_query_12`.`attributes` AS `attributes`,`object_query_12`.`collection` AS `collection`,`object_query_12`.`color` AS `color`,`object_query_12`.`materialComposition` AS `materialComposition`,`object_query_12`.`secondaryMaterialComposition` AS `secondaryMaterialComposition`,`object_query_12`.`relatedProducts` AS `relatedProducts`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`object_localized_data_12`.`ooo_id` AS `ooo_id`,`object_localized_data_12`.`language` AS `language`,`object_localized_data_12`.`name` AS `name`,`object_localized_data_12`.`seoname` AS `seoname`,`object_localized_data_12`.`colorName` AS `colorName`,`object_localized_data_12`.`price` AS `price`,`object_localized_data_12`.`priceOld` AS `priceOld`,`object_localized_data_12`.`fromPrice` AS `fromPrice`,`object_localized_data_12`.`description` AS `description`,`object_localized_data_12`.`material` AS `material`,`object_localized_data_12`.`youtubeVideo` AS `youtubeVideo` from ((`object_query_12` join `objects` on((`objects`.`o_id` = `object_query_12`.`oo_id`))) left join `object_localized_data_12` on(((`object_query_12`.`oo_id` = `object_localized_data_12`.`ooo_id`) and (`object_localized_data_12`.`language` = 'en'))));

DROP VIEW IF EXISTS object_localized_12_en_GB;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_12_en_GB` AS select `object_query_12`.`oo_id` AS `oo_id`,`object_query_12`.`oo_classId` AS `oo_classId`,`object_query_12`.`oo_className` AS `oo_className`,`object_query_12`.`artno` AS `artno`,`object_query_12`.`ean` AS `ean`,`object_query_12`.`size` AS `size`,`object_query_12`.`brand__id` AS `brand__id`,`object_query_12`.`brand__type` AS `brand__type`,`object_query_12`.`gender` AS `gender`,`object_query_12`.`categories` AS `categories`,`object_query_12`.`features` AS `features`,`object_query_12`.`technologies` AS `technologies`,`object_query_12`.`attributes` AS `attributes`,`object_query_12`.`collection` AS `collection`,`object_query_12`.`color` AS `color`,`object_query_12`.`materialComposition` AS `materialComposition`,`object_query_12`.`secondaryMaterialComposition` AS `secondaryMaterialComposition`,`object_query_12`.`relatedProducts` AS `relatedProducts`,`object_query_12`.`imagesInheritance` AS `imagesInheritance`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`en_GB`.`ooo_id` AS `ooo_id`,`en_GB`.`language` AS `language`,`en_GB`.`name` AS `name`,`en_GB`.`seoname` AS `seoname`,`en_GB`.`colorName` AS `colorName`,`en_GB`.`price` AS `price`,`en_GB`.`priceOld` AS `priceOld`,`en_GB`.`fromPrice` AS `fromPrice`,`en_GB`.`description` AS `description`,`en_GB`.`material` AS `material`,`en_GB`.`downloads` AS `downloads`,`en_GB`.`videos` AS `videos`,`en_GB`.`rotation__id` AS `rotation__id`,`en_GB`.`rotation__type` AS `rotation__type`,`en_GB`.`youtubeVideo` AS `youtubeVideo` from ((`object_query_12` join `objects` on((`objects`.`o_id` = `object_query_12`.`oo_id`))) left join `object_localized_query_12_en_GB` `en_GB` on((1 and (`object_query_12`.`oo_id` = `en_GB`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_12_fr_FR;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_12_fr_FR` AS select `object_query_12`.`oo_id` AS `oo_id`,`object_query_12`.`oo_classId` AS `oo_classId`,`object_query_12`.`oo_className` AS `oo_className`,`object_query_12`.`artno` AS `artno`,`object_query_12`.`ean` AS `ean`,`object_query_12`.`size` AS `size`,`object_query_12`.`brand__id` AS `brand__id`,`object_query_12`.`brand__type` AS `brand__type`,`object_query_12`.`gender` AS `gender`,`object_query_12`.`categories` AS `categories`,`object_query_12`.`features` AS `features`,`object_query_12`.`technologies` AS `technologies`,`object_query_12`.`attributes` AS `attributes`,`object_query_12`.`collection` AS `collection`,`object_query_12`.`color` AS `color`,`object_query_12`.`materialComposition` AS `materialComposition`,`object_query_12`.`secondaryMaterialComposition` AS `secondaryMaterialComposition`,`object_query_12`.`relatedProducts` AS `relatedProducts`,`object_query_12`.`imagesInheritance` AS `imagesInheritance`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`fr_FR`.`ooo_id` AS `ooo_id`,`fr_FR`.`language` AS `language`,`fr_FR`.`name` AS `name`,`fr_FR`.`seoname` AS `seoname`,`fr_FR`.`colorName` AS `colorName`,`fr_FR`.`price` AS `price`,`fr_FR`.`priceOld` AS `priceOld`,`fr_FR`.`fromPrice` AS `fromPrice`,`fr_FR`.`description` AS `description`,`fr_FR`.`material` AS `material`,`fr_FR`.`downloads` AS `downloads`,`fr_FR`.`videos` AS `videos`,`fr_FR`.`rotation__id` AS `rotation__id`,`fr_FR`.`rotation__type` AS `rotation__type`,`fr_FR`.`youtubeVideo` AS `youtubeVideo` from ((`object_query_12` join `objects` on((`objects`.`o_id` = `object_query_12`.`oo_id`))) left join `object_localized_query_12_fr_FR` `fr_FR` on((1 and (`object_query_12`.`oo_id` = `fr_FR`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_14_de_AT;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_14_de_AT` AS select `object_query_14`.`oo_id` AS `oo_id`,`object_query_14`.`oo_classId` AS `oo_classId`,`object_query_14`.`oo_className` AS `oo_className`,`object_query_14`.`filterdefinition__id` AS `filterdefinition__id`,`object_query_14`.`filterdefinition__type` AS `filterdefinition__type`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`de_AT`.`ooo_id` AS `ooo_id`,`de_AT`.`language` AS `language`,`de_AT`.`image` AS `image`,`de_AT`.`name` AS `name`,`de_AT`.`seoname` AS `seoname`,`de_AT`.`seotext` AS `seotext`,`de_AT`.`sortkey` AS `sortkey` from ((`object_query_14` join `objects` on((`objects`.`o_id` = `object_query_14`.`oo_id`))) left join `object_localized_query_14_de_AT` `de_AT` on((1 and (`object_query_14`.`oo_id` = `de_AT`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_14_en_GB;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_14_en_GB` AS select `object_query_14`.`oo_id` AS `oo_id`,`object_query_14`.`oo_classId` AS `oo_classId`,`object_query_14`.`oo_className` AS `oo_className`,`object_query_14`.`filterdefinition__id` AS `filterdefinition__id`,`object_query_14`.`filterdefinition__type` AS `filterdefinition__type`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`en_GB`.`ooo_id` AS `ooo_id`,`en_GB`.`language` AS `language`,`en_GB`.`image` AS `image`,`en_GB`.`name` AS `name`,`en_GB`.`seoname` AS `seoname`,`en_GB`.`seotext` AS `seotext`,`en_GB`.`sortkey` AS `sortkey` from ((`object_query_14` join `objects` on((`objects`.`o_id` = `object_query_14`.`oo_id`))) left join `object_localized_query_14_en_GB` `en_GB` on((1 and (`object_query_14`.`oo_id` = `en_GB`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_14_fr_FR;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_14_fr_FR` AS select `object_query_14`.`oo_id` AS `oo_id`,`object_query_14`.`oo_classId` AS `oo_classId`,`object_query_14`.`oo_className` AS `oo_className`,`object_query_14`.`filterdefinition__id` AS `filterdefinition__id`,`object_query_14`.`filterdefinition__type` AS `filterdefinition__type`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`fr_FR`.`ooo_id` AS `ooo_id`,`fr_FR`.`language` AS `language`,`fr_FR`.`image` AS `image`,`fr_FR`.`name` AS `name`,`fr_FR`.`seoname` AS `seoname`,`fr_FR`.`seotext` AS `seotext`,`fr_FR`.`sortkey` AS `sortkey` from ((`object_query_14` join `objects` on((`objects`.`o_id` = `object_query_14`.`oo_id`))) left join `object_localized_query_14_fr_FR` `fr_FR` on((1 and (`object_query_14`.`oo_id` = `fr_FR`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_15_de_AT;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_15_de_AT` AS select `object_query_15`.`oo_id` AS `oo_id`,`object_query_15`.`oo_classId` AS `oo_classId`,`object_query_15`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`de_AT`.`ooo_id` AS `ooo_id`,`de_AT`.`language` AS `language`,`de_AT`.`name` AS `name`,`de_AT`.`description` AS `description`,`de_AT`.`icon` AS `icon`,`de_AT`.`usage` AS `usage` from ((`object_query_15` join `objects` on((`objects`.`o_id` = `object_query_15`.`oo_id`))) left join `object_localized_query_15_de_AT` `de_AT` on((1 and (`object_query_15`.`oo_id` = `de_AT`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_15_default;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_15_default` AS select `object_query_15`.`oo_id` AS `oo_id`,`object_query_15`.`oo_classId` AS `oo_classId`,`object_query_15`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,group_concat(`object_localized_data_15`.`name` separator ',') AS `name`,group_concat(`object_localized_data_15`.`description` separator ',') AS `description`,group_concat(`object_localized_data_15`.`icon` separator ',') AS `icon`,group_concat(`object_localized_data_15`.`usage` separator ',') AS `usage` from ((`object_query_15` join `objects` on((`objects`.`o_id` = `object_query_15`.`oo_id`))) left join `object_localized_data_15` on((`objects`.`o_id` = `object_localized_data_15`.`ooo_id`))) group by `objects`.`o_id`;

DROP VIEW IF EXISTS object_localized_15_en;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_15_en` AS select `object_query_15`.`oo_id` AS `oo_id`,`object_query_15`.`oo_classId` AS `oo_classId`,`object_query_15`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`object_localized_data_15`.`ooo_id` AS `ooo_id`,`object_localized_data_15`.`language` AS `language`,`object_localized_data_15`.`name` AS `name`,`object_localized_data_15`.`description` AS `description`,`object_localized_data_15`.`icon` AS `icon`,`object_localized_data_15`.`usage` AS `usage` from ((`object_query_15` join `objects` on((`objects`.`o_id` = `object_query_15`.`oo_id`))) left join `object_localized_data_15` on(((`object_query_15`.`oo_id` = `object_localized_data_15`.`ooo_id`) and (`object_localized_data_15`.`language` = 'en'))));

DROP VIEW IF EXISTS object_localized_15_en_GB;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_15_en_GB` AS select `object_query_15`.`oo_id` AS `oo_id`,`object_query_15`.`oo_classId` AS `oo_classId`,`object_query_15`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`en_GB`.`ooo_id` AS `ooo_id`,`en_GB`.`language` AS `language`,`en_GB`.`name` AS `name`,`en_GB`.`description` AS `description`,`en_GB`.`icon` AS `icon`,`en_GB`.`usage` AS `usage` from ((`object_query_15` join `objects` on((`objects`.`o_id` = `object_query_15`.`oo_id`))) left join `object_localized_query_15_en_GB` `en_GB` on((1 and (`object_query_15`.`oo_id` = `en_GB`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_15_fr_FR;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_15_fr_FR` AS select `object_query_15`.`oo_id` AS `oo_id`,`object_query_15`.`oo_classId` AS `oo_classId`,`object_query_15`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`fr_FR`.`ooo_id` AS `ooo_id`,`fr_FR`.`language` AS `language`,`fr_FR`.`name` AS `name`,`fr_FR`.`description` AS `description`,`fr_FR`.`icon` AS `icon`,`fr_FR`.`usage` AS `usage` from ((`object_query_15` join `objects` on((`objects`.`o_id` = `object_query_15`.`oo_id`))) left join `object_localized_query_15_fr_FR` `fr_FR` on((1 and (`object_query_15`.`oo_id` = `fr_FR`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_16_de_AT;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_16_de_AT` AS select `object_query_16`.`oo_id` AS `oo_id`,`object_query_16`.`oo_classId` AS `oo_classId`,`object_query_16`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`de_AT`.`ooo_id` AS `ooo_id`,`de_AT`.`language` AS `language`,`de_AT`.`icon` AS `icon`,`de_AT`.`name` AS `name`,`de_AT`.`seoname` AS `seoname`,`de_AT`.`description` AS `description`,`de_AT`.`link` AS `link`,`de_AT`.`images` AS `images`,`de_AT`.`documents` AS `documents`,`de_AT`.`videos` AS `videos`,`de_AT`.`downloads` AS `downloads` from ((`object_query_16` join `objects` on((`objects`.`o_id` = `object_query_16`.`oo_id`))) left join `object_localized_query_16_de_AT` `de_AT` on((1 and (`object_query_16`.`oo_id` = `de_AT`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_16_default;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_16_default` AS select `object_query_16`.`oo_id` AS `oo_id`,`object_query_16`.`oo_classId` AS `oo_classId`,`object_query_16`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,group_concat(`object_localized_data_16`.`icon` separator ',') AS `icon`,group_concat(`object_localized_data_16`.`name` separator ',') AS `name`,group_concat(`object_localized_data_16`.`seoname` separator ',') AS `seoname`,group_concat(`object_localized_data_16`.`description` separator ',') AS `description`,group_concat(`object_localized_data_16`.`link` separator ',') AS `link` from ((`object_query_16` join `objects` on((`objects`.`o_id` = `object_query_16`.`oo_id`))) left join `object_localized_data_16` on((`objects`.`o_id` = `object_localized_data_16`.`ooo_id`))) group by `objects`.`o_id`;

DROP VIEW IF EXISTS object_localized_16_en;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_16_en` AS select `object_query_16`.`oo_id` AS `oo_id`,`object_query_16`.`oo_classId` AS `oo_classId`,`object_query_16`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`object_localized_data_16`.`ooo_id` AS `ooo_id`,`object_localized_data_16`.`language` AS `language`,`object_localized_data_16`.`icon` AS `icon`,`object_localized_data_16`.`name` AS `name`,`object_localized_data_16`.`seoname` AS `seoname`,`object_localized_data_16`.`description` AS `description`,`object_localized_data_16`.`link` AS `link` from ((`object_query_16` join `objects` on((`objects`.`o_id` = `object_query_16`.`oo_id`))) left join `object_localized_data_16` on(((`object_query_16`.`oo_id` = `object_localized_data_16`.`ooo_id`) and (`object_localized_data_16`.`language` = 'en'))));

DROP VIEW IF EXISTS object_localized_16_en_GB;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_16_en_GB` AS select `object_query_16`.`oo_id` AS `oo_id`,`object_query_16`.`oo_classId` AS `oo_classId`,`object_query_16`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`en_GB`.`ooo_id` AS `ooo_id`,`en_GB`.`language` AS `language`,`en_GB`.`icon` AS `icon`,`en_GB`.`name` AS `name`,`en_GB`.`seoname` AS `seoname`,`en_GB`.`description` AS `description`,`en_GB`.`link` AS `link`,`en_GB`.`images` AS `images`,`en_GB`.`documents` AS `documents`,`en_GB`.`videos` AS `videos`,`en_GB`.`downloads` AS `downloads` from ((`object_query_16` join `objects` on((`objects`.`o_id` = `object_query_16`.`oo_id`))) left join `object_localized_query_16_en_GB` `en_GB` on((1 and (`object_query_16`.`oo_id` = `en_GB`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_16_fr_FR;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_16_fr_FR` AS select `object_query_16`.`oo_id` AS `oo_id`,`object_query_16`.`oo_classId` AS `oo_classId`,`object_query_16`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`fr_FR`.`ooo_id` AS `ooo_id`,`fr_FR`.`language` AS `language`,`fr_FR`.`icon` AS `icon`,`fr_FR`.`name` AS `name`,`fr_FR`.`seoname` AS `seoname`,`fr_FR`.`description` AS `description`,`fr_FR`.`link` AS `link`,`fr_FR`.`images` AS `images`,`fr_FR`.`documents` AS `documents`,`fr_FR`.`videos` AS `videos`,`fr_FR`.`downloads` AS `downloads` from ((`object_query_16` join `objects` on((`objects`.`o_id` = `object_query_16`.`oo_id`))) left join `object_localized_query_16_fr_FR` `fr_FR` on((1 and (`object_query_16`.`oo_id` = `fr_FR`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_23_de_AT;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_23_de_AT` AS select `object_query_23`.`oo_id` AS `oo_id`,`object_query_23`.`oo_classId` AS `oo_classId`,`object_query_23`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`de_AT`.`ooo_id` AS `ooo_id`,`de_AT`.`language` AS `language`,`de_AT`.`icon` AS `icon`,`de_AT`.`name` AS `name`,`de_AT`.`seoname` AS `seoname`,`de_AT`.`description` AS `description`,`de_AT`.`link` AS `link`,`de_AT`.`images` AS `images`,`de_AT`.`documents` AS `documents`,`de_AT`.`videos` AS `videos`,`de_AT`.`downloads` AS `downloads` from ((`object_query_23` join `objects` on((`objects`.`o_id` = `object_query_23`.`oo_id`))) left join `object_localized_query_23_de_AT` `de_AT` on((1 and (`object_query_23`.`oo_id` = `de_AT`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_23_default;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_23_default` AS select `object_query_23`.`oo_id` AS `oo_id`,`object_query_23`.`oo_classId` AS `oo_classId`,`object_query_23`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,group_concat(`object_localized_data_23`.`icon` separator ',') AS `icon`,group_concat(`object_localized_data_23`.`name` separator ',') AS `name`,group_concat(`object_localized_data_23`.`seoname` separator ',') AS `seoname`,group_concat(`object_localized_data_23`.`description` separator ',') AS `description`,group_concat(`object_localized_data_23`.`link` separator ',') AS `link` from ((`object_query_23` join `objects` on((`objects`.`o_id` = `object_query_23`.`oo_id`))) left join `object_localized_data_23` on((`objects`.`o_id` = `object_localized_data_23`.`ooo_id`))) group by `objects`.`o_id`;

DROP VIEW IF EXISTS object_localized_23_en;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_23_en` AS select `object_query_23`.`oo_id` AS `oo_id`,`object_query_23`.`oo_classId` AS `oo_classId`,`object_query_23`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`object_localized_data_23`.`ooo_id` AS `ooo_id`,`object_localized_data_23`.`language` AS `language`,`object_localized_data_23`.`icon` AS `icon`,`object_localized_data_23`.`name` AS `name`,`object_localized_data_23`.`seoname` AS `seoname`,`object_localized_data_23`.`description` AS `description`,`object_localized_data_23`.`link` AS `link` from ((`object_query_23` join `objects` on((`objects`.`o_id` = `object_query_23`.`oo_id`))) left join `object_localized_data_23` on(((`object_query_23`.`oo_id` = `object_localized_data_23`.`ooo_id`) and (`object_localized_data_23`.`language` = 'en'))));

DROP VIEW IF EXISTS object_localized_23_en_GB;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_23_en_GB` AS select `object_query_23`.`oo_id` AS `oo_id`,`object_query_23`.`oo_classId` AS `oo_classId`,`object_query_23`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`en_GB`.`ooo_id` AS `ooo_id`,`en_GB`.`language` AS `language`,`en_GB`.`icon` AS `icon`,`en_GB`.`name` AS `name`,`en_GB`.`seoname` AS `seoname`,`en_GB`.`description` AS `description`,`en_GB`.`link` AS `link`,`en_GB`.`images` AS `images`,`en_GB`.`documents` AS `documents`,`en_GB`.`videos` AS `videos`,`en_GB`.`downloads` AS `downloads` from ((`object_query_23` join `objects` on((`objects`.`o_id` = `object_query_23`.`oo_id`))) left join `object_localized_query_23_en_GB` `en_GB` on((1 and (`object_query_23`.`oo_id` = `en_GB`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_23_fr_FR;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_23_fr_FR` AS select `object_query_23`.`oo_id` AS `oo_id`,`object_query_23`.`oo_classId` AS `oo_classId`,`object_query_23`.`oo_className` AS `oo_className`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`fr_FR`.`ooo_id` AS `ooo_id`,`fr_FR`.`language` AS `language`,`fr_FR`.`icon` AS `icon`,`fr_FR`.`name` AS `name`,`fr_FR`.`seoname` AS `seoname`,`fr_FR`.`description` AS `description`,`fr_FR`.`link` AS `link`,`fr_FR`.`images` AS `images`,`fr_FR`.`documents` AS `documents`,`fr_FR`.`videos` AS `videos`,`fr_FR`.`downloads` AS `downloads` from ((`object_query_23` join `objects` on((`objects`.`o_id` = `object_query_23`.`oo_id`))) left join `object_localized_query_23_fr_FR` `fr_FR` on((1 and (`object_query_23`.`oo_id` = `fr_FR`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_35_de_AT;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_35_de_AT` AS select `object_query_35`.`oo_id` AS `oo_id`,`object_query_35`.`oo_classId` AS `oo_classId`,`object_query_35`.`oo_className` AS `oo_className`,`object_query_35`.`taxEntryCombinationType` AS `taxEntryCombinationType`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`de_AT`.`ooo_id` AS `ooo_id`,`de_AT`.`language` AS `language`,`de_AT`.`name` AS `name` from ((`object_query_35` join `objects` on((`objects`.`o_id` = `object_query_35`.`oo_id`))) left join `object_localized_query_35_de_AT` `de_AT` on((1 and (`object_query_35`.`oo_id` = `de_AT`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_35_en_GB;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_35_en_GB` AS select `object_query_35`.`oo_id` AS `oo_id`,`object_query_35`.`oo_classId` AS `oo_classId`,`object_query_35`.`oo_className` AS `oo_className`,`object_query_35`.`taxEntryCombinationType` AS `taxEntryCombinationType`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`en_GB`.`ooo_id` AS `ooo_id`,`en_GB`.`language` AS `language`,`en_GB`.`name` AS `name` from ((`object_query_35` join `objects` on((`objects`.`o_id` = `object_query_35`.`oo_id`))) left join `object_localized_query_35_en_GB` `en_GB` on((1 and (`object_query_35`.`oo_id` = `en_GB`.`ooo_id`))));

DROP VIEW IF EXISTS object_localized_35_fr_FR;
CREATE ALGORITHM=UNDEFINED  VIEW `object_localized_35_fr_FR` AS select `object_query_35`.`oo_id` AS `oo_id`,`object_query_35`.`oo_classId` AS `oo_classId`,`object_query_35`.`oo_className` AS `oo_className`,`object_query_35`.`taxEntryCombinationType` AS `taxEntryCombinationType`,`objects`.`o_id` AS `o_id`,`objects`.`o_parentId` AS `o_parentId`,`objects`.`o_type` AS `o_type`,`objects`.`o_key` AS `o_key`,`objects`.`o_path` AS `o_path`,`objects`.`o_index` AS `o_index`,`objects`.`o_published` AS `o_published`,`objects`.`o_creationDate` AS `o_creationDate`,`objects`.`o_modificationDate` AS `o_modificationDate`,`objects`.`o_userOwner` AS `o_userOwner`,`objects`.`o_userModification` AS `o_userModification`,`objects`.`o_classId` AS `o_classId`,`objects`.`o_className` AS `o_className`,`fr_FR`.`ooo_id` AS `ooo_id`,`fr_FR`.`language` AS `language`,`fr_FR`.`name` AS `name` from ((`object_query_35` join `objects` on((`objects`.`o_id` = `object_query_35`.`oo_id`))) left join `object_localized_query_35_fr_FR` `fr_FR` on((1 and (`object_query_35`.`oo_id` = `fr_FR`.`ooo_id`))));