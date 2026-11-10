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
    (2, "Jane Doe", 19, "user2@example.com"),
    (3, "Jack Doe", 17, "user3@example.com"),
    (4, "Jerry Doe", 25, "user4@example.com"),
    (5, "Janice Doe", 24, "user5@example.com");

SELECT * FROM student;

SELECT * FROM student WHERE roll = 3;
