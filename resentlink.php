<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Reset Sent | Uni Event System</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #0c0c0c;
      color: #fff;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background: #7b2ff7;
      color: white;
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header .logo {
      font-weight: 700;
      font-size: 1.4rem;
    }
    nav ul {
      list-style: none;
      display: flex;
    }
    nav li {
      margin: 0 12px;
    }
    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
    }
    nav a:hover {
      text-decoration: underline;
    }

    /* Main container */
    .reset-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #0e1422;
      padding: 60px 20px;
    }

    .reset-box {
      background: #151c2c;
      padding: 40px;
      border-radius: 10px;
      max-width: 420px;
      width: 100%;
      text-align: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    h2 {
      font-size: 1.6rem;
      margin-bottom: 10px;
      color: #fff;
    }
    p {
      color: #bdbdbd;
      margin-bottom: 30px;
      font-size: 0.95rem;
    }

    .icon {
      background: #1e1e3f;
      width: 70px;
      height: 70px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 1.8rem;
      color: #a971ff;
    }

    .message {
      color: #a5a5ff;
      margin-bottom: 30px;
      font-size: 1rem;
      line-height: 1.5;
    }

    .btn {
      background: transparent;
      color: #a971ff;
      border: 1px solid #a971ff;
      padding: 10px 25px;
      border-radius: 5px;
      font-weight: 500;
      cursor: pointer;
      transition: 0.3s;
    }
    .btn:hover {
      background: #7b2ff7;
      color: white;
    }

    .back-link {
      margin-top: 20px;
    }
    .back-link a {
      color: #a971ff;
      text-decoration: none;
    }
    .back-link a:hover {
      text-decoration: underline;
    }

    footer {
      background: #7b2ff7;
      color: white;
      padding: 40px 20px;
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      text-align: left;
    }

    .footer-section {
      max-width: 250px;
      margin: 10px;
    }
    .footer-section h4 {
      margin-bottom: 10px;
    }
    .footer-section ul {
      list-style: none;
      padding: 0;
    }
    .footer-section ul li {
      margin: 5px 0;
    }
    .footer-section ul li a {
      color: white;
      text-decoration: none;
    }
    .footer-section ul li a:hover {
      text-decoration: underline;
    }

    .footer-bottom {
      width: 100%;
      text-align: center;
      border-top: 1px solid rgba(255,255,255,0.2);
      margin-top: 20px;
      padding-top: 10px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">Univerese</div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="event.php">Events</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <section class="reset-container">
    <div class="reset-box">
      <h2>Forgot Password</h2>
      <p>Check your inbox for reset instructions</p>

      <div class="icon">📧</div>

      <div class="message">
        We've sent password reset instructions to your email address.
      </div>

      <button class="btn" onclick="window.location.href='forgotpass.php'">Try Again</button>

      <div class="back-link">
        <a href="login.php">← Back to Login</a>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-section">
      <h4>Uni</h4>
      <p>Your one-stop platform for managing and discovering college events. Connect, participate, and make memories!</p>
    </div>

    <div class="footer-section">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="event.php">Events</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h4>Contact</h4>
      <p>info@universe.edu</p>
      <p>+1 (555) 123-4567</p>
      <p>123 College Ave, Campus City</p>
    </div>

    <div class="footer-bottom">
      © 2025 UniVerse. All rights reserved.
    </div>
  </footer>
</body>
</html>
