<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup | UniVerse</title>

  <!-- Font Awesome for Social Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background-color: #0b1120;
      color: white;
    }

    /* ===== Header ===== */
    header {
      background: #7b2ff7;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 60px;
    }

    .logo {
      font-weight: bold;
      font-size: 1.4rem;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    nav a:hover,
    nav a.active {
      color: #d3d3ff;
    }

    /* ===== Page Header ===== */
    .page-header {
      text-align: center;
      margin-top: 60px;
    }

    .page-header h1 {
      font-size: 2.5rem;
      margin-top: 15px;
      color: white;
    }

    .page-header p {
      color: #9aa0b4;
      font-size: 1rem;
      margin-top: 10px;
    }

    /* ===== Signup Card ===== */
    .signup-card {
      max-width: 430px;
      background: #11182b;
      margin: 50px auto 80px;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.3);
      text-align: left;
    }

    .signup-card h2 {
      font-size: 1.6rem;
      color: white;
      margin-bottom: 5px;
    }

    .signup-card p {
      color: #a1a7bb;
      font-size: 0.95rem;
      margin-bottom: 25px;
    }

    label {
      font-size: 0.9rem;
      color: #c4c8d8;
      display: block;
      margin-bottom: 6px;
    }

    input {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 6px;
      background: #0e1525;
      color: white;
      outline: none;
      font-size: 0.95rem;
      margin-bottom: 15px;
      border: 1px solid transparent;
      transition: 0.3s;
    }

    input:focus {
      border: 1px solid #7b2ff7;
    }

    .error {
      color: #ff4d4d;
      font-size: 0.85rem;
      display: none;
      margin-top: -10px;
      margin-bottom: 10px;
    }

    button[type="submit"] {
      width: 100%;
      background: #7b2ff7;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s;
    }

    button[type="submit"]:hover {
      background: #6621ce;
    }

    .switch-text {
      text-align: center;
      margin-top: 15px;
      font-size: 0.9rem;
    }

    .switch-text a {
      color: #a772ff;
      text-decoration: none;
      font-weight: 600;
    }

    .switch-text a:hover {
      text-decoration: underline;
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

    .footer-section ul {
      list-style: none;
      padding: 0;
    }

    .footer-section ul li {
      margin-bottom: 8px;
    }

    .footer-section ul li a {
      color: white;
      font-size: 0.95rem;
      transition: 0.3s;
    }

    .footer-section ul li a:hover {
      text-decoration: underline;
    }

    .social-icons a {
      display: inline-block;
      color: white;
      font-size: 1.5rem;
      margin-right: 15px;
      transition: 0.3s;
    }

    .social-icons a:hover {
      color: #00c4b4;
    }

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
    <div class="logo">🎓 UniVerse</div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="event.php">Events</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php" class="active">Signup</a></li>
      </ul>
    </nav>
  </header>

  <!-- ===== Page Header ===== -->
  <section class="page-header">
    <h1>Create Account</h1>
    <p>Join UniVerse today</p>
  </section>

  <!-- ===== Signup Form ===== -->
  <div class="signup-card">
    <h2>Sign Up</h2>
    <p>Fill in your details to create an account</p>

    <form id="signupForm">
      <label>Full Name</label>
      <input type="text" id="name" required placeholder="Enter your full name" />

      <label>Email</label>
      <input type="email" id="email" required placeholder="Enter your email" />

      <label>Phone Number</label>
      <input type="tel" id="phone" pattern="[0-9]{10}" maxlength="10" required placeholder="Enter 10-digit phone number" />

      <label>ZPRN (Student ID)</label>
      <input type="text" id="zprn" pattern="[0-9]{10}" maxlength="10" required placeholder="Enter 10-digit ZPRN" />
      <span id="zprnError" class="error">ZPRN must be exactly 10 digits</span>

      <label>Password</label>
      <input type="password" id="password" required placeholder="Enter password" />

      <label>Confirm Password</label>
      <input type="password" id="confirm" required placeholder="Confirm password" />
      <span id="passwordError" class="error">Passwords do not match</span>

      <button type="submit">Sign Up</button>
    </form>

    <div class="switch-text">
      Already have an account? <a href="login.php">Login here</a>
    </div>
  </div>

  <!-- ===== Footer ===== -->
  <footer>
    <div class="footer-container">
      <div class="footer-section">
        <h4>UniVerse</h4>
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

  <!-- ===== JS Validation + Redirect ===== -->
  <script>
    document.getElementById("signupForm").addEventListener("submit", function (e) {
      e.preventDefault();
      const zprn = document.getElementById("zprn").value.trim();
      const pass = document.getElementById("password").value;
      const confirm = document.getElementById("confirm").value;
      const zprnError = document.getElementById("zprnError");
      const passError = document.getElementById("passwordError");

      let valid = true;
      zprnError.style.display = "none";
      passError.style.display = "none";

      if (!/^\d{10}$/.test(zprn)) {
        zprnError.style.display = "block";
        valid = false;
      }

      if (pass !== confirm) {
        passError.style.display = "block";
        valid = false;
      }

      if (valid) {
        alert("Signup successful! Redirecting to Student Dashboard...");
        window.location.href = "Studentdashboard.php"; // ✅ Redirect to homepage
      }
    });
  </script>
</body>
</html>
