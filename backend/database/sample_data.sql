-- Insert sample users
INSERT INTO users (email, password, role, USN) VALUES
('admin@dsce.edu.in', '$2a$10$N9qo8uLOickgx2ZMRZoMyeIjZAgcfl7p92ldGxad68LJZdL17lhWy', 'admin', NULL),
('student1@dsce.edu.in', '$2a$10$N9qo8uLOickgx2ZMRZoMyeIjZAgcfl7p92ldGxad68LJZdL17lhWy', 'student', '143'),
('student2@dsce.edu.in', '$2a$10$N9qo8uLOickgx2ZMRZoMyeIjZAgcfl7p92ldGxad68LJZdL17lhWy', 'student', '415'),
('student3@dsce.edu.in', '$2a$10$N9qo8uLOickgx2ZMRZoMyeIjZAgcfl7p92ldGxad68LJZdL17lhWy', 'student', '123');

-- Insert sample feedback for DBMS
INSERT INTO feedback (USN, year, sem, date, branch, section, subject, ques1, ques2i, ques2ii, ques2iii, ques2iv, ques2v, ques3, ques4, remarks) VALUES
('143', 2024, 6, '2024-03-15', 'ISE', 'C', 'DBMS', 5, 4, 5, 4, 5, 4, 5, 4, 'Great teaching methodology and practical examples'),
('415', 2024, 6, '2024-03-15', 'ISE', 'C', 'DBMS', 4, 5, 4, 5, 4, 5, 4, 5, 'Very helpful in understanding database concepts'),
('123', 2024, 6, '2024-03-15', 'ISE', 'C', 'DBMS', 5, 5, 4, 4, 5, 5, 4, 4, 'Good coverage of SQL and database design');

-- Insert sample feedback for CO/CA
INSERT INTO feedback (USN, year, sem, date, branch, section, subject, ques1, ques2i, ques2ii, ques2iii, ques2iv, ques2v, ques3, ques4, remarks) VALUES
('143', 2024, 6, '2024-03-15', 'ISE', 'C', 'CO/CA', 4, 4, 5, 5, 4, 4, 5, 5, 'Clear explanation of computer architecture concepts'),
('415', 2024, 6, '2024-03-15', 'ISE', 'C', 'CO/CA', 5, 5, 4, 4, 5, 5, 4, 4, 'Good practical examples in assembly language'),
('123', 2024, 6, '2024-03-15', 'ISE', 'C', 'CO/CA', 4, 5, 4, 5, 4, 5, 4, 5, 'Helpful in understanding processor architecture');

-- Insert sample feedback for DAA
INSERT INTO feedback (USN, year, sem, date, branch, section, subject, ques1, ques2i, ques2ii, ques2iii, ques2iv, ques2v, ques3, ques4, remarks) VALUES
('143', 2024, 6, '2024-03-15', 'ISE', 'C', 'DAA', 5, 4, 5, 4, 5, 4, 5, 4, 'Excellent problem-solving approach'),
('415', 2024, 6, '2024-03-15', 'ISE', 'C', 'DAA', 4, 5, 4, 5, 4, 5, 4, 5, 'Good coverage of algorithms and complexity analysis'),
('123', 2024, 6, '2024-03-15', 'ISE', 'C', 'DAA', 5, 5, 4, 4, 5, 5, 4, 4, 'Clear explanation of dynamic programming concepts');

-- Insert sample feedback for JAVA
INSERT INTO feedback (USN, year, sem, date, branch, section, subject, ques1, ques2i, ques2ii, ques2iii, ques2iv, ques2v, ques3, ques4, remarks) VALUES
('143', 2024, 6, '2024-03-15', 'ISE', 'C', 'JAVA', 4, 4, 5, 5, 4, 4, 5, 5, 'Practical coding sessions are very helpful'),
('415', 2024, 6, '2024-03-15', 'ISE', 'C', 'JAVA', 5, 5, 4, 4, 5, 5, 4, 4, 'Good hands-on experience with Java frameworks'),
('123', 2024, 6, '2024-03-15', 'ISE', 'C', 'JAVA', 4, 5, 4, 5, 4, 5, 4, 5, 'Clear explanation of OOP concepts in Java'); 