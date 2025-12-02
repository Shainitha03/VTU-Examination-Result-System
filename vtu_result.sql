
CREATE DATABASE vtu_results;
USE vtu_results;

CREATE TABLE results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usn VARCHAR(20),
    name VARCHAR(100),
    sem VARCHAR(10),
    total INT,
    result VARCHAR(20)
);

INSERT INTO results (usn, name, sem, total, result) VALUES
('1RV22CS001', 'Shrija', '5', 480, 'PASS'),
('1RV22CS002', 'Anita', '5', 410, 'PASS'),
('1RV22CS003', 'Raghav', '5', 320, 'FAIL');
