<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZealVerse | Events</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #0e0e12;
      color: #fff;
      margin: 0;
    }

    header {
      background: #6c2bd9;
      padding: 18px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }
    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: 500;
    }
    nav a:hover {
      text-decoration: underline;
    }

    .page-header {
      text-align: center;
      padding: 70px 20px;
      background: linear-gradient(135deg, #6c2bd9, #9333ea);
    }

    .events-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 30px;
      padding: 60px;
      max-width: 1400px;
      margin: auto;
    }

    .event-card {
      background: #1c1c23;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      transition: all 0.3s ease;
    }
    .event-card:hover {
      transform: translateY(-5px);
    }
    .event-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .event-info {
      padding: 20px;
    }
    .category {
      background: #6c2bd9;
      padding: 4px 10px;
      border-radius: 20px;
      font-size: 0.8rem;
      display: inline-block;
      margin-bottom: 10px;
    }
    .event-info h3 {
      margin: 5px 0;
      font-size: 1.2rem;
    }
    .btn {
      display: inline-block;
      background: #9333ea;
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 6px;
      font-weight: 500;
      margin-top: 10px;
      transition: background 0.3s ease;
    }
    .btn:hover {
      background: #a855f7;
    }

    footer {
      background: #6c2bd9;
      padding: 40px;
      text-align: center;
      color: white;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">ZealVerse</div>
    <nav>
      <a href="index.php">Home</a>
      <a href="events.php" style="text-decoration:underline;">Events</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <section class="page-header">
    <h1>Upcoming Events</h1>
    <p>Explore and register for exciting fests, workshops, and more.</p>
  </section>

  <section class="events-container">
    <?php
      $events = [
        ["Cultural", "Art Fiesta", "images/art.jpg", "Showcase your artistic talent.", "https://docs.google.com/forms/..."],
        ["Sports", "Football Cup", "images/football.jpg", "Compete for the trophy!", "https://docs.google.com/forms/..."],
        ["Seminar", "AI Future Talks", "images/ai.jpg", "Learn from AI experts.", "https://docs.google.com/forms/..."],
        ["Coding", "Code Sprint 2025", "images/coding.jpg", "24-hour coding marathon.", "https://docs.google.com/forms/..."],
        ["Workshop", "Photography Basics", "images/photo.jpg", "Learn from professional photographers.", "https://docs.google.com/forms/..."],
        ["Tech", "Hackathon 2.0", "images/hackathon.jpg", "Build innovative projects.", "https://docs.google.com/forms/..."],
        ["Music", "Battle of Bands", "images/music.jpg", "Rock the stage!", "https://docs.google.com/forms/..."],
        ["Career", "Startup Meetup", "images/startup.jpg", "Connect with innovators.", "https://docs.google.com/forms/..."],
        ["Cultural", "Fashion Show", "images/fashion.jpg", "Unleash creativity and style.", "https://docs.google.com/forms/..."],
        ["Technology", "Tech Expo", "images/techexpo.jpg", "Explore new innovations.", "https://docs.google.com/forms/..."],
        ["Career", "Job Fair 2025", "images/jobfair.jpg", "Meet top recruiters.", "https://docs.google.com/forms/..."],
        ["Social", "Blood Donation Camp", "images/blood.jpg", "Donate blood and save lives.", "https://docs.google.com/forms/..."],
      ];

      foreach ($events as $index => $event) {
        echo "
          <div class='event-card'>
            <img src='{$event[2]}' alt='{$event[1]}'>
            <div class='event-info'>
              <span class='category'>{$event[0]}</span>
              <h3>{$event[1]}</h3>
              <p>{$event[3]}</p>
              <a href='event-details.php?event_id={$index}' class='btn'>View Details</a>
            </div>
          </div>
        ";
      }
    ?>
  </section>

  <footer>
    <p>© 2025 ZealVerse. All rights reserved.</p>
  </footer>

</body>
</html>
