<?php
include("../../../config.php");
session_start();
error_reporting(0);
$query = mysqli_query($con, "select id,fname from users where email='".$_SESSION['username']."'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Alternate Lunges</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
  <nav>
    <div class="logo"><i class="fas fa-dumbbell"></i><span>Morning Mentor</span></div>
    <ul>
      <a href="../../../Gympage/index.php" class="active"><li>Home</li></a>
      <a href="#"><li>Workouts</li></a>
      <a href="../../back_extensions/dist/index.php"><li>Next</li></a>
      <a href="../../Burpees/dist/index.php"><li>Previous</li></a>
      <a href="../../../about us/index.php"><li>About Us</li></a>
	  <p style="color: #000; align-items: center; font-weight: bolder; font-family: 'Quicksand', sans-serif;"><?php echo $row['fname'];?></p>
	  <a href="../../../logout.php">Logout</a>
    </ul>
  </nav>
  <div class="workout">
    <img src="../../../workout/exercise_gifs/alt_front_lunges.gif" alt="" width="300">
  </div>
<!-- partial:index.partial.html -->
<div class="container">
	<form action="" id="set">
	  <div class="section">
	  	<div class="center">
		  	<label>Work Time </label>
		  	<div class="input"><button onclick="changeQty('rest','minus'); return false;">-</button><input type="text" id="rest" value="5" readonly><button onclick="changeQty('rest','plus'); return false;">+</button></div>
		  </div>
		</div>
	  <div class="section">
	  	<div class="center">
	  		<label>Rest </label>
	  		<div class="input"><button onclick="changeQty('workout','minus'); return false;">-</button><input type="text" id="workout" value="5" readonly><button onclick="changeQty('workout','plus'); return false;">+</button></div>
	  	</div>
	  </div>
	  <div class="section">
	  	<div class="center">
	  		<label>Rounds </label>
	  		<div class="input"><button onclick="changeQty('intervals','minus'); return false;">-</button><input type="text" id="intervals" value="2" readonly><button onclick="changeQty('intervals','plus'); return false;">+</button></div>
	  	</div>
	  </div>
	  <div class="buttons"><button id="start">start</button></div>
	</form>

	<div id="run">
		<div class="chart" id="graph" data-percent="1" data-line="5" data-color="#34495e"></div>
		<div id="title"></div>
		<div id="timer"></div>
		<div id="buttons">
			<button id="stop">Stop</button>
		</div>
	</div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script><script  src="./script.js"></script>

</body>
</html>
