<?php
session_start();
include("../config.php");
error_reporting(0);
$query = mysqli_query($con, "select fname from users where email='".$_SESSION['username']."'");
$row = mysqli_fetch_array($query);
$fname = $row['fname'];
$userId = $_SESSION['id'];

if (isset($_POST['addexercise']) && isset($_POST['exerciseName']) && isset($_POST['exerciseDuration'])) {
  $exerciseName = $_POST['exerciseName'];
  $exerciseDuration = $_POST['exerciseDuration'];
  $sql = "INSERT INTO exercises (uid, exercise_name, exercise_duration) VALUES ('$userId', '$exerciseName', $exerciseDuration)";
  $query1 = mysqli_query($con,$sql);
  echo "<script> alert('Exercise added: ".$exerciseName." for ".$exerciseDuration. " minutes'); </script>";
}

if (isset($_POST['addfood']) && isset($_POST['foodName']) && isset($_POST['foodCalories'])) {
  $foodName = $_POST['foodName'];
  $foodCalories = $_POST['foodCalories'];
  $sql = "INSERT INTO foods (uid, food_name, food_calories) VALUES ('$userId', '$foodName', $foodCalories)";
  $query2 = mysqli_query($con,$sql);
  echo "<script> alert('Calories tracked for ".$foodName.": ".$foodCalories."'); </script>";
}

if(isset($_POST['addmedi']) && isset($_POST['mediDuration'])){
  $mediDuration = $_POST['mediDuration'];
  $sql = "insert into meditation(uid, duration) values('$userId', '$mediDuration')";
  $query3 = mysqli_query($con,$sql);
  echo "<script> alert('You meditated for ".$mediDuration." minutes'); </script>";
}

if(isset($_POST['addstudy']) && isset($_POST['bookName']) && isset($_POST['studyDuration'])){
  $bookName = $_POST['bookName'];
  $studyDuration = $_POST['studyDuration'];
  $sql = "insert into study(uid, bookname, duration) values('$userId', '$bookName', '$studyDuration')";
  $query3 = mysqli_query($con,$sql);
  echo "<script> alert('Book added: ".$bookName." for ".$studyDuration." minutes'); </script>";
}

if(isset($_POST['submit'])){
  header("Location: summary.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header>
    <nav>
			<div class="logo"><i class="fas fa-dumbbell"></i><span>User Dashboard</span></div>
			<ul>
				<a href="../Gympage/index.php"><li>Home</li></a>
				<a href="../workout/index.php"><li>Workouts</li></a>
				<a href="../meditation/index.php"><li>Meditation</li></a>
				<a href="../Study/index.php"><li>Study</li></a>
				<a href="../Nutrition/index.php"><li>Nutrition</li></a>
				<a href="../about us/index.php"><li>About Us</li></a>
        <a href="#" class="active"><li>Dashboard</li></a>
				<p style="color: white;"><?php echo $fname;?></p>
				<a href="../logout.php">Logout</a>
			</ul>
		</nav>
  </header>
  <form action="" method="post">
    <section>
        <h2>Exercise Entities</h2>
        <label for="exercise">Exercise:</label>
        <input type="text" id="exercise" name="exerciseName">

        <label for="duration">Duration (minutes):</label>
        <input type="number" id="duration" name="exerciseDuration">

        <button name="addexercise">Add Exercise</button>
    </section>

    <section>
        <h2>Food Calories Tracker</h2>
        <label for="food">Food Item:</label>
        <input type="text" id="food" name="foodName">

        <label for="calories">Calories:</label>
        <input type="number" id="calories" name="foodCalories">

        <button name="addfood">Track Calories</button>
    </section>

    <section>
        <h2>Meditation Entities</h2>
        <label for="mediduration">Duration (minutes):</label>
        <input type="number" id="mediduration" name="mediDuration">

        <button name="addmedi">Add Meditation Details</button>
    </section>

    <section>
        <h2>Study Entities</h2>
        <label for="bookName">Book:</label>
        <input type="text" id="bookName" name="bookName">

        <label for="studyduration">Duration (minutes):</label>
        <input type="number" id="studyduration" name="studyDuration">

        <button name="addstudy">Add Study</button>
    </section>
    <section>
      <button class="btn" name="submit">Submit</button>
    </section>
  </form>
</body>
</html>
