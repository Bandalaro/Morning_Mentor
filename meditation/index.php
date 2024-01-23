<?php
include('../config.php');
session_start();
error_reporting(0);
$query = mysqli_query($con, "select fname from users where email='".$_SESSION['username']."'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="x-icon" href=".\ico.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="./style.css" />
    <title>Meditation</title>
  </head>
  <body>
    <nav>
      <div class="logo"><i class="fas fa-dumbbell"></i><span>Meditation Center</span></div>
      <ul>
				<a href="../Gympage/index.php"><li>Home</li></a>
				<a href="../workout/index.php"><li>Workouts</li></a>
				<a href="#" class="active"><li>Meditation</li></a>
				<a href="../Study/index.php"><li>Study</li></a>
				<a href="../Nutrition/index.php"><li>Nutrition</li></a>
        <a href="../dash/index.php"><li>Dashboard</li></a>
				<a href="../about us/index.php"><li>About Us</li></a>
				<p style="color: white;"><?php echo $row['fname'];?></p>
        <a href="../logout.php">Logout</a>
			</ul>
    </nav>
    <div class="app">
      <div class="vid-container">
        <video loop >
          <source src="./video/rain.mp4"  type="video/mp4">
        </video>
        </div>
        <div class="time-select">
          <button data-time="300">5 Minutes</button>
          <button data-time="900" class="medium-mins">15 Minutes</button>
          <button data-time="1200" class="long-mins">20 Minutes</button>
        </div>
        <div class="player-container">
            <audio class="song">
                <source src="./sounds/rain.mp3" />
              </audio>
              <img src="./svg/play.svg" class="play"></img>
              <svg class="track-outline" width="453" height="453" viewBox="0 0 453 453" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="226.5" cy="226.5" r="216.5" stroke="white" stroke-width="20"/>
                </svg>
              <svg class="moving-outline" width="453" height="453" viewBox="0 0 453 453" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="226.5" cy="226.5" r="216.5" stroke="#018EBA" stroke-width="20"/>
                </svg>
              <img src="./svg/replay.svg" class="replay"></img>

                <h3 class="time-display">0:00</h3>
      </div>
      <div class="sound-picker">
        <button data-sound="./sounds/rain.mp3" data-video="./video/rain.mp4" ><img src="./svg/rain.svg" alt=""></button>
        <button data-sound="./sounds/beach.mp3" data-video="./video/beach.mp4"><img src="./svg/beach.svg" alt=""></button>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
