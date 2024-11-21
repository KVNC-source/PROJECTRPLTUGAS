<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tutor profile</title>

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
        <a href="home.php" class="logo">Educa.</a>

        <form action="search.php" method="post" class="search-form">
          <input
            type="text"
            name="search_box"
            required
            placeholder="search courses..."
            maxlength="100"
          />
          <button type="submit" class="fas fa-search"></button>
        </form>

        <div class="icons">
          <div id="menu-btn" class="fas fa-bars"></div>
          <div id="search-btn" class="fas fa-search"></div>
          <div id="user-btn" class="fas fa-user"></div>
          <div id="toggle-btn" class="fas fa-sun"></div>
        </div>

        <div class="profile">
          <img src="images/pic-1.jpg" class="image" alt="" />
          <h3 class="name">shaikh anas</h3>
          <p class="role">studen</p>
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
        <h3 class="name">shaikh anas</h3>
        <p class="role">studen</p>
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

    <section class="teacher-profile">
      <h1 class="heading">profile details</h1>

      <div class="details">
        <div class="tutor">
          <img src="images/pic-2.jpg" alt="" />
          <h3>john deo</h3>
          <span>developer</span>
        </div>
        <div class="flex">
          <p>total playlists : <span>4</span></p>
          <p>total videos : <span>18</span></p>
          <p>total likes : <span>1208</span></p>
          <p>total comments : <span>52</span></p>
        </div>
      </div>
    </section>

    <section class="courses">
      <h1 class="heading">our courses</h1>

      <div class="box-container">
        <div class="box">
          <div class="thumb">
            <img src="images/thumb-1.png" alt="" />
            <span>10 videos</span>
          </div>
          <h3 class="title">complete HTML tutorial</h3>
          <a href="playlist.php" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
          <div class="thumb">
            <img src="images/thumb-2.png" alt="" />
            <span>10 videos</span>
          </div>
          <h3 class="title">complete CSS tutorial</h3>
          <a href="playlist.php" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
          <div class="thumb">
            <img src="images/thumb-3.png" alt="" />
            <span>10 videos</span>
          </div>
          <h3 class="title">complete javascript tutorial</h3>
          <a href="playlist.php" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
          <div class="thumb">
            <img src="images/thumb-4.png" alt="" />
            <span>10 videos</span>
          </div>
          <h3 class="title">complete Boostrap tutorial</h3>
          <a href="playlist.php" class="inline-btn">view playlist</a>
        </div>
      </div>
    </section>

    <footer class="footer">
      &copy; copyright @ 2022 by <span>mr. web designer</span> | all rights
      reserved!
    </footer>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
  </body>
</html>
