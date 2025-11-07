<<<<<<< Updated upstream
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #0b0e14;
      color: #fff;
      margin: 0;
      display: flex;
    }

    /* Sidebar */
    .sidebar {
      width: 230px;
      background: #141823;
      height: 100vh;
      padding: 20px;
      display: flex;
      flex-direction: column;
      position: fixed;
    }
    .sidebar h2 {
      color: #b88cff;
      margin-bottom: 30px;
    }
    .sidebar a {
      display: block;
      color: #ccc;
      padding: 10px;
      border-radius: 6px;
      margin: 5px 0;
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
      padding: 10px;
      border-radius: 6px;
    }
    .logout:hover { background: #e03232; }

    /* Main Dashboard */
    .main {
      margin-left: 250px;
      padding: 30px;
      width: calc(100% - 250px);
      position: relative;
    }
    h1 {
      font-size: 1.8rem;
    }
    .welcome {
      margin-bottom: 10px;
    }

    /* ===== BACK TO HOME LINK ===== */
    .back-home {
      position: absolute;
      top: 20px;
      right: 30px;
      color: white;
      text-decoration: none;
      font-weight: 600;
      font-size: 0.95rem;
      transition: 0.3s;
    }
    .back-home:hover {
      color: #b88cff;
      text-decoration: underline;
    }

    /* Matchmaker Section */
    .quiz-section {
      background: #1c1f2b;
      padding: 20px;
      border-radius: 12px;
      margin: 20px 0;
    }
    .quiz-section button {
      background: #7b2ff7;
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }
    .quiz-section button:hover { background: #6825d8; }

    /* Stats */
    .stats {
      display: flex;
      gap: 20px;
      margin-top: 20px;
    }
    .stat-card {
      background: #141823;
      flex: 1;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
    }

    /* Quiz Modal */
    .modal {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.8);
      justify-content: center;
      align-items: center;
    }
    .modal-content {
      background: #1c1f2b;
      padding: 30px;
      border-radius: 12px;
      width: 90%;
      max-width: 600px;
    }
    .question {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 8px;
      cursor: pointer;
    }
    .close-btn {
      float: right;
      color: #aaa;
      font-size: 22px;
      cursor: pointer;
    }
    .close-btn:hover { color: white; }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>🎉 UniVerse</h2>
    <a href="Studentdashboard.php" class="active"><i class="fa-solid fa-gauge"></i> Dashboard</a>
    <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Find Events</a>
    <a href="#"><i class="fa-solid fa-calendar-plus"></i> Register for Events</a>
    <a href="#"><i class="fa-solid fa-list-check"></i> My Events</a>
    <a href="feedback.php"><i class="fa-solid fa-comment"></i> Feedback</a>
    <a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a>
    <a href="?logout=true" class="logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>


  <!-- Main Content -->
  <div class="main">
    <!-- Back to Home link -->
    <a href="index.php" class="back-home">🏠 Back to Home</a>

    <h1 class="welcome">Welcome back, <?php echo $_SESSION['student_name']; ?>!</h1>
    <p>Here's what's happening with your events</p>

    <div class="quiz-section">
      <h3>🎯 Not sure which events to attend?</h3>
      <p>Answer 5 quick questions and we'll match you with events that fit your interests!</p>
      <button id="openQuizBtn">Find My Perfect Events</button>
    </div>

    <div class="stats">
      <div class="stat-card"><h2>2</h2><p>Registered Events</p></div>
      <div class="stat-card"><h2>2</h2><p>Upcoming Events</p></div>
      <div class="stat-card"><h2>0</h2><p>Attended Events</p></div>
      <div class="stat-card"><h2>33%</h2><p>Participation Rate</p></div>
    </div>
  </div>

  <!-- Quiz Modal -->
  <div class="modal" id="quizModal">
    <div class="modal-content">
      <span class="close-btn" id="closeQuiz">&times;</span>
      <h2>Event Matchmaker Quiz</h2>
      <form id="quizForm">
        <div class="question">
          <p>1. What type of events interest you the most?</p>
          <label><input type="radio" name="q1" value="Tech"> Tech Events</label>
          <label><input type="radio" name="q1" value="Cultural"> Cultural</label>
          <label><input type="radio" name="q1" value="Sports"> Sports</label>
          <label><input type="radio" name="q1" value="Workshops"> Workshops</label>
        </div>

        <div class="question">
          <p>2. What's your primary goal for attending events?</p>
          <label><input type="radio" name="q2" value="Networking"> Networking</label>
          <label><input type="radio" name="q2" value="Learning"> Learning</label>
          <label><input type="radio" name="q2" value="Fun"> Fun</label>
          <label><input type="radio" name="q2" value="Skill"> Skill Development</label>
        </div>

        <div class="question">
          <p>3. What time of day do you prefer for events?</p>
          <label><input type="radio" name="q3" value="Morning"> Morning</label>
          <label><input type="radio" name="q3" value="Afternoon"> Afternoon</label>
          <label><input type="radio" name="q3" value="Evening"> Evening</label>
        </div>

        <div class="question">
          <p>4. How actively do you want to participate?</p>
          <label><input type="radio" name="q4" value="Attend"> Just Attend</label>
          <label><input type="radio" name="q4" value="Volunteer"> Volunteer</label>
          <label><input type="radio" name="q4" value="Organize"> Organize</label>
        </div>

        <div class="question">
          <p>5. What's your preferred event duration?</p>
          <label><input type="radio" name="q5" value="Short"> 1–2 hours</label>
          <label><input type="radio" name="q5" value="Medium"> Half-day</label>
          <label><input type="radio" name="q5" value="Full"> Full-day</label>
        </div>

        <button type="submit">Submit Quiz</button>
      </form>
    </div>
  </div>

  <script>
    const quizModal = document.getElementById('quizModal');
    const openQuizBtn = document.getElementById('openQuizBtn');
    const closeQuiz = document.getElementById('closeQuiz');
    const quizForm = document.getElementById('quizForm');

    openQuizBtn.onclick = () => quizModal.style.display = 'flex';
    closeQuiz.onclick = () => quizModal.style.display = 'none';
    window.onclick = (e) => { if (e.target == quizModal) quizModal.style.display = 'none'; }

    quizForm.onsubmit = (e) => {
      e.preventDefault();
      alert("Thanks for completing the quiz! We'll recommend events soon!");
      quizModal.style.display = 'none';
    };
  </script>
</body>
</html>
=======
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #0b0e14;
      color: #fff;
      margin: 0;
      display: flex;
    }

    /* Sidebar */
    .sidebar {
      width: 230px;
      background: #141823;
      height: 100vh;
      padding: 20px;
      display: flex;
      flex-direction: column;
      position: fixed;
    }
    .sidebar h2 {
      color: #b88cff;
      margin-bottom: 30px;
    }
    .sidebar a {
      display: block;
      color: #ccc;
      padding: 10px;
      border-radius: 6px;
      margin: 5px 0;
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
      padding: 10px;
      border-radius: 6px;
    }
    .logout:hover { background: #e03232; }

    /* Main Dashboard */
    .main {
      margin-left: 250px;
      padding: 30px;
      width: calc(100% - 250px);
      position: relative;
    }
    h1 {
      font-size: 1.8rem;
    }
    .welcome {
      margin-bottom: 10px;
    }

    /* ===== BACK TO HOME LINK ===== */
    .back-home {
      position: absolute;
      top: 20px;
      right: 30px;
      color: white;
      text-decoration: none;
      font-weight: 600;
      font-size: 0.95rem;
      transition: 0.3s;
    }
    .back-home:hover {
      color: #b88cff;
      text-decoration: underline;
    }

    /* Matchmaker Section */
    .quiz-section {
      background: #1c1f2b;
      padding: 20px;
      border-radius: 12px;
      margin: 20px 0;
    }
    .quiz-section button {
      background: #7b2ff7;
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }
    .quiz-section button:hover { background: #6825d8; }

    /* Stats */
    .stats {
      display: flex;
      gap: 20px;
      margin-top: 20px;
    }
    .stat-card {
      background: #141823;
      flex: 1;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
    }

    /* Quiz Modal */
    .modal {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.8);
      justify-content: center;
      align-items: center;
    }
    .modal-content {
      background: #1c1f2b;
      padding: 30px;
      border-radius: 12px;
      width: 90%;
      max-width: 600px;
    }
    .question {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 8px;
      cursor: pointer;
    }
    .close-btn {
      float: right;
      color: #aaa;
      font-size: 22px;
      cursor: pointer;
    }
    .close-btn:hover { color: white; }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>🎉 UniVerse</h2>
    <a href="Studentdashboard.php" class="active"><i class="fa-solid fa-gauge"></i> Dashboard</a>
    <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Find Events</a>
    <a href="#"><i class="fa-solid fa-calendar-plus"></i> Register for Events</a>

    <!-- ✅ Added hyperlink to My Events page -->
    <a href="myevents.php"><i class="fa-solid fa-list-check"></i> My Events</a>

    <a href="feedback.php"><i class="fa-solid fa-comment"></i> Feedback</a>
    <a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a>
    <a href="?logout=true" class="logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>

  <!-- Main Content -->
  <div class="main">
    <!-- Back to Home link -->
    <a href="index.php" class="back-home">🏠 Back to Home</a>

    <h1 class="welcome">Welcome back, <?php echo $_SESSION['student_name']; ?>!</h1>
    <p>Here's what's happening with your events</p>

    <div class="quiz-section">
      <h3>🎯 Not sure which events to attend?</h3>
      <p>Answer 5 quick questions and we'll match you with events that fit your interests!</p>
      <button id="openQuizBtn">Find My Perfect Events</button>
    </div>

    <div class="stats">
      <div class="stat-card"><h2>2</h2><p>Registered Events</p></div>
      <div class="stat-card"><h2>2</h2><p>Upcoming Events</p></div>
      <div class="stat-card"><h2>0</h2><p>Attended Events</p></div>
      <div class="stat-card"><h2>33%</h2><p>Participation Rate</p></div>
    </div>
  </div>

  <!-- Quiz Modal -->
  <div class="modal" id="quizModal">
    <div class="modal-content">
      <span class="close-btn" id="closeQuiz">&times;</span>
      <h2>Event Matchmaker Quiz</h2>
      <form id="quizForm">
        <div class="question">
          <p>1. What type of events interest you the most?</p>
          <label><input type="radio" name="q1" value="Tech"> Tech Events</label>
          <label><input type="radio" name="q1" value="Cultural"> Cultural</label>
          <label><input type="radio" name="q1" value="Sports"> Sports</label>
          <label><input type="radio" name="q1" value="Workshops"> Workshops</label>
        </div>

        <div class="question">
          <p>2. What's your primary goal for attending events?</p>
          <label><input type="radio" name="q2" value="Networking"> Networking</label>
          <label><input type="radio" name="q2" value="Learning"> Learning</label>
          <label><input type="radio" name="q2" value="Fun"> Fun</label>
          <label><input type="radio" name="q2" value="Skill"> Skill Development</label>
        </div>

        <div class="question">
          <p>3. What time of day do you prefer for events?</p>
          <label><input type="radio" name="q3" value="Morning"> Morning</label>
          <label><input type="radio" name="q3" value="Afternoon"> Afternoon</label>
          <label><input type="radio" name="q3" value="Evening"> Evening</label>
        </div>

        <div class="question">
          <p>4. How actively do you want to participate?</p>
          <label><input type="radio" name="q4" value="Attend"> Just Attend</label>
          <label><input type="radio" name="q4" value="Volunteer"> Volunteer</label>
          <label><input type="radio" name="q4" value="Organize"> Organize</label>
        </div>

        <div class="question">
          <p>5. What's your preferred event duration?</p>
          <label><input type="radio" name="q5" value="Short"> 1–2 hours</label>
          <label><input type="radio" name="q5" value="Medium"> Half-day</label>
          <label><input type="radio" name="q5" value="Full"> Full-day</label>
        </div>

        <button type="submit">Submit Quiz</button>
      </form>
    </div>
  </div>

  <script>
    const quizModal = document.getElementById('quizModal');
    const openQuizBtn = document.getElementById('openQuizBtn');
    const closeQuiz = document.getElementById('closeQuiz');
    const quizForm = document.getElementById('quizForm');

    openQuizBtn.onclick = () => quizModal.style.display = 'flex';
    closeQuiz.onclick = () => quizModal.style.display = 'none';
    window.onclick = (e) => { if (e.target == quizModal) quizModal.style.display = 'none'; }

    quizForm.onsubmit = (e) => {
      e.preventDefault();
      alert("Thanks for completing the quiz! We'll recommend events soon!");
      quizModal.style.display = 'none';
    };
  </script>
</body>
</html>
>>>>>>> Stashed changes
