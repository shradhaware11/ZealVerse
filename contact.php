<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | ZealVerse</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #0e0e12;
      color: #fff;
      margin: 0;
      padding: 0;
    }

    /* Modern Header */
     header {
      background: linear-gradient(90deg, #7b2ff7, #f107a3);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      background: linear-gradient(90deg, #7b2ff7, #f107a3);
      -webkit-background-clip: text;
      -webkit-text-fill-color:white;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin-left: 25px;
      font-weight: 500;
      transition: 0.3s;
    }

    nav a:hover {
      color: #9b4dff;
    }

    .auth-buttons a {
      color: #fff;
      margin-left: 15px;
      padding: 8px 15px;
      border-radius: 6px;
      border: 1px solid rgba(255,255,255,0.2);
      text-decoration: none;
      transition: 0.3s;
    }

    .auth-buttons a:hover {
      background: rgba(255,255,255,0.15);
    }

    /* Center Title */
    .page-title {
      text-align: center;
      margin-top: 50px;
    }
    .page-title h1 {
      font-size: 2.3rem;
      margin-bottom: 10px;
    }
    .page-title p {
      color: #bfbfbf;
      margin-top: -5px;
    }

    /* Layout */
    .container {
      max-width: 1200px;
      margin: 50px auto;
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 25px;
    }

    /* Glass Cards */
    .card {
      background: rgba(255,255,255,0.05);
      padding: 30px;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,0.08);
      box-shadow: 0 4px 30px rgba(0,0,0,0.2);
      backdrop-filter: blur(6px);
    }

    .contact-form input, .contact-form textarea {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: none;
      margin-top: 5px;
      background: #0e0e12;
      color: #fff;
      font-size: 15px;
      border: 1px solid #2a2a35;
    }

    .contact-form button {
      margin-top: 15px;
      width: 100%;
      padding: 12px;
      background: linear-gradient(90deg, #7b2ff7, #a43df9);
      border: none;
      border-radius: 8px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    .contact-form button:hover {
      opacity: 0.85;
    }

    .info-item {
      margin-bottom: 18px;
    }

    .info-item i {
      color: #9b4dff;
      margin-right: 10px;
    }

    .support-box button {
      background: #7b2ff7;
      border: none;
      padding: 12px;
      color: #fff;
      width: 100%;
      margin-top: 10px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    .support-box button:hover {
      background: #9b4dff;
    }

    footer {
      text-align: center;
      padding: 20px;
      border-top: 1px solid rgba(255,255,255,0.1);
      margin-top: 60px;
    }

    footer a {
      color: #fff;
      margin: 0 10px;
      text-decoration: none;
    }

  </style>
</head>
<body>

<header>
  <div class="logo">ZealVerse</div>

  <nav>
    <a href="index.php">Home</a>
    <a href="events.php">Events</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
  </nav>

  <div class="auth-buttons">
      <?php if(!isset($_SESSION['user'])): ?>
          <a href="login.php">Login</a>
          <a href="signup.php">Sign Up</a>
      <?php else: ?>
          <a href="logout.php">Logout</a>
      <?php endif; ?>
  </div>
</header>

<div class="page-title">
  <h1>Contact Us</h1>
  <p>Have questions? We'd love to hear from you.</p>
</div>

<section class="container">

  <!-- Form Card -->
  <div class="card contact-form">
    <h2>Send us a Message</h2>
    <p>Fill out the form below and we'll get back to you within 24 hours.</p>

    <form action="send_message.php" method="POST">
      <label>Full Name *</label>
      <input type="text" name="name" required />

      <label>Email Address *</label>
      <input type="email" name="email" required />

      <label>Subject *</label>
      <input type="text" name="subject" required />

      <label>Message *</label>
      <textarea name="message" rows="5" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>

  <!-- Right Column -->
  <div>
    <div class="card">
      <h3>Contact Information</h3>

      <div class="info-item"><i class="fa-solid fa-envelope"></i><strong>Email:</strong> Zealverse11@gmail.com</div>
      <div class="info-item"><i class="fa-solid fa-phone"></i><strong>Phone:</strong> +91 8766509415</div>
      <div class="info-item"><i class="fa-solid fa-location-dot"></i><strong>Address:</strong> Zeal College, Pune</div>
      <div class="info-item"><i class="fa-regular fa-clock"></i><strong>Office Hours:</strong> Mon - Fri, 9AM - 5PM</div>
    </div>

    <div class="card support-box" style="margin-top:20px;">
      <h3>Need Help?</h3>
      <p>Our support team is here to assist you with any questions or concerns.</p>
      <button>Contact Support Team</button>
    </div>
  </div>

</section>

<footer>
  <p>© 2025 ZealVerse. All rights reserved.</p>
  <p>
    <a href="index.php">Home</a> |
    <a href="about.php">About</a> |
    <a href="events.php">Events</a> |
    <a href="contact.php">Contact</a>
  </p>
</footer>

</body>
</html>
