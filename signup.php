<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montoring Mentor Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>Morning Mentor</p>
        </div>
        <div class="nav-button">
            <a href="./login.php"><button class="btn white-btn" id="loginBtn">Login</button></a>
            <a href="#"><button class="btn" id="registerBtn"><p>Sign Up</button></a>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
    <form action="" method="post">
        <div class="form-box">
            <div class="login-container" id="register">
                    <div class="top">
                        <span>Have an account? <a href="./login.php">Login</a></span>
                        <header>Sign Up</header>
                    </div>
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="text" class="input-field" name="fname" placeholder="Firstname" required>
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" name="lname" placeholder="Lastname" require>
                            <i class="bx bx-user"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" name="email" placeholder="Email" require>
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" name="password" placeholder="Password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <button class="submit" name="signup" >Register</button>
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="register-check">
                            <label for="register-check"> Remember Me</label>
                        </div>
                        <div class="two">
                            <label><a href="#">Terms & conditions</a></label>
                        </div>
                    </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>

<?php
include("config.php");
session_start();
error_reporting(0);
if(isset($_POST['signup']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(fname,lname,email,password) values('$fname','$lname','$email','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	//header('location:index.php');
}
}
?>
