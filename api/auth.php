<?php
session_start();


require "boot/connection.php";

$success = false;
$error = "";

if(	isset($_POST["email"]) && 
	isset($_POST["password"]) && 
	!empty($_POST["email"]) && 
	!empty($_POST["password"]))
{
	$stmt = mysqli_prepare($connection, "select * FROM users WHERE email=? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $_POST["email"], $_POST["password"]);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) === 0){
        $error = "Wrong credentials.";
    }else{
        $success = true;
    }
    $user = $result->fetch_assoc();


    $_SESSION["user"] = $user;

}else{
	$error = "Please fill out all fields";
}


header('Content-Type: application/json');
echo json_encode([
	"success" => $success,
	"error"	  => $error
]);