DROP SCHEMA IF EXISTS website_input;
CREATE SCHEMA website_input;
USE website_input;

CREATE TABLE input (
	inputID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(20) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    company VARCHAR(30),
    email VARCHAR(50) NOT NULL,
    summary VARCHAR (255) NOT NULL
);
