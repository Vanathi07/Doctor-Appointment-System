<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    
    <?php if (isset($user)): ?>
        
        
<style>
table,th,td
{
border:2px solid black;
border-collapse:collapse;
padding:10px;
background-color:#5959F3;
}
td{
color:#ADEAEA;
}
th{
color:"#871F78";
}
</style>
</head>
<body style="background-color:skyblue">
<h1 style="text-align:center">DOCTOR APPOINTMENT SYSTEM</h1>
<style>
ul{
	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
	background-color:black;
}
li{
float:left;
}
li a{
    display:block;
    color:white;
    font-size=60;
    text-align:center;
    padding:40px;
    text-decoration:none;
}
li a:hover{
background-color:#000000;
}
</style>
<ul style="list-style-type:none">
 <li><a href="index (1).html"><h2 style="color:white">PATIENT PORTAL</h2></a></li>
 <li><a href="regview.php"><h2 style="color:white">DOCTOR PORTAL</h2></a></li>
</ul><br>

        
        <button><a href="logout.php"><h3>Log out</h3></a></button>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    