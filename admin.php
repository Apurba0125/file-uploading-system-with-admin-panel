<?php
require("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Panel</title>
  <link rel="stylesheet" href="adminstyle.css">
  <link rel="Website Icon" type="png" href="Swami_Vivekananda_University,_Barrackpore_Logo.png">
</head>

<body>
  <?php
  // if (!empty($_SESSION["id"])) {
  // header("Location: admin.php");
  // }
  if (isset($_REQUEST["login"])) {
  $Admin_name = $_REQUEST["Admin_name"];
  $Admin_password = $_REQUEST["Admin_password"];
  $result = db_connect("SELECT * FROM admin_page WHERE Admin_name = '$Admin_name'");
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
  if ($Admin_password == $row['Admin_password']) {
  $_SESSION["login"] = true;
  $_SESSION["id"] = $row["id"];
  header("Location: adminpanel.php");
  } else {
  echo
  "<script>
    alert('Wrong Password');
    
  </script>";
  }
  } else {
  echo
  "<script>
    alert('User Not Registered');
  </script>";
  }
  }
  ?>

  <div class="container">
    <div class="myform">
      <form  method="POST">
        <h2>ADMIN LOGIN</h2>
        <input type="text" placeholder="Admin Name" name="Admin_name">
        <input type="password" placeholder="Password" name="Admin_password">
        <button type="submit" name="login">LOGIN</button>
      </form>
    </div>
    <div class="image">
      <img src="image.jpg">
    </div>
  </div>

</body>

</html>