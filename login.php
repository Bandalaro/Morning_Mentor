<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Mentor Login</title>
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
        <a href="#"><button class="btn white-btn" id="loginBtn">Login</button></a>
            <a href="./signup.php"><button class="btn" id="registerBtn">Sign Up</button></a>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
    <form action="" method="post">
    <div class="form-box">
        <div class="login-container" id="login">
                    <div class="top">
                        <span>Don't have an account? <a href="./signup.php">Sign Up</a></span>
                        <header>Login</header>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" name="uname" id="email" placeholder="Username or Email" required>
                        <i class="bx bx-user"></i>
                        <span></span>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" name="pswd" placeholder="Password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <button class="submit" name="login">Login </button>
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="login-check">
                            <label for="login-check"> Remember Me</label>
                        </div>
                        <div class="two">
                            <label><a href="#">Forgot password?</a></label>
                        </div>
                    </div>
                </div>
    </form>
</div>
</body>

</html>

<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['login'])){
    $name = $_POST['uname'];
    $pass = md5($_POST['pswd']);
    $query = mysqli_query($con, "Select * from users where email = '$name' and password = '$pass'");
    $num = mysqli_fetch_array($query);
    if($num>0){
        $_SESSION['username'] = $_POST['uname'];
        $_SESSION['id'] = $num['id'];
        $pid = $num['id'];
        $host = $_SERVER['HTTP_HOST'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 1;
        $log = mysqli_query($con, "insert into userlog(uid,username,userip,status) values('$pid','$name','$uip','$status')" );
        header("Location: Gympage/index.php");
    }
    else{
        $_SESSION['username'] = $_POST['uname'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 0;
        mysqli_query($con, "insert into userlog(uid,username,userip,status) values('uid', '$name','$uip','$status')");
        echo "<script> alert('Invalid username or password!'); </script>";
        header("Location: login.php");
    }
}
?>