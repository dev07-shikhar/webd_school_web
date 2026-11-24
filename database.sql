CREATE DATABASE school_db;

USE school_db;

CREATE TABLE admissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    dob DATE NOT NULL,
    class VARCHAR(10) NOT NULL,
    address TEXT NOT NULL
);

-- To check submitted admission records:
SELECT * FROM admissions;