import React, { useState, useEffect } from 'react';
import {
  Container,
  Paper,
  Typography,
  Box,
  Tabs,
  Tab,
  Table,
  TableBody,
  TableCell,
  TableContainer,
  TableHead,
  TableRow,
  FormControl,
  InputLabel,
  Select,
  MenuItem,
  TextField,
  Button,
  useTheme,
} from '@mui/material';
import axios from 'axios';

function TabPanel({ children, value, index }) {
  return (
    <div hidden={value !== index}>
      {value === index && <Box sx={{ p: 3 }}>{children}</Box>}
    </div>
  );
}

function AdminDashboard() {
  const theme = useTheme();
  const [tabValue, setTabValue] = useState(0);
  const [allFeedback, setAllFeedback] = useState([]);
  const [filteredFeedback, setFilteredFeedback] = useState([]);
  const [filter, setFilter] = useState({
    branch: 'ISE',
    sem: '6',
    section: 'C',
    subject: 'DBMS',
    usn: '',
  });

  useEffect(() => {
    fetchAllFeedback();
  }, []);

  useEffect(() => {
    applyFilters();
  }, [tabValue, filter, allFeedback]);

  const fetchAllFeedback = async () => {
    try {
      const response = await axios.get('http://localhost:5000/api/feedback');
      setAllFeedback(response.data);
      setFilteredFeedback(response.data);
    } catch (error) {
      console.error('Error fetching feedback:', error);
    }
  };

  const applyFilters = () => {
    let filtered = [...allFeedback];

    if (tabValue === 1) { // By Section
      filtered = filtered.filter(
        (item) =>
          item.branch === filter.branch &&
          item.sem === parseInt(filter.sem) &&
          item.section === filter.section
      );
    } else if (tabValue === 2) { // By Subject
      filtered = filtered.filter(
        (item) =>
          item.branch === filter.branch &&
          item.sem === parseInt(filter.sem) &&
          item.subject === filter.subject
      );
    } else if (tabValue === 3 && filter.usn) { // By USN
      filtered = filtered.filter((item) => item.USN === filter.usn);
    }

    setFilteredFeedback(filtered);
  };

  const handleTabChange = (event, newValue) => {
    setTabValue(newValue);
  };

  const handleFilterChange = (e) => {
    const { name, value } = e.target;
    setFilter((prev) => ({
      ...prev,
      [name]: value,
    }));
  };

  const renderTable = () => (
    <TableContainer 
      sx={{ 
        maxHeight: 'calc(100vh - 300px)',
        overflow: 'auto',
        '&::-webkit-scrollbar': {
          width: '8px',
          height: '8px',
        },
        '&::-webkit-scrollbar-track': {
          background: '#f1f1f1',
          borderRadius: '4px',
        },
        '&::-webkit-scrollbar-thumb': {
          background: '#888',
          borderRadius: '4px',
          '&:hover': {
            background: '#555',
          },
        },
      }}
    >
      <Table 
        stickyHeader
        sx={{
          minWidth: 650,
          '& .MuiTableCell-root': {
            border: '1px solid rgba(224, 224, 224, 1)',
            padding: '8px 16px',
          },
        }}
      >
        <TableHead>
          <TableRow>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              USN
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Year
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Sem
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Date
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Branch
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Section
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Subject
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Q1
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Q2i
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Q2ii
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Q2iii
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Q2iv
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Q2v
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Q3
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                whiteSpace: 'nowrap',
              }}
            >
              Q4
            </TableCell>
            <TableCell 
              sx={{ 
                backgroundColor: theme.palette.primary.main,
                color: 'white',
                fontWeight: 'bold',
                minWidth: '200px',
              }}
            >
              Remarks
            </TableCell>
          </TableRow>
        </TableHead>
        <TableBody>
          {filteredFeedback.map((row, index) => (
            <TableRow 
              key={row.id}
              sx={{ 
                '&:nth-of-type(odd)': { 
                  backgroundColor: 'rgba(0, 0, 0, 0.04)',
                },
                '&:hover': {
                  backgroundColor: 'rgba(0, 0, 0, 0.08)',
                },
              }}
            >
              <TableCell>{row.USN}</TableCell>
              <TableCell>{row.year}</TableCell>
              <TableCell>{row.sem}</TableCell>
              <TableCell>{row.date}</TableCell>
              <TableCell>{row.branch}</TableCell>
              <TableCell>{row.section}</TableCell>
              <TableCell>{row.subject}</TableCell>
              <TableCell>{row.ques1}</TableCell>
              <TableCell>{row.ques2i}</TableCell>
              <TableCell>{row.ques2ii}</TableCell>
              <TableCell>{row.ques2iii}</TableCell>
              <TableCell>{row.ques2iv}</TableCell>
              <TableCell>{row.ques2v}</TableCell>
              <TableCell>{row.ques3}</TableCell>
              <TableCell>{row.ques4}</TableCell>
              <TableCell sx={{ minWidth: '200px' }}>{row.remarks}</TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </TableContainer>
  );

  return (
    <Container maxWidth="xl" sx={{ mt: 4, mb: 4 }}>
      <Paper 
        elevation={3} 
        sx={{ 
          p: 2,
          height: 'calc(100vh - 100px)',
          display: 'flex',
          flexDirection: 'column',
        }}
      >
        <Typography 
          variant="h4" 
          component="h1" 
          gutterBottom 
          align="center"
          sx={{ 
            color: theme.palette.primary.main,
            fontWeight: 'bold',
            mb: 3,
          }}
        >
          Admin Dashboard
        </Typography>

        <Box sx={{ borderBottom: 1, borderColor: 'divider' }}>
          <Tabs 
            value={tabValue} 
            onChange={handleTabChange}
            sx={{
              '& .MuiTab-root': {
                fontWeight: 'bold',
                textTransform: 'none',
                minWidth: 120,
              },
              '& .Mui-selected': {
                color: theme.palette.primary.main,
              },
            }}
          >
            <Tab label="All Feedback" />
            <Tab label="By Section" />
            <Tab label="By Subject" />
            <Tab label="By USN" />
          </Tabs>
        </Box>

        <Box sx={{ flexGrow: 1, overflow: 'hidden' }}>
          <TabPanel value={tabValue} index={0}>
            {renderTable()}
          </TabPanel>

          <TabPanel value={tabValue} index={1}>
            <Box sx={{ display: 'flex', gap: 2, mb: 3 }}>
              <FormControl>
                <InputLabel>Branch</InputLabel>
                <Select
                  name="branch"
                  value={filter.branch}
                  onChange={handleFilterChange}
                  label="Branch"
                  sx={{ minWidth: 120 }}
                >
                  <MenuItem value="CSE">CSE</MenuItem>
                  <MenuItem value="ISE">ISE</MenuItem>
                </Select>
              </FormControl>
              <FormControl>
                <InputLabel>Semester</InputLabel>
                <Select
                  name="sem"
                  value={filter.sem}
                  onChange={handleFilterChange}
                  label="Semester"
                  sx={{ minWidth: 120 }}
                >
                  {[1, 2, 3, 4, 5, 6, 7, 8].map((sem) => (
                    <MenuItem key={sem} value={sem}>
                      Sem {sem}
                    </MenuItem>
                  ))}
                </Select>
              </FormControl>
              <FormControl>
                <InputLabel>Section</InputLabel>
                <Select
                  name="section"
                  value={filter.section}
                  onChange={handleFilterChange}
                  label="Section"
                  sx={{ minWidth: 120 }}
                >
                  <MenuItem value="A">Sec A</MenuItem>
                  <MenuItem value="B">Sec B</MenuItem>
                  <MenuItem value="C">Sec C</MenuItem>
                </Select>
              </FormControl>
            </Box>
            {renderTable()}
          </TabPanel>

          <TabPanel value={tabValue} index={2}>
            <Box sx={{ display: 'flex', gap: 2, mb: 3 }}>
              <FormControl>
                <InputLabel>Branch</InputLabel>
                <Select
                  name="branch"
                  value={filter.branch}
                  onChange={handleFilterChange}
                  label="Branch"
                  sx={{ minWidth: 120 }}
                >
                  <MenuItem value="CSE">CSE</MenuItem>
                  <MenuItem value="ISE">ISE</MenuItem>
                </Select>
              </FormControl>
              <FormControl>
                <InputLabel>Semester</InputLabel>
                <Select
                  name="sem"
                  value={filter.sem}
                  onChange={handleFilterChange}
                  label="Semester"
                  sx={{ minWidth: 120 }}
                >
                  {[1, 2, 3, 4, 5, 6, 7, 8].map((sem) => (
                    <MenuItem key={sem} value={sem}>
                      Sem {sem}
                    </MenuItem>
                  ))}
                </Select>
              </FormControl>
              <FormControl>
                <InputLabel>Subject</InputLabel>
                <Select
                  name="subject"
                  value={filter.subject}
                  onChange={handleFilterChange}
                  label="Subject"
                  sx={{ minWidth: 200 }}
                >
                  <MenuItem value="DBMS">Database Management System</MenuItem>
                  <MenuItem value="CO/CA">Computer Organization / Computer Architecture</MenuItem>
                  <MenuItem value="DAA">Design And Analysis of Algorithms</MenuItem>
                  <MenuItem value="JAVA">Advanced Java</MenuItem>
                </Select>
              </FormControl>
            </Box>
            {renderTable()}
          </TabPanel>

          <TabPanel value={tabValue} index={3}>
            <Box sx={{ display: 'flex', gap: 2, mb: 3 }}>
              <TextField
                label="USN (last 3 digits)"
                name="usn"
                value={filter.usn}
                onChange={handleFilterChange}
                sx={{ minWidth: 200 }}
              />
            </Box>
            {renderTable()}
          </TabPanel>
        </Box>
      </Paper>
    </Container>
  );
}

export default AdminDashboard; 