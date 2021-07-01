<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <title> PHP and MYSQL </title>
</head>
<body>

<?php

//inisialize the variable
$servername = "localhost:8111";
$username = "root";
$password = "";
$db="controlbase";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{
echo "Connected successfully";}

//write a query
if(isset($_POST['Forward'])){

    $query="SELECT * FROM controlbase WHERE 1";
    $result=mysqli_query($conn,$query);

    $query="INSERT INTO control (forward) VALUES ('forward')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "data successfully added ";
    }else{
        echo"Unable to add! error occur..";
    }

}else if(isset($_POST['Left'])){

    $query="SELECT * FROM controlbase WHERE 1";
    $result=mysqli_query($conn,$query);

    $query="INSERT INTO control (west) VALUES ('left')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "data successfully added ";
    }else{
        echo"Unable to add! error occur..";
    }

}else if(isset($_POST['Stop'])){

    $query="SELECT * FROM controlbase WHERE 1";
    $result=mysqli_query($conn,$query);

    $query="INSERT INTO control (stop) VALUES ('stop')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "data successfully added ";
    }else{
        echo"Unable to add! error occur..";
    }

}else if(isset($_POST['Right'])){

    $query="SELECT * FROM controlbase WHERE 1";
    $result=mysqli_query($conn,$query);

    $query="INSERT INTO control (east) VALUES ('right')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "data successfully added ";
    }else{
        echo"Unable to add! error occur..";
    }

}else if(isset($_POST['Backward'])){

    $query="SELECT * FROM controlbase WHERE 1";
    $result=mysqli_query($conn,$query);

    $query="INSERT INTO control (backward) VALUES ('backward')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "data successfully added ";
    }else{
        echo"Unable to add! error occur..";
    }

}

$conn->close();

?>

</body>
</html>