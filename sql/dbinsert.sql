-- 
-- Start Created Database Here`
-- 

-- 
-- Database Name `Signup_Form`
-- 
CREATE DATABASE `Signup_Form`;

-- 
-- Start Created Table of `Signup_Form` IN INCLUDE TABLE `Signup_Sign`
-- 

CREATE TABLE `Signup_Form`.`Signup_Sign`(
    `id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Name` varchar(50) NOT NULL,
    `Email` varchar(100) NOT NULL,
    `Password` varchar(100) NOT NULL,
    `City` varchar(50) NOT NULL,
    `Sex` varchar(20) NOT NULL,
    `Date_Birth` varchar(50) NOT NULL,
    `Upload_ID` varchar(100) NOT NULL,
    `Verification_Code` varchar(100) NOT NULL
)
-- 
-- DATABASE AND CREATED SUCCESSFULLY
-- 

-- 
-- IMPORTANT TABLE WIDTH `id`
-- 