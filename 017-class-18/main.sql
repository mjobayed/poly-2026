-- Delete database if it already exists
-- because we are creating the database
-- on every run
DROP DATABASE IF EXISTS school;
CREATE DATABASE school;

-- Select the database
USE school;

-- Create a table
CREATE TABLE student (
    roll INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT,
    email VARCHAR(50)
);

-- Insert some data
INSERT INTO student (roll, name, age, email) VALUES
    (1, "John Doe", 20, "user1@example.com"),
    (2, "Jane Doe", 19, "user2@example.com"),
    (3, "Jack Doe", 17, "user3@example.com"),
    (4, "Jerry Doe", 25, "user4@example.com"),
    (5, "Janice Doe", 24, "user5@example.com");

-- Show basic table first
SELECT * FROM student;

-- Basically search operation
SELECT * FROM student WHERE roll = 3;

-- Select roll above 2 and age above 20
SELECT * FROM student WHERE roll > 2 AND age > 20;

-- Update the data and show it
UPDATE student SET age = 26 WHERE roll = 5;
SELECT * FROM student;

-- Select specific columns
SELECT name, age FROM student;

-- Delete a row
DELETE FROM student WHERE roll = 5;
SELECT * FROM student;
