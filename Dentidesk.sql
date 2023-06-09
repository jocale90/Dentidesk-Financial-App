/*
 Navicat Premium Data Transfer

 Source Server         : Dentidesk
 Source Server Type    : MySQL
 Source Server Version : 50742
 Source Host           : database-1.cz5j2hnoa7au.us-east-2.rds.amazonaws.com:3306
 Source Schema         : Dentidesk

 Target Server Type    : MySQL
 Target Server Version : 50742
 File Encoding         : 65001

 Date: 09/06/2023 12:31:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for calculo
-- ----------------------------
DROP TABLE IF EXISTS `calculo`;
CREATE TABLE `calculo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `valor` int(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of calculo
-- ----------------------------
INSERT INTO `calculo` VALUES (1, 'cat1', 10);
INSERT INTO `calculo` VALUES (2, 'cat2', 20);
INSERT INTO `calculo` VALUES (3, 'cat3', 70);

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES (1, 'Alimentacion', '2023-05-26 23:54:13', '2023-05-26 23:54:18');
INSERT INTO `categorias` VALUES (2, 'Locomocion', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (3, 'Salud', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (4, 'Seguros', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (5, 'Dividendos', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (6, 'Diezmo', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (7, 'Educacion', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (8, 'Crecimiento Personal', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (9, 'Sueldos', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (10, 'Aguinaldos', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (11, 'Inversiones', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (12, 'Cryptomonedas', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (13, 'herencias', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (14, 'Intereses cuenta a plazo', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (15, 'Retiro 10%', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (16, 'Devolucion de impuestos', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (17, 'Ingresos pasivos', '2023-05-26 23:54:13', '2023-05-26 23:54:13');
INSERT INTO `categorias` VALUES (18, 'Horas extras', '2023-05-26 23:54:13', '2023-05-26 23:54:13');

-- ----------------------------
-- Table structure for records
-- ----------------------------
DROP TABLE IF EXISTS `records`;
CREATE TABLE `records`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `concepto` int(11) NOT NULL,
  `descripcion` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NOT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `monto` int(255) NOT NULL,
  `estado` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of records
-- ----------------------------
INSERT INTO `records` VALUES (2, '2', 7, 'Pago curso de Java', '2023-05-26 04:53:06', '2023-05-26 04:53:06', 300000, NULL);
INSERT INTO `records` VALUES (4, '2', 3, 'Pago limpieza dental', '2023-05-26 05:01:55', '2023-05-26 05:01:55', 180000, NULL);
INSERT INTO `records` VALUES (5, '1', 16, 'Devolución de impuestos del año 2023', '2023-05-26 03:52:40', '2023-05-26 03:52:40', 70000, NULL);
INSERT INTO `records` VALUES (8, '1', 11, 'Cuenta a plazo fijo', '2023-05-26 04:25:43', '2023-05-26 04:25:43', 100000, NULL);
INSERT INTO `records` VALUES (9, '1', 12, 'Bitcoin', '2023-05-26 05:37:28', '2023-05-26 05:37:28', 500000, NULL);
INSERT INTO `records` VALUES (11, '2', 2, 'Gasto en metro', '2023-05-26 05:37:28', '2023-05-29 17:45:26', 37000, NULL);
INSERT INTO `records` VALUES (12, '1', 16, 'Devolucion AT2023', '2023-05-26 05:37:28', '2023-05-29 19:41:08', 500000, NULL);
INSERT INTO `records` VALUES (13, '2', 6, 'Pago Iglesia', '2023-05-26 05:37:28', '2023-05-29 19:43:00', 20000, NULL);
INSERT INTO `records` VALUES (14, '1', 18, 'Horas trabajo', '2023-05-26 05:37:28', '2023-05-29 19:46:21', 60000, NULL);
INSERT INTO `records` VALUES (22, '2', 3, 'pago de examenes', '2023-05-30 20:12:26', '2023-05-30 20:12:26', 1000000, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'administrador', 'admin@dentidesk.cl', NULL, '$2y$10$1RH6x5tSia7MTURerS0d/OX/xkDBnwGcgNofcq17iez0yKVvM2Tl6', NULL, '2023-05-26 20:19:22', '2023-05-26 20:19:22');

SET FOREIGN_KEY_CHECKS = 1;
