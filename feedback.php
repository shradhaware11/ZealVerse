<?php
session_start();

// Demo student name if not logged in
if (!isset($_SESSION['student_name'])) {
  $_SESSION['student_name'] = "Nikita's Team";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Feedback | UniVerse</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #0d1117;
      color: #ffffff;
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

    /* Logout button */
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

    /* Main */
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

    /* Feedback Card */
    .feedback-card {
      background: #161b22;
      padding: 25px;
      border-radius: 14px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
      max-width: 700px;
    }

    .feedback-header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 20px;
    }

    .feedback-header i {
      font-size: 1.5rem;
      color: #b187ff;
    }

    .feedback-header h2 {
      font-size: 1.3rem;
      margin: 0;
    }

    .feedback-header p {
      margin: 2px 0 0;
      color: #aaa;
      font-size: 0.9rem;
    }

    label {
      display: block;
      margin: 15px 0 5px;
      font-weight: 500;
    }

    select, textarea {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: #141823;
      color: #fff;
      resize: none;
      font-family: 'Poppins', sans-serif;
    }

    select option {
      background: #1c1f2b;
      color: #fff;
    }

    .submit-btn {
      width: 100%;
      margin-top: 20px;
      background: #8a3ffc;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      padding: 12px;
      cursor: pointer;
      transition: 0.3s;
    }

    .submit-btn:hover {
      background: #6e32d9;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-top">
      <div class="logo">🎉 UniVerse</div>
      <div class="menu">
        <a href="Studentdashboard.php"><i class="ri-dashboard-line"></i> Dashboard</a>
        <a href="findevents.php"><i class="ri-search-line"></i> Find Events</a>
        <a href="event.php"><i class="ri-calendar-event-line"></i> Register for Events</a>
        <a href="myevents.php"><i class="ri-list-check"></i> My Events</a>
        <a href="feedback.php" class="active"><i class="ri-chat-3-line"></i> Feedback</a>
        <a href="profile.php"><i class="ri-user-line"></i> Profile</a>
      </div>
    </div>

    <div class="sidebar-bottom">
      <form action="logout.php" method="POST">
        <button type="submit" class="logout-btn">
          <i class="ri-logout-box-line"></i> Logout
        </button>
      </form>
    </div>
  </div>

  <!-- Main Section -->
  <div class="main">
    <a href="index.php" class="back-home">Back to Home</a>

    <h1>Event Feedback</h1>
    <p class="subtitle">Share your experience about events you've attended</p>

    <div class="feedback-card">
      <div class="feedback-header">
        <i class="ri-message-3-line"></i>
        <div>
          <h2>Submit Feedback</h2>
          <p>Help us improve future events</p>
        </div>
      </div>

      <form id="feedbackForm">
        <label for="event">Select Event</label>
        <select id="event" name="event" required>
          <option value="">Choose an event</option>
          <option value="Tech Conference">Tech Conference</option>
          <option value="Cultural Fest">Cultural Fest</option>
          <option value="Sports Meet">Sports Meet</option>
          <option value="Workshop">Workshop</option>
        </select>

        <label for="rating">Rating</label>
        <select id="rating" name="rating" required>
          <option value="">Rate your experience</option>
          <option value="5">⭐⭐⭐⭐⭐ Excellent</option>
          <option value="4">⭐⭐⭐⭐ Good</option>
          <option value="3">⭐⭐⭐ Average</option>
          <option value="2">⭐⭐ Poor</option>
          <option value="1">⭐ Very Poor</option>
        </select>

        <label for="feedback">Your Feedback</label>
        <textarea id="feedback" name="feedback" rows="5" placeholder="Tell us about your experience..." required></textarea>

        <button type="submit" class="submit-btn">Submit Feedback</button>
      </form>
    </div>
  </div>

  <script>
    document.getElementById('feedbackForm').onsubmit = function(e) {
      e.preventDefault();
      alert('Thank you for your feedback!');
      this.reset();
    }
  </script>

</body>
</html>
