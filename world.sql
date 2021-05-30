
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

Drop database if exists world;
CREATE database world; 
use world;
-- ----------------------------
-- Table structure for accounts
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts`  (
  `Id` int(11) NOT NULL,
  `Nickname` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LastConnection` datetime(0) NULL DEFAULT NULL,
  `LastIp` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `ConnectedCharacter` int(11) NULL DEFAULT NULL,
  `HasStartupActions` tinyint(4) NOT NULL,
  `Kamas` int(11) NOT NULL,
  `Tokens` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of accounts
-- ----------------------------

INSERT INTO `accounts` VALUES (3463, 'az', '2021-01-18 22:36:23', '25.90.71.22', 7489, 0, 0, NULL);
INSERT INTO `accounts` VALUES (3467, '78', '2021-01-13 18:37:18', '25.90.71.22', 7488, 0, 0, NULL);
INSERT INTO `accounts` VALUES (4324, 'ko', '2021-01-22 18:55:57', '127.0.0.1', NULL, 0, 0, NULL);
INSERT INTO `accounts` VALUES (4325, '47', '2021-01-18 20:11:02', '127.0.0.1', 7494, 0, 0, NULL);
INSERT INTO `accounts` VALUES (3468, 'ko', '2021-01-18 22:36:57', '25.90.71.22', 7495, 0, 0, NULL);
INSERT INTO `accounts` VALUES (4323, 'az', '2021-01-21 22:00:07', '127.0.0.1', NULL, 0, 0, NULL);
