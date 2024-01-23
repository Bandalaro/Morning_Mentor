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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="x-icon" href=".\img\icon.png">
	<title>Nutrition Advice</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>

	<!---header--->
	<header>
		<a href="#" class="logo"><img src="img/newlogo2.png"></a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="../Gympage/index.php" class="active">Home</a></li>
			<li><a href="../about us/index.php">About Us</a></li>
			<li><a href="#menu">Menu</a></li>
			<li><a href="#team">Low Cal</a></li>
			<li><a href="#blog">High cal</a></li>
			<li><a href="../BMI/index.php">BMI</a></li>
			<li><a href="../FoodcaloriesTracker/index.php">Food Tracker</a></li>
			<li><a href="../workout/index.php">Workout</a></li>
			<a href="../dash/index.php"><li>Dashboard</li></a>
			<li><p style="color: black;"><?php echo $row['fname'];?></p></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>

		<div class="top-btn">
			<a href="#menu">Try Now</a>
		</div>
	</header>

	<!---home--->
	<section class="home" id="home">
		<div class="home-text">
			<h3>Welcome</h3>
			<h1>Know your Calories and be fit and healthy</h1>
			<p>This page helps you to know about the calories and macros of foods and helps to track them <br>use a note to track your mannualy if you are really consious of your macros</p>
			<a href="#" class="btn">About Us</a>
		</div>

		<div class="home-img">
			<img src="img/hero.png">
		</div>
	</section>

	<!---about--->
	<section class="about" id="about">
		<div class="about-img">
			<img src="img/about.png">
		</div>

		<div class="about-text">
			<h3>About Us</h3>
			<h2>From your Mentor</h2>
			<p>This is a part of the Morning Mentor campaign which gives you some very small advice on the food you can take
			focuses on Indian cusine</p>
			<a href="#" class="btn">About Us</a>
		</div>
	</section>

	<!---food menu--->
	<section class="menu" id="menu">
		<div class="center-text">
			<h3>Food Menu</h3>
			<h2>Delicious food</h2>
		</div>

		<div class="menu-content">
			<div class="box">
				<div class="box-content">
					<div class="box-img">
						<img src="img/idly.jpg">
					</div>

					<div class="box-text">
						<h4>Idly</h4>
						<p>Steamed cakes made with Lentils and Rice one serving contains two pieces</p>
						<h6>Cals = 41KCAL</h6>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="box-content">
					<div class="box-img">
						<img src="img/dosa.jpg">
					</div>

					<div class="box-text">
						<h4>Dosa</h4>
						<p>Indian Pancake made with lentils that has been fermented one Serving is one dosa</p>
						<h6>Cals = 52KCAL</h6>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="box-content">
					<div class="box-img">
						<img src="img/venpongal.jpg">
					</div>

					<div class="box-text">
						<h4>South-Indian Ven Pongal</h4>
						<p>It is another rice based dish that has been boiled and steamed with lots of herbs and peppers</p>
						<h6>Cals = 268KCAL </h6>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="box-content">
					<div class="box-img">
						<img src="img/bread.jpg">
					</div>

					<div class="box-text">
						<h4>Milk Bread</h4>
						<p>Made with All Purpose flour packed with gluten and have a very hig carb and fat content one serving is two slices</p>
						<h6>Cals = 113KCAL</h6>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="box-content">
					<div class="box-img">
						<img src="img/c.jpg">
					</div>

					<div class="box-text">
						<h4>Coconut chutney</h4>
						<p>A chutney made with shredded coconut and then some nuts,ginger and herbs blitzzed in a mixer one tablespoon 20 ml </p>
						<h6>Cals = 10 KCAL</h6>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="box-content">
					<div class="box-img">
						<img src="img/milk.jpg">
					</div>

					<div class="box-text">
						<h4>Milk</h4>
						<p>Full fat cow's milk 1 seving here is a large serving of 250ml</p>
						<h6>Cals = 113 KCAL</h6>
					</div>
				</div>
			</div>

		</div>

		<div class="box-btn">
			<a href="#" class="btn">About Us</a>
		</div>
	</section>

	<!---team--->
	<section class="team" id="team">
		<div class="center-text">
			<h3>Team</h3>
			<h2>Some Low Calorie Foods You can savour</h2>
		</div>

		<div class="team-content">
			<div class="row">
				<div class="team-img">
					<img src="img/bc.jpg">
				</div>
				<h4>Black coffee</h4>
				<p>Brewed coffee bean concotion with some hot water gives a bitter savoury taste that fills the stomach</p>
			</div>

			<div class="row">
				<div class="team-img">
					<img src="img/bt.jpg">
				</div>
				<h4>Black Tea/Green Tea</h4>
				<p>A dose of caffenie with some zero cals to boost you up when you are sleepy</p>
			</div>

			<div class="row">
				<div class="team-img">
					<img src="img/watermelon.jpg">
				</div>
				<h4>Water Melon</h4>
				<p>A sweet fruit which can be a good alternate to the full fat deserts</p>
			</div>


			<div class="row">
				<div class="team-img">
					<img src="img/cucumber.jpg">
				</div>
				<h4>Cucumber</h4>
				<p>A Veggie that is packed with water content which can be snacked with some good old salt and pepper for a savory filling snack</p>
			</div>

		</div>
	</section>

	<!---blog--->
	<section class="blog" id="blog">
		<div class="center-text">
			<h3>Calorie Packers</h3>
			<h2>These foods are healthy but can pack heavy amount of calories</h2>
		</div>

		<div class="blog-content">
			<div class="main">
				<img src="img/nut1.jpg">
				<div class="blog-text">
					<h6>Nuts</h6>
					<h4>Cashew Nuts</h4>
					<p>Just a one table spoon of cashews maybe two to four pieces packs a amount of 25 KCALs </p>
				</div>
			</div>

			<div class="main">
				<img src="img/nut2.jpg">
				<div class="blog-text">
					<h6>Nuts</h6>
					<h4>Almonds</h4>
					<p>A single table spoon of almonds can pack upto 30 KCALs</p>
				</div>
			</div>

			<div class="main">
				<img src="img/dhaal.jpg">
				<div class="blog-text">
					<h6>Lentils</h6>
					<h4>Dhaal</h4>
					<p>A staple of Indian Cusine it is packed with protiens but also have carbs and slyrocketed cals some when eating dhaal have variety of food with you for consumption</p>
				</div>
			</div>

		</div>
	</section>


	<div class="end-text">
		<p>© late 2023 Morning Mentor.</p>
	</div>

	<!---custom js link--->
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
