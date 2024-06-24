-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for agv_jst
CREATE DATABASE IF NOT EXISTS `agv_jst` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `agv_jst`;

-- Dumping structure for table agv_jst.traffarea
CREATE TABLE IF NOT EXISTS `traffarea` (
  `areaId` int(11) DEFAULT NULL,
  `nodeId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table agv_jst.traffarea: ~5 rows (approximately)
DELETE FROM `traffarea`;
INSERT INTO `traffarea` (`areaId`, `nodeId`) VALUES
	(1, 14),
	(2, 16),
	(3, 15),
	(4, 31),
	(4, 32);

-- Dumping structure for table agv_jst.traffcontrol
CREATE TABLE IF NOT EXISTS `traffcontrol` (
  `traffControlId` int(11) NOT NULL,
  `startNode` int(11) DEFAULT NULL,
  `endNode` int(11) DEFAULT NULL,
  `followFlag` int(11) DEFAULT NULL,
  `targetArea` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table agv_jst.traffcontrol: ~18 rows (approximately)
DELETE FROM `traffcontrol`;
INSERT INTO `traffcontrol` (`traffControlId`, `startNode`, `endNode`, `followFlag`, `targetArea`) VALUES
	(1, 4, 0, 0, 0),
	(1, 7, 0, 0, 0),
	(1, 5, 0, 0, 0),
	(1, 3, 4, 0, 0),
	(2, 27, 65, 1, 1),
	(2, 65, 0, 1, 1),
	(2, 66, 0, 1, 1),
	(2, 67, 0, 1, 1),
	(2, 68, 0, 1, 1),
	(2, 69, 0, 1, 1),
	(2, 70, 0, 1, 1),
	(2, 30, 0, 0, 1),
	(2, 33, 0, 0, 1),
	(2, 36, 0, 1, 1),
	(2, 31, 0, 0, 1),
	(2, 32, 0, 0, 1),
	(2, 34, 0, 0, 1),
	(2, 35, 0, 0, 1);

-- Dumping structure for table agv_jst._traffcontrol_old_20210623
CREATE TABLE IF NOT EXISTS `_traffcontrol_old_20210623` (
  `traffControlId` int(11) NOT NULL,
  `startNode` int(11) DEFAULT NULL,
  `endNode` int(11) DEFAULT NULL,
  `followFlag` int(11) DEFAULT NULL,
  PRIMARY KEY (`traffControlId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table agv_jst._traffcontrol_old_20210623: ~2 rows (approximately)
DELETE FROM `_traffcontrol_old_20210623`;
INSERT INTO `_traffcontrol_old_20210623` (`traffControlId`, `startNode`, `endNode`, `followFlag`) VALUES
	(1, 5, 0, 0),
	(2, 7, 0, 0);

-- Dumping structure for table agv_jst._traffcontrol_old_20210626
CREATE TABLE IF NOT EXISTS `_traffcontrol_old_20210626` (
  `traffControlId` int(11) NOT NULL,
  `startNode` int(11) DEFAULT NULL,
  `endNode` int(11) DEFAULT NULL,
  `followFlag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table agv_jst._traffcontrol_old_20210626: ~4 rows (approximately)
DELETE FROM `_traffcontrol_old_20210626`;
INSERT INTO `_traffcontrol_old_20210626` (`traffControlId`, `startNode`, `endNode`, `followFlag`) VALUES
	(1, 4, 0, 0),
	(1, 7, 0, 0),
	(1, 5, 0, 0),
	(1, 3, 4, 0);

-- Dumping structure for table agv_jst._traffcontrol_old_20210628
CREATE TABLE IF NOT EXISTS `_traffcontrol_old_20210628` (
  `traffControlId` int(11) NOT NULL,
  `startNode` int(11) DEFAULT NULL,
  `endNode` int(11) DEFAULT NULL,
  `followFlag` int(11) DEFAULT NULL,
  `targetArea` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table agv_jst._traffcontrol_old_20210628: ~4 rows (approximately)
DELETE FROM `_traffcontrol_old_20210628`;
INSERT INTO `_traffcontrol_old_20210628` (`traffControlId`, `startNode`, `endNode`, `followFlag`, `targetArea`) VALUES
	(1, 4, 0, 0, 0),
	(1, 7, 0, 0, 0),
	(1, 5, 0, 0, 0),
	(1, 3, 4, 0, 0);

-- Dumping structure for table agv_jst._traffcontrol_old_20210628_1
CREATE TABLE IF NOT EXISTS `_traffcontrol_old_20210628_1` (
  `traffControlId` int(11) NOT NULL,
  `startNode` int(11) DEFAULT NULL,
  `endNode` int(11) DEFAULT NULL,
  `followFlag` int(11) DEFAULT NULL,
  `targetArea` int(11) DEFAULT NULL,
  `targetAreaFlag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table agv_jst._traffcontrol_old_20210628_1: ~4 rows (approximately)
DELETE FROM `_traffcontrol_old_20210628_1`;
INSERT INTO `_traffcontrol_old_20210628_1` (`traffControlId`, `startNode`, `endNode`, `followFlag`, `targetArea`, `targetAreaFlag`) VALUES
	(1, 4, 0, 0, 0, 0),
	(1, 7, 0, 0, 0, 0),
	(1, 5, 0, 0, 0, 0),
	(1, 3, 4, 0, 0, 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
