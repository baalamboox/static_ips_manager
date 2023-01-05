CREATE DATABASE IF NOT EXISTS static_ips_manager;
USE static_ips_manager;
CREATE TABLE IF NOT EXISTS static_ips_table(
    `static_ip_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `static_ip_hostname` VARCHAR(32) NOT NULL,
    `static_ip_address` VARCHAR(15) NOT NULL,
    `static_ip_insert` DATETIME DEFAULT current_timestamp()
) ENGINE = InnoDB;