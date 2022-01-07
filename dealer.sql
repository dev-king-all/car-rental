/*
 Navicat Premium Data Transfer

 Source Server         : m
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : dealer

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 07/01/2022 14:52:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account_activities
-- ----------------------------
DROP TABLE IF EXISTS `account_activities`;
CREATE TABLE `account_activities`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_login_browser` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_login_at` datetime NULL DEFAULT NULL,
  `last_login_ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 91 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of account_activities
-- ----------------------------
INSERT INTO `account_activities` VALUES (34, '52', 'Chrome 91.0.4472', '2021-07-01 05:56:17', '::1', '2021-07-01 09:56:17', '2021-07-01 09:56:17');
INSERT INTO `account_activities` VALUES (35, '52', 'Chrome 91.0.4472', '2021-07-01 08:03:57', '::1', '2021-07-01 14:03:57', '2021-07-01 14:03:57');
INSERT INTO `account_activities` VALUES (36, '102', 'Chrome 91.0.4472', '2021-07-01 08:04:41', '::1', '2021-07-01 14:04:41', '2021-07-01 14:04:41');
INSERT INTO `account_activities` VALUES (37, '102', 'Chrome 91.0.4472', '2021-07-01 08:09:25', '::1', '2021-07-01 14:09:25', '2021-07-01 14:09:25');
INSERT INTO `account_activities` VALUES (38, '52', 'Chrome 91.0.4472', '2021-07-01 08:30:08', '::1', '2021-07-01 14:30:08', '2021-07-01 14:30:08');
INSERT INTO `account_activities` VALUES (39, '103', 'Chrome 91.0.4472', '2021-07-01 08:37:38', '::1', '2021-07-01 14:37:38', '2021-07-01 14:37:38');
INSERT INTO `account_activities` VALUES (40, '103', 'Chrome 91.0.4472', '2021-07-01 08:38:10', '::1', '2021-07-01 14:38:10', '2021-07-01 14:38:10');
INSERT INTO `account_activities` VALUES (41, '103', 'Chrome 91.0.4472', '2021-07-01 10:07:55', '::1', '2021-07-01 16:07:55', '2021-07-01 16:07:55');
INSERT INTO `account_activities` VALUES (42, '103', 'Chrome 91.0.4472', '2021-07-01 10:08:59', '::1', '2021-07-01 16:08:59', '2021-07-01 16:08:59');
INSERT INTO `account_activities` VALUES (43, '103', 'Chrome 91.0.4472', '2021-07-01 10:09:04', '::1', '2021-07-01 16:09:04', '2021-07-01 16:09:04');
INSERT INTO `account_activities` VALUES (44, '103', 'Chrome 91.0.4472', '2021-07-01 10:09:12', '::1', '2021-07-01 16:09:12', '2021-07-01 16:09:12');
INSERT INTO `account_activities` VALUES (45, '52', 'Chrome 91.0.4472', '2021-07-01 12:51:33', '::1', '2021-07-01 18:51:33', '2021-07-01 18:51:33');
INSERT INTO `account_activities` VALUES (46, '104', 'Chrome 91.0.4472', '2021-07-01 14:08:54', '::1', '2021-07-01 20:08:54', '2021-07-01 20:08:54');
INSERT INTO `account_activities` VALUES (47, '52', 'Chrome 91.0.4472', '2021-07-01 14:09:44', '::1', '2021-07-01 20:09:44', '2021-07-01 20:09:44');
INSERT INTO `account_activities` VALUES (48, '104', 'Chrome 91.0.4472', '2021-07-03 05:58:35', '::1', '2021-07-03 11:58:35', '2021-07-03 11:58:35');
INSERT INTO `account_activities` VALUES (49, '104', 'Chrome 91.0.4472', '2021-07-03 05:59:23', '::1', '2021-07-03 11:59:23', '2021-07-03 11:59:23');
INSERT INTO `account_activities` VALUES (50, '52', 'Chrome 91.0.4472', '2021-07-04 08:18:01', '::1', '2021-07-04 14:18:01', '2021-07-04 14:18:01');
INSERT INTO `account_activities` VALUES (51, '104', 'Chrome 91.0.4472', '2021-07-05 05:43:52', '::1', '2021-07-05 11:43:52', '2021-07-05 11:43:52');
INSERT INTO `account_activities` VALUES (52, '52', 'Chrome 91.0.4472', '2021-07-05 05:50:28', '::1', '2021-07-05 11:50:28', '2021-07-05 11:50:28');
INSERT INTO `account_activities` VALUES (53, '104', 'Chrome 91.0.4472', '2021-07-05 05:56:30', '::1', '2021-07-05 11:56:30', '2021-07-05 11:56:30');
INSERT INTO `account_activities` VALUES (54, '52', 'Chrome 91.0.4472', '2021-07-05 18:25:08', '::1', '2021-07-06 00:25:08', '2021-07-06 00:25:08');
INSERT INTO `account_activities` VALUES (55, '104', 'Chrome 91.0.4472', '2021-07-05 18:40:31', '::1', '2021-07-06 00:40:31', '2021-07-06 00:40:31');
INSERT INTO `account_activities` VALUES (56, '104', 'Chrome 91.0.4472', '2021-07-05 18:40:36', '::1', '2021-07-06 00:40:36', '2021-07-06 00:40:36');
INSERT INTO `account_activities` VALUES (57, '104', 'Chrome 91.0.4472', '2021-07-05 18:41:59', '::1', '2021-07-06 00:41:59', '2021-07-06 00:41:59');
INSERT INTO `account_activities` VALUES (58, '104', 'Chrome 91.0.4472', '2021-07-05 18:47:51', '::1', '2021-07-06 00:47:51', '2021-07-06 00:47:51');
INSERT INTO `account_activities` VALUES (59, '104', 'Chrome 91.0.4472', '2021-07-05 18:58:30', '::1', '2021-07-06 00:58:30', '2021-07-06 00:58:30');
INSERT INTO `account_activities` VALUES (60, '104', 'Chrome 91.0.4472', '2021-07-05 18:59:18', '::1', '2021-07-06 00:59:18', '2021-07-06 00:59:18');
INSERT INTO `account_activities` VALUES (61, '104', 'Chrome 91.0.4472', '2021-07-06 09:01:14', '::1', '2021-07-06 15:01:14', '2021-07-06 15:01:14');
INSERT INTO `account_activities` VALUES (62, '104', 'Chrome 91.0.4472', '2021-07-06 09:01:47', '::1', '2021-07-06 15:01:47', '2021-07-06 15:01:47');
INSERT INTO `account_activities` VALUES (63, '105', 'Chrome 91.0.4472', '2021-07-06 09:07:38', '::1', '2021-07-06 15:07:38', '2021-07-06 15:07:38');
INSERT INTO `account_activities` VALUES (64, '105', 'Chrome 91.0.4472', '2021-07-06 09:17:49', '::1', '2021-07-06 15:17:49', '2021-07-06 15:17:49');
INSERT INTO `account_activities` VALUES (65, '105', 'Chrome 91.0.4472', '2021-07-06 09:45:44', '::1', '2021-07-06 15:45:44', '2021-07-06 15:45:44');
INSERT INTO `account_activities` VALUES (66, '52', 'Chrome 91.0.4472', '2021-07-07 06:57:00', '::1', '2021-07-07 12:57:00', '2021-07-07 12:57:00');
INSERT INTO `account_activities` VALUES (67, '52', 'Chrome 91.0.4472', '2021-07-07 15:36:03', '::1', '2021-07-07 21:36:03', '2021-07-07 21:36:03');
INSERT INTO `account_activities` VALUES (68, '52', 'Chrome 91.0.4472', '2021-07-07 16:12:00', '::1', '2021-07-07 22:12:00', '2021-07-07 22:12:00');
INSERT INTO `account_activities` VALUES (69, '105', 'Chrome 91.0.4472', '2021-07-07 17:00:49', '::1', '2021-07-07 23:00:49', '2021-07-07 23:00:49');
INSERT INTO `account_activities` VALUES (70, '105', 'Chrome 91.0.4472', '2021-07-07 17:06:30', '::1', '2021-07-07 23:06:30', '2021-07-07 23:06:30');
INSERT INTO `account_activities` VALUES (71, '106', 'Chrome 91.0.4472', '2021-07-07 18:01:39', '::1', '2021-07-08 00:01:39', '2021-07-08 00:01:39');
INSERT INTO `account_activities` VALUES (72, '105', 'Chrome 91.0.4472', '2021-07-07 18:03:00', '::1', '2021-07-08 00:03:00', '2021-07-08 00:03:00');
INSERT INTO `account_activities` VALUES (73, '105', 'Chrome 91.0.4472', '2021-07-07 18:14:17', '::1', '2021-07-08 00:14:17', '2021-07-08 00:14:17');
INSERT INTO `account_activities` VALUES (74, '52', 'Chrome 91.0.4472', '2021-07-07 19:52:06', '::1', '2021-07-08 01:52:06', '2021-07-08 01:52:06');
INSERT INTO `account_activities` VALUES (75, '52', 'Chrome 91.0.4472', '2021-07-07 20:14:36', '::1', '2021-07-08 02:14:36', '2021-07-08 02:14:36');
INSERT INTO `account_activities` VALUES (76, '106', 'Chrome 91.0.4472', '2021-07-07 20:22:48', '::1', '2021-07-08 02:22:48', '2021-07-08 02:22:48');
INSERT INTO `account_activities` VALUES (77, '107', 'Chrome 91.0.4472', '2021-07-08 03:59:28', '::1', '2021-07-08 09:59:28', '2021-07-08 09:59:28');
INSERT INTO `account_activities` VALUES (78, '107', 'Chrome 91.0.4472', '2021-07-08 05:33:46', '::1', '2021-07-08 11:33:46', '2021-07-08 11:33:46');
INSERT INTO `account_activities` VALUES (79, '107', 'Chrome 91.0.4472', '2021-07-08 05:37:19', '::1', '2021-07-08 11:37:19', '2021-07-08 11:37:19');
INSERT INTO `account_activities` VALUES (80, '52', 'Chrome 91.0.4472', '2021-07-08 05:39:26', '::1', '2021-07-08 11:39:26', '2021-07-08 11:39:26');
INSERT INTO `account_activities` VALUES (81, '106', 'Chrome 91.0.4472', '2021-07-08 05:40:46', '::1', '2021-07-08 11:40:46', '2021-07-08 11:40:46');
INSERT INTO `account_activities` VALUES (82, '106', 'Chrome 91.0.4472', '2021-07-08 20:54:37', '::1', '2021-07-09 02:54:37', '2021-07-09 02:54:37');
INSERT INTO `account_activities` VALUES (83, '52', 'Chrome 96.0.4664', '2021-12-15 00:27:00', '127.0.0.1', '2021-12-15 17:27:00', '2021-12-15 17:27:00');
INSERT INTO `account_activities` VALUES (84, '52', 'Chrome 96.0.4664', '2021-12-15 02:14:44', '127.0.0.1', '2021-12-15 19:14:44', '2021-12-15 19:14:44');
INSERT INTO `account_activities` VALUES (85, '52', 'Chrome 96.0.4664', '2021-12-17 00:29:30', '127.0.0.1', '2021-12-17 17:29:30', '2021-12-17 17:29:30');
INSERT INTO `account_activities` VALUES (86, '52', 'Chrome 96.0.4664', '2021-12-21 02:13:48', '127.0.0.1', '2021-12-21 19:13:48', '2021-12-21 19:13:48');
INSERT INTO `account_activities` VALUES (87, '52', 'Chrome 96.0.4664', '2021-12-21 02:15:44', '127.0.0.1', '2021-12-21 19:15:44', '2021-12-21 19:15:44');
INSERT INTO `account_activities` VALUES (88, '52', 'Chrome 96.0.4664', '2021-12-21 08:30:29', '127.0.0.1', '2021-12-21 08:30:29', '2021-12-21 08:30:29');
INSERT INTO `account_activities` VALUES (89, '52', 'Chrome 96.0.4664', '2022-01-07 04:12:17', '127.0.0.1', '2022-01-07 04:12:17', '2022-01-07 04:12:17');
INSERT INTO `account_activities` VALUES (90, '52', 'Chrome 96.0.4664', '2022-01-07 05:05:14', '127.0.0.1', '2022-01-07 05:05:14', '2022-01-07 05:05:14');

-- ----------------------------
-- Table structure for admin_profiles
-- ----------------------------
DROP TABLE IF EXISTS `admin_profiles`;
CREATE TABLE `admin_profiles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `date_of_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_profiles
-- ----------------------------
INSERT INTO `admin_profiles` VALUES (1, 52, 'Super Admin', '+254745234234', '03/14/1994', 'abc', 'etc', 'Kentucky', 'canada', NULL, '2021-07-08 02:06:37');

-- ----------------------------
-- Table structure for cars
-- ----------------------------
DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `make_id` int NOT NULL,
  `make_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `vehicle_type_id` int NULL DEFAULT NULL,
  `vehicle_type_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `person` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `time` datetime NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 371 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cars
-- ----------------------------
INSERT INTO `cars` VALUES (201, 440, 'ASTON MARTIN', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:32', '2022-01-07 05:04:32');
INSERT INTO `cars` VALUES (202, 441, 'TESLA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:33', '2022-01-07 05:04:33');
INSERT INTO `cars` VALUES (203, 442, 'JAGUAR', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:33', '2022-01-07 05:04:33');
INSERT INTO `cars` VALUES (204, 443, 'MASERATI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:33', '2022-01-07 05:04:33');
INSERT INTO `cars` VALUES (205, 445, 'ROLLS ROYCE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:33', '2022-01-07 05:04:33');
INSERT INTO `cars` VALUES (206, 448, 'TOYOTA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:33', '2022-01-07 05:04:33');
INSERT INTO `cars` VALUES (207, 449, 'MERCEDES-BENZ', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:33', '2022-01-07 05:04:33');
INSERT INTO `cars` VALUES (208, 452, 'BMW', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:33', '2022-01-07 05:04:33');
INSERT INTO `cars` VALUES (209, 454, 'BUGATTI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (210, 456, 'MINI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (211, 460, 'FORD', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (212, 464, 'LINCOLN', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (213, 465, 'MERCURY', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (214, 466, 'LOTUS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (215, 467, 'CHEVROLET', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (216, 468, 'BUICK', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (217, 469, 'CADILLAC', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (218, 470, 'HOLDEN', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (219, 471, 'OPEL', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (220, 472, 'GMC', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (221, 473, 'MAZDA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (222, 474, 'HONDA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (223, 475, 'ACURA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (224, 476, 'DODGE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:34', '2022-01-07 05:04:34');
INSERT INTO `cars` VALUES (225, 477, 'CHRYSLER', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (226, 478, 'NISSAN', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (227, 480, 'INFINITI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (228, 481, 'MITSUBISHI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (229, 482, 'VOLKSWAGEN', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (230, 485, 'VOLVO', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (231, 492, 'FIAT', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (232, 493, 'ALFA ROMEO', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (233, 497, 'LANCIA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (234, 498, 'HYUNDAI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (235, 499, 'KIA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (236, 502, 'LAMBORGHINI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (237, 504, 'SMART', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (238, 509, 'SUZUKI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (239, 515, 'LEXUS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (240, 523, 'SUBARU', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:35', '2022-01-07 05:04:35');
INSERT INTO `cars` VALUES (241, 533, 'MAYBACH', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (242, 536, 'PONTIAC', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (243, 539, 'MORGAN', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (244, 542, 'ISUZU', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (245, 565, 'TRIUMPH', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (246, 572, 'SAAB', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (247, 582, 'AUDI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (248, 583, 'BENTLEY', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (249, 584, 'PORSCHE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (250, 603, 'FERRARI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (251, 606, 'AM GENERAL', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (252, 629, 'CREATIVE COACHWORKS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (253, 771, 'AC PROPULSION', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (254, 847, 'DAIHATSU', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (255, 972, 'FALCON', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (256, 986, 'EV INNOVATIONS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (257, 992, 'FAW JIAXING HAPPY MESSENGER', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (258, 1033, 'FISKER AUTOMOTIVE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (259, 1034, 'NINA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:36', '2022-01-07 05:04:36');
INSERT INTO `cars` VALUES (260, 1056, 'SATURN', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (261, 1077, 'DAEWOO', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (262, 1124, 'AMERICAN MOTORS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (263, 1142, 'FORMULA 1 STREET COM', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (264, 1146, 'GEO', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (265, 1151, 'FORTUNESPORT VES', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (266, 1288, 'AAS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (267, 1292, 'EQUUS AUTOMOTIVE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (268, 1393, 'ELECTRIC MOBILE CARS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (269, 1498, 'AVERA MOTORS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (270, 1683, 'BAKKURA MOBILITY', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (271, 1755, 'TH!NK', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (272, 1777, 'CODA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (273, 1869, 'CONTEMPORARY CLASSIC CARS (CCC)', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (274, 1896, 'KOENIGSEGG', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (275, 1991, 'BYD', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (276, 2018, 'KANDI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (277, 2049, 'KEPLER MOTORS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (278, 2131, 'MAKING YOU MOBILE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:37', '2022-01-07 05:04:37');
INSERT INTO `cars` VALUES (279, 2236, 'MCLAREN', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (280, 2376, 'MYCAR', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (281, 2408, 'EAGLE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (282, 2409, 'PLYMOUTH', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (283, 2618, 'NANCHANG FREEDOM TECHNOLOGY LIMITED COMPANY', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (284, 2665, 'NJD AUTOMOTIVE LLC', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (285, 2745, 'PHOENIX MOTORCARS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (286, 3176, 'ROCKET SLED MOTORS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (287, 3440, 'VISION INDUSTRIES', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (288, 3540, 'WARHAWK PERFORMANCE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (289, 3583, 'UKEYCHEYMA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (290, 3706, 'TOTAL ELECTRIC VEHICLES', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (291, 3766, 'SPYKER', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (292, 4162, 'OLDSMOBILE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (293, 4220, 'PANOZ', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:38', '2022-01-07 05:04:38');
INSERT INTO `cars` VALUES (294, 4355, 'SALEEN', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (295, 4410, 'SOLECTRIA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (296, 4451, 'YESTER YEAR AUTO', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (297, 4596, 'BXR', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (298, 4634, 'ENGINE CONNECTION', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (299, 4644, 'BLUECAR', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (300, 4764, 'MOSLER', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (301, 4767, 'PAGANI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (302, 4859, 'REVOLOGY', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (303, 5015, 'EMA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (304, 5042, 'COSTIN SPORTS CAR', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (305, 5083, 'GENESIS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (306, 5122, 'KARMA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (307, 5208, 'MATRIX MOTOR COMPANY', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (308, 5367, 'ARMBRUSTER STAGEWAY', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (309, 5381, 'LUMEN', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (310, 5464, 'ASUNA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (311, 5468, 'MERKUR', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (312, 5552, 'AVANTI', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (313, 5553, 'YUGO', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:39', '2022-01-07 05:04:39');
INSERT INTO `cars` VALUES (314, 5554, 'PEUGEOT', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (315, 5555, 'STERLING MOTOR CAR', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (316, 5557, 'CONSULIER GTP', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (317, 5657, 'DATSUN', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (318, 5661, 'PININFARINA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (319, 5760, 'VINTAGE AUTO', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (320, 5767, 'LONDONCOACH INC', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (321, 5848, 'MGS GRAND SPORT (MARDIKIAN)', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (322, 5938, 'PANTHER', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (323, 6018, 'DAYTONA COACH BUILDERS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (324, 6069, 'UCC', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (325, 6263, 'RS SPIDER', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (326, 6264, 'GRUPPE B', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (327, 6265, 'RALLY SPORT', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (328, 6313, 'RENAISSANCE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (329, 6364, 'JAC 427', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:40', '2022-01-07 05:04:40');
INSERT INTO `cars` VALUES (330, 6408, 'HUNTER DESIGN GROUP, LLC', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (331, 6473, 'BLACKWATER', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (332, 6663, 'GULLWING INTERNATIONAL MOTORS, LTD.', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (333, 6759, 'AMERITECH CORPORATION', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (334, 6792, 'STANFORD CUSTOMS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (335, 6880, 'CLASSIC ROADSTERS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (336, 6986, 'HERITAGE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (337, 7099, 'COBRA CARS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (338, 7207, 'C-R CHEETAH RACE CARS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (339, 7225, 'PAS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (340, 7425, 'BUG MOTORS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (341, 7477, 'EXCALIBUR AUTOMOBILE CORPORATION', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:41', '2022-01-07 05:04:41');
INSERT INTO `cars` VALUES (342, 7765, 'IVES MOTORS CORPORATION (IMC)', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (343, 7836, 'AUTODELTA USA INC', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (344, 8395, 'AUTOCAR LTD', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (345, 8605, 'BBC', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (346, 8785, 'PHOENIX SPORTS CARS, INC.', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (347, 9250, 'VECTOR AEROMOTIVE CORPORATION', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (348, 9326, 'CARBODIES', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (349, 9364, 'CREATIVE COACHWORKS INC.', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (350, 9376, 'WESTFALL MOTORS CORP.', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (351, 9401, 'CLENET', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (352, 9448, 'ELECTRIC CAR COMPANY', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (353, 9458, 'CX AUTOMOTIVE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (354, 9533, 'LA EXOTICS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (355, 9572, 'CLASSIC SPORTS CARS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (356, 9720, 'SF MOTORS INC.', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (357, 9759, 'SCUDERIA CAMERON GLICKENHAUS (SCG)', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (358, 10029, 'VINTAGE CRUISER', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:42', '2022-01-07 05:04:42');
INSERT INTO `cars` VALUES (359, 10030, 'VINTAGE MICROBUS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');
INSERT INTO `cars` VALUES (360, 10031, 'VINTAGE ROVER', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');
INSERT INTO `cars` VALUES (361, 10047, 'LITE CAR', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');
INSERT INTO `cars` VALUES (362, 10224, 'POLESTAR', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');
INSERT INTO `cars` VALUES (363, 10256, 'CZINGER', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');
INSERT INTO `cars` VALUES (364, 10393, 'GLICKENHAUS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');
INSERT INTO `cars` VALUES (365, 10623, 'DONGFENG', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');
INSERT INTO `cars` VALUES (366, 10638, 'KARMA AUTOMOTIVE LLC', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');
INSERT INTO `cars` VALUES (367, 10647, 'CRUISE', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');
INSERT INTO `cars` VALUES (368, 10919, 'LUCID MOTORS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');
INSERT INTO `cars` VALUES (369, 11076, 'CALMOTORS', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');
INSERT INTO `cars` VALUES (370, 11346, 'AUTOMOBILI PININFARINA', 2, 'Passenger Car', 'open', NULL, NULL, '2022-01-07 05:04:43', '2022-01-07 05:04:43');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2021_05_14_232401_add_fb_id_column_in_users_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 2);
INSERT INTO `migrations` VALUES (6, '2021_06_23_093654_create_admin_profiles_table', 2);
INSERT INTO `migrations` VALUES (7, '2021_06_26_041025_create_account_activities_table', 3);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('hitoishfaqrahim@gmail.com', '$2y$10$VJ.6V6OVnEDHeWrExsfHH.wP.2KV0OpURTPVr/2G6UpA66zFPEgty', '2021-06-29 14:18:12');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_verified` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fb_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 108 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (52, 'Super Admin', 'superadmin@gmail.com', NULL, NULL, '$2y$10$l.N3zmDwQLCc8e5t.hIf2OJSyYyrOcmSAqkv75ocX1iU/704AvDy6', 'SuperAdmin', '1', NULL, NULL, '2021-07-08 02:06:37', NULL);
INSERT INTO `users` VALUES (106, 'Agent One', 'agent@test.com', NULL, NULL, '$2y$10$8oXY.KLjs38dnUYZ9W1R8uTyGPiIV/trvr91MSBBu6QLPFWFnSCAS', 'Agent', '1', NULL, '2021-07-08 00:01:03', '2021-07-08 00:01:03', NULL);
INSERT INTO `users` VALUES (107, 'Client One', 'clientone@test.com', NULL, NULL, '$2y$10$byEO/xc6HJj2e58iEL8FkuGTSs2by0.LQavr3U0zgGXlakV3JL3t.', 'Client', '1', NULL, '2021-07-08 09:58:27', '2021-07-08 09:58:27', NULL);

SET FOREIGN_KEY_CHECKS = 1;
