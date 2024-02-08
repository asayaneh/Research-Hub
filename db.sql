CREATE DATABASE IF NOT EXISTS ACLC;
USE ACLC;

CREATE TABLE accounts(
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      full_name VARCHAR(255) NOT NULL,
                      email VARCHAR(255) NOT NULL,
                      password VARCHAR(255) NOT NULL
);

CREATE TABLE messages(
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         name VARCHAR(255) NOT NULL,
                         email VARCHAR(255) NOT NULL,
                         message VARCHAR(1000) NOT NULL
);