<?php
require("connect.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Access your premium audio engineering courses on Takke. Dive into expert-led lessons on mixing, mastering, 
  and sound design. Continue your professional journey with our exclusive content.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../CSS/homeStyles.css">
  <title>My Courses | Takke</title>
</head>

<body>
  <header>
    <nav>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
      <a class="cartNav" href="cart.php"><i class='fa-solid fa-cart-shopping'></i> My Cart</a>
      <a class='headerAicon' href='editUserInfo.php'> <i class='fa-solid fa-user'></i> My Profile</a>
      <a href="logout.php"><i class='fa-solid fa-power-off'></i> Logout</a>
    </nav>
    <div class="headerImg">
      <img src="../Assets/Takkeh.png" alt="Takke logo - Premium Audio Engineering Courses">
    </div>
    </div>
    <div class="H1H">
      <h1>Takke School</h1>
    </div>
    <div class="Hparagraph">
      <p>Learn Audio Engineering From Zero to Hero</p>
    </div>
  </header>
  <main>
    <div id="courses">
      <div class="Htwo">
        <h2> My Courses</h2>
      </div>
      <div class="courses-co">
        <?php
        $user = $_SESSION['userName'];
        $sql = "SELECT * FROM cart WHERE userName = '$user';";
        $result = mysqli_query($con, $sql);
        $num = 0;
        if ($result) {
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
             <br>
             <form method="post">
              <input class = "addC" type="submit" name="detailsCoursesMyCourses" value="Course Details">
             </form>       
       </div>
    </div> ';
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