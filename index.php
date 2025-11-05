<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UniVerse - Event Management Platform</title>
  <!-- Font Awesome for Social Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    *{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:'Poppins',sans-serif;background:#f9fafb;color:#222;line-height:1.6;}
    a{text-decoration:none;transition:0.3s ease;}

    /* Navbar */
    header{background:#0c0c0c;color:white;display:flex;justify-content:space-between;align-items:center;padding:15px 40px;position:sticky;top:0;z-index:10;}
    .logo{font-weight:bold;font-size:1.5rem;}
    nav ul{list-style:none;display:flex;}
    nav li{margin:0 10px;}
    nav a{color:white;padding:8px 14px;border-radius:5px;font-weight:500;}
    nav a:hover,nav a.active{background:#007bff;}

    /* Hero */
    .hero{background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('images/background.jpeg') no-repeat center/cover;color:white;text-align:center;padding:120px 20px;}
    .hero h1{font-size:3rem;margin-bottom:10px;}
    .hero span{color:#00c4b4;}
    .hero p{font-size:1.2rem;margin-bottom:20px;color:#ddd;}
    .btn{display:inline-block;padding:12px 24px;margin:8px;border-radius:6px;font-weight:600;transition:all 0.3s ease;}
    .btn-blue{background:#00c4b4;color:white;}
    .btn-blue:hover{background:#00a796;transform:translateY(-2px);}
    .btn-outline{border:2px solid white;color:white;}
    .btn-outline:hover{background:white;color:#0c0c0c;transform:translateY(-2px);}

    /* Stats */
    .stats{background:#f0f0f0;padding:60px 20px;display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px;text-align:center;}
    .stat-box{background:white;padding:20px;border-radius:10px;box-shadow:0 2px 10px rgba(0,0,0,0.1);transition:transform 0.3s ease;}
    .stat-box:hover{transform:scale(1.05);}
    .stat-box h3{font-size:2rem;color:#00c4b4;}
    .stat-box p{color:#555;}

    /* Events */
    .events{padding:60px 20px;}
    .events-header{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;margin-bottom:40px;}
    .events h2{font-size:2.5rem;color:#0c0c0c;}
    .event-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;}
    .card{background:white;border-radius:10px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,0.1);transition:all 0.3s ease;}
    .card:hover{transform:translateY(-5px);}
    .card img{width:100%;height:180px;object-fit:cover;}
    .card-content{padding:15px;}
    .card-content h3{margin-bottom:10px;color:#111;}
    .card-content p{font-size:0.9rem;color:#555;}
    .card-content .category{display:inline-block;padding:5px 10px;background:#00c4b4;color:white;border-radius:20px;font-size:0.8rem;margin-bottom:10px;}
    .card-content .btn{margin-top:10px;width:100%;text-align:center;}

    /* CTA */
    .cta{background:linear-gradient(135deg,#00c4b4 0%,#007bff 100%);color:white;text-align:center;padding:80px 20px;}
    .cta h2{font-size:2.5rem;margin-bottom:20px;}
    .cta p{max-width:600px;margin:0 auto 30px;font-size:1.1rem;}
    .cta .btn{background:white;color:#007bff;font-weight:bold;}
    .cta .btn:hover{background:#e2e2e2;transform:translateY(-2px);}

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
      font-size:1.5rem;
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
    <div class="logo">🎓 UniVerse</div>
    <nav>
      <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="event.php">Events</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
      </ul>
    </nav>
  </header>

  <!-- ===== Hero Section ===== -->
  <section class="hero">
    <h1>Welcome to <span>UniVerse</span></h1>
    <p>Your one-stop platform for discovering, registering, and managing college events.<br>
       Connect with your campus community and never miss an exciting event!</p>
    <a href="#featured-events" class="btn btn-blue">Explore Events</a>
    <a href="signup.php" class="btn btn-blue">Get Started</a>
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
      <a href="event.php" class="btn btn-outline">View All Events</a>
    </div>

    <div class="event-grid">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=800&q=80">
        <div class="card-content">
          <span class="category">Music</span>
          <h3>College Fest 2025</h3>
          <p>Experience the biggest college music and cultural festival with top performances and fun activities!</p>
          <a href="#" class="btn btn-blue">View Details</a>
        </div>
      </div>
      <div class="card">
        <img src="https://images.unsplash.com/photo-1551836022-4c4c79ecde51?auto=format&fit=crop&w=800&q=80">
        <div class="card-content">
          <span class="category">Tech</span>
          <h3>Innovate Hackathon</h3>
          <p>Join the biggest hackathon event to create solutions for real-world problems and win exciting prizes!</p>
          <a href="#" class="btn btn-blue">View Details</a>
        </div>
      </div>
      <div class="card">
        <img src="images/startup.jpg">
        <div class="card-content">
          <span class="category">Workshop</span>
          <h3>Leadership Bootcamp</h3>
          <p>Enhance your leadership and communication skills with experts and mentors at our annual workshop.</p>
          <a href="#" class="btn btn-blue">View Details</a>
        </div>
      </div>
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
