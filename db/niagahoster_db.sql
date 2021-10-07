/*
 Navicat Premium Data Transfer

 Source Server         : Work
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : niagahoster_db

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 07/10/2021 10:14:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_fitur
-- ----------------------------
DROP TABLE IF EXISTS `tb_fitur`;
CREATE TABLE `tb_fitur`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_package` int(10) NULL DEFAULT NULL,
  `fitur_name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `fitur_value` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rate` int(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_fitur
-- ----------------------------
INSERT INTO `tb_fitur` VALUES (1, 1, 'Disk Space', '500 MB', 0);
INSERT INTO `tb_fitur` VALUES (2, 1, 'Bandwidth', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (3, 1, 'Databases', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (4, 1, 'Domain', '1', 0);
INSERT INTO `tb_fitur` VALUES (5, 1, 'Backup', 'Instant', 0);
INSERT INTO `tb_fitur` VALUES (6, 1, 'Gratis Selamanya', 'Unlimited SSL', 0);
INSERT INTO `tb_fitur` VALUES (7, 2, 'Disk Space', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (8, 2, 'Bandwidth', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (9, 2, 'POP3 Email', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (10, 2, 'Databases', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (11, 2, 'Addon Domains', '10', 0);
INSERT INTO `tb_fitur` VALUES (12, 2, 'Backup', 'Instant', 0);
INSERT INTO `tb_fitur` VALUES (13, 2, 'Selamanya', 'Domain Gratis', 0);
INSERT INTO `tb_fitur` VALUES (14, 2, 'Gratis Selamanya', 'Unlimited SSL', 0);
INSERT INTO `tb_fitur` VALUES (15, 3, 'Disk Space', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (16, 3, 'Bandwidth', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (17, 3, 'POP3 Email', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (18, 3, 'Databases', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (19, 3, 'Addon Domains', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (20, 3, 'Backup', 'Instant', 0);
INSERT INTO `tb_fitur` VALUES (21, 3, 'Selamanya', 'Domain Gratis', 0);
INSERT INTO `tb_fitur` VALUES (22, 3, 'Gratis Selamanya', 'Unlimited SSL', 0);
INSERT INTO `tb_fitur` VALUES (23, 3, 'Name Server', 'Private', 0);
INSERT INTO `tb_fitur` VALUES (24, 3, 'Mail Protection', 'SpamAssasin', 0);
INSERT INTO `tb_fitur` VALUES (25, 4, 'Disk Space', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (26, 4, 'Bandwidth', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (27, 4, 'POP3 Email', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (28, 4, 'Dabatases', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (29, 4, 'Addon Domains', 'Unlimited', 0);
INSERT INTO `tb_fitur` VALUES (30, 4, 'Backup & Restore', 'Magic Auto', 0);
INSERT INTO `tb_fitur` VALUES (31, 4, 'Selamanya', 'Domain Gratis', 0);
INSERT INTO `tb_fitur` VALUES (32, 4, 'Gratis Selamanya', 'Unlimited SSL', 0);
INSERT INTO `tb_fitur` VALUES (33, 4, 'Name Server', 'Private', 0);
INSERT INTO `tb_fitur` VALUES (34, 4, 'Layanan Support', 'Prioritas', 5);
INSERT INTO `tb_fitur` VALUES (35, 4, 'Pro Mail Protection', 'SpamExpert', 0);

-- ----------------------------
-- Table structure for tb_modul
-- ----------------------------
DROP TABLE IF EXISTS `tb_modul`;
CREATE TABLE `tb_modul`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `modul` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_modul
-- ----------------------------
INSERT INTO `tb_modul` VALUES (1, 'IcePHP');
INSERT INTO `tb_modul` VALUES (2, 'http');
INSERT INTO `tb_modul` VALUES (3, 'nd_pdo_mysql');
INSERT INTO `tb_modul` VALUES (4, 'stats');
INSERT INTO `tb_modul` VALUES (5, 'apc');
INSERT INTO `tb_modul` VALUES (6, 'huffman');
INSERT INTO `tb_modul` VALUES (7, 'oauth');
INSERT INTO `tb_modul` VALUES (8, 'stem');
INSERT INTO `tb_modul` VALUES (9, 'apcu');
INSERT INTO `tb_modul` VALUES (10, 'idn');
INSERT INTO `tb_modul` VALUES (11, 'oci8');
INSERT INTO `tb_modul` VALUES (12, 'stomp');
INSERT INTO `tb_modul` VALUES (13, 'apm');
INSERT INTO `tb_modul` VALUES (14, 'igbinary');
INSERT INTO `tb_modul` VALUES (15, 'odbc');
INSERT INTO `tb_modul` VALUES (16, 'suhosin');
INSERT INTO `tb_modul` VALUES (17, 'ares');
INSERT INTO `tb_modul` VALUES (18, 'imagick');
INSERT INTO `tb_modul` VALUES (19, 'opcache');
INSERT INTO `tb_modul` VALUES (20, 'sybase_ct');
INSERT INTO `tb_modul` VALUES (21, 'bcmath');
INSERT INTO `tb_modul` VALUES (22, 'imap');
INSERT INTO `tb_modul` VALUES (23, 'pdf');
INSERT INTO `tb_modul` VALUES (24, 'sysvmsg');
INSERT INTO `tb_modul` VALUES (25, 'bcompiler');
INSERT INTO `tb_modul` VALUES (26, 'inclued');
INSERT INTO `tb_modul` VALUES (27, 'pdo');
INSERT INTO `tb_modul` VALUES (28, 'sysvsem');
INSERT INTO `tb_modul` VALUES (29, 'big_int');
INSERT INTO `tb_modul` VALUES (30, 'inotify');
INSERT INTO `tb_modul` VALUES (31, 'pdo_dblib');
INSERT INTO `tb_modul` VALUES (32, 'sysvshm');
INSERT INTO `tb_modul` VALUES (33, 'bitset');
INSERT INTO `tb_modul` VALUES (34, 'interbase');
INSERT INTO `tb_modul` VALUES (35, 'pdo_firebird');
INSERT INTO `tb_modul` VALUES (36, 'tidy');
INSERT INTO `tb_modul` VALUES (37, 'bloomy');
INSERT INTO `tb_modul` VALUES (38, 'intl');
INSERT INTO `tb_modul` VALUES (39, 'pdo_mysql');
INSERT INTO `tb_modul` VALUES (40, 'timezonedb');
INSERT INTO `tb_modul` VALUES (41, 'bz2_filter');
INSERT INTO `tb_modul` VALUES (42, 'ioncube_loader');
INSERT INTO `tb_modul` VALUES (43, 'pdo_odbc');
INSERT INTO `tb_modul` VALUES (44, 'trader');
INSERT INTO `tb_modul` VALUES (45, 'clamav');
INSERT INTO `tb_modul` VALUES (46, 'ioncube_loader_4');
INSERT INTO `tb_modul` VALUES (47, 'pdo_pgsql');
INSERT INTO `tb_modul` VALUES (48, 'translit');
INSERT INTO `tb_modul` VALUES (49, 'coin_acceptor');
INSERT INTO `tb_modul` VALUES (50, 'jsmin');
INSERT INTO `tb_modul` VALUES (51, 'pdo_sqlite');
INSERT INTO `tb_modul` VALUES (52, 'uploadprogress');
INSERT INTO `tb_modul` VALUES (53, 'crack');
INSERT INTO `tb_modul` VALUES (54, 'json');
INSERT INTO `tb_modul` VALUES (55, 'pgsql');
INSERT INTO `tb_modul` VALUES (56, 'uri_template');
INSERT INTO `tb_modul` VALUES (57, 'dba');
INSERT INTO `tb_modul` VALUES (58, 'ldap');
INSERT INTO `tb_modul` VALUES (59, 'phalcon');
INSERT INTO `tb_modul` VALUES (60, 'uuid');

-- ----------------------------
-- Table structure for tb_package
-- ----------------------------
DROP TABLE IF EXISTS `tb_package`;
CREATE TABLE `tb_package`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `package` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `price_month` int(50) NULL DEFAULT NULL,
  `price_disc` int(50) NULL DEFAULT NULL,
  `registered_user` int(10) NULL DEFAULT NULL,
  `resource_power` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `best_seller` int(2) NULL DEFAULT NULL,
  `button_value` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rate` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_package
-- ----------------------------
INSERT INTO `tb_package` VALUES (1, 'Bayi', 14900, 19900, 938, '0.5', 0, 'Pilih Sekarang', 0);
INSERT INTO `tb_package` VALUES (2, 'Pelajar', 23450, 46900, 4168, '1', 0, 'Pilih Sekarang', 0);
INSERT INTO `tb_package` VALUES (3, 'Personal', 38900, 58900, 10017, '2', 1, 'Pilih Sekarang', 0);
INSERT INTO `tb_package` VALUES (4, 'Bisnis', 65900, 109900, 3552, '3', 0, 'Diskon 40%', 5);

SET FOREIGN_KEY_CHECKS = 1;
