<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password | Uni Event System</title>
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

    /* Forgot Password Container */
    .forgot-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 60px 20px;
      background-color: #0e1422;
    }

    .forgot-box {
      background: #151c2c;
      padding: 40px;
      border-radius: 10px;
      max-width: 420px;
      width: 100%;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    h2 {
      color: #fff;
      font-size: 1.6rem;
      margin-bottom: 10px;
    }
    p {
      color: #bdbdbd;
      font-size: 0.95rem;
      margin-bottom: 25px;
    }

    .method-buttons {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }
    .method-buttons button {
      flex: 1;
      background: #7b2ff7;
      color: white;
      border: none;
      padding: 10px;
      margin: 0 5px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 500;
    }
    .method-buttons button.secondary {
      background: #000;
      border: 1px solid #333;
    }
    label {
      display: block;
      margin-bottom: 5px;
      color: #ccc;
      text-align: left;
    }
    input {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      background: #0c0c0c;
      color: white;
      margin-bottom: 20px;
    }
    input::placeholder {
      color: #777;
    }
    .send-btn {
      width: 100%;
      background: #7b2ff7;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
    }
    .send-btn:hover {
      background: #5a1edb;
    }

    .back-link {
      text-align: center;
      margin-top: 15px;
    }
    .back-link a {
      color: #a971ff;
      text-decoration: none;
    }
    .back-link a:hover {
      text-decoration: underline;
    }

/* Footer */
    footer{background:#0c0c0c;color:white;text-align:center;padding:20px;}

    footer{
      background:#7b2ff7;
      color:white;
      padding:50px 20px 10px;
    }
    .footer-container{
      max-width:1100px;
      margin:auto;
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
      gap:30px;
    }
    .footer-section h4{
      font-size:1.1rem;
      font-weight:600;
      margin-bottom:15px;
    }
    .footer-section p{
      line-height:1.6;
      font-size:0.95rem;
    }
    .footer-section ul{
      list-style:none;
      padding:0;
    }
    .footer-section ul li{
      margin-bottom:8px;
    }
    .footer-section ul li a{
      color:white;
      font-size:0.95rem;
      transition:0.3s;
    }
    .footer-section ul li a:hover{
      text-decoration:underline;
    }
    .social-icons a{
      display:inline-block;
      color:white;
      font-size:1.4rem;
      margin-right:10px;
      transition:0.3s;
    }
    .social-icons a:hover{
      opacity:0.8;
    }
    .footer-bottom{
      text-align:center;
      margin-top:30px;
      padding-top:10px;
      border-top:1px solid rgba(255,255,255,0.2);
      font-size:0.9rem;
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

  <section class="forgot-container">
    <div class="forgot-box">
      <h2>Forgot Password</h2>
      <p>Choose how you'd like to reset your password</p>

      <div class="method-buttons">
        <button type="button">📧 Email</button>
        <button type="button" class="secondary">📱 Phone (OTP)</button>
      </div>

      <form action="resentlink.php" method="POST">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="john@example.com" required>

        <button type="submit" class="send-btn">Send Reset Link</button>
      </form>

      <div class="back-link">
        <a href="login.php">← Back to Login</a>
      </div>
    </div>
  </section>

 <!-- ===== Footer ===== -->
  <footer>
    <div class="footer-container">
      <div class="footer-section">
        <h4>Universe</h4>
        <p>Your one-stop platform for managing and discovering college events. Connect, participate, and make memories!</p>
      </div>
      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="event.php">Event</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h4>Contact Info</h4>
        <p>info@universe.edu</p>
        <p>+1 (555) 123-4567</p>
        <p>123 College Ave, Campus City</p>
      </div>
      <div class="footer-section">
        <h4>Follow Us</h4>
        <div class="social-icons">
          <a href="#">📸</a>
          <a href="#">💼</a>
          <a href="#">📘</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      © 2025 UniVerse. All rights reserved.
    </div>
  </footer>
</body>
</html>
