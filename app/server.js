const express = require('express');
const session = require('express-session');
const bodyParser = require('body-parser');
const path = require('path');
const app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(session({
  secret: 'your_secret_key',
  resave: false,
  saveUninitialized: true,
  cookie: { secure: false } // Set secure: true jika menggunakan HTTPS
}));

// Simulasi user database
const users = [
  { username: 'user1', password: 'password1' },
  { username: 'user2', password: 'password2' }
];

// Login route
app.post('/login', (req, res) => {
  const { username, password } = req.body;
  const user = users.find(u => u.username === username && u.password === password);
  if (user) {
    req.session.user = user;
    return res.redirect('/dashboard');
  }
  res.redirect('/login');
});

// Protected route - Removed authentication check
app.get('/dashboard', (req, res) => {
  res.sendFile(path.join(__dirname, 'dashboard.html'));
});

// Routes for other pages
app.get('/data-hotel', (req, res) => {
  res.sendFile(path.join(__dirname, 'data-hotel.html'));
});

app.get('/alternatif', (req, res) => {
  res.sendFile(path.join(__dirname, 'alternatif.html'));
});

app.get('/kriteria', (req, res) => {
  res.sendFile(path.join(__dirname, 'kriteria.html'));
});

app.get('/perhitungan', (req, res) => {
  res.sendFile(path.join(__dirname, 'perhitungan.html'));
});

// Login page
app.get('/login', (req, res) => {
  res.sendFile(path.join(__dirname, 'login.html'));
});

app.listen(3000, () => {
  console.log('Server started on http://localhost:3000');
});
