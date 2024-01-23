<?php
include('../config.php');
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href=".\style.css">
    <link rel="shortcut icon" type="x-icon" href=".\cals.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet"></link>
    <script src=".\script.js" charset="utf-8"></script>
    <title>BMI Calculator</title>
  </head>
  <body>
    <nav>
			<div class="logo"><i class="fas fa-dumbbell"></i><span>Morning Mentor</span></div>
			<a href="../Gympage/index.php" class="active"><li>Home</li></a>
				<a href="../workout/index.php"><li>Workouts</li></a>
				<a href="../meditation/index.php"><li>Meditation</li></a>
				<a href="../Study/index.php"><li>Study</li></a>
				<a href="../Nutrition/index.php"><li>Nutrition</li></a>
				<a href="../about us/index.php"><li>About Us</li></a>
				<p style="color: white;"><?php echo $_SESSION['username'];?></p>
		</nav>
    <form class="CalculateForm" method="post">
               <div class="card bg-dark text-white">
                   <h4 class="text-center text-danger card-header mb-4">Calorie Calculator</h4>
                   <div class="card-body">
                       <div class="row g-5">
                           <div class="col-sm-4">
                               <div>
                                   <h5>Age*</h5>
                                   <input class="form-control text-end" name="age" required="" type="number" value="25" />
                               </div>
                           </div>
                           <div class="col-sm-4">
                               <div>
                                   <h5>Gender*</h5>
                                   <div class="form-control">
                                       <div class="row">
                                           <div class="col-6 d-flex align-items-center">
                                               <input checked="" id="gender_male" name="gender" required="" type="radio" value="0" />
                                               <label class="ms-2">Male</label>
                                           </div>
                                           <div class="col-6 d-flex align-items-center">
                                               <input id="gender_female" name="gender" required="" type="radio" value="1" />
                                               <label class="ms-2">Female</label>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-sm-4">
                               <div>
                                   <h5>Body Fat*</h5>
                                   <div class="d-flex align-items-center">
                                       <input class="form-control text-end" name="bodyFat" required="" type="number" value="20" />
                                       <span class="btn ms-1 bg-warning">%</span>
                                   </div>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div>
                                   <h5>Height*</h5>
                                   <div class="d-flex align-items-center">
                                       <input class="form-control text-end" name="height" required="" type="number" value="180" />
                                       <span class="btn ms-1 bg-warning text-nowrap">cm</span>
                                   </div>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div>
                                   <h5>Weight*</h5>
                                   <div class="d-flex align-items-center">
                                       <input class="form-control text-end" name="weight" required="" type="number" value="65" />
                                       <span class="btn ms-1 bg-warning text-nowrap">kg</span>
                                   </div>
                               </div>
                           </div>
                           <div>
                               <h5>Activity*</h5>
                               <select class="form-select" name="activity" required="">
                                   <option value="1">Basal Metabolic Rate (BMR)</option>
                                   <option value="1.2">Sedentary: little or no exercise</option>
                                   <option value="1.375">Light: exercise 1-3 times/week</option>
                                   <option selected="" value="1.465">Moderate: exercise 4-5 times/week</option>
                                   <option value="1.55">Active: daily exercise or intense exercise 3-4 times/week</option>
                                   <option value="1.725">Very Active: intense exercise 6-7 times/week</option>
                                   <option value="1.9">Extra Active: very intense exercise daily, or physical job</option>
                               </select>
                           </div>
                           <div class="col-sm-6">
                               <div>
                                   <h5>Result Unit*</h5>
                                   <div class="form-control">
                                       <div class="row">
                                           <div class="col-6 d-flex align-items-center">
                                               <input checked="" id="unit_calories" name="unit" required="" type="radio" value="Calories" />
                                               <label class="ms-2">Calories</label>
                                           </div>
                                           <div class="col-6 d-flex align-items-center">
                                               <input id="unit_kilo" name="unit" required="" type="radio" value="kilojoules" />
                                               <label class="ms-2">kilojoules</label>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div>
                                   <h5>BMR estimation formula*</h5>
                                   <div class="row g-3">
                                       <div class="col-sm-12 d-flex align-items-center">
                                           <input checked="" id="Mifflin_St_Jeor" name="formula" required="" type="radio" value="0" />
                                           <label class="ms-2">Mifflin St Jeor</label>
                                       </div>
                                       <div class="col-sm-12 d-flex align-items-center">
                                           <input id="Revised_Harris_Benedict" name="formula" required="" type="radio" value="1" />
                                           <label class="ms-2">Revised Harris-Benedict</label>
                                       </div>
                                       <div class="col-sm-12 d-flex align-items-center">
                                           <input id="Katch_McArdle" name="formula" required="" type="radio" value="2" />
                                           <label class="ms-2">Katch-McArdle</label>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="ans_calculate"></div>
                   <div class="text-center mt-4 card-footer">
                       <button class="btn btn-success" onclick="calculateCalorie(this)" type="button">
                           <i class="fas fa-calculator me-3"></i>
                           Calculate
                       </button>
                   </div>
               </div>
           </form>

  </body>
</html>
