/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : voyage

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 10/05/2024 09:55:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for client
-- ----------------------------
DROP TABLE IF EXISTS `client`;
CREATE TABLE `client`  (
  `idClient` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `numCB` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idClient`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of client
-- ----------------------------
INSERT INTO `client` VALUES (0, 'NouveauNom', 'Ethan', 'pierre.rock@example.com', '1234567890123456');
INSERT INTO `client` VALUES (1, 'Dupont', 'Jean', 'jean.dupont@example.com', '1234567890123456');
INSERT INTO `client` VALUES (2, 'Durand', 'Marie', 'marie.durand@example.com', '9876543210987654');
INSERT INTO `client` VALUES (3, 'Martin', 'Pierre', 'pierre.martin@example.com', '4567890123456789');

-- ----------------------------
-- Table structure for reservation
-- ----------------------------
DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation`  (
  `idClient` int NOT NULL,
  `idVoyage` int NOT NULL,
  `dateReservation` date NULL DEFAULT NULL,
  PRIMARY KEY (`idClient`, `idVoyage`) USING BTREE,
  INDEX `idVoyage`(`idVoyage` ASC) USING BTREE,
  CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`idVoyage`) REFERENCES `voyage` (`idVoyage`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reservation
-- ----------------------------
INSERT INTO `reservation` VALUES (1, 101, '2024-05-01');
INSERT INTO `reservation` VALUES (1, 102, '2024-05-04');
INSERT INTO `reservation` VALUES (2, 102, '2024-05-02');
INSERT INTO `reservation` VALUES (3, 103, '2024-05-03');

-- ----------------------------
-- Table structure for voyage
-- ----------------------------
DROP TABLE IF EXISTS `voyage`;
CREATE TABLE `voyage`  (
  `idVoyage` int NOT NULL,
  `Destination` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `duree` int NULL DEFAULT NULL,
  `prix` decimal(10, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`idVoyage`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of voyage
-- ----------------------------
INSERT INTO `voyage` VALUES (101, 'Paris', 5, 800.00);
INSERT INTO `voyage` VALUES (102, 'Londres', 11, 900.00);
INSERT INTO `voyage` VALUES (103, 'New York', 15, 2000.00);

SET FOREIGN_KEY_CHECKS = 1;
