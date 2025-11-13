<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZealVerse - Event Management Platform</title>
  <!-- Font Awesome for Social Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    
    *{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    
    body{
      font-family:'Poppins',sans-serif;
      background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
      color:#e6e6fa;
      line-height:1.6;
    }
    a{text-decoration:none;transition:0.3s ease;}

    /* Color Palette */
    :root {
      --primary:#6c63ff;
      --secondary:#9b59b6;
      --accent:#00c4b4;
      --dark:#0b0c10;
      --light:#f5f7fb;
      --text-light:#ddd;
      --gradient:linear-gradient(135deg,#6c63ff,#9b59b6);
    }

    /* Navbar */
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

    .logo{
      font-weight:bold;
      font-size:1.6rem;
      background:var(--gradient);
      -webkit-background-clip:text;
      -webkit-text-fill-color:white;
    }
    nav ul{list-style:none;display:flex;}
    nav li{margin:0 10px;}
    nav a{
      color:white;
      padding:8px 14px;
      border-radius:6px;
      font-weight:500;
      letter-spacing:0.5px;
    }
    nav a:hover,nav a.active{
      background:var(--primary);
    }

    /* Hero */
    .hero{
      background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),
                 url('images/background.jpeg') no-repeat center/cover;
      color:white;
      text-align:center;
      padding:140px 20px;
    }
    .hero h1{
      font-size:3.2rem;
      margin-bottom:10px;
      letter-spacing:1px;
    }
    .hero span{
      background:var(--gradient);
      -webkit-background-clip:text;
      -webkit-text-fill-color:transparent;
    }
    .hero p{
      font-size:1.2rem;
      margin-bottom:25px;
      color:var(--text-light);
    }
    .btn{
      display:inline-block;
      padding:12px 26px;
      margin:8px;
      border-radius:8px;
      font-weight:600;
      transition:all 0.3s ease;
      letter-spacing:0.5px;
    }
    .btn-primary{
      background:var(--gradient);
      color:white;
      box-shadow:0 4px 10px rgba(0,0,0,0.2);
    }
    .btn-primary:hover{
      transform:translateY(-3px);
      filter:brightness(1.1);
    }
    .btn-outline{
      border:2px solid white;
      color:white;
    }
    .btn-outline:hover{
      background:#9370db;
      color:var(--dark);
      transform:translateY(-3px);
    }

    /* Stats */
    .stats{
      background:#eef1f8;
      padding:70px 20px;
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
      gap:25px;
      text-align:center;
    }
    .stat-box{
      background:white;
      padding:25px;
      border-radius:12px;
      box-shadow:0 3px 12px rgba(0,0,0,0.1);
      transition:transform 0.3s ease, box-shadow 0.3s ease;
    }
    .stat-box:hover{
      transform:translateY(-5px);
      box-shadow:0 5px 15px rgba(0,0,0,0.15);
    }
    .stat-box h3{
      font-size:2.2rem;
      color:var(--primary);
    }
    .stat-box p{color:#555;font-weight:500;}

    /* Events */
    .events{padding:70px 20px;}
    .events-header{
      text-align:center;
      margin-bottom:45px;
    }
    .events h2{
      font-size:2.5rem;
      color:#1a1a1a;
      background:var(--gradient);
      -webkit-background-clip:text;
      -webkit-text-fill-color:transparent;
    }
    .event-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
      gap:35px;
    }
    .card{
      background:white;
      border-radius:12px;
      overflow:hidden;
      box-shadow:0 3px 12px rgba(79, 38, 161, 0.1);
      transition:all 0.3s ease;
    }
    .card:hover{
      transform:translateY(-5px);
      box-shadow:0 6px 16px rgba(0,0,0,0.15);
    }
    .card img{
      width:100%;
      height:190px;
      object-fit:cover;
    }
    .card-content{padding:18px;}
    .card-content h3{margin-bottom:10px;color:#111;}
    .card-content p{font-size:0.95rem;color:#555;}
    .card-content .category{
      display:inline-block;
      padding:6px 12px;
      background:var(--gradient);
      color:white;
      border-radius:20px;
      font-size:0.8rem;
      margin-bottom:10px;
      font-weight:500;
    }
    .card-content .btn{
      margin-top:10px;
      width:100%;
      text-align:center;
    }

    /* Centered View All button */
    #featured-events .center-view-all {
      text-align: center;
      margin-top: 30px;
      margin-bottom: 10px;
    }
    #featured-events .center-view-all .btn-outline {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 8px;
      font-weight: 600;
      background: transparent;
      color: inherit;
    }

    /* CTA */
    .cta{
      background:var(--gradient);
      color:white;
      text-align:center;
      padding:90px 20px;
    }
    .cta h2{font-size:2.6rem;margin-bottom:20px;}
    .cta p{max-width:650px;margin:0 auto 30px;font-size:1.1rem;}
    .cta .btn{
      background:white;
      color:var(--primary);
      font-weight:bold;
    }
    .cta .btn:hover{
      background:#f0f0f0;
      transform:translateY(-3px);
    }

    /* Footer */
    footer{
      background:var(--dark);
      color:white;
      padding:60px 20px 15px;
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
      color:var(--accent);
    }
    .footer-section p{line-height:1.6;font-size:0.95rem;}
    .footer-section ul{list-style:none;padding:0;}
    .footer-section ul li{margin-bottom:8px;}
    .footer-section ul li a{
      color:white;
      font-size:0.95rem;
      transition:0.3s;
    }
    .footer-section ul li a:hover{color:var(--accent);}
    .social-icons a{
      display:inline-block;
      color:white;
      font-size:1.5rem;
      margin-right:10px;
      transition:0.3s;
    }
    .social-icons a:hover{color:var(--accent);}
    .footer-bottom{
      text-align:center;
      margin-top:30px;
      padding-top:10px;
      border-top:1px solid rgba(255,255,255,0.2);
      font-size:0.9rem;
      color:#ccc;
    }
  </style>
</head>
<body>

  <!-- ===== Header ===== -->
  <header>
  <div class="logo"> ZealVerse</div>
  <nav>
    <ul>
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="event.php">Event</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>

      <?php if(isset($_SESSION['user'])): ?>
          <!-- Show ONLY when logged in -->
          <li><a href="logout.php">Logout</a></li>
      <?php else: ?>
          <!-- Show when NOT logged in -->
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Signup</a></li>
      <?php endif; ?>

    </ul>
  </nav>
</header>


  <!-- ===== Hero Section ===== -->
  <section class="hero">
    <h1>Welcome to <span>ZealVerse</span></h1>
    <p>Your one-stop platform for discovering, registering, and managing college events.<br>
       Connect with your campus community and never miss an exciting event!</p>
    <a href="#featured-events" class="btn btn-outline">Explore Events</a>
    <a href="signup.php" class="btn btn-outline">Get Started</a>
    <a href="login.php" class="btn btn-outline">Try Matchmaker</a>
  </section>

  <!-- ===== Stats Section ===== -->
  <section class="stats">
    <div class="stat-box"><h3>50+</h3><p>Active Events</p></div>
    <div class="stat-box"><h3>2000+</h3><p>Registered Students</p></div>
    <div class="stat-box"><h3>95%</h3><p>Satisfaction Rate</p></div>
    <div class="stat-box"><h3>30+</h3><p>Partner Organizations</p></div>
  </section>

  <!-- ===== Featured Events ===== -->
  <section id="featured-events" class="events">
    <div class="events-header">
      <h2>Featured Events</h2>
    </div>

    <div class="event-grid">
      <div class="card">
        <img src="cybersecurity.jpg">
        <div class="card-content">
          <span class="category">TECHNOLOGY</span>
          <h3>Cyber Security Summit</h3>
          <p>Learn ethical hacking, cybersecurity tools, and attend expert sessions.</p>
          <a href="event-details.php?event_id=1" class="btn btn-primary">View Details</a>

        </div>
      </div>

      <div class="card">
        <img src="Cultural Night.jpg">
        <div class="card-content">
          <span class="category">CULTURAL</span>
          <h3>Cultural Night</h3>
          <p>Experience music, dance, theatre & cultural performances.</p>
          <a href="event-details.php?event_id=3" class="btn btn-primary">View Details</a>

        </div>
      </div>

      <div class="card">
        <img src="UI .jpg">
        <div class="card-content">
          <span class="category">WORKSHOP </span>
          <h3>UI/UX Design Workshop</h3>
          <p>A practical session on wireframing, prototyping & design tools.</p>
          <a href="event-details.php?event_id=12" class="btn btn-primary">View Details</a>

        </div>
      </div>
    </div>

    <!-- Centered View All button -->
    <div class="center-view-all">
      <a href="event.php" class="btn btn-outline">View All Events</a>
    </div>
  </section>

  <!-- ===== CTA Section ===== -->
  <section class="cta">
    <div style="font-size:50px;">🎯</div>
    <h2>Find Your Perfect Events</h2>
    <p>Take our quick 5-question quiz and we’ll recommend events that match your interests perfectly!</p>
    <a href="login.php" class="btn">Try Event Matchmaker</a>
  </section>

  <!-- ===== Footer ===== -->
  <footer>
    <div class="footer-container">
      <div class="footer-section">
        <h4>ZealVerse</h4>
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
        <p>Zealverse11@gmail.com</p>
        <p>+91 8766509415</p>
        <p>Zeal college,pune</p>
      </div>
      <div class="footer-section">
        <h4>Follow Us</h4>
        <div class="social-icons">
          <a href="https://www.instagram.com/zealverse1?igsh=MTB6cGRzeWJheDlycQ==" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="" target="_blank"><i class="fab fa-x-twitter"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      © 2025 ZealVerse. All rights reserved.
    </div>
  </footer>

</body>
</html>
