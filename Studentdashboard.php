<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['student_name'])) {
  $_SESSION['student_name'] = "Nikita's Team"; // demo name
}

// Logout logic
if (isset($_GET['logout'])) {
  session_destroy();
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Dashboard | UniVerse</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #0d1117;
      color: #ffffff;
      margin: 0;
      display: flex;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #0d1117;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: fixed;
      left: 0;
      top: 0;
      border-right: 1px solid #1f2937;
      box-sizing: border-box;
      padding: 20px 0;
    }

    .sidebar-top {
      padding: 0 20px;
    }

    .logo {
      font-size: 22px;
      font-weight: 600;
      color: #b187ff;
      margin-bottom: 30px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .menu a {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #c9d1d9;
      text-decoration: none;
      padding: 10px 15px;
      margin-bottom: 8px;
      border-radius: 8px;
      transition: 0.3s;
      font-size: 15px;
    }

    .menu a:hover {
      background-color: #1f2937;
      color: #fff;
    }

    .menu a.active {
      background-color: #8a3ffc;
      color: #fff;
    }

    /* Logout */
    .sidebar-bottom {
      padding: 0 20px 15px 20px;
      border-top: 1px solid #1f2937;
      padding-top: 15px;
    }

    .logout-btn {
      background-color: #f44336;
      color: white;
      border: none;
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
      font-size: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    .logout-btn:hover {
      background-color: #e53935;
    }

    /* Main Area */
    .main {
      margin-left: 260px;
      padding: 40px;
      flex: 1;
      background: #0f1320;
      min-height: 100vh;
      position: relative;
    }

    .back-home {
      position: absolute;
      top: 25px;
      right: 40px;
      color: white;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .back-home:hover {
      color: #b88cff;
      text-decoration: underline;
    }

    h1 {
      font-size: 28px;
      margin-bottom: 5px;
      color: #f0f6fc;
    }

    .subtitle {
      color: #a5a5a5;
      margin-bottom: 25px;
    }

    /* Quiz Section */
    .quiz-section {
      background: #161b22;
      padding: 25px;
      border-radius: 14px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
      margin-top: 20px;
    }

    .quiz-section h3 {
      margin-top: 0;
      color: #fff;
    }

    .quiz-section p {
      color: #aaa;
      margin-bottom: 20px;
    }

    .quiz-link-btn {
      display: inline-block;
      background: #8a3ffc;
      color: #fff;
      padding: 12px 20px;
      border-radius: 8px;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
    }

    .quiz-link-btn:hover {
      background: #6e32d9;
    }

    /* Stats */
    .stats {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 30px;
    }

    .stat-card {
      background: #161b22;
      flex: 1;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      min-width: 180px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.25);
    }

    .stat-card h2 {
      margin: 0;
      color: #b187ff;
      font-size: 2rem;
    }

    .stat-card p {
      margin: 8px 0 0;
      color: #ccc;
    }

    /* Upcoming Events */
    .upcoming-events {
      margin-top: 40px;
      background: #161b22;
      padding: 25px;
      border-radius: 14px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    .upcoming-events h2 {
      color: #fff;
      margin-bottom: 10px;
    }

    .event-list {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-top: 20px;
    }

    .event-card {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #0f1320;
      border: 1px solid #344882ff;
      padding: 15px 20px;
      border-radius: 10px;
      transition: 0.3s;
    }

    .event-card:hover {
      background: #1f2330;
    }

    .event-info {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .event-info img {
      width: 70px;
      height: 70px;
      border-radius: 8px;
      object-fit: cover;
    }

    .event-info h4 {
      margin: 0;
      color: #fff;
    }

    .event-info p {
      margin: 4px 0 0;
      color: #bbb;
      font-size: 0.9rem;
    }

    .tag {
      background: #8a3ffc;
      padding: 4px 10px;
      border-radius: 10px;
      font-size: 0.8rem;
    }

    .register-btn {
      background: #9333ea;
      color: white;
      text-decoration: none;
      padding: 10px 18px;
      border-radius: 8px;
      font-weight: 600;
      transition: background 0.3s ease;
    }

    .register-btn:hover {
      background: #a855f7;
    }

    .view-all {
      display: block;
      text-align: center;
      margin-top: 20px;
      color: #b187ff;
      text-decoration: none;
      font-weight: 600;
    }

    .view-all:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-top">
      <div class="logo">🎉 UniVerse</div>
      <div class="menu">
        <a href="Studentdashboard.php" class="active"><i class="ri-dashboard-line"></i> Dashboard</a>
        <a href="findevents.php"><i class="ri-search-line"></i> Find Events</a>
        <a href="event.php"><i class="ri-calendar-event-line"></i> Register for Events</a>
        <a href="myevents.php"><i class="ri-list-check"></i> My Events</a>
        <a href="feedback.php"><i class="ri-chat-3-line"></i> Feedback</a>
        <a href="profile.php"><i class="ri-user-line"></i> Profile</a>
      </div>
    </div>

    <div class="sidebar-bottom">
      <a href="?logout=true">
        <button class="logout-btn"><i class="ri-logout-box-line"></i> Logout</button>
      </a>
    </div>
  </div>

  <!-- Main -->
  <div class="main">
    <a href="index.php" class="back-home">🏠 Back to Home</a>

    <h1>Welcome back, <?php echo $_SESSION['student_name']; ?>!</h1>
    <p class="subtitle">Here's what's happening with your events</p>

    <div class="quiz-section">
      <h3>🎯 Not sure which events to attend?</h3>
      <p>Answer 5 quick questions and we'll match you with events that fit your interests!</p>
      <a href="findevents.php" class="quiz-link-btn">Find My Perfect Events</a>
    </div>

    <div class="stats">
      <div class="stat-card"><h2>2</h2><p>Registered Events</p></div>
      <div class="stat-card"><h2>2</h2><p>Upcoming Events</p></div>
      <div class="stat-card"><h2>0</h2><p>Attended Events</p></div>
      <div class="stat-card"><h2>33%</h2><p>Participation Rate</p></div>
    </div>

    <!-- Upcoming Events -->
    <div class="upcoming-events">
      <h2>📅 Upcoming Events</h2>
      <p>Discover and register for exciting campus events</p>

      <div class="event-list">
        <?php
          $events = [
            ["Technology", "Annual Tech Fest 2024", "TechFest.jpg", "2024-03-15 at 09:00 AM"],
            ["Cultural", "Cultural Night", "Culturalnight.jpg", "2024-03-20 at 06:00 PM"],
            ["Career", "Career Fair 2024", "Careerfair.jpg", "2024-03-25 at 10:00 AM"],
          ];

          foreach ($events as $event) {
            echo "
              <div class='event-card'>
                <div class='event-info'>
                  <img src='assets/images/{$event[2]}' alt='{$event[1]}'>
                  <div>
                    <h4>{$event[1]}</h4>
                    <p>{$event[3]}</p>
                    <span class='tag'>{$event[0]}</span>
                  </div>
                </div>
                <a href='event.php' class='register-btn'>Register</a>
              </div>
            ";
          }
        ?>
      </div>

      <a href='event.php' class='view-all'>View All Events</a>
    </div>
  </div>

</body>
</html>
