<?php
include('../config.php');
session_start();
error_reporting(0);
$query = mysqli_query($con, "select fname from users where email='".$_SESSION['username']."'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="x-icon" href=".\download.png">
    <title>About Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>
    <nav>
      <div class="logo"><i class="fas fa-dumbbell"></i><span>Morning Mentor</span></div>
      <ul>
        <ul>
          <a href="../Gympage/index.php"><li>Home</li></a>
          <a href="../workout/index.php"><li>Workouts</li></a>
          <a href="../meditation/index.php"><li>Meditation</li></a>
          <a href="../Study/index.php"><li>Study</li></a>
          <a href="../Nutrition/index.php"><li>Nutrition</li></a>
          <a href="../dash/index.php"><li>Dashboard</li></a>
          <a href="#" class="active"><li>About Us</li></a>
          <p style="color: white;"><?php echo $row['fname'];?></p>
          <a href="../logout.php">Logout</a>
        </ul>
      </ul>
    </nav>
    <div class = "about-wrapper">
      <div class = "about-left">
        <div class = "about-left-content">
          <div>
            <div class = "shadow">
              <div class = "about-img">
                <img src = "logo.png" alt = "about image">
              </div>
            </div>

            <h2>Morning Mentor</h2>
            <h3>Self Improvement Campaign</h3>
          </div>

          <ul class = "icons">
            <li><i class = "fab fa-facebook-f"></i></li>
            <li><i class = "fab fa-twitter"></i></li>
            <li><i class = "fab fa-linkedin"></i></li>
            <li><i class = "fab fa-instagram"></i></li>
          </ul>
        </div>
      </div>

      <div class = "about-right">
        <h1>WELCOME<span>!</span></h1>
        <h2>JOIN US AND IMPROVE YOURSELF</h2>
        <div class = "about-btns">
        </div>

        <div class = "about-para">
          <p>The motto of our campaign is MOVE REFLECT GROW which are considered the important aspects of a successful a person.There are three sections
<br>Move:Workout to our body to keep our body active and energitic all the time and improve the overall outlook of our body
<br>Grow:The essential part of life is to improve ourselfs and the important entity to cultivate the quality is by meditation and studying which are the other two activities of our campaign
<br>Reflect:Monitor and implemet the changes in your life .</p>
        </div>
      </div>
    </div>


  </body>
</html>
