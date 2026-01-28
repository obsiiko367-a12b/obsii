<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Obsa Fikadu | Personal Website</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      line-height: 1.6;
      background: #f4f6f8;
      color: #333;
    }
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: #0d47a1;
      color: white;
      padding: 80px 20px 20px; /* space for fixed profile photo */
      text-align: center;
      z-index: 999;
    }
    /* FIXED PROFILE PHOTO */
    .profile-photo {
      position: fixed;
      top: 15px;
      left: 50%;
      transform: translateX(-50%);
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 4px solid white;
      z-index: 1000;
      background: white;
    }
    nav a {
      color: white;
      margin: 0 10px;
      text-decoration: none;
      font-weight: bold;
    }
    section {
      margin-top: 220px; /* push content below fixed header */
      padding: 40px 20px;
      max-width: 900px;
      margin: auto;
    }
    h2 {
      color: #0d47a1;
    }
    .skills li {
      background: #e3f2fd;
      display: inline-block;
      margin: 5px;
      padding: 8px 12px;
      border-radius: 5px;
    }
    footer {
      background: #222;
      color: #ccc;
      text-align: center;
      padding: 20px;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius:10px;
    }
    button {
      background: #0d47a1;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }
  
    /* RESPONSIVE DESIGN */
    @media (max-width: 768px) {
      header {
        padding: 90px 10px 15px;
      }

      .profile-photo {
        width: 90px;
        height: 90px;
        top: 10px;
      }

      header h1 {
        font-size: 22px;
      }

      header p {
        font-size: 14px;
      }

      nav a {
        display: inline-block;
        margin: 5px;
        font-size: 14px;
      }

      section {
        margin-top: 200px;
        padding: 30px 15px;
      }
    }

    @media (min-width: 769px) {
      header h1 {
        font-size: 32px;
      }

      header p {
        font-size: 18px;
      }

      section {
        margin-top: 230px;
      }
    }
  </style>
</head>
<body>

<header>
  <img src="obsi.png" alt="Profile Photo" class="profile-photo" /><br></br>
  <h1>Obsi Fikadu Mekonen</h1>
  <p>Computer Science Student | Web Developer</p>
  <nav>
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>
</header><br></br>

<section id="about">
  <h2>About Me</h2>
  <p>
    I am a Computer Science student from Ethiopia with an interest in web development,
    programming, and technology. I enjoy building simple and useful web applications
    and I am currently improving my skills in PHP, JavaScript, and MySQL.
  </p>
</section>

<section id="skills">
  <h2>Skills</h2>
  <ul class="skills">
    <li>HTML</li>
    <li>CSS</li>
    <li>JavaScript</li>
    <li>PHP</li>
    <li>MySQL</li>
    <li>Beginner Python</li>
    <li>Video Editing</li>
  </ul>
</section>

<section id="projects">
  <h2>Projects</h2>
  <p>Here are some projects I am working on:</p>
  <ul>
    <li>Student Finder Web System</li>
    <li>Login & Registration System (PHP + MySQL)</li>
    <li>Personal Portfolio Website</li>
  </ul>
</section>

<section id="contact">
  <h2>Contact Me</h2>
  <form action="contact.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required />
    <input type="email" name="email" placeholder="Your Email" required />
    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</section>

<footer>
  <p>© 2026 Obsa Fikadu Mekonen. All rights reserved.</p>
</footer>

</body>
</html>


