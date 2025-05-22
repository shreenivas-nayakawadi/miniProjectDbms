const express = require('express');
const router = express.Router();
const mysql = require('mysql2');

const db = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'root',
  database: 'student_feedback'
});

// Get all users (admin only)
router.get('/users', async (req, res) => {
  try {
    const [rows] = await db.promise().query('SELECT id, email, role, created_at FROM users');
    res.json(rows);
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Server error' });
  }
});

// Delete user (admin only)
router.delete('/users/:id', async (req, res) => {
  try {
    await db.promise().query('DELETE FROM users WHERE id = ?', [req.params.id]);
    res.json({ message: 'User deleted successfully' });
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Server error' });
  }
});

// Get feedback statistics
router.get('/statistics', async (req, res) => {
  try {
    const [rows] = await db.promise().query(`
      SELECT 
        subject,
        AVG(ques1) as avg_ques1,
        AVG(ques2i) as avg_ques2i,
        AVG(ques2ii) as avg_ques2ii,
        AVG(ques2iii) as avg_ques2iii,
        AVG(ques2iv) as avg_ques2iv,
        AVG(ques2v) as avg_ques2v,
        AVG(ques3) as avg_ques3,
        AVG(ques4) as avg_ques4
      FROM feedback
      GROUP BY subject
    `);
    res.json(rows);
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Server error' });
  }
});

module.exports = router; 