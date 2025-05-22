CREATE DATABASE IF NOT EXISTS student_feedback;
USE student_feedback;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'student') NOT NULL,
    USN VARCHAR(10) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    USN VARCHAR(10) NOT NULL,
    year INT NOT NULL,
    sem INT NOT NULL,
    date DATE NOT NULL,
    branch VARCHAR(10) NOT NULL,
    section VARCHAR(1) NOT NULL,
    subject VARCHAR(50) NOT NULL,
    ques1 INT NOT NULL,
    ques2i INT NOT NULL,
    ques2ii INT NOT NULL,
    ques2iii INT NOT NULL,
    ques2iv INT NOT NULL,
    ques2v INT NOT NULL,
    ques3 INT NOT NULL,
    ques4 INT NOT NULL,
    remarks TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); 