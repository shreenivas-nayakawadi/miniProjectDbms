const express = require('express');
const router = express.Router();
const bcrypt = require('bcryptjs');
const jwt = require('jsonwebtoken');
const mysql = require('mysql2');

const db = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'root',
  database: 'student_feedback'
});

// Login route
router.post('/login', async (req, res) => {
  const { email, password } = req.body;

  try {
    const [rows] = await db.promise().query('SELECT * FROM users WHERE email = ?', [email]);
    
    if (rows.length === 0) {
      return res.status(401).json({ message: 'Invalid credentials' });
    }

    const user = rows[0];
    const isMatch = await bcrypt.compare(password, user.password);

    if (!isMatch) {
      return res.status(401).json({ message: 'Invalid credentials' });
    }

    const token = jwt.sign(
      { id: user.id, email: user.email, role: user.role },
      process.env.JWT_SECRET || 'your-secret-key',
      { expiresIn: '1h' }
    );

    res.json({ token, user: { id: user.id, email: user.email, role: user.role } });
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Server error' });
  }
});

// Register route
router.post('/register', async (req, res) => {
  const { email, password, role, USN } = req.body;

  try {
    // Check if user already exists
    const [existingUsers] = await db.promise().query('SELECT * FROM users WHERE email = ?', [email]);
    if (existingUsers.length > 0) {
      return res.status(400).json({ message: 'User already exists' });
    }

    // Validate USN for students
    if (role === 'student' && !USN) {
      return res.status(400).json({ message: 'USN is required for student registration' });
    }

    // Hash password
    const salt = await bcrypt.genSalt(10);
    const hashedPassword = await bcrypt.hash(password, salt);

    // Prepare the query based on role
    let query, values;
    if (role === 'student') {
      query = 'INSERT INTO users (email, password, role, USN) VALUES (?, ?, ?, ?)';
      values = [email, hashedPassword, role, USN];
    } else {
      query = 'INSERT INTO users (email, password, role) VALUES (?, ?, ?)';
      values = [email, hashedPassword, role];
    }

    // Insert new user
    const [result] = await db.promise().query(query, values);

    // Create token
    const token = jwt.sign(
      { id: result.insertId, email, role },
      process.env.JWT_SECRET || 'your-secret-key',
      { expiresIn: '1h' }
    );

    res.status(201).json({
      token,
      user: { 
        id: result.insertId, 
        email, 
        role,
        USN: role === 'student' ? USN : null 
      }
    });
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Server error' });
  }
});

module.exports = router; 