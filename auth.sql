
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

Drop database if exists id16669039_auth;
CREATE database id16669039_auth; 
use id16669039_auth;
-- ----------------------------
-- Table structure for accounts
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Login` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PasswordHash` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Nickname` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Role` int(11) NOT NULL,
  `Ticket` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `SecretQuestion` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SecretAnswer` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Lang` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `IsBanned` tinyint(4) NOT NULL,
  `BanReason` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `BanEndDate` datetime(0) NULL DEFAULT NULL,
  `BannerAccountId` int(11) NULL DEFAULT NULL,
  `vip` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3474 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of accounts
-- ----------------------------
INSERT INTO `accounts` VALUES (3463, 'az', 'cc8c0a97c2dfcd73caff160b65aa39e2', 'az', 5, 'GSQTYAXPLAENFJGIGFBFXTAADDYTHIBC', 'dummy?', 'dummy!', 'fr', '', 0, NULL, NULL, NULL, 0);

-- ----------------------------
-- Table structure for code_secret
-- ----------------------------
DROP TABLE IF EXISTS `code_secret`;
CREATE TABLE `code_secret`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `code` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ipbans
-- ----------------------------
DROP TABLE IF EXISTS `ipbans`;
CREATE TABLE `ipbans`  (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `IPAsString` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Date` datetime(0) NOT NULL,
  `BanReason` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `BannedBy` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ipbans
-- ----------------------------
INSERT INTO `ipbans` VALUES (7, '78.252.8.30', '2016-12-09 22:23:15', 'tg', 412);
INSERT INTO `ipbans` VALUES (8, '85.171.107.201', '2016-12-09 22:23:15', 'tg', 412);
INSERT INTO `ipbans` VALUES (9, '109.88.74.40', '2016-12-09 22:23:15', 'ntm', 412);
INSERT INTO `ipbans` VALUES (10, '135.19.8.46', '2016-12-09 22:23:15', 'ntm', 412);
INSERT INTO `ipbans` VALUES (12, '105.156.225.63', '2016-12-04 05:01:01', 'hack', 512);

-- ----------------------------
-- Table structure for user_groups
-- ----------------------------
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Role` int(11) NOT NULL,
  `IsGameMaster` tinyint(4) NOT NULL,
  `ServersCSV` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_groups
-- ----------------------------
INSERT INTO `user_groups` VALUES (1, 'Joueur', 1, 0, '1');
INSERT INTO `user_groups` VALUES (2, 'Vip', 2, 0, '1');
INSERT INTO `user_groups` VALUES (3, 'Modérateur', 3, 1, '1');
INSERT INTO `user_groups` VALUES (4, 'Administrateur', 4, 1, '1');
INSERT INTO `user_groups` VALUES (5, 'Développeur', 5, 1, '1');


-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Image` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Text` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Author` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Date` datetime(0) NOT NULL DEFAULT current_timestamp(0),
  `Type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
/* INSERT INTO `news` VALUES (1, 'Ouverture du serveur', '1.jpg', '\r\n-Correction de sorts : \r\n\r\nOdorat\r\nDestin D\'écaflip\r\n\r\nAjouts : \r\n\r\ndu ratio Koli / pvp\r\nd\'une fonctionalité \"joueur\" agresse \"joueur\"\r\ndu master pvp avec récompenses\r\ndu master koli avec récompense\r\nD\'une potion mercenaire\r\nd\'une commande vie \r\nd\'une command poutch\r\n\r\n\r\nItem : \r\n\r\nPour facilité le pvp j\'ai éffectué une refonte de l\'obtention des sorts et le spellmax, désormais quand vous changerez de classe tout les sorts de classes et spéciaux seront \r\ndans la barres de sorts tous niveau 6 , idem a la création du personnage.\r\n', 'Leikyz', '2020-08-22 23:40:43', 'Informations');
INSERT INTO `news` VALUES (2, 'Maj du 24/08', '15.jpg', 'Le lorem ipsum (également appelé faux-texte, lipsum, ou bolo bolo1) est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée.\r\n\r\nGénéralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum. L\'avantage du latin est que l\'opérateur sait au premier coup d\'œil que la page contenant ces lignes n\'est pas valide et que l\'attention du lecteur n\'est pas dérangée par le contenu, lui permettant de demeurer concentré sur le seul aspect graphique.', 'Leikyz', '2020-08-22 23:40:43', 'Patch Note');
INSERT INTO `news` VALUES (3, 'Ouverture du serveur', '7.jpg', '02/02\r\n-Correction de sorts : \r\n\r\nOdorat\r\nDestin D\'écaflip\r\n\r\nAjouts : \r\n\r\ndu ratio Koli / pvp\r\nd\'une fonctionalité \"joueur\" agresse \"joueur\"\r\ndu master pvp avec récompenses\r\ndu master koli avec récompense\r\nD\'une potion mercenaire\r\nd\'une commande vie \r\nd\'une command poutch\r\n\r\n\r\nItem : \r\n\r\nPour facilité le pvp j\'ai éffectué une refonte de l\'obtention des sorts et le spellmax, désormais quand vous changerez de classe tout les sorts de classes et spéciaux seront \r\ndans la barres de sorts tous niveau 6 , idem a la création du personnage.\r\n', 'Leikyz', '2020-08-22 23:40:43', 'News');
INSERT INTO `news` VALUES (4, 'Ouverture du serveur', '9.jpg', '02/02\r\n-Correction de sorts : \r\n\r\nOdorat\r\nDestin D\'écaflip\r\n\r\nAjouts : \r\n\r\ndu ratio Koli / pvp\r\nd\'une fonctionalité \"joueur\" agresse \"joueur\"\r\ndu master pvp avec récompenses\r\ndu master koli avec récompense\r\nD\'une potion mercenaire\r\nd\'une commande vie \r\nd\'une command poutch\r\n\r\n\r\nItem : \r\n\r\nPour facilité le pvp j\'ai éffectué une refonte de l\'obtention des sorts et le spellmax, désormais quand vous changerez de classe tout les sorts de classes et spéciaux seront \r\ndans la barres de sorts tous niveau 6 , idem a la création du personnage.\r\n', 'Leikyz', '2020-08-22 23:40:43', ''); */
INSERT INTO `news` VALUES (5, 'oeoe tqt ça arrive', 'dors.gif', 'Je rompish zzzzzzZZZZZZZZ', 'Yassine', '2021-02-25 21:26:42', '');

INSERT INTO `news` VALUES (6, 'ATT wsh', 'dors2.gif', 'Jt ai dis je dors', 'Yassine', '2021-02-25 21:26:42', '');



SET FOREIGN_KEY_CHECKS = 1;
