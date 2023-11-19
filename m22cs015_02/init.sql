-- Create or use the database
CREATE DATABASE IF NOT EXISTS mydatabase;
USE mydatabase;

-- Drop the existing table if it exists (optional)
DROP TABLE IF EXISTS mytable;

-- Create the new table with additional fields
CREATE TABLE IF NOT EXISTS mytable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    class VARCHAR(50) NOT NULL,
    roll_no INT NOT NULL,
    marks INT NOT NULL
);

-- Insert an initial record with values for the new fields
INSERT INTO mytable (name, class, roll_no, marks) VALUES ('John Doe', '10th', 101, 95);

