/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : rpg

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 30/04/2024 12:00:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dispose
-- ----------------------------
DROP TABLE IF EXISTS `dispose`;
CREATE TABLE `dispose`  (
  `idPersonnage` int NOT NULL,
  `idArme` int NOT NULL,
  PRIMARY KEY (`idPersonnage`, `idArme`) USING BTREE,
  INDEX `FK_ARME`(`idArme` ASC) USING BTREE,
  CONSTRAINT `FK_ARME` FOREIGN KEY (`idArme`) REFERENCES `arme` (`idArme`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_PERSONNAGE` FOREIGN KEY (`idPersonnage`) REFERENCES `personnage` (`idPersonnage`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dispose
-- ----------------------------
INSERT INTO `dispose` VALUES (1, 1);
INSERT INTO `dispose` VALUES (1, 2);
INSERT INTO `dispose` VALUES (1, 3);
INSERT INTO `dispose` VALUES (1, 4);
INSERT INTO `dispose` VALUES (1, 9);
INSERT INTO `dispose` VALUES (2, 1);
INSERT INTO `dispose` VALUES (2, 2);
INSERT INTO `dispose` VALUES (2, 3);
INSERT INTO `dispose` VALUES (3, 2);
INSERT INTO `dispose` VALUES (3, 3);
INSERT INTO `dispose` VALUES (3, 7);
INSERT INTO `dispose` VALUES (4, 4);
INSERT INTO `dispose` VALUES (4, 5);

INSERT INTO `dispose` VALUES (5, 7);
INSERT INTO `dispose` VALUES (6, 4);
INSERT INTO `dispose` VALUES (6, 8);
INSERT INTO `dispose` VALUES (7, 9);
INSERT INTO `dispose` VALUES (7, 10);

SET FOREIGN_KEY_CHECKS = 1;
