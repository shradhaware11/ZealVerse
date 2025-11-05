<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Event Management System</title>

  <!-- Font Awesome for Social Media Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* ===== Reset & Base ===== */
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Poppins', sans-serif;
      background: #0b0e14;
      color: #fff;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    a { text-decoration: none; color: #b88cff; }
    a:hover { text-decoration: underline; }

    /* ===== Header ===== */
    header {
      background: #7b2ff7;
      color: white;
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo { font-size: 1.6rem; font-weight: 600; }
    nav ul { list-style: none; display: flex; }
    nav li { margin: 0 10px; }
    nav a {
      color: white;
      text-decoration: none;
      padding: 8px 14px;
      border-radius: 5px;
      font-weight: 500;
      transition: 0.3s;
    }
    nav a:hover,
    nav a.active { background: rgba(255, 255, 255, 0.15); }

    /* ===== Login Section ===== */
    .login-container {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 60px 20px;
    }
    .login-container h1 {
      font-size: 2rem;
      margin-bottom: 10px;
    }
    .login-container p {
      color: #ccc;
      margin-bottom: 30px;
      text-align: center;
    }
    .login-box {
      background: #141823;
      padding: 40px;
      border-radius: 10px;
      max-width: 400px;
      width: 100%;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
      transition: 0.3s ease;
    }
    .login-box h2 {
      margin-bottom: 10px;
      font-size: 1.5rem;
    }
    .login-box p {
      color: #aaa;
      font-size: 0.9rem;
      margin-bottom: 20px;
    }

    form input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 6px;
      background: #1c1f2b;
      color: #fff;
    }
    form input::placeholder { color: #999; }
    form button {
      width: 100%;
      padding: 12px;
      background: #7b2ff7;
      border: none;
      border-radius: 6px;
      color: white;
      font-weight: 600;
      margin-top: 10px;
      cursor: pointer;
      transition: 0.3s;
    }
    form button:hover { background: #6825d8; }

    .login-links {
      text-align: center;
      margin-top: 15px;
      font-size: 0.9rem;
    }

    /* ===== Footer ===== */
    footer {
      background: #7b2ff7;
      color: white;
      padding: 50px 20px 10px;
    }
    .footer-container {
      max-width: 1100px;
      margin: auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 30px;
    }
    .footer-section h4 {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 15px;
    }
    .footer-section p {
      line-height: 1.6;
      font-size: 0.95rem;
    }
    .footer-section ul { list-style: none; padding: 0; }
    .footer-section ul li { margin-bottom: 8px; }
    .footer-section ul li a {
      color: white;
      font-size: 0.95rem;
      transition: 0.3s;
    }
    .footer-section ul li a:hover { text-decoration: underline; }
    .social-icons a {
      display: inline-block;
      color: white;
      font-size: 1.5rem;
      margin-right: 15px;
      transition: 0.3s;
    }
    .social-icons a:hover { color: #00c4b4; }
    .footer-bottom {
      text-align: center;
      margin-top: 30px;
      padding-top: 10px;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      font-size: 0.9rem;
    }
  </style>
</head>

<body>
  <!-- ===== Header ===== -->
  <header>
    <div class="logo">🎉 Univerese</div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php" class="active">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
      </ul>
    </nav>
  </header>

  <!-- ===== Login Section ===== -->
  <section class="login-container">
    <h1>Welcome Back</h1>
    <p>Sign in to your account to continue</p>

    <div class="login-box">
      <h2>Student Login</h2>
      <p>Enter your credentials to access your account</p>

      <form id="loginForm" action="Studentdashboard.php" method="post" onsubmit="return redirectHome()">
        <input type="email" id="email" name="email" placeholder="john@example.com" required />
        <input type="password" id="password" name="password" placeholder="Enter your password" required />
        <button type="submit" id="submitBtn">Sign In</button>
      </form>

      <div class="login-links">
        <p><a href="forgotpass.php">Forgot your password?</a></p>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
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
          <li><a href="events.php">Events</a></li>
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
          <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://linkedin.com" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      © 2025 UniVerse. All rights reserved.
    </div>
  </footer>

  <!-- ===== JS Redirect ===== -->
  <script>
    function redirectHome() {
      alert("Login successful! Redirecting to Student Dashboard...");
      window.location.href = "Studentdashboard.php";
      return false; // Prevents default form submission
    }
  </script>
</body>
</html>
