const express = require('express');
const router = express.Router();
const mysql = require('mysql2');

const db = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'root',
  database: 'student_feedback'
});

// Submit feedback
router.post('/', async (req, res) => {
  const {
    USN,
    year,
    sem,
    date,
    branch,
    section,
    subject,
    ques1,
    ques2i,
    ques2ii,
    ques2iii,
    ques2iv,
    ques2v,
    ques3,
    ques4,
    remarks
  } = req.body;

  try {
    const [result] = await db.promise().query(
      `INSERT INTO feedback (
        USN, year, sem, date, branch, section, subject,
        ques1, ques2i, ques2ii, ques2iii, ques2iv, ques2v,
        ques3, ques4, remarks
      ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)`,
      [
        USN, year, sem, date, branch, section, subject,
        ques1, ques2i, ques2ii, ques2iii, ques2iv, ques2v,
        ques3, ques4, remarks
      ]
    );

    res.status(201).json({ message: 'Feedback submitted successfully' });
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Server error' });
  }
});

// Get all feedback (admin only)
router.get('/', async (req, res) => {
  try {
    const [rows] = await db.promise().query('SELECT * FROM feedback');
    res.json(rows);
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Server error' });
  }
});

module.exports = router; 