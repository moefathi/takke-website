<?php
require("connect.php");
session_start();

if (isset($_POST['login'])) {
  $username = $_POST['userName'];
  $password = $_POST['userPassword'];
  $sql = "SELECT * FROM users WHERE userName = '$username' AND userPassword = '$password';";
  $userLogin = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($userLogin);
  if ($row) {
    $_SESSION['userName'] = $username;
    header("location: index.php");
  } else {
    echo "<script> alert('Invalid username or password') </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sign in to your Takke account to access your purchased audio engineering courses. Learn mixing, mastering, sound design, and more with our premium content.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../CSS/signinstyles.css">
  <title>Login | Takke</title>
</head>

<body>
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
  <div class="logForm">
    <form action="" method="POST">
      <div class="login">
        <div class="wordLog">
          <h2>Login To Takke</h2>
        </div>
        <br>
        <label for="username">
          <b>Username</b>
        </label>
        <input type="text" placeholder="Enter Your Username" name="userName" required>
        <br>
        <br>
        <label for="password">
          <b>Password</b>
        </label>
        <input type="password" placeholder="Enter Your Password" name="userPassword" required minlength="8">
        <br>
        <br>
        <button type="submit" name="login">Sign in </button>
        <br>
        <br>
        <p class="formP">Don't have an account on Takke?</p>
        <a class="signupLink" href="signup.php"> Sign Up</a>
      </div>
    </form>
  </div>
</body>

</html>