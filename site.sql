

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

Drop database if exists site;
CREATE database site; 
use site;
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
