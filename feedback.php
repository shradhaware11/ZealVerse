<<<<<<< Updated upstream
<<<<<<< Updated upstream
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* ===== Base ===== */
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: #0b0e14;
      color: #fff;
      display: flex;
    }

    /* ===== Sidebar ===== */
    .sidebar {
      width: 230px;
      background: #141823;
      height: 100vh;
      display: flex;
      flex-direction: column;
      padding: 20px;
      position: fixed;
    }

    .sidebar h2 {
      color: #b88cff;
      margin-bottom: 40px;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #ccc;
      padding: 10px;
      border-radius: 6px;
      margin: 4px 0;
      text-decoration: none;
      transition: 0.3s;
    }

    .sidebar a:hover, .sidebar a.active {
      background: #7b2ff7;
      color: #fff;
    }

    .logout {
      margin-top: auto;
      background: #ff3b3b;
      text-align: center;
      border-radius: 6px;
      padding: 10px;
      color: white;
      text-decoration: none;
      transition: 0.3s;
    }

    .logout:hover { background: #e03232; }

    /* ===== Main Area ===== */
    .main {
      margin-left: 250px;
      padding: 30px 40px;
      flex: 1;
      background: #0f1320;
      min-height: 100vh;
      position: relative;
    }

    /* ===== Back to Home ===== */
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

    /* ===== Header ===== */
    .main h1 {
      font-size: 1.8rem;
      margin-bottom: 10px;
      color: #fff;
    }

    .main p.subtitle {
      color: #bbb;
      margin-bottom: 30px;
    }

    /* ===== Feedback Card ===== */
    .feedback-card {
      background: #1c2135;
      border-radius: 12px;
      padding: 30px;
      max-width: 700px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    .feedback-header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 20px;
    }

    .feedback-header i {
      font-size: 1.5rem;
      color: #b88cff;
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
      font-family: "Poppins", sans-serif;
    }

    select option {
      background: #1c1f2b;
      color: #fff;
    }

    button.submit-btn {
      width: 100%;
      margin-top: 20px;
      background: #7b2ff7;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      padding: 12px;
      cursor: pointer;
      transition: 0.3s;
    }

    button.submit-btn:hover {
      background: #6825d8;
    }

    /* ===== Student Info at Bottom of Sidebar ===== */
    .student-info {
      margin-top: auto;
      padding-top: 15px;
      border-top: 1px solid rgba(255,255,255,0.1);
      font-size: 0.9rem;
      color: #bbb;
    }

    .student-info p {
      margin: 2px 0;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>🎉 UniVerse</h2>
    <a href="Studentdashboard.php"><i class="fa-solid fa-gauge"></i> Dashboard</a>
    <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Find Events</a>
    <a href="#"><i class="fa-solid fa-calendar-plus"></i> Register for Events</a>
    <a href="#"><i class="fa-solid fa-list-check"></i> My Events</a>
    <a href="feedback.php" class="active"><i class="fa-solid fa-comment"></i> Feedback</a>
    <a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a>

    <div class="student-info">
      <p><strong><?php echo $_SESSION['student_name']; ?></strong></p>
      <p>nikitautekar101@gmail.com</p>
    </div>

    <a href="?logout=true" class="logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>

  <!-- Main Section -->
  <div class="main">
    <a href="index.php" class="back-home">Back to Home</a>

    <h1>Event Feedback</h1>
    <p class="subtitle">Share your experience about events you've attended</p>

    <div class="feedback-card">
      <div class="feedback-header">
        <i class="fa-solid fa-message"></i>
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
=======
=======
>>>>>>> Stashed changes
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* ===== Base ===== */
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: #0b0e14;
      color: #fff;
      display: flex;
    }

    /* ===== Sidebar ===== */
    .sidebar {
      width: 230px;
      background: #141823;
      height: 100vh;
      display: flex;
      flex-direction: column;
      padding: 20px;
      position: fixed;
    }

    .sidebar h2 {
      color: #b88cff;
      margin-bottom: 40px;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #ccc;
      padding: 10px;
      border-radius: 6px;
      margin: 4px 0;
      text-decoration: none;
      transition: 0.3s;
    }

    .sidebar a:hover, .sidebar a.active {
      background: #7b2ff7;
      color: #fff;
    }

    .logout {
      margin-top: auto;
      background: #ff3b3b;
      text-align: center;
      border-radius: 6px;
      padding: 10px;
      color: white;
      text-decoration: none;
      transition: 0.3s;
    }

    .logout:hover { background: #e03232; }

    /* ===== Main Area ===== */
    .main {
      margin-left: 250px;
      padding: 30px 40px;
      flex: 1;
      background: #0f1320;
      min-height: 100vh;
      position: relative;
    }

    /* ===== Back to Home ===== */
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

    /* ===== Header ===== */
    .main h1 {
      font-size: 1.8rem;
      margin-bottom: 10px;
      color: #fff;
    }

    .main p.subtitle {
      color: #bbb;
      margin-bottom: 30px;
    }

    /* ===== Feedback Card ===== */
    .feedback-card {
      background: #1c2135;
      border-radius: 12px;
      padding: 30px;
      max-width: 700px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    .feedback-header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 20px;
    }

    .feedback-header i {
      font-size: 1.5rem;
      color: #b88cff;
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
      font-family: "Poppins", sans-serif;
    }

    select option {
      background: #1c1f2b;
      color: #fff;
    }

    button.submit-btn {
      width: 100%;
      margin-top: 20px;
      background: #7b2ff7;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      padding: 12px;
      cursor: pointer;
      transition: 0.3s;
    }

    button.submit-btn:hover {
      background: #6825d8;
    }

    /* ===== Student Info at Bottom of Sidebar ===== */
    .student-info {
      margin-top: auto;
      padding-top: 15px;
      border-top: 1px solid rgba(255,255,255,0.1);
      font-size: 0.9rem;
      color: #bbb;
    }

    .student-info p {
      margin: 2px 0;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>🎉 UniVerse</h2>
    <a href="Studentdashboard.php"><i class="fa-solid fa-gauge"></i> Dashboard</a>
    <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Find Events</a>
    <a href="#"><i class="fa-solid fa-calendar-plus"></i> Register for Events</a>
    <a href="#"><i class="fa-solid fa-list-check"></i> My Events</a>
    <a href="feedback.php" class="active"><i class="fa-solid fa-comment"></i> Feedback</a>
    <a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a>
<a href="myevents.php"><i class="fa-solid fa-list-check"></i> My Events</a>
    <div class="student-info">
      <p><strong><?php echo $_SESSION['student_name']; ?></strong></p>
      <p>nikitautekar101@gmail.com</p>
    </div>

    <a href="?logout=true" class="logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>

  <!-- Main Section -->
  <div class="main">
    <a href="index.php" class="back-home">Back to Home</a>

    <h1>Event Feedback</h1>
    <p class="subtitle">Share your experience about events you've attended</p>

    <div class="feedback-card">
      <div class="feedback-header">
        <i class="fa-solid fa-message"></i>
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
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
