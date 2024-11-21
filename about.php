<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>about us</title>

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="header">
      <section class="flex">
        <a href="home.php" class="logo">Hel.</a>

        <div class="icons">
          <div id="menu-btn" class="fas fa-bars"></div>
          <div id="user-btn" class="fas fa-user"></div>
        </div>

        <div class="profile">
          <img src="images/pic-1.jpg" class="image" alt="" />
          <h3 class="name"></h3>
          <p class="role">student</p>
          <a href="profile.php" class="btn">view profile</a>
          <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
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
        <h3 class="name"></h3>
        <p class="role">student</p>
        <a href="profile.php" class="btn">view profile</a>
      </div>

      <nav class="navbar">
        <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
        <a href="about.php"
          ><i class="fas fa-question"></i><span>about</span></a
        >
        <a href="courses.php"
          ><i class="fas fa-graduation-cap"></i><span>courses</span></a
        >
        <a href="teachers.php"
          ><i class="fas fa-chalkboard-user"></i><span>teachers</span></a
        >
        <a href="contact.php"
          ><i class="fas fa-headset"></i><span>contact us</span></a
        >
      </nav>
    </div>

    <section class="about">
      <div class="row">
        </div>

        <div class="content">
          <h3>why choose us?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut dolorum
            quasi illo? Distinctio expedita commodi, nemo a quam error
            repellendus sint, fugiat quis numquam eum eveniet sequi aspernatur
            quaerat tenetur.
          </p>
          <a href="courses.php" class="inline-btn">our courses</a>
        </div>
      </div>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-graduation-cap"></i>
          <div>
            <h3>+10k</h3>
            <p>online courses</p>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-chalkboard-user"></i>
          <div>
            <h3>+2k</h3>
            <p>expert tutors</p>
          </div>
        </div>
    </section>

    <section class="reviews">
      <h1 class="heading">Deskripsi Tutor</h1>

      <div class="box-container">
        <div class="box">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed
            ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis
            fuga. Eligendi eaque molestiae modi?
          </p>
          <div class="student">
            <img src="images/pic-2.jpg" alt="" />
            <div>
              <h3>john deo</h3>
            </div>
          </div>
        </div>

        <div class="box">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed
            ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis
            fuga. Eligendi eaque molestiae modi?
          </p>
          <div class="student">
            <img src="images/pic-3.jpg" alt="" />
            <div>
              <h3>john deo</h3>
            </div>
          </div>
        </div>

        <div class="box">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed
            ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis
            fuga. Eligendi eaque molestiae modi?
          </p>
          <div class="student">
            <img src="images/pic-4.jpg" alt="" />
            <div>
              <h3>john deo</h3>
            </div>
          </div>
        </div>

        <div class="box">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed
            ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis
            fuga. Eligendi eaque molestiae modi?
          </p>
          <div class="student">
            <img src="images/pic-5.jpg" alt="" />
            <div>
              <h3>john deo</h3>
            </div>
          </div>
        </div>

        <div class="box">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed
            ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis
            fuga. Eligendi eaque molestiae modi?
          </p>
          <div class="student">
            <img src="images/pic-6.jpg" alt="" />
            <div>
              <h3>john deo</h3>
            </div>
          </div>
        </div>

        <div class="box">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed
            ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis
            fuga. Eligendi eaque molestiae modi?
          </p>
          <div class="student">
            <img src="images/pic-7.jpg" alt="" />
            <div>
              <h3>john deo</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
  </body>
</html>
