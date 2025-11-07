<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Events | UniVerse</title>
  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      display: flex;
      background-color: #0e1420;
      color: #ffffff;
    }

    /* Sidebar */
    .sidebar {
      width: 240px;
      background-color: #0c0f1a;
      height: 100vh;
      padding: 25px 15px;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .sidebar h2 {
      color: #b187ff;
      font-size: 22px;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .sidebar a {
      text-decoration: none;
      color: #b5b5b5;
      padding: 10px 14px;
      border-radius: 8px;
      transition: 0.3s;
      font-size: 15px;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #8a3ffc;
      color: white;
    }

    /* Main content */
    .main-content {
      flex: 1;
      padding: 30px 40px;
    }

    .main-content h1 {
      font-size: 28px;
      margin-bottom: 5px;
    }

    .main-content p {
      color: #a5a5a5;
      margin-bottom: 25px;
    }

    /* Event section */
    .event-section {
      background-color: #111a2b;
      padding: 25px;
      border-radius: 14px;
    }

    .event-section h2 {
      font-size: 20px;
      margin-bottom: 20px;
      color: #b187ff;
    }

    .event-card {
      display: flex;
      background-color: #1a2235;
      border-radius: 12px;
      padding: 15px;
      margin-bottom: 20px;
      align-items: center;
      gap: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
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
    }

    .event-details p {
      margin: 4px 0;
      color: #ccc;
      font-size: 14px;
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

    .registered-badge {
      background-color: #8a3ffc;
      color: #fff;
      padding: 4px 10px;
      border-radius: 8px;
      font-size: 12px;
      float: right;
    }

    /* Buttons */
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
    <h2>🎉 UniVerse</h2>
    <a href="#">🏠 Dashboard</a>
    <a href="#">🔍 Find Events</a>
    <a href="#">📅 Register for Events</a>
    <a href="#" class="active">🗓 My Events</a>
    <a href="#">💬 Feedback</a>
    <a href="#">👤 Profile</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h1>My Events</h1>
    <p>View and manage your registered events</p>

    <div class="event-section">
      <h2>Registered as Participant</h2>

      <!-- Event 1 -->
      <div class="event-card">
        <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6" alt="Tech Fest">
        <div class="event-details">
          <h3>Annual Tech Fest 2024 <span class="registered-badge">Registered</span></h3>
          <p>📅 2024-03-15 | 🕘 09:00 AM | 📍 Main Auditorium</p>
          <p>👥 342/500 registered</p>
          <span class="status attending">✔ Attending</span>
        </div>
      </div>

      <!-- Event 2 -->
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
