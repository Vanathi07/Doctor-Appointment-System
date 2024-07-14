<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appoint";
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name1"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $loc = $_POST["loc"];
    $contact = $_POST["contact"];
    $appoint_date=$_POST["appoint_date"];
    $descr=$_POST["descr"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO book_app(name1,email,gender,age,loc,contact,appoint_date,descr) VALUES ('$name','$email','$gender','$age','$loc','$contact','$appoint_date','$descr')";

     if($conn->query($sql) == TRUE){
        echo "Booking Successfully";
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>