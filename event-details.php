<?php
$events = [
  ["Technology", "Annual Tech Fest 2024", "hackathon.jpg", "Join us for the biggest technology fest of the year featuring hackathons and tech talks.", "2024-03-15", "09:00 AM", "Main Auditorium", 342, 500],
  ["Cultural", "Cultural Night", "music.jpg", "Experience music, dance, and diverse cultural performances.", "2024-03-20", "06:00 PM", "Open Air Theatre", 567, 800],
  ["Career", "Career Fair 2024", "coding.jpg", "Meet leading companies and explore job opportunities.", "2024-03-25", "10:00 AM", "Sports Complex", 789, 1000],
  ["Sports", "Sports Tournament", "football.jpg", "Annual sports competition across departments.", "2024-04-01", "08:00 AM", "Sports Ground", 234, 600],
  ["Workshop", "AI & Machine Learning", "jobfair.jpg", "Learn AI fundamentals with hands-on experience.", "2024-04-10", "02:00 PM", "Computer Lab A", 87, 100],
  ["Social", "Blood Donation Camp", "Blood.jpg", "Participate in the social cause and help save lives.", "2024-04-15", "09:00 AM", "Medical Center", 145, 200]
];

$id = $_GET['event_id'] ?? 0;
$e = $events[$id];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $e[1] ?> | ZealVerse</title>
  <style>
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
    body { 
      font-family: 'Poppins', sans-serif; 
      background: #0b0c10; 
      color: #fff; 
      margin: 0; 
    }
    .container { 
      max-width: 900px; 
      margin: 60px auto; 
      background: #11121a; 
      border-radius: 16px; 
      overflow: hidden; 
      box-shadow: 0 4px 12px rgba(0,0,0,0.4); 
    }
    .container img { width:100%; height:350px; object-fit:cover; }
    .details { padding: 30px; }
    .category { background:#7b2ff7; padding:5px 14px; border-radius:20px; font-size:0.8rem; }
    h2 { margin-top:15px; }
    .info p { margin:8px 0; color:#ccc; }
    .btn { 
      display:inline-block; 
      background:#7b2ff7; 
      color:white; 
      text-decoration:none; 
      padding:12px 20px; 
      border-radius:8px; 
      margin-top:20px; 
    }
    .btn:hover { background:#9c4dff; }
    .back-link {
      color: white;
      text-decoration: none;
      font-weight: 500;
      background: rgba(255,255,255,0.15);
      padding: 6px 12px;
      border-radius: 6px;
      transition: 0.3s;
    }
    .back-link:hover {
      background: rgba(255,255,255,0.3);
    }
  </style>
</head>
<body>

<header>
  <div>ZealVerse</div>
  <!-- ✅ Fixed link: now redirects to event.php -->
  <a href="event.php" class="back-link">← Back to Events</a>
</header>

<div class="container">
  <img src="<?= $e[2] ?>" alt="<?= $e[1] ?>">
  <div class="details">
    <span class="category"><?= $e[0] ?></span>
    <h2><?= $e[1] ?></h2>
    <p><?= $e[3] ?></p>
    <div class="info">
      <p><strong>Date:</strong> <?= $e[4] ?></p>
      <p><strong>Time:</strong> <?= $e[5] ?></p>
      <p><strong>Venue:</strong> <?= $e[6] ?></p>
      <p><strong>Registered:</strong> <?= $e[7] ?>/<?= $e[8] ?></p>
    </div>
    <a href="https://docs.google.com/forms/your-form-link" target="_blank" class="btn">Register for Event</a>
  
</div>
</div>

</body>
</html>
