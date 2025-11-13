<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About - ZealVerse</title>

  <!-- Font & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    /* ========== Global ========== */
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background-color: #0b0c10;
      color: #e4e4e4;
      line-height: 1.7;
    }

    /* ========== Header ========== */
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
      font-size: 1.5rem;
      font-weight: 700;
      color: #fff;
    }

    nav ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    nav li {
      margin-left: 20px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
      padding: 6px 12px;
      border-radius: 8px;
    }

    nav a:hover,
    nav a.active {
      background: rgba(255, 255, 255, 0.2);
    }

    /* ========== About Hero ========== */
    .about-hero {
      text-align: center;
      padding: 80px 20px 40px;
    }

    .about-hero h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: #fff;
      margin-bottom: 15px;
    }

    .about-hero p {
      color: #cfcfcf;
      max-width: 700px;
      margin: 0 auto;
      font-size: 1rem;
    }

    /* ========== Cards Section ========== */
    .values {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      max-width: 1100px;
      margin: 60px auto;
      padding: 0 20px;
    }

    .value-card {
      background: #11121a;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
      text-align: left;
      transition: 0.3s;
    }

    .value-card:hover {
      transform: translateY(-6px);
      background: #181a24;
    }

    .value-card i {
      font-size: 1.8rem;
      color: #7b2ff7;
      margin-bottom: 15px;
    }

    .value-card h3 {
      color: #fff;
      margin-bottom: 10px;
    }

    .value-card p {
      color: #b9b9b9;
      font-size: 0.95rem;
    }

    /* ========== Story Section ========== */
    .story {
      max-width: 900px;
      margin: 80px auto;
      text-align: center;
      padding: 0 20px;
    }

    .story h2 {
      font-size: 2rem;
      color: #fff;
      margin-bottom: 20px;
    }

    .story p {
      color: #c2c2c2;
      margin-bottom: 15px;
    }

    /* ========== Footer ========== */
    footer {
      background: #090909;
      padding: 40px 20px 10px;
      color: #ccc;
      text-align: center;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    footer .social a {
      color: #fff;
      margin: 0 10px;
      font-size: 1.2rem;
      transition: 0.3s;
    }

    footer .social a:hover {
      color: #7b2ff7;
    }

    footer p {
      margin-top: 20px;
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      .about-hero h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>

<body>
  <!-- Header -->
 <header>
    <div class="logo">ZealVerse</div>

    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="event.php">Event</a></li>
        <li><a href="about.php" class="active">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

    <div class="auth-buttons" style="display:flex; gap:15px;">
      <?php if(!isset($_SESSION['user'])): ?>
          <!-- Show Login + Signup only when NOT logged in -->
          <a href="login.php" style="color:#fff;">Login</a>
          <a href="signup.php" style="color:#fff;">Sign Up</a>
      <?php else: ?>
          <!-- Show Logout ONLY when logged in -->
          <a href="logout.php" style="color:#fff;">Logout</a>
      <?php endif; ?>
    </div>
</header>


  <!-- About Hero -->
  <section class="about-hero">
    <h1>About ZealVerse</h1>
    <p>
      ZealVerse connects students through memorable experiences, creative events, and a shared spirit of innovation. We
      empower communities to collaborate, celebrate, and create together.
    </p>
  </section>

  <!-- Our Values -->
  <section class="values">
    <div class="value-card">
      <i class="fa-solid fa-heart"></i>
      <h3>Student-Centric</h3>
      <p>Every idea we build focuses on enhancing the student experience—making it intuitive, inclusive, and inspiring.</p>
    </div>

    <div class="value-card">
      <i class="fa-solid fa-users"></i>
      <h3>Community First</h3>
      <p>We believe in the power of collaboration—helping students connect, grow, and share opportunities that matter.</p>
    </div>

    <div class="value-card">
      <i class="fa-solid fa-lightbulb"></i>
      <h3>Innovation</h3>
      <p>We continuously evolve ZealVerse with creativity and technology to redefine the way campus events thrive.</p>
    </div>
  </section>

  <!-- Our Story -->
  <section class="story">
    <h2>Our Story</h2>
    <p>ZealVerse was founded with a mission to simplify how colleges manage and participate in events. We noticed the
      challenges students faced—missing out on opportunities, juggling unorganized events, and lack of a central platform.</p>
    <p>Born in 2023, ZealVerse brings together intuitive design and smart tools for students and organizers alike, ensuring
      seamless event discovery, management, and engagement.</p>
    <p>Today, ZealVerse proudly supports communities across campuses—fueling enthusiasm, creativity, and connection.</p>
  </section>

  <!-- Footer -->
  <footer>
    <div class="social">
      <a href="https://www.instagram.com/zeal_verse11?igsh=MTB6cGRzeWJheDlycQ=="><i class="fab fa-instagram"></i></a>
      <a href="https://x.com/zeal_verse11?t=oNOTOyL7RHpLkLaCGW8XNA&s=08"><i class="fab fa-x-twitter"></i></a>
      
    </div>
    <p>© 2025 ZealVerse. Crafted with purpose for students everywhere.</p>
  </footer>
</body>
</html>
