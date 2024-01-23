<?php
include("../config.php");
session_start();
error_reporting(0);
$uname = $_SESSION['username'];
$id = $_SESSION['id'];
$query = mysqli_query($con, "select fname from users where email = '$uname'");
$row = mysqli_fetch_array($query);
$fname = $row['fname'];
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo"><i class="fas fa-dumbbell"></i><span>Summary</span></div>
            <ul>
                <a href="../Gympage/index.php"><li>Home</li></a>
                <a href="../workout/index.php"><li>Workouts</li></a>
                <a href="../meditation/index.php"><li>Meditation</li></a>
                <a href="../Study/index.php"><li>Study</li></a>
                <a href="../Nutrition/index.php"><li>Nutrition</li></a>
                <a href="../about us/index.php"><li>About Us</li></a>
                <p style="color: white;"><?php echo $fname;?></p>
                <a href="../logout.php">Logout</a>
            </ul>
        </nav>
    </header>
    <section>
        <h2>Hello, <?php echo $fname; ?></h2>
    </section>
    <section>
        <h2>Login History</h2>
        <?php
        $query1 = mysqli_query($con, "select * from userlog where uid = '$id'");
        $row1 = mysqli_fetch_array($query);
        ?>
        <table>
            <thead>
                <tr>
                    <th>Login Date and Time</th>
                    <th>Logout Date and Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query1 = mysqli_query($con, "select * from userlog where uid='$id'");
                while($row1 = mysqli_fetch_array($query1)){
                ?>
                <tr>
                    <td><?php echo $row1['loginTime'];?></td>
                    <td><?php echo $row1['logout'];?></td>
                    <?php
                    if($row1['status'] == 1){
                        $status = "Success";
                    }
                    else{
                        $status = "Failed";
                    }
                    ?>
                    <td><?php echo $status?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <section>
        <h2>Exercises History</h2>
        <table>
            <thead>
                <tr>
                    <th>Exercise Name</th>
                    <th>Duration(in minutes)</th>
                    <th>Date and Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query2 = mysqli_query($con, "select * from exercises where uid='$id'");
                while($row2 = mysqli_fetch_array($query2)){
                ?>
                <tr>
                    <td><?php echo $row2['exercise_name']; ?></td>
                    <td><?php echo $row2['exercise_duration']; ?> minutes</td>
                    <td><?php echo $row2['time']; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <section>
        <h2>Calories History</h2>
        <table>
            <thead>
                <tr>
                    <th>Food name</th>
                    <th>Food Calories</th>
                    <th>Date and Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query3 = mysqli_query($con, "select * from foods where uid='$id'");
                while($row3 = mysqli_fetch_array($query3)){
                ?>
                <tr>
                    <td><?php echo $row3['food_name']; ?></td>
                    <td><?php echo $row3['food_calories']; ?> kcal</td>
                    <td><?php echo $row3['time']; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <section>
        <h2>Meditation History</h2>
        <table>
            <thead>
                <tr>
                    <th>Duration(in minutes)</th>
                    <th>Date and Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query4 = mysqli_query($con, "select * from meditation where uid='$id'");
                while($row4 = mysqli_fetch_array($query4)){
                ?>
                <tr>
                    <td><?php echo $row4['duration']; ?> minutes</td>
                    <td><?php echo $row4['time']; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <section>
        <h2>Study History</h2>
        <table>
            <thead>
                <tr>
                    <th>Book name</th>
                    <th>Duration(in minutes)</th>
                    <th>Date and Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query5 = mysqli_query($con, "select * from study where uid='$id'");
                while($row5 = mysqli_fetch_array($query5)){
                ?>
                <tr>
                    <td><?php echo $row5['bookname']; ?></td>
                    <td><?php echo $row5['duration']; ?> minutes</td>
                    <td><?php echo $row5['time']; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <section>
        <a href="./index.php"><button>Previous</button></a>
        <a href="../Gympage/index.php"><button>Home</button></a>
    </section>
</body>
</html>