<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Digital Mastery for a Connected World</title>
  <style>
    /* General Reset */
    body, h1, h2, h3, h4, p, ul, li, a, form, input, textarea {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: #f7f9fc;
      color: #333;
      line-height: 1.6;
    }

    h1, h2, h3, h4 {
      color: #1e90ff;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Header */
    header {
      background-color: #1e90ff;
      color: white;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      font-size: 3em;
      margin-bottom: 10px;
    }

    header nav a {
      color: white;
      margin: 0 15px;
      font-size: 1.2em;
      text-transform: uppercase;
    }

    header nav a:hover {
      text-decoration: underline;
    }

    /* Contact Section */
    .contact {
      background-color: #f0f8ff;
      padding: 50px 20px;
      text-align: center;
    }

    .contact h2 {
      font-size: 2.5em;
      color: #333;
      margin-bottom: 40px;
    }

    .contact p {
      font-size: 1.2em;
      color: #555;
      margin-bottom: 30px;
    }

    .contact .form-container {
      display: flex;
      justify-content: center;
      gap: 50px;
      flex-wrap: wrap;
    }

    .contact .contact-info,
    .contact .contact-form {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 45%;
    }

    .contact .contact-info h3,
    .contact .contact-form h3 {
      font-size: 1.8em;
      color: #1e90ff;
      margin-bottom: 20px;
    }

    .contact .contact-info p,
    .contact .contact-form p {
      font-size: 1.1em;
      color: #666;
    }

    .contact .contact-info ul {
      list-style: none;
      padding: 0;
    }

    .contact .contact-info ul li {
      margin: 15px 0;
      font-size: 1.1em;
    }

    .contact .contact-form input,
    .contact .contact-form textarea {
      width: 100%;
      padding: 15px;
      margin: 10px 0;
      border: 2px solid #ddd;
      border-radius: 5px;
      font-size: 1em;
    }

    .contact .contact-form input[type="submit"] {
      background-color: #1e90ff;
      color: white;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .contact .contact-form input[type="submit"]:hover {
      background-color: #87cefa;
    }

    .contact .contact-info .social-links a {
      margin: 0 10px;
      font-size: 1.5em;
      color: #1e90ff;
      transition: color 0.3s ease;
    }

    .contact .contact-info .social-links a:hover {
      color: #87cefa;
    }

    /* Footer */
    footer {
      background-color: #1e90ff;
      color: white;
      text-align: center;
      padding: 20px;
    }

    footer p {
      font-size: 1em;
    }

    footer a {
      color: white;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <header>
    <h1>Digital Mastery for a Connected World</h1>
    <nav>
      <a href="#home">Home</a>
      <a href="#curriculum">Curriculum</a>
      <a href="#courses">Courses</a>
      <a href="#facilitators">Facilitators</a>
      <a href="#contact">Contact Us</a>
    </nav>
  </header>

  <!-- Contact Section -->
  <div class="contact" id="contact">
    <h2>Contact Us</h2>
    <p>We would love to hear from you! Please fill out the form below or reach out through our contact details.</p>
    
    <div class="form-container">
      <!-- Contact Information -->
      <div class="contact-info">
        <h3>Our Contact Information</h3>
        <p>If you have any questions or inquiries, feel free to get in touch with us through the details below:</p>
        <ul>
          <li><strong>Email:</strong> info@digitalmastery.com</li>
          <li><strong>Phone:</strong> +1 123-456-7890</li>
          <li><strong>Address:</strong> 123 Digital Street, City, Country</li>
        </ul>

        <div class="social-links">
          <a href="https://facebook.com">Facebook</a>
          <a href="https://twitter.com">Twitter</a>
          <a href="https://linkedin.com">LinkedIn</a>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form">
        <h3>Get in Touch</h3>
        <form action="#" method="POST">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" required placeholder="Enter your name">

          <label for="email">Your Email</label>
          <input type="email" id="email" name="email" required placeholder="Enter your email">

          <label for="message">Your Message</label>
          <textarea id="message" name="message" required placeholder="Enter your message" rows="4"></textarea>

          <input type="submit" value="Send Message">
        </form>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Digital Mastery Program. All rights reserved.</p>
  </footer>

</body>
</html>

<?php include 'footer.php'; ?>
