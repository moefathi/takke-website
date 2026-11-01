<?php
require("connect.php");

if (isset($_POST['signup'])) {

  $username = $_POST['userName'];
  $email = $_POST['userEmail'];
  $password = $_POST['userPassword'];
  $sql = "INSERT INTO users (userName,userPassword,userEmail) VALUES ('$username','$password','$email')";

  $result = mysqli_query($con, $sql);
  if ($result) {
    header("Location: signIn.php");
  } else {
    echo "<script> alert('Failed, username and email should be unique!')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Create your Takke account today and unlock access to premium audio engineering courses. Learn mixing, mastering, and sound design with expert-led lessons. Sign up now and start your journey!">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../CSS/signUpStyles.css">
  <title>Sign Up | Takke</title>
</head>
<header>
  <div class="parentA">
    <a class="iconOne" href="index.php"><i class="fa-solid fa-house"></i></a>
  </div>
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

<body>
  <div class="signUpForm">
    <form action="" method="POST">
      <div class="signUp">
        <h2>Sign Up To Takke</h2>
        <br>
        <label for="username">
          <b>Username</b>
        </label>
        <input type="text" placeholder="Enter Your Username" name="userName" required minlength="3">
        <br>
        <br>
        <label for="email">
          <b>Email</b>
        </label>
        <input type="email" placeholder="Enter Your Email" name="userEmail" required>
        <br>
        <br>
        <label for="password">
          <b>Password</b>
        </label>
        <input type="password" placeholder="Enter Your Password" name="userPassword" required minlength="8">
        <br>
        <br>
        <input class="butt" type="submit" name="signup" value="Sign Up">
        <br>
        <p class="formP">Already Have An Account?</p>
        <a class="signinLink" href="signIn.php">Login</a>
      </div>
    </form>
  </div>
</body>

</html>