<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Events | UniVerse</title>
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

    /* Bottom section */
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

    .main-content h1 {
      font-size: 28px;
      margin-bottom: 5px;
      color: #f0f6fc;
    }

    .main-content p {
      color: #a5a5a5;
      margin-bottom: 25px;
    }

    /* Event Section */
    .event-section {
      background-color: #161b22;
      padding: 25px;
      border-radius: 14px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    .event-section h2 {
      font-size: 20px;
      margin-bottom: 20px;
      color: #b187ff;
    }

    .event-card {
      display: flex;
      background-color: #1c2128;
      border-radius: 12px;
      padding: 15px;
      margin-bottom: 20px;
      align-items: center;
      gap: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
      transition: 0.3s;
    }

    .event-card:hover {
      background-color: #212832;
    }

    .event-card img {
      width: 120px;
      height: 80px;
      border-radius: 10px;
      object-fit: cover;
    }

    .event-details {
      flex: 1;
    }

    .event-details h3 {
      margin: 0 0 5px;
      color: #b187ff;
      font-size: 18px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .event-details p {
      margin: 4px 0;
      color: #ccc;
      font-size: 14px;
    }

    .registered-badge {
      background-color: #8a3ffc;
      color: #fff;
      padding: 4px 10px;
      border-radius: 8px;
      font-size: 12px;
    }

    .status {
      display: inline-block;
      padding: 5px 10px;
      border-radius: 8px;
      font-size: 13px;
      margin-top: 5px;
    }

    .status.attending {
      background-color: #22c55e;
      color: #fff;
    }

    .btn {
      padding: 7px 14px;
      border: none;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
      margin-top: 6px;
      transition: 0.3s;
    }

    .btn-confirm {
      background-color: #22c55e;
      color: #fff;
      margin-right: 8px;
    }

    .btn-confirm:hover {
      background-color: #16a34a;
    }

    .btn-decline {
      background-color: #ef4444;
      color: #fff;
    }

    .btn-decline:hover {
      background-color: #dc2626;
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
        <a href="myevents.php" class="active"><i class="ri-list-check"></i> My Events</a>
        <a href="feedback.php"><i class="ri-chat-3-line"></i> Feedback</a>
        <a href="profile.php"><i class="ri-user-line"></i> Profile</a>
      </div>
    </div>

    <div class="sidebar-bottom">
      <form action="logout.php" method="POST">
        <button type="submit" class="logout-btn"><i class="ri-logout-box-line"></i> Logout</button>
      </form>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h1>My Events</h1>
    <p>View and manage your registered events</p>

    <div class="event-section">
      <h2>Registered as Participant</h2>

      <div class="event-card">
        <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6" alt="Tech Fest">
        <div class="event-details">
          <h3>Annual Tech Fest 2024 <span class="registered-badge">Registered</span></h3>
          <p>📅 2024-03-15 | 🕘 09:00 AM | 📍 Main Auditorium</p>
          <p>👥 342/500 registered</p>
          <span class="status attending">✔ Attending</span>
        </div>
      </div>

      <div class="event-card">
        <img src="https://images.unsplash.com/photo-1508606572321-901ea443707f" alt="Cultural Night">
        <div class="event-details">
          <h3>Cultural Night <span class="registered-badge">Registered</span></h3>
          <p>📅 2024-03-20 | 🕕 06:00 PM | 📍 Open Air Theatre</p>
          <p>👥 567/800 registered</p>
          <button class="btn btn-confirm">✔ Confirm</button>
          <button class="btn btn-decline">✖ Decline</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
