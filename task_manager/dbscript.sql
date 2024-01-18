-- Create the database
CREATE DATABASE IF NOT EXISTS tasksdb;
USE tasksdb;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create the tasks table
CREATE TABLE IF NOT EXISTS tasks (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status VARCHAR(50) NOT NULL,
    user_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Insert dummy data into the users table
INSERT INTO users (name, email) VALUES
    ('John Doe', 'john@example.com'),
    ('Jane Doe', 'jane@example.com'),
    ('Bob Smith', 'bob@example.com');

-- Insert dummy data into the tasks table
INSERT INTO tasks (title, description, status, user_id) VALUES
    ('Task 1', 'Description for Task 1', 'In Progress', 1),
    ('Task 2', 'Description for Task 2', 'Completed', 2),
    ('Task 3', 'Description for Task 3', 'Pending', 3);
