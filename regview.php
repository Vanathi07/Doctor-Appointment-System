<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="margin: 50px; background-color: skyblue">

    <h1>Booked Appointments</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Location</th>
                <th>Contact</th>
                <th>BookedDate</th>
                <th>Description</th>
            </tr>
        </thead>  
        
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "appoint";

            $connection = new mysqli($servername,$username,$password,$database);

            if($connection->connect_error){
                die("Connection failed: ". $connection->connect_error);
            }

            $sql = "SELECT * FROM book_app";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query: ". $connection->error);
            }

            while($row = $result->fetch_assoc()){
                echo"<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name1"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["gender"] . "</td>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["loc"] . "</td>
                    <td>" . $row["contact"] . "</td>
                    <td>" . $row["appoint_date"] . "</td>
                    <td>" . $row["descr"] . "</td>
                </tr>";
            }
            ?>
            
        </tbody>
    </table>
</body>
</html>



