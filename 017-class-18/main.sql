-- Delete database if it already exists
-- because we are creating the database
-- on every run
DROP DATABASE IF EXISTS school;
CREATE DATABASE school;

USE school;

CREATE TABLE student (
    roll INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT,
    email VARCHAR(50)
);

INSERT INTO student (roll, name, age, email) VALUES
    (1, "John Doe", 20, "user1@example.com"),
    (2, "Jane Doe", 21, "user2@example.com");

SELECT * FROM student;
