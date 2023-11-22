-- Table for Students
CREATE TABLE tbl_students (
    id INT PRIMARY KEY,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    nationality_code VARCHAR(10),
    email VARCHAR(255),
    username VARCHAR(50),
    password VARCHAR(50)
);

-- Table for Lessons
CREATE TABLE tbl_lessons (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    score INT
);

-- Table for Reminders
CREATE TABLE tbl_reminders (
    id INT PRIMARY KEY,
    remind_at DATETIME
);
