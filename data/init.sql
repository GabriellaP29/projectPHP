
CREATE DATABASE store;
       use store;
           CREATE TABLE users (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            username VARCHAR(50) NOT NULL,
            location VARCHAR(50)
           );

           CREATE TABLE products (
               id INT (11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
               productName VARCHAR(30) NOT NULL,
               productCategory VARCHAR(30) NOT NULL
           );