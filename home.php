<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if the user is not logged in
    header("Location: login_register.php");
    exit();
}

// Get user info from the session
$user_name = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- Font Awesome CDN Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="header">
      <section class="flex">
        <a href="home.php" class="logo">Educa.</a>

        <div class="icons">
          <div id="menu-btn" class="fas fa-bars"></div>
          <div id="user-btn" class="fas fa-user"></div>
        </div>

        <div class="profile">
          <img src="images/pic-1.jpg" class="image" alt="User profile picture" />
          <h3 class="name"><?php echo htmlspecialchars($user_name); ?></h3>
          <p class="role">student</p>
          <a href="profile.php" class="btn">view profile</a>
          <div class="flex-btn">
            <!-- Hide login/register if the user is logged in -->
            <a href="login._registerphp" class="option-btn" style="display: <?php echo isset($_SESSION['user_id']) ? 'none' : 'inline'; ?>">login</a>
            <a href="register.php" class="option-btn" style="display: <?php echo isset($_SESSION['user_id']) ? 'none' : 'inline'; ?>">register</a>
            <!-- Show logout button if the user is logged in -->
            <a href="logout.php" class="option-btn" style="display: <?php echo isset($_SESSION['user_id']) ? 'inline' : 'none'; ?>">logout</a>
          </div>
        </div>
      </section>
    </header>

    <div class="side-bar">
      <div id="close-btn">
        <i class="fas fa-times"></i>
      </div>

      <div class="profile">
        <img src="images/pic-1.jpg" class="image" alt="" />
        <h3 class="name"><?php echo htmlspecialchars($user_name); ?></h3>
        <p class="role">student</p>
        <a href="profile.php" class="btn">view profile</a>
      </div>

      <nav class="navbar">
        <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
        <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
        <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
        <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
        <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
      </nav>
    </div>

    <section class="home-grid">
      <h1 class="heading">quick options</h1>

      <div class="box-container">

        <div class="box">
          <h3 class="title">top categories</h3>
          <div class="flex">
            <a href="#"><i class="fas fa-code"></i><span>development</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>marketing</span></a>
            <a href="#"><i class="fas fa-music"></i><span>music</span></a>
            <a href="#"><i class="fas fa-camera"></i><span>photography</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
          </div>
        </div>

        <div class="box">
          <h3 class="title">popular topics</h3>
          <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#"><i class="fab fa-js"></i><span>JavaScript</span></a>
            <a href="#"><i class="fab fa-react"></i><span>React</span></a>
            <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>Bootstrap</span></a>
          </div>
        </div>
    </section>

    <section class="courses">
      <h1 class="heading">our courses</h1>

      <div class="box-container">
        <!-- Course boxes -->
        <div class="box">
          <div class="tutor">
            <img src="images/pic-2.jpg" alt="" />
            <div class="info">
              <h3>John Deo</h3>
              <span>21-10-2022</span>
            </div>
          </div>
          <div class="thumb">
            <img src="images/thumb-1.png" alt="" />
            <span>10 videos</span>
          </div>
          <h3 class="title">Complete HTML Tutorial</h3>
          <a href="playlist.php" class="inline-btn">view playlist</a>
        </div>

        <!-- Additional course boxes can be added here -->
      </div>

      <div class="more-btn">
        <a href="courses.php" class="inline-option-btn">view all courses</a>
      </div>
    </section>

    <!-- Custom JS File -->
    <script src="js/script.js"></script>
  </body>
</html>
