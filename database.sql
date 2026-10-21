-- ==============================================================
-- Database Schema for School Management & ICT Portal
-- Database: `school_comments`
-- ==============================================================

CREATE DATABASE IF NOT EXISTS `school_comments` 
DEFAULT CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE `school_comments`;

-- --------------------------------------------------------
-- Table structure for table `school_comments`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `school_comments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `parent_id` INT(11) NOT NULL DEFAULT 0,
  `name` VARCHAR(255) NOT NULL,
  `designation` VARCHAR(255) DEFAULT NULL,
  `phone` VARCHAR(50) DEFAULT NULL,
  `comment` TEXT NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idx_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
