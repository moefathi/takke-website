<?php
require("connect.php");
session_start();

if (isset($_SESSION['userName'])) {
  if (isset($_POST['addCart'])) {
    $formName = $_POST['courseName'];
    $formCid = $_POST['courseId'];
    $formImage = $_POST['courseImage'];
    $formPrice = $_POST['coursePrice'];
    $username = $_SESSION['userName'];

    $checkQuery = "SELECT * FROM cart WHERE courseId = '$formCid' AND userName = '$username'";
    $checkResult = mysqli_query($con, $checkQuery);

    if (mysqli_num_rows($checkResult) == 0) {
      $sqlQuery = "INSERT INTO cart (courseId, courseName, courseImage, coursePrice,userName)
                VALUES('$formCid', '$formName', '$formImage', '$formPrice', '$username');";
      $resultQuery = mysqli_query($con, $sqlQuery);

      if ($resultQuery) {
        echo '<script> alert("Added Course To Cart Successfully") </script>';
      }
    } else {
      echo '<script> alert("Course Is Already Added") </script>';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Takke offers premium paid audio engineering courses designed for aspiring and professional audio engineers. Learn mixing, mastering, sound design, and more with industry experts.">
  <meta name="google-site-verification" content="BfKkSf1UlOBWcKg5wBRmrShkz9GHHLeFgSPSLnLrLTI" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../CSS/homeStyles.css">
  <title>Takke</title>
</head>

<body>
  <header>
    <nav>

      <?php
      if (isset($_SESSION['userName'])) {
        $user = $_SESSION['userName'];
        $checkQuery = "SELECT * FROM cart WHERE userName = '$user'";
        $checkResult = mysqli_query($con, $checkQuery);
        if (mysqli_num_rows($checkResult) > 0) {
          echo "
      <a href='#courses'> <i class='fa-solid fa-store'> </i> Courses</a>
      <a href='#about'> <i class='fa-solid fa-address-card'></i> About</a>
      <a href='mycourses.php'> <i class='fa-solid fa-chalkboard-user'></i> My Courses</a>
      <a href='cart.php'><i class='fa-solid fa-cart-shopping'></i>  My Cart </a>
      <a class='headerAicon' href='editUserInfo.php'> <i class='fa-solid fa-user'></i> My Profile</a>
      <a href='logout.php'><i class='fa-solid fa-power-off'></i> Logout</a>";
        } else {
          echo "
      <a href='#courses'> <i class='fa-solid fa-store'> </i> Courses</a>
      <a href='#about'> <i class='fa-solid fa-address-card'></i> About</a>
      <a href='cart.php'><i class='fa-solid fa-cart-shopping'></i>  My Cart </a>
      <a class='headerAicon' href='editUserInfo.php'> <i class='fa-solid fa-user'></i> My Profile</a>
      <a href='logout.php'><i class='fa-solid fa-power-off'></i> Logout</a>";
        }
      } else {
        echo "
      <a href='#courses'> <i class='fa-solid fa-store'> </i> Courses</a>
      <a href='#about'> <i class='fa-solid fa-address-card'></i> About</a>
      <a href='signin.php'> <i class='fa-solid fa-chalkboard-user'></i> My Courses</a>
      <a href='signIn.php'><i class='fa-solid fa-right-to-bracket'></i> Sign In </a>
      <a href='signUp.php'><i class='fa-solid fa-right-to-bracket'></i> Sign Up </a>";
      }
      ?>
    </nav>

    <div class="headerImg">
      <img src="../Assets/Takkeh.png" alt="Takke logo - Premium Audio Engineering Courses">
    </div>
    <div class="H1H">
      <h1>Takke School</h1>
    </div>
    <div class="Hparagraph">
      <p>Learn Audio Engineering From Zero to Hero</p>
    </div>
  </header>
  <main>
    <div id="about">
      <div class="Htwo">
        <h2>About The Instructor</h2>
      </div>
      <div class="AboutDetails">
        <img class="imgAbout" src="../Assets/instructor.png" alt="Takke audio engineering course instructor">
        <p class="aboutPara">
          Our instructor is an experienced audio engineer with over 10 years of
          hands-on experience in the music industry. Having worked with renowned
          artists and music production studios, they bring a wealth of practical
          knowledge to the classroom. Their passion for teaching is matched only
          by their dedication to helping students gain real-world skills. Through
          clear, concise lessons and personalized guidance, they ensure that every
          student, regardless of their experience level, can understand and excel
          in the field of audio engineering. With a deep understanding of both
          technical and creative aspects of the industry, the instructor is committed
          to fostering a learning environment where students can thrive and develop
          the skills needed to succeed in the audio engineering world.
        </p>
      </div>
    </div>
    <div id="courses">
      <div class="Htwo">
        <h2> Our Courses</h2>
      </div>
      <div class="coursesPara">
        <?php
        if (isset($_SESSION['userName'])) {
          $user = $_SESSION['userName'];
          echo "
        <p> Enjoy In Your Learning Trip</p>";
        } else {
          echo "<p> <a href='signIn.php'>Sign in </a> To See All Of Our Courses</p>";
        }
        ?>
      </div>
      <div class="courses-co">
        <?php
        $sql = "SELECT * FROM courses;";
        $result = mysqli_query($con, $sql);
        $num = 0;
        if (isset($_SESSION['userName'])) {
          $user = $_SESSION['userName'];
          while ($data = mysqli_fetch_array($result)) {
            $id = $data['courseId'];
            $name = $data['courseName'];
            $image = $data['courseImage'];
            $price = $data['coursePrice'];
            echo '
            <div class="card" style="width: 18rem;">
           <img src="' . $image . '" class="card-img-top" alt="Course Image">
          <div class="card-body">
             <h5 class="card-title">' . $name . '</h5>
             <p class="card-text">$' . $price . '</p>
           <form method="post">
              <input type="hidden" name="courseId" value=' . $id . '>
              <input type="hidden" name="courseName" value="' . $name . '">
              <input type="hidden" name="courseImage" value=' . $image . '>
              <input type="hidden" name="coursePrice" value=' . $price . '>
              <input class = "addC" type="submit" name="addCart" value="Add To Cart">
           </form>       
       </div>
    </div> ';
          }
        } else {
          while ($data = mysqli_fetch_array($result)) {
            if ($num >= 4) {
              break;
            }
            $id = $data['courseId'];
            $name = $data['courseName'];
            $image = $data['courseImage'];
            $price = $data['coursePrice'];

            echo '
            <div class="card" style="width: 18rem;">
            <img src="' . $image . '" class="card-img-top" alt="Course Image">
            <div class="card-body">
            <h5 class="card-title">' . $name . '</h5>
            <p class="card-text">$' . $price . '</p>
            <a href="signIn.php" class="btn btn-primary">Add To Cart</a>
        </div>
      </div> ';
            $num++;
          }
        }
        ?>
      </div>
    </div>
  </main>
  <footer>
    <h5>Contact Us</h5>
    <div>
      <a href="https://jo.linkedin.com/in/mohammad-al-deghemat-2ab71a292"><i class="fa-brands fa-linkedin"></i> LinkedIn</a>
      <a href="mailto:23110581@htu.edu.jo"><i class="fa-solid fa-envelope"></i> Email</a>
    </div>
    <p>Copy Right&copy;</p>
  </footer>
</body>

</html>