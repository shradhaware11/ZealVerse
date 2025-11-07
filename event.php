<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniVerse - Events</title>

  <!-- Font Awesome for Social Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {margin: 0; padding: 0; box-sizing: border-box;}
    body {font-family: 'Poppins', sans-serif; background: #f9fafb; color: #222;}
    a {text-decoration: none;}

    /* ===== Header ===== */
    header {
      background: #0c0c0c;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
    }
    .logo {font-weight: bold; font-size: 1.5rem;}
    nav ul {list-style: none; display: flex;}
    nav li {margin: 0 10px;}
    nav a {color: white; padding: 8px 14px; border-radius: 5px;}
    nav a:hover, nav a.active {background: #007bff;}

    /* ===== Page Header ===== */
    .page-header {
      text-align: center;
      padding: 80px 20px;
      background: linear-gradient(135deg, #00c4b4 0%, #007bff 100%);
      color: white;
    }
    .page-header h1 {font-size: 3rem; margin-bottom: 10px;}
    .page-header p {font-size: 1.1rem;}

    /* ===== Events Section ===== */
    .events-section {padding: 80px 40px; background: #eef2f7;}
    .events-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 2fr));
      gap: 40px;
      max-width: 1600px;
      margin: auto;
    }
    .card {
      position: relative;
      background: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: all 0.4s ease;
      cursor: pointer;
    }
    .card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      transition: all 0.4s ease;
    }
    .card-content {
      padding: 15px;
      text-align: center;
    }
    .card-content h3 {margin: 10px 0; color: #111;}
    .category {
      display: inline-block;
      padding: 5px 10px;
      background: #00c4b4;
      color: white;
      border-radius: 20px;
      font-size: 0.8rem;
      margin-bottom: 8px;
    }

    /* Hover Popup */
    .card::after {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.5);
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .card:hover::after {opacity: 1;}
    .card:hover img {transform: scale(1.1); filter: blur(2px) brightness(70%);}
    .popup {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0.8);
      background: rgba(255, 255, 255, 0.95);
      color: #111;
      padding: 20px;
      border-radius: 10px;
      opacity: 0;
      transition: all 0.3s ease;
      width: 80%;
      text-align: center;
      z-index: 2;
    }
    .card:hover .popup {
      opacity: 1;
      transform: translate(-50%, -50%) scale(1);
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 6px;
      background: #00c4b4;
      color: white;
      margin-top: 10px;
    }
    .btn:hover {background: #009f9f;}

    /* ===== Footer ===== */
    footer {
      background: #7b2ff7;
      color: white;
      padding: 50px 20px 10px;
      margin-top: 60px;
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
    .footer-section ul {list-style: none; padding: 0;}
    .footer-section ul li {margin-bottom: 8px;}
    .footer-section ul li a {
      color: white; font-size: 0.95rem; transition: 0.3s;
    }
    .footer-section ul li a:hover {text-decoration: underline;}
    .social-icons a {
      display: inline-block;
      color: white;
      font-size: 1.6rem;
      margin-right: 12px;
      transition: 0.3s;
    }
    .social-icons a:hover {
      color: #d3d3d3;
      transform: scale(1.1);
    }
    .footer-bottom {
      text-align: center;
      margin-top: 30px;
      padding-top: 10px;
      border-top: 1px solid rgba(255,255,255,0.2);
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
        <li><a href="event.php" class="active">Events</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
      </ul>
    </nav>
  </header>

  <!-- ===== Page Header ===== -->
  <section class="page-header">
    <h1>Explore All Events</h1>
    <p>Discover upcoming fests, workshops, and competitions happening on campus.</p>
  </section>

  <!-- ===== Events Section ===== -->
  <section class="events-section">
    <div class="events-grid">
      
      <!-- 12 Event Cards with Google Form Links -->
      <div class="card"><img src="images/art.jpg"><div class="card-content"><span class="category">Cultural</span><h3>Art Fiesta</h3></div><div class="popup"><h3>Art Fiesta</h3><p>Showcase your artistic talent.</p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-YkUBaAONWeCJ4pa0v4lpn4Fx_0BjKSpq7zQxV2ENldp1DA/viewform?usp=publish-editor" target="_blank" class="btn">Register</a></div></div>

      <div class="card"><img src="images/football.jpg"><div class="card-content"><span class="category">Sports</span><h3>Football Cup</h3></div><div class="popup"><h3>Football Cup</h3><p>Compete for the trophy!</p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-YkUBaAONWeCJ4pa0v4lpn4Fx_0BjKSpq7zQxV2ENldp1DA/viewform?usp=publish-editor" target="_blank" class="btn">Join</a></div></div>

      <div class="card"><img src="images/ai.jpg"><div class="card-content"><span class="category">Seminar</span><h3>AI Future Talks</h3></div><div class="popup"><h3>AI Future Talks</h3><p>Learn from AI experts.</p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-YkUBaAONWeCJ4pa0v4lpn4Fx_0BjKSpq7zQxV2ENldp1DA/viewform?usp=publish-editor" target="_blank" class="btn">Join</a></div></div>

      <div class="card"><img src="images/coding.jpg"><div class="card-content"><span class="category">Coding</span><h3>Code Sprint 2025</h3></div><div class="popup"><h3>Code Sprint 2025</h3><p>24-hour coding marathon.</p><a href="v" target="_blank" class="btn">Participate</a></div></div>

      <div class="card"><img src="images/photo.jpg"><div class="card-content"><span class="category">Workshop</span><h3>Photography Basics</h3></div><div class="popup"><h3>Photography Workshop</h3><p>Learn from pros.</p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-YkUBaAONWeCJ4pa0v4lpn4Fx_0BjKSpq7zQxV2ENldp1DA/viewform?usp=publish-editor" target="_blank" class="btn">Register</a></div></div>

      <div class="card"><img src="images/hackathon.jpg"><div class="card-content"><span class="category">Tech</span><h3>Hackathon 2.0</h3></div><div class="popup"><h3>Hackathon 2.0</h3><p>Build innovative projects.</p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-YkUBaAONWeCJ4pa0v4lpn4Fx_0BjKSpq7zQxV2ENldp1DA/viewform?usp=publish-editor" target="_blank" class="btn">Join</a></div></div>

      <div class="card"><img src="images/music.jpg"><div class="card-content"><span class="category">Music</span><h3>Battle of Bands</h3></div><div class="popup"><h3>Battle of Bands</h3><p>Rock the stage!</p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-YkUBaAONWeCJ4pa0v4lpn4Fx_0BjKSpq7zQxV2ENldp1DA/viewform?usp=publish-editor" target="_blank" class="btn">Book</a></div></div>

      <div class="card"><img src="images/startup.jpg"><div class="card-content"><span class="category">Career</span><h3>Startup Meetup</h3></div><div class="popup"><h3>Startup Meetup</h3><p>Connect with innovators.</p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-YkUBaAONWeCJ4pa0v4lpn4Fx_0BjKSpq7zQxV2ENldp1DA/viewform?usp=publish-editor" target="_blank" class="btn">Join</a></div></div>

      <div class="card"><img src="images/fashion.jpg"><div class="card-content"><span class="category">Cultural</span><h3>Fashion Show</h3></div><div class="popup"><h3>Fashion Show</h3><p>Unleash creativity.</p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-YkUBaAONWeCJ4pa0v4lpn4Fx_0BjKSpq7zQxV2ENldp1DA/viewform?usp=publish-editor" target="_blank" class="btn">Register</a></div></div>

      <div class="card"><img src="images/techexpo.jpg"><div class="card-content"><span class="category">Technology</span><h3>Tech Expo</h3></div><div class="popup"><h3>Tech Expo</h3><p>Explore new innovations.</p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-YkUBaAONWeCJ4pa0v4lpn4Fx_0BjKSpq7zQxV2ENldp1DA/viewform?usp=publish-editor" target="_blank" class="btn">Visit</a></div></div>

      <div class="card"><img src="images/jobfair.jpg"><div class="card-content"><span class="category">Career</span><h3>Job Fair 2025</h3></div><div class="popup"><h3>Job Fair</h3><p>Meet top recruiters.</p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-YkUBaAONWeCJ4pa0v4lpn4Fx_0BjKSpq7zQxV2ENldp1DA/viewform?usp=publish-editor" target="_blank" class="btn">Join</a></div></div>

      <div class="card"><img src="images/blood.jpg"><div class="card-content"><span class="category">Social</span><h3>Blood Donation Camp</h3></div><div class="popup"><h3>Blood Donation</h3><p>Donate blood and save lives.</p><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-YkUBaAONWeCJ4pa0v4lpn4Fx_0BjKSpq7zQxV2ENldp1DA/viewform?usp=publish-editor"_blank" class="btn">Volunteer</a></div></div>

    </div>
  </section>

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
          <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">© 2025 UniVerse. All rights reserved.</div>
  </footer>

</body>
</html>
