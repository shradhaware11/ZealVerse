<<<<<<< Updated upstream
<<<<<<< Updated upstream
<?php
session_start();

// Demo user data (replace with database in real project)
if (!isset($_SESSION['student_name'])) {
  $_SESSION['student_name'] = "Nikita's Team";
  $_SESSION['email'] = "nikitautekar101@gmail.com";
  $_SESSION['phone'] = "9822620989";
  $_SESSION['zprn'] = "124BT10175";
}

// Handle profile update (POST request)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $_SESSION['student_name'] = $_POST['fullname'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['phone'] = $_POST['phone'];
  $message = "✅ Profile updated successfully!";
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
  <title>Profile | UniVerse</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #0b0e14;
      color: #fff;
      display: flex;
      margin: 0;
    }

    /* Sidebar */
    .sidebar {
      width: 240px;
      background-color: #141823;
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
      display: flex;
      align-items: center;
      gap: 10px;
      color: #ccc;
      padding: 10px;
      text-decoration: none;
      border-radius: 6px;
      transition: 0.3s;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #7b2ff7;
      color: white;
    }
    .logout {
      margin-top: auto;
      background: #ff3b3b;
      text-align: center;
      border-radius: 6px;
    }
    .logout:hover { background: #e03232; }

    /* Main */
    .main {
      margin-left: 260px;
      padding: 40px;
      width: calc(100% - 260px);
      background-color: #0f1320;
      min-height: 100vh;
      position: relative;
    }

    .back-home {
      position: absolute;
      top: 20px;
      right: 40px;
      text-decoration: none;
      color: #fff;
      font-weight: 600;
    }
    .back-home:hover { color: #b88cff; }

    h1 {
      font-size: 1.8rem;
      margin-bottom: 8px;
    }
    .subtitle {
      color: #bbb;
      margin-bottom: 30px;
    }

    /* Profile Card */
    .profile-card {
      background: #1c1f2b;
      border-radius: 12px;
      padding: 30px;
      max-width: 700px;
    }

    .profile-header {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-bottom: 25px;
    }
    .profile-header i {
      font-size: 2.5rem;
      background-color: #7b2ff7;
      padding: 18px;
      border-radius: 50%;
    }
    .profile-header h2 {
      margin: 0;
      font-size: 1.4rem;
    }
    .profile-header span {
      color: #9ba0b3;
      font-size: 0.9rem;
    }

    /* Form */
    form label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
    }
    .input-group {
      position: relative;
      margin-bottom: 20px;
    }
    .input-group i {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
    }
    .input-group input {
      width: 100%;
      padding: 12px 12px 12px 40px;
      border: none;
      border-radius: 6px;
      background-color: #111522;
      color: #fff;
      outline: none;
      font-size: 0.95rem;
    }
    .input-group input:focus {
      border: 1px solid #7b2ff7;
    }

    .note {
      color: #8f9bb3;
      font-size: 0.8rem;
      margin-top: -10px;
      margin-bottom: 20px;
    }

    button {
      width: 100%;
      background: #7b2ff7;
      color: white;
      font-size: 1rem;
      font-weight: 600;
      padding: 12px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background: #6825d8;
    }

    .message {
      margin-bottom: 15px;
      background: #2a2f40;
      padding: 10px 15px;
      border-radius: 8px;
      color: #77ff77;
      font-size: 0.9rem;
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
    <a href="feedback.php"><i class="fa-solid fa-comment"></i> Feedback</a>
    <a href="profile.php" class="active"><i class="fa-solid fa-user"></i> Profile</a>
    <a href="?logout=true" class="logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>

  <!-- Main Content -->
  <div class="main">
    <a href="index.php" class="back-home">Back to Home</a>
    <h1>My Profile</h1>
    <p class="subtitle">Manage your personal information</p>

    <div class="profile-card">
      <div class="profile-header">
        <i class="fa-solid fa-user"></i>
        <div>
          <h2><?= htmlspecialchars($_SESSION['student_name']); ?></h2>
          <span>student</span>
        </div>
      </div>

      <?php if (!empty($message)) echo "<div class='message'>$message</div>"; ?>

      <form method="POST">
  <label>Full Name</label>
  <div class="input-group">
    <i class="fa-solid fa-user"></i>
    <input type="text" 
           name="fullname" 
           value="<?= isset($_SESSION['student_name']) ? htmlspecialchars($_SESSION['student_name']) : ''; ?>" 
           required>
  </div>

  <label>Email Address</label>
  <div class="input-group">
    <i class="fa-solid fa-envelope"></i>
    <input type="email" 
           name="email" 
           value="<?= isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>" 
           required>
  </div>

  <label>Phone Number</label>
  <div class="input-group">
    <i class="fa-solid fa-phone"></i>
    <input type="text" 
           name="phone" 
           value="<?= isset($_SESSION['phone']) ? htmlspecialchars($_SESSION['phone']) : ''; ?>" 
           required>
  </div>

  <label>ZPRN</label>
  <div class="input-group">
    <i class="fa-solid fa-id-card"></i>
    <input type="text" 
           name="zprn" 
           value="<?= isset($_SESSION['zprn']) ? htmlspecialchars($_SESSION['zprn']) : ''; ?>" 
           readonly>
  </div>
  <p class="note">ZPRN cannot be changed</p>

  <button type="submit">Update Profile</button>
</form>

    </div>
  </div>

</body>
</html>
=======
=======
>>>>>>> Stashed changes
<?php
session_start();

// Demo user data (replace with database in real project)
if (!isset($_SESSION['student_name'])) {
  $_SESSION['student_name'] = "Nikita's Team";
  $_SESSION['email'] = "nikitautekar101@gmail.com";
  $_SESSION['phone'] = "9822620989";
  $_SESSION['zprn'] = "124BT10175";
}

// Handle profile update (POST request)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $_SESSION['student_name'] = $_POST['fullname'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['phone'] = $_POST['phone'];
  $message = "✅ Profile updated successfully!";
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
  <title>Profile | UniVerse</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #0b0e14;
      color: #fff;
      display: flex;
      margin: 0;
    }

    /* Sidebar */
    .sidebar {
      width: 240px;
      background-color: #141823;
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
      display: flex;
      align-items: center;
      gap: 10px;
      color: #ccc;
      padding: 10px;
      text-decoration: none;
      border-radius: 6px;
      transition: 0.3s;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #7b2ff7;
      color: white;
    }
    .logout {
      margin-top: auto;
      background: #ff3b3b;
      text-align: center;
      border-radius: 6px;
    }
    .logout:hover { background: #e03232; }

    /* Main */
    .main {
      margin-left: 260px;
      padding: 40px;
      width: calc(100% - 260px);
      background-color: #0f1320;
      min-height: 100vh;
      position: relative;
    }

    .back-home {
      position: absolute;
      top: 20px;
      right: 40px;
      text-decoration: none;
      color: #fff;
      font-weight: 600;
    }
    .back-home:hover { color: #b88cff; }

    h1 {
      font-size: 1.8rem;
      margin-bottom: 8px;
    }
    .subtitle {
      color: #bbb;
      margin-bottom: 30px;
    }

    /* Profile Card */
    .profile-card {
      background: #1c1f2b;
      border-radius: 12px;
      padding: 30px;
      max-width: 700px;
    }

    .profile-header {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-bottom: 25px;
    }
    .profile-header i {
      font-size: 2.5rem;
      background-color: #7b2ff7;
      padding: 18px;
      border-radius: 50%;
    }
    .profile-header h2 {
      margin: 0;
      font-size: 1.4rem;
    }
    .profile-header span {
      color: #9ba0b3;
      font-size: 0.9rem;
    }

    /* Form */
    form label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
    }
    .input-group {
      position: relative;
      margin-bottom: 20px;
    }
    .input-group i {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
    }
    .input-group input {
      width: 100%;
      padding: 12px 12px 12px 40px;
      border: none;
      border-radius: 6px;
      background-color: #111522;
      color: #fff;
      outline: none;
      font-size: 0.95rem;
    }
    .input-group input:focus {
      border: 1px solid #7b2ff7;
    }

    .note {
      color: #8f9bb3;
      font-size: 0.8rem;
      margin-top: -10px;
      margin-bottom: 20px;
    }

    button {
      width: 100%;
      background: #7b2ff7;
      color: white;
      font-size: 1rem;
      font-weight: 600;
      padding: 12px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background: #6825d8;
    }

    .message {
      margin-bottom: 15px;
      background: #2a2f40;
      padding: 10px 15px;
      border-radius: 8px;
      color: #77ff77;
      font-size: 0.9rem;
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
    <a href="feedback.php"><i class="fa-solid fa-comment"></i> Feedback</a>
    <a href="profile.php" class="active"><i class="fa-solid fa-user"></i> Profile</a>
    <a href="?logout=true" class="logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>

  <!-- Main Content -->
  <div class="main">
    <a href="index.php" class="back-home">Back to Home</a>
    <h1>My Profile</h1>
    <p class="subtitle">Manage your personal information</p>

    <div class="profile-card">
      <div class="profile-header">
        <i class="fa-solid fa-user"></i>
        <div>
          <h2><?= htmlspecialchars($_SESSION['student_name']); ?></h2>
          <span>student</span>
        </div>
      </div>

      <?php if (!empty($message)) echo "<div class='message'>$message</div>"; ?>

      <form method="POST">
  <label>Full Name</label>
  <div class="input-group">
    <i class="fa-solid fa-user"></i>
    <input type="text" 
           name="fullname" 
           value="<?= isset($_SESSION['student_name']) ? htmlspecialchars($_SESSION['student_name']) : ''; ?>" 
           required>
  </div>

  <label>Email Address</label>
  <div class="input-group">
    <i class="fa-solid fa-envelope"></i>
    <input type="email" 
           name="email" 
           value="<?= isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>" 
           required>
  </div>

  <label>Phone Number</label>
  <div class="input-group">
    <i class="fa-solid fa-phone"></i>
    <input type="text" 
           name="phone" 
           value="<?= isset($_SESSION['phone']) ? htmlspecialchars($_SESSION['phone']) : ''; ?>" 
           required>
  </div>

  <label>ZPRN</label>
  <div class="input-group">
    <i class="fa-solid fa-id-card"></i>
    <input type="text" 
           name="zprn" 
           value="<?= isset($_SESSION['zprn']) ? htmlspecialchars($_SESSION['zprn']) : ''; ?>" 
           readonly>
  </div>
  <p class="note">ZPRN cannot be changed</p>

  <button type="submit">Update Profile</button>
</form>

    </div>
  </div>

</body>
</html>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
