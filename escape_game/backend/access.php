<?php
include_once("./db.php");
session_start();

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

    $sql2 = "SELECT * FROM users WHERE `email`='$email' and `password`='$password'";
	$resultset = mysqli_query($con, $sql2) or die("database error:". mysqli_error($con));
	$row = mysqli_fetch_assoc($resultset);

    if($row)
    {
        $_SESSION['email']= $email;
        $_SESSION['login']=$row['id'];
        echo '<script type="text/javascript"> alert("Login Seccessfully!"); window.location.href="../index.php";</script>';  // alert message
	}
    else 
    {				
	    echo "<script>alert('This user is not exist!');window.location.href='../login.php';</script>";
	}
}

else if(isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `email`='$email'";

    $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
    $row = mysqli_fetch_assoc($resultset);

    if(!$row)
    {
        $sql = "INSERT INTO users(`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
        mysqli_query($con, $sql) or die("database error:". mysqli_error($con)."qqq".$sql);			
        echo '<script type="text/javascript"> alert("Created Successfully!"); window.location.href="../login.php";</script>';  // alert message
    }
    else {				
        echo '<script type="text/javascript"> alert("This email exist before!!"); window.location.href="../signup.php";</script>';  // alert message
    }
    
}

?>