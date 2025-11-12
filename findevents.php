<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Find Events | UniVerse</title>

  <!-- Remixicon for icons -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

  <style>
    /* General Body */
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #0d1117;
      color: #fff;
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
      padding: 20px 0;
      box-sizing: border-box;
      border-right: 1px solid #1f2937;
      position: fixed;
      left: 0;
      top: 0;
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

    /* Sidebar Menu */
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

    /* Sidebar Bottom (Logout) */
    .sidebar-bottom {
      padding: 0 20px;
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
    }

    .logout-btn:hover {
      background-color: #e53935;
    }

    /* Main Content */
    .main-content {
      margin-left: 260px;
      padding: 40px;
      width: 100%;
    }

    h1 {
      color: #f0f6fc;
      font-size: 28px;
      margin-bottom: 8px;
    }

    p.subtitle {
      color: #a1a1aa;
      margin-bottom: 30px;
    }

    /* Quiz Box */
    .quiz-box {
      background: #161b22;
      border-radius: 12px;
      padding: 25px 40px;
      max-width: 700px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
      transition: all 0.3s ease;
    }

    .question-header {
      margin-bottom: 20px;
    }

    .question-header h2 {
      font-size: 22px;
      color: #fff;
      margin: 0 0 5px;
    }

    .question-header p {
      color: #a5a5a5;
      font-size: 15px;
      margin: 0;
    }

    .options label {
      display: block;
      background-color: #1c2128;
      color: #c9d1d9;
      padding: 12px 15px;
      border-radius: 8px;
      margin-bottom: 10px;
      cursor: pointer;
      transition: all 0.3s;
      font-size: 15px;
    }

    .options label:hover {
      background-color: #262b35;
    }

    input[type="radio"] {
      margin-right: 10px;
      accent-color: #7c3aed;
    }

    /* Navigation Buttons */
    .nav-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 25px;
    }

    .btn {
      background-color: #1c1f26;
      color: #a5a5a5;
      border: none;
      padding: 12px 30px;
      font-size: 15px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      background-color: #262b35;
      color: #fff;
    }

    .btn.next {
      background-color: #7c3aed;
      color: white;
    }

    .btn.next:hover {
      background-color: #9f5cff;
    }

    .hidden {
      display: none;
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
        <a href="findevents.php" class="active"><i class="ri-search-line"></i> Find Events</a>
        <a href="event.php"><i class="ri-calendar-event-line"></i> Register for Events</a>
        <a href="myevents.php"><i class="ri-list-check"></i> My Events</a>
        <a href="feedback.php"><i class="ri-chat-3-line"></i> Feedback</a>
        <a href="profile.php"><i class="ri-user-line"></i> Profile</a>
      </div>
    </div>

    <!-- Bottom Section (Logout) -->
    <div class="sidebar-bottom">
      <form action="logout.php" method="POST">
        <button type="submit" class="logout-btn"><i class="ri-logout-box-r-line"></i> Logout</button>
      </form>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h1>🎯 Event Matchmaker</h1>
    <p class="subtitle">Answer 5 quick questions to discover events perfect for you</p>

    <form id="quizForm" class="quiz-box">
      <!-- Question 1 -->
      <div class="question" id="q1">
        <div class="question-header">
          <h2>Question 1 of 5</h2>
          <p>What type of events interest you the most?</p>
        </div>
        <div class="options">
          <label><input type="radio" name="q1" value="Technology">Technology</label>
          <label><input type="radio" name="q1" value="Cultural">Cultural</label>
          <label><input type="radio" name="q1" value="Sports">Sports</label>
          <label><input type="radio" name="q1" value="Workshop">Workshop</label>
          <label><input type="radio" name="q1" value="Career">Career</label>
          <label><input type="radio" name="q1" value="Social">Social</label>
        </div>
      </div>

      <!-- Question 2 -->
      <div class="question hidden" id="q2">
        <div class="question-header">
          <h2>Question 2 of 5</h2>
          <p>What's your main goal when attending an event?</p>
        </div>
        <div class="options">
          <label><input type="radio" name="q2" value="Networking">Networking</label>
          <label><input type="radio" name="q2" value="Learning">Learning</label>
          <label><input type="radio" name="q2" value="Enjoyment">Enjoyment</label>
          <label><input type="radio" name="q2" value="SkillDevelopment">Skill Development</label>
        </div>
      </div>

      <!-- Question 3 -->
      <div class="question hidden" id="q3">
        <div class="question-header">
          <h2>Question 3 of 5</h2>
          <p>What time of day do you prefer for events?</p>
        </div>
        <div class="options">
          <label><input type="radio" name="q3" value="Morning">Morning</label>
          <label><input type="radio" name="q3" value="Afternoon">Afternoon</label>
          <label><input type="radio" name="q3" value="Evening">Evening</label>
        </div>
      </div>

      <!-- Question 4 -->
      <div class="question hidden" id="q4">
        <div class="question-header">
          <h2>Question 4 of 5</h2>
          <p>How do you like to participate in events?</p>
        </div>
        <div class="options">
          <label><input type="radio" name="q4" value="Attendee">Just attend</label>
          <label><input type="radio" name="q4" value="Volunteer">Volunteer</label>
          <label><input type="radio" name="q4" value="Organizer">Help organize</label>
        </div>
      </div>

      <!-- Question 5 -->
      <div class="question hidden" id="q5">
        <div class="question-header">
          <h2>Question 5 of 5</h2>
          <p>What duration suits you best?</p>
        </div>
        <div class="options">
          <label><input type="radio" name="q5" value="Short">1–2 hours</label>
          <label><input type="radio" name="q5" value="Medium">Half-day</label>
          <label><input type="radio" name="q5" value="Full">Full-day</label>
        </div>
      </div>

      <!-- Navigation Buttons -->
      <div class="nav-buttons">
        <button type="button" class="btn prev" id="prevBtn" disabled>Previous</button>
        <button type="button" class="btn next" id="nextBtn">Next</button>
      </div>
    </form>
  </div>

  <!-- Script -->
  <script>
    const questions = document.querySelectorAll('.question');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    let currentQuestion = 0;

    function showQuestion(index) {
      questions.forEach((q, i) => {
        q.classList.toggle('hidden', i !== index);
      });
      prevBtn.disabled = index === 0;
      nextBtn.textContent = index === questions.length - 1 ? "Submit" : "Next";
    }

    nextBtn.addEventListener('click', () => {
      const inputs = questions[currentQuestion].querySelectorAll('input[type="radio"]');
      const checked = Array.from(inputs).some(input => input.checked);
      if (!checked) {
        alert("Please select an answer before continuing.");
        return;
      }

      if (currentQuestion < questions.length - 1) {
        currentQuestion++;
        showQuestion(currentQuestion);
      } else {
        document.getElementById("quizForm").submit();
      }
    });

    prevBtn.addEventListener('click', () => {
      if (currentQuestion > 0) {
        currentQuestion--;
        showQuestion(currentQuestion);
      }
    });

    showQuestion(currentQuestion);
  </script>
</body>
</html>
