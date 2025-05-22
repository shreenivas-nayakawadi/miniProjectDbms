import React from 'react';
import { useNavigate } from 'react-router-dom';
import {
  Container,
  Typography,
  Box,
  Button,
  Grid,
  Card,
  CardContent,
  CardActions,
} from '@mui/material';
import { useAuth } from '../contexts/AuthContext';

function Home() {
  const { user } = useAuth();
  const navigate = useNavigate();

  const features = [
    {
      title: 'Submit Feedback',
      description: 'Share your valuable feedback about courses and instructors to help improve the learning experience.',
      action: 'Submit Now',
      path: '/feedback',
    },
    {
      title: 'View Statistics',
      description: 'Access comprehensive feedback statistics and analytics to track improvement areas.',
      action: 'View Dashboard',
      path: '/admin',
    },
    {
      title: 'About Us',
      description: 'Learn more about the team behind the Student Feedback System.',
      action: 'Learn More',
      path: '/about',
    },
  ];

  return (
    <Container maxWidth="lg" sx={{ mt: 4, mb: 4 }}>
      <Box sx={{ textAlign: 'center', mb: 6 }}>
        <Typography variant="h2" component="h1" gutterBottom>
          Welcome to Student Feedback System
        </Typography>
        <Typography variant="h5" color="text.secondary" paragraph>
          A platform designed to enhance the learning experience through valuable student feedback
        </Typography>
        {!user && (
          <Button
            variant="contained"
            color="primary"
            size="large"
            onClick={() => navigate('/login')}
            sx={{ mt: 2 }}
          >
            Get Started
          </Button>
        )}
      </Box>

      <Grid container spacing={4}>
        {features.map((feature, index) => (
          <Grid item xs={12} md={4} key={index}>
            <Card sx={{ height: '100%', display: 'flex', flexDirection: 'column' }}>
              <CardContent sx={{ flexGrow: 1 }}>
                <Typography gutterBottom variant="h5" component="h2">
                  {feature.title}
                </Typography>
                <Typography>
                  {feature.description}
                </Typography>
              </CardContent>
              <CardActions>
                <Button
                  size="small"
                  color="primary"
                  onClick={() => navigate(feature.path)}
                >
                  {feature.action}
                </Button>
              </CardActions>
            </Card>
          </Grid>
        ))}
      </Grid>

      <Box sx={{ mt: 6, textAlign: 'center' }}>
        <Typography variant="h4" gutterBottom>
          Why Student Feedback Matters
        </Typography>
        <Typography variant="body1" color="text.secondary" paragraph>
          Your feedback helps us:
        </Typography>
        <Grid container spacing={2} justifyContent="center">
          <Grid item xs={12} md={4}>
            <Typography variant="body1">
              • Improve teaching methods and course content
            </Typography>
          </Grid>
          <Grid item xs={12} md={4}>
            <Typography variant="body1">
              • Enhance the overall learning experience
            </Typography>
          </Grid>
          <Grid item xs={12} md={4}>
            <Typography variant="body1">
              • Make data-driven decisions for better education
            </Typography>
          </Grid>
        </Grid>
      </Box>
    </Container>
  );
}

export default Home; 