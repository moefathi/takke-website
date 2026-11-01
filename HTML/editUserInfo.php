<?php
require("connect.php");
session_start();

if (isset($_POST['update'])) {
  $user = $_POST["userName"];
  $email = $_POST['userEmail'];
  $pass = $_POST['userPassword'];
  $sql = "UPDATE users SET userEmail ='$email',userPassword = '$pass' WHERE userName ='$user';";
  $result = mysqli_query($con, $sql);
  if ($result) {
    session_start();
    session_destroy();
    echo '<script> alert("Your Data Edited Successfully") </script>';
    header('Location: signIn.php');
  } else {
    echo "<script> alert('Failed, email must be unique!') </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Update your Takke profile information. Edit your account details, preferences, and contact information to personalize your audio engineering learning experience.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../CSS/userProfile.css">
  <title>My Profile | Takke</title>
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
  <div class="updateForm">
    <form action="" method="POST">
      <?Php
      $username = $_SESSION['userName'];
      $sqlSelect = "SELECT * FROM users WHERE userName = '$username';";
      $res = mysqli_query($con, $sqlSelect);
      $row = mysqli_fetch_array($res);
      ?>
      <div class="updateInfo">
        <div class="wordsUpdate">
          <h2>Update Your Profile</h2>
          <p>Username Cannot Be Changed</p>
          <p>If you want to change it please contact us</p>
        </div>
        <label for="username">
          <b>Username</b>
        </label>
        <input type="text" value="<?php echo $row['userName'] ?>" placeholder="Username Cannot Be Changed" name="userName" readonly>
        <br>
        <br>
        <label for="email">
          <b>Email</b>
        </label>
        <input type="email" value="<?php echo $row['userEmail'] ?>" placeholder=" Enter New Email" name="userEmail" required>
        <br>
        <br>
        <label for="password">
          <b>Password</b>
        </label>
        <input type="password" value="<?php echo $row['userPassword'] ?>" placeholder=" Enter New Password" name="userPassword" required minlength="8">
        <br>
        <br>
        <input class="butt" type="submit" name="update" value="Update">
      </div>
    </form>
  </div>
</body>

</html>