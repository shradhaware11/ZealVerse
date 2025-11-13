<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZealVerse | Events</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body { font-family: 'Poppins', sans-serif; background: #0b0c10; color: #fff; margin: 0; }

    /* Header */
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
    .logo { font-weight: 700; font-size: 1.5rem; }
    nav a {
      color: #fff; text-decoration: none; margin: 0 15px;
      font-weight: 500; padding: 6px 12px; border-radius: 8px; transition: 0.3s;
    }
    nav a:hover, nav a.active { background: rgba(255,255,255,0.2); }

    /* Hero */
    .hero { text-align: center; padding: 70px 20px 40px; }
    .hero h1 { font-size: 2.5rem; margin-bottom: 10px; font-weight: 700; }
    .hero p { color: #cfcfcf; font-size: 1rem; }

    /* Search */
    .search-bar { text-align: center; margin: 20px 0; }
    .search-bar input {
      width: 60%; max-width: 600px;
      padding: 12px;
      border: 1px solid #333;
      border-radius: 10px;
      background: #11121a;
      color: #fff;
    }

    /* Filters */
    .filters { text-align: center; margin: 20px 0 50px; }
    .filters button {
      background: transparent;
      border: 1px solid #7b2ff7;
      color: #7b2ff7;
      border-radius: 20px;
      padding: 8px 18px;
      margin: 5px;
      cursor: pointer;
      transition: 0.3s;
    }
    .filters button.active, .filters button:hover {
      background: #7b2ff7;
      color: #fff;
    }

    /* Event Grid */
    .events-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      padding: 0 60px 80px;
      max-width: 1500px;
      margin: auto;
    }

    .card {
      background: #11121a;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
      transition: 0.3s;
    }
    .card:hover { transform: translateY(-5px); }
    .card img { width: 100%; height: 200px; object-fit: cover; }
    .card-content { padding: 20px; }
    .category {
      background: #7b2ff7;
      color: #fff;
      font-size: 0.8rem;
      border-radius: 20px;
      padding: 5px 10px;
      margin-bottom: 8px;
      display: inline-block;
    }
    .card h3 { color: #fff; margin-bottom: 8px; font-size: 1.2rem; }
    .card p { color: #b5b5b5; font-size: 0.95rem; margin-bottom: 10px; }
    .details { font-size: 0.9rem; color: #ccc; margin-bottom: 10px; }
    .btn {
      display: block;
      width: 100%;
      background: #7b2ff7;
      color: #fff;
      border: none;
      padding: 10px 0;
      border-radius: 8px;
      text-align: center;
      text-decoration: none;
      transition: 0.3s;
    }
    .btn:hover { background: #9c4dff; }

    /* Footer */
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
    .footer-section h4 { font-size: 1.1rem; font-weight: 600; margin-bottom: 15px; }
    .footer-section p { font-size: 0.95rem; line-height: 1.6; }
    .social-icons a {
      display: inline-block;
      color: white;
      font-size: 1.4rem;
      margin-right: 10px;
      transition: 0.3s;
    }
    .social-icons a:hover { color: #d3d3d3; }
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

<header>
  <div class="logo">ZealVerse</div>
  <nav>
    <ul style="list-style:none; display:flex; margin:0; padding:0;">
      
      <li><a href="index.php">Home</a></li>
      <li><a href="event.php" class="active">Event</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>

      <?php if(isset($_SESSION['user'])): ?>
          <!-- SHOW ONLY WHEN USER IS LOGGED IN -->
          <li><a href="logout.php">Logout</a></li>

      <?php else: ?>
          <!-- SHOW ONLY WHEN USER IS NOT LOGGED IN -->
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Signup</a></li>

      <?php endif; ?>

    </ul>
  </nav>
</header>


<section class="hero">
  <h1>Discover Events</h1>
  <p>Find and register for exciting events happening on campus</p>
</section>

<section class="search-bar">
  <input id="searchInput" type="text" placeholder="Search events by title, description, or category...">
</section>

<section class="filters">
  <button class="active" data-category="All">All</button>
  <button data-category="Technology">Technology</button>
  <button data-category="Cultural">Cultural</button>
  <button data-category="Career">Career</button>
  <button data-category="Sports">Sports</button>
  <button data-category="Workshop">Workshop</button>
  <button data-category="Social">Social</button>
</section>

<section class="events-grid" id="eventsGrid">
  <?php
  
   $events = [
    /* TECHNOLOGY (3 events) */
    ["Technology", "Annual Tech Fest 2025", "hackathon.jpg", "Join us for the biggest technology fest of the year with hackathons and seminars.", "2025-12-15", "09:00 AM", "Main Auditorium", 342, 500],
    ["Technology", "Cyber Security Summit", "cybersecurity.jpg", "Learn ethical hacking, cybersecurity tools, and attend expert sessions.", "2024-12-15", "11:00 AM", "Tech Hall B", 210, 400],
    ["Technology", "Robotics Expo 2025", "robo.jpg", "Explore modern robots, AI automation & hands-on demos.", "2025-12-22", "10:00 AM", "Innovation Lab", 392, 600],

    /* CULTURAL (3 events) */
    ["Cultural", "Cultural Night", "Cultural Night.jpg", "Experience music, dance, theatre & cultural performances.", "2025-012-20", "06:00 PM", "Open Air Theatre", 567, 800],
    ["Cultural", "Traditional Day", "Traditional Day.jpg", "Celebrate ethnic wear, music, food & cultural exhibitions.", "2025-12-27", "10:00 AM", "Main Plaza", 428, 700],
    ["Cultural", "Art Fest", "art.jpg", " live art booths & painting showcases.", "2025-04-02", "05:00 PM", "Cultural Hall", 300, 650],

    /* CAREER (3 events) */
    ["Career", "Career Fair 2025", "jobfair.jpg", "Meet leading companies and explore job opportunities.", "2025-11-25", "10:00 AM", "Sports Complex", 789, 1000],
    ["Career", "Resume Building Workshop", "resume.jpg", "Learn resume writing, portfolio creation & interview skills.", "2025-12-28", "02:00 PM", "Seminar Room 1", 140, 200],
    ["Career", "Entrepreneurship Bootcamp", "Entrepreneurship .jpg", "Startup mentoring, pitch training & business model sessions.", "2025-12-05", "09:30 AM", "Innovation Hub", 390, 500],

    /* SPORTS (3 events) */
    ["Sports", "Sports Tournament", "football.jpg", "Annual sports competition across departments.", "2025-12-01", "08:00 AM", "Sports Ground", 234, 600],
    ["Sports", "Basketball Championship", "basketball.jpg", "Interdepartment basketball league finals.", "2025-12-11", "04:00 PM", "Indoor Stadium", 280, 450],
    
    /* WORKSHOP (3 events) */
    ["Workshop", "AI & Machine Learning Workshop", "ai.jpg", "Learn AI fundamentals with hands-on model training.", "2024-04-10", "02:00 PM", "Computer Lab A", 87, 100],
    ["Workshop", "UI/UX Design Workshop", "UI .jpg", "A practical session on wireframing, prototyping & design tools.", "2024-04-14", "11:00 AM", "Design Studio", 110, 150],
    ["Workshop", "Cloud Computing with AWS", "Cloud .jpg", "Understand cloud basics, deployment & AWS services.", "2024-04-20", "01:00 PM", "IT Lab 2", 95, 120],

    /* SOCIAL (3 events) */
    ["Social", "Blood Donation Camp", "Blood.jpg", "Participate in the noble cause and help save lives.", "2025-12-15", "09:00 AM", "Medical Center", 145, 200],
    ["Social", "Tree Plantation Drive", "Plantation .jpg", "Join us to plant trees & contribute to a greener campus.", "2025-11-23", "08:00 AM", "Eco Park", 180, 300],
    ["Social", "Mental Health Awareness Talk", "mentel health .jpg", "Interactive session on stress relief & student well-being.", "2025-11-29", "11:00 AM", "Auditorium", 210, 350],
];

    

  foreach ($events as $index => $e) {
    echo "
    <div class='card' data-category='{$e[0]}' data-title='{$e[1]}' data-desc='{$e[3]}'>
      <img src='{$e[2]}' alt='{$e[1]}'>
      <div class='card-content'>
        <span class='category'>{$e[0]}</span>
        <span style='float:right; font-size:0.8rem; color:#bbb;'>{$e[7]}/{$e[8]}</span>
        <h3>{$e[1]}</h3>
        <p>{$e[3]}</p>
        <div class='details'>
          <p><i class='fa-regular fa-calendar'></i> {$e[4]}</p>
          <p><i class='fa-regular fa-clock'></i> {$e[5]}</p>
          <p><i class='fa-solid fa-location-dot'></i> {$e[6]}</p>
        </div>
        <a href='event-details.php?event_id={$index}' class='btn'>View Details</a>
      </div>
    </div>";
  }
  ?>
</section>

<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h4>ZealVerse</h4>
      <p>Your one-stop platform for discovering and managing college events. Connect, participate, and make memories!</p>
    </div>
    <div class="footer-section">
      <h4>Quick Links</h4>
      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="event.php">Event</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
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
        <a href="https://www.instagram.com/zeal_verse11?igsh=MTB6cGRzeWJheDlycQ=="><i class="fab fa-instagram"></i></a>
        <a href="https://x.com/zeal_verse11?t=oNOTOyL7RHpLkLaCGW8XNA&s=08"><i class="fab fa-x-twitter"></i></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">© 2025 ZealVerse. All rights reserved.</div>
</footer>

<script>
  const searchInput = document.getElementById('searchInput');
  const categoryButtons = document.querySelectorAll('.filters button');
  const cards = document.querySelectorAll('.card');

  // Search filter
  searchInput.addEventListener('input', () => {
    const query = searchInput.value.toLowerCase();
    cards.forEach(card => {
      const title = card.dataset.title.toLowerCase();
      const desc = card.dataset.desc.toLowerCase();
      const cat = card.dataset.category.toLowerCase();
      card.style.display = (title.includes(query) || desc.includes(query) || cat.includes(query)) ? 'block' : 'none';
    });
  });

  // Category filter
  categoryButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      categoryButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const category = btn.dataset.category;

      cards.forEach(card => {
        card.style.display = (category === 'All' || card.dataset.category === category) ? 'block' : 'none';
      });
      searchInput.value = ''; // clear search when switching categories
    });
  });
</script>

</body>
</html>

