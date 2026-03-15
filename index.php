<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BMIcalculator</title>

<style>

body{
  background: linear-gradient(135deg, #74b9ff, #0984e3);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  font-family: 'Brush Script MT', cursive;
}


.container{
  background: white;
  padding: 30px;
  border-radius: 10px;
  width: 350px;
  text-align: center;
}

h1{
  color: #0984e3;
  text-decoration: underline;
  font-style: oblique;
}

input{
  width: 90%;
  padding: 8px;
  margin-top: 5px;
}

button{
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  border: none;
  border-radius: 5px;
  background: #0984e3;
  color: white;
  font-size: 16px;
  cursor: pointer;
}

button:hover{
  background: #74b9ff;
}

</style>
</head>

<body>

<div class="container">

<h1>BMI Calculator</h1>

<form method="POST" action="results.php">

<label>First Name</label>
<input type="text" name="Firstname" placeholder="First name" pattern="[A-Za-z ]+" required>
<br><br>

<label>Last Name</label>
<input type="text" name="Lastname" placeholder="Last name" pattern="[A-Za-z ]+" required>
<br><br>

<label>Age</label>
<input type="text" name="Age" min="12" required>
<br><br>

<label>Weight (kg)</label>
<input type="text" name="Weight">
<br><br>

<label>Height (m)</label>
<input type="text" name="Height">
<br><br>

<button type="submit">Calculate</button>

</form>

</div>

</body>
</html>