-- =====================================================
-- schema.sql
-- Mobile Repair — database schema
-- =====================================================

CREATE DATABASE IF NOT EXISTS mobile_repair_db
    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE mobile_repair_db;

CREATE TABLE repair_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    device_model VARCHAR(150) NOT NULL,
    issue_description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
