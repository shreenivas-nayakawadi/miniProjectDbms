import React, { useState } from 'react';
import {
  Container,
  Paper,
  Typography,
  TextField,
  Button,
  Box,
  FormControl,
  InputLabel,
  Select,
  MenuItem,
  RadioGroup,
  FormControlLabel,
  Radio,
  Alert,
} from '@mui/material';
import axios from 'axios';

function FeedbackForm() {
  const [formData, setFormData] = useState({
    USN: '',
    year: new Date().getFullYear(),
    sem: '1',
    date: new Date().toISOString().split('T')[0],
    branch: 'CSE',
    section: 'A',
    subject: 'DBMS',
    ques1: '',
    ques2i: '',
    ques2ii: '',
    ques2iii: '',
    ques2iv: '',
    ques2v: '',
    ques3: '',
    ques4: '',
    remarks: '',
  });

  const [error, setError] = useState('');
  const [success, setSuccess] = useState('');

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData((prev) => ({
      ...prev,
      [name]: value,
    }));
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      await axios.post('http://localhost:5000/api/feedback', formData);
      setSuccess('Feedback submitted successfully!');
      setError('');
      // Reset form
      setFormData({
        USN: '',
        year: new Date().getFullYear(),
        sem: '1',
        date: new Date().toISOString().split('T')[0],
        branch: 'CSE',
        section: 'A',
        subject: 'DBMS',
        ques1: '',
        ques2i: '',
        ques2ii: '',
        ques2iii: '',
        ques2iv: '',
        ques2v: '',
        ques3: '',
        ques4: '',
        remarks: '',
      });
    } catch (error) {
      setError(error.response?.data?.message || 'Failed to submit feedback');
      setSuccess('');
    }
  };

  const renderRatingQuestion = (name, label) => (
    <FormControl component="fieldset" margin="normal">
      <Typography variant="subtitle1">{label}</Typography>
      <RadioGroup
        row
        name={name}
        value={formData[name]}
        onChange={handleChange}
      >
        {[5, 4, 3, 2, 1].map((value) => (
          <FormControlLabel
            key={value}
            value={value.toString()}
            control={<Radio />}
            label={`${value} - ${
              value === 5
                ? 'Excellent'
                : value === 4
                ? 'Very Good'
                : value === 3
                ? 'Good'
                : value === 2
                ? 'Average'
                : 'Below Average'
            }`}
          />
        ))}
      </RadioGroup>
    </FormControl>
  );

  return (
    <Container maxWidth="md" sx={{ mt: 4, mb: 4 }}>
      <Paper elevation={3} sx={{ p: 4 }}>
        <Typography variant="h4" component="h1" gutterBottom align="center">
          Student Feedback Form
        </Typography>

        {error && (
          <Alert severity="error" sx={{ mb: 2 }}>
            {error}
          </Alert>
        )}
        {success && (
          <Alert severity="success" sx={{ mb: 2 }}>
            {success}
          </Alert>
        )}

        <Box component="form" onSubmit={handleSubmit}>
          <Box sx={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: 2 }}>
            <TextField
              label="USN (last 3 digits)"
              name="USN"
              value={formData.USN}
              onChange={handleChange}
              required
            />
            <TextField
              label="Year"
              name="year"
              type="number"
              value={formData.year}
              onChange={handleChange}
              required
            />
            <FormControl>
              <InputLabel>Semester</InputLabel>
              <Select
                name="sem"
                value={formData.sem}
                onChange={handleChange}
                label="Semester"
                required
              >
                {[1, 2, 3, 4, 5, 6, 7, 8].map((sem) => (
                  <MenuItem key={sem} value={sem}>
                    Sem {sem}
                  </MenuItem>
                ))}
              </Select>
            </FormControl>
            <TextField
              label="Date"
              name="date"
              type="date"
              value={formData.date}
              onChange={handleChange}
              required
              InputLabelProps={{ shrink: true }}
            />
            <FormControl>
              <InputLabel>Branch</InputLabel>
              <Select
                name="branch"
                value={formData.branch}
                onChange={handleChange}
                label="Branch"
                required
              >
                <MenuItem value="CSE">CSE</MenuItem>
                <MenuItem value="ISE">ISE</MenuItem>
              </Select>
            </FormControl>
            <FormControl>
              <InputLabel>Section</InputLabel>
              <Select
                name="section"
                value={formData.section}
                onChange={handleChange}
                label="Section"
                required
              >
                <MenuItem value="A">Sec A</MenuItem>
                <MenuItem value="B">Sec B</MenuItem>
                <MenuItem value="C">Sec C</MenuItem>
              </Select>
            </FormControl>
            <FormControl>
              <InputLabel>Subject</InputLabel>
              <Select
                name="subject"
                value={formData.subject}
                onChange={handleChange}
                label="Subject"
                required
              >
                <MenuItem value="DBMS">Database Management System</MenuItem>
                <MenuItem value="CO/CA">Computer Organization / Computer Architecture</MenuItem>
                <MenuItem value="DAA">Design And Analysis of Algorithms</MenuItem>
                <MenuItem value="JAVA">Advanced Java</MenuItem>
              </Select>
            </FormControl>
          </Box>

          <Typography variant="h6" sx={{ mt: 4, mb: 2 }}>
            1. Has the Teacher covered entire Syllabus as prescribed by University?
          </Typography>
          {renderRatingQuestion('ques1', '')}

          <Typography variant="h6" sx={{ mt: 4, mb: 2 }}>
            2. Effectiveness of Teacher in terms of:
          </Typography>
          {renderRatingQuestion('ques2i', 'i. Technical Content')}
          {renderRatingQuestion('ques2ii', 'ii. Communication Skills')}
          {renderRatingQuestion('ques2iii', 'iii. Availability beyond normal classes and co-operation to solve individual problems')}
          {renderRatingQuestion('ques2iv', 'iv. Pace on which contents were covered')}
          {renderRatingQuestion('ques2v', 'v. Overall effectiveness')}

          <Typography variant="h6" sx={{ mt: 4, mb: 2 }}>
            3. How do you rate the contents of the curricular?
          </Typography>
          {renderRatingQuestion('ques3', '')}

          <Typography variant="h6" sx={{ mt: 4, mb: 2 }}>
            4. How do you rate lab experiments, if applicable?
          </Typography>
          {renderRatingQuestion('ques4', '')}

          <Typography variant="h6" sx={{ mt: 4, mb: 2 }}>
            5. Any Remarks
          </Typography>
          <TextField
            fullWidth
            multiline
            rows={4}
            name="remarks"
            value={formData.remarks}
            onChange={handleChange}
            margin="normal"
          />

          <Button
            type="submit"
            variant="contained"
            color="primary"
            fullWidth
            sx={{ mt: 4 }}
          >
            Submit Feedback
          </Button>
        </Box>
      </Paper>
    </Container>
  );
}

export default FeedbackForm; 