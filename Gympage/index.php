<?php
include("../config.php");
session_start();
error_reporting(0);
$query = mysqli_query($con, "select fname from users where email='".$_SESSION['username']."'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="x-icon" href=".\img\icon.jpeg">
	<title>GYM To Train Your Fitness and Mind</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<div class="logo"><i class="fas fa-dumbbell"></i><span>Morning Mentor</span></div>
			<ul>
				<a href="#" class="active"><li>Home</li></a>
				<a href="../workout/index.php"><li>Workouts</li></a>
				<a href="../meditation/index.php"><li>Meditation</li></a>
				<a href="../Study/index.php"><li>Study</li></a>
				<a href="../Nutrition/index.php"><li>Nutrition</li></a>
				<a href="../dash/index.php"><li>Dashboard</li></a>
				<a href="../about us/index.php"><li>About Us</li></a>
				<p style="color: white; font-family: 'Quicksand', sans-serif; font-size: 14px;"><?php echo $row['fname'];?></p>
				<a href="../logout.php">Logout</a>
			</ul>
		</nav>
		<div class="header-container">
			<h1><span class="border-bottom">No Pain</span><span class="text-primary"> No Gain</span></h1>
			<p>The Morning Mentor is a self Development campain organized that's primary moto is to improve the mental health
				of a individual to maximize the productivity and it is our dream to pass this on to others.I really want you all to experience this
			by yourself and enjoy the process and observe yourself breaking through your barriers.</p>
		</div>
	</header>
</body>
</html>
