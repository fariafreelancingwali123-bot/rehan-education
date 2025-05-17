<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facilitators - Digital Mastery for a Connected World</title>
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

    /* Facilitators Section */
    .facilitators {
      background-color: #f0f8ff;
      padding: 50px 20px;
      text-align: center;
    }

    .facilitators h2 {
      font-size: 2.5em;
      color: #333;
      margin-bottom: 40px;
    }

    .facilitators p {
      font-size: 1.2em;
      color: #555;
      margin-bottom: 30px;
    }

    .facilitators .team {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      gap: 30px;
      margin-top: 30px;
    }

    .facilitators .team-member {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 250px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .facilitators .team-member:hover {
      transform: scale(1.05);
    }

    .facilitators .team-member img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 15px;
      object-fit: cover;
    }

    .facilitators .team-member h3 {
      font-size: 1.5em;
      color: #1e90ff;
      margin-bottom: 10px;
    }

    .facilitators .team-member p {
      font-size: 1.1em;
      color: #666;
    }

    .facilitators .team-member .title {
      font-style: italic;
      color: #1e90ff;
      margin-bottom: 10px;
    }

    .facilitators .team-member .social-links a {
      margin: 0 10px;
      font-size: 1.5em;
      color: #1e90ff;
      transition: color 0.3s ease;
    }

    .facilitators .team-member .social-links a:hover {
      color: #87cefa;
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

  <!-- Facilitators Section -->
  <div class="facilitators" id="facilitators">
    <h2>Meet Our Facilitators</h2>
    <p>Our facilitators are passionate professionals committed to empowering students through guidance, mentorship, and expertise in their fields.</p>
    
    <div class="team">
      <!-- Facilitator 1 -->
      <div class="team-member">
        <img src="path-to-image/maryam-zulifar.jpg" alt="Maryam Zulifar">
        <h3>Maryam Zulifar</h3>
        <p class="title">Trainingwali</p>
        <p>Maryam is a skilled professional passionate about teaching and empowering students with the necessary skills for success in the digital age.</p>
        <div class="social-links">
          <a href="https://facebook.com">Facebook</a>
          <a href="https://twitter.com">Twitter</a>
        </div>
      </div>

      <!-- Facilitator 2 -->
      <div class="team-member">
        <img src="path-to-image/rehmat.jpg" alt="Rehmat">
        <h3>Rehmat</h3>
        <p class="title">Empowermentwala</p>
        <p>Rehmat has been guiding students to unlock their full potential and focuses on helping individuals understand their strengths.</p>
        <div class="social-links">
          <a href="https://facebook.com">Facebook</a>
          <a href="https://twitter.com">Twitter</a>
        </div>
      </div>

      <!-- Facilitator 3 -->
      <div class="team-member">
        <img src="path-to-image/maria.jpg" alt="Maria">
        <h3>Maria</h3>
        <p class="title">Impactwali</p>
        <p>Maria has a wealth of experience in mentoring students and driving impactful results through education and hands-on experience.</p>
        <div class="social-links">
          <a href="https://facebook.com">Facebook</a>
          <a href="https://twitter.com">Twitter</a>
        </div>
      </div>

      <!-- Facilitator 4 -->
      <div class="team-member">
        <img src="path-to-image/doulat.jpg" alt="Doulat">
        <h3>Doulat</h3>
        <p class="title">Taliorswala</p>
        <p>Doulat is an expert in tailoring educational experiences for diverse learners, focusing on practical skills and personal growth.</p>
        <div class="social-links">
          <a href="https://facebook.com">Facebook</a>
          <a href="https://twitter.com">Twitter</a>
        </div>
      </div>
    </div>
  </div>

  <div class="cta">
    <h2>Join Our Program Today!</h2>
    <p>Empower yourself through expert guidance and become a part of a community dedicated to your success.</p>
    <a href="#contact" class="cta-btn">Contact Us Now</a>
  </div>

  <footer>
    <p>&copy; 2025 Digital Mastery Program. All rights reserved.</p>
  </footer>
</body>
</html>

<?php include 'footer.php'; ?>
