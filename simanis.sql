/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : simanis

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 11/06/2019 20:37:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_sekolah
-- ----------------------------
DROP TABLE IF EXISTS `data_sekolah`;
CREATE TABLE `data_sekolah`  (
  `id_sekolah` int(3) NOT NULL AUTO_INCREMENT,
  `npsn` int(10) NOT NULL,
  `nama_sekolah` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_sekolah` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelurahan` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kota` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `provinsi` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_telp` int(13) NOT NULL,
  `email_sekolah` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_kepsek` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_sekolah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_sekolah
-- ----------------------------
INSERT INTO `data_sekolah` VALUES (2, 23123421, 'SDN 04', 'Negri', 'Gg.Melati', 'Cakung Barat', 'Cakung', 'Jakarta Timur', 'DKI Jakarta', 218576489, 'sdn04cakbar@gmail.co', 'Susanti S.Pd, MM');

-- ----------------------------
-- Table structure for data_siswa
-- ----------------------------
DROP TABLE IF EXISTS `data_siswa`;
CREATE TABLE `data_siswa`  (
  `id_siswa` int(3) NOT NULL AUTO_INCREMENT,
  `id_sekolah` int(3) NOT NULL,
  `no_induk` int(4) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nama_siswa` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` int(11) NOT NULL COMMENT '1 : Laki-laki , 2 : Perempuan',
  `tempat_lahir` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` int(11) NOT NULL,
  `nama_ibu` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_siswa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 : Siswa Baru, 2 : Naik Kelas, 3 : Mengulang, 4 : Lulus',
  `id_rombel` int(5) NOT NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_siswa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_siswa
-- ----------------------------
INSERT INTO `data_siswa` VALUES (4, 2, 4334, 121233, 'Danu Dwi Pamungkas', 1, 'Jakarta', '1900-10-28', 4, 'Tinibel', 'Cakung', 2, 4, 'http://localhost/simanis/assets/images/abc.jpg');
INSERT INTO `data_siswa` VALUES (6, 2, 67868776, 1221, 'Eko Widodo', 1, 'Jakarta', '2019-03-22', 6, 'Nani', 'Jakarta', 1, 6, '');
INSERT INTO `data_siswa` VALUES (7, 2, 1213, 1323, 'Velinda Kusuma', 2, 'Purbalingga', '1900-11-07', 1, 'Sumariyati', 'Cakung ', 2, 1, 'http://localhost/simanis/Uploads/foto_siswa/2019_06_101213.jpg');
INSERT INTO `data_siswa` VALUES (9, 2, 1232323, 12121212, 'Febri Adi ', 1, 'Purworejo', '2000-02-12', 5, 'Sri Lestari', 'Gang Bodong', 2, 6, '');
INSERT INTO `data_siswa` VALUES (10, 0, 343355, 13232321, 'Ilham Yudatama', 1, 'Yogyakarta', '1997-12-22', 3, 'Suimah', 'Bekasi', 2, 0, 'http://localhost/simanis/Uploads/foto_siswa/2019_06_10343355.jpg');
INSERT INTO `data_siswa` VALUES (11, 0, 4354534, 2147483647, 'Ferlita ', 2, 'Jakarta', '2009-04-10', 6, 'Sum', 'Gg.Ppd', 3, 0, '');
INSERT INTO `data_siswa` VALUES (12, 0, 345345, 12432132, 'Cut Zuraida', 2, 'Aceh', '2007-12-08', 2, 'Firda', 'Gg.Penjahit', 2, 0, '');
INSERT INTO `data_siswa` VALUES (13, 0, 234242342, 12312312, 'Nanang', 1, 'Purworejo', '1994-08-23', 1, 'Wati', 'Gg.Tapos', 2, 0, '');
INSERT INTO `data_siswa` VALUES (14, 0, 34324234, 324314121, 'Yanti', 2, 'Jakarta', '1996-08-27', 1, 'Sukarti', 'Kp.Pedaengan', 2, 0, '');
INSERT INTO `data_siswa` VALUES (15, 0, 3423423, 345435435, 'snbdsjdsj', 2, 'sjhdjas', '2019-06-12', 5, 'asmbdbasdbja', 'sahhdsadhasd', 3, 0, 'http://localhost/simanis/Uploads/foto_siswa/2019_06_103423423.jpg');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lvl` int(20) NOT NULL COMMENT 'lvl 1 = kepala dinas, lvl 2 = Seksi Dikdas & PKLK, lvl 3 = Satlak, lvl 4 = sekolah',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES (1, 'tita', '12345', 1);
INSERT INTO `login` VALUES (2, 'danu', '3456', 2);
INSERT INTO `login` VALUES (3, 'Barak', '234673', 3);
INSERT INTO `login` VALUES (4, 'Lulu', '576687', 4);
INSERT INTO `login` VALUES (5, 'Uswatun', '345', 4);
INSERT INTO `login` VALUES (6, 'Jali', '56456', 4);

-- ----------------------------
-- Table structure for manajemen_datsis
-- ----------------------------
DROP TABLE IF EXISTS `manajemen_datsis`;
CREATE TABLE `manajemen_datsis`  (
  `id_mdatsis` int(11) NOT NULL AUTO_INCREMENT,
  `no_induk` int(11) NULL DEFAULT NULL,
  `nisn` int(11) NULL DEFAULT NULL,
  `nama_siswa_b` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin_b` int(11) NULL DEFAULT NULL COMMENT '1. Laki-Laki, 2. Perempuan',
  `tempat_lahir_b` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir_b` date NULL DEFAULT NULL,
  `agama_b` int(11) NULL DEFAULT NULL COMMENT '1. ISLAM\r\n2. KATOLIK\r\n3. PROTESTAN\r\n4. HINDU\r\n5. BUDHA\r\n6. KHONG HU CHU\r\n7. LAINNYA',
  `nama_ibu_b` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_b` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dokumen_pendukung` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_pengajuan` date NULL DEFAULT NULL,
  `syscreateuser` int(11) NULL DEFAULT NULL,
  `syscreatedate` datetime(0) NULL DEFAULT NULL,
  `sysupdateuser` int(11) NULL DEFAULT NULL,
  `sysupdatedate` datetime(0) NULL DEFAULT NULL,
  `sysdeleteuser` int(11) NULL DEFAULT NULL,
  `sysdeletedate` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_mdatsis`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of manajemen_datsis
-- ----------------------------
INSERT INTO `manajemen_datsis` VALUES (1, 23456, 78912, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://localhost/Simanis/Uploads/2019_05_2323456.jpeg ', NULL, 1, '2019-05-23 07:15:42', NULL, NULL, NULL, NULL);
INSERT INTO `manajemen_datsis` VALUES (2, 435363, 42342, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost/simanis/Uploads/2019_05_26435363.jpg ', NULL, 1, '2019-05-26 15:04:01', NULL, NULL, NULL, NULL);
INSERT INTO `manajemen_datsis` VALUES (3, 98399, 193380, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost/simanis/Uploads/2019_05_2898399.jpg ', NULL, 1, '2019-05-28 18:00:42', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for rombel
-- ----------------------------
DROP TABLE IF EXISTS `rombel`;
CREATE TABLE `rombel`  (
  `id_rombel` int(3) NOT NULL AUTO_INCREMENT,
  `nama_rombel` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelas` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_rombel`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rombel
-- ----------------------------
INSERT INTO `rombel` VALUES (1, 'R01A', '1A');
INSERT INTO `rombel` VALUES (2, 'R01B', '1B');
INSERT INTO `rombel` VALUES (3, 'R02A', '2A');
INSERT INTO `rombel` VALUES (4, 'R02B', '2B');
INSERT INTO `rombel` VALUES (5, 'R03A', '3A');
INSERT INTO `rombel` VALUES (6, 'R03B', '3B');
INSERT INTO `rombel` VALUES (7, 'R04A', '4A');
INSERT INTO `rombel` VALUES (8, 'R04B', '4B');
INSERT INTO `rombel` VALUES (9, 'R05A', '5A');
INSERT INTO `rombel` VALUES (10, 'R05B', '5B');
INSERT INTO `rombel` VALUES (11, 'R06A', '6A');
INSERT INTO `rombel` VALUES (12, 'R06B', '6B');

SET FOREIGN_KEY_CHECKS = 1;
