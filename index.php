<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMIcalculator</title>
    <style>
body {
  background : linear-gradient(135deg, #74b9ff, #0984e3);
  align-items: center;
  font-family: 'Brush Script MT', 'cursive';
}

h1 {
  color: white;
  text-align: center;
  text-decoration-line: underline;
  text-decoration-style: solid;
  font-style: oblique;
}


button{
    width: center;
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
    background: white; 
}



</style>
</head>
<body>
  
      <h1 class= "oblique">BMI Calculator</h1>

    <form method="POST" action="results.php">
        <label for="fname">First Name</label>
        <input type="text" name="Firstname" placeholder="First name"/><br><br>

        <label for="lname">Last Name</label>
        <input type="text" name="Lastname" placeholder="Last name"/><br><br>

        <label for="Age">Age </label><input type="text" name="Age" size="1px">
        <label for="Weight">Weight (kg)</label><input type="text" name="Weight" size="1px"><br><br>
        <label for="Weight">Height (m)</label><input type="text" name="Height" size="1px"><br><br>
        <button type="Submit" id="buttonClick">Calculate</button>
    </form>
    
</body>
</html>