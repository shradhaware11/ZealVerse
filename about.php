<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Event Management System</title>

  <!-- Font Awesome for Social Media Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body{margin:0;font-family:Poppins,sans-serif;background:#fafafa;}
    header{background:#0c0c0c;color:white;padding:15px 40px;display:flex;justify-content:space-between;align-items:center;}
    header .logo{font-weight:bold;}
    nav ul{list-style:none;display:flex;}
    nav li{margin:0 10px;}
    nav a{color:white;text-decoration:none;padding:8px 14px;border-radius:5px;}
    nav a:hover,nav a.active{background:#1f4068;}
    section{padding:60px 20px;text-align:center;}
    h2{color:#1f4068;margin-bottom:20px;}
    p{max-width:700px;margin:auto;line-height:1.6;color:#555;}

    /* Footer */
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
      color:#00c4b4;
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

  <!-- ===== Header ===== -->
  <header>
    <div class="logo">🎉 Event Management</div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php" class="active">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
      </ul>
    </nav>
  </header>

  <!-- ===== About Section ===== -->
  <section>
    <h2>About Us</h2>
    <p>We are a team of creative event planners dedicated to delivering unforgettable experiences.
      From small celebrations to large conferences, we handle every detail professionally and efficiently.
      Our mission is to make your special moments stress-free and truly memorable.</p>
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
          <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      © 2025 UniVerse. All rights reserved.
    </div>
  </footer>

</body>
</html>
