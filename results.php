<?php
include("db_connect.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>BMI calculator</title>

<style>

p.thick{
  font-weight: bold;
}

body{
    background-color: lightblue;
    font-family: 'Brush Script MT', cursive;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

a{
    padding: 10px;
    margin-top: 20px;
    border-radius: 5px;
    background: #0984e3;
    color: white;
    font-size: 16px;
    text-decoration: none;
}

a:hover{
    background: black;
}

.container{
    background: white;
    padding: 35px;
    border-radius: 12px;
    width: 350px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.underweight{color:blue;font-weight:bold;}
.normal{color:green;font-weight:bold;}
.overweight{color:orange;font-weight:bold;}
.obese{color:red;font-weight:bold;}

</style>
</head>

<body>

<div class="container">

<?php

if(isset($_POST["Firstname"], $_POST["Lastname"], $_POST["Age"], $_POST["Weight"], $_POST["Height"])) {

$firstName = htmlspecialchars($_POST["Firstname"]);
$lastName = htmlspecialchars($_POST["Lastname"]);
$age = htmlspecialchars($_POST["Age"]);
$weight = floatval($_POST["Weight"]);
$height = floatval($_POST["Height"]);

if($weight <= 0 || $height <= 0){
    echo "Invalid height or weight.";
    exit();
}

$heightInMeters = $height / 100;
$bmi = $weight / ($heightInMeters * $heightInMeters);
$bmi = round($bmi,1);

$sql = "INSERT INTO user (firstname, lastname, age, height, weight, bmi)
VALUES ('$firstName', '$lastName', '$age', '$height', '$weight', '$bmi')";

try{
    mysqli_query($conn, $sql);
    echo "User registered successfully.<br><br>";
}
catch(mysqli_sql_exception){
    echo "Could not register user.<br><br>";
}

if($bmi < 18.5){
    $category = "Underweight";
    $categoryClass = "underweight";
    $advice = "Consider consulting with a healthcare provider about healthy ways to gain weight.";
}
elseif($bmi < 25){
    $category = "Normal weight";
    $categoryClass = "normal";
    $advice = "Great job! Maintain your healthy weight with a balanced diet and regular exercise.";
}
elseif($bmi < 30){
    $category = "Overweight";
    $categoryClass = "overweight";
    $advice = "Consider incorporating more physical activity and making healthy food choices.";
}
else{
    $category = "Obese";
    $categoryClass = "obese";
    $advice = "It's recommended to consult with a healthcare provider for personalized advice.";
}
?>

<p class="thick">First name: <?php echo $firstName; ?></p>
<p class="thick">Last name: <?php echo $lastName; ?></p>
<p class="thick">Age: <?php echo $age; ?></p>
<p class="thick">Weight: <?php echo $weight; ?></p>
<p class="thick">Height: <?php echo $height; ?></p>

<br>

<div class="bmi-result">
<div>Your BMI is</div>
<div class="bmi-number"><?php echo $bmi; ?></div>
<div class="bmi-category <?php echo $categoryClass; ?>"><?php echo $category; ?></div>
</div>

<div class="bmi-scale">
<h3>BMI Categories</h3>
<div class="scale-item underweight">Underweight: &lt; 18.5</div>
<div class="scale-item normal">Normal weight: 18.5 - 24.9</div>
<div class="scale-item overweight">Overweight: 25 - 29.9</div>
<div class="scale-item obese">Obese: ≥ 30</div>
</div>

<div class="user-details">
<p><strong>Health Advice:</strong> <?php echo $advice; ?></p>
</div>

<?php
}

mysqli_close($conn);
?>

<a href="index.php">Back</a>

</div>

</body>
</html>