import React from 'react';
import {
  Container,
  Paper,
  Typography,
  Box,
  Card,
  CardContent,
  Button,
} from '@mui/material';

function AboutUs() {
  return (
    <Container maxWidth="md" sx={{ mt: 4, mb: 4 }}>
      <Paper elevation={3} sx={{ p: 4 }}>
        <Typography variant="h4" component="h1" gutterBottom align="center">
          About Us
        </Typography>

        <Box sx={{ display: 'flex', justifyContent: 'space-around', flexWrap: 'wrap', gap: 4, mt: 4 }}>
          <Card sx={{ maxWidth: 345 }}>
            <CardContent>
              <Typography variant="h5" component="div" gutterBottom>
                Shreenivas Nayakawadi
              </Typography>
              <Typography variant="body1" color="text.secondary">
                DAYANANDA SAGAR COLLEGE OF ENGINEERING<br />
                INFORMATION SCIENCE AND ENGINEERING<br />
                1DS22IS143<br />
                C - Sec<br />
                DBMS-Batch-C1
              </Typography>
              <Button
                variant="contained"
                color="primary"
                href="mailto:1ds22is143.dsce.edu.in"
                sx={{ mt: 2 }}
              >
                Contact
              </Button>
            </CardContent>
          </Card>

          <Card sx={{ maxWidth: 345 }}>
            <CardContent>
              <Typography variant="h5" component="div" gutterBottom>
                Prashant S N
              </Typography>
              <Typography variant="body1" color="text.secondary">
                DAYANANDA SAGAR COLLEGE OF ENGINEERING<br />
                INFORMATION SCIENCE AND ENGINEERING<br />
                1DS23IS415<br />
                C - Sec<br />
                DBMS-Batch-C1
              </Typography>
              <Button
                variant="contained"
                color="primary"
                href="mailto:1ds23is415.dsce.edu.in"
                sx={{ mt: 2 }}
              >
                Contact
              </Button>
            </CardContent>
          </Card>
        </Box>
      </Paper>
    </Container>
  );
}

export default AboutUs; 