<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | ZealVerse</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #0e0e12;
      color: #fff;
      margin: 0;
      padding: 0;
    }

    header {
      background: #7b2ff7;
      padding: 15px 0;
      text-align: center;
      color: #fff;
      font-size: 22px;
      font-weight: bold;
    }

    .container {
      max-width: 1100px;
      margin: 50px auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 20px;
    }

    .contact-form, .contact-info {
      background: #161b22;
      border-radius: 10px;
      padding: 30px;
      flex: 1;
      min-width: 320px;
    }

    .contact-form h2 {
      margin-bottom: 10px;
      color: #fff;
    }

    .contact-form label {
      display: block;
      margin: 10px 0 5px;
      font-size: 14px;
      color: #ccc;
    }

    .contact-form input, .contact-form textarea {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 6px;
      background: #0e0e12;
      color: #fff;
      font-size: 15px;
    }

    .contact-form button {
      margin-top: 15px;
      width: 100%;
      padding: 12px;
      background: #7b2ff7;
      border: none;
      border-radius: 6px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    .contact-form button:hover {
      background: #9b4dff;
    }

    .contact-info h3 {
      margin-bottom: 15px;
      color: #fff;
    }

    .contact-info p {
      margin: 8px 0;
      color: #ccc;
      font-size: 14px;
    }

    footer {
      background: #7b2ff7;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }

    footer a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <header>ZealVerse</header>

  <section class="container">
    <!-- Contact Form -->
    <div class="contact-form">
      <h2>Send us a Message</h2>
      <p>Fill out the form and we’ll get back to you soon.</p>

      <form action="send_message.php" method="POST">
        <label>Full Name *</label>
        <input type="text" name="name" required />

        <label>Email Address *</label>
        <input type="email" name="email" required />

        <label>Subject *</label>
        <input type="text" name="subject" required />

        <label>Message *</label>
        <textarea name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>

    <!-- Contact Info -->
    <div class="contact-info">
      <h3>Contact Information</h3>
      <p><strong>Email:</strong> info@zealverse.com</p>
      <p><strong>Phone:</strong> +1 (555) 123-4567</p>
      <p><strong>Address:</strong> 123 College Avenue, Campus City</p>
      <p><strong>Office Hours:</strong><br>Monday - Friday<br>9:00 AM - 5:00 PM</p>
    </div>
  </section>

  <footer>
    <p>© 2025 ZealVerse. All rights reserved.</p>
    <p>
      <a href="index.html">Home</a> |
      <a href="about.html">About</a> |
      <a href="events.html">Events</a> |
      <a href="contact.php">Contact</a>
    </p>
  </footer>

</body>
</html>
