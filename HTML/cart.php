<?php
include 'connect.php';
session_start();

if (isset($_GET["cartId"])) {
  $id = $_GET["cartId"];
  $sql = "DELETE FROM cart WHERE cartId = $id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('Location: cart.php');
  } else {
    die(mysqli_error($con));
  }
}
$username = $_SESSION['userName'];
$checkQuery = "SELECT * FROM cart WHERE userName = '$username'";
$checkResult = mysqli_query($con, $checkQuery);

if (isset($_GET["checkout"])) {
  if (mysqli_num_rows($checkResult) > 0) {
    echo '<script> alert("Successful Checkout") 
    window.location.href = "mycourses.php" </script>';
  } else {
    echo '<script> alert("Failed Checkout") 
    window.location.href = "cart.php" </script>';
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Review the audio engineering courses in your Takke cart. Update quantities, remove items, and proceed to checkout to start learning with premium, expert-led courses.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../CSS/cart.css">
  <title>My Cart | Takke</title>
</head>

<body>
  <header>
    <div class="parentA">
      <a class="headerAicon" href="index.php"><i class="fa fa-home"></i></a>
      <a class="headerAicon" href="editUserInfo.php"><i class="fa-solid fa-user"></i></a>
    </div>
    <div class="headerImg">
      <img src="../Assets/Takkeh.png" alt="Takke logo - Premium Audio Engineering Courses">
    </div>
    <div class="H1H">
      <h1>Takke School</h1>
    </div>
  </header>
  <div class="H2H">
    <?php
    if (isset($_SESSION['userName'])) {
      $user = $_SESSION['userName'];
      echo '<h2>' . $user . ' Cart</h2>';
    }
    ?>
  </div>
  <div class="cartContent">
    <?php
    $user = $_SESSION['userName'];
    $sql = "SELECT * FROM cart where userName= '$user';";

    $result = mysqli_query($con, $sql);

    if ($result) {
      $total = 0;
      echo '<table>
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Course Image</th>
                    <th>Course Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';

      while ($cart = mysqli_fetch_array($result)) {
        $id = $cart['cartId'];
        $name = $cart['courseName'];
        $img = $cart['courseImage'];
        $price = $cart['coursePrice'];
        $total += $price;

        echo '<tr>
                <td>' . $name . '</td>
                <td><img src="' . $img . '" alt="course img"></td>
                <td>' . $price . ' USD</td>
                <td>
                 <form method="get">
                  <input type="hidden" name="cartId" value=' . $id . '>
                  <input class = "del" type="submit" name="delCart" value="Delete">
                </form>  
                </td>
              </tr>';
      }
      echo '</tbody>
        </table>
        <div class = "h3Table">
        <h3>Total Price = ' . $total . ' </h3>
        </div>';
    }
    ?>
  </div>
  <form class="checkOutForm" method="get">
    <input class="check" type="submit" name="checkout" value="Check Out">
  </form>
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