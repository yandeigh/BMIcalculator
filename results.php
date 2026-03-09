<head>
<title>BMI calculator</title>
<style>

p.thick {
  font-weight: bold;
}

body{
    background-color: lightblue;
    font-family: 'Brush Script MT', 'cursive';
}

a {
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

a {
    background: black;
}

.container{
    background:white;
    padding:35px;
    border-radius:12px;
    width:350px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}
</style>

</head>
<body>
    <div class="container">
    <p class="thick">First name:<?php echo $_POST["Firstname"];?></p>
    <p class="thick">Last name:<?php echo $_POST["Lastname"];?></p>
    <p class="thick">Age:<?php echo $_POST["Age"];?></p>
    <p class="thick">Weight:<?php echo $_POST["Weight"];?></p>
    <p class="thick">Height:<?php echo $_POST["Height"];?></p>
    <a href="index.php">Back</a>
</body>

</html>