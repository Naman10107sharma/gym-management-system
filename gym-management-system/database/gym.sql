CREATE DATABASE IF NOT EXISTS gym_db;
USE gym_db;

-- Admin Table
CREATE TABLE admin (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(100)
);

INSERT INTO admin (username,password)
VALUES ('fitness','fitness123');

-- Members Table
CREATE TABLE members (
member_id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
age INT,
gender VARCHAR(10),
phone VARCHAR(20),
address TEXT,
plan VARCHAR(50),
join_date DATE,
expiry_date DATE
);

-- Trainers Table
CREATE TABLE trainers (
trainer_id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
specialization VARCHAR(100),
phone VARCHAR(20),
experience VARCHAR(50)
);

-- Plans Table
CREATE TABLE plans (
plan_id INT AUTO_INCREMENT PRIMARY KEY,
plan_name VARCHAR(50),
price INT,
duration VARCHAR(50)
);

-- Payments Table
CREATE TABLE payments (
payment_id INT AUTO_INCREMENT PRIMARY KEY,
member_id INT,
amount INT,
payment_date DATE
);