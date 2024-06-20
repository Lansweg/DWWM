/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : theatre

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 10/05/2024 09:39:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for musicien
-- ----------------------------
DROP TABLE IF EXISTS `musicien`;
CREATE TABLE `musicien`  (
  `idMusicien` int NOT NULL,
  `nomMusicien` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `idRepresentation` int NULL DEFAULT NULL,
  PRIMARY KEY (`idMusicien`) USING BTREE,
  INDEX `idRepresentation`(`idRepresentation` ASC) USING BTREE,
  CONSTRAINT `musicien_ibfk_1` FOREIGN KEY (`idRepresentation`) REFERENCES `representation` (`idRepresentation`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of musicien
-- ----------------------------
INSERT INTO `musicien` VALUES (1, 'Musicien 1', 26);
INSERT INTO `musicien` VALUES (2, 'Musicien 2', 3);
INSERT INTO `musicien` VALUES (3, 'Musicien 3', 28);
INSERT INTO `musicien` VALUES (4, 'Musicien 4', 9);
INSERT INTO `musicien` VALUES (5, 'Musicien 5', 19);
INSERT INTO `musicien` VALUES (6, 'Musicien 6', 10);
INSERT INTO `musicien` VALUES (7, 'Musicien 7', 22);
INSERT INTO `musicien` VALUES (8, 'Musicien 8', 20);
INSERT INTO `musicien` VALUES (9, 'Musicien 9', 5);
INSERT INTO `musicien` VALUES (10, 'Musicien 10', 23);
INSERT INTO `musicien` VALUES (11, 'Musicien 11', 9);
INSERT INTO `musicien` VALUES (12, 'Musicien 12', 5);
INSERT INTO `musicien` VALUES (13, 'Musicien 13', 27);
INSERT INTO `musicien` VALUES (14, 'Musicien 14', 29);
INSERT INTO `musicien` VALUES (15, 'Musicien 15', 5);
INSERT INTO `musicien` VALUES (16, 'Musicien 16', 26);
INSERT INTO `musicien` VALUES (17, 'Musicien 17', 23);
INSERT INTO `musicien` VALUES (18, 'Musicien 18', 9);
INSERT INTO `musicien` VALUES (19, 'Musicien 19', 4);
INSERT INTO `musicien` VALUES (20, 'Musicien 20', 20);
INSERT INTO `musicien` VALUES (21, 'Musicien 21', 19);
INSERT INTO `musicien` VALUES (22, 'Musicien 22', 23);
INSERT INTO `musicien` VALUES (23, 'Musicien 23', 26);
INSERT INTO `musicien` VALUES (24, 'Musicien 24', 30);
INSERT INTO `musicien` VALUES (25, 'Musicien 25', 13);
INSERT INTO `musicien` VALUES (26, 'Musicien 26', 5);
INSERT INTO `musicien` VALUES (27, 'Musicien 27', 20);
INSERT INTO `musicien` VALUES (28, 'Musicien 28', 28);
INSERT INTO `musicien` VALUES (29, 'Musicien 29', 3);
INSERT INTO `musicien` VALUES (30, 'Musicien 30', 24);

-- ----------------------------
-- Table structure for programmer
-- ----------------------------
DROP TABLE IF EXISTS `programmer`;
CREATE TABLE `programmer`  (
  `date` date NULL DEFAULT NULL,
  `idRepresentation` int NULL DEFAULT NULL,
  `tarif` decimal(10, 2) NULL DEFAULT NULL,
  INDEX `idRepresentation`(`idRepresentation` ASC) USING BTREE,
  CONSTRAINT `programmer_ibfk_1` FOREIGN KEY (`idRepresentation`) REFERENCES `representation` (`idRepresentation`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of programmer
-- ----------------------------
INSERT INTO `programmer` VALUES ('2022-07-29', 17, 50.00);
INSERT INTO `programmer` VALUES ('2022-08-27', 3, 50.00);
INSERT INTO `programmer` VALUES ('2022-10-20', 24, 50.00);
INSERT INTO `programmer` VALUES ('2022-05-27', 11, 50.00);
INSERT INTO `programmer` VALUES ('2022-07-17', 5, 50.00);
INSERT INTO `programmer` VALUES ('2022-07-13', 2, 50.00);
INSERT INTO `programmer` VALUES ('2022-11-05', 14, 50.00);
INSERT INTO `programmer` VALUES ('2022-05-08', 16, 50.00);
INSERT INTO `programmer` VALUES ('2022-01-03', 16, 50.00);
INSERT INTO `programmer` VALUES ('2022-04-04', 18, 50.00);
INSERT INTO `programmer` VALUES ('2022-04-04', 20, 24.61);
INSERT INTO `programmer` VALUES ('2022-07-25', 2, 38.11);
INSERT INTO `programmer` VALUES ('2022-08-23', 28, 34.47);
INSERT INTO `programmer` VALUES ('2022-09-05', 10, 28.53);
INSERT INTO `programmer` VALUES ('2022-11-22', 23, 2.08);
INSERT INTO `programmer` VALUES ('2022-12-24', 24, 46.08);
INSERT INTO `programmer` VALUES ('2022-04-17', 21, 29.86);
INSERT INTO `programmer` VALUES ('2022-11-26', 22, 50.00);
INSERT INTO `programmer` VALUES ('2022-07-25', 30, 50.00);
INSERT INTO `programmer` VALUES ('2022-08-20', 13, 50.00);
INSERT INTO `programmer` VALUES ('2022-08-14', 18, 50.00);
INSERT INTO `programmer` VALUES ('2022-03-30', 8, 50.00);
INSERT INTO `programmer` VALUES ('2022-09-05', 29, 50.00);
INSERT INTO `programmer` VALUES ('2022-09-27', 17, 50.00);
INSERT INTO `programmer` VALUES ('2022-09-05', 1, 50.00);
INSERT INTO `programmer` VALUES ('2022-05-08', 15, 50.00);
INSERT INTO `programmer` VALUES ('2022-07-25', 20, 29.50);
INSERT INTO `programmer` VALUES ('2022-12-14', 30, 5.75);
INSERT INTO `programmer` VALUES ('2022-08-04', 19, 13.48);
INSERT INTO `programmer` VALUES ('2022-07-10', 25, 22.77);

-- ----------------------------
-- Table structure for representation
-- ----------------------------
DROP TABLE IF EXISTS `representation`;
CREATE TABLE `representation`  (
  `idRepresentation` int NOT NULL,
  `titre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lieu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idRepresentation`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of representation
-- ----------------------------
INSERT INTO `representation` VALUES (1, 'Représentation 1', 'Mogador');
INSERT INTO `representation` VALUES (2, 'Représentation 2', 'Mogador');
INSERT INTO `representation` VALUES (3, 'Représentation 3', 'Mogador');
INSERT INTO `representation` VALUES (4, 'Représentation 4', 'Mogador');
INSERT INTO `representation` VALUES (5, 'Représentation 5', 'Mogador');
INSERT INTO `representation` VALUES (6, 'Représentation 6', 'Mogador');
INSERT INTO `representation` VALUES (7, 'Représentation 7', 'Mogador');
INSERT INTO `representation` VALUES (8, 'Représentation 8', 'Mogador');
INSERT INTO `representation` VALUES (9, 'Représentation 9', 'Mogador');
INSERT INTO `representation` VALUES (10, 'Représentation 10', 'Mogador');
INSERT INTO `representation` VALUES (11, 'Représentation 11', 'Mogador');
INSERT INTO `representation` VALUES (12, 'Représentation 12', 'Mogador');
INSERT INTO `representation` VALUES (13, 'Représentation 13', 'Mogador');
INSERT INTO `representation` VALUES (14, 'Représentation 14', 'Mogador');
INSERT INTO `representation` VALUES (15, 'Représentation 15', 'Mogador');
INSERT INTO `representation` VALUES (16, 'Représentation 16', 'Mogador');
INSERT INTO `representation` VALUES (17, 'Représentation 17', 'Mogador');
INSERT INTO `representation` VALUES (18, 'Représentation 18', 'Mogador');
INSERT INTO `representation` VALUES (19, 'Représentation 19', 'Salle B');
INSERT INTO `representation` VALUES (20, 'Représentation 20', 'Salle A');
INSERT INTO `representation` VALUES (21, 'Représentation 21', 'Salle B');
INSERT INTO `representation` VALUES (22, 'Représentation 22', 'Salle A');
INSERT INTO `representation` VALUES (23, 'Représentation 23', 'Salle B');
INSERT INTO `representation` VALUES (24, 'Représentation 24', 'Salle A');
INSERT INTO `representation` VALUES (25, 'Représentation 25', 'Salle B');
INSERT INTO `representation` VALUES (26, 'Représentation 26', 'Salle A');
INSERT INTO `representation` VALUES (27, 'Représentation 27', 'Salle B');
INSERT INTO `representation` VALUES (28, 'Représentation 28', 'Salle A');
INSERT INTO `representation` VALUES (29, 'Représentation 29', 'Salle B');
INSERT INTO `representation` VALUES (30, 'Représentation 30', 'Salle A');

SET FOREIGN_KEY_CHECKS = 1;
