DROP DATABASE IF EXISTS cv;
CREATE DATABASE cv;

USE cv;

CREATE TABLE cv_user (
    u_id INT AUTO_INCREMENT PRIMARY KEY,
    u_name VARCHAR(255) NULL,
    u_phone VARCHAR(50) NULL,
    u_email VARCHAR(100) NULL,
    u_username VARCHAR(100) NULL,
    u_password VARCHAR(100) NULL,
    u_status VARCHAR(50) NULL,
    u_slug VARCHAR(50) NULL
);
