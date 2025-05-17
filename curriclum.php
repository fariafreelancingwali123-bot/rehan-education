<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Mastery for a Connected World</title>
  <style>
    /* General Reset */
    body, h1, h2, h3, h4, p, ul, li, a {
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

    /* Hero Section */
    .intro {
      background-color: #f0f8ff;
      padding: 50px;
      text-align: center;
    }

    .intro h1 {
      font-size: 3em;
      color: #1e90ff;
    }

    .intro p {
      font-size: 1.2em;
      margin-top: 10px;
      color: #666;
    }

    /* Curriculum Section */
    .curriculum {
      background-color: #eaf4fe;
      padding: 50px 20px;
      text-align: center;
    }

    .curriculum h2 {
      font-size: 2.5em;
      color: #333;
      margin-bottom: 30px;
    }

    .curriculum p {
      font-size: 1.2em;
      color: #555;
      margin-bottom: 20px;
    }

    .curriculum ul {
      list-style-type: none;
      padding: 0;
      margin-bottom: 30px;
    }

    .curriculum ul li {
      font-size: 1.2em;
      color: #555;
      margin: 10px 0;
    }

    .curriculum .level {
      background-color: #fff;
      padding: 20px;
      margin: 10px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .curriculum .level h3 {
      font-size: 1.8em;
      color: #1e90ff;
      margin-bottom: 15px;
    }

    .curriculum .level p {
      font-size: 1.2em;
      color: #666;
    }

    /* Call to Action Section */
    .cta {
      background-color: #1e90ff;
      color: white;
      padding: 40px;
      text-align: center;
    }

    .cta h2 {
      font-size: 2.5em;
    }

    .cta p {
      font-size: 1.2em;
      margin: 20px 0;
    }

    .cta-btn {
      background-color: white;
      color: #1e90ff;
      padding: 15px 30px;
      font-size: 1.2em;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .cta-btn:hover {
      background-color: #87cefa;
    }

    /* Contact Section */
    .contact {
      padding: 30px;
      text-align: center;
      background-color: #f0f8ff;
    }

    .contact h2 {
      font-size: 2.5em;
      color: #333;
    }

    .contact p {
      font-size: 1.2em;
      color: #555;
    }

    .contact a {
      color: #1e90ff;
      text-decoration: none;
      font-weight: bold;
    }

    .contact a:hover {
      text-decoration: underline;
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

  <div class="intro">
    <h1>Unleash Your Digital Potential</h1>
    <p>Our program empowers teens to become global citizens with essential digital skills for a connected world.</p>
  </div>

  <!-- Curriculum Section -->
  <div class="curriculum" id="curriculum">
    <h2>Our Curriculum</h2>
    <p>We are educating students based on life’s experiences of travel, business, and networking. Our curriculum will keep evolving with new technologies while focusing on becoming a global citizen and making a positive impact on the world.</p>
    
    <div class="level">
      <h3>5th Grade – Level One</h3>
      <p>This year we teach technologies such as graphic design, ChatGPT, interviewing, video-making, learning via AI, yoga, meditation, ethics, and TEDx talks.</p>
    </div>

    <div class="level">
      <h3>6th Grade – Level Two</h3>
      <p>We continue from Level One, give the child a life mission (their "Wala"), and teach networking, interviewing TEDx speakers, and earning $100 per month via freelancing.</p>
    </div>

    <div class="level">
      <h3>7th Grade – Level Three</h3>
      <p>All items from Level Two, and the student needs to learn to earn $300 per month.</p>
    </div>

    <div class="level">
      <h3>8th Grade – Level Four</h3>
      <p>At this stage, students start their startup based on their "Wala" and grow it over the next four years, aiming to sell it for a million dollars by 12th grade.</p>
    </div>

    <div class="level">
      <h3>12th Grade – Level Five</h3>
      <p>Students focus on refining their startup, preparing for the final stages, and selling their startup.</p>
    </div>

    <div class="level">
      <h3>13th Grade – Level Six</h3>
      <p>Students are prepared for the GED exam and Matric (if needed) with the goal to pass with flying colors.</p>
    </div>
  </div>

  <div class="cta">
    <h2>Get Started Today!</h2>
    <p>Join our program and unlock a brighter future through digital mastery.</p>
    <a href="#contact" class="cta-btn">Contact Us Now</a>
  </div>

  <div class="contact" id="contact">
    <h2>Contact Us</h2>
    <p>If you have any questions or want more information, feel free to reach out!</p>
    <p>Call/WhatsApp: +44 7418 359852</p>
    <p>Follow us on <a href="https://facebook.com">Facebook</a>, <a href="https://instagram.com">Instagram</a>, <a href="https://twitter.com">Twitter</a>.</p>
  </div>

  <footer>
    <p>&copy; 2025 Digital Mastery Program. All rights reserved.</p>
  </footer>
</body>
</html>

<?php include 'footer.php'; ?>
